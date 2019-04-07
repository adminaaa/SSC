<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo GetVar('webtitle');?></title>
<meta name="keywords" content="<?php echo GetVar('keywords');?>" />
<meta name="description" content="<?php echo GetVar('description');?>" />
<meta name="renderer" content="webkit" />
<link rel="stylesheet" type="text/css" href="/resources/css/reset.css" />
<link rel="stylesheet" type="text/css" href="/resources/css/layout.css" />
<link rel="stylesheet" type="text/css" href="/resources/css/artDialog.css" />
<link rel="stylesheet" type="text/css" href="/resources/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="/resources/css/k3.css" />
<link rel="stylesheet" href="/resources/css2/bootstrap.min.css">
<link rel="stylesheet" href="/resources/css2/reset.css">
<link rel="stylesheet" href="/resources/css2/icon.css">
<link rel="stylesheet" href="/resources/css2/header.css">
<link rel="stylesheet" href="/resources/css2/footer.css">
<link rel="stylesheet" href="/resources/css/style.css"> 
<link rel="stylesheet" href="/resources/css2/main.css">
<link rel="stylesheet" href="/resources/css/common.css">
<link rel="stylesheet" href="/resources/css2/jquery-ui.min.css">
<script>
var WebConfigs = {
	webtitle:"<?php echo ($webconfigs["webtitle"]); ?>",
	kefuthree:"<?php echo ($webconfigs["kefuthree"]); ?>",
	kefuqq:"<?php echo ($webconfigs["kefuqq"]); ?>",
	ROOT : ""
};
</script>
<script>
<?php echo "var k3lotteryrates = ".json_encode($rates,JSON_UNESCAPED_UNICODE);?>
</script>

<!--[if lt IE 9]>
<script src="/resources/js/html5shiv.js"></script>
<![endif]-->

</head>

<body>
<style>	
	.j_lottery_time .shij span{
		color: #fff;
		font-size: 36px;
	}
</style>
<!--header start-->
<script>
    var WebConfigs = {
        "ROOT" : "",
        'IMG' : "/resources/images"
    }
