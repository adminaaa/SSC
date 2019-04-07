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
<style>
.home_main .new_home_main_list{
	text-align:center;
	padding:0.2rem 0 0.1rem;
}
.home_main .new_home_main_list a{
	display:block;
}
.home_main .new_home_main_list i{
	font-size:0.4rem;
	line-height:0.42rem;
}
.home_main .new_home_main_list.icon-fucaikuai3{
	color:#e01506;
}
.home_main .new_home_main_list .icon-zhongqingshishicailogo{
	color:#fa7e00;
}
.home_main .new_home_main_list h3{
	margin:0;
	color:#333;
	font-weight:normal;
	line-height:0.1rem;
	margin-top:0.1rem;
}
.home_main .new_home_main_list em{
	color:#989898;
	font-size:0.12rem;

}
</style>
<body>
<header data-am-widget="header"class="am-header am-header-default header nav_bg am-header-fixed">
    <h1 class="am-header-title header_logo">
        <img src="/Template/Mobile/images/mobile_logo.png" alt="">
    </h1>
    <div class="am-header-right am-header-nav header_down">
        <a href="/public.download.do" class="showCodeC">
            APP
            <i class="iconfont icon-wechaticon16"></i> 
        </a>
    </div>
</header>

<div data-am-widget="slider" class="am-slider am-slider-a5" data-am-slider='{&quot;directionNav&quot;:false}'>
    <ul class="am-slides">
        <li>
            <img src="/Template/Mobile/images/bannerqi1.jpg" alt="">
        </li>
        <li>
            <img src="/Template/Mobile/images/bannerqi2.jpg" alt="">
        </li>
        <li>
            <img src="/Template/Mobile/images/bannerqi3.jpg" alt="">
        </li>
    </ul>
</div>

<div class="my_operation_money">
<ul class="home_main am-avg-sm-3">

        <ul class="am-avg-sm-4">
            <li>
                <a href="<?php echo U('Account/rechargeList');?>">
                    <i class="iconfont icon-chongzhi"></i>
                    <em>我要充值</em>
                </a>
            </li>
            <li>
                <a href="<?php echo U('Account/withdrawals');?>">
                    <i class="iconfont icon-tixian"></i>
                    <em>我要提现</em>
                </a>
            </li>
            <li>
                <a href="<?php echo U('Account/dealRecord');?>">
                    <i class="iconfont icon-jiaoyijilu"></i>
                    <em>交易记录</em>
                </a>
            </li>
            <li>
                <a href="<?php echo U('Member/betRecord');?>">
                    <i class="iconfont icon-touzhujilu"></i>
                    <em>投注记录</em>
                </a>
            </li>
        </ul>

		 <li class="new_home_main_list"><a href="<?php echo U('Zhenren/login',array('type'=>'ag'));?>">
                        <i style="width: 60px;height: 60px;border-radius: 50%;font-size: 25px;display: block;margin: 0 auto;">
                <img src="/Template/Mobile/images/AG.png" style="margin-top: -10px;" width="100%" height="100%">
            </i>
                        <h3>AG视讯</h3>
						</a>
		</li>		
       <li class="new_home_main_list"><a href="<?php echo U('Zhenren/login',array('type'=>'bbin'));?>">
                       <i style="width: 60px;height: 60px;border-radius: 50%;font-size: 25px;display: block;margin: 0 auto;">
                <img src="/Template/Mobile/images/BB.png" style="margin-top: -10px;" width="100%" height="100%">
            </i>
                        <h3>BB视讯</h3>
						</a>
		</li>
    <li class="new_home_main_list"><a href="<?php echo U('Zhenren/login',array('type'=>'ky'));?>">
            <i style="width: 60px;height: 60px;border-radius: 50%;font-size: 25px;display: block;margin: 0 auto;">
                <img src="/Template/Mobile/images/ky.png" style="margin-top: -10px;" width="100%" height="100%">
            </i>
            <h3>开元棋牌</h3>
        </a>
    </li>
    <li class="new_home_main_list"><a href="<?php echo U('Zhenren/login',array('type'=>'ss'));?>">
            <i style="width: 60px;height: 60px;border-radius: 50%;font-size: 25px;display: block;margin: 0 auto;">
                <img src="/Template/Mobile/images/zr.png" style="margin-top: -10px;" width="100%" height="100%">
            </i>
            <h3>皇冠体育</h3>
        </a>
    </li>	
</ul>
    </div>

<div class="home_notice">
        <a href="<?php echo U('Member/ggshow',array('aid'=>$gglist['id']));?>" class="am-cf">
            <div class="am-fl">
                <i class="iconfont icon-icon100"></i>
                <em> <?php echo ($gglist[title]); ?></em>
            </div>
            <div class="am-fr">
                <i class="iconfont icon-arrowright"></i>
            </div>
        </a>
