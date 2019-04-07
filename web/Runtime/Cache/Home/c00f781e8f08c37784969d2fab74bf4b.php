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
  <link rel="stylesheet" href="/resources/css2/userInfo.css">
  <link rel="stylesheet" href="/resources/css2/recharge.css">
  <link rel="stylesheet" href="/resources/css2/footer.css">
  <link rel="stylesheet" href="//at.alicdn.com/t/font_lo77yrw5tt8adcxr.css">
  <link rel="stylesheet" type="text/css" href="/resources/css/artDialog.css" />

</head>
<body>
<style>
  .me-infor {
    overflow: hidden;
    margin: 10px 0;
  }
  .me-infor .infor-xx {
    padding: 10px 20px;
    margin: 0 0 10px;
    border: 1px solid #e3e3e3;
  }
  .me-infor .infor-xx ul li {
    display: block;
    height: 36px;
    line-height: 36px;
    padding: 3px 0;
  }
  .me-infor .infor-xx h6{
    float:left;
  }
  .mark {
    color: #f33d3d;
  }
</style>
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
<script type="text/javascript" src="/resources/js/way.min.js"></script>
<script type="text/javascript" src="/resources/main/common.js"></script>
<script src="/resources/js2/require.js" data-main="/resources/js2/homePage"></script>
<div class="vip_info clearfix container">
  <div class="pull-left vip_list">
    <div class="user_list_ad">
        <h3><i class="iconfont">&#xe61e;</i> 账号管理</h3>
        <a href="<?php echo U('Member/ziliao');?>">个人信息</a>
        <a href="<?php echo U('Member/index');?>">安全中心</a>
        <a href="<?php echo U('Member/bankcard');?>">银行卡管理</a>
    </div>
	 <div class="user_list_ad">
        <h3><i class="iconfont">&#xe61e;</i> 额度管理</h3>
        <a href="<?php echo U('Member/quota');?>">额度转让</a>
  
    </div>
    <div class="user_list_ad">
        <h3><i class="iconfont">&#xe61e;</i> 投注管理</h3>
        <a href="<?php echo U('Member/betRecord');?>">投注记录</a>
     <!--   <a href="seekRecord.html">追号记录</a>-->
    </div>
    <div class="user_list_ad">
        <h3><i class="iconfont">&#xe61e;</i> 资金管理</h3>
        <a href="<?php echo U('Account/dealRecord');?>">交易记录</a>
        <a href="<?php echo U('Account/todayLoss');?>">今日盈亏</a>
    </div>
    <div class="user_list_ad">
        <h3><i class="iconfont">&#xe61e;</i> 消息管理</h3>
       <!-- <a href="<?php echo U('Member/stationMail');?>">站内信</a>-->
        <a href="<?php echo U('Home/Member/gglist');?>">网站公告</a>
    </div>
