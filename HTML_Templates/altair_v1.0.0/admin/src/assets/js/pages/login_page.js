/*
*  Altair Admin
*  login_page.js (login.html)
*/

$(function() {
    // login_page
    altair_login_page.init();
});

// variables
var $login_card = $('#login_card'),
    $login_form = $('#login_form'),
    $login_help = $('#login_help'),
    $login_password_reset = $('#login_password_reset');

altair_login_page = {
    init: function () {
        var toggle_help = function() {
            if($login_form.is(':visible')) {
                $login_form.hide();
                $login_help.show();
            } else {
                $login_form.show();
                $login_help.hide();
                $('#login_help_show').fadeIn('400');
            }
        };

        var password_reset_show = function() {
            $login_form.hide();
            $login_help.hide();
            $login_password_reset.show();
        };

        $('#login_help_show').on('click',function(e) {
            e.preventDefault();
            $(this).hide();
            altair_md.card_show_hide($login_card,undefined,toggle_help,undefined);
        });

        $('#login_help_close').on('click',function(e) {
            e.preventDefault();
            altair_md.card_show_hide($login_card,undefined,toggle_help,undefined);
        });

        $('#login_password_reset_show').on('click',function(e) {
            e.preventDefault();
            altair_md.card_show_hide($login_card,undefined,password_reset_show,undefined);
        });


    }
};