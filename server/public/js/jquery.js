/******/ (() => { // webpackBootstrap
/*!********************************!*\
  !*** ./resources/js/jquery.js ***!
  \********************************/
// $(function () {
//   console.log("j");
//   var menu = $('#sp-gnav'), // スマホメニューのIDをかく
//     menuBtn = $('#menu-btn'), // 開くボタンのIDをかく
//     closeBtn = $('#close-btn'); // 閉じるボランのIDをかく
//   menuBtn.on('click', function () {
//     menu.fadeIn();
//   });
//   closeBtn.on('click', function () {
//     menu.fadeOut();
//   });
//   $(window).on('resize', function () {
//     var wid = window.innerWidth;
//     if (wid > 1024) { // ブレイクポイントをかく
//       menu.hide();
//     }
//   });
// });
$('#close-btn').click(function () {
  console.log("j");
  $('#sp-gnav').fadeOut(2);
});
$('#menu-btn').click(function () {
  console.log("c");
  $('#sp-gnav').fadeIn(2);
});
$(window).on('resize', function () {
  var wid = window.innerWidth;

  if (wid > 1024) {
    // ブレイクポイントをかく
    menu.hide();
  }
});
/******/ })()
;