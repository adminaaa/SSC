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
    <link rel="stylesheet" href="/resources/css2/footer.css">
    <link rel="stylesheet" href="/resources/js2/layer/skin/default/layer.css">
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
<!-- <script type="text/javascript" src="/resources/js/area.js"></script>
 <script type="text/javascript" src="/resources/js/index.js"></script>-->
 <script type="text/javascript" src="/resources/js/way.min.js"></script>
 <script type="text/javascript" src="/resources/main/common.js"></script>
 <script type="text/javascript" src="/resources/main/index.js"></script>
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
            个人信息
        </div>
        <div class="vip_info_content">
            <ul class="tab clearfix">
                <li class="active">个人资料</li>
                 <?php if(($userinfo['proxy']) == "0"): ?><li>等级头衔</li><?php endif; ?>
            </ul>
            <div class="tab_content">
                <div class="tab1 clearfix">
                    <div class="img pull-left">
                        <img src="<?php echo ($userinfo['face']); ?>" alt="" class="up_header_img">
                        <a href="javascript:void(0);" class="update_header">修改头像</a>
                    </div>
                    <div class="tab_content_right pull-right">
                        <form class="am-form register_form" method="post" url="" checkby_ruivalidate id="register_form" onsubmit="return checkform(this)">
                             <input type="hidden" class="up_header_img_input" name="info[face]" value="<?php echo ($userinfo['face']); ?>" />
                            <p>
                            
                                <span>账号：</span>
                                <em class="no_info"><?php echo ($userinfo["username"]); ?></em>
                            </p>
                            <p>
                                <span>等级：</span>
                                <em class="no_info"><?php echo ($userinfo["groupname"]); ?></em>
                            </p>
                          <?php if(($userinfo['proxy']) == "0"): ?><p>
                                <span>头衔：</span>
                                <em class="no_info"><?php echo ($userinfo["touhan"]); ?></em>
                            </p><?php endif; ?>
                            <p>
                                <span>真实姓名：</span>
                                <?php if(($userinfo[userbankname]) == ""): ?>你还没有绑定真实姓名
                                    <a class="bd" href="javascript:void(0);" onclick="gobind();">去绑定</a>
                                    <?php else: ?>
                                  <?php echo ($userinfo["userbankname"]); endif; ?>
                            </p>
