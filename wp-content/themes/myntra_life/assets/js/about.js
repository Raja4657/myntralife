(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);throw new Error("Cannot find module '"+o+"'")}var f=n[o]={exports:{}};t[o][0].call(f.exports,function(e){var n=t[o][1][e];return s(n?n:e)},f,f.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
"use strict";

/*eslint-disable*/

$(document).ready(function () {
	if ($(".about-timeline__slider").length) {
		var makeSwiper = new Swiper(".about-timeline__slider", {
			slidesPerView: "auto",
			spaceBetween: 0,
			allowTouchMove: true,
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev"
			},
			breakpoints: {
				625: {
					slidesPerView: 1.5,
					spaceBetween: 0
				}
			}
		});
	}

	var leaderSwiper;
	if ($(".leader-slider").length) {
		leaderSwiper = new Swiper(".leader-slider", {
			slidesPerView: 1,
			spaceBetween: 0,
			autoHeight: true,
			allowTouchMove: true,
			fadeEffect: { crossFade: true },
			effect: "fade",
			navigation: {
				nextEl: ".leader-button-next",
				prevEl: ".leader-button-prev"
			},
			keyboard: {
				enabled: true,
				onlyInViewport: false
			}
		});
	}

	$(".about-leaders__box").on("click", function () {
		var index = $(this).attr("data-index");
		var target = $('.swiper-slide[data-slide="' + index + '"]').index();

		leaderSwiper.slideTo(target, 0);
	});

	$('#leader-modal').on('shown.bs.modal', function (e) {
		var active_ht = $(this).find('.swiper-slide-active').outerHeight();
		$(this).find('.leader-slider .swiper-wrapper').css({
			'height': active_ht
		});
	});
});

},{}]},{},[1])//# sourceMappingURL=about.js.map
