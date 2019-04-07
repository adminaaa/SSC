<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo GetVar('webtitle');?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="full-screen" content="yes">
    <meta name="x5-fullscreen" content="true">
    <meta name="screen-orientation" content="portrait">
    <meta name="x5-orientation" content="portrait">
    <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=none">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="apple-touch-icon-precomposed" href="/Template/Mobile/images/icon.jpg">
    <link rel="apple-touch-startup-image" href="/Template/Mobile/images/strat.jpg" />


    <link rel="stylesheet" href="/Template/Mobile/css/amazeui.min.css?v=20180826">
    <link rel="stylesheet" href="/Template/Mobile/css/common2.css?v=20180826">
    <link rel="stylesheet" href="/Template/Mobile/css/index.css?v=20180826">
    <link rel="stylesheet" href="/Template/Mobile/css/icon.css?v=20180826">
    <link rel="stylesheet" href="/resources/css/artDialog.css?v=20180826">
    <script>
        var Webconfigs = {
            "ROOT" : ""
        }
    </script>
    
    
</head>
<script src="/Template/Mobile/js/jquery-3.1.1.min.js"></script> 
<script type="text/javascript" src="/resources/js/artDialog.js?v=20180826"></script>
<script type="text/javascript" src="/resources/js/way.min.js?v=20180826"></script>
<script type="text/javascript" src="/resources/main/common.js?v=20180826"></script>
<script src="/Template/Mobile/js/require.js?v=20180826" data-main="/Template/Mobile/js/main"></script>

<link rel="stylesheet" href="/Template/Mobile/css/userHome.css">
<body>
	<header data-am-widget="header"class="am-header am-header-default header nav_bg am-header-fixed">
		<div class="am-header-left am-header-nav">
			<a href="javascript:history.back(-1);" class="">
				<i class="iconfont icon-arrow-left"></i>
			</a>
      	</div>
		<h1 class="am-header-title userHome_h1">
			绑定真实姓名
		</h1>
	</header>
	
	<div class="bank_recharge">
		<form action="<?php echo U(Account/userbankname);?>" class="update_form" method="post">
			<ul class="bank_form_list">
				<li class="am-cf">
					<span class="bank_form_left am-fl">姓名：</span>
					<div class="am-fr bank_right_input">
						<input type="text"  class="input_txt" id="username"  name="userbankname">
					</div>
				</li>
				<li class="am-cf">
					<span class="bank_form_left am-fl">资金密码：</span> 
					<div class="am-fr bank_right_input">
						<input type="password"  class="input_txt" name="tradepassword" >
					</div>
				</li>
			</ul>
			<button type="submit"class="am-btn am-btn-danger am-radius am-btn-block" onclick="return IsChinese();">提交</button>
		</form>	
	</div>
	<div data-am-widget="navbar" class="am-navbar am-cf am-navbar-default bottom_navbar" >
  <ul class="am-navbar-nav am-cf am-avg-sm-4">
    <li>
      <a href="/" class="bottom_navbar_list">
						<i class="iconfont" style="color:#07b39e"><img src="/app/1.png" /></i>
        <span class="am-navbar-label">首页</span> 
      </a>
    </li>
    <li>
      <a href="<?php echo U('Member/betRecord');?>" class="bottom_navbar_list">
						<i class="iconfont" style="color:#07b39e"><img src="/app/3.png" /></i>
        <span class="am-navbar-label">记录</span>
      </a>
    </li>
	<li>
      <a href="<?php echo U('/Activity.index.do');?>" class="bottom_navbar_list">
						<i class="iconfont" style="color:#07b39e"><img src="/app/2.png" /></i>
        <span class="am-navbar-label">活动</span>
      </a>
    </li>
    <li>
      <a href="<?php echo U('Member/index');?>" class="bottom_navbar_list">
						<i class="iconfont" style="color:#07b39e"><img src="/app/4.png" /></i>
        <span class="am-navbar-label">会员</span>
      </a>
    </li>
  </ul>
</div>
	<script>
		function IsChinese()
		{
			var str = document.getElementById('username').value.trim();
			if(str.length!=0){
				reg=/^[\u0391-\uFFE5]+$/;
				if(!reg.test(str)){
					alert("请输入真实中文姓名") 
					return false;
				}
			}
			if(str.length<1){
					alert("请输入真实中文姓名");
				  return false;
			}
		}
	</script>
</body>
</html>