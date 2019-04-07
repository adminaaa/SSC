<?php

namespace Mobile\Controller;

use Think\Controller;

class PublicController extends CommonController
{
  public function __construct()
  {
    parent::__construct();
  }

  function login()
  {
    if ($_SESSION['userinfo']) {
      $this->error('你已经登录,请到游戏大厅进行游戏', U('/'));
    } else {
      $this->display();
    }

  }

  function register()
  {
    if ($_SESSION['userinfo']) {
      $this->error('你已经登录,请先退出再注册', U('Member/index'));
      exit();
    }
    //无邀请码
    $defaulttjcode = M('setting')->where("name='defaulttjcode'")->getField('value');
    $linkid = I('linkid', 0, 'intval');
    $tgid = I('tgid', 0, 'intval');
    if ($linkid) {
      $agentlinkpath = RUNTIME_PATH . '/agentlink/';
      $file = $agentlinkpath . $linkid . '.php';
      $_t = time();
      if (!is_file($file) || $_t - filemtime($file) > 3600) {
        $apiparam = array();
        $apiparam['linkid'] = $linkid;
        $_api = new \Lib\api;
        $returnlink = $_api->sendHttpClient('Api/Member/getagentlink', $apiparam);
        if ($returnlink['sign'] == true && $returnlink['linkinfo']) {
          $linkinfo = $returnlink['linkinfo'];
          F($linkinfo['id'], $linkinfo, $agentlinkpath);
          //cookie('tgid', $linkinfo['uid']);
          $tgid = $linkinfo['uid'];
          $this->assign('linkinfo', $linkinfo);
        }
      } else {
        $linkinfo = F($linkid, '', $agentlinkpath);
        if ($linkinfo) {
          //cookie('tgid', $linkinfo['uid']);
          $tgid = $linkinfo['uid'];
          $this->assign('linkinfo', $linkinfo);
        }
      }
    }
    if ($tgid) {
      //cookie('tgid', $tgid);
    }
    if (cookie('tgid')) {
      //$this->assign('tgid', cookie('tgid'));
    }
    $this->assign('tgid', $tgid);
    if (IS_POST) {
      $post = I('post.');
      if (isset($post['reccode']) && is_numeric($post['reccode'])) {
        $apiparam = array();
        $apiparam['where'] = ['uid' => $post['reccode']];
        $_api = new \Lib\api;
        $Result = $_api->sendHttpClient('Api/Member/getuserinfo', $apiparam);
        if ($Result['sign'] == false) {
          unset($Result['data']);
          $Result['sign'] = false;
          $Result['message'] = '推荐码验证失败';
          cookie('tgid', NULL);
          $this->ajaxReturn($Result);
          exit;
        }
        if ($Result['sign'] == false) {
          unset($Result['data']);
          $Result['sign'] = false;
          $Result['message'] = '推荐码验证失败';
          cookie('tgid', NULL);
          $this->ajaxReturn($Result);
          exit;
        }
        if ($Result['data']['proxy'] != 1) {
          unset($Result['data']);
          $Result['sign'] = false;
          $Result['message'] = '推荐码无效';
          cookie('tgid', NULL);
          $this->ajaxReturn($Result);
          exit;
        }
      }


      //验证用户名
      $_paten = "/\/|\~|\!|\@|\#|\\$|\%|\^|\&|\*|\(|\)|\_|\+|\{|\}|\:|\<|\>|\?|\[|\]|\,|\.|\/|\;|\'|\`|\-|\=|\\\|\|/";
      if (!$post['username'] || preg_match($_paten, $post['username']) || mb_strlen($post['username'], 'utf-8') < 2 || mb_strlen($post['username'], 'utf-8') > 12) {
        $Result = [];
        $Result['sign'] = false;
        $Result['message'] = '用户名为2-12字母与数字组或中文的字符!';
        $this->ajaxReturn($Result);
        exit;
      }
      //验证密码
      if (!$post['password'] || !preg_match("/^[\w\W]{6,16}$/", $post['password'])) {
        $Result = [];
        $Result['sign'] = false;
        $Result['message'] = '请输入6-16位的密码';
        $this->ajaxReturn($Result);
        exit;
      }
      if (!$post['cpassword'] && !preg_match("/^[\w\W]{6,16}$/", $post['cpassword'])) {
        $Result = [];
        $Result['sign'] = false;
        $Result['message'] = '请输入6-16位的重复密码';
        $this->ajaxReturn($Result);
        exit;
      }
      if ($post['cpassword'] != $post['password']) {
        $Result = [];
        $Result['sign'] = false;
        $Result['message'] = '两次密码输入不一致';
        $this->ajaxReturn($Result);
        exit;
      }
      //$tradepassword = implode('',$post['tradepassword']);
      $tradepassword = $post['tradepassword'];
      if (!$tradepassword || !preg_match("/^[\w\W]{4,16}$/", $tradepassword)) {
        $Result = [];
        $Result['sign'] = false;
        $Result['message'] = '请输入4-16位的提款密码';
        $this->ajaxReturn($Result);
        exit;
      }
      // qq、tel验证
      if (isset($post['qq'])) {
        if (!preg_match("/^[1-9][0-9]{4,9}$/", $post['qq'])) {
          $Result = [];
          $Result['sign'] = false;
          $Result['message'] = '请输入5-10位的QQ号码';
          $this->ajaxReturn($Result);
          exit;
        }
      }
      if (isset($post['tel'])) {
        if (!preg_match("/^(((13[0-9]{1})|(15[0-9]{1})|(17[0-9]{1})|(18[0-9]{1}))+\d{8})$/", $post['tel'])) {
          $Result = [];
          $Result['sign'] = false;
          $Result['message'] = '请输入正确的手机号码!';
          $this->ajaxReturn($Result);
          exit;
        }
      }
      $apiparam = array();
      $Result = array();
      $apiparam['username'] = $post['username'];
      $_api = new \Lib\api;
      $Result = $_api->sendHttpClient('Api/Member/checkuername', $apiparam);
      if (!$Result || $Result['sign'] == false) {
        $Result = [];
        $Result['sign'] = false;
        $Result['message'] = $Result['message'] ? $Result['message'] : '注册用户名验证失败';
        $this->ajaxReturn($Result);
        exit;
      }
      if ($Result['data']['ishas'] == 1) {
        $Result = [];
        $Result['sign'] = false;
        $Result['message'] = '用户名已被注册';
        $this->ajaxReturn($Result);
        exit;
      }

      $data = [];
      $ip = get_client_ip();
      $data['username'] = $post['username'];
      $data['parentid'] = $post['reccode'];
      $data['password'] = $post['password'];
      $data['tradepassword'] = $tradepassword;
      $data['qq'] = $post['qq'];
      $data['phone'] = $data['tel'] = $post['tel'] ? $post['tel'] : '';
      $data['proxy'] = (isset($post['proxy']) && in_array($post['proxy'], [1, 0])) ? intval($post['proxy']) : 0;
      $data['isnb'] = 0;
      $data['regip'] = $ip;
      $data['source'] = 'mobile版注册';
      $data['loginsource'] = 'mobile';

      if ($linkinfo && $_POST['linkid']) {
        $data['source'] = '推广链接注册';
        $data['linkid'] = $_POST['linkid'];
      }
      $data['regtime'] = time();
      $apiparam = array();
      $apiparam['data'] = $data;
      $_api = new \Lib\api;
      $Result = $_api->sendHttpClient('Api/Member/register', $apiparam);

      if (is_array($Result) && $Result['sign'] == true && $Result['data']['regisok'] == 1) {
        $return['sign'] = true;
        $return['message'] = '注册成功';
        //保存登陆信息
        if ($Result['auth']['member_auth_id'] && $Result['auth']['member_sessionid']) {
          session('member_sessionid', $Result['auth']['member_sessionid']);
          session('member_auth_id', $Result['auth']['member_auth_id']);
          $return['islogin'] = '1';
        }
        $this->ajaxReturn($Result);
        exit;
//				$this->success('恭喜你!注册成功',U('Member/index'));
      } else {
        $Result = [];
        $Result['sign'] = false;
        $Result['message'] = $Result['message'] ? $Result['message'] : '注册失败';
        $this->ajaxReturn($Result);
        exit;
      }
      exit;
    }
    $this->assign('defaulttjcode', $defaulttjcode);
    $this->display();
  }

