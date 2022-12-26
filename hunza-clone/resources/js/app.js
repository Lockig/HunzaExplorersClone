import './bootstrap';
import 'owl.carousel';


var App = function(){
    var _mobileMenuToggle = function(){
        $('.hamburger').on('click',function(e){
            console.log('toggle side bar');
            e.preventDefault();
            $('.body_overlay').addClass('d-md-block');
            $('#side-bar').toggleClass('enabled');
        });
    }

    return {
        initSideBar: function(){
            _mobileMenuToggle();
        },

        initCore: function(){
            App.initSideBar();
        }
    }
}


$(document).ready(function(){
    App.initCore();
})
