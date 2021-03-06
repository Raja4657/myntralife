(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);throw new Error("Cannot find module '"+o+"'")}var f=n[o]={exports:{}};t[o][0].call(f.exports,function(e){var n=t[o][1][e];return s(n?n:e)},f,f.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
'use strict';

$(document).ready(function () {
  // alert(1);
  if ($('.blog-article__slider').length) {
    var makeSwiper = new Swiper('.blog-article__slider', {
      slidesPerView: 3,
      slidesToSlide: 1,
      spaceBetween: 30,
      loop: true,
      navigation: {
        nextEl: '.js-blog-next',
        prevEl: '.js-blog-prev'
      },
      breakpoints: {
        460: {
          slidesPerView: 1,
          spaceBetween: 20
        },
        576: {
          spaceBetween: 15,
          slidesPerView: 2
        },
        768: {
          slidesPerView: 2
        },
        992: {
          slidesPerView: 2,
          spaceBetween: 20
        }
      }
    });
  }

  $(document).on('shown.bs.tab', 'a[href="#press-content"]', function (e) {
    var pressslider = "";
    if ($('.press-releases__head').length && $('.press-releases__head .swiper-container-initialized').length == 0) {
      pressslider = new Swiper('.press-releases__head .swiper-container', {
        slidesPerView: 'auto',
        spaceBetween: 0,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev'
        }
      });
    }
  });

  $('.blog-newsletter input').focus(function () {
    $(this).addClass('hasVal');
  });

  // check if the input has a value    
  $('.blog-newsletter input').blur(function () {
    if ($(this).val().length > 0) {
      $(this).addClass('hasVal');
    } else {
      $(this).removeClass('hasVal');
    }
  });

  $(document).on('click', '.blog-detail-content .blog-detail-share>a', function (e) {
    e.preventDefault();
    $(this).parents('.blog-detail-share').find('.blog-detail-social').toggleClass('showlink');
  });

  $(document).on('click', '.blog-intro .blog-detail-share>a', function (e) {
    e.preventDefault();
    $(this).parents('.blog-detail-share').find('.blog-detail-social').toggleClass('showlink');
  });

  $(document).on('click', '.blog-detail-share .copylink-button', function (e) {
    var this_el = $(this);
    e.preventDefault();
    var $temp = $("<input>");
    $("body").append($temp);
    var linkval = this_el.attr('data-link');
    $temp.val(linkval).select();
    document.execCommand("copy");
    $temp.remove();

    this_el.parent().append('<label>Link copied</label>');

    setTimeout(function () {
      this_el.parent().find('label').remove();
    }, 1500);
  });

  var postslider;
  if ($('.recent-slider').length) {
    postslider = new Swiper('.recent-slider', {
      slidesPerView: 2,
      pagination: {
        el: '.swiper-pagination'
      },
      breakpoints: {
        576: {
          slidesPerView: 1
        }
      }
    });
  }

  $(document).on('click', '.blog-style__tags a[href="#"]', function (e) {
    e.preventDefault();
    var data_url = $(this).attr('data-link');
    $("html, body").animate({ scrollTop: 0 }, 500);

    var tabindex = $('.blog-intro .nav-tabs a[href="#' + data_url + '"]').parent().index();
    var leftpos = 0;
    for (var i = 0; i < tabindex; i++) {
      leftpos = leftpos + $('.gallery-content .nav-tabs li').eq(i).outerWidth() - 1;
    }
    $('.gallery-content .nav-tabs').animate({ scrollLeft: leftpos }, 500);

    setTimeout(function () {
      $('.blog-intro .nav-tabs a[href="#' + data_url + '"]').tab('show');
    }, 500);
  });
});

},{}]},{},[1])//# sourceMappingURL=blog.js.map
