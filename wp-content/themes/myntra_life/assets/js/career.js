(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);throw new Error("Cannot find module '"+o+"'")}var f=n[o]={exports:{}};t[o][0].call(f.exports,function(e){var n=t[o][1][e];return s(n?n:e)},f,f.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
"use strict";

/*eslint-disable*/
$(document).ready(function () {
	$(".career-intro__featbox p").each(function () {
		var break_val = $(this).attr("data-break");
		var final_val = break_val + "<br/>";
		var text = $(this).html();
		text = text.replace(break_val, final_val);
		$(this).html(text);
	});

	var careerSwiper;
	if ($(".career-testimony__slider").length) {
		careerSwiper = new Swiper(".career-testimony__slider", {
			slidesPerView: 1,
			spaceBetween: 0,
			loop: true,
			autoplay: {
				delay: 4000
			},
			autoHeight: true,
			allowTouchMove: false,
			fadeEffect: { crossFade: true },
			effect: "fade",
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev"
			},
			keyboard: {
				enabled: true,
				onlyInViewport: false
			}
		});
	}

	$('.js-blog-next').click(function () {
		$('.swiper-button-next').trigger('click');
	});

	$('.js-blog-prev').click(function () {
		$('.swiper-button-prev').trigger('click');
	});

	if ($(".career-intro__slider").length && $(window).width() < 899) {
		var makeSwiper = new Swiper(".career-intro__slider", {
			direction: "vertical",
			slidesPerView: 1,
			loop: true,
			allowTouchMove: false,
			fadeEffect: { crossFade: true },
			effect: "fade",
			speed: 800,
			autoplay: {
				delay: 3000
			}
		});
	}

	if ($(".career-campus__content").length && $(window).width() < 1025) {
		var makeSwiper = new Swiper(".career-campus__content", {
			direction: "horizontal",
			slidesPerView: 1,
			loop: true,
			allowTouchMove: true,
			fadeEffect: { crossFade: true },
			effect: "fade",
			speed: 800,
			autoplay: {
				delay: 3000
			}
		});
	}

	if ($(".career-team__boxwrap").length && $(window).width() < 1025) {
		var makeSwiper = new Swiper(".career-team__boxwrap", {
			direction: "horizontal",
			slidesPerView: 1.5,
			loop: true,
			allowTouchMove: true,
			// spaceBetween: 60,
			centeredSlides: true,
			// fadeEffect: { crossFade: true },
			// effect: "fade",
			speed: 800,
			breakpoints: {
				320: {
					slidesPerView: 1.2,
					spaceBetween: 30
				},
				400: {
					slidesPerView: 1.4,
					spaceBetween: 30
				},
				475: {
					slidesPerView: 1.4,
					spaceBetween: 30
				},
				525: {
					slidesPerView: 2,
					spaceBetween: 60
				},
				675: {
					slidesPerView: 2,
					spaceBetween: 60
				},
				768: {
					slidesPerView: 2.2,
					spaceBetween: 30
				},
				1024: {
					slidesPerView: 3,
					spaceBetween: 60
				}
				// autoplay: {
				// 	delay: 3000
				// }
			} });
	}

	if ($(window).width() > 899) {
		$(".career-intro__slider").find(".career-slide").removeClass("swiper-slide");
	} else {
		$(".career-intro__slider").find(".career-slide").addClass("swiper-slide");
	}

	if ($(window).width() > 1024) {
		$(".career-campus__content").find(".career-slide").removeClass("swiper-slide");
	} else {
		$(".career-campus__content").find(".career-slide").addClass("swiper-slide");
	}

	if ($(window).width() > 1024) {
		$(".career-team__boxwrap").find(".career-team-slide").removeClass("swiper-slide");
	} else {
		$(".career-team__boxwrap").find(".career-team-slide").addClass("swiper-slide");
	}

	$(window).on("resize", function () {
		if ($(".career-intro__slider").length && $(window).width() < 899) {
			var makeSwiper = new Swiper(".career-intro__slider", {
				direction: "vertical",
				slidesPerView: 1,
				loop: true,
				allowTouchMove: false,
				fadeEffect: { crossFade: true },
				effect: "fade",
				speed: 800,
				autoplay: {
					delay: 3000
				}
			});
		}

		if ($(".career-campus__content").length && $(window).width() < 1025) {
			var makeSwiper = new Swiper(".career-campus__content", {
				direction: "horizontal",
				slidesPerView: 1,
				loop: true,
				allowTouchMove: true,
				fadeEffect: { crossFade: true },
				effect: "fade",
				speed: 800,
				autoplay: {
					delay: 3000
				}
			});
		}

		if ($(".career-team__boxwrap").length && $(window).width() < 1025) {
			var makeSwiper = new Swiper(".career-team__boxwrap", {
				direction: "horizontal",
				slidesPerView: 1.5,
				loop: true,
				allowTouchMove: true,
				// spaceBetween: 60,
				centeredSlides: true,
				// fadeEffect: { crossFade: true },
				// effect: "fade",
				speed: 800,
				breakpoints: {
					320: {
						slidesPerView: 1.2,
						spaceBetween: 30
					},
					400: {
						slidesPerView: 1.4,
						spaceBetween: 30
					},
					475: {
						slidesPerView: 1.4,
						spaceBetween: 30
					},
					525: {
						slidesPerView: 2,
						spaceBetween: 60
					},
					675: {
						slidesPerView: 2,
						spaceBetween: 60
					},
					768: {
						slidesPerView: 2.2,
						spaceBetween: 30
					},
					1024: {
						slidesPerView: 3,
						spaceBetween: 60
					}
					// autoplay: {
					// 	delay: 3000
					// }
				} });
		}

		if ($(window).width() > 899) {
			$(".career-intro__slider").find(".career-slide").removeClass("swiper-slide");
		} else {
			$(".career-intro__slider").find(".career-slide").addClass("swiper-slide");
		}

		if ($(window).width() > 1024) {
			$(".career-campus__content").find(".career-slide").removeClass("swiper-slide");
		} else {
			$(".career-campus__content").find(".career-slide").addClass("swiper-slide");
		}

		if ($(window).width() > 1024) {
			$(".career-team__boxwrap").find(".career-team-slide").removeClass("swiper-slide");
		} else {
			$(".career-team__boxwrap").find(".career-team-slide").addClass("swiper-slide");
		}
	});

	//logo changing
	function randomNum(min, max) {
		return Math.floor(Math.random() * (max - min + 1) + min);
	}

	window.setInterval(function () {
		var listItems = $(".career-intro__boxwrap").find(".career-intro__box");

		var listMax = $(listItems).length - 1;
		var listIndex = randomNum(0, listMax);

		var imgMax = $(listItems[listIndex]).find("img").length - 1;
		var imgIndex = randomNum(0, imgMax);

		console.log(listMax + " " + imgMax);

		$(listItems[listIndex]).find("img.shown").fadeOut("200");
		setTimeout(function () {
			$(listItems[listIndex]).find("img.shown").removeClass("shown").addClass("dont-show");
			$(listItems[listIndex]).find("img.d-none").removeClass("d-none").addClass("shown");
			$(listItems[listIndex]).find("img.shown").fadeIn();
			$(listItems[listIndex]).find("img.dont-show").removeClass("dont-show").addClass("d-none");
		}, 300);
	}, 2000);
});

$(window).on("scroll", function () {
	if ($(window).scrollTop() >= $(".career-intro__feat").offset().top && $(window).scrollTop() <= $(".career-life-bottom").offset().top - 700) {
		$(".explore-btn").addClass("show-link");
	} else {
		$(".explore-btn").removeClass("show-link");
	}
});

},{}]},{},[1])//# sourceMappingURL=career.js.map
