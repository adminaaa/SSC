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
		用户注册
	</h1>
</header>
<div class="bank_recharge">
	<form method="post" action="<?php echo U('Public/register');?>"  class="ruivalidate_form_class" onSubmit="return check_form(this)" id="form1">
		<ul class="bank_form_list">
			<?php if(empty($tgid)): endif; ?>
			<li class="am-cf">
				<span class="bank_form_left am-fl">邀请码</span>
				<div class="am-fr bank_right_input">
          <present name="linkinfo"><input type="hidden" name="linkid" value="<?php echo ($linkinfo["id"]); ?>"  />
          <input type="text" <?php if(!empty($tgid)): ?>readonly value="<?php echo ($tgid); ?>"<?php endif; ?> id="reccode" name="reccode" class="input_txt" placeholder="请输入推荐码" />
				</div
			</li>
			<li class="am-cf">
				<span class="bank_form_left am-fl">账号</span>
				<div class="am-fr bank_right_input">
					<input type="text"  name="username" id="username" class="input_txt" placeholder="请输入账号">
				</div>
			</li>
			<li class="am-cf">
				<span class="bank_form_left am-fl">设置密码</span>
				<div class="am-fr bank_right_input">
					<input type="password" name="password" id="password" class="input_txt" placeholder="请输入密码">
				</div>
			</li>
			<li class="am-cf">
				<span class="bank_form_left am-fl">确认密码</span>
				<div class="am-fr bank_right_input">
					<input type="password"  name="cpassword" id="cpassword" class="input_txt" placeholder="请再次输入密码">
				</div>
			</li>
			<li class="am-cf" style="position:relative;">
				<span class="bank_form_left am-fl">提款密码</span>
				<div class="am-fr bank_right_input" style="padding-top: 8px;;">
					<input type="password"  name="tradepassword" id="tradepassword" class="input_txt" placeholder="请输入提款密码">
					<!--<select name="tradepassword[]"  class="form-control" style="width:auto;background:#f6f6f6;">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>
					<select name="tradepassword[]" class="form-control" style="width:auto; background:#f6f6f6;">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>
					<select name="tradepassword[]" class="form-control" style="width:auto; background:#f6f6f6;">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>
					<select name="tradepassword[]" class="form-control" style="width:auto; background:#f6f6f6;">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>
					<select name="tradepassword[]" class="form-control" style="width:auto; background:#f6f6f6;">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>
					<select name="tradepassword[]" class="form-control" style="width:auto; background:#f6f6f6;">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>-->
				</div>
			</li>
		</ul>
		<p class="bank_pass"><a href="<?php echo U('Public/login');?>">已有账号? 立即登录</a></p>
		<button style="margin-top:0.1rem;" class="am-btn am-btn-danger am-radius am-btn-block" type="submit">立即注册</button>
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
	function check_form(obj) {
       $.ajax({
		   url : "<?php echo U('Public/register');?>",
		   type : 'POST',
		   data : $("#form1").serialize(),
		   success : function (data) {
			   if(data.sign==true){
				   alert("恭喜你!注册成功");
				   window.location.href= "<?php echo U('Member/index');?>"
			   }else{
				   alert(data.message);
			   }
		   }
	   })
		return false;
	}
</script>
</body>
</html>