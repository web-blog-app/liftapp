import 'owl.carousel';

$( document ).ready(function() {
//    login page
  window.toastr = require('toastr');

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

   $(function () {
    $('#myList a:last-child').tab('show')
  })

  $('.wrapper_open').on('click', '.btn_open', function() {
    $(this).toggleClass('add_elevator_show').siblings('.form_hidden').slideToggle(0);
  });

  $('.owl-carousel').owlCarousel({
    touchDrag:true,
    nav:true,
    responsive:{
      0:{
        items:1
      },
      900:{
        items:3
      }
    }
  });

  $('.modal-form-submit').on('click', function() {
    var formId = $(this).closest("form").attr('id');
    var modalFormId = $(this).closest(".form-modal").attr('id');
    $(this).removeClass("btn-primary");
    $(this).addClass("disabled btn-default");
    sendRequest(formId, modalFormId);
  });

  function sendRequest(formId, modalFormId) {
    var $form = $('#' + formId);
    var button = $('#' + modalFormId).find('.disabled');

    $($form).submit(function(e) {
      e.preventDefault();
    });

    $.ajax({
      type: $form.attr('method'),
      url: $form.attr('action'),
      data: $form.serialize(),
      contentType: "application/x-www-form-urlencoded",
      success: function() {
        $('#' + modalFormId).modal('hide');
        $('#' + formId)[0].reset();
        button.removeClass("disabled btn-default");
        button.addClass("btn-primary");
        toastr.success('Форма успешно отправлена')
      },
      error: function(errorThrown) {
        button.removeClass("disabled btn-default");
        button.addClass("btn-primary");
        console.log(errorThrown);
        toastr.error('Возникла ошибка, попробуйте позже');
      }
    })
  }
});