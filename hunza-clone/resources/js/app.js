
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
var _mobileMenuToggle = function(){
    console.log('hello');
    $('.hamburger').on('click',function(e){
        console.log('toggle side bar');
        e.preventDefault();
        $('.body_overlay').addClass('d-md-block');
        $('#side-bar').toggleClass('enabled');
    });
}
$(document).ready(function(){
    // App.initCore();
    _mobileMenuToggle();
})
// document.addEventListener('DOMContentLoaded', function() {
//     return App.initCore;
// });
