
$(".btnClose").click(function(){
  $(".jumpBoxOverlay").fadeOut(100);
});


// ajax載入視窗
function jbLoad(url){
  $(".jumpBoxOverlay").fadeTo(500, 1);
  $("#loadBox").load(`jumpBox/${url}`);
}