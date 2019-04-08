<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo GetVar('webtitle');?></title>
	<meta name="keywords" content="<?php echo GetVar('keywords');?>" />
	<meta name="description" content="<?php echo GetVar('description');?>" />
	<link rel="stylesheet" href="/resources/css2/bootstrap.min.css">
	<link rel="stylesheet" href="/resources/css2/reset.css">
	<link rel="stylesheet" href="/resources/css2/icon.css">
	<link rel="stylesheet" href="/resources/css2/header.css">
	<link rel="stylesheet" href="/resources/css2/main.css">
	<link rel="stylesheet" href="/resources/css2/footer.css">
	<script>
		var ISLOGIN = "<?php echo ($userinfo["id"]); ?>";
		var WebConfigs = {
			'ROOT' :""
		}
	</script>
	<link rel="stylesheet" type="text/css" href="/resources/css/common.css" />
	<link rel="stylesheet" type="text/css" href="/resources/css/layout.css" />
	<link rel="stylesheet" type="text/css" href="/resources/css/style.css" />
	<link rel="stylesheet" type="text/css" href="/resources/css/artDialog.css" />
	<script type="text/javascript" src="/resources/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="/resources/js/artDialog.js"></script>
	<script type="text/javascript" src="/resources/js/way.min.js"></script>
	<script type="text/javascript" src="/resources/main/common.js"></script>
	
</head>


<body style="background: linear-gradient( #f3fff4, #fff) no-repeat;">
<!--top-->
<!--top-->
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
     <h3><a href="/"><img style="width: 210px;" src="/LOGO.png" /></a></h3>
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
<!--baner-->

<script type="text/javascript">
	$(function () {
		if ($("#kinMaxShow").size() > 0) {
			$("#kinMaxShow").kinMaxShow({
				height: 225,
				intervalTime: 2,
				button: {
					showIndex: false,
					normal: { marginRight: '8px', border: '0', right: '50%', bottom: '10px', borderRadius: '7px', background: '#fff' },
					focus: { background: '#bd0d0d', border: '0' }
				}
			});
		}
		$(".bann_list li").mouseover(function () {
			$(this).children("dl").show();
		})
		$(".bann_list li").mouseleave(function () {
			$(this).children("dl").hide();
		})
	});
</script>

<!--navlist-->
<!--wapper-->
<!--最高奖金-->
<!--是否具有投注权限,true是可以进行投注-->
<input id="EachMaxLotteryValue" type="hidden" value="500000.00" />
<input id="MemberBettingAuthority" type="hidden" value="False" />
<input id="_jsurl" type="hidden" value="/templates/SSC" />   <!-- js目录 -->

<script>
	$(function () {
		$('.refresh_money').click(function () {
			$.ajax({
				url:"<?php echo U('Member/refresh_money');?>",
				type:'POST',
				success :function (data) {
					$('.smallmoney').html(data);
				}
			})
		})

	})
</script>
<!--wapper-->
<div class="h35"></div>
<div class="wapper ">
	<div class="w1000">
    	<div id="cookie_registerForms" class="register login_m_form b1 bg_wite">
        	<h4>代理登录</h4>
            <form method="post" class="ruivalidate_form_class" onsubmit="return check_login(this)" id="ruivalidate_form_class" checkby_ruivalidate url="" action="/Apublic.logindo">
                <input type="hidden" name="action" value="register_agent" />
                <dl>
                	<dt>账&nbsp;&nbsp; 号：</dt>
                    <dd>
                    	<input  type="text"  class="text_accont" name="userName"  verify="isLoginName" isNot="true" msg="账号不能为空"/>
                    </dd>
                </dl>
                <dl>
                	<dt>密&nbsp;&nbsp; 码：</dt>
                    <dd>
                    	<input  type="password" class="text_accont" name="passWord" verify="isALL" isNot="true" msg="请填写6-16位，字母与数字组合的密码"/>
                    </dd>
                </dl>
<!--                <dl>
                	<dt>验证码：</dt>
                    <dd>
                    	<input class="text_accont" type="text" autocomplete="off" isnot="true" msg="请输入验证码" name="verCode" style="width:120px !important;"><a href="javascript:void(0)" class="two_code">
                                    <img  src="<?php echo U('Public/verify',array('imageW'=>120,'imageH'=>35));?>"  onclick="this.src=this.src+'?temp='+ 1" /></a>
                    </dd>
                </dl>-->
                <dl>
                	
                    <dd>
                    	<input  type="submit" value="点击登录" class="sub_btn submit"/>
                    </dd>
                	
                    <dd>
                    	<input  type="button" value="返回会员登录" onclick="location.href='<?php echo U('Public/login');?>'" style="height: 40px;width: 140px;text-align: center;line-height: 40px;color: #FFF;background: #ea544a;font-size: 15px;font-weight: bold;margin-right: 20px; background:orange;"/>
                    </dd>
                </dl>
                <dl style="padding:0;">
                </dl>
            </form>
        </div>





    </div>
</div>
<!--wapper-->
<div class="h35"></div>
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
<script type="text/javascript" src="/resources/js/jquery.form.min.js"></script><!-- Jquery form表单提交 -->
<script type="text/javascript" src="/resources/js/jquery.ruiValidate.js"></script><!-- 表单验证的js文件 -->
<script type="text/javascript" src="/resources/js/jquery.kinMaxShow-1.1.min.js"></script>
<script type="text/javascript">
$(function(){
	$("#kinMaxShow").kinMaxShow({
		height:225,
		intervalTime:2,
		button:{
			showIndex:false,
			normal:{marginRight:'8px',border:'0',right:'50%',bottom:'10px',borderRadius:'7px',background:'#fff'},
			focus:{background:'#bd0d0d',border:'0'}
		}
	});

});
</script>
<!-- 调用插件 -->
<script type="text/javascript">

$(function(){
	var _FormValidate = new $.rui_validate();
	_FormValidate.initload();

	_FormValidate.initForm({
		FocusTip:true, 
		BlurChange:true, 
		ShowTip: "Bubble", 
		ShowTipDirection:"right", 
		FormObj:$("#ruivalidate_form_class"), 
		FormIdName: 'ruivalidate_form_class',  
		ShowTipClass:"ts_msg",    
		ShowTipStyle:"",    
		SubBtn:'sub_btn',   
		CallBack: ruivalidate_form_class 
	})
	function ruivalidate_form_class(obj) {
	    var _this = $(".ruivalidate_form_class .sub_btn");
	    _sub(_this);
	}



});

function check_login(obj){
	$.post($(obj).attr('action'),$(obj).serialize(), function(json){
		if(json.sign==1){
			loginCengBoxFn(json.message);
			window.location.href = "/Member.Agent";
		}else{
 			if(json.message=="你的帐号已在别处登陆，是否重新登陆"){
				if(confirm('你的帐号已在别处登陆，是否重新登陆')){
					$.ajax({
					url : $(obj).attr('action'),
					type : "POST",
					data : {
						userName : $("input[name=userName]").val(),
						passWord :$("input[name=passWord]").val(),
						nocode : true,
					},
					success : function (json) {
						loginCengBoxFn(json.message);
						window.location.href = "<?php echo U('Member/Agent');?>";
					}
				})
				}
			}else{
				loginCengBoxFn(json.message);
			};
		}
	},'json');
	return false;
}

</script>
<script src="/resources/js2/require.js" data-main="/resources/js2/homePage"></script>
</body>

</html>