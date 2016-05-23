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


<input type="hidden" id="item_id" value="<?php echo ($item["item_id"]); ?>">
<input type="hidden" id="page_id" value="<?php echo ($page_id); ?>">
<input type="hidden" id="base_url" value="/index.php">
      
<!-- #section:basics/navbar.layout -->
<div id="navbar" class="navbar navbar-default">
	<script type="text/javascript">
		try{ace.settings.check('navbar' , 'fixed')}catch(e){}
	</script>

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
					<?php echo ($item["item_name"]); ?>
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
				<?php if($ItemPermn): ?><li class="light-blue">
						<a data-toggle="dropdown" href="#" class="dropdown-toggle">
							<span class="user-info">
								项目
								<small>更多操作</small>
							</span>
							<i class="ace-icon fa fa-caret-down"></i>
						</a>
						<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
							<li>
								<a href="#share-modal" role="button" data-toggle="modal">
									<i class="ace-icon fa fa-share-alt"></i>
									分享项目
								</a>
							</li>
							<li>
								<a href="#share-page-modal" role="button" data-toggle="modal">
									<i class="ace-icon fa fa-share"></i>
									分享当前页面
								</a>
							</li>
							<li>
								<a href="<?php echo U('Home/Item/word');?>?item_id=<?php echo ($item["item_id"]); ?>">
									<i class="ace-icon fa fa-external-link"></i>
									导出项目
								</a>
							</li>
							<?php if($ItemCreator): ?><li>
									<a href="<?php echo U('Home/Item/add');?>?item_id=<?php echo ($item["item_id"]); ?>">
										<i class="ace-icon fa fa-edit"></i>
										修改信息
									</a>
								</li>
								<li>
									<a href="<?php echo U('Home/Member/edit');?>?item_id=<?php echo ($item["item_id"]); ?>">
										<i class="ace-icon fa fa-group"></i>
										成员管理
									</a>
								</li>
								<li>
									<a href="<?php echo U('Home/Attorn/index');?>?item_id=<?php echo ($item["item_id"]); ?>">
										<i class="ace-icon fa fa-send"></i>
										转让
									</a>
								</li>
								<li>
									<a href="<?php echo U('Home/Item/delete');?>?item_id=<?php echo ($item["item_id"]); ?>">
										<i class="ace-icon fa fa-remove"></i>
										删除
									</a>
								</li><?php endif; ?>
							
							<li class="divider"></li>

							<li>
								<a href="<?php echo U('Home/Item/index');?>">
									<i class="ace-icon fa fa-bars"></i>
									更多项目
								</a>
							</li>
						</ul>
					</li>
				<?php else: ?>
					<li class="light-blue">
						<?php if(! $login_user): ?><a href="<?php echo U('Home/User/login');?>">
								<span class="user-info">
									登录/注册
								</span>
							</a>
						<?php else: ?>
							<a href="<?php echo U('Home/Item/index');?>">
								<span class="user-info">
									我的项目
								</span>
							</a><?php endif; ?>
					</li><?php endif; ?>	
				<!-- /section:basics/navbar.user_menu -->
			</ul>
		</div>

		<!-- /section:basics/navbar.dropdown -->
	</div><!-- /.navbar-container -->
</div>

<!-- /section:basics/navbar.layout -->
<div class="main-container" id="main-container">
	<script type="text/javascript">
		try{ace.settings.check('main-container' , 'fixed')}catch(e){}
	</script>
	
	<!-- #section:basics/sidebar -->
	<div id="sidebar" class="sidebar responsive">
		<script type="text/javascript">
			try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
		</script>
		
		<?php if($ItemPermn): ?><div class="sidebar-shortcuts" id="sidebar-shortcuts">
				<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
					<a class="btn btn-success" id="new-like" href="<?php echo U('Home/Page/edit');?>?item_id=<?php echo ($item["item_id"]); ?>&type=new" title="新建页面">
						<i class="ace-icon fa fa-file"></i>
					</a>
					<a class="btn btn-info" id="dir-like" href="<?php echo U('Home/Catalog/edit');?>?item_id=<?php echo ($item["item_id"]); ?>" title="新建/编辑/删除目录">
						<i class="ace-icon fa fa-folder-open"></i>
					</a>
					<a class="btn btn-warning" id="edit-link" href="" title="编辑页面">
						<i class="ace-icon fa fa-edit"></i>
					</a>
					<a class="btn btn-danger" id="delete-link" href="" title="删除页面" onclick="return confirm('确认删除吗？');return false;" >
						<i class="ace-icon fa fa-remove"></i>
					</a>
				</div>

				<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
					<span class="btn btn-success"></span>
					<span class="btn btn-info"></span>
					<span class="btn btn-warning"></span>
					<span class="btn btn-danger"></span>
				</div>
			</div><!-- /.sidebar-shortcuts --><?php endif; ?>

		<ul class="nav nav-list">
			<?php if(is_array($pages)): foreach($pages as $key=>$page): ?><li class="page">
					<a href="javascript:;" load-page-id="<?php echo U('Home/Page/index');?>?page_id=<?php echo ($page["page_id"]); ?>" data-page-id="<?php echo ($page["page_id"]); ?>">
						<i class="menu-icon fa fa-file"></i>
						<span class="menu-text"> <?php echo ($page["page_title"]); ?> </span>
					</a>
					<b class="arrow"></b>
				</li><?php endforeach; endif; ?>
	        <?php if(is_array($catalogs)): foreach($catalogs as $key=>$catalog): ?><li class="folder">
					<a href="javascript:;" class="dropdown-toggle">
						<i class="menu-icon fa fa-folder-open"></i>
						<span class="menu-text"> <?php echo ($catalog["cat_name"]); ?> </span>
						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>
					<ul class="submenu">
						<?php if(is_array($catalog["pages"])): foreach($catalog["pages"] as $key=>$catalog_page): ?><li class="page">
								<a href="javascript:;" load-page-id="<?php echo U('Home/Page/index');?>?page_id=<?php echo ($catalog_page["page_id"]); ?>" data-page-id="<?php echo ($catalog_page["page_id"]); ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									<?php echo ($catalog_page["page_title"]); ?>
								</a>
								<b class="arrow"></b>
							</li><?php endforeach; endif; ?>
					</ul>
				</li><?php endforeach; endif; ?>
		</ul><!-- /.nav-list -->

		<!-- #section:basics/sidebar.layout.minimize -->
		<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
			<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
		</div>

		<!-- /section:basics/sidebar.layout.minimize -->
		<script type="text/javascript">
			try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
		</script>
	</div>
	
	<div class="main-content">
		<div class="main-content-inner">
			<!-- /section:basics/content.breadcrumbs -->
			<div class="page-content">
				
				<!-- #section:settings.box -->