</script>
<link rel="stylesheet" type="text/css" href="/resources/css/artDialog.css" />
<script type="text/javascript" src="/resources/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/resources/js/artDialog.js"></script>
<script type="text/javascript" src="/resources/js/way.min.js"></script>
<script type="text/javascript" src="/resources/main/common.js"></script>
<header class="header" style="background:#000;height:40px;line-height:40px;">
    <div class="container claerfix">
        <div class="allLottery2" style="position:absolute;left: -40px;bottom: -366px;">
            <img src="/resources/images/allgamelink2.png" />
        </div>
        <div class="pull-left backLeft" style="color:#fff;">
            <a href="/" class="backHomeBtn" style="color:#fff;">返回首页</a>
            |
            <a href="javascript:void(0);" class="allLottery" style="color:#fff;">全部彩票</a>
            <div class="backLeftLottery" style="display: none;">
                <i class="user_login_info2_i"></i>
                <dl class="aLotteryList">
                    <dt class="aLotteryListTitle" >快三</dt>
                    <dd class="aLotteryListK3">
                        <?php if(is_array($Allcp)): $key = 0; $__LIST__ = $Allcp;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cp): $mod = ($key % 2 );++$key; if($cp['typeid'] == 'k3'): ?><a href="/Game.<?php echo ($cp["typeid"]); ?>?code=<?php echo ($cp["name"]); ?>"><?php echo ($cp["title"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </dd>
                </dl>
                <dl class="aLotteryList">
                    <dt class="aLotteryListTitle">时时彩</dt>
                    <dd class="aLotteryListSSC">
                        <?php if(is_array($Allcp)): $key = 0; $__LIST__ = $Allcp;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cp): $mod = ($key % 2 );++$key; if($cp['typeid'] == 'ssc'): ?><a href="/Game.<?php echo ($cp["typeid"]); ?>?code=<?php echo ($cp["name"]); ?>"><?php echo ($cp["title"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </dd>
                </dl>
                <dl class="aLotteryList">
                    <dt class="aLotteryListTitle">快乐彩</dt>
                    <dd class="aLotteryListKLC">
                        <?php if(is_array($Allcp)): $key = 0; $__LIST__ = $Allcp;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cp): $mod = ($key % 2 );++$key; if($cp['typeid'] == 'keno' or $cp['typeid'] == 'pk10'): ?><a href="/Game.<?php echo ($cp["typeid"]); ?>?code=<?php echo ($cp["name"]); ?>"><?php echo ($cp["title"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </dd>
                </dl>
                <dl class="aLotteryList">
                    <dt class="aLotteryListTitle">十一选五</dt>
                    <dd class="aLotteryListSYSW">
                        <?php if(is_array($Allcp)): $key = 0; $__LIST__ = $Allcp;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cp): $mod = ($key % 2 );++$key; if($cp['typeid'] == 'x5'): ?><a href="/Game.<?php echo ($cp["typeid"]); ?>?code=<?php echo ($cp["name"]); ?>"><?php echo ($cp["title"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </dd>
                </dl>
                <dl class="aLotteryList">
                    <dt class="aLotteryListTitle">六合彩</dt>
                    <dd class="aLotteryListDPC">
                        <?php if(is_array($Allcp)): $key = 0; $__LIST__ = $Allcp;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cp): $mod = ($key % 2 );++$key; if($cp['typeid'] == 'lhc'): ?><a href="/Game.<?php echo ($cp["typeid"]); ?>?code=<?php echo ($cp["name"]); ?>"><?php echo ($cp["title"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </dd>
                </dl>
                <dl class="aLotteryList">
                    <dt class="aLotteryListTitle">低频彩</dt>
                    <dd class="aLotteryListDPC">
                        <?php if(is_array($Allcp)): $key = 0; $__LIST__ = $Allcp;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cp): $mod = ($key % 2 );++$key; if($cp['typeid'] == 'dpc'): ?><a href="/Game.<?php echo ($cp["typeid"]); ?>?code=<?php echo ($cp["name"]); ?>"><?php echo ($cp["title"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </dd>
                </dl>
            </div>
            <div class="backLeftLottery2" style="display: none;">
                <dl class="aLotteryList">
                    <dt class="aLotteryListTitle" >快三</dt>
                    <dd class="aLotteryListK3">
                        <?php if(is_array($Allcp)): $key = 0; $__LIST__ = $Allcp;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cp): $mod = ($key % 2 );++$key; if($cp['typeid'] == 'k3'): ?><a href="/Game.<?php echo ($cp["typeid"]); ?>?code=<?php echo ($cp["name"]); ?>"><?php echo ($cp["title"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </dd>
                </dl>
                <dl class="aLotteryList">
                    <dt class="aLotteryListTitle">时时彩</dt>
                    <dd class="aLotteryListSSC">
                        <?php if(is_array($Allcp)): $key = 0; $__LIST__ = $Allcp;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cp): $mod = ($key % 2 );++$key; if($cp['typeid'] == 'ssc'): ?><a href="/Game.<?php echo ($cp["typeid"]); ?>?code=<?php echo ($cp["name"]); ?>"><?php echo ($cp["title"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </dd>
                </dl>
                <dl class="aLotteryList">
                    <dt class="aLotteryListTitle">快乐彩</dt>
                    <dd class="aLotteryListKLC">
                        <?php if(is_array($Allcp)): $key = 0; $__LIST__ = $Allcp;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cp): $mod = ($key % 2 );++$key; if($cp['typeid'] == 'keno' or $cp['typeid'] == 'pk10'): ?><a href="/Game.<?php echo ($cp["typeid"]); ?>?code=<?php echo ($cp["name"]); ?>"><?php echo ($cp["title"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </dd>
                </dl>
                <dl class="aLotteryList">
                    <dt class="aLotteryListTitle">十一选五</dt>
                    <dd class="aLotteryListSYSW">
                        <?php if(is_array($Allcp)): $key = 0; $__LIST__ = $Allcp;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cp): $mod = ($key % 2 );++$key; if($cp['typeid'] == 'x5'): ?><a href="/Game.<?php echo ($cp["typeid"]); ?>?code=<?php echo ($cp["name"]); ?>"><?php echo ($cp["title"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </dd>
                </dl>
                <dl class="aLotteryList">
                    <dt class="aLotteryListTitle">六合彩</dt>
                    <dd class="aLotteryListDPC">
                        <?php if(is_array($Allcp)): $key = 0; $__LIST__ = $Allcp;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cp): $mod = ($key % 2 );++$key; if($cp['typeid'] == 'lhc'): ?><a href="/Game.<?php echo ($cp["typeid"]); ?>?code=<?php echo ($cp["name"]); ?>"><?php echo ($cp["title"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </dd>
                </dl>
                <dl class="aLotteryList">
                    <dt class="aLotteryListTitle">低频彩</dt>
                    <dd class="aLotteryListDPC">
                        <?php if(is_array($Allcp)): $key = 0; $__LIST__ = $Allcp;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cp): $mod = ($key % 2 );++$key; if($cp['typeid'] == 'dpc'): ?><a href="/Game.<?php echo ($cp["typeid"]); ?>?code=<?php echo ($cp["name"]); ?>"><?php echo ($cp["title"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </dd>
                </dl>
            </div>
        </div>
        <script>
            
            var timerall2 = null;
            $('.allLottery2,.backLeftLottery2').mouseover(function (){
                if(timerall2){
                    clearTimeout(timerall2);
                }
                $('.backLeftLottery2').show();
            })
            $('.allLottery2,.backLeftLottery2').mouseout(function (){
                timerall2 = setTimeout(function (){
                    $('.backLeftLottery2').hide();
                },300)
            })
            $(document).on('mouseover','.moneyInfo',function (){
                $(this).find('.moneyInfoHover').show();
            })
            $(document).on('mouseout','.moneyInfo',function (){
                $(this).find('.moneyInfoHover').hide();
            })
        </script>
        <?php if(!empty($userinfo["username"])): ?><div class="pull-right user_login_info">
                <ul>
                    <li class="user_login_info1">
                        <a  href="<?php echo U('Member/index');?>" style="color:#fff;" class="user_header" data-html="true" class="user_header" data-container="body" data-toggle="popover" data-placement="bottom"data-content='<div class="ceng"><div class="media"><div class="media-left"><a href="<?php echo U('Member/index');?>"><img src="<?php echo ($userinfo["face"]); ?>" alt="" class="media-boject img-circle"></a><p><?php echo ($userinfo["username"]); ?></p></div><div class="media-body" style="padding-bottom:10px;">
                 
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
        <a href="<?php echo U('Member/index');?>" class="my_account" style="color:#fff;">
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
    <li class="user_login_info3" style="color:#fff;">
        余额：
						<span class="show_money">
							<em class="smallmoney" style="color:#F70B0F;"><?php echo ($userinfo['balance']); ?></em>
							<i class="iconfont refresh_money">&#xe602;</i>
							<em class="hide_money_btn" style="color:#fff;">隐藏</em>
						</span>
						<span class="hide_money" style="display:none;color:#fff;">
							已隐藏
							<em class="show_money_btn" style="color:#fff;">显示</em>
						</span>
    </li>
    <li class="xima l" style="color:#fff;">洗码：<span class="c-green" style="color:green;" way-data="user.xima">0</span></li>
    <li class="user_login_info4">
        <a href="<?php echo U('Account/bankRecharge');?>" style="color:#fff;">充值</a>
    </li>
    <li class="user_login_info5">
        <a href="<?php echo U('Account/withdrawals');?>" style="color:#fff;">提现</a>
    </li>
    <li class="user_login_info6">
        <a href="<?php echo U('Public/LoginOut');?>" style="color:#fff;">退出</a>
    </li>
    <li>
        <a href="<?php echo GetVar('kefuthree');?>" target="_blank" class="keufBox" style="margin-left: 0px;margin-top:8px;"></a>
    </li>
    <li style="padding:0;line-height: 59px;">
        <a href="<?php echo GetVar('kefuqq');?>"    target="_blank">
            <img src="/resources/images/qq.gif" width="20" height="20" style="vertical-align: super;" />
        </a>
    </li>
    </ul>
    </div>
    <?php else: ?>
    <div class="pull-right user_login_info ">
        <a style="margin:0;color:#fff;" href="<?php echo U('Public/login');?>">亲，请登录</a>
        <!--<em style="margin:0 3px;color:#fff;">|</em> <a href="<?php echo U('Public/register');?>" style="color:#fff;">用户注册</a><em style="margin:0 3px;color:#fff;">|</em>-->
        <a href="<?php echo U('Agent/index');?>" style="color:#fff;">代理中心</a>
    </div><?php endif; ?>
    </div>
</header>

<script>
    var ISLOGIN = "<?php echo ($userinfo["id"]); ?>";
</script>

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
<script type="text/javascript" src="/resources/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/resources/js/artDialog.js"></script>
<script type="text/javascript" src="/resources/js/member.page.js"></script>
<script type="text/javascript" src="/resources/js/way.min.js"></script>
<script type="text/javascript" src="/resources/js/jquery.history.js"></script>
<script type="text/javascript" src="/resources/main/common.js"></script>
<script type="text/javascript" src="/resources/main/index.js"></script>
<script type="text/javascript" src="/resources/main/k3.js"></script>
<script type="text/javascript" src="/resources/js2/bootstrap.min.js"></script>
<script type="text/javascript" src="/resources/js/jquery-ui.min.js"></script>
<!--<script src="/resources/js2/require.js" data-main="/resources/js2/homePage"></script>-->

<section class="container wapper" id="gamepage" style="width:1030px!important;">
	<div class="open_containers g_Time_Section">
        <!--彩种logo-->
        <div class="cz_logo">
            <h2 class="lottery_title_h2" way-data="showLotteryTitle.name">---</h2>
            <a href="javascript:void(0)" >
                <i class="icon-fucaikuai3 iconfont color_red common_lottery_icon"></i>
            </a>
        </div>
        <!--彩种logo-->
        <!--彩种开奖倒计时-->
        <div class="cz_daojishi">
            <div class="open_issue">距&nbsp;&nbsp;
				<b class="c_red" id="f_lottery_info_number" way-data="showExpect.currFullExpect">---</b>&nbsp;&nbsp;期投注截止还有：
			</div>
            <div class="j_lottery_time" servertime="" style="font-size: 22px; color: rgb(255, 255, 255);">
				<div class="shij">
                	<span way-data="gametimes.h">00</span>
                    :
                	<span way-data="gametimes.m">00</span>
                    :
                	<span way-data="gametimes.s">00</span>
                </div>
			</div>
        </div>
        <!--彩种开奖倒计时-->

        <!--彩种开奖号码-->
        <div class="cz_openNumb">

            <div class="open_issue">第&nbsp;&nbsp;<b class="c_red" way-data="showExpect.lastFullExpect" id="f_lottery_info_lastnumber" firstissueno="">---</b>&nbsp;&nbsp;期开奖号码为：</div>
            <div class="open_number">
                <input type="hidden" value="1,1,2" id="j_openNum"><!--开奖号码效果赋值-->
                <ul id="openNum_list">
					<li class="open_numb_gif"></li>
					<li class="open_numb_gif"></li>
					<li class="open_numb_gif"></li>
				</ul>
            </div>

        </div>
        <!--彩种开奖号码-->
    </div>
    
	<div class="lottery_playContainer">
		<div class="system_lottery_box">
			<span class="prev">
				<i class="iconfont icon-a866"></i>
			</span>
			<ul class="system_lottery" style="width: 1506px;">
				<!--彩种代码-->
				<?php if(is_array($k3list)): $i = 0; $__LIST__ = $k3list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li <?php if($vo['name'] == $lotteryname): ?>class="curr"<?php endif; ?> lotteryname="<?php echo ($vo["name"]); ?>">
						<a href="/Game.k3?code=<?php echo ($vo["name"]); ?>"><?php echo ($vo["title"]); ?></a>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>	
			</ul>
			<span class="next">
				<i class="iconfont icon-a866"></i>
			</span>
        </div>

		<div class="play_select_insert" id="j_play_select">
			<ul class="play_select_tit">
				<li lottery_code="k3hzzx" class="curr">和值</li>	
				<li lottery_code="k3sthtx">三同号通选</li>
				<li lottery_code="k3sthdx">三同号单选</li>
				<li lottery_code="k3sbthbz">三不同号</li>
				<li lottery_code="k3slhtx">三连号通选</li>
				<li lottery_code="k3slhdx">三连号单选</li>
				<li lottery_code="k3ethfx">二同号复选</li>
				<li lottery_code="k3ethdx">二同号单选</li>
				<li lottery_code="k3ebthbz">二不同号</li> 
			</ul>
		</div>


    <section id="gameBet" class="cl">
		<section class="gameBet_balls">
			<div class="gameBet_left l">
			<?php if($nowcpinfo['iswh'] == 0): ?><div class="bet-num-box ">
					<div class="k3hzzx" style="display:block">
						<p class="text-c pt-10 pb-10">投注说明：至少选择1个和值投注，选号与开奖的三个号码相加的数值一致即中奖。奖金1.95-168倍</p>
						<div class="g_Number_Section">
						<ul>
							<li><a class="ball_number" playid="k3hz3" ball-number="3" href="javascript:void(0)">3</a><span class="ball_aid" rate_k3hz3></span></li>
							<li><a class="ball_number" playid="k3hz4" ball-number="4" href="javascript:void(0)">4</a><span class="ball_aid" rate_k3hz4></span></li>
							<li><a class="ball_number" playid="k3hz5" ball-number="5" href="javascript:void(0)">5</a><span class="ball_aid" rate_k3hz5></span></li>
							<li><a class="ball_number" playid="k3hz6" ball-number="6" href="javascript:void(0)">6</a><span class="ball_aid" rate_k3hz6></span></li>
							<li><a class="ball_number" playid="k3hz7" ball-number="7" href="javascript:void(0)">7</a><span class="ball_aid" rate_k3hz7></span></li>
							<li><a class="ball_number" playid="k3hz8" ball-number="8" href="javascript:void(0)">8</a><span class="ball_aid" rate_k3hz8></span></li>
							<li><a class="ball_number" playid="k3hz9" ball-number="9" href="javascript:void(0)">9</a><span class="ball_aid" rate_k3hz9></span></li>
							<li><a class="ball_number" playid="k3hz10" ball-number="10" href="javascript:void(0)">10</a><span class="ball_aid" rate_k3hz10></span></li>
						 </ul>
						 <ul>
							<li><a class="ball_number" playid="k3hz11" ball-number="11" href="javascript:void(0)">11</a><span class="ball_aid" rate_k3hz11></span></li>
							<li><a class="ball_number" playid="k3hz12" ball-number="12" href="javascript:void(0)">12</a><span class="ball_aid" rate_k3hz12></span></li>
							<li><a class="ball_number" playid="k3hz13" ball-number="13" href="javascript:void(0)">13</a><span class="ball_aid" rate_k3hz13></span></li>
							<li><a class="ball_number" playid="k3hz14" ball-number="14" href="javascript:void(0)">14</a><span class="ball_aid" rate_k3hz14></span></li>
							<li><a class="ball_number" playid="k3hz15" ball-number="15" href="javascript:void(0)">15</a><span class="ball_aid" rate_k3hz15></span></li>
							<li><a class="ball_number" playid="k3hz16" ball-number="16" href="javascript:void(0)">16</a><span class="ball_aid" rate_k3hz16></span></li>
							<li><a class="ball_number" playid="k3hz17" ball-number="17" href="javascript:void(0)">17</a><span class="ball_aid" rate_k3hz17></span></li>
							<li><a class="ball_number" playid="k3hz18" ball-number="18" href="javascript:void(0)">18</a><span class="ball_aid" rate_k3hz18></span></li>
						 </ul>
						 <ul>
							<li><a class="ball_number" playid="k3hzbig" ball-number="大" href="javascript:void(0)">大</a><span class="ball_aid" rate_k3hzbig></span></li>
							<li><a class="ball_number" playid="k3hzsmall" ball-number="小" href="javascript:void(0)">小</a><span class="ball_aid" rate_k3hzsmall></span></li>
							<li><a class="ball_number" playid="k3hzodd" ball-number="单" href="javascript:void(0)">单</a><span class="ball_aid" rate_k3hzodd></span></li>
							<li><a class="ball_number" playid="k3hzeven" ball-number="双" href="javascript:void(0)">双</a><span class="ball_aid" rate_k3hzeven></span></li>
						</ul>
						</div>
					</div>
					<div class="k3sthtx" style="display:none">
						<p class="text-c pt-10 pb-10">10元购买6个三同号(111,222,333,444,555,666)投注，选号与开奖号码一致即中奖<span class="ball_aid" rate_k3sthtx style="display:inline">赔率读取中...</span>倍。</p>
						<div class="g_Number_Section">
							<a class="ball_number" playid="k3sthtx" ball-number="三同号通选" href="javascript:void(0)">三同号通选</a>
						</div>
					</div>
					
					<div class="k3sthdx" style="display:none;">
						<p class="text-c pt-10 pb-10">至少选择1个三同号投注，选号与开奖号码一致即中奖<span class="ball_aid" rate_k3sthdx style="display:inline">赔率读取中...</span>倍。</p>
					<div class="g_Number_Section">
					 <ul>
						<li><a class="ball_number" playid="k3sthdx" ball-number="111" href="javascript:void(0)">111</a></li>
						<li><a class="ball_number" playid="k3sthdx" ball-number="222" href="javascript:void(0)">222</a></li>
						<li><a class="ball_number" playid="k3sthdx" ball-number="333" href="javascript:void(0)">333</a></li>
						<li><a class="ball_number" playid="k3sthdx" ball-number="444" href="javascript:void(0)">444</a></li>
						<li><a class="ball_number" playid="k3sthdx" ball-number="555" href="javascript:void(0)">555</a></li>
						<li><a class="ball_number" playid="k3sthdx" ball-number="666" href="javascript:void(0)">666</a></li>
						</ul>
					</div>
					</div>
		
					<div class="k3sbthbz" style="display:none">
						<p class="text-c pt-10 pb-10">至少选择3个号码投注，选号与开奖号码一致即中奖<span class="ball_aid" rate_k3sbthbz style="display:inline">赔率读取中...</span>倍。</p>
						<div class="g_Number_Section">
						<ul>
							<li><a class="ball_number" playid="k3sbthbz" ball-number="1" href="javascript:void(0)">1</a></li>
							<li><a class="ball_number" playid="k3sbthbz" ball-number="2" href="javascript:void(0)">2</a></li>
							<li><a class="ball_number" playid="k3sbthbz" ball-number="3" href="javascript:void(0)">3</a></li>
							<li><a class="ball_number" playid="k3sbthbz" ball-number="4" href="javascript:void(0)">4</a></li>
							<li><a class="ball_number" playid="k3sbthbz" ball-number="5" href="javascript:void(0)">5</a></li>
							<li><a class="ball_number" playid="k3sbthbz" ball-number="6" href="javascript:void(0)">6</a></li>
					 	</ul>
						 </div>
					</div>
					<div class="k3slhtx" style="display:none">
						<p class="text-c pt-10 pb-10">10元购买4个三连号（123、234、345、456）投注，选号与开奖号码一致即中奖<span class="ball_aid" rate_k3slhtx style="display:inline">赔率读取中...</span>倍。</p>
						<div class="g_Number_Section">
						<a class="ball_number" playid="k3slhtx" ball-number="三连号通选" href="javascript:void(0)">三连号通选</a>
						</div>
					</div>
		
					<div class="k3slhdx" style="display:none">
						<p class="text-c pt-10 pb-10">10元购买1个三连号单选(123,234,345,456)投注，选号与开奖号码一致即中奖<span class="ball_aid" rate_k3slhdx style="display:inline">赔率读取中...</span>倍。</p>
						<div class="g_Number_Section">
						<ul>
							<li><a class="ball_number" playid="k3slhdx" ball-number="123" href="javascript:void(0)">123</a></li>
							<li><a class="ball_number" playid="k3slhdx" ball-number="234" href="javascript:void(0)">234</a></li>
							<li><a class="ball_number" playid="k3slhdx" ball-number="345" href="javascript:void(0)">345</a></li>
							<li><a class="ball_number" playid="k3slhdx" ball-number="456" href="javascript:void(0)">456</a></li>
					 	</ul>
						 </div>
					</div>
		
					<div class="k3ethfx" style="display:none">
						<p class="text-c pt-10 pb-10">10元购买1个二同号(11*,22*,33*,44*,55*,66*)投注，选号与开奖号码一致即中奖<span class="ball_aid" rate_k3ethfx style="display:inline">赔率读取中...</span>倍。</p>
						<div class="g_Number_Section">
						<ul>
						<li><a class="ball_number" playid="k3ethfx" ball-number="11" href="javascript:void(0)">11</a></li>
						<li><a class="ball_number" playid="k3ethfx" ball-number="22" href="javascript:void(0)">22</a></li>
						<li><a class="ball_number" playid="k3ethfx" ball-number="33" href="javascript:void(0)">33</a></li>
						<li><a class="ball_number" playid="k3ethfx" ball-number="44" href="javascript:void(0)">44</a></li>
						<li><a class="ball_number" playid="k3ethfx" ball-number="55" href="javascript:void(0)">55</a></li>
						<li><a class="ball_number" playid="k3ethfx" ball-number="66" href="javascript:void(0)">66</a></li>
					 </ul>
					 </div>
					</div>
		
					<div class="k3ethdx" style="display:none">
						<p class="text-c pt-10 pb-10">选择1个相同号码和1个不同号码投注，选号与开奖号码一致即中奖<span class="ball_aid" rate_k3ethdx style="display:inline">赔率读取中...</span>倍。</p>
						<div class="g_Number_Section">
						<ul>
						<li><a class="ball_number" playid="k3ethdx" ball-number="11" href="javascript:void(0)">11</a></li>
						<li><a class="ball_number" playid="k3ethdx" ball-number="22" href="javascript:void(0)">22</a></li>
						<li><a class="ball_number" playid="k3ethdx" ball-number="33" href="javascript:void(0)">33</a></li>
						<li><a class="ball_number" playid="k3ethdx" ball-number="44" href="javascript:void(0)">44</a></li>
						<li><a class="ball_number" playid="k3ethdx" ball-number="55" href="javascript:void(0)">55</a></li>
						<li><a class="ball_number" playid="k3ethdx" ball-number="66" href="javascript:void(0)">66</a></li>
					 </ul>
						<ul>
						<li><a class="ball_number" playid="k3ethdx" ball-number="1" href="javascript:void(0)">1</a></li>
						<li><a class="ball_number" playid="k3ethdx" ball-number="2" href="javascript:void(0)">2</a></li>
						<li><a class="ball_number" playid="k3ethdx" ball-number="3" href="javascript:void(0)">3</a></li>
						<li><a class="ball_number" playid="k3ethdx" ball-number="4" href="javascript:void(0)">4</a></li>
						<li><a class="ball_number" playid="k3ethdx" ball-number="5" href="javascript:void(0)">5</a></li>
						<li><a class="ball_number" playid="k3ethdx" ball-number="6" href="javascript:void(0)">6</a></li>
					 </ul>
					 </div>
					</div>
		
					<div class="k3ebthbz" style="display:none">
						<p class="text-c pt-10 pb-10">至少选择2个号码投注，选号与开奖号码一致即中奖<span class="ball_aid" rate_k3ebthbz style="display:inline">赔率读取中...</span>倍。</p>
						<div class="g_Number_Section">
						<ul>
							<li><a class="ball_number" playid="k3ebthbz" ball-number="1" href="javascript:void(0)">1</a></li>
							<li><a class="ball_number" playid="k3ebthbz" ball-number="2" href="javascript:void(0)">2</a></li>
							<li><a class="ball_number" playid="k3ebthbz" ball-number="3" href="javascript:void(0)">3</a></li>
							<li><a class="ball_number" playid="k3ebthbz" ball-number="4" href="javascript:void(0)">4</a></li>
							<li><a class="ball_number" playid="k3ebthbz" ball-number="5" href="javascript:void(0)">5</a></li>
							<li><a class="ball_number" playid="k3ebthbz" ball-number="6" href="javascript:void(0)">6</a></li>
					 	</ul>
						 </div>
					</div>
				</div> 
				<div class="addtobet" style="display:none;">
					<button class="addtobetbtn" type="button">添加到投注列表</button>
				</div>
				<div class="xiad-left">
				<dl class="g_Order_Section">
				
				</dl>
				</div>     
				<div class="g_Chase_Section">
					<div class="chase_Program">
						<p class="p_chase">方案注数
							<i class="c_green fw_600" way-data="ytotal_money_zhushu" id="f_gameOrder_lotterys_num">0</i> 注， 
							金额 <i class="c_org fw_600">¥<em id="f_gameOrder_amount" way-data="ytotal_money">0</em></i> 元  
						</p>
					</div>
				</div>   
				<div class="xiad-righ">
					<ul>
						<li class="li22"><span id="f_submit_order">
							<img src="/resources/images/icon/icon_06.png">&nbsp;&nbsp;确认投注</span>
						</li>
						<li class="li22 li23"><span id="orderlist_clear">
							<img src="/resources/images/icon/icon_19.png">&nbsp;&nbsp;清空单号</span>
						</li>
					</ul>
				</div>
			<?php else: ?>
			<img src="/resources/images/k3cpcz.png" /><?php endif; ?>
			</div>

			
		</section>
		<!--选号区域右侧-->
        <div class="gameBet_right">
            <!--今日开奖号码-->
            <div class="right_infsoBlock">
                <div class="title">
                    <span class="fl">开奖公告</span>
                    <span class="fr">
                    <a target="_blank" class="open_lotteryNumb_chart yopen_explain"  href="<?php echo U('Trend/trend_k3',array('code'=>$nowcpinfo['name']));?>">走势图</a>
                    |
                    <a href="javascript:void(0);" class="yopen_explain helps">玩法说明</a>
                    </span>
                </div>
                <div class="block_container lishi">
                    <table id="fn_getoPenGame" border="0px" cellpadding="0" cellspacing="0">
                        <colgroup>
                            <col width="93px" />
                            <col width="50px" />
                            <col width="40px" />
                            <col width="59px" />
                        </colgroup>
                        <thead>
                        <tr>
                            <th>期数</th>
                            <th>奖号</th>
                            <th>和值</th>
                            <th>形态</th>
                        </tr>
                        </thead>
                        <tbody class="tbody text-c">
                        <!--开奖期号-->
                        <!--开奖号码-->
                        <!--和值-->
                        <!--大小-->
                        <!--单双-->
                        </tbody>
                    </table>
                </div>
            </div>
            <!--今日开奖号码-->

            <!--最新中奖会员-->
            <div class="least_luckMember">
                <div class="title">
                    <span>中奖信息</span>
                    <em class="to_update">中奖信息实时更新</em>
                </div>
                <div class="ranking_scroll_box">
                <ul class="ranking_list sum_icon ranking_scroll">

                    <?php if(is_array($list2)): $i = 0; $__LIST__ = array_slice($list2,0,7,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?><li data-html="true" class="user_header" data-container="body" data-toggle="popover" data-placement="left" data-content="<div class=&quot;ceng&quot;><div class=&quot;media&quot;><div class=&quot;media-left&quot;><img src=&quot;<?php echo ($value['face']); ?>&quot; alt=&quot;&quot; class=&quot;media-boject img-circle&quot;><p></p></div><div class=&quot;media-body&quot;><p class=&quot;margin_0&quot;>账号：<span><?php echo (substr_replace($value['username'],'**',1,2)); ?></span></p><p class=&quot;margin_0&quot;>等级：<span><?php echo ($value['groupname']); ?></span></p><p class=&quot;margin_0&quot;>头衔：<span><?php echo ($value['touhan']); ?></span></p><p class=&quot;margin_0&quot;>累积中奖：<span><?php echo ($value['okamountcount']); ?></span></p></div>
                   <div class=&quot;media-footer&quot; style=&quot;padding-top:3px;&quot;>
                       <?php if(is_array($value['k3names'])): $i = 0; $__LIST__ = array_slice($value['k3names'],0,7,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><a href=&quot;<?php echo U('Game/k3');?>?code=<?php echo ($val[name]); ?>&quot; class=&quot;color_res&quot; ><span style=&quot;color:#333&quot;><?php echo (substr($val["title"],0,6)); ?></span><i class=&quot;iconfont&quot;></i></a><?php endforeach; endif; else: echo "" ;endif; ?>
                   </div></div></div>" data-original-title="" title="">
                        <div class="media clearfix">
                            <div class="media-left">
                                <img src="<?php echo ($value['face']); ?>" alt="" class="media-boject img-circle">
                            </div>
                            <div class="media-body">
                                <p class="margin_0">账号昵称：<span><?php echo (substr_replace($value['username'],'**',1,2)); ?></span></p>
                                <p class="margin_0">中奖金额：<em><?php echo ($value['okamount']); ?></em></p>
                            </div>
                        </div>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                </div>
            </div>
            <!--最新中奖会员-->
        </div>
        <!--选号区域右侧-->
		<!--<section class="gameBet_openlists">
			<div class="jinqi">
				<div class="title" style="height:30px; line-height:30px; border-bottom:1px solid #ddd">
                    <p class="pull-left" style="margin-left:10px;">
                        <img src="/resources/images/jbei.jpg" />开奖公告
                    </p>
                    <p class="pull-right" style="margin-right:10px;">
                        <a href="<?php echo U('Game/trend',['code'=>$lotteryname]);?>">形态走势</a>
                    </p>
                </div>
				<div class="lishi">
				<table>
					<tbody class="text-c"></tbody>
				</table>
				</div>
			</div>
		</section>-->
    </section>
<!--投注记录---->
<section class="historylist mt-20">
	<div class="history-box">
		<div class="tabBd lot-tabBd" style="display:block">
			<table class="mem-biao" id="userBets">
				<thead>
				<tr>
					<th>订单号</th>
					<th>期号</th>
					<th>开奖号</th>
					<th>玩法</th>
					<th>赔率</th>
					<th>投注总额</th>
					<th>奖金</th>
					<th>下单时间</th>
					<th>状态</th>
				</tr>
				</thead>
				<tbody id="userBetsListToday"></table>
		</div>
		<div class="member-pag paging"></div>
	</div>
</section>
</section>
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


<div id="submitComfirebox" style="display:none">
    <div class="submitComfire">	<ul class="ui-form"><li><label for="question1" class="ui-label">彩种：</label><span class="ui-text-info" way-data="showExpect.shortname">--</span></li>		<li><label for="question1" class="ui-label">期号：</label><span class="ui-text-info">第 <span way-data="showExpect.currFullExpect" class="mark">---</span> 期</span></li>		<li><label for="answer1" class="ui-label">详情：</label>		<div id="Orderdetaillist" class="textarea" style="font-size:12px;">		</div>		</li>		<li><label for="question2" class="ui-label">付款总金额：</label><span class="ui-text-info"><span id="Orderdetailtotalprice" class="mark">0.00</span>元</span></li>		<li><label for="question2" class="ui-label">付款帐号：</label><span way-data="user.username" class="ui-text-info mark">---</span></li>	</ul>	<p class="text-note">	</p>	<p class="text-note">	</p></div>
</div>

<div id="submitComfireboxaaa" style="display:none">
    <div class="submitComfire">
    <ul class="ui-form">
    <li>
        <label for="question1" class="ui-label">彩种：</label>
        <span class="ui-text-info" way-data="showExpect.shortname">--</span>
    </li>
    <li>
        <label for="question1" class="ui-label">期号：</label>
        <span class="ui-text-info">第 <span way-data="showExpect.currFullExpect" class="mark">---</span> 期</span>
    </li>
    <li>
        <label for="answer1" class="ui-label">详情：</label>
        <div id="Orderdetaillist" class="textarea" style="font-size:12px;">		</div>
    </li>
    <li>
        <label for="question2" class="ui-label">付款总金额：</label>
        <span class="ui-text-info"><span id="Orderdetailtotalprice" class="mark">0.00</span>元</span>
    </li>
    <li>
        <label for="question2" class="ui-label">付款帐号：</label>
        <span way-data="user.username" class="ui-text-info mark">---</span>
    </li>
    </ul>
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
<div id="getBillInfobox" style="display:none">
<div class="submitComfire">
<ul class="ui-form">
<li style="width:50%; float:left"><label for="question1" class="ui-label">彩种：</label><span class="mark" way-data="BillInfo.cptitle">--</span></li>
<li style="width:50%; float:left"><label for="question1" class="ui-label">期号：</label><span class="mark">第 <span way-data="BillInfo.expect" class="mark">--</span> 期</span></li>
<li style="width:50%; float:left"><label for="question1" class="ui-label">玩法：</label><span class="mark" way-data="BillInfo.playtitle">--</span></li>
<li style="width:50%; float:left"><label for="question1" class="ui-label">赔率：</label><span way-data="BillInfo.mode" class="mark">--</span></li>
<li><label for="answer1" class="ui-label">投注号码：</label><span class="mark" way-data="BillInfo.tzcode">--</span></li>
<li style="width:50%; float:left"><label for="question2" class="ui-label">单注金额：</label><span class="mark" way-data="BillInfo.amount">--</span></li><li style="width:50%; float:left"><label for="question2" class="ui-label">投注注数：</label><span class="mark" way-data="BillInfo.itemcount">--</span></li>
<li style="width:50%; float:left"><label for="question2" class="ui-label">中奖金额：</label><span class="mark" way-data="BillInfo.okamount">--</span></li><li style="width:50%; float:left"><label for="question2" class="ui-label">中奖注数：</label><span class="mark" way-data="BillInfo.okcount">--</span></li>


<li style="width:50%; float:left"><label for="question2" class="ui-label">开奖号码：</label><span class="mark" way-data="BillInfo.opencode">--</span></li><li style="width:50%; float:left"><label for="question2" class="ui-label">中奖状态：</label><span id="BillInfo_isdraw" way-data="BillInfo.state">--</span></li>
</ul>
</div>
</div>
<script>
	 function winningScroll(obj) {
			var height = $(obj).find('li:first').outerHeight();
			var str = -height + 'px';
			var index = 0;
 
			$(obj).animate({'marginTop' : str},3000,function (){
				$(this).css('marginTop','0px').find('li:first').appendTo($(this));
			})
		}

	function openwindow(url,name,iWidth,iHeight) {
		var url; 
		var name; 
		var iWidth; 
		var iHeight; 
	 
		var iTop = (window.screen.height-30-iHeight)/2; 
		var iLeft = (window.screen.width-10-iWidth)/2; 
		window.open(url,name,'height='+iHeight+',,innerHeight='+iHeight+',width='+iWidth+',innerWidth='+iWidth+',top='+iTop+',left='+iLeft+',toolbar=no,menubar=no,scrollbars=auto,resizeable=no,location=no,status=no');
	}
 
	$('.helps').click(function () {
		openwindow("<?php echo U('Game/howtoplay', array('name'=>$nowcpinfo['name'],'cz'=>ACTION_NAME));?>",'',1058,870);
	})
 
	var myar = setInterval("winningScroll('.ranking_scroll')",5000);
	$('.ranking_scroll').hover(function (){ 
		clearInterval(myar);
	},function () {
		myar = setInterval("winningScroll('.ranking_scroll')",5000);
	})
 
	var timer1 = null;
	$('.my_account,.user_login_info2_list').mouseover(function (){
		if(timer1){
			clearTimeout(timer1);
		}
		$('.user_login_info2_list').show();
	})
	$('.my_account,.user_login_info2_list').mouseout(function (){
		timer1 = setTimeout(function (){
			$('.user_login_info2_list').hide();
		},300)
	})
 
	var timer2 = null;
	$('.allLottery,.backLeftLottery').mouseover(function (){
		if(timer2){
			clearTimeout(timer2);
		}
		$('.backLeftLottery').show();
	})
	$('.allLottery,.backLeftLottery').mouseout(function (){
		timer2 = setTimeout(function (){
			$('.backLeftLottery').hide();
		},300)
	})
 
	$('.hide_money_btn').click(function () {
		$('.show_money').hide();
		$('.hide_money').show();
	})
	$('.show_money_btn').click(function () {
		$('.show_money').show();
		$('.hide_money').hide();
	})
 
	var index  = 0;
	$('.refresh_money').click(function () {
		index++;
		var sum = index*360;
		$(this).css('transform','rotate('+sum+'deg)');
	})
 
	$("[data-toggle='popover']").popover({
	trigger: "hover",
	delay: {hide: 100}
	}).on('shown.bs.popover', function (event) {
			var that = this;
			$('.popover').on('mouseenter', function () {
					$(that).attr('in', true);
			}).on('mouseleave', function () {
					$(that).removeAttr('in');
					$(that).popover('hide');
			});
	}).on('hide.bs.popover', function (event) {
			if ($(this).attr('in')) {
					event.preventDefault();
			}
	});
</script>
<style>
	.looding{
		width:100%;
		height:200%;
		z-index: 999;
		background: rgba(0,0,0,0.7);
		position: absolute;
		color:#333;
		top:0;
		left:0;
		text-align:center
	}
	.looding span{
		z-index: 9999;
		background: #ffffff;
		text-align:center;
		font-size:20px;
		color:#000;
		display: block;
		width:200px;
		height:50px;
		line-height: 50px;
		border-radius: 5px;
		position: fixed;
		top: 50%;
		left: 50%;
		margin-top: -25px;
		margin-left: -100PX;
	}
</style>
<div class="looding"  style="display:none;">
	<span>正在处理数椐... <img src="/resources/images/addloading.gif" width="23" height="23" alt=""></span>

</div>
</body>
</html>