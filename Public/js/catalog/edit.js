$(function(){

  var item_id = $("#item_id").val();
  getCatList(item_id);

  //保存目录
  $("#save-cat").click(function(){
      var cat_name = $("#cat_name").val();
      var order = $("#order").val();
      var cat_id = $("#cat_id").val();
      $.post(
        "save",
        {"cat_name": cat_name , "order": order , "item_id": item_id , "cat_id": cat_id  },
        function(data){
          if (data.error_code == 0) {
            $("#delete-cat").hide();
            $("#cat_name").val('');
            $("#order").val('');
            $("#cat_id").val('');
            alert("保存成功！");
          }else{
            alert("保存失败！");
          }
          getCatList(item_id);
        },
        "json"

        );
      return false;
  });

  //删除目录
  $("#delete-cat").click(function(){
    if(confirm('确认删除吗？')){
        var cat_id = $("#cat_id").val();
        if (cat_id > 0 ) {
            $.post(
                "delete",
                { "cat_id": cat_id  },
                function(data){
                  if (data.error_code == 0) {
                    alert("删除成功！");
                    window.location.href="edit?item_id="+item_id;
                  }else{
                    if (data.error_message) {
                      alert(data.error_message);
                    }else{
                      alert("删除失败！");
                    }
                    
                  }
                },
                "json"
              );
        }
    }

      return false;
  });

  $(".exist-cat").click(function(){
    window.location.href="../item/show?item_id="+item_id;
  });


});

function getCatList(item_id) {
    $.get(
    	"catList",
    	{"item_id": item_id},
    	function(data){
	        $("#show-cat").html('');
	        if (data.error_code == 0) {
	          json = data.data;
	          var cat_html = "";
	          for (var i = 0; i < json.length; i++) {
	              cat_html +=	'<a class="label label-lg label-info a1margin" href="edit?cat_id='+json[i].cat_id+'&item_id='+json[i].item_id+'">';
	              cat_html +=		'<i class="ace-icon fa fa-folder bigger-120"></i> ';
	              cat_html +=		json[i].cat_name;
	              cat_html +=	'</a>';
	          };
	          $("#show-cat").append(cat_html);
	        };
    	},
    	"json"
     );
}







