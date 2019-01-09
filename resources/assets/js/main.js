var $ = require("jquery");

$( document ).ready(function() {
//    login page

  $('.login').on('click', function () {
    $('.registr-box').hide();
    $('.login-box').show();
  });

  $('.registr').on('click', function () {
    $('.login-box').hide();
    $('.registr-box').show();
  });

  $(".toggle-menu").click(function() {
    $(".sandwich").toggleClass("active");
  });

  $(".top-menu ul a").click(function() {
    $(".top-menu").fadeOut(600);
    $(".sandwich").toggleClass("active");
    $(".top-text").css("opacity", "1");
  }).append("<span>");

  $(".toggle-menu").click(function() {
    if ($(".top-menu").is(":visible")) {
      $(".top_text").css("opacity", "1");
      $(".top-menu").fadeOut(600);
      $(".top-menu li a").removeClass("fadeInUp animated");
    } else {
      $(".top_text").css("opacity", ".1");
      $(".top-menu").fadeIn(600);
      $(".top-menu li a").addClass("fadeInUp animated");
    }
  });

  $('.wrapper_open').on('click', '.btn_open', function() {
    $(this).toggleClass('add_elevator_show').siblings('.form_hidden').slideToggle(0);
  });

  console.log('success');
});