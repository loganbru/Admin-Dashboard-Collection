/**
 * Theme: Metrica - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Profile Js
 */

$('.dropify').dropify();

$("#portfolio_detail_tab").click(function(){
    setTimeout(function(){
        var $container = $('.projects-wrapper');
        // Initialize isotope 
        $container.isotope({
            filter: '*',
            layoutMode: 'masonry',
            animationOptions: {
                duration: 750,
                easing: 'linear'
            }
        });
  },300);
});