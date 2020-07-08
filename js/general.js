// 點選導覽列按鈕，移動至該區域
$('.nav-item').click(function () {
  $('html, body').animate({
  scrollTop: $($.attr(this, 'href')).offset().top
  }, 500);
  return false;
});


// 移動至該區域，導覽列相對應之按鈕做改變
for(let i=0;i<$("section").length;i++){
  $('section').eq(i).waypoint(function() {
    $("header .navbar-nav .nav-item").removeClass('active');
    $("header .navbar-nav .nav-item").eq(i).addClass('active');
  }, {
    offset: '0'
  });
}

// 導覽列進入/離開topBar時改變顏色
$('#about').waypoint(function() {
  $("header").css("background-color", "#7ad48f");
}, {
  offset: '5%'
});
$('#about').waypoint(function() {
  $("header").css("background-color", "transparent");
}, {
  offset: '10%'
});

// 點選topBar的按鈕，向下移動
$('#btnDown').click(function () {
  $('html, body').animate({
  scrollTop: $($.attr(this, 'href')).offset().top
  }, 1000);
  return false;
});


// 回頂部按鈕
$('.btnBackUP').fadeOut(0);
$(window).scroll(function() {
  if ($(this).scrollTop() > 100) {
    $('.btnBackUP').fadeIn('slow');
  } else {
    $('.btnBackUP').fadeOut('5000');
  }
});

$('.btnBackUP').click(function() {
  $('html,body').animate({scrollTop:0}, 1500);
});



// 工作技能的動態效果
$('.skills-content').waypoint(function() {
  $('.progress .progress-bar').each(function() {
    $(this).css("width", $(this).attr("data-percent") + '%');
  });
}, {
  offset: '90%'
});






$('#about').waypoint(function() {
  $("#about").css("background-color", "transparent");
}, {
  offset: '50%'
});


// WOW.js
var wow = new WOW(
  {
      boxClass: 'wow', // 要套用WOW.js縮需要的動畫class(預設是wow) 
      animateClass: 'animated', // 要"動起來"的動畫(預設是animated, 因此如果你有其他動畫library要使用也可以在這裡調整) 
      offset: 0, // 距離顯示多遠開始顯示動畫 (預設是0, 因此捲動到顯示時才出現動畫)
      mobile: true, // 手機上是否要套用動畫 (預設是true) 
      live: true, // 非同步產生的內容是否也要套用 (預設是true, 非常適合搭配SPA)
      callback: function(box) { // 當每個要開始時, 呼叫這裡面的內容, 參數是要開始進行動畫特效的element DOM
      },
      scrollContainer: null   // 可以設定成只套用在某個container中捲動才呈現, 不設定就是整個視窗
  }
);
wow.init();



// var waypoint = new Waypoint({
//   element: document.getElementById('thing'),
//   handler: function(direction) {
//     alert('You have scrolled to a thing')
//   }
// })