</div>
  <div class="pull-right vip_info_pan">
    <div class="vip_info_title">
      我要充值
    </div>
    <div class="vip_info_content zfb_main">
      				 <?php  if(strstr($_SERVER['PHP_SELF'],"quickRecharge")) { $quickRecharge = 'class="active"'; }; if(strstr($_SERVER['PHP_SELF'],"zfbRecharge")) { $zfbRecharge = 'class="active"'; }; if(strstr($_SERVER['PHP_SELF'],"wxRecharge")) { $wxRecharge = 'class="active"'; }; if(strstr($_SERVER['PHP_SELF'],"bankRecharge")) { $bankRecharge = 'class="active"'; }; if(strstr($_SERVER['PHP_SELF'],"jbfRecharge")) { $jbfRecharge = 'class="active"'; }; if(strstr($_SERVER['PHP_SELF'],"hxpay")) { $hxRecharge = 'class="active"'; }; ?>
				<ul class="tab clearfix recharge_main_tab">
		<li <?php echo ($hxRecharge); ?> style="width:120px;"><a href="<?php echo U('Account/hxpay');?>" style="width:100px;">在线充值</a></li>
          <li <?php echo ($zfbRecharge); ?> style="width:120px;"><a href="<?php echo U('Account/zfbRecharge');?>" style="width:100px;">支付宝充值</a></li>
          <li <?php echo ($wxRecharge); ?>><a href="<?php echo U('Account/wxRecharge');?>">微信充值</a></li>
          <li <?php echo ($bankRecharge); ?>><a href="<?php echo U('Account/recharge');?>">银行转账</a></li>
    <!--
          <li <?php echo ($quickRecharge); ?>><a href="<?php echo U('Account/quickRecharge');?>">银行转账</a></li>
    <li <?php echo ($qqRecharge); ?>><a href="<?php echo U('Account/qqRecharge');?>">QQ扫码充值</a></li>
   <!--<li style="width:120px;"><a href="<?php echo U('Account/fourRecharge');?>" style="width:100px;">四合一在线充值</a></li>-->
          <!--
					<li style="width:180px;">	<?php  include($_SERVER["DOCUMENT_ROOT"].'/mcbpay/mcbconfig.php');?><a href="//<?php echo MCB_PAYDOMAIN;?>/pay/?appid=<?php echo MCB_APPID;?>&payno=<?php echo ($userinfo["username"]); ?>&pt=pc&back_url=<?php echo urlencode('//'.$_SERVER['HTTP_HOST'].'/#');?>" target="_blank" style="width:180px;">支付宝/微信/手Q扫码</a></li>
				-->
				</ul>
      <form  method="post" action="<?php echo U('Account/recharge');?>" onSubmit="return checkform(this)">
        <div class="common_border_box1 choiceBank_box">
          <div class="choiceMoney">
            <span class="choiceMoney_l">充值金额：</span>
            <input type="text" name="amount" id="amount" placeholder="最低充值10" class="common_input">
          </div>
          <div class="choiceMoney" style="display:none">
            <span class="choiceMoney_l">支付账号：</span>
            <input type="text" name="payname" placeholder="请输入你的支付宝账号" value="zhifubao" class="common_input">
          </div>
          <div class="choiceBank clearfix">
            <span class="choiceMoney_l pull-left">充值方式：</span>
            <span class="collectBank_ra checked">
								<i class="iconfont icon-yuanquanxuanzhong"></i>
								<input type="radio"  name="paytype"  value="<?php echo ($Allmsg['paytype']); ?>" checked="checked"  style="display:none;">
								<svg class="icon" aria-hidden="true">
								</svg>
								<em>银行转账</em>
								<div class="r_right">
									<span class="r_right_con">√</span>
								</div>
							</span>
          </div>
          <button type="button"  class="btn common_btn nextbtn">充值</button>
          <div id="pay_alipay" class="me-infor" style="display:none;">
            <div class="infor-xx">
              <ul class="mar-lr20">
                <li>尊敬的客户您好，您的充值订单已经生成，请您在该页面继续完成充值。</li>
                <li>
                  <h6>充值金额：</h6>
                  <span><em class="mark" way-data="saomabill.amount"></em>元</span>
                </li>
                <li>
                  <h6>订单编号：</h6>
                  <span way-data="saomabill.trano" class="mark"></span>
                </li>
                <li>
                  <h6>附言码：</h6>
                  <span way-data="saomabill.id" class="mark"></span>
                </li>
                <li class='payerweima text-center'><h5>银行账号:<?php echo ($Allmsg["bankcode"]); ?></h5></li>
              </ul>

              <div>
                <input type="hidden" way-data="saomabill.paytype" />
                <a class="btn common_btn" style="width:10em;display:block;margin:1em auto;" href="javascript:;" onclick="alt('充值申请已成功提交'); window.location.href = '<?php echo U('Account/dealRecord2');?>'">汇款并完成支付</a>
              </div>
            </div>
          </div>
          <div class="prompt">
            <?=$Allmsg['remark'];?>
            <!--<p>※ 温馨提示：</p>
            <p>1、快捷支付需开通网银才能进行支付。</p>
            <p>2、单笔充值金额最低20元，最高100000元。</p>
            <p>3、充值成功后，点击“返回商户”即可自动到账。</p>-->
          </div>
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

<script type="text/javascript">
  $('.nextbtn').click(function () {
    if($('input[name=amount]').val()=="") {
      alt('请输入充值金额');return false;
    }
    if($('input[name=payname]').val()==""){
      alt('请输入支付账号');return false;
    }
    $.ajax({
      type : 'POST',
      url : "<?php echo U('Home/Apijiekou/addrecharge');?>",
      data :{
        amount      : $('#amount').val(),
        paytype     : $("input[name='paytype']:checked").val(),
        userpayname : $("input[name='payname']").val(),
      },
      success : function (data) {
        if(data.sign == true){
          $('.nextbtn').hide();
          $('.choiceBank').hide();
          $('.choiceMoney').hide();
          $("#pay_alipay").show();
          way.set("saomabill.amount",data.data.amount);
          way.set("saomabill.trano",data.data.trano);
          way.set("saomabill.id",data.data.id);
          way.set("saomabill.paytype",data.data.paytype);
          
          setTimeout(function () {checkispay(data.data.trano);}, 5000);
        }else{
          alt(data.message);
        }
      }
    })
  })
  function paysaoma() {
    window.location.href = "<?php echo U('Account/dealRecord2');?>";
  }

  

  var checkispayid;
  function checkispay(trano){
    clearTimeout(checkispayid);
    $.ajax({
      url: "<?php echo U('Apijiekou/checkrechargeisok1');?>",
      data:{"trano": trano},
      type: "post",
      dataType: "json",
      async:false,
      success: function(result) {
        if (result.sign === true) {
          if(result.state!=0){
            if(result.state==1){
              alt("充值成功");
            }else if(result.state==-1){
              alt("充值失败",-1);
            }
            window.location.href = "<?php echo U('Account/dealRecord2');?>";
          }else{
            checkispayid = setTimeout(function () {
              checkispay(trano);
            }, 5000);
          }
        } else {
          checkispayid = setTimeout(function () {
            checkispay(trano);
          }, 5000);
        }
      },
      error: function(XMLHttpRequest, textStatus, errorThrown) {
        checkispayid = setTimeout(function () {
          checkispay(trano);
        }, 5000);
      }
    });
  };
</script>
</body>
</html>