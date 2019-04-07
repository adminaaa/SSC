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

<style>
	body{
		background-color: #fff;}
</style>
<link rel="stylesheet" href="/Template/Mobile/css/userHome.css">
<body>
	<header data-am-widget="header"class="am-header am-header-default header nav_bg am-header-fixed">
		<div class="am-header-left am-header-nav">
			<a href="javascript:history.back(-1);" class="">
				<i class="iconfont icon-arrow-left"></i>
			</a>
      	</div>
		<div class=" am-header-title">
			额度转换</eq>
		</div>
	</header>
	<div class="personalInfo1 personalInfo">
		
			<ul class="my_set_list personalInfo_top margin_0">
				 <input type="hidden" class="faceinput" style="width: 700px" name="info[face]" value="<?php echo ($userinfo['face']); ?>" />
				<li class="am-cf am-vertical-align special faceimg" data-am-modal="{target: '#my-actions'}">
					
					<img class="am-fr padding_lr_5 personalInfo_header am-radius" src="<?php echo ($userinfo['face']); ?>" style="float:right;" alt="">
					<span style="width:90%;">头像</span>
				</li>
				<li class="am-cf" style="border-bottom:1px solid #ccc">
					<span>平台余额</span>
					
					<em class="personalInfo_text am-fr padding_lr_5"><?php echo ($balance); ?></em>
				</li>
			</ul>
			<ul class="my_set_list personalInfo_top margin_0" >
				<li class="am-cf " >
					<span>AG余额</span>
				
					<em class="personalInfo_text am-fr padding_lr_5">
                              <?php echo ($agBalance); ?>

					</em>
				</li>
				<li class="am-cf " >
					<span>BB余额</span>
					<em class="personalInfo_text am-fr padding_lr_5">
					<?php echo ($bbBalance); ?>
					</em>
				</li>
				<li class="am-cf " >
					<span>开元余额</span>
					<em class="personalInfo_text am-fr padding_lr_5">
					<?php echo ($kyBalance); ?>
					</em>
				</li>
				<li class="am-cf " >
					<span>体育余额</span>
					<em class="personalInfo_text am-fr padding_lr_5">
					<?php echo ($ssBalance); ?>
					</em>
				</li>				
				<li class="am-cf">
					<span>转换类型</span>
					
					<em class="personalInfo_text am-fr padding_lr_5">
					    <select name="quota_type" id="quota_type"  class="form-control" id="" style="width:11em">
								<option value="0">==请选择==</option> 
								<option value="1">主账号至AG</option>
								<option value="3">主账号至BB</option>	
								<option value="5">主账号至体育</option> 								
								<option value="7">主账号至开元</option> 
								<option value="2">AG至主账号</option> 								
								<option value="4">BB至主账号</option> 
								<option value="6">体育主账号至</option> 								
								<option value="8">开元至主账号</option> 								
								
							</select>
					</em>
				</li>
				<li class="am-cf" style="border-bottom:1px solid #ddd">
					<span>转换金额</span>
					
					<em class="personalInfo_text am-fr padding_lr_5">
					    <input type ="number" name="amout" id="amout" onkeyup="this.value=this.value.replace(/[^\d]/g,'');"
							style="border-radius: 4px;border: 1px solid #cccccc;padding: 0px 5px;width: 11em;height: 36px;"/>
					</em>
				</li>
				
				
			</ul>

			<button  class="am-btn am-btn-danger am-btn-block am-radius btn_red " id="save" style="height:40px;">提交</button>
		
	</div>

	
	<div class="update_header am-modal-actions"  id="my-actions">
    <div class="update_header_title am-cf">
        <h3 class="am-fl">修改头像</h3>
        <i class="iconfont icon-cross-ivt am-fr" data-am-modal-close></i>
    </div>
    <div class="update_header_main">
        <span class="preview am-block">预览</span>
        <div class="img"><img class="update_header_img" src="/Template/Mobile/images/face/1.jpg" alt=""></div>
        <em class="update_header_name am-block">奥巴马</em>
        <div class="update_header_list">
            <div class="prev"><i class="am-datepicker-prev-icon"></i></div>
            <div class="update_header_imgs_box">
                <div class="update_header_imgs am-cf" id="update_header_imgs">
                    <img class="update_header_watch" src="/Template/Mobile/images/face/1.jpg" alt="奥巴马">
                    <img class="update_header_watch" src="/Template/Mobile/images/face/2.jpg" alt="小女孩">
                    <img class="update_header_watch" src="/Template/Mobile/images/face/3.jpg" alt="泷泽萝拉">
                    <img class="update_header_watch" src="/Template/Mobile/images/face/4.jpg" alt="科比"> 
                    <img class="update_header_watch" src="/Template/Mobile/images/face/5.jpg" alt="金正恩">
                    <img class="update_header_watch" src="/Template/Mobile/images/face/6.jpg" alt="杰森斯坦森">
                    <img class="update_header_watch" src="/Template/Mobile/images/face/8.jpg" alt="梅西">
                    <img class="update_header_watch" src="/Template/Mobile/images/face/7.jpg" alt="范冰冰">
                    <img class="update_header_watch" src="/Template/Mobile/images/face/9.jpg" alt="本拉登">
                    <img class="update_header_watch" src="/Template/Mobile/images/face/10.jpg" alt="萨达姆">
                    <img class="update_header_watch" src="/Template/Mobile/images/face/11.jpg" alt="宋慧乔">
                    <img class="update_header_watch" src="/Template/Mobile/images/face/12.jpg" alt="李敏镐">
                    <img class="update_header_watch" src="/Template/Mobile/images/face/13.jpg" alt="宋仲基">
                    <img class="update_header_watch" src="/Template/Mobile/images/face/14.jpg" alt="比尔盖茨">
                    <img class="update_header_watch" src="/Template/Mobile/images/face/15.jpg" alt="罗纳尔多">
                    <img class="update_header_watch" src="/Template/Mobile/images/face/16.jpg" alt="宋承宪">
                    <img class="update_header_watch" src="/Template/Mobile/images/face/17.jpg" alt="小男孩">
                    <img class="update_header_watch" src="/Template/Mobile/images/face/18.jpg" alt="朴信惠">
                    <img class="update_header_watch" src="/Template/Mobile/images/face/19.jpg" alt="希拉里">
                    <img class="update_header_watch" src="/Template/Mobile/images/face/20.jpg" alt="全智贤">
                    <img class="update_header_watch" src="/Template/Mobile/images/face/21.jpg" alt="林允儿">
                    <img class="update_header_watch" src="/Template/Mobile/images/face/22.jpg" alt="普京">
                    <img class="update_header_watch" src="/Template/Mobile/images/face/23.jpg" alt="波多野结衣">
                    <img class="update_header_watch" src="/Template/Mobile/images/face/24.jpg" alt="贝克汉姆">
                    <img class="update_header_watch" src="/Template/Mobile/images/face/25.jpg" alt="苍井空">
                </div>
            </div>
            <div class="next"><i class="am-datepicker-next-icon"></i></div>
        </div>
    </div>
    <div class="update_header_bottom">
        <button class="am-btn am-btn-default am-radius btn_red save saveface" data-am-modal-close>确定</button>
        <button class="am-btn am-btn-default am-radius close" style="background-color: #828282;" data-am-modal-close>取消</button>
    </div>
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
     $(function(){
		 $("#refresh").click(function(){
			  window.location.reload(true) ;
		 });
		$("#save").click(function(){
			var quota_type=$("#quota_type").val();
			if(quota_type<=0){
				loginCengBoxFn("请选择额度转让类型");
				return false;
				
			}
			var amout=$("#amout").val();
			if(quota_type==1||quota_type==2){
				var type='ag';
			}
			if(quota_type==3||quota_type==4){
				var type='bbin';
			}
				if(quota_type==5||quota_type==6){
				var type='ss';
			}
				if(quota_type==7||quota_type==8){
				var type='ky';
			}			
			$(this).unbind("click");
			if(quota_type==1||quota_type==3||quota_type==5||quota_type==7){
				$.post("<?php echo U('Zhenren/deposit');?>",{type:type,amount:amout},function(data){
					
					console.log(data);
					if(data.code==1){
						loginCengBoxFn("转让成功");
						 window.location.reload(true) ;
					}else{
						$(this).bind("click");
						loginCengBoxFn("转换失败");
					}
				});
			}
			if(quota_type==2||quota_type==4||quota_type==6||quota_type==8){
				$.post("<?php echo U('Zhenren/withdrawal');?>",{type:type,amount:amout},function(data){
					if(data.code==1){
						loginCengBoxFn("转让成功");
						 window.location.reload(true) ;
					}else{
						$(this).bind("click");
						loginCengBoxFn("转换失败");
					}
				});
			}
			
		});
		
	 
	 });
	</script>
</body>
</html>