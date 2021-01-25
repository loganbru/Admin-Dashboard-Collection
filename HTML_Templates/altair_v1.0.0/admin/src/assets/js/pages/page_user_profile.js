/*
 *  Altair Admin
 *  page_user_profile.js (page_user_profile.html)
 */

$(function() {
    // user profile
    altair_user_profile.init();
});

altair_user_profile = {
    init: function() {
        // image gallery
        $('#user_profile_gallery').magnificPopup({
            delegate: 'a',
            closeMarkup: '<button title="%title%" class="mfp-close"></button>',
            // animation
            removalDelay: 280,
            mainClass: 'md-scale',

            type:'image',
            gallery: {
                enabled: true
            }
        });
    }
};