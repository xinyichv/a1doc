
//页面加载完就执行
$(function(){
	$(".nav-list li").each(function() {
		if ($(this).children(".submenu").children().length == 0) {
			$(this).children("a").removeClass("dropdown-toggle").children("b").remove();
			$(this).children(".submenu").remove();
		}
	});
	
  //自动根据url把当前菜单激活
  var page_id = GetQueryString('page_id');
  //如果中没有指定page_id，则判断有没有父目录为0的页面，默认打开第一个
  if(!page_id) {
    page_id = $(".nav-list li.page").children("a").attr("data-page-id");
  };
  if(page_id !=null && page_id.toString().length>0){
    var str = 'page_id='+page_id;
    $(".nav-list li.page").each(function(){
      url = $(this).children("a").attr("load-page-id");
      //如果链接中包含当前url的信息，两者相匹配
      if (url && url.indexOf(str) >= 0 ) {
        //激活菜单
        $(this).addClass("active");
        //如果该菜单是子菜单，则还需要把父菜单打开才行
        if ($(this).parent('.submenu')) {
            $(this).parent('.submenu').show();
            $(this).parent('.submenu').parent('li').addClass("open active");
        };
        //获取对应的page_id
          page_id = $(this).children("a").attr("data-page-id");
          if (page_id != '' && page_id !='#') {
              change_page(page_id);
          };
      };
    });
  }

  //点击左侧菜单事件
  $(".nav-list li").click(function(){
	if ($(this).hasClass("page")) {
		$(".nav-list li").removeClass("active");
		$(this).addClass("active");
		if ($(this).parent().hasClass("submenu")) {
			$(this).parent().parent().addClass("active");
		}
	}
	//获取对应的page_id
	page_id = $(this).children("a").attr("data-page-id");
    if (page_id != '' && page_id != null  && page_id !='#') {
        change_page(page_id);
    };
  });
  
});

function iFrameHeight() {
	var ifr = document.getElementById('page-content');
	var iDoc = ifr.contentDocument || ifr.document;
	var height = calcPageHeight(iDoc);
	ifr.style.height = height + 'px';
}

//js获取url参数
function GetQueryString(name) {
     var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
     var r = window.location.search.substr(1).match(reg);
     if(r!=null)return  unescape(r[2]); return null;
}

//切换页面；
function change_page(page_id) {
    if(!page_id)return;
    var item_id = $("#item_id").val();
    var base_url = $("#base_url").val();
    $(".page-edit-link").show();
    $("#page-content").attr("src" , base_url+"/Home/page/index?page_id="+page_id);
    $("#edit-link").attr("href" , base_url+"/Home/page/edit?page_id="+page_id);
    $("#share-page-link").html("http://"+window.location.host+base_url+"/"+item_id+"?page_id="+page_id);
    $("#delete-link").attr("href" , base_url+"/Home/page/delete?page_id="+page_id);
}

//计算页面的实际高度，iframe自适应会用到
function calcPageHeight(doc) {
    var cHeight = Math.max(doc.body.clientHeight, doc.documentElement.clientHeight);
    var sHeight = Math.max(doc.body.scrollHeight, doc.documentElement.scrollHeight);
    var height  = Math.max(cHeight, sHeight);
    return height;
}
