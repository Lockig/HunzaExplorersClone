// import 'owl.carousel';
var $ = require('jquery');

// var App = function(){
//     var _mobileMenuToggle = function(){
//         console.log('hello');
//         $('.hamburger').on('click',function(e){
//             console.log('toggle side bar');
//             e.preventDefault();
//             $('.body_overlay').addClass('d-md-block');
//             $('#side-bar').toggleClass('enabled');
//         });
//     }
//
//     return {
//         initSideBar: function(){
//              _mobileMenuToggle();
//         },
//
//         initCore: function(){
//            App.initSideBar;
//         }
//     }
// }
const App = function(){
    return {
        initSideBar: function (){
            _mobileMenuToggle();
        }
    }
}
const _mobileMenuToggle = function () {
    console.log('hello');
    //open sidebar
    $('.hamburger').on('click', function (e) {
        console.log('toggle side bar');
        e.stopPropagation();
        e.preventDefault();
        $('#body_overlay').toggleClass('toggle');
        $('#side-slide').toggleClass('enabled');
    });
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

    $('#login .close').on('click', function (e) {
        console.log('close login')
        e.preventDefault();
        e.stopPropagation();
        console.log('close side bar');
        $('#login').removeClass('opened');
    })
}
$(document).ready(function () {
    // App.initCore();
    _mobileMenuToggle();
})
// document.addEventListener('DOMContentLoaded', function() {
//     return App.initCore;
// });
