
$(function(){
  var item_id = $("#item_id").val();

  //删除
  $("#save-cat").click(function(){
      var password = $("#password").val();
      $.post(
        "ajaxDelete",
        {"item_id": item_id , "password": password  },
        function(data){
          if (data.error_code == 0) {
            alert("删除成功！");
            window.location.href="../item/index";
          }else{
            alert(data.error_message);
          }
        },
        "json"

        );
      return false;
  });

  $(".exist-cat").click(function(){
    window.location.href="../item/show?item_id="+item_id;
  });

});
