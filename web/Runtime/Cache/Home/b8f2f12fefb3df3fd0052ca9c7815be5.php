<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>代理首页</title>
<meta name="renderer" content="webkit" />
<link rel="stylesheet" type="text/css" href="/resources/css2/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="/resources/css2/header.css" />
<link rel="stylesheet" type="text/css" href="/resources/css/reset.css" />
<link rel="stylesheet" type="text/css" href="/resources/css2/reset.css" />
<link rel="stylesheet" type="text/css" href="/resources/css/layout.css" />
<link rel="stylesheet" type="text/css" href="/resources/css/artDialog.css" />
<link rel="stylesheet" type="text/css" href="/resources/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="/resources/css/member.css" />
<link rel="stylesheet" type="text/css" href="/resources/css2/footer.css" />
<link rel="stylesheet" href="/resources/css2/icon.css">
<script>
var WebConfigs = {
	webtitle:"<?php echo ($webconfigs["webtitle"]); ?>",
	kefuthree:"<?php echo ($webconfigs["kefuthree"]); ?>",
	kefuqq:"<?php echo ($webconfigs["kefuqq"]); ?>"
};
</script>

<!--[if lt IE 9]>
<script src="/resources/js/html5shiv.js"></script>
<![endif]-->

</head>

<body>
<style>
	.zclip{
		right: 47px !important;
    top: 57px !important;
	}
	.zclip embed{
    width: 50px;
    height: 50px;
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
<script type="text/javascript" src="/resources/js/way.min.js"></script>
<script type="text/javascript" src="/resources/js/jquery.history.js"></script>
<script type="text/javascript" src="/resources/js2/jquery.zclip.min.js"></script>
<script type="text/javascript" src="/resources/main/common.js"></script>
<script type="text/javascript" src="/resources/main/index.js"></script>
<script type="text/javascript" src="/resources/js/member.page.js"></script>
<script src="/resources/js/laydate/laydate.js" type="text/javascript" ></script>
<script src="/resources/js/jquery-dateFormat.min.js" type="text/javascript"></script>
<script src="/resources/js/echarts-all.js" type="text/javascript"></script>
<script src="/resources/js/macarons.js" type="text/javascript"></script>
<script type="text/javascript" src="/resources/main/agent.js"></script>
<script type="text/javascript" src="/resources/js2/bootstrap.min.js"></script>
<section class="container pt-10 pb-10" id="memberpage" >
 <div class="memberhome">

   <div class="memhome-bottom ml-20 mr-20">
		<div class="memsubnav">

		 </div>
					<div class="mem-main">
						<div class="m-m-cen ym-grid">
							<div class="mem-agent m-a-one m-m-subnav tab pos-r">
								<ul class="level2-nav tabHd">
									<li class="cur">代理首页</li>
									<li onclick="initAddUser();">开户中心</li>
									<li onclick="allUserList();">会员管理</li>
									<li onclick="allUserList(1);">在线会员</li>
									<li onclick="initDownUserBetsList();allDownUserBetsList();">游戏记录</li>
									<li onclick="initAccountChangeList();accountChange();">账变记录</li>
									<li onclick="initGroupDepositList();groupDeposit();">团队存提款</li>
									<li onclick="initGroupReportList();groupReport();">团队报表</li>
								</ul>
								<div class="m-f-cuk m-f-quk tabBd">
									<div class="tb-imte">
										<table class="m-a-table">
											<tbody>
												<tr>
														<td>团队：<strong class="sty-h" way-data="downUserNum.totalnum">0</strong>人</td>
													<td>代理：<strong class="sty-h" way-data="downUserNum.proxynum">0</strong>人</td>
													<td>玩家：<strong class="sty-h" way-data="downUserNum.noproxynum">0</strong>人</td>
												</tr>
												<tr>
													<td colspan="3">团队余额：<strong class="sty-h" way-data="downUserNum.totalamount">0</strong>元&nbsp;(不包含自己)</td>
												</tr>
											</tbody>
										</table>
										<div class="m-a-nav-min tab" id="indexAgent">
											<div class="m-a-n-hd">
												<ul class="subTabHd">
													<li class="cur" onclick="initStatistics('lottery');">彩票娱乐</li>
												</ul>
											</div>
											<div class="m-a-n-bd subTabBd">
												<div class="">
													<div class="sjss">
														<a class="zj" href="javascript:;" onclick="indexQuickDate(-3);">最近三天</a>
														<a class="zj" href="javascript:;" onclick="indexQuickDate(-7);">最近七天</a>
														<a class="zj" href="javascript:;" onclick="indexQuickDate(-30);">最近一个月</a>
														<span>&nbsp;&nbsp;时间：</span>
														<input class="layriqi" type="text" id="indexStartDate" onclick="laydate({format:'YYYY-MM-DD',isclear:false});" readonly="true">
														<span class="zhi">-</span>
														<input class="layriqi" type="text" id="indexEndDate" onclick="laydate({format:'YYYY-MM-DD',isclear:false});" readonly="true">
														<a href="javascript:;" class="in-but-l h-32" onclick="searchStatistics();">查询</a>
													</div>
													<div class="ctsj">
														<dl>
															<dd><span>充值量</span><b>0</b></dd>
															<dd><span>提现量</span><b>0</b></dd>
															<dd><span>投注量</span><b>0</b></dd>
															<dd><span>派奖量</span><b>0</b></dd>
															<dd><span>活动/反水</span><b>0</b></dd>
														</dl>
													</div>
													<div class="dzxz">
														<ul>
															<li><input type="radio" id="cz" value="cz" placeholder="" name="indexType" checked="checked"><label for="cz" class="checked">充值</label></li>
															<li><input type="radio" id="tx" value="tx" placeholder="" name="indexType"><label for="tx">提现</label></li>
															<li><input type="radio" id="tz" value="tz" placeholder="" name="indexType"><label for="tz">投注</label></li>
															<li><input type="radio" id="fd" value="fd" placeholder="" name="indexType"><label for="fd">返点</label></li>
															<li><input type="radio" id="xz" value="xz" placeholder="" name="indexType"><label for="xz">新增用户</label></li>
														</ul>
													</div>
													<div class="sjtu" id="tubiao" style="height:550px"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="tb-imte" style="display:none">
										<div class="m-a-nav-min tab">
											<div class="m-a-n-hd">
												<ul class="tabHd">
													<li class="cur">普通开户</li>
													<li>链接开户</li>
													<li onclick="signuplinkList();">链接管理</li>
												</ul>
											</div>
<div class="m-a-n-bd tabBd">
												<div class="tb-imte cur" style="display: block;">
													<div class="m-warm-prompt">
														<h5>温馨提示：</h5>
														<p>1. 自动注册的会员初始密码为<span class="mark">"123456"</span>。</p>
														<p>2. 为提高服务器效率，系统将自动清理注册一个月没有充值，或两个月未登录，并且金额低于10元的账户。</p>
														<p>3. 固定推广链接：<span class="mark">https://<?php echo ($_SERVER['HTTP_HOST']); ?>/Public.register.tgid.<way way-data="user.id"></way></span></p>
													</div>
													<div class="m-a-kaihu">
														<dl class="ty-biaodan">
															<dd>
																<span class="tt">开户类别：</span>
																<span>
																	<input id="addUserGeneralAgent" value="1" name="addUserGeneral" checked="checked" type="radio">
																	<label for="addUserGeneralAgent">代理</label>
																</span>
																<span>
																	<input id="addUserGeneralPlayer" value="0" name="addUserGeneral" type="radio">
																	<label for="addUserGeneralPlayer">玩家</label>
																</span>
															</dd>
															<dd>
																<span class="tt">用户名：</span>
																<span><input value="" way-data="addUser.username" onkeyup="checkAddUsername(this);" maxlength="10" type="text"></span>
																<span class="tisp" id="addUserGeneralTipsUsername">&nbsp;&nbsp;4-12位字母或数字,字母开头</span>
															</dd>
															<dd>
																<span class="tt">彩票返点：</span>
																<span><input type="text" value="" way-data="addUser.rebateid" onkeyup="checkAddUserRebate();" maxlength="7"></span>
																<span class="tisp" id="addUserGeneralTipsRebate">（可分配范围 0~<way way-data="addUser.maxRebate">0</way>）</span>
															</dd>
														</dl>
														<div class="tianjzh">
															<a class="in-but-l w-16" href="javascript:;" onclick="addUser();">添加账户</a>
														</div>
													</div>
												</div>
												<div class="tb-imte" style="display: none;">
													<div class="m-warm-prompt">
														<h5>温馨提示：</h5>
														<p>1. 生成链接不会立即扣减配额，只有用户使用该链接注册成功的时候，才会扣减配额；请确保您的配额充足，配额不足将造成用户注册不成功！</p>
													</div>
													<div class="m-a-kaihu">
														<dl class="ty-biaodan">
															<dd>
																<span class="tt">开户类别：</span>
																<span>
																	<input id="addSignuplinkAgent" value="1" name="addSignuplink" checked="checked" type="radio">
																	<label for="addSignuplinkAgent">代理</label>
																</span>
																<span>
																	<input id="addSignuplinkPlayer" value="0" name="addSignuplink" type="radio">
																	<label for="addSignuplinkPlayer">玩家</label>
																</span>
															</dd>
															<!--<dd>
																<span class="tt">模版类型：</span>
																<span>
																	<input id="addSignuplinkTpl0" value="0" name="addSignuplinkTpl" checked="checked" type="radio">
																	<label for="addSignuplinkTpl0">默认模版</label>
																</span>
																<span>
																	<input id="addSignuplinkTpl1" value="1" name="addSignuplinkTpl" type="radio">
																	<label for="addSignuplinkTpl1">模版1</label>
																</span>
																<span>
																	<input id="addSignuplinkTpl2" value="2" name="addSignuplinkTpl" type="radio">
																	<label for="addSignuplinkTpl2">模版2</label>
																</span>
																<span>
																	<input id="addSignuplinkTpl3" value="3" name="addSignuplinkTpl" type="radio">
																	<label for="addSignuplinkTpl3">模版3</label>
																</span>
															</dd>
															-->
															<dd>
																<span class="tt">使用次数：</span>
																<span><input value="" way-data="addSignuplink.times" onkeyup="replaceAndSetPos(this,event,/[^\d]/g,'');" maxlength="5" type="text"></span>
																<span class="tisp">&nbsp;&nbsp;1-100的整数</span>
															</dd>
															<dd>
																<span class="tt">彩票返点：</span>
																<span><input type="text" value="" way-data="addSignuplink.rebateid" onkeyup="checkAddUserRebate();" maxlength="7"></span>
																<span class="tisp" id="addUserGeneralTipsRebate">（可分配范围 0~<way way-data="addUser.maxRebate">0</way>）</span>
															</dd>

														</dl>
														<a class="in-but-l w-16" href="javascript:;" onclick="addSignuplink();">生成链接</a>
													</div>
												</div>
												<div class="tb-imte" id="signuplinkList" style="display: none;">
													<table class="mem-biao">
														<tbody></tbody>
													</table>
													<div class="member-pag paging"></div>

												</div>
											</div>										</div>
									</div>
									<div class="tb-imte" id="allUserList" style="display:none">
										<table class="mem-biao">
											<thead>
												<tr>
													<th colspan="8">
														<span>创建时间：</span>
														<input type="text" id="userSearchStartTime" onclick="laydate({format:'YYYY-MM-DD',isclear:false});" readonly="true">
														<span>-</span>
														<input type="text" id="userSearchEndTime" onclick="laydate({format:'YYYY-MM-DD',isclear:false});" readonly="true">
														<span>余额：</span>
														<input type="text" value="" id="userSearchMinMoney">
														<span>-</span>
														<input type="text" value="" id="userSearchMaxMoney">
														<span>用户名：</span>
														<input class="in-tx-1" type="text" value="" id="userSearchLoginname">
														<a href="javascript:;" class="in-but-l h-32" onclick="allUserList();">查询</a>
													</th>
												</tr>
											</thead>
											<tbody></tbody>
										</table>
										<div class="member-pag paging"></div>
									</div>
									<div class="tb-imte" id="allOnlineUserList" style="display:none">
										<table class="mem-biao">
											<thead>
												<tr>
													<th colspan="8">
													<span>创建时间：</span>
													<input type="text" id="userOnlineSearchStartTime" onclick="laydate({format:'YYYY-MM-DD',isclear:false});" readonly="true">
													<span>-</span>
													<input type="text" id="userOnlineSearchEndTime" onclick="laydate({format:'YYYY-MM-DD',isclear:false});" readonly="true">
													<span>余额：</span>
													<input type="text" value="" id="userOnlineSearchMinMoney">
													<span>-</span>
													<input type="text" value="" id="userOnlineSearchMaxMoney">
													<span>用户名：</span>
													<input class="in-tx-1" type="text" value="" id="userOnlineSearchLoginname">
													<a href="javascript:;" class="in-but-l h-32" onclick="allUserList(1);">查询</a>
												</th>
												</tr>
											</thead>
											<tbody></tbody>
										</table>
										<div class="member-pag paging"></div>
									</div>
									<div class="mar-lr20 tb-imte" id="downUserBetsList" style="display:none">
							<table class="mem-biao">
								<thead>
									<tr>
										<th colspan="12">
											<span>下单时间：</span>
											<input type="text" id="downUserBetsSearchStartTime" onclick="laydate({format:'YYYY-MM-DD',isclear:false});" readonly="true">
											<span>-</span>
											<input type="text" id="downUserBetsSearchEndTime" onclick="laydate({format:'YYYY-MM-DD',isclear:false});" readonly="true">
											<span>订单号：</span>
											<input class="in-tx-1" type="text" value="" id="downUserBetsSearchBillno">
											<span>期号：</span>
											<input class="in-tx-1" type="text" value="" id="downUserBetsSearchExpect">
											<span>用户名：</span>
											<input class="in-tx-1" type="text" value="" id="downUserBetsSearchLoginname">
											</th>
											</tr>
											<tr>
											<th colspan="5">
											<span>彩票种类：</span>
											<select id="downUserBetsSearchShortName"></select>
											<span>彩票状态：</span>
											<select id="downUserBetsSearchState">
												<option value="">全部</option>
												<option value="0">未开奖</option>
												<option value="-1">未中奖</option>
												<option value="1">已中奖</option>
												<option value="-2">已撤单</option>
											</select>
											<a href="javascript:;" class="in-but-l h-32" onclick="allDownUserBetsList();">查询</a>
										</th>
                                            <th colspan="7" style="text-align: center; font-size:16px;">
                                            <p class="mark">
											下注统计
											大：<b way-data="allDownUserBetsList.k3hzbig">0.00</b>
                                            小：<b way-data="allDownUserBetsList.k3hzsmall">0.00</b>
                                            单：<b way-data="allDownUserBetsList.k3hzodd">0.00</b>
                                            双：<b way-data="allDownUserBetsList.k3hzeven">0.00</b>
                                            </p>
                                            </th>
                                            </tr>
								</thead>
								<tbody></tbody>
							</table>
							<div class="member-pag paging"></div>
						</div>

						<!-- 帐变记录 -->
						<div class="mar-lr20 tb-imte"	id="accountChange" style="display:none">
							<table class="mem-biao">
								<thead>
									<tr>
										<th colspan="8">
											<span>开始时间：</span>
											<input class="layriqi starTime" id="accountChangeStartTime" type="text" onclick="laydate({format:'YYYY-MM-DD',isclear:false});" readonly="true">
											<span class="zhi">结束时间：</span>
											<input class="layriqi endTime" id="accountChangeEndTime" type="text" onclick="laydate({format:'YYYY-MM-DD',isclear:false});" readonly="true">
											<span>用户名：</span>
											<input class="in-tx-1" type="text" value="" id="accountChangeSearchLoginname">
											<span>账变类型：</span>
											<select id="sourceModule">
												<option value="">全部</option>
<?php $fuddetailtypes = C('fuddetailtypes');?>
<?php if(is_array($fuddetailtypes)): foreach($fuddetailtypes as $fk=>$ft): ?><option value="<?php echo ($fk); ?>" <?php if($fk == $type): ?>selected<?php endif; echo ($ft); ?></option><?php endforeach; endif; ?>
											</select>
											<a href="javascript:;" class="in-but-l h-32" onclick="accountChange();">查询</a>
										</th>
									</tr>
								</thead>
								<tbody></tbody>
							</table>
							<div class="member-pag paging"></div>
						</div>

						<div class="mar-lr20 tb-imte" id="groupDeposit" style="display:none">
							<table class="mem-biao">
								<thead>
									<tr>
										<th colspan="10">
											<span>开始时间：</span>
											<input class="layriqi starTime" id="groupDepositStartTime" type="text" onclick="laydate({format:'YYYY-MM-DD',isclear:false});" readonly="true">
											<span class="zhi">结束时间：</span>
											<input class="layriqi endTime" id="groupDepositEndTime" type="text" onclick="laydate({format:'YYYY-MM-DD',isclear:false});" readonly="true">
											<span>用户名：</span>
											<input class="in-tx-1" type="text" value="" id="groupDepositSearchLoginname">
											<span>订单号：</span>
											<input class="in-tx-1" type="text" value="" id="groupDepositSearchBillNo">
										</th>
									</tr>
									<tr>
										<th colspan="10">
											<span>类型：</span>
											<select id="groupDepositType">
												<option value="0">充值</option>
												<option value="1">提款</option>
											</select>
											<span>状态：</span>
											<select id="groupDepositState">
												<option value="">全部</option>
												<option value="0">正在处理</option>
												<option value="1">审核通过</option>
												<option value="-1">取消申请</option>
											</select>
											<a href="javascript:;" class="in-but-l h-32" onclick="groupDeposit();">查询</a>
										</th>
									</tr>
								</thead>
								<tbody></tbody>
							</table>
							<div class="member-pag paging"></div>
						</div>

						<div class="mar-lr20 tb-imte" style="display:none">
							<table class="mem-biao" id="groupReport">
								<thead>
									<tr>
										<th colspan="8">
											<span>开始时间：</span>
											<input class="layriqi starTime" id="groupReportStartTime" type="text" onclick="laydate({format:'YYYY-MM-DD',isclear:false});" readonly="true">
											<span class="zhi">结束时间：</span>
											<input class="layriqi endTime" id="groupReportEndTime" type="text" onclick="laydate({format:'YYYY-MM-DD',isclear:false});" readonly="true">
											<span>用户名：</span>
											<input class="in-tx-1" type="text" value="" id="groupReportSearchLoginname">

											<a href="javascript:;" class="in-but-l h-32" onclick="groupReport();">查询</a>
										</th>
									</tr>
								</thead>
								<tbody></tbody>
							</table>
							<div class="member-pag paging"></div>
						</div>




					</div>
				</div>

						</div>
					</div>
					</div>
		</div>
</section>

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

<script>
$(function (){
	 
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
})

</script>
</body>
</html>