  function forgetPaw()
  {
    if (IS_POST) {
      $userName = I('userName');
      $verCode = I('verCode');
      $verify = new \Think\Verify(array('reset' => true));
      if (!$userName) {
        echo '<script>alert("请填写用户名！");window.location.href="' . url('Public/forgetPaw') . '";</script>';
        exit;
      }
      /*			if(empty($verCode) && !$verify->check($verCode)) {
                            echo'<script>alert("验证码错误！");window.location.href="'.url('Public/forgetPaw').'";</script>';
                            exit;
                        }*/
      $hasuser = M('member')->where(['username' => $userName])->find();
      if (!$hasuser) {
        echo '<script>alert("用户未找到！");window.location.href="' . url('Public/forgetPaw') . '";</script>';
        exit;
      }
      cookie('GetUserName', $userName);
      redirect(url('Public/forgetPaw1', ['userName' => $userName]));
      exit;
    }
    $this->display();
  }

  function forgetPaw1()
  {
    $GetUserName = cookie('GetUserName');
    if (!$GetUserName) {
      redirect(url('Public/forgetPaw'));
      exit;
    }
    $hasuser = M('member')->where(['username' => $GetUserName])->find();
    if (!$hasuser) {
      redirect(url('Public/forgetPaw'));
      exit;
    }
    if (IS_POST) {
      $yztype = I('yztype');
      $yztext = I('yztext');
      if ($yztype == 'tel') {
        if (!$hasuser['tel']) {
          echo '<script>alert("您未绑定手机号码！");window.location.href="' . url('Public/forgetPaw1') . '";</script>';
          exit;
        } elseif ($yztext != $hasuser['tel']) {
          echo '<script>alert("手机号码验证错误！");window.location.href="' . url('Public/forgetPaw1') . '";</script>';
          exit;
        } else {
          echo '<script>alert("手机验证成功！");window.location.href="' . url('Public/forgetPaw2') . '";</script>';
        }
      } elseif ($yztype == 'email') {
        if (!$hasuser['email']) {
          echo '<script>alert("您未绑定邮箱！");window.location.href="' . url('Public/forgetPaw1') . '";</script>';
          exit;
        } elseif ($yztext != $hasuser['email']) {
          echo '<script>alert("绑定邮箱验证错误！");window.location.href="' . url('Public/forgetPaw1') . '";</script>';
          exit;
        } else {
          echo '<script>alert("邮箱验证成功！");window.location.href="' . url('Public/forgetPaw2') . '";</script>';
        }
      } elseif ($yztype == 'qq') {
        if (!$hasuser['qq']) {
          echo '<script>alert("您未绑定QQ！");window.location.href="' . url('Public/forgetPaw1') . '";</script>';
          exit;
        } elseif ($yztext != $hasuser['qq']) {
          echo '<script>alert("QQ验证错误！");window.location.href="' . url('Public/forgetPaw1') . '";</script>';
          exit;
        } else {
          echo '<script>alert("qq验证成功！");window.location.href="' . url('Public/forgetPaw2') . '";</script>';
        }
      }
      $code = rand_string('4', 1);
      session('forgetPawcode', $code);
      exit;
    }
    $this->display();
  }