<!--                            <p>
                                <span>昵称：</span>
                                <input class="input_text" type="text" name="" placeholder="昵称为1-5位汉字，设置后不能修改">
                            </p>-->
                            <p>
                                <span>手机：</span>
                                <?php if(($userinfo[tel]) == ""): ?><input  class="input_text" type="text" name="tel" value=""  disabled="disabled">
                                    <a class="bd" href="<?php echo U('Member/safephone');?>">绑定</a>
                                    <?php else: ?>
                                <input  class="input_text" type="text" name="tel" value="<?php echo (substr_replace($userinfo["tel"],'****',3,4)); ?>"  disabled="disabled">
                                    <a class="bd" href="<?php echo U('Member/safephone');?>">修改</a><?php endif; ?>
                            </p>
                            <p>
                                <span>邮箱：</span>
                                 <?php if(($userinfo[email]) == ""): ?><input class="input_text" type="text" name="emial" value="" disabled="disabled">
                                     <a class="bd" href="<?php echo U('Member/bindmail');?>">绑定</a>
                                     <?php else: ?>
                                <input class="input_text" type="text" name="emial" value="<?php echo (substr_replace($userinfo["email"],'****',1,4)); ?>" disabled="disabled">
                                     <a class="bd" href="<?php echo U('Member/bindmail');?>">修改</a><?php endif; ?>
                            </p>
                            <p>
                                <span>QQ：</span>
                                <?php if(($userinfo[qq]) == ""): ?><input class="input_text" type="text" id="showqq" onchange="changeToinfoqq();" name="showqq" value="" >
                                  <?php else: ?>
                                  <input class="input_text" type="text" id="showqq" onchange="changeToinfoqq();" name="showqq" value="<?php echo (substr_replace($userinfo["qq"],'****',1,4)); ?>" ><?php endif; ?>
                                <input class="input_text" type="hidden" name="info[qq]" id="qq" value="<?php echo ($userinfo["qq"]); ?>" >
                            </p>
                            <p>
                                <span>性别：</span>
                                <label class="sex_box">
                                    <i class="checked"></i>
                                    男
                                    <input type="radio" name="info[sex]" value="1" <?php if(($userinfo['sex']) == "1"): ?>checked="checked"<?php endif; ?>    style="display: none;" >
                                </label>
                                <label class="sex_box">
                                    <i class="checked"></i>
                                    女
                                    <input type="radio"  name="info[sex]" value="0" <?php if(($userinfo['sex']) == "0"): ?>checked="checked"<?php endif; ?> style="display: none;">
                                </label>
                                <label class="sex_box">
                                    <i class="checked"></i>
                                    保密
                                    <input type="radio" name="info[sex]" value="2" <?php if(($userinfo['sex']) == "2"): ?>checked="checked"<?php endif; ?> style="display: none;" >
                                </label>
                            </p>



                            <script>
                               function changeToinfoqq(){
                                   $('#qq').val($('#showqq').val());
                               }
                            </script>
                            <!--<p>
                                <span>性别：</span>
                                <label class="sex_box">
                                    <i class="checked"></i>
                                    男
                                    <input type="radio" name="info[sex]" value="1" <?php if(($userinfo['sex']) == "1"): ?>checked="checked"<?php endif; ?>    style="display: none;" >
                                </label>
                                <label class="sex_box">
                                    <i class="checked"></i>
                                    女
                                    <input type="radio"  name="info[sex]" value="0" <?php if(($userinfo['sex']) == "0"): ?>checked="checked"<?php endif; ?> style="display: none;">
                                </label>
                                <label class="sex_box">
                                    <i class="checked"></i>
                                    保密
                                    <input type="radio" name="info[sex]" value="2" <?php if(($userinfo['sex']) == "2"): ?>checked="checked"<?php endif; ?> style="display: none;" >
                                </label>
                            </p>
                            <p>
                                <span>生日：</span>
                                <select class="sel_year" name="info[year]" rel="<?php echo (substr($userinfo['birthday'],0,4)); ?>"></select> 年
                                <select class="sel_month" name="info[month]" rel="<?php echo (substr($userinfo['birthday'],5,2)); ?>"> </select> 月
                                <select class="sel_day"  name="info[day]" rel="<?php echo (substr($userinfo['birthday'],8,2)); ?>"> </select> 日
                            </p>-->
                            <button type="submit" class="btn vip_info_save ty_btn sub_btn ty_submit">保存</button>
                        </form>
                    </div>
                </div>
                <?php if(($userinfo['proxy']) == "0"): ?><div class="tab2" style="display: none;">
                    <div class="tab2_top clearfix">
                        <div class="img pull-left">
                            <img src="<?php echo ($userinfo["face"]); ?>" alt="" class="up_header_img">
                            <a href="javascript:void(0);" class="update_header">修改头像</a>
                        </div>
                        <div class="tab2_top_right pull-left">
                            <p><em>账</em>号：<?php echo ($userinfo["username"]); ?></p>
                            <p><em>等</em>级：<?php echo ($userinfo["groupname"]); ?></p>
                            <p><em>头</em>衔：<?php echo ($userinfo["touhan"]); ?></p>
                            <p>成长值：<?php echo ($userinfo["point"]); ?>分</p>
                            <p style="color:#999999">每充值1元加1分</p>
                        </div>
                    </div>
                    <p class="vip_bar">

                         <?php switch($userinfo["groupid"]): case "1": ?><span class="" style="width:<?php echo (round($userinfo['point']/$GROUPMSG[1]['shengjiedu']*100,2)); ?>% !important;"><?php echo (round($userinfo['point']/$GROUPMSG[1]['shengjiedu']*100,2)); ?>%</span><?php break;?>
                            <?php case "2": ?><span style="width:<?php echo (round($userinfo['point']/$GROUPMSG[2]['shengjiedu']*100,2)); ?>% !important;"><?php echo (round($userinfo['point']/$GROUPMSG[2]['shengjiedu']*100,2)); ?>%</span><?php break;?>
                            <?php case "3": ?><span style="width:<?php echo (round($userinfo['point']/$GROUPMSG[3]['shengjiedu']*100,2)); ?>% !important;"><?php echo (round($userinfo['point']/$GROUPMSG[3]['shengjiedu']*100,2)); ?>%</span><?php break;?>
                             <?php case "4": ?><span style="width:<?php echo (round($userinfo['point']/$GROUPMSG[4]['shengjiedu']*100,2)); ?>% !important;"><?php echo (round($userinfo['point']/$GROUPMSG[4]['shengjiedu']*100,2)); ?>%</span><?php break;?>
                             <?php case "5": ?><span style="width:<?php echo (round($userinfo['point']/$GROUPMSG[5]['shengjiedu']*100,2)); ?>% !important;"><?php echo (round($userinfo['point']/$GROUPMSG[5]['shengjiedu']*100,2)); ?>%</span><?php break;?>
                             <?php case "6": ?><span style="width:<?php echo (round($userinfo['point']/$GROUPMSG[6]['shengjiedu']*100,2)); ?>% !important;"><?php echo (round($userinfo['point']/$GROUPMSG[6]['shengjiedu']*100,2)); ?>%</span><?php break;?>
                             <?php case "7": ?><span style="width:<?php echo (round($userinfo['point']/$GROUPMSG[7]['shengjiedu']*100,2)); ?>% !important;"><?php echo (round($userinfo['point']/$GROUPMSG[7]['shengjiedu']*100,2)); ?>%</span><?php break;?>
                             <?php case "8": ?><span style="width:<?php echo (round($userinfo['point']/$GROUPMSG[8]['shengjiedu']*100,2)); ?>% !important;"><?php echo (round($userinfo['point']/$GROUPMSG[8]['shengjiedu']*100,2)); ?>%</span><?php break;?>
                             <?php case "8": ?><span style="width:100% !important;">100%</span><?php break;?>
                            <?php default: ?>
                             <span style="width:0% !important;">0%</span><?php endswitch;?>
                    </p>
                    <div class="vip_upgrade clearfix">
                        <em class="pull-left"><?php echo ($userinfo["groupname"]); ?></em>
							<span style="text-align:center;">
                            <?php switch($userinfo["groupid"]): case "1": ?><i><?php echo ($userinfo["point"]); ?></i>
                                    /<?php echo ($GROUPMSG[1]['shengjiedu']); ?> 距离下一级还要<?php echo (abs($userinfo['point']-$GROUPMSG[1]['shengjiedu'])); ?>分<?php break;?>
                                <?php case "2": ?><i><?php echo ($userinfo["point"]); ?></i>
                                    /<?php echo ($GROUPMSG[2]['shengjiedu']); ?> 距离下一级还要<?php echo (abs($userinfo['point']-$GROUPMSG[2]['shengjiedu'])); ?>分<?php break;?>
                                <?php case "3": ?><i><?php echo ($userinfo["point"]); ?></i>
                                    /<?php echo ($GROUPMSG[3]['shengjiedu']); ?> 距离下一级还要<?php echo (abs($userinfo['point']-$GROUPMSG[3]['shengjiedu'])); ?>分<?php break;?>
                                <?php case "4": ?><i><?php echo ($userinfo["point"]); ?></i>
                                    /<?php echo ($GROUPMSG[4]['shengjiedu']); ?> 距离下一级还要<?php echo (abs($userinfo['point']-$GROUPMSG[4]['shengjiedu'])); ?>分<?php break;?>
                                <?php case "5": ?><i><?php echo ($userinfo["point"]); ?></i>
                                    /<?php echo ($GROUPMSG[5]['shengjiedu']); ?> 距离下一级还要<?php echo (abs($userinfo['point']-$GROUPMSG[5]['shengjiedu'])); ?>分<?php break;?>
                                <?php case "6": ?><i><?php echo ($userinfo["point"]); ?></i>
                                    /<?php echo ($GROUPMSG[6]['shengjiedu']); ?> 距离下一级还要<?php echo (abs($userinfo['point']-$GROUPMSG[6]['shengjiedu'])); ?>分<?php break;?>
                                <?php case "7": ?><i><?php echo ($userinfo["point"]); ?></i>
                                    /<?php echo ($GROUPMSG[7]['shengjiedu']); ?> 距离下一级还要<?php echo (abs($userinfo['point']-$GROUPMSG[7]['shengjiedu'])); ?>分<?php break;?>
                                <?php case "8": ?><i><?php echo ($userinfo["point"]); ?></i>
                                    /<?php echo ($GROUPMSG[8]['shengjiedu']); ?> 距离下一级还要<?php echo (abs($userinfo['point']-$GROUPMSG[8]['shengjiedu'])); ?>分<?php break;?>
                                <?php default: ?>default<?php endswitch;?>
							</span>
                        <em class="pull-right">
                            <?php switch($userinfo["groupid"]): case "1": echo ($GROUPMSG[1]['groupname']); break;?>
                                <?php case "2": echo ($GROUPMSG[2]['groupname']); break;?>
                                <?php case "3": echo ($GROUPMSG[3]['groupname']); break;?>
                                <?php case "4": echo ($GROUPMSG[4]['groupname']); break;?>
                                <?php case "5": echo ($GROUPMSG[5]['groupname']); break;?>
                                <?php case "6": echo ($GROUPMSG[6]['groupname']); break;?>
                                <?php case "7": echo ($GROUPMSG[7]['groupname']); break;?>
                                <?php case "8": echo ($GROUPMSG[8]['groupname']); break;?>
                                <?php default: ?>default<?php endswitch;?>
                        </em>
                    </div>
                    <h4 class="grade_title">等级机制</h4>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>等级</th>
                            <th>头衔</th>
                            <th>成长积分</th>
                            <th>晋级奖励(元)</th>
                            <th>跳级奖励(元)</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($GROUPMSG)): $key = 0; $__LIST__ = $GROUPMSG;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($key % 2 );++$key; if($value["groupname"] != '普通代理'): ?><tr>
                            <td><?php echo ($value["groupname"]); ?></td>
                            <td><?php echo ($value["touhan"]); ?></td>
                            <td><?php echo ($value["shengjiedu"]); ?></td>
                            <td><?php echo ($value["jjje"]); ?></td>
                            <td><?php echo ($value["tiaoji"]); ?></td>
                        </tr><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div><?php endif; ?>
            </div>
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

 <div class="modal fade  header_img_box" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">修改头像</h4>
            </div>
            <div class="modal-body clearfix"> 
                <div class="head_img_list pull-left">
                    <a href="javascript:void(0)" title="奥巴马" attr-url="/resources/images/face/1.jpg">
                        <img src="/resources/images/face/1.jpg" alt="">
                    </a>
                    <a href="javascript:void(0)" title="小女孩" attr-url="/resources/images/face/2.jpg">
                        <img src="/resources/images/face/2.jpg" alt="">
                    </a>
                    <a href="javascript:void(0)" title="泷泽萝拉" attr-url="/resources/images/face/3.jpg">
                        <img src="/resources/images/face/3.jpg" alt="">
                    </a>
                    <a href="javascript:void(0)" title="科比" attr-url="/resources/images/face/4.jpg">
                        <img src="/resources/images/face/4.jpg" alt="">
                    </a>
                    <a href="javascript:void(0)" title="金正恩" attr-url="/resources/images/face/5.jpg">
                        <img src="/resources/images/face/5.jpg" alt="">
                    </a>
                    <a href="javascript:void(0)" title="杰森斯坦森" attr-url="/resources/images/face/6.jpg">
                        <img src="/resources/images/face/6.jpg" alt="">
                    </a>
                    <a href="javascript:void(0)" title="范冰冰" attr-url="/resources/images/face/7.jpg">
                        <img src="/resources/images/face/7.jpg" alt="">
                    </a>
                    <a href="javascript:void(0)" title="梅西" attr-url="/resources/images/face/8.jpg">
                        <img src="/resources/images/face/8.jpg" alt="">
                    </a>
                    <a href="javascript:void(0)" title="本拉登" attr-url="/resources/images/face/9.jpg">
                        <img src="/resources/images/face/9.jpg" alt="">
                    </a>
                    <a href="javascript:void(0)" title="萨达姆" attr-url="/resources/images/face/10.jpg">
                        <img src="/resources/images/face/10.jpg" alt="">
                    </a>
                    <a href="javascript:void(0)" title="宋慧乔" attr-url="/resources/images/face/11.jpg">
                        <img src="/resources/images/face/11.jpg" alt="">
                    </a>
                    <a href="javascript:void(0)" title="李敏镐" attr-url="/resources/images/face/12.jpg">
                        <img src="/resources/images/face/12.jpg" alt="">
                    </a>
                    <a href="javascript:void(0)" title="宋仲基" attr-url="/resources/images/face/13.jpg">
                        <img src="/resources/images/face/13.jpg" alt="">
                    </a>
                    <a href="javascript:void(0)" title="比尔盖茨" attr-url="/resources/images/face/14.jpg">
                        <img src="/resources/images/face/14.jpg" alt="">
                    </a>
                    <a href="javascript:void(0)" title="罗纳尔多" attr-url="/resources/images/face/15.jpg">
                        <img src="/resources/images/face/15.jpg" alt="">
                    </a>
                    <a href="javascript:void(0)" title="宋承宪" attr-url="/resources/images/face/16.jpg">
                        <img src="/resources/images/face/16.jpg" alt="">
                    </a>
                    <a href="javascript:void(0)" title="小男孩" attr-url="/resources/images/face/17.jpg">
                        <img src="/resources/images/face/17.jpg" alt="">
                    </a>
                    <a href="javascript:void(0)" title="朴信惠" attr-url="/resources/images/face/18.jpg">
                        <img src="/resources/images/face/18.jpg" alt="">
                    </a>
                    <a href="javascript:void(0)" title="希拉里" attr-url="/resources/images/face/19.jpg">
                        <img src="/resources/images/face/19.jpg" alt="">
                    </a>
                    <a href="javascript:void(0)" title="全智贤" attr-url="/resources/images/face/20.jpg">
                        <img src="/resources/images/face/20.jpg" alt="">
                    </a>
                    <a href="javascript:void(0)" title="林允儿" attr-url="/resources/images/face/21.jpg">
                        <img src="/resources/images/face/21.jpg" alt="">
                    </a>
                    <a href="javascript:void(0)" title="普京" attr-url="/resources/images/face/22.jpg">
                        <img src="/resources/images/face/22.jpg" alt="">
                    </a>
                    <a href="javascript:void(0)" title="波多野结衣" attr-url="/resources/images/face/23.jpg">
                        <img src="/resources/images/face/23.jpg" alt="">
                    </a>
                    <a href="javascript:void(0)" title="贝克汉姆" attr-url="/resources/images/face/24.jpg">
                        <img src="/resources/images/face/24.jpg" alt="">
                    </a>
                    <a href="javascript:void(0)" title="苍井空" attr-url="/resources/images/face/25.jpg">
                        <img src="/resources/images/face/25.jpg" alt="">
                    </a>
                </div>
                <div class="head_img_save pull-right">
                    <h4>预览</h4>
                    <span>100×100</span>
                    <img src="/resources/images/face/1.jpg" class="preview_img" alt="">
                    <strong class="header_preview_name">奥巴马</strong>
                    <div class="save_btn">
                        <button class="btn common_btn save_header_obj" data-dismiss="modal">确认</button>
                        <button class="btn" data-dismiss="modal">取消</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 <div class="modal fade addTrueName" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                 <h4 class="modal-title" id="myModalLabel">绑定真实姓名</h4>
             </div>
             <div class="modal-body">
                 <div class="submitComfire tips" style="width:352px;margin:0 auto;">
                     <ul class="ui-form">
                         <li>
                             <label for="question1" class="ui-label">提示：</label>
                             <span class="mark">真实姓名绑定后不得修改</span>
                         </li>
                         <li>
                             <label class="ui-label">真实姓名：</label>
                             <input class="input-text inline box-shadow radius size-L" type="text" value="" id="bindrealname_realname" way-data="bindrealname.realname">
                             <span id="addtrueName_text1" style="color:red;display:none;">真实姓名不能为空</span>
                         </li>
                         <li>
                             <label class="ui-label">资金密码：</label>
                             <input class="input-text inline box-shadow radius size-L" type="password" id="bindrealname_tradepassword" way-data="bindrealname.tradepassword">
                             <span id="addtrueName_text2" style="color:red;display:none;">资金密码不能为空</span>
                         </li>
                     </ul>
                 </div>
             </div>
             <div class="modal-footer">
                 <a href="javascript:void(0);" id="addtrueName_btn" class="btn common_btn">确定</a>
                 <button class="btn" style="background:#999;padding:0 15px !important;height:32px;" data-dismiss="modal">取消</button>
             </div>
         </div>
     </div>
 </div>
