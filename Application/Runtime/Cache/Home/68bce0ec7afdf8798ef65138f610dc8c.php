<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>A1-Doc</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="/Public/bootstrap/css/bootstrap.min.css" />
	
    <style type="text/css">
    @charset "utf-8";
	body {
		font:14px/1.5 "Microsoft Yahei","微软雅黑",Tahoma,Arial,Helvetica,STHeiti;
	}
    </style>
      <script type="text/javascript">
      var DocConfig = {
          host: window.location.origin,
          app: "<?php echo U('/');?>",
          pubile:"/Public",
      }

      DocConfig.hostUrl = DocConfig.host + "/" + DocConfig.app;
      </script>

  </head>
  <body>
<link href="/Public/highlight/default.min.css" rel="stylesheet"> 
<script src="/Public/highlight/highlight.min.js"></script> 

<style type="text/css">
body{
	overflow-x:hidden;overflow-y:hidden
}
</style>
<!-- 这里开始是内容 -->
<div class="" style="padding-top:10px;">

<?php echo ($page["page_content"]); ?>

</div>




    
	<script src="/Public/js/common/jquery.min.js"></script>
    <script src="/Public/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html> 
<script>

$(function(){
    hljs.initHighlightingOnLoad();

    //为所有table标签添加bootstap支持的表格类
    $("table").addClass("table table-bordered table-hover");

    //超链接都在新窗口打开
	$('a[href^="http"]').each(function() {
		$(this).attr('target', '_blank');
	});

})

</script>