  function forgetPaw2()
  {
    $GetUserName = cookie('GetUserName');
    if (empty($GetUserName)) $this->error('非法操作');
    $forgetPawcode = session('forgetPawcode');
    /*if(!$GetUserName || !$forgetPawcode){
      redirect(url('Public/forgetPaw'));exit;
    }*/
    $hasuser = M('member')->where(['username' => $GetUserName])->find();

    if (!$hasuser) {
      redirect(url('Public/forgetPaw'));
      exit;
    }
    if (IS_POST) {
      $pa = I('pa');
      $pa1 = I('pa1');
      /*			$yztext = I('yztext');
            if($yztext!=$forgetPawcode){
              echo'<script>alert("邮件验证码错误！");window.location.href="'.url('Public/forgetPaw2').'";</script>';
              exit;
            }*/
      if (strlen($pa) < 6) {
        echo '<script>alert("密码至少设置6位字符！");window.location.href="' . url('Public/forgetPaw2') . '";</script>';
        exit;
      }
      if ($pa != $pa1) {
        echo '<script>alert("两次密码输入不一致！");window.location.href="' . url('Public/forgetPaw2') . '";</script>';
        exit;
      }
      $newpas = sys_md5($pa);
      $editint = M('member')->where(['id' => $hasuser['id']])->setField(['password' => $newpas]);
      if ($editint) {
//				cookie('setPawIsOk',1);
        $this->success('密码重置成功', U('Public/login'));
        exit;
      } else {
        echo '<script>alert("密码重置失败！");window.location.href="' . url('Public/forgetPaw2') . '";</script>';
        exit;
      }
      exit;
    }
    $this->display();
  }


