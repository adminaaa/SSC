<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<title><?php echo GetVar('webtitle');?></title>
	<meta name="keywords" content="<?php echo GetVar('keywords');?>" />
	<meta name="description" content="<?php echo GetVar('description');?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" >
	<link rel="stylesheet" href="/resources/css2/bootstrap.min.css">
	<link rel="stylesheet" href="/resources/css2/reset.css">
	<link rel="stylesheet" href="/resources/css2/icon.css">
	<link rel="stylesheet" href="/resources/css2/header.css">
	<link rel="stylesheet" href="/resources/css2/main.css">
	<link rel="stylesheet" href="/resources/css2/login.css">
	<link rel="stylesheet" href="/resources/css2/footer.css">
</head>
<body>
<!--header start-->
<script>
    var WebConfigs = {
        "ROOT" : "",
        'IMG' : "/resources/images",
    }
</script>
<script type="text/javascript" src="/resources/js/jquery-3.1.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="/resources/css/artDialog.css" />
<link rel="stylesheet" type="text/css" href="/resources/css/headernav.css" />
<script type="text/javascript" src="/resources/js/artDialog.js"></script>
<script type="text/javascript" src="/resources/js/way.min.js"></script>
<script type="text/javascript" src="/resources/main/common.js"></script>
<header class="header" style="height:35px;">
    <div class="container claerfix">
        <div class="pull-left">
            Hi，欢迎来到<?php echo GetVar('webtitle');?>！
        </div>

        <?php if(!empty($userinfo["username"])): ?><div class="pull-right user_login_info">
                <ul>
                    <!--<p class="margin_0">性别：<span><?php if(($userinfo['sex']) == "1"): ?>男<?php endif; if(($userinfo['sex']) == "2"): ?>女<?php endif; if(($userinfo['sex']) == ""): ?>保密<?php endif; ?></span></p>-->
                    <li class="user_login_info1">
                        <a  href="<?php echo U('Member/index');?>" class="user_header" data-html="true" class="user_header" data-container="body" data-toggle="popover" data-placement="bottom"data-content='<div class="ceng"><div class="media"><div class="media-left"><a href="<?php echo U('Member/index');?>"><img src="<?php echo ($userinfo["face"]); ?>" alt="" class="media-boject img-circle"></a><p><?php echo ($userinfo["username"]); ?></p></div><div class="media-body" style="padding-bottom:10px;">
                <p class="margin_0">账号：<span><?php echo ($userinfo["username"]); ?></span></p>
                <p class="margin_0">等级：<span><?php echo ($userinfo["groupname"]); ?></span></p>
                <p class="margin_0">头衔：<span><?php if(($userinfo['groupname']) == "代理"): ?>总代理 <?php else: echo ($userinfo["touhan"]); endif; ?></span></p>
                <p class="margin_0">累积中奖：<span><?php echo (session('okamountcount')); ?></span></p>
            </div>
            <div class="media-footer">
                <?php if(is_array($_SESSION['k3names'])): $i = 0; $__LIST__ = $_SESSION['k3names'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Game/k3');?>?code=<?php echo ($value['cpname']); ?>" title="<?php echo ($value["cptitle"]); ?>" class="color_res" style="font-size:5px;"><span style="color:#333;display: block;margin-top:4px;"><?php echo (substr($value["cptitle"],0,6)); ?></span><i class="iconfont">&#xe607;</i></a><?php endforeach; endif; else: echo "" ;endif; ?>
            </div></div></div>'>
    <img class="img-circle"  src="<?php echo ($userinfo["face"]); ?>" alt="">
    <?php echo ($userinfo['username']); ?>
    </a>
    <a class="user_info" style="display:none">
        0
    </a>
    <div class="info_sum_box" style="display: none;">
        <div class="info_sum clearfix">
            <a href="" class="pull-left">
                我的未读消息
                (<em>0</em>)
            </a>
            <a href="" class="pull-right">
                更多
            </a>
        </div>
    </div>
    </li>
    <li class="user_login_info2">
        <a href="<?php echo U('Member/index');?>" class="my_account">
            我的账户
            <i class="iconfont">&#xe6a1;</i>
        </a>
        <div class="user_login_info2_list" style="display:none;">
            <i class="user_login_info2_i"></i>
            <?php if($userinfo["proxy"] == '1'): ?><a href="<?php echo U('Member/Agent');?>">代理中心</a><?php endif; ?>
            <a href="<?php echo U('Member/betRecord');?>">投注记录</a>
            <a href="<?php echo U('Account/dealRecord');?>">交易记录</a>
            <a href="<?php echo U('Member/ziliao');?>">个人信息</a>
            <a href="<?php echo U('Member/index');?>">安全中心</a>
        </div>
    </li>
    <li class="user_login_info3">
        余额：
						<span class="show_money">
							<em class="smallmoney" style="color:#F70B0F;"><?php echo ($userinfo['balance']); ?></em>
							<i class="iconfont refresh_money">&#xe602;</i>
							<em class="hide_money_btn">隐藏</em>
						</span>
						<span class="hide_money" style="display:none;">
							已隐藏
							<em class="show_money_btn">显示</em>
						</span>
    </li>
    <li class="xima l">洗码：<span class="c-green" style="color:green;" way-data="user.xima">0</span></li>
    <li class="user_login_info4">
        <a href="<?php echo U('Account/bankRecharge');?>">充值</a>
    </li>
    <li class="user_login_info5">
        <a href="<?php echo U('Account/withdrawals');?>">提现</a>
    </li>
    <li class="user_login_info6">
        <a href="<?php echo U('Public/LoginOut');?>">退出</a>
    </li>
    <li>
        <a href="<?php echo GetVar('kefuthree');?>"    target="_blank"   class="keufBox" style="margin-left: 0px;"></a>
    </li>
    <li style="padding:0;line-height: 49px;">
        <a href="<?php echo GetVar('kefuqq');?>"    target="_blank">
            <img src="/resources/images/qq.gif" width="20" height="20" style="vertical-align: super;" />
        </a>
    </li>
    </ul>
    </div>
    <?php else: ?>
    <div class="pull-right user_login_info ">
        <a style="margin:0;float:left;" href="<?php echo U('Public/login');?>">亲，请登录</a>
        <em style="margin:0 3px;color:#ccc;float:left;">|</em>
        <a style="float:left;" href="<?php echo U('Public/register');?>">用户注册</a>
        <em style="margin:0 3px;color:#ccc;float:left;">|</em>
        <a style="float:left;" href="<?php echo U('Agent/index');?>" >代理中心</a>
        <a href="<?php echo GetVar('kefuthree');?>"    target="_blank"   class="keufBox pull-left"></a>
        <a href="https://wpa.qq.com/msgrd?v=3&uin=<?php echo GetVar('kefuqq');?>&site=qq&menu=yes"    target="_blank">
            <img src="/resources/images/qq.gif" width="20" height="20" style="vertical-align: super;float:left;margin-top:4px;" />
        </a>

    </div><?php endif; ?>
    </div>
</header>

<script>
    var ISLOGIN = "<?php echo ($userinfo["id"]); ?>";
</script>

<style>

</style>

<div class="header head8">
   <div class="nav">
    <div class="container fix">
     <h3><a href="/"><img style="width: 210px;" src="/903435630347672970.png" /></a></h3> 
     <!----> 
     <ul class="navItem fix flr" style="position: relative;">
      <li class="" id="navIndex"><a href="/">首页</a></li> 
      <!---->
	  <li class="" id="navZRVideo"><a href="<?php echo U('Index/zrvideo');?>">真人视讯</a></li>
      <li class="" id="navLottery"><a href="<?php echo U('Index/lottery');?>">购彩大厅</a></li> 
      <!---->
      <li class="" id="navActivity"><a href="<?php echo U('Activity/index');?>">活动中心</a></li> 
      <!---->
      <li class="" id="navMobile"><a href="<?php echo U('Index/mobile');?>">手机购彩</a></li> 
      <!---->
      <li class="" id="navSecurityCenter"><a href="<?php echo U('Member/index');?>">我的账户</a></li> 
      <!---->
      <li class="" id="navHelp"><a href="<?php echo U('News/lists',array('catid'=>33));?>">帮助指南</a></li> 
      <!----> 
      <span></span>
     </ul>
    </div>
   </div>
  </div>
  

 
<script>
    $(function () {
        $('.refresh_money').click(function () {
            $.ajax({
                url:"<?php echo U('Account/refreshmoney');?>",
                type:'POST',
                success :function (data) {
                    $('.smallmoney').html(data);
                }
            })
        })

    })
</script>
<link rel="stylesheet" type="text/css" href="/resources/css/common.css" />
<link rel="stylesheet" type="text/css" href="/resources/css/layout.css" />
<link rel="stylesheet" type="text/css" href="/resources/css/style.css" />
<link rel="stylesheet" type="text/css" href="/resources/css/artDialog.css" />
<script type="text/javascript" src="/resources/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/resources/js/artDialog.js"></script>
<script type="text/javascript" src="/resources/js/index.js"></script>
<script src="/resources/js2/require.js" data-main="/resources/js2/homePage"></script>
<div class="login_main">
	<div class="login_bg" style="height:540px">
		<div class="login_title">
			<h2 class="margin_0">用户注册</h2>
			<p><?php echo ($mingren); ?>都已经注册了，赶紧加入吧！注册后系统将随机分配一张个性的头像。</p>
		</div>
		<div class="login_input">
			<form method="post" id="form1" class="ruivalidate_form_class" checkby_ruivalidate  onSubmit="return check_form(this)"  action="<?php echo U('Public/register');?>">
				<input type="hidden" name="action" value="register_agent" />
				<?php $defaulttjcode = C("defaulttjcode"); ?> 
				<?php if($defaulttjcode != '0' ): ?><dl style="padding:0;padding-left:20%;margin-bottom: 20px;margin-top: -20px;">
						<dd style="font-size: 12pt;color: #333333;">无推荐代码请输入：<?php echo ($defaulttjcode); ?></dd>
					</dl><?php endif; ?>
					<div class="login_user user_commom_style">
					<span>邀请码：</span>
						<?php if(isset($linkinfo)): ?><input type="hidden" name="linkid" value="<?php echo ($linkinfo["id"]); ?>"  /><?php endif; ?>
						<input type="text" <?php if($tgid != ''): ?>readonly<?php endif; ?> value="<?php echo ($tgid); ?>" id="reccode" class="input fadeIn delay1"
							size="60" name="reccode" maxlength="16"  placeholder="请输入4-12位的推荐代码" />

					<em class="checkInput">
						<i class="iconfont"></i>
						<span></span>
					</em>
					<!--	<input  type="text" placeholder="请输入邀请码"  class="text_accont"  style="border-radius:4px;"  id="reccode" name="reccode" /><em class="Validform_checktip"></em>-->
				</div>
				<div class="login_pass user_commom_style">
					<span>账号：</span>
					<input  type="text"  class="text_accont" placeholder="请输入账号"  style="border-radius:4px;"  id="userName" name="username"  verify="isLoginName" datatype="/[\w\W]+/" ajaxurl="<?php echo U('Public/checkusername');?>" errormsg="用户名格式错误，可以中文英文字符数字！" nullmsg="请填写用户名！"/>
					<em class="checkInput">
						<i class="iconfont"></i>
						<span></span>
					</em>
				</div>
				<div class="login_pass user_commom_style">
					<span>设置密码：</span>
					 <input  type="password" style="border-radius:4px;"  placeholder="请输入密码"   class="text_accont" name="password" id="passWord" plugin="passwordStrength" errormsg="密码范围在6~16位之间！" nullmsg="请设置密码！" datatype="s6-16"/>
					<em class="checkInput">
						<i class="iconfont"></i>
						<span></span>
					</em>
				</div>
				<div class="login_pass user_commom_style">
					<span>确认密码：</span>
					<input  type="password" id="qpassWord"  placeholder="请再次输入密码"  class="text_accont" style="border-radius:4px;"  name="cpassword" datatype="*6-16" recheck="password" nullmsg="请再输入一次密码！" errormsg="您两次输入的账号密码不一致！"/>
					<em class="checkInput">
						<i class="iconfont"></i>
						<span></span>
					</em>
				</div>
				<div class="login_pass user_commom_style">
					<span>资金密码：</span>
					<input  type="password" id="qpassWord" placeholder="请输入资金密码"  class="text_accont" style="border-radius:4px;"  name="tradepassword" datatype="*6-16" recheck="password" nullmsg="请输入资金密码！"/>
					<em class="checkInput">
						<i class="iconfont"></i>
						<span></span>
					</em>
				</div>
				<div class="login_pass user_commom_style position_r">
					<span>验证码：</span>
					<input  type="text" class="text_form" placeholder="请输入验证码"  name="code" maxlength="10"  isNot="true"  verify="isAll" msg="请输入验证码" style="border-radius:4px;width:12em;" />
					<em class="checkInput" style="margin-left: 145px;">
						<i class="iconfont"></i>
						<span></span>
					</em>
					<img class="v_code" src="<?php echo U('Public/verify',array('imageW'=>130,'imageH'=>40,'fontSize'=>18));?>" onclick="this.src=this.src+'?temp='+ 1" style="cursor:pointer"  alt="验证码" />
				</div>
				<div class="check_box">
					<input type="checkbox" checked="checked" name="age" />我已经年满18岁
				</div>
				<div class="btn_submit pull-left" >
					<input  type="submit" id="submit" class="btn btn-danger register" style="width:8em;height: 2.5em;" value="立即注册"/>　
					<input  type="reset"  style="width:8em;height: 2.5em;" class="btn btn-default reset"  value="重置" />　<!--已有账号？<a href="<?php echo U('Public/login');?>" class="remmber_pwd">立即登录</a>--></p>
				</div>
			</form>
		</div>
	</div>
</div>
<footer class="footer" style="clear:both">
    <div class="footer_main">
        <div class="container">
            <div class="row">
                <div class="col-xs-3 footer_left padding_0">
                    <div class="footer_common_title">
                        <h2>技术支持 <span>Technical support</span></h2>
                    </div>
                    <div class="clearfix footer_l_content">
                        <a href="">
                            <div class="pull-left">
                                <img src="/resources/images/dafayun.png" alt="">
                            </div>
                            <p class="pull-left">
                                <span><?php echo GetVar('webtitle');?>系统</span>
                                <span>专业彩票系统平台</span>
                            </p>
                        </a>
                    </div>
                    <i></i>
                </div>
                <div class="col-xs-4 footer_middle">
                    <div class="footer_common_title">
                        <h2>服务体验 <span>Service experience</span></h2>
                        <div class="footer_m_content">
                            <div class="clearfix enter">
                                <span class="pull-left">昨日充值到账平均时间</span>
                                <p class="bar pull-left margin_0">
                                    <span class="bar_red"></span>
                                </p>
                                <span class="miao pull-left"><em>53</em> 秒</span>
                            </div>
                            <div class="clearfix enter">
                                <span class="pull-left">昨日提现到账平均时间</span>
                                <p class="bar pull-left margin_0">
                                    <span class="bar_blue"></span>
                                </p>
                                <span class="miao pull-left"><em>17'40</em> 秒</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3 footer_right">
                    <div class="footer_common_title">
                        <h2>充值展示 <span>Recharge method</span></h2>
                    </div>
                    <div class="chongzhi_img_box">
                        <span class="chongzhi_img1"></span>
                        <span class="chongzhi_img2"></span>
                        <span class="chongzhi_img3"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_other">
        <div class="container">
            <p class="footer_link">
                <a href="<?php echo U('News/lists',['catid'=>30,'showid'=>3]);?>?About ">关于我们</a>
                <a href="<?php echo U('News/lists',['catid'=>30,'showid'=>56]);?>?About">联系我们</a>
                <a href="<?php echo U('News/lists',['catid'=>30,'showid'=>57]);?>?About">商务合作</a>
                <a href="<?php echo U('News/lists',['catid'=>30,'showid'=>58]);?>?About">法律声明</a>
                <a href="<?php echo U('News/lists',['catid'=>30,'showid'=>59]);?>?About">隐私声明</a>
            </p>
            <p class="footer_copyright">
                Copyright ©  <?php echo GetVar('webtitle');?>  Reserved | 18+
            </p>
        </div>
    </div>
</footer>
<?php if($_COOKIE['showgg']== '1' && $_SESSION['userinfo']!= ''): ?><div class="notice">
    <div class="noticCon">
        <h3>网站最新公告 <a class="iconfont icon-guanbi-copy closeNotice"></a></h3>
     <ul>
         <?php if(is_array($gglist)): $k = 0; $__LIST__ = array_slice($gglist,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><li><a href=<?php echo U('Member/ggshow',array('aid'=>$vo['id']));?>><?php echo ($vo["title"]); ?><br>[<?php echo (date("Y-m-d H:i:s",$vo["oddtime"])); ?>]</a></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
    </div>
</div><?php endif; ?> 
<script>
    $('.notice').find('.closeNotice').click(function (){
     
        $('.notice').hide();
        $.ajax({
            url : "<?php echo U('Common/closegg');?>",
            type:"POST",
        })
    })
</script>
<div class="loginCengBox">
	<div class="loginCeng">
		<div class="loginCengH">
			<h3>温馨提示</h3>
			<span class="loginCengClose">
				<i class="iconfont icon-guanbi-copy"></i>
			</span>
		</div>
		<div class="loginCengB">
		
		</div>
		<div class="loginCengF">
			<button type="submit" >确定</button>
		</div>
	</div>
</div>

<script type="text/javascript" src="/resources/js/Validform_v5.3.2.js"></script>
<script type="text/javascript" src="/resources/js/passwordStrength-min.js"></script>
<script type="text/javascript">
	$(function(){
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 

		$('input[name="reccode"]').blur(function () {
			var text = $(this).val();
			if(!text || text.trim() == ''){
				$(this).siblings('.checkInput').show();
				$(this).siblings('.checkInput').find('span').text('邀请码不能为空');
				$(this).siblings('.checkInput').find('.iconfont').removeClass('icon-chenggong');
				$(this).siblings('.checkInput').find('.iconfont').addClass('icon-cross-ivt');
			}else{
				$(this).siblings('.checkInput').show();
				$(this).siblings('.checkInput').find('span').text('');
				$(this).siblings('.checkInput').find('.iconfont').removeClass('icon-cross-ivt');
				$(this).siblings('.checkInput').find('.iconfont').addClass('icon-chenggong');
			}
		})

		$('.text_accont[name="username"]').blur(function () {
			var text = $(this).val();
			if(!text || text.trim() == ''){
				$(this).siblings('.checkInput').show();
				$(this).siblings('.checkInput').find('span').text('账号不能为空');
				$(this).siblings('.checkInput').find('.iconfont').removeClass('icon-chenggong');
				$(this).siblings('.checkInput').find('.iconfont').addClass('icon-cross-ivt');
			}else{
				$(this).siblings('.checkInput').show();
				$(this).siblings('.checkInput').find('span').text('');
				$(this).siblings('.checkInput').find('.iconfont').removeClass('icon-cross-ivt');
				$(this).siblings('.checkInput').find('.iconfont').addClass('icon-chenggong');
			}
		})

		$('.text_accont[name="password"]').blur(function () {
			var text = $(this).val();
			if(!text || text.trim() == ''){
				$(this).siblings('.checkInput').show();
				$(this).siblings('.checkInput').find('span').text('密码不能为空');
				$(this).siblings('.checkInput').find('.iconfont').removeClass('icon-chenggong');
				$(this).siblings('.checkInput').find('.iconfont').addClass('icon-cross-ivt');
			}else if(text.length < 6 || text.length > 16){
				$(this).siblings('.checkInput').show();
				$(this).siblings('.checkInput').find('span').text('密码范围在6-16位');
				$(this).siblings('.checkInput').find('.iconfont').removeClass('icon-chenggong');
				$(this).siblings('.checkInput').find('.iconfont').addClass('icon-cross-ivt');
			}else{
				$(this).siblings('.checkInput').show();
				$(this).siblings('.checkInput').find('span').text('');
				$(this).siblings('.checkInput').find('.iconfont').removeClass('icon-cross-ivt');
				$(this).siblings('.checkInput').find('.iconfont').addClass('icon-chenggong');
			}
		})

		$('.text_accont[name="cpassword"]').blur(function () {
			var text = $(this).val();
			if(!text || text.trim() == ''){
				$(this).siblings('.checkInput').show();
				$(this).siblings('.checkInput').find('span').text('确认密码不能为空');
				$(this).siblings('.checkInput').find('.iconfont').removeClass('icon-chenggong');
				$(this).siblings('.checkInput').find('.iconfont').addClass('icon-cross-ivt');
			}else if(text.length < 6 || text.length > 16){
				$(this).siblings('.checkInput').show();
				$(this).siblings('.checkInput').find('span').text('确认密码范围在6-16位');
				$(this).siblings('.checkInput').find('.iconfont').removeClass('icon-chenggong');
				$(this).siblings('.checkInput').find('.iconfont').addClass('icon-cross-ivt');
			}else if(text != $('.text_accont[name="password"]').val()){
				$(this).siblings('.checkInput').show();
				$(this).siblings('.checkInput').find('span').text('两次密码不相同');
				$(this).siblings('.checkInput').find('.iconfont').removeClass('icon-chenggong');
				$(this).siblings('.checkInput').find('.iconfont').addClass('icon-cross-ivt');
			}else{
				$(this).siblings('.checkInput').show();
				$(this).siblings('.checkInput').find('span').text('');
				$(this).siblings('.checkInput').find('.iconfont').removeClass('icon-cross-ivt');
				$(this).siblings('.checkInput').find('.iconfont').addClass('icon-chenggong');
			}
		})

		$('.text_accont[name="tradepassword"]').blur(function () {
			var text = $(this).val();
			if(!text || text.trim() == ''){
				$(this).siblings('.checkInput').show();
				$(this).siblings('.checkInput').find('span').text('资金密码不能为空');
				$(this).siblings('.checkInput').find('.iconfont').removeClass('icon-chenggong');
				$(this).siblings('.checkInput').find('.iconfont').addClass('icon-cross-ivt');
			}else{
				$(this).siblings('.checkInput').show();
				$(this).siblings('.checkInput').find('span').text('');
				$(this).siblings('.checkInput').find('.iconfont').removeClass('icon-cross-ivt');
				$(this).siblings('.checkInput').find('.iconfont').addClass('icon-chenggong');
			}
		})

		$('input[name="code"]').blur(function () {
			var text = $(this).val();
			if(!text || text.trim() == ''){
				$(this).siblings('.checkInput').show();
				$(this).siblings('.checkInput').find('span').text('验证码不能为空');
				$(this).siblings('.checkInput').find('.iconfont').removeClass('icon-chenggong');
				$(this).siblings('.checkInput').find('.iconfont').addClass('icon-cross-ivt');
			}else{
				$(this).siblings('.checkInput').show();
				$(this).siblings('.checkInput').find('span').text('');
				$(this).siblings('.checkInput').find('.iconfont').removeClass('icon-cross-ivt');
				$(this).siblings('.checkInput').find('.iconfont').addClass('icon-chenggong');
			}
		})

	})
	function rdirect(url){
		window.location.href = url;
	}

	function check_form(obj){

		if(!$('input[name=age]').is(':checked')){
			alt('禁止未成年人注册');
			return false;
		}
 		$.ajax({
			url : "<?php echo U('public/register');?>",
			type : 'POST',
			data : {
				linkid          :   $('input[name=linkid]').val(),
				code       :   $('input[name=code]').val(),
				cpassword      :   $('input[name=cpassword]').val(),
				password       :   $('input[name=password]').val(),
				reccode        :   $('input[name=reccode]').val(),
				tradepassword  :   $('input[name=tradepassword]').val(),
				username       :   $('input[name=username]').val(),
			},
			beforeSend : function(){
				$('#submit').attr('disabled','disabled');
			},
			success : function(json){
				if(json.sign==1){
					alt('恭喜您注册成功，感谢您的加入!');
					var url = json.url?json.url:"<?php echo U('Home/Index/index');?>";
				 
					setTimeout("rdirect('"+url+"')", 1500);
					   $('#submit').attr('disabled',false);
				}else{
					   $('#submit').attr('disabled',false);
					  alt(json.message);
				}
			}
		})
         
		return false;
	}
</script>
<script type="text/javascript">
	function sendtelcode(obj){
		if($("input[name='username']").val().length<3){
			alert('用户名设置错误');
			return false;
		}

		if($("input[name='password']").val().length<6){
			alert('密码设置错误');
			return false;
		}
		if($("input[name='password']").val()!=$("#qpassWord").val()){
			alert('两次密码输入不一致');
			return false;
		}
		var tel = $("#tel").val();
		var exp = new RegExp("^(1)[0-9]{10}$");
		if(!exp.test(tel)){
			alert('手机号码填写错误');
			$("#tel").focus();
			return false;
		}
		if($("input[name='verCord']").val().length<4){
			alert('图形验证码设置错误');
			return false;
		}else{
			$.post("<?php echo U('Public/check_verify');?>",{'code':$("input[name='verCord']").val()}, function(json){
				if(json.status=='y'){
					var token = json.token;
					sendmsg(tel,token,obj);
				}else{
					alert('图形验证码错误!');
					return false;
				}
			},'json');
		}
	}
	function sendmsg(tel,token,obj){
		$.post("<?php echo U('Public/sendmsn');?>",{'token':token,'mobile':tel}, function(json){
			if(json.status=='y'){
				settime(obj);
			}else{
				alert(json.message);
				return false;
			}
		},'json');
	}
	var countdown=180;
	function settime(obj) {
		if (countdown == 0) {
			obj.removeAttribute("disabled");
			obj.value="免费获取验证码";
			countdown = 180;
			return;
		} else {
			obj.setAttribute("disabled", true);
			obj.value="重新发送(" + countdown + ")";
			countdown--;
		}
		setTimeout(function() {
				settime(obj) }
			,1000)
	}
</script>
<!--<style>
	.loading{
		width:100%;
		height:100%;
		background:#000;
		display: block;
		z-index: 9999;
	}
</style>
<div class="loading">

</div>-->
</body>
</html>