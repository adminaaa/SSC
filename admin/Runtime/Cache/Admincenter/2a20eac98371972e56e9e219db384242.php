<?php if (!defined('THINK_PATH')) exit();?><!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<LINK rel="Bookmark" href="/favicon.ico" >
<LINK rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="../Template/admin/resources/ui/lib/html5.js"></script>
<script type="text/javascript" src="../Template/admin/resources/ui/lib/respond.min.js"></script>
<script type="text/javascript" src="../Template/admin/resources/ui/lib/PIE_IE678.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="../Template/admin/resources/ui/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="../Template/admin/resources/ui/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="../Template/admin/resources/ui/lib/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="../Template/admin/resources/ui/lib/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="../Template/admin/resources/ui/static/h-ui.admin/skin/green/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="../Template/admin/resources/ui/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="../Template/admin/resources/ui/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--/meta 作为公共模版分离出去-->

<title>会员添加/修改</title>
</head>
<body>
<article class="page-container">
	<form action="<?php echo U(CONTROLLER_NAME.'/'.ACTION_NAME);?>" method="post" class="form form-horizontal validate-form" id="AjaxPostForm">
		<?php if(isset($info)): ?><input name="id" type="hidden" value="<?php echo ($info[$_pk]); ?>"><?php endif; ?>
        
        
                
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>会员组：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<span class="select-box" style="width:auto"><select class="select" name="groupid">
<option value="0">无分组</option>
<?php if(is_array($grouplist)): $i = 0; $__LIST__ = $grouplist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$gvo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($gvo["groupid"]); ?>" <?php if($gvo['groupid'] == $info['groupid']): ?>selected<?php endif; ?>><?php echo ($gvo["groupname"]); ?>(<?php echo ($gvo["touhan"]); ?>)</option><?php endforeach; endif; else: echo "" ;endif; ?>
</select></span>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>类型：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="radio-box">
					<input name="proxy" type="radio" id="proxy-1" value="1" <?php if($info['proxy'] == 1): ?>checked<?php endif; ?>>
					<label for="proxy-1">代理</label>
				</div>
				<div class="radio-box">
					<input type="radio" id="proxy-0" name="proxy" value="0" <?php if($info['proxy'] == 0): ?>checked<?php endif; ?>>
					<label for="proxy-0">会员</label>
				</div>
			</div>
		</div>
        <?php if($info["proxy"] == 0): ?><div class="row cl">
                <label class="form-label col-xs-4 col-sm-3"><span class="c-red"></span>上级:</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="<?php echo ($parent["username"]); ?>" placeholder="上级用户名" name="parent">
                </div>
            </div><?php endif; ?>
        <div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>用户名：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<?php echo ($info["username"]); ?>
				<input type="hidden" readonly="true" class="input-text" value="<?php echo ($info["username"]); ?>" placeholder="用户名" name="username">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>返点：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($info["fandian"]); ?>" placeholder="返点" name="fandian">
			</div>
		</div>
        <?php if(isset($info)): ?><div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">银行真实姓名：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($info["userbankname"]); ?>" placeholder="银行真实姓名" name="userbankname">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">QQ：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($info["qq"]); ?>" placeholder="QQ" name="qq">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">手机号码：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($info["tel"]); ?>" placeholder="手机号码" name="tel">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">邮箱：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($info["email"]); ?>" placeholder="邮箱" name="email">
			</div>
		</div>
        <div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">密码：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" style="width:120px;" value="" placeholder="密码" name="password">不修改留空
			</div>
		</div>
        
        <div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">资金密码：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" style="width:120px;" value="" placeholder="密码" name="tradepassword">不修改留空
			</div>
		</div>
        <?php else: ?>
        <div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>密码：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($info["password"]); ?>" placeholder="密码" name="password">
			</div>
		</div>
        
        <div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>资金密码：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($info["tradepassword"]); ?>" placeholder="密码" name="tradepassword">
			</div>
		</div><?php endif; ?>
        
        <!--<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>彩票返点%：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($info["fandian"]); ?>" placeholder="彩票返点" name="fandian">
			</div>
		</div>
        
        <div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>六合彩返点%：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($info["lhcrebate"]); ?>" placeholder="六合彩返点" name="lhcrebate">
			</div>
		</div>-->
                
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>内部帐号：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="radio-box">
					<input name="isnb" type="radio" id="isnb-1" value="1" <?php if($info['isnb'] == 1): ?>checked<?php endif; ?>>
					<label for="isnb-1">是</label>
				</div>
				<div class="radio-box">
					<input type="radio" id="isnb-0" name="isnb" value="0" <?php if($info['isnb'] == 0): ?>checked<?php endif; ?>>
					<label for="isnb-0">否</label>
				</div>
			</div>
		</div>
        
        
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;确定&nbsp;&nbsp;">
			</div>
		</div>
	</form>
</article>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="../Template/admin/resources/ui/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="../Template/admin/resources/ui/lib/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="../Template/admin/resources/ui/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="../Template/admin/resources/ui/static/h-ui.admin/js/H-ui.admin.js"></script> 
<script type="text/javascript" src="../Template/admin/resources/ui/lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="../Template/admin/resources/ui/lib/icheck/jquery.icheck.min.js"></script> 
<script type="text/javascript" src="../Template/admin/resources/ui/lib/jquery.validation/1.14.0/jquery.validate.min.js"></script> 
<script type="text/javascript" src="../Template/admin/resources/ui/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="../Template/admin/resources/ui/lib/jquery.validation/1.14.0/messages_zh.min.js"></script>
<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	$.Huitab("#tab-system .tabBar span","#tab-system .tabCon","current","click","6");
});