  function LoginDo()
  {
    if (!IS_POST) {
      echo json_encode(["sign" => false, "message" => "非法操作"]);
      exit;
    }
    $param = I('post.');
    if (empty($param['nocode'])) {
      if (!$param['name'] | !$param['pass']/* | !$param['code']*/) {
        $Result = array("sign" => false, "message" => "登录信息不完整");
        $this->ajaxReturn($Result);
        exit;
      }
      /*			$verify = new \Think\Verify(['reset' => false]);
            if(!$verify->check($param['code'])) {
              $this->ajaxReturn(["sign"=>false,"message"=>"验证码错误"]);exit;
            }*/
    }

    if (!$param['name'] || strlen($param['name']) < 3) {
      $return = [];
      $return['sign'] = false;
      $return['message'] = '请输入正确用户名!';
      $this->ajaxReturn($return);
      exit;
    }
    if (!$param['pass'] && !preg_match("/^[\w\W]{6,16}$/", $param['pass'])) {
      $return = [];
      $return['sign'] = false;
      $return['message'] = '请输入6-16位的登陆密码';
//			echo jsonreturn($Result);exit;
      $this->ajaxReturn($return);
      exit;
    }
    $data = [];
    $data['username'] = $param['name'];
    $data['nocode'] = $param['nocode'];
    $data['password'] = $param['pass'];
    $data['loginip'] = get_client_ip();
    $data['source'] = 'mobile';
    $userinfo = M('Member')->cache(300)->field('loginip,logintime')->where("username='{$param['name']}'")->find();
    $apiparam = array();
    $apiparam['data'] = $data;
    $_api = new \Lib\api;
    $Result = [];
    $Result = $_api->sendHttpClient('Api/Member/signin', $apiparam);
    //$Result = [];
    if (is_array($Result) && $Result['sign'] == true) {
      $return['sign'] = true;
      $return['message'] = '登陆成功';
      //保存登陆信息
      if ($Result['auth']['member_auth_id'] && $Result['auth']['member_sessionid']) {
        session('member_sessionid', $Result['auth']['member_sessionid']);
        session('member_auth_id', $Result['auth']['member_auth_id']);
        $lastlogin['lastip'] = $userinfo['loginip'];
        $lastlogin['lasttime'] = date("Y-m-d H:i:s", $userinfo['logintime']);
        //$lastlogin['login_address'] = json_decode(getIpAddress($lastlogin['lastip']))->province . "," . json_decode(getIpAddress($lastlogin['lastip']))->city;
        session('lastlogin', $lastlogin);
        $return['islogin'] = '1';

        $okamountcount = M('touzhu')->cache(300)->where("isdraw=1 AND uid='{$Result['auth']['member_auth_id']}' ")->SUM('okamount');
        $k3names = M('touzhu')->cache(300)->distinct(true)->where("uid='{$Result['auth']['member_auth_id']}' ")->field('cptitle,cpname')->limit(8)->select();
        session("okamountcount", $okamountcount);
        session("k3names", $k3names);
        $return['data']['islogin'] = '1';
      }
      $this->ajaxReturn($return);
      exit;
    } else {
      $Result['sign'] = false;
      $Result['message'] = $Result['message'] ? $Result['message'] : '登陆失败';
      $this->ajaxReturn($Result);
      exit;
    }
    exit;

  }

  function LoginOut()
  {
    M('membersession')->where("userid='{$_SESSION['userinfo']['id']}'")->delete();
    session('userinfo', null);
    redirect(U('Member/index'));
  }

  function verify()
  {
    ob_clean();
    $imageW = intval($_REQUEST['imageW']) ? intval($_REQUEST['imageW']) : 150;
    $imageH = intval($_REQUEST['imageH']) ? intval($_REQUEST['imageH']) : 35;
    $fontSize = intval($_REQUEST['fontSize']) ? intval($_REQUEST['fontSize']) : 17;
    verify($imageW, $imageH, $fontSize);
  }
}

?>