<!--  <script type="text/javascript">_init_area();</script>-->
 <script>
     $(".groupRemark").click(function () {
         art.dialog({
             'title': 'VIP说明',
             'width': '260px',
             'height': '106px',
             'padding': '10px 20px',
             'content': "<p style=\"margin-top: 14%; font-size: 15px;\">想了解更多VIP信息，请咨询客服</p>",
             cancel: true,
         });
     });
     function checkform(obj){
         $.post($(obj).attr('action'),$(obj).serialize(), function(json){
             if(json.status==1){
                   alt(json.info,'success');
                     window.location.reload();
             }else{
                 alt(json.info);
             };
         },'json');
         return false;
     };
    function gobind(){
        $('.addTrueName').modal();
    }
     var name = null;
     var pass = null;
     var userbankname = "<?php echo ($userbankname); ?>";
     var patt = /^[\u4e00-\u9fa5 ]{2,10}$/;
     $('#addtrueName_btn').click(function () {
         name = $('#bindrealname_realname').val();
         pass = $('#bindrealname_tradepassword').val();
         if(!name || name == ''){
             alert('真实姓名不能为空');
             
             return;
         }
         if(name.length!=0){
             reg=/^[\u0391-\uFFE5]+$/;
             if(!reg.test(name)){
                 alert("请输入真实中文姓名") 
                 return false;
             }
         }
         if(!pass || pass == ''){
             alert('资金密码不能为空');
             
             return;
         }

         if(!patt.test(name)){
             alert('真实姓名格式错误');
             return;
         }

         $.ajax({
             type : "POST",
             url : "<?php echo U('Member/binduserbankname');?>",
             data : {
                 userbankname :   name,
                 tradepassword : pass,
             },
             success : function (data) {
                 if(data==1){
                     alert ('真实姓名绑定成功');
                     location.reload();
                 }else{
                     if(data['status']==0){
                         alert("资金密码错误")
                     }else{
                         alert('真实姓名绑定失败');
                     }

                 }
             }
         })
     })
 </script>
</body>
</html>