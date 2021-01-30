/******/ (() => { // webpackBootstrap
/*!********************************!*\
  !*** ./resources/js/jquery.js ***!
  \********************************/
$(function () {
  console.log("j");
  var menu = $('#sp-gnav'),
      // スマホメニューのIDをかく
  menuBtn = $('#menu-btn'),
      // 開くボタンのIDをかく
  closeBtn = $('#close-btn'); // 閉じるボランのIDをかく

  menuBtn.on('click', function () {
    menu.fadeIn();
  });
  closeBtn.on('click', function () {
    menu.fadeOut();
  });
  $(window).on('resize', function () {
    var wid = window.innerWidth;

    if (wid > 1024) {
      // ブレイクポイントをかく
      menu.hide();
    }
  });
});
/******/ })()
;