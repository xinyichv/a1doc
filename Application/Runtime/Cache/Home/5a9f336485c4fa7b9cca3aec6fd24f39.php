<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title>A1-DOC</title>

	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="/Public/assets/css/bootstrap.css" />
	<link rel="stylesheet" href="/Public/assets/css/font-awesome.css" />

	<!-- page specific plugin styles -->
	<link rel="stylesheet" href="/Public/assets/css/jquery-ui.custom.css" />
	<link rel="stylesheet" href="/Public/assets/css/jquery.gritter.css" />

	<!-- text fonts -->
	<link rel="stylesheet" href="/Public/assets/css/ace-fonts.css" />

	<!-- ace styles -->
	<link rel="stylesheet" href="/Public/assets/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />

	<!--[if lte IE 9]>
		<link rel="stylesheet" href="/Public/assets/css/ace-part2.css" class="ace-main-stylesheet" />
	<![endif]-->

	<!--[if lte IE 9]>
	  <link rel="stylesheet" href="/Public/assets/css/ace-ie.css" />
	<![endif]-->

	<!-- inline styles related to this page -->
	<link rel="stylesheet" href="/Public/page/css/a1doc.css" />

	<!-- ace settings handler -->
	<script src="/Public/assets/js/ace-extra.js"></script>

	<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

	<!--[if lte IE 8]>
	<script src="/Public/assets/js/html5shiv.js"></script>
	<script src="/Public/assets/js/respond.js"></script>
	<![endif]-->
	
	<script type="text/javascript">
      var DocConfig = {
          host: window.location.origin,
          app: "<?php echo U('/');?>",
          pubile:"/Public"
      }
      DocConfig.hostUrl = DocConfig.host + "/" + DocConfig.app;
    </script>
</head>

<body class="no-skin">

<style type="text/css">
.message {
  width: 600px;
  min-height: 80px;
  padding: 20px 20px 10px 20px;
  margin: 50px auto 0 auto;
  border-width: 5px;
  overflow: hidden;
}
.message .content {
  overflow: hidden;
}
.message h4 {
  margin: 10px 0;
  line-height: 30px;
}

</style>
<div class="message alert alert-<?php echo ($type); ?>">
	<div class="icon pull-left"><i class="{if $type=='success'}icon-ok{else if $type=='error'}icon-remove{else if $type=='tips'}icon-exclamation-sign{else if $type=='sql'}icon-warning-sign{/if}"></i></div>
	<div class="content">
		<h4><?php echo $msg;?></h4>
		<?php if($redirect){ ?>
		<p><a href="<?php echo $redirect;?>">如果你的浏览器没有自动跳转，请点击此链接</a></p>
		<script type="text/javascript">
			setTimeout(function () {
				location.href = "<?php echo $redirect;?>";
			}, 3000);
		</script>
		<?php }else{ ?>
		<p>[<a href="javascript:history.go(-1);">点击这里返回上一页</a>] &nbsp; [<a href="/index.php/">首页</a>]</p>
		<?php } ?>
	</div>
</div>

	<div class="footer">
		<div class="footer-inner">
			<!-- #section:basics/footer -->
			<div class="footer-content">
				<span class="bigger-120">
					<span class="blue bolder">A1-DOC</span>
					Powered By A1-SHARE TEAM
				</span>
				<!--
				&nbsp; &nbsp;
				<span class="action-buttons">
					<a href="javascript:;">
						<i class="ace-icon fa fa-wechat bigger-150"></i>
					</a>
				</span>
				-->
			</div>

			<!-- /section:basics/footer -->
		</div>
	</div>

	<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
		<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
	</a>
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->
<script type="text/javascript">
	window.jQuery || document.write("<script src='/Public/assets/js/jquery.js'>"+"<"+"/script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='/Public/assets/js/jquery1x.js'>"+"<"+"/script>");
</script>
<![endif]-->
<script type="text/javascript">
	if('ontouchstart' in document.documentElement) document.write("<script src='/Public/assets/js/jquery.mobile.custom.js'>"+"<"+"/script>");
</script>
<script src="/Public/assets/js/bootstrap.js"></script>

<!-- page specific plugin scripts -->
<script src="/Public/assets/js/jquery.gritter.js"></script>

<!-- ace scripts -->
<script src="/Public/assets/js/ace/elements.scroller.js"></script>
<script src="/Public/assets/js/ace/elements.colorpicker.js"></script>
<script src="/Public/assets/js/ace/elements.fileinput.js"></script>
<script src="/Public/assets/js/ace/elements.typeahead.js"></script>
<script src="/Public/assets/js/ace/elements.wysiwyg.js"></script>
<script src="/Public/assets/js/ace/elements.spinner.js"></script>
<script src="/Public/assets/js/ace/elements.treeview.js"></script>
<script src="/Public/assets/js/ace/elements.wizard.js"></script>
<script src="/Public/assets/js/ace/elements.aside.js"></script>
<script src="/Public/assets/js/ace/ace.js"></script>
<script src="/Public/assets/js/ace/ace.ajax-content.js"></script>
<script src="/Public/assets/js/ace/ace.touch-drag.js"></script>
<script src="/Public/assets/js/ace/ace.sidebar.js"></script>
<script src="/Public/assets/js/ace/ace.sidebar-scroll-1.js"></script>
<script src="/Public/assets/js/ace/ace.submenu-hover.js"></script>
<script src="/Public/assets/js/ace/ace.widget-box.js"></script>
<script src="/Public/assets/js/ace/ace.settings.js"></script>
<script src="/Public/assets/js/ace/ace.settings-rtl.js"></script>
<script src="/Public/assets/js/ace/ace.settings-skin.js"></script>
<script src="/Public/assets/js/ace/ace.widget-on-reload.js"></script>
<script src="/Public/assets/js/ace/ace.searchbox-autocomplete.js"></script>