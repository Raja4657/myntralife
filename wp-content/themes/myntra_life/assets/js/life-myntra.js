(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);throw new Error("Cannot find module '"+o+"'")}var f=n[o]={exports:{}};t[o][0].call(f.exports,function(e){var n=t[o][1][e];return s(n?n:e)},f,f.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
'use strict';

$(document).ready(function () {
  var leaderSwiper;
  if ($('.leader-slider').length) {
    leaderSwiper = new Swiper('.leader-slider', {
      slidesPerView: 1,
      spaceBetween: 0,
      autoHeight: true,
      allowTouchMove: false,
      fadeEffect: { crossFade: true },
      effect: 'fade',
      navigation: {
        nextEl: '.leader-button-next',
        prevEl: '.leader-button-prev'
      },
      keyboard: {
        enabled: true,
        onlyInViewport: false
      }
    });
  }

  $(document).on('click', '.gallery-content__box', function () {
    var target_modal = $(this).attr('data-target');
    var target_slider = $(target_modal).find('.leader-slider');
    var index = $(this).attr('data-index');
    setTimeout(function () {
      target_slider[0].swiper.update();
      var target = target_slider.find('.swiper-slide[data-slide="' + index + '"]').index();
      target_slider[0].swiper.slideTo(target, 0);
    }, 200);
  });

  $(document).on('click', '.gallery-content__box span', function (e) {
    e.stopPropagation();
    e.preventDefault();

    var data_url = $(this).attr('data-link');
    $([document.documentElement, document.body]).animate({
      scrollTop: $(".gallery-content").offset().top - 80
    }, 500);

    var tabindex = $('.gallery-content .nav-tabs a[href="#' + data_url + '"]').parent().index();
    var leftpos = 0;
    for (var i = 0; i < tabindex; i++) {
      leftpos = leftpos + $('.gallery-content .nav-tabs li').eq(i).outerWidth() - 1;
    }
    $('.gallery-content .nav-tabs').animate({ scrollLeft: leftpos }, 500);

    setTimeout(function () {
      $('.gallery-content .nav-tabs a[href="#' + data_url + '"]').tab('show');
    }, 300);
  });

  $(document).on('click', '.gallery-content .nav-tabs li a', function (e) {
    e.preventDefault();
    $([document.documentElement, document.body]).animate({
      scrollTop: $(".gallery-content").offset().top - 80
    }, 300);

    var tabindex = $(this).parent().index();
    var leftpos = 0;
    for (var i = 0; i < tabindex; i++) {
      leftpos = leftpos + $('.gallery-content .nav-tabs li').eq(i).outerWidth() - 1;
    }
    $('.gallery-content .nav-tabs').animate({ scrollLeft: leftpos }, 500);
  });

  //   leaderSwiper.on('slideChange', function () {
  //     var this_el_prev = $('#gallery-modal .swiper-slide-prev iframe');
  //     var video_prev = this_el_prev.attr("src");
  //     this_el_prev.attr("src","");
  //     this_el_prev.attr("src",video_prev);

  //     var this_el_next = $('#gallery-modal .swiper-slide-next iframe');
  //     var video_next = this_el_next.attr("src");
  //     this_el_next.attr("src","");
  //     this_el_next.attr("src",video_next);
  //   });

  $('.modal.web-middle-modal').on('show.bs.modal', function () {
    $(this).find('iframe').each(function () {
      var data_url = $(this).attr('data-src');
      $(this).attr('src', data_url);
    });
  });

  $('.modal.web-middle-modal').on('hidden.bs.modal', function () {
    $(this).find('iframe').each(function () {
      $(this).attr('src', "");
    });
  });

  $('.gallery-content__box .share-btn').on('click', function (e) {
    e.stopPropagation();
  });

  $('#gallery-modal').on('shown.bs.modal', function (e) {
    var active_ht = $(this).find('.swiper-slide-active').outerHeight();
    $(this).find('.leader-slider .swiper-wrapper').css({
      'height': active_ht
    });
  });
});

},{}]},{},[1])//# sourceMappingURL=life-myntra.js.map
