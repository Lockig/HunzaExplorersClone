var $ = require('jquery');
export const _mobileMenuToggle = function () {
    console.log('hello');
    var hamburger =  $('.hamburger');
    var side_slide = $('#side-slide');
    var login_form = $('#login');
    //open sidebar
    hamburger.on('click', function (e) {
        console.log('toggle side bar');
        e.stopPropagation();
        e.preventDefault();
        $('#body_overlay').toggleClass('toggle');
        $('#side-slide').toggleClass('enabled');
    });
    // click outside to remove sidebar
    $(document).mouseup(function(e){
        if(!side_slide.is(e.target) && side_slide.has(e.target).length === 0){
            e.preventDefault();
            e.stopPropagation();
            $('#body_overlay').removeClass('toggle');
            $('#side-slide').removeClass('enabled');
        }
        if(!login_form.is(e.target) && login_form.has(e.target).length === 0){
            e.preventDefault();
            e.stopPropagation();
            $('#login').removeClass('opened');
        }
    })
//    close sidebar
    $('#side-slide .close').on('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        console.log('close side bar');
        $('#body_overlay').removeClass('toggle');
        $('#side-slide').removeClass('enabled');
    })
//    sidebar language drop down
    $('.lang-active').on('click', function (e) {
        e.preventDefault();
        console.log('hello');
        var kid = $('.lang-active > i ');
        console.log(kid);
        if (kid.hasClass('fa-angle-down')) {
            kid.removeClass('fa-angle-down');
            kid.addClass('fa-angle-up');
            $('.lang__wrapper').addClass('enabled');
        } else if (kid.hasClass('fa-angle-up')) {
            kid.removeClass('fa-angle-up');
            kid.addClass('fa-angle-down');
            $('.lang__wrapper').removeClass('enabled');
        }
    })
//    toggle sub-menu sidebar
    $('#side-slide .menu__wrapper .menu-toggle').on('click', function (e) {
        e.preventDefault();
        var button = $(this).children('.element');
        var subMenu = $(this).parent().children('.sub-menu');
        if (button.hasClass('fa-plus')) {
            button.removeClass('fa-plus');
            button.addClass('fa-minus');
            subMenu.addClass('enabled');
            $(this).parent().children("a").addClass('text-black');
            $(this).parent().addClass("enabled");
        } else if (button.hasClass('fa-minus')) {
            button.removeClass('fa-minus');
            button.addClass('fa-plus');
            subMenu.removeClass('enabled');
            $(this).parent().removeClass("enabled");
            $(this).parent().children("a").removeClass('text-black');
        }
    })

//    toggle login sidebar
    $('.account').on('click', function (e) {
        console.log('hello login');
        e.preventDefault();
        $('#login').toggleClass('opened');
    })
//     focus input text
    $('.form-group > input').on(function (e){
        console.log('focus hello');
        $(this).parent().children("label").toggleClass('active');
    });

    // close login form
    $('#login .close').on('click', function (e) {
        console.log('close login')
        e.preventDefault();
        e.stopPropagation();
        console.log('close side bar');
        $('#login').removeClass('opened');
    })
}

