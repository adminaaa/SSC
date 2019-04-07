<?php if (!defined('THINK_PATH')) exit(); $webheadertitle = $nowcpinfo['title']; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo ($webheadertitle); ?></title>
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="/favicon.ico">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/Template/Mobile/css/sm.css">
<link rel="stylesheet" href="/Template/Mobile/css/sm-extend.min.css">

<link rel="stylesheet" type="text/css" href="/Template/Mobile/css/jquery.range.css" />


<script>
    var WebConfigs = {
        'ROOT' : ""
    } 
<?php echo "var k3lotteryrates = ".json_encode($rates,JSON_UNESCAPED_UNICODE);?>
</script>
<script type="text/javascript" src="/resources/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/Template/Mobile/js/layer/layer.js"></script>
<script type="text/javascript">
var jq=$.noConflict();
</script>
<script type='text/javascript' src='/Template/Mobile/js/zepto.js' charset='utf-8'></script>

<script type="text/javascript" src="/Template/Mobile/js/jquery.range.js"></script>
<script type='text/javascript' src='/Template/Mobile/js/config.js' charset='utf-8'></script>
<script type='text/javascript' src='/Template/Mobile/js/fx.js' charset='utf-8'></script>
<script type='text/javascript' src='/Template/Mobile/js/sm.min.js' charset='utf-8'></script>
<script type='text/javascript' src='/Template/Mobile/js/slideupdown.js' charset='utf-8'></script>
<script type='text/javascript' src='/Template/Mobile/js/sm-extend.min.js' charset='utf-8'></script>
<link rel="stylesheet" href="/Template/Mobile/css/sm-extend.min.css">
<link rel="stylesheet" href="/Template/Mobile/css/reset.css">
<link rel="stylesheet" href="/Template/Mobile/css/theme-red.css">  

<link rel="stylesheet" href="/Template/Mobile/css/icon.css">
<script>
      

var lotteryinfo = <?php echo json_encode($nowcpinfo,JSON_UNESCAPED_UNICODE);?>;
</script>
<script type='text/javascript' src='/Template/Mobile/js/way.min.js' charset='utf-8'></script>
<script type="text/javascript" src="/Template/Mobile/js/member.page.js"></script>
<script type='text/javascript' src='/Template/Mobile/js/common.js' charset='utf-8'></script>

