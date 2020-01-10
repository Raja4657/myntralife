(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);throw new Error("Cannot find module '"+o+"'")}var f=n[o]={exports:{}};t[o][0].call(f.exports,function(e){var n=t[o][1][e];return s(n?n:e)},f,f.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
'use strict';

/*function for selectric alternative*/
function selectit(elem) {
    $(elem).not('.selectized').each(function () {
        $(this).addClass('selectized');

        var select_el = $(this),
            list_el = $('<ul></ul>').attr('id', select_el.attr('id')).attr('name', select_el.attr('name')),
            active = select_el.find('option').eq(0),
            active_el = "",
            placeholder = $(this).attr('data-placeholder'),
            index_el = 0;

        if (placeholder) {
            active = select_el.find('option').eq(1);
        }

        active_fn(active);

        function active_fn(data) {
            active = data;
            active_el = $('<span></span>').attr('value', active.val()).attr('data-icon', active.attr('data-icon')).attr('data-text', active.attr('data-text')).text(active.text());
        }

        if (select_el.find('option:selected').length > 0) {
            active = select_el.find('option:selected');
            index_el = active.index();
            active_fn(active);
        }

        select_el.children().each(function () {
            var option_el = $(this);
            $('<li></li>').attr('value', option_el.val()).attr('data-icon', option_el.attr('data-icon')).attr('data-text', option_el.attr('data-text')).attr('disabled', option_el.attr('disabled')).text(option_el.text()).appendTo(list_el);
        });
        select_el.parent().append(active_el, list_el);
        if (placeholder) {
            select_el.parent().find('ul li').eq(index_el + 1).addClass('active');
            select_el.parent().find('ul').prepend("<li class='placeholder'>" + placeholder + "</li>");
        } else {
            select_el.parent().find('ul li').eq(index_el).addClass('active');
        }

        $(document).on('click', '.select_wrap ul.open li', function () {
            var target_el = $(this);
            index_el = target_el.index();
            select_el.parent().find('ul.open li').removeClass('active').eq(index_el).addClass('active');
            $(this).parents('.select_wrap').find('select').val(target_el.attr('value'));

            target_el.parents('.select_wrap').find('span').attr('value', target_el.attr('value')).attr('data-icon', target_el.attr('data-icon')).attr('data-text', target_el.attr('data-text')).text(target_el.text());

            $(this).parents('.select_wrap').find('.overlay').remove();
            $(this).parents('.select_wrap').removeClass('open');
            $(this).parent().removeClass('open');
        });

        var span_elem = select_el.parent().find('span');

        $(span_elem).on('click', function () {
            //span_elem.on("click",function(){
            $(this).parents('.select_wrap').find('ul').addClass('open');
            $(this).parents('.select_wrap').addClass('open');
            $(this).parents('.select_wrap').append("<div class='overlay'></div>");
        });

        $(document).on('click', '.select_wrap .overlay', function () {
            $(this).parents('.select_wrap').removeClass('open');
            $(this).parents('.select_wrap').find('ul').removeClass('open');
            $(this).parents('.select_wrap').find('.overlay').remove();
        });
    });
}

selectit('.select_box');

},{}],2:[function(require,module,exports){
'use strict';

require('./components/select-drop');

$(document).ready(function () {
    $('.job-detail .filter-wrap > p').on('click', function () {
        $('.filter-wrap__box').toggleClass('open');
        if ($(this).parent().find('.overlay').length <= 0) {
            $(this).parent().append("<div class='overlay'></div>");
        }
    });

    $(document).on('click', '.job-detail .filter-wrap .overlay', function () {
        $(this).parent().find('.filter-wrap__box').removeClass('open');
        $(this).remove();
    });

    $(document).on('click', '.jobapply-modal .upload-group a.show-textbox', function (e) {
        e.preventDefault();
        $(this).parent().siblings('textarea').slideToggle();
    });

    $('.jobapply-modal input, .jobapply-modal textarea').focus(function () {
        $(this).addClass('hasVal');
    });

    // check if the input has a value    
    $('.jobapply-modal input, .jobapply-modal textarea').blur(function () {
        if ($(this).val().length > 0) {
            $(this).addClass('hasVal');
        } else {
            $(this).removeClass('hasVal');
        }
    });

    $('.job-detail__content .blog-detail-share>a').on('click', function (e) {
        e.preventDefault();
        $(this).parents('.blog-detail-share').find('.blog-detail-social').toggleClass('showlink');
    });

    var init_ht;
    $(document).on('click', '.job-detail__banner a:not(.active)', function (e) {
        var this_el = $(this);
        e.preventDefault();
        init_ht = $('.job-detail__desc').outerHeight();
        $('.job-detail__desc').css("height", "auto");
        var elem_ht = $('.job-detail__desc').css("height");
        $('.job-detail__desc').removeAttr('style');
        $('.job-detail__desc').css("height", elem_ht);

        setTimeout(function () {
            this_el.addClass('active').text('Read less');
        });
    });

    $(document).on('click', '.job-detail__banner a.active', function (e) {
        e.preventDefault();
        var this_el = $(this);
        setTimeout(function () {
            e.preventDefault();
            this_el.removeClass('active').text('Read more');
            $('.job-detail__desc').css("height", init_ht);
        }, 300);
    });
});

},{"./components/select-drop":1}]},{},[2])//# sourceMappingURL=job-detail.js.map
