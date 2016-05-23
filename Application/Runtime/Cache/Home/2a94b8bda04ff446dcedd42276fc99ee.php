<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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

	<div id="canvas"></div>
	<!-- #section:basics/navbar.layout -->
	<div id="navbar" class="navbar navbar-default">

		<div class="navbar-container" id="navbar-container">
			<!-- #section:basics/sidebar.mobile.toggle -->
			<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
				<span class="sr-only">Toggle sidebar</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<!-- /section:basics/sidebar.mobile.toggle -->
			<div class="navbar-header pull-left">
				<!-- #section:basics/navbar.layout.brand -->
				<a href="javascript:;" class="navbar-brand">
					<small>
						<i class="fa fa-book"></i>
						A1-DOC
					</small>
				</a>

				<!-- /section:basics/navbar.layout.brand -->

				<!-- #section:basics/navbar.toggle -->

				<!-- /section:basics/navbar.toggle -->
			</div>

			<!-- #section:basics/navbar.dropdown -->
			<div class="navbar-buttons navbar-header pull-right" role="navigation">
				<ul class="nav ace-nav">
					<!-- #section:basics/navbar.user_menu -->
					<li class="light-blue">
						<?php if($login_user): ?><a href="<?php echo U('Home/Item/index');?>">我的项目</a>
				        <?php else: ?>
				          <a href="<?php echo U('Home/User/login');?>">登录/注册</a><?php endif; ?>
					</li>
					<!-- /section:basics/navbar.user_menu -->
				</ul>
			</div>

			<!-- /section:basics/navbar.dropdown -->
		</div><!-- /.navbar-container -->
	</div>
		
	<style>
	body {
		overflow: hidden;
		background-color: #000000;
		user-select: none;
		-webkit-user-select: none;
		-moz-user-select: none;
		-o-user-select: none;
		-ms-user-select: none;
	
	}
	</style>
	
	<script src="/Public/page/js/index/protoclass.js"></script>
	<script src="/Public/page/js/index/box2d.js"></script>
	<script src="/Public/page/js/index/index.js"></script>
		
</body>
</html>