<script type='text/javascript' src='/Template/Mobile/js/k3.js' charset='utf-8'></script>
<style>
.bottom_navbar{position: absolute;bottom: 0;z-index: 9999;width: 100%;}
.bottom_navbar ul{list-style: none;overflow: hidden;padding: 0;margin: 0;background: #22292c;color: #fff;padding-top: 5px;}
.bottom_navbar ul li{ float: left;width: 25%;text-align: center;}
.am-navbar-default a {color: #fff;}
.am-navbar-nav a { display: inline-block;width: 100%;height: 49px;line-height: 20px;}
.bottom_navbar .bottom_navbar_list i{font-size: 25px;line-height: 30px;}
.am-navbar-nav a .am-navbar-label {padding-top: 2px;line-height: 1;font-size: 12px;display: block;word-wrap: normal;text-overflow: ellipsis;white-space: nowrap;overflow: hidden;font-size: 14px;}
.bottom_navbar .active {color: #e54042;}
.choice_lottery_playdetail {
    position: absolute;
    z-index: 100;
    top: -50px;
    left: 50%;
}
</style>
</head>
<body>
<div class="page-group">
      <!-- 你的html代码 -->
      <div class="pa yyplay_select_container" id="PageSwitch">
        <?php if(is_array($k3list)): $i = 0; $__LIST__ = $k3list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$k3vo): $mod = ($i % 2 );++$i;?><a  data-k3url="<?php echo U('Game/k3',['code'=>$k3vo['name']]);?>"><?php echo ($k3vo["title"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
      <div class="page">
        <style>
    .theme-red .icon-sanjiaoxing{
        display: inline-block;
        transform: rotate(180deg);
        transition: .6s;
        font-size: 22px;
    }
</style>

<header class="bar bar-nav theme-red" style="background:#000;text-align:center;">
    <?php if($userinfo and ($userinfo['islogin'] == 1)): if((strtolower(CONTROLLER_NAME) == 'index') and (strtolower(ACTION_NAME) == 'index')): ?><a class="button button-link button-nav pull-left bar-nav-top-left" href="/">
        <span class="icon icon-home"></span>
    </a>
    <?php else: ?>
    <a class="button button-link button-nav pull-left bar-nav-top-left" href="/">
        <span class="iconfont icon-shouyeshouye1"></span>
    </a><?php endif; ?>
    <?php if((strtolower(CONTROLLER_NAME) == 'game') and (strtolower(ACTION_NAME) == 'k3') and is_array($nowcpinfo)): ?><h1 class="title" onclick="GamePageSwitchToggle();"><?php echo ($nowcpinfo["title"]); ?><i class="iconfont icon-sanjiaoxing"></i></h1>
    
    <?php else: ?>
    <h1 class="title"><?php echo ($webheadertitle); ?></h1><?php endif; ?>

    <?php else: ?>
    <?php if((strtolower(CONTROLLER_NAME) == 'index') and (strtolower(ACTION_NAME) == 'index')): ?><a class="button button-link button-nav pull-left bar-nav-top-left" href="/">
        <span class="iconfont icon-shouyeshouye1"></span>
    </a>
    <?php else: ?>
    <a class="button button-link button-nav pull-left bar-nav-top-left" href="/">
        <span class="icon icon-left"></span>
    </a><?php endif; ?>

    <a class="button button-link button-nav pull-right" onclick="lianxikefu('<?php echo ($WebConfigs["kefuthree"]); ?>')">
        <span class="icon icon-message"></span>
        联系客服
    </a>
    <?php if((strtolower(CONTROLLER_NAME) == 'game') and (strtolower(ACTION_NAME) == 'k3') and is_array($nowcpinfo)): ?><h1 class="title" onclick="GamePageSwitchToggle();"><?php echo ($nowcpinfo["title"]); ?> <span class="icon icon-down" style="font-size:0.8rem;"></span></h1>
    <!-- <div class="pa yyplay_select_container" id="PageSwitch">
        <?php if(is_array($k3list)): $i = 0; $__LIST__ = $k3list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$k3vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Game/k3',['code'=>$k3vo['name']]);?>"><?php echo ($k3vo["title"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
    </div> -->
    <?php else: ?>
    <h1 class="title"><?php echo ($webheadertitle); ?></h1><?php endif; endif; ?>
    <!-- 选择与切换玩法 -->
        <em class="gameInfo" style="font-size: 12px;display: inline-block;line-height: 13px;text-align: left;margin-top: 13px;">玩<br>法</em>
        <div class="choice_lottery_playdetail_left">
            <a class="choice_playName" href="#">和值</a>
            <i class="iconfont icon-sanjiaoxing" style="color: #f0c930;transform: rotate(180deg);transition: .6s;"></i>
        </div>    

</header>


          <div class="content">
			
            <div class="play_select_container yyplay_select_container">
                <!-- 玩法切换 -->
                <div class="play_select_insert" id="j_play_select">
                    
                    <ul class="play_select_tit"> 
                
                            
                            <li lottery_code="k3hzzx" parent_code="<?php echo ($nowcpinfo["name"]); ?>" class="curr lottery_1">
                                <a href="javascript:void(0)" class="lineMore-item">和值</a>
                                <p class="ypeil"><?php echo ($minPeilv); ?>-<?php echo ($maxPeilv); ?>倍</p>
                                <p class="ysaizi">
                                    <span class="dice dice1"></span>+
                                    <span class="dice dice2"></span>+
                                    <span class="dice dice3"></span>
                                </p>
                            </li>
                        
                            <li lottery_code="k3sthtx" parent_code="<?php echo ($nowcpinfo["name"]); ?>" class=" lottery_3">
                                <a href="javascript:void(0)" class="lineMore-item">三同号通选</a> 
                                <p class="ypeil">赔率<?php echo ($peilv["k3sthtx"]); ?>倍</p>
                                <p class="ysaizi">
                                    <span class="dice dice1"></span> 
                                    <span class="dice dice1"></span> 
                                    <span class="dice dice1"></span>
                                </p>
                            </li>
                        
                            <li lottery_code="k3sthdx" parent_code="<?php echo ($nowcpinfo["name"]); ?>" class=" lottery_5">
                                <a href="javascript:void(0)" class="lineMore-item">三同号单选</a>
                                <p class="ypeil">赔率<?php echo ($peilv["k3sthdx"]); ?>倍</p>
                                <p class="ysaizi">
                                    <span class="dice dice1"></span> 
                                    <span class="dice dice1"></span> 
                                    <span class="dice dice1"></span>
                                </p>
                            </li>
                        
                            <li lottery_code="k3sbthbz" parent_code="<?php echo ($nowcpinfo["name"]); ?>" class=" lottery_7">
                                <a href="javascript:void(0)" class="lineMore-item">三不同号</a>
                                <p class="ypeil">赔率<?php echo ($peilv["k3sbthbz"]); ?>倍</p>
                                <p class="ysaizi">
                                    <span class="dice dice2"></span> 
                                    <span class="dice dice3"></span> 
                                    <span class="dice dice5"></span>
                                </p>
                            </li>
                        
                            <li lottery_code="k3slhtx" parent_code="<?php echo ($nowcpinfo["name"]); ?>" class=" lottery_9">
                                <a href="javascript:void(0)" class="lineMore-item">三连号通选</a>
                                <p class="ypeil">赔率<?php echo ($peilv["k3slhtx"]); ?>倍</p>
                                <p class="ysaizi">
                                    <span class="dice dice1"></span> 
                                    <span class="dice dice2"></span> 
                                    <span class="dice dice3"></span>
                                </p>
                            </li>
                        
                            <li lottery_code="k3ethfx" parent_code="<?php echo ($nowcpinfo["name"]); ?>" class=" lottery_11">
                                <a href="javascript:void(0)" class="lineMore-item">二同号复选</a>
                                <p class="ypeil">赔率<?php echo ($peilv["k3ethfx"]); ?>倍</p>
                                <p class="ysaizi">
                                    <span class="dice dice1"></span> 
                                    <span class="dice dice1"></span> 
                                    <span class="dice dice3"></span>
                                </p>
                            </li>
                        
                            <li lottery_code="k3ethdx" parent_code="<?php echo ($nowcpinfo["name"]); ?>" class=" lottery_13">
                                <a href="javascript:void(0)" class="lineMore-item">二同号单选</a>
                                <p class="ypeil">赔率<?php echo ($peilv["k3ethdx"]); ?>倍</p>
                                <p class="ysaizi">
                                    <span class="dice dice1"></span> 
                                    <span class="dice dice1"></span> 
                                    <span class="dice dice3"></span>
                                </p>
                            </li>
                        
                            <li lottery_code="k3ebthbz" parent_code="<?php echo ($nowcpinfo["name"]); ?>" class=" lottery_15">
                                <a href="javascript:void(0)" class="lineMore-item">二不同号</a>
                                <p class="ypeil">赔率<?php echo ($peilv["k3ebthbz"]); ?>倍</p>
                                <p class="ysaizi">
                                    <span class="dice dice1"></span> 
                                    <span class="dice dice4"></span> 
                                    <span class="dice dice4"></span>
                                </p>
                            </li>
                        
                    </ul> 
                </div>
                <!-- 玩法切换 -->
            </div>
			<div class="row no-gutter text-center Betting_Issue_CountDown" style="padding-top:5px;background: #22563f;">
                       <dl class="col-50 cz_openNumb">
                              <dt style="font-size:14px;"><i class="f_lottery_info_lastnumber red"  id="f_lottery_info_lastnumber" way-data="showExpect.lastFullExpect">--</i><span id="issueText">期</span></dt>
                               <dd style="font-size:20px; padding:0; margin:0;">
							   <!--i class="openNum_list red" id="openNum_list">
								<t way-data="showExpect.openCode1">-</t>
								<t way-data="showExpect.openCode2">-</t>
								<t way-data="showExpect.openCode3">-</t>
							   </i-->
							   <ul id="openNum_list">
								<li class="open_numb_gif"></li>
								<li class="open_numb_gif"></li>
								<li class="open_numb_gif"></li>
								<span class="icon icon-caret" style="color:#999"></span>
				               </ul>
							   </dd>
                        </dl>
                       <dl class="col-50" style="color:#caebda">
                        <dt style="font-size:14px;">距<i class="f_lottery_info_number red" id="f_lottery_info_number" way-data="showExpect.currFullExpect">--</i>期截止</dt>
                         <dd style="font-size:20px; padding:0; margin:0;"><i class="j_lottery_time red" id="j_lottery_time">
							<t class="hh bj"><span way-data="gametimes.h">00</span></t>
							<em>:</em>
							<t class="mm bj"><span way-data="gametimes.m">00</span></t>
							<em>:</em>
							<t class="ss bj"><span way-data="gametimes.s">00</span></t>
						 </i></dd>
                        </dl> 
			</div>
						<div style="background-color: #fff; margin-top: -4px;">
                           <table id="fn_getoPenGame" border="0px" cellpadding="0" cellspacing="0" style="display:none;width:100%;text-align:center">
                            <colgroup>
                                <col width="30%">
                                <col width="20%">
                                <col width="20%">
                                <col width="20%">
                            </colgroup>
                            <thead 
    style="background-color: #DADADA; border-bottom: 1px solid #BBBBBB;border-top: 1px solid hsla(0,0%,100%,.3);background-color: #22563f;width: 16rem;font-size: .7em;color: #caebda;text-align: center;clear: both;border-bottom: 1px solid #BBBBBB;height: 64px;">
                                <tr style="    border-bottom: 1px solid #212121;">
                                    <th>期数</th>
                                    <th>奖号</th>
                                    <th>和值</th>
                                    <th>形态</th>
                                </tr>
                            </thead>
                            <tbody class="tbody" style="background: #22563f;"></tbody>
                        </table>
                         </div>


<section class="ui-container">   
			<!-- 选择与切换玩法 -->
			<!-- 投注期号与倒计时 -->
			<!-- 投注期号与倒计时 --> 
			<!-- 选号区域 -->
            <div class="sliderConter">
                <table  style="height: 100%; border: 0px;">
                    <tr>
                        <td>
                            <div class="peilu">
                                <var style="color: rgb(202, 202, 202);">赔率</var><span id="amount">47.628</span>

                            </div>
                        </td> 
                        <td style="padding-top: 8px;">
                            <a  id="minus"></a>
                        </td> 
                        <td style="width: 100%;">
                            <input type="hidden" class="single-slider" value="0" /> 
                        </td> 
                        <td style="padding-top: 8px; ">
                            <a  id="plus"></a>
                        </td> 
                        <td >
                            <div class="fandian">
                                <p style="display: inline-block; color: rgb(202, 202, 202);">返点</p> 
                                <p style="display: inline-block;" class="fans">0.0</p>
                            </div>  
                        </tr>
                    </table>
                </div>
			<div class="Choice_Ball_Container ui-whitespace" id="Game_CheckBall">
				<?php if($nowcpinfo['iswh'] == 0): ?><div class="gn_main_cont k3_ball_conatiner" id="gn_main_cont">

				</div>
				<?php else: ?>
					<p style="font-size:30px; color:#f60; text-align:center; padding:15px 0;">彩种维护中...</p><?php endif; ?>
            </div>
		</section>  
          </div>
      </div>
  </div>

<div class="lottey_footer" style="bottom: 58px;">
    <div class="lottery_footer_sum" style="display:none;">
        <span class="lottery_sum_text">当前号码</span>
        <div id="lottery_sum_old_b">

        </div>
    </div>
    <div class="lottery_inputBox" style="display:none;">
        每注金额
        <input type="number" class="lottery_input">
        <span class="lottery_input_text">请输入要投注的金额</span>
    </div>
    <div class="kuaijie_money">
        <ul class="kuaijie_money_ul">
            <li class="kuaijie_item">5</li>
            <li class="kuaijie_item">10</li>
            <li class="kuaijie_item">50</li>
            <li class="kuaijie_item">100</li>
            <li class="kuaijie_item">1000</li>
        </ul>
    </div>  
    <div class="betting_box" style="background: #22563f;border-top: 1px solid #1a4230;">
        <div class="betting_left">
            <span class="betting_empty">清空</span>
            <em class="betting_sum_box" style="display:none;">
                共<span class="betting_sum">0</span>注,
                <span class="betting_sum_moery">0</span>元
            </em>
        </div>
        <div class="betting_right">
            <button class="betting_right_btn">
                马上投注
            </button>
        </div>
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
<script type="text/html" id="k3hzzx_wf">
	<!--和值-->

	<div id="k3hzzx" class="ball_section section_cqssc">
		<p class="remark" style="text-align:center;color:#999;margin:15px 0 5px;color:#caebda;">
			猜3个开奖号相加的和,3-10为小,11-18为大
		</p>
		<div class="li_ball">
			<div class="ui-row-flex">
				<div class="ui-col ui-col-4 line-box">
					<ul class="ball_list_ul">
						<li class="ball_item"><a playid="k3hzbig" ball-type="k3hzzx" ball-number="大" href="javascript:void(0)" class="ball_number" peilv="<?php echo ($peilv["k3hzbig"]); ?>"><b>大</b>
								<p class="peilv">
									赔率<?php echo ($peilv["k3hzbig"]); ?>
								</p>
							</a></li>
						<li class="ball_item"><a playid="k3hzsmall" ball-type="k3hzzx" ball-number="小" href="javascript:void(0)" class="ball_number" peilv="<?php echo ($peilv["k3hzsmall"]); ?>"><b>小</b>
								<p class="peilv">
									赔率<?php echo ($peilv["k3hzsmall"]); ?>
								</p>
							</a></li>
						<li class="ball_item"><a playid="k3hzodd" ball-type="k3hzzx" ball-number="单" href="javascript:void(0)" class="ball_number" peilv="<?php echo ($peilv["k3hzodd"]); ?>"><b>单</b>
								<p class="peilv">
									赔率<?php echo ($peilv["k3hzodd"]); ?>
								</p>
							</a></li>
						<li class="ball_item"><a playid="k3hzeven" ball-type="k3hzzx" ball-number="双" href="javascript:void(0)" class="ball_number" peilv="<?php echo ($peilv["k3hzeven"]); ?>"><b>双</b>
								<p class="peilv">
									赔率<?php echo ($peilv["k3hzeven"]); ?>
								</p>
							</a></li>
						<li class="ball_item"><a playid="k3hz3" ball-type="k3hzzx" ball-number="3" href="javascript:void(0)" class="ball_number" peilv="<?php echo ($peilv["k3hz3"]); ?>"><b>3</b>
								<p class="peilv">
									赔率<?php echo ($peilv["k3hz3"]); ?>
								</p>
							</a></li>
						<li class="ball_item"><a playid="k3hz4" ball-type="k3hzzx" ball-number="4" href="javascript:void(0)" class="ball_number" peilv="<?php echo ($peilv["k3hz4"]); ?>"><b>4</b>
								<p class="peilv">
									赔率<?php echo ($peilv["k3hz4"]); ?>
								</p>
							</a></li>
						<li class="ball_item"><a playid="k3hz5" ball-type="k3hzzx" ball-number="5" href="javascript:void(0)" class="ball_number" peilv="<?php echo ($peilv["k3hz5"]); ?>"><b>5</b>
								<p class="peilv">
									赔率<?php echo ($peilv["k3hz5"]); ?>
								</p>
							</a></li>
						<li class="ball_item"><a playid="k3hz6" ball-type="k3hzzx" ball-number="6" href="javascript:void(0)" class="ball_number" peilv="<?php echo ($peilv["k3hz6"]); ?>"><b>6</b>
								<p class="peilv">
									赔率<?php echo ($peilv["k3hz6"]); ?>
								</p>
							</a></li>
						<li class="ball_item"><a playid="k3hz7" ball-type="k3hzzx" ball-number="7" href="javascript:void(0)" class="ball_number" peilv="<?php echo ($peilv["k3hz7"]); ?>"><b>7</b>
								<p class="peilv">
									赔率<?php echo ($peilv["k3hz7"]); ?>
								</p>
							</a></li>
						<li class="ball_item"><a playid="k3hz8" ball-type="k3hzzx" ball-number="8" href="javascript:void(0)" class="ball_number" peilv="<?php echo ($peilv["k3hz8"]); ?>"><b>8</b>
								<p class="peilv">
									赔率<?php echo ($peilv["k3hz8"]); ?>
								</p>
							</a></li>
						<li class="ball_item"><a playid="k3hz9" ball-type="k3hzzx" ball-number="9" href="javascript:void(0)" class="ball_number" peilv="<?php echo ($peilv["k3hz9"]); ?>"><b>9</b>
								<p class="peilv">
									赔率<?php echo ($peilv["k3hz9"]); ?>
								</p>
							</a></li>
						<li class="ball_item"><a playid="k3hz10" ball-type="k3hzzx" ball-number="10" href="javascript:void(0)" class="ball_number" peilv="<?php echo ($peilv["k3hz10"]); ?>"><b>10</b>
								<p class="peilv">
									赔率<?php echo ($peilv["k3hz10"]); ?>
								</p>
							</a></li>
						<li class="ball_item"><a playid="k3hz11" ball-type="k3hzzx" ball-number="11" href="javascript:void(0)" class="ball_number" peilv="<?php echo ($peilv["k3hz11"]); ?>"><b>11</b>
								<p class="peilv">
									赔率<?php echo ($peilv["k3hz11"]); ?>
								</p>
							</a></li>
						<li class="ball_item"><a playid="k3hz12" ball-type="k3hzzx" ball-number="12" href="javascript:void(0)" class="ball_number" peilv="<?php echo ($peilv["k3hz12"]); ?>"><b>12</b>
								<p class="peilv">
									赔率<?php echo ($peilv["k3hz12"]); ?>
								</p>
							</a></li>
						<li class="ball_item"><a playid="k3hz13" ball-type="k3hzzx" ball-number="13" href="javascript:void(0)" class="ball_number" peilv="<?php echo ($peilv["k3hz13"]); ?>"><b >13</b>
								<p class="peilv">
									赔率<?php echo ($peilv["k3hz13"]); ?>
								</p>
							</a></li>
						<li class="ball_item"><a playid="k3hz14" ball-type="k3hzzx" ball-number="14" href="javascript:void(0)" class="ball_number" peilv="<?php echo ($peilv["k3hz14"]); ?>"><b>14</b>
								<p class="peilv">
									赔率<?php echo ($peilv["k3hz14"]); ?>
								</p>
							</a></li>
						<li class="ball_item"><a playid="k3hz15" ball-type="k3hzzx" ball-number="15" href="javascript:void(0)" class="ball_number" peilv="<?php echo ($peilv["k3hz15"]); ?>"><b>15</b>
								<p class="peilv">
									赔率<?php echo ($peilv["k3hz15"]); ?>
								</p>
							</a></li>
						<li class="ball_item"><a playid="k3hz16" ball-type="k3hzzx" ball-number="16" href="javascript:void(0)" class="ball_number" peilv="<?php echo ($peilv["k3hz16"]); ?>"><b>16</b>
								<p class="peilv">
									赔率<?php echo ($peilv["k3hz16"]); ?>
								</p>
							</a></li>
						<li class="ball_item"><a playid="k3hz17" ball-type="k3hzzx" ball-number="17" href="javascript:void(0)" class="ball_number" peilv="<?php echo ($peilv["k3hz17"]); ?>"><b>17</b>
								<p class="peilv">
									赔率<?php echo ($peilv["k3hz17"]); ?>
								</p>
							</a></li>
						<li class="ball_item"><a playid="k3hz18" ball-type="k3hzzx" ball-number="18" href="javascript:void(0)" class="ball_number" peilv="<?php echo ($peilv["k3hz18"]); ?>"><b>18</b>
								<p class="peilv">
									赔率<?php echo ($peilv["k3hz18"]); ?>
								</p>
							</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

</script>
<script type="text/html" id="k3sthtx_wf">
	<!--三同号通选-->

	<div id="k3sthtx" class="ball_section section_cqssc">
		<p class="remark" style="color:#999">
			对所有相同的三个号码（111、222、333、444、555、666）进行投注，任意号码开出，即为中奖。奖金<var class="tpl"><?php echo ($peilv["k3sthtx"]); ?></var>倍
		</p>
		<div class="li_ball">
			<div class="ui-row-flex">
				<div class="ui-col ui-col-4 line-box">
					<ul class="ball_list_ul">
						<li style="width:100%" class="ball_item"><a playid="k3sthtx" playid="k3sthtx" href="javascript:void(0);" ball-type="3THTX" ball-number="三同号通选" class="ball_number" id="slhtx_btn"><b>三同号通选</b></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

</script>
<script type="text/html" id="k3sthdx_wf">
	<!--3同号单选-->
	<div id="k3sthdx" class="ball_section section_cqssc">
		<p class="remark" style="color:#999">
			对相同的三个号码（111、222、333、444、555、666）中的任意一个进行投注，所选号码开出，即为中奖。奖金<var class="tpl"><?php echo ($peilv["k3sthdx"]); ?></span>倍
		</p>
		<div class="li_ball">
			<div class="ui-row-flex">
				<div class="ui-col ui-col-4 line-box">
					<ul class="ball_list_ul">
						<li style="width:33.3%" class=" ball_item"><a playid="k3sthdx" ball-type="k3sthdx" ball-number="111" href="javascript:void(0)" class="ball_number"><b>111</b></a></li>
						<li style="width:33.3%" class=" ball_item"><a playid="k3sthdx" ball-type="k3sthdx" ball-number="222" href="javascript:void(0)" class="ball_number"><b>222</b></a></li>
						<li style="width:33.3%" class=" ball_item"><a playid="k3sthdx" ball-type="k3sthdx" ball-number="333" href="javascript:void(0)" class="ball_number"><b>333</b></a></li>
						<li style="width:33.3%" class=" ball_item"><a playid="k3sthdx" ball-type="k3sthdx" ball-number="444" href="javascript:void(0)" class="ball_number"><b>444</b></a></li>
						<li style="width:33.3%" class=" ball_item"><a playid="k3sthdx" ball-type="k3sthdx" ball-number="555" href="javascript:void(0)" class="ball_number"><b>555</b></a></li>
						<li style="width:33.3%" class=" ball_item"><a playid="k3sthdx" ball-type="k3sthdx" ball-number="666" href="javascript:void(0)" class="ball_number"><b>666</b></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</script>
<script type="text/html" id="k3sbthbz_wf">
	<!--3不同号-->
	<div id="k3sbthbz" class="ball_section section_cqssc">
		<p class="remark" style="color:#999">
			从1～6中任选3个或多个号码，所选号码与开奖号码的3个号码相同，即为中奖。奖金<var class="tpl"><?php echo ($peilv["k3sbthbz"]); ?></var>倍
		</p>
		<div class="li_ball">
			<div class="ui-row-flex">
				<div class="ui-col ui-col-4 line-box">
					<ul class="ball_list_ul">
						<li style="width:33.3%" class=" ball_item"><a playid="k3sbthbz" ball-type="k3sbthbz" ball-number="1" href="javascript:void(0)" class="ball_number"><b>1</b></a></li>
						<li style="width:33.3%" class=" ball_item"><a playid="k3sbthbz" ball-number="2"  ball-type="k3sbthbz" href="javascript:void(0)" class="ball_number"><b>2</b></a></li>
						<li style="width:33.3%" class=" ball_item"><a playid="k3sbthbz" ball-number="3" ball-type="k3sbthbz" href="javascript:void(0)" class="ball_number"><b>3</b></a></li>
						<li style="width:33.3%" class=" ball_item"><a playid="k3sbthbz" ball-number="4" ball-type="k3sbthbz" href="javascript:void(0)" class="ball_number"><b>4</b></a></li>
						<li style="width:33.3%" class=" ball_item"><a playid="k3sbthbz" ball-number="5" ball-type="k3sbthbz" href="javascript:void(0)" class="ball_number"><b>5</b></a></li>
						<li style="width:33.3%" class=" ball_item"><a playid="k3sbthbz" ball-number="6" ball-type="k3sbthbz" href="javascript:void(0)" class="ball_number"><b>6</b></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</script>
<script type="text/html" id="k3slhtx_wf">
	<!--3连号同选-->
	<div id="k3slhtx" class="ball_section section_cqssc">
		<p class="remark" style="color:#999">
			对所有3个相连的号码（123、234、345、456）进行投注，任意号码开出，即为中奖。奖金<var class="tpl"><?php echo ($peilv["k3slhtx"]); ?></var>倍
		</p>
		<div class="li_ball">
			<div class="ui-row-flex">
				<div class="ui-col ui-col-4 line-box">
					<ul class="ball_list_ul">
						<li style="width:100%" class="ball_item"><a ball-type="k3slhtx" playid="k3slhtx" ball-number="三连号通选" class="ball_number" href="javascript:void(0)"><b >三连号通选</b></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</script>
<script type="text/html" id="k3ethfx_wf">
	<!--2同号复选-->
	<div id="k3ethfx" class="ball_section section_cqssc">
		<p class="remark" style="color:#999">
			从11～66中任选1个或多个号码，选号与奖号（包含11～66，不限顺序）相同，即为中奖。奖金<var class="tpl"><?php echo ($peilv["k3ethfx"]); ?></var>倍
		</p>
		<div class="li_ball">
			<div class="ui-row-flex">
				<div class="ui-col ui-col-4 line-box">
					<ul class="ball_list_ul">
						<li style="width:33.3%" class=" ball_item"><a ball-number="11" playid="k3ethfx" ball-type="k3ethfx" href="javascript:void(0)" class="ball_number"><b>11</b></a></li>
						<li style="width:33.3%" class=" ball_item"><a ball-number="22" playid="k3ethfx" ball-type="k3ethfx" href="javascript:void(0)" class="ball_number"><b>22</b></a></li>
						<li style="width:33.3%" class=" ball_item"><a ball-number="33" playid="k3ethfx" ball-type="k3ethfx" href="javascript:void(0)" class="ball_number"><b>33</b></a></li>
						<li style="width:33.3%" class=" ball_item"><a ball-number="44" playid="k3ethfx" ball-type="k3ethfx" href="javascript:void(0)" class="ball_number"><b>44</b></a></li>
						<li style="width:33.3%" class=" ball_item"><a ball-number="55" playid="k3ethfx" ball-type="k3ethfx" href="javascript:void(0)" class="ball_number"><b>55</b></a></li>
						<li style="width:33.3%" class=" ball_item"><a ball-number="66" playid="k3ethfx" ball-type="k3ethfx" href="javascript:void(0)" class="ball_number"><b>66</b></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</script>
<script type="text/html" id="k3ethdx_wf">
	<!--2同号单选-->

	<div id="k3ethdx" class="ball_section section_cqssc">
		<p class="remark" style="color:#999">
			选择1对相同号码和1个不同号码投注，选号与奖号相同，即为中奖，奖金<var class="tpl"><?php echo ($peilv["k3ethdx"]); ?></var>倍
		</p>
		<div class="gn_main_list">
			<ul class="ball_list_ul">
				<li style="width:100%;margin:8px 5px" class="li_ball curr">
					<ul style="width:100%;margin:auto" class="ball_list_ul ball_cont" id="ball_list_ul0">
						<li style="width:16.6%;padding:5px 5px;" class="ball_item"><a ball-number="11" ball-type="k3ethdx" playid="k3ethdx" href="javascript:void(0)" class="ball_number ethdx_btn"><b>11</b></a></li>
						<li style="width:16.6%;padding:5px 5px;" class="ball_item"><a ball-number="22" ball-type="k3ethdx" playid="k3ethdx" href="javascript:void(0)" class="ball_number ethdx_btn"><b>22</b></a></li>
						<li style="width:16.6%;padding:5px 5px;" class="ball_item"><a ball-number="33" ball-type="k3ethdx" playid="k3ethdx" href="javascript:void(0)" class="ball_number ethdx_btn"><b>33</b></a></li>
						<li style="width:16.6%;padding:5px 5px;" class="ball_item"><a ball-number="44" ball-type="k3ethdx" playid="k3ethdx" href="javascript:void(0)" class="ball_number ethdx_btn"><b>44</b></a></li>
						<li style="width:16.6%;padding:5px 5px;" class="ball_item"><a ball-number="55" ball-type="k3ethdx" playid="k3ethdx" href="javascript:void(0)" class="ball_number ethdx_btn"><b>55</b></a></li>
						<li style="width:16.6%;padding:5px 5px;" class="ball_item"><a ball-number="66" ball-type="k3ethdx" playid="k3ethdx" href="javascript:void(0)" class="ball_number ethdx_btn"><b>66</b></a></li>
					</ul>
				</li>
				<li style="width:100%;margin:8px 5px" class="li_ball curr">
					<ul style="width:100%;margin:auto" class="ball_list_ul ball_cont" id="ball_list_ul1">
						<li style="width:16.6%;padding:5px 5px;" class="ball_item"><a ball-number="1" ball-type="k3ethdx" playid="k3ethdx" href="javascript:void(0)" class="ball_number ethdx_btn1"><b>1</b></a></li>
						<li style="width:16.6%;padding:5px 5px;" class="ball_item"><a ball-number="2" ball-type="k3ethdx" playid="k3ethdx" href="javascript:void(0)" class="ball_number ethdx_btn1"><b>2</b></a></li>
						<li style="width:16.6%;padding:5px 5px;" class="ball_item"><a ball-number="3" ball-type="k3ethdx" playid="k3ethdx" href="javascript:void(0)" class="ball_number ethdx_btn1"><b>3</b></a></li>
						<li style="width:16.6%;padding:5px 5px;" class="ball_item"><a ball-number="4" ball-type="k3ethdx" playid="k3ethdx" href="javascript:void(0)" class="ball_number ethdx_btn1"><b>4</b></a></li>
						<li style="width:16.6%;padding:5px 5px;" class="ball_item"><a ball-number="5" ball-type="k3ethdx" playid="k3ethdx" href="javascript:void(0)" class="ball_number ethdx_btn1"><b>5</b></a></li>
						<li style="width:16.6%;padding:5px 5px;" class="ball_item"><a ball-number="6" ball-type="k3ethdx" playid="k3ethdx" href="javascript:void(0)" class="ball_number ethdx_btn1"><b>6</b></a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</script>
<script type="text/html" id="k3ebthbz_wf">
	<!--2不同号-->
	<div id="k3ebthbz" class="ball_section section_cqssc">
		<p class="remark" style="color:#999">
			从1～6中任选2个或多个号码，所选号码与开奖号码任意2个号码相同，即为中奖。奖金<var class="tpl"><?php echo ($peilv["k3ebthbz"]); ?></var>倍
		</p>
		<div class="li_ball">
			<div class="ui-row-flex">
				<div class="ui-col ui-col-4 line-box gn_main_list">
					<ul class="ball_list_ul">
						<li style="width:33.3%" class=" ball_item"><a ball-number="1" ball-type="k3ebthbz" playid="k3ebthbz" href="javascript:void(0)" class="ball_number"><b>1</b></a></li>
						<li style="width:33.3%" class=" ball_item"><a ball-number="2" ball-type="k3ebthbz" playid="k3ebthbz" href="javascript:void(0)" class="ball_number"><b>2</b></a></li>
						<li style="width:33.3%" class=" ball_item"><a ball-number="3" ball-type="k3ebthbz" playid="k3ebthbz" href="javascript:void(0)" class="ball_number"><b>3</b></a></li>
						<li style="width:33.3%" class=" ball_item"><a ball-number="4" ball-type="k3ebthbz" playid="k3ebthbz" href="javascript:void(0)" class="ball_number"><b>4</b></a></li>
						<li style="width:33.3%" class=" ball_item"><a ball-number="5" ball-type="k3ebthbz" playid="k3ebthbz" href="javascript:void(0)" class="ball_number"><b>5</b></a></li>
						<li style="width:33.3%" class=" ball_item"><a ball-number="6" ball-type="k3ebthbz" playid="k3ebthbz" href="javascript:void(0)" class="ball_number"><b>6</b></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</script>

<div class="popup" id="userbetshistory">
		<div class="list-block media-list" style="padding-top: 0; margin-top: 0">
			<div class="card-header "><botton id="formaubmitdo" class="button button-fill button-danger close-popup" style="width:100%;">关闭</botton></div>
			<ul id="userbetshistorylist"></ul>
			<div class="member-pag paging"></div>
		</div>
</div>
<script>

</script>
</body>
</html>