<!--AJAX POST表单提交-->
$("#AjaxPostForm,.AjaxPostForm").submit(function(){
	var $this    = $(this);
	var $confirm = $this.attr('confirm');
	var url      = $this.attr('action');
 
	var defaultsubvalue = $("#AjaxPostForm,.AjaxPostForm").find("[type='submit']").val();
 
	layer.confirm('您确定需要操作吗？', {
	  btn: ['确定','取消'] 
	}, function(index){
	  	layer.close(index);
		$("#AjaxPostForm,.AjaxPostForm").find("[type='submit']").val('正在提交...').attr("disabled","disabled");
		$.post(url,$this.serialize(), function(json){
			if(json.status==1){
				layer.msg(json.info,{icon:1,time:2000});
				$("#AjaxPostForm,.AjaxPostForm").find("[type='submit']").val(defaultsubvalue).removeAttr("disabled");
			 
				setTimeout("parentrefresh()", 2000);
			}else if(json.status==0){
				$("#AjaxPostForm,.AjaxPostForm").find("[type='submit']").val(defaultsubvalue).removeAttr("disabled");
				layer.msg(json.info,{icon:2,time:3000});
			}
			
		}, "json");
	}, function(index){
	  layer.close(index);
	});
	
	return false;
});
function parentrefresh(index){
	var index = parent.layer.getFrameIndex(window.name);
	if(window.name==''){
		window.location.reload();
	}else{
		parent.location.reload();
	}
	parent.layer.close(index);
 
 
}
$(document).on("click", "[layer-url]", function() {
	var title = $(this).attr('title')?$(this).attr('title'):'窗口信息',
		url   = $(this).attr('layer-url'),
		w     = $(this).attr('layer-width'),
		h     = $(this).attr('layer-height');
	if(w=='100%'){
		var layerindex = layer.open({
		  type: 2,
		  content: url,
		  area: ['320px', '195px'],
		  maxmin: true
		});
		layer.full(layerindex);
	}else{
		layer_show(title,url,w,h);
	}
});
$(document).on("click", "[status-url]", function() {
	var obj       = $(this);
	var url       = $(this).attr('status-url');
	var title     = obj.attr('title')?$(this).attr('title'):'您确认操作吗？';
	var issuccess = obj.hasClass('label-success');
	layer.confirm(title,function(index){
		$.getJSON(url, function(json){
			if(json.status==1){
				if(issuccess){
					obj.removeClass('label-success').addClass('label-defaunt').text('禁用');
				}else{
					obj.removeClass('label-defaunt').addClass('label-success').text('启用');
				}
				layer.msg('操作成功',{icon: 1,time:1000});
			}else{
				layer.msg(json.info,{icon: 2,time:2000});
			};
		});
	});
});
$(document).on("click", "[layer-del-url]", function() {
	var obj       = $(this);
	var url       = obj.attr('layer-del-url');
	var title     = '您确认删除吗？';
	var issuccess = obj.hasClass('label-success');
	layer.confirm(title,function(index){
		$.getJSON(url, function(json){
			if(json.status==1){
				obj.parents("tr").remove();
				layer.msg('已删除!',{icon:1,time:1000});
			}else{
				layer.msg(json.info,{icon: 2,time:2000});
			};
		});
	});
});
$(document).on("click", "[layer-alt-url]", function() {
	var obj       = $(this);
	var url       = obj.attr('layer-alt-url');
	var title     = '您确认操作吗？';
	var issuccess = obj.hasClass('label-success');
	layer.confirm(title,function(index){
		$.getJSON(url, function(json){
			if(json.status==1){
				 
				layer.msg('操作成功!',{icon:1,time:1000});
			}else{
				layer.msg(json.info,{icon: 2,time:2000});
			};
		});
	});
});

$(document).on("click", "[deleteall-url]", function() {
	if($("input.checkids:checked").length<1){
		layer.msg('请勾选操作的数据行',{icon:5,time:3000});
		return false;
	}
	var obj       = $(this),
		url       = obj.attr('deleteall-url'),
		form      = obj.parents('form');
	form.attr('action',url)
	layer.confirm('确定批量删除吗？',function(index){
		$.post(url,form.serialize(), function(json){
			if(json.status==1){
				layer.msg(json.info,{icon:1,time:2000});
				setTimeout("window.location.reload()", 2000);
			}else if(json.status==0){
				layer.msg(json.info,{icon:2,time:3000});
			}
			
		}, "json");
	});
});

$(document).on("click", "[listorder-url]", function() {
	if($("input.checkids:checked").length<1){
		layer.msg('请勾选操作的数据行',{icon:5,time:3000});
		return false;
	}
	var obj       = $(this),
		url       = obj.attr('listorder-url'),
		form      = obj.parents('form');
	form.attr('action',url)
	layer.confirm('确定排序吗？',function(index){
		$.post(url,form.serialize(), function(json){
			if(json.status==1){
				layer.msg(json.info,{icon:1,time:2000});
				setTimeout("window.location.reload()", 2000);
			}else if(json.status==0){
				layer.msg(json.info,{icon:2,time:3000});
			}
			
		}, "json");
	});
});

</script>
<!--/请在上方写此页面业务相关的脚本-->


</body>
</html>