</div>

<ul class="home_main am-avg-sm-3">
        <?php if(is_array($cplist)): $i = 0; $__LIST__ = $cplist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cp): $mod = ($i % 2 );++$i;?><li class="home_main_list">
            <?php switch($cp[typeid]): case "k3": ?><a href="<?php echo U('Mobile/Game/k3',array('code'=>$cp[name]));?>">
                        <i class="iconfont icon-fucaikuai3"></i>
                        <h3><?php echo ($cp[title]); ?></h3>
                        <em><?php echo (msubstr($cp[ftitle],'0','6','utf-8','')); ?></em><?php break;?>
                <?php case "lhc": ?><a href="<?php echo U('Mobile/Game/lhc',array('code'=>$cp[name]));?>">
                        <i class="iconfont" style="color:#07b39e">&#xe65a;</i>
                        <h3><?php echo ($cp[title]); ?></h3>
                        <em><?php echo (msubstr($cp[ftitle],'0','6','utf-8','')); ?></em><?php break;?>
                <?php case "ssc": ?><a href="<?php echo U('Mobile/Game/ssc',array('code'=>$cp[name]));?>">
                        <!--<i class="iconfont icon--shishicai" style="color:#fa7e00;"></i>-->
                        <i class="iconfont icon--shishicai" style="color:#fa7e00;"></i>
                        <h3><?php echo ($cp[title]); ?></h3>
                        <em><?php echo (msubstr($cp[ftitle],'0','6','utf-8','')); ?></em><?php break;?>
                <?php case "pk10": ?><a href="/Game.pk10?code=<?php echo ($cp[name]); ?>">
                        <!--<i class="iconfont icon--pk" style="color:#f22751;"></i>-->
                        <i class="iconfont icon--pk" style="color:#f22751;"></i>
                        <h3><?php echo ($cp[title]); ?></h3>
                        <em><?php echo (msubstr($cp[ftitle],'0','6','utf-8','')); ?></em><?php break;?>
                <?php case "keno": ?><a href="<?php echo U('Mobile/Game/keno',array('code'=>$cp[name]));?>">
                        <!--<i class="iconfont icon-kuaile8" style="color:#fc5826;"></i>-->
                        <i class="iconfont icon-kuaile8" style="color:#fc5826;"></i>
                        <h3><?php echo ($cp[title]); ?></h3>
                        <em><?php echo (msubstr($cp[ftitle],'0','6','utf-8','')); ?></em><?php break;?>
                <?php case "x5": ?><a href="<?php echo U('Mobile/Game/x5',array('code'=>$cp[name]));?>">
                        <!--<i class="iconfont icon-11xuan5" style="color:#218ddd;"></i>-->
                        <i class="iconfont icon-11xuan5" style="color:#218ddd;"></i>
                        <h3><?php echo ($cp[title]); ?></h3>
                        <em><?php echo (msubstr($cp[ftitle],'0','6','utf-8','')); ?></em><?php break;?>
                <?php case "dpc": ?><a href="<?php echo U('Mobile/Game/dpc',array('code'=>$cp[name]));?>">
                        <i class="iconfont <?php if(strstr($cp['name'],'3d')){echo 'icon-fucai3d fc3d_c';}else{echo ' icon-pailie3 pl3_c';}?>"></i>
                        <h3><?php echo ($cp[title]); ?></h3>
                        <em><?php echo (msubstr($cp[ftitle],'0','6','utf-8','')); ?></em><?php break; endswitch;?>
            </a>
        </li><?php endforeach; endif; else: echo "" ;endif; ?>
    <li class="home_main_list">
            <a href="<?php echo U('Index/lotteryHall');?>" style="color: #333;">
                <i style="background: #fa7e00;width: 40px;height: 40px;border-radius: 50%;font-size: 25px;display: block;margin: 0 auto;color: #fff;line-height: 35px;">+</i>
                
                <h3>更多彩种</h3>
                <em>&nbsp&nbsp&nbsp</em>
            </a>
        </li>
</ul>
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

 </if> 
<script>
    $('.closeNotice').on('click',function(){
    $('.ggpop').hide();
    $('.showzhou').hide();
    $.ajax({
        url : "<?php echo U('Common/closegg');?>",
        type:"POST",
    })
})
    $(document).on('click','.hideCodec',function (){
        $('.showCodePage').hide();
    })
    $('li.home_main_list a').click(function(event){
		
        event.preventDefault()
        var url = $(this).attr('href');
		
        $.ajax({
            url:url,
            type: 'POST',
            success : function(json){
			 
             if(json.sign == 'fase'){
                 window.location.href="<?php echo U('Public/login');?>";
             }else{
				
                 window.location.href=url;
             }
            }
        })
    })
</script>
</body>
</html>