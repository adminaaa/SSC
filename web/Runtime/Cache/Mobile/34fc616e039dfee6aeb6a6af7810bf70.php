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
<!--<script type="text/javascript" src="/resources/js/way.min.js"></script>-->
<body>
	<header data-am-widget="header"class="am-header am-header-default header nav_bg am-header-fixed">
		<div class="am-header-left am-header-nav">
			<a href="javascript:history.back(-1);" class="">
				<i class="iconfont icon-arrow-left"></i>
			</a>
      	</div>

		<h1 class="am-header-title activity_h1">
			微信支付
		</h1>

	</header>
	
	<div id="pay_alipay" class="me-infor" style="display:none;padding: 15px;background: #fff;margin-bottom:10px;">
			<div class="infor-xx">
					<ul class="mar-lr20">
						<li>尊敬的客户您好，您的充值订单已经生成，请您在该页面继续完成充值。</li>
						<li>
							<strong>充值金额：</strong>
							<span><em class="mark" id="saomabill_amount" way-data="saomabill.amount"></em>元</span>
						</li>
						<li >
							<strong>订单编号：</strong>
							<span way-data="saomabill.trano" id="saomabill_trano" class="mark"></span>
						</li>
						<li>
							<strong>附言码：</strong>
							<span way-data="saomabill.id" id="saomabill_id" class="mark"></span>
						</li>
						<li class='payerweima text-center'><h5>微信在线支付</h5></li>
						<li class='payerweima' style='height:auto'><span><img src="<?php echo ($Allmsg['ewmurl']); ?>" style='width:150px;border:none;display:block; margin:0 auto;'></span></li>
					</ul>
				</div>
				<input type="hidden" way-data="saomabill_paytype" id="saomabill.paytype" />
				<a class="btn common_btn" style=" width: 7em;display: block;margin: 1em auto;background: #dd514c;text-align: center;border-radius: 4px;color: #fff;" href="javascript:;" onclick="alt('充值成功申请已提交')">扫码完成支付</a>
	</div>


	<div class="bank_recharge">
		<form method="post" id="bank_recharge_from" action="<?php echo U('Account/recharge');?>" >
			  
			<ul class="bank_form_list">
				<li class="am-cf">
					<span class="bank_form_left am-fl">充值金额</span>
					<div class="am-fr bank_right_input">
						<input type="text" name="amount" id="amount" placeholder="最低充值10" class="input_txt">
					</div>
				</li>
				<li class="am-cf" style="display:none">
					<span class="bank_form_left am-fl">支付账号</span> 
					<div class="am-fr bank_right_input">
						<input type="text" name="payname" id="payname" placeholder="请输入你的支付账号" class="input_txt" value="weixin">
					</div>
				</li>
				<li class="am-cf">
					<span class="bank_form_left am-fl">充值方式</span>
					<div class="am-fr bank_right_input">
						<input type="radio"  name="paytype"  value="<?php echo ($Allmsg['paytype']); ?>" checked="checked" class="input_txt" style="display:none;">
						<svg class="icon" aria-hidden="true" style="width: 2em;height: 2em;margin-top: 7px;">
						    	<use xmlns:xlink="//www.w3.org/1999/xlink" xlink:href="#icon-weixin-copy"></use>
						</svg>
					</div>
				</li>
			</ul>

			<button class="am-btn am-btn-danger am-radius am-btn-block nextbtn" type="button"  >确定</button>
		</form>	
		<div class="bottom_explain">
			<?php echo ($Allmsg['remark']); ?>
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

	<script type="text/javascript">

		$('.nextbtn').click(function () {
			if($('input[name=amount]').val()=="") {
				alert('请输入充值金额');return false;
			}
			if($('input[name=payname]').val()==""){
				alert('请输入支付账号');return false;
			}
			$.ajax({
				type : 'POST',
				url : "<?php echo U('Apijiekou/addrecharge');?>",
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
						$('#bank_recharge_from').hide();
					 
					 
					 
					 
						$('#saomabill_paytype').val(data.data.paytype);
						$('#saomabill_amount').text(data.data.amount);
						$('#saomabill_trano').text(data.data.trano);
						$('#saomabill_id').text(data.data.id);
					 
					}else{
						alert(data.message);
					}
				}
			})
		})
		function paysaoma() {
			window.location.href = "<?php echo U('Account/dealRecord2');?>";
		}
	function getpayurl(order_no, order_amount,id){
		$.ajax({
				type : 'POST',
				url : "./php1/scan_pay.php",
				data :{
					service_type:"weixin_h5api",
					order_no      : order_no,
					order_amount     :order_amount,
					id :id,
				},
				dataType:"text", 
				success : function (data) {
				 
					var payURL = $(data).find("payURL").text();
					var url=decodeURIComponent(payURL);
					$("#gopay").click(function () {
						window.location.href =url;
						
					});
				 
					 
					$("#gopay").show();
					
					$("#pay_alipay").show();
					
				}
			})
	
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