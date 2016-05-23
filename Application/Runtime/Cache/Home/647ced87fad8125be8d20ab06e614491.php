<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>A1-DOC</title>

		<meta name="description" content="Edit page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="/Public/assets/css/bootstrap.css" />
		<link rel="stylesheet" href="/Public/assets/css/font-awesome.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="/Public/assets/css/ace-fonts.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="/Public/assets/css/ace.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="/Public/assets/css/ace-part2.css" />
		<![endif]-->
		<link rel="stylesheet" href="/Public/assets/css/ace-rtl.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="/Public/assets/css/ace-ie.css" />
		<![endif]-->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="/Public/assets/js/html5shiv.js"></script>
		<script src="/Public/assets/js/respond.js"></script>
		<![endif]-->
		
		<link rel="stylesheet" href="/Public/editor.md/css/editormd.css" />
		<link rel="stylesheet" href="/Public/css/page/edit.css" />
		
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
		<input type="hidden" id="item_id" value="<?php echo ($item_id); ?>">
	    <input type="hidden" id="page_id" value="<?php echo ($page["page_id"]); ?>">
	    <input type="hidden" id="default_cat_id" value="<?php echo ($default_cat_id); ?>">
	    <!-- 模板存放的地方 -->
		<div id="api-doc-templ" style="display:none">
		    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    "error_code": 0,
    "data": {
      "uid": "1",
      "username": "12154545",
      "name": "吴系挂",
      "groupid": 2 ,
      "reg_time": "1436864169",
      "last_login_time": "0",
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


		</div>
		<div id="database-doc-templ" style="display:none">
		    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无


		</div>
		
		<div id="navbar" class="navbar navbar-default navbar-collapse h-navbar">
			<div class="navbar-container" id="navbar-container">
				<nav role="navigation" class="navbar-menu pull-left">
		            <form class="navbar-form navbar-left form-search" role="search">
						<div class="form-group">
							标题：<input type="text" name="page_title" id="page_title" placeholder="请输入页面标题" value="<?php echo ($page["page_title"]); ?>" tabindex="1">
						</div>
						<div class="form-group">
							上级目录：<select name="cat_id" id="cat_id" tabindex="2"></select>
						</div>
						<div class="form-group">
							顺序数字：<input type="text" name="order" id="order" value="<?php echo ($page["order"]); ?>" placeholder="可选：顺序数字"  tabindex="3" >
						</div>
					</form>
					<ul class="nav navbar-nav">
						<li>
							<a data-toggle="dropdown" class="dropdown-toggle" href="javascript:;">
								插入模板&nbsp;
								<i class="ace-icon fa fa-angle-down bigger-110"></i>
							</a>
							<ul class="dropdown-menu dropdown-yellow dropdown-caret">
								<li>
									<a href="javascript:;" id="api-doc">插入API接口模板</a>
								</li>

								<li>
									<a href="javascript:;" id="database-doc">插入数据字典模板</a>
								</li>
							</ul>
						</li>
						<?php if($page["page_id"] > 0): ?><li>
								<a href="history?page_id=<?php echo ($page["page_id"]); ?>">历史版本</a>
							</li><?php endif; ?>
					</ul>
				</nav>
				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav navbar-nav">
						<li class="light-blue">
							<a href="javascript:;" id="save">保存</a>
						</li>
						<li>
							<a href="../item/show?item_id=<?php echo ($item_id); ?>&page_id=<?php echo ($page["page_id"]); ?>">取消</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="main-container">
			<div class="main-content">
				<div class="main-content-inner">
					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div id="editormd">
							        <textarea id="page_content" style="display:none;" tabindex="6" ><?php echo ($page["page_content"]); ?></textarea>
							    </div>
								<!-- PAGE CONTENT ENDS -->
							</div>
						</div>
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

		
		<script src="/Public/js/jquery.bootstrap-growl.min.js"></script>
		<script src="/Public/js/jquery.hotkeys.js"></script>
		<script src="/Public/editor.md/editormd.min.js"></script>
		<script src="/Public/editor.md/plugins/image-dialog/image-dialog.js"></script>
		<script src="/Public/editor.md/plugins/link-dialog/link-dialog.js"></script>
		<script src="/Public/editor.md/plugins/preformatted-text-dialog/preformatted-text-dialog.js"></script>
		<script src="/Public/editor.md/plugins/code-block-dialog/code-block-dialog.js"></script>
		<script src="/Public/editor.md/plugins/html-entities-dialog/html-entities-dialog.js"></script>
		<script src="/Public/editor.md/plugins/goto-line-dialog/goto-line-dialog.js"></script>
		<script src="/Public/editor.md/plugins/table-dialog/table-dialog.js"></script>
		<script src="/Public/editor.md/plugins/reference-link-dialog/reference-link-dialog.js"></script>
		<script src="/Public/js/page/edit.js"></script>
		
	</body>
</html>