<div class="ace-settings-container" id="ace-settings-container">
	<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
		<i class="ace-icon fa fa-cog bigger-130"></i>
	</div>

	<div class="ace-settings-box clearfix" id="ace-settings-box">
		<div class="pull-left width-50">
			<!-- #section:settings.skins -->
			<div class="ace-settings-item">
				<div class="pull-left">
					<select id="skin-colorpicker" class="hide">
						<option data-skin="no-skin" value="#438EB9">#438EB9</option>
						<option data-skin="skin-1" value="#222A2D">#222A2D</option>
						<option data-skin="skin-2" value="#C6487E">#C6487E</option>
						<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
					</select>
				</div>
				<span>&nbsp; 选择主题</span>
			</div>
			<!-- /section:settings.skins -->

			<!-- #section:settings.navbar -->
			<div class="ace-settings-item">
				<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
				<label class="lbl" for="ace-settings-navbar"> 固定头部</label>
			</div>
			<!-- /section:settings.navbar -->

			<!-- #section:settings.sidebar -->
			<div class="ace-settings-item">
				<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
				<label class="lbl" for="ace-settings-sidebar"> 固定目录</label>
			</div>
			<!-- /section:settings.sidebar -->

			<!-- #section:settings.breadcrumbs -->
			<!--
			<div class="ace-settings-item">
				<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
				<label class="lbl" for="ace-settings-breadcrumbs"> 固定导航条</label>
			</div>
			-->
			<!-- /section:settings.breadcrumbs -->

			<!-- #section:settings.container -->
			<div class="ace-settings-item">
				<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
				<label class="lbl" for="ace-settings-add-container">
					小画面浏览
				</label>
			</div>
			<!-- /section:settings.container -->
			
			<!-- #section:basics/sidebar.options -->
			<div class="ace-settings-item">
				<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" />
				<label class="lbl" for="ace-settings-highlight"> 选中目录高亮</label>
			</div>
			<!-- /section:basics/sidebar.options -->
			
		</div><!-- /.pull-left -->
	</div><!-- /.ace-settings-box -->
</div><!-- /.ace-settings-container -->

				<!-- /section:settings.box -->
				<div class="row">
					<div class="col-xs-12">
						<!-- PAGE CONTENT BEGINS -->
						<iframe id="page-content" width="100%" scrolling="yes"  height="100%" frameborder="0" style=" overflow:visible; height:100%;" name="main"  seamless ="seamless"src=""></iframe>
						<!-- PAGE CONTENT ENDS -->
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.page-content -->
		</div>
	</div><!-- /.main-content -->
	
	<!-- 分享项目框 -->
	<div id="share-modal" class="modal" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="blue bigger">分享项目</h4>
				</div>
				<div class="modal-body">
					<p>项目地址：<code><?php echo ($share_url); ?></code></p>
	    			<p>你可以复制地址给你的好友</p>
				</div>
				<div class="modal-footer">
					<button class="btn btn-sm" data-dismiss="modal">
						<i class="ace-icon fa fa-times"></i>
						关闭
					</button>
				</div>
			</div>
		</div>
	</div>
	
	<!-- 分享页面框 -->
	<div id="share-page-modal" class="modal" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="blue bigger">分享页面</h4>
				</div>
				<div class="modal-body">
					<p>页面地址：<code id="share-page-link"></code></p>
	    			<p>你可以复制地址给你的好友</p>
				</div>
				<div class="modal-footer">
					<button class="btn btn-sm" data-dismiss="modal">
						<i class="ace-icon fa fa-times"></i>
						关闭
					</button>
				</div>
			</div>
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

	
	<script src="/Public/js/item/show.js"></script>
		
</body>
</html>