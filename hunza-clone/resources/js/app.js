// import 'owl.carousel';
var $ = require('jquery');
import {_mobileMenuToggle} from "./layout/layout";

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
const App = function () {
    return {
        initSideBar: function () {
            _mobileMenuToggle();
        }
    }
}

$(document).ready(function () {
    // App.initCore();
    _mobileMenuToggle();
})
// document.addEventListener('DOMContentLoaded', function() {
//     return App.initCore;
// });
