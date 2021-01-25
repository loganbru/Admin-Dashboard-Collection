jQuery(function(){
    jQuery('#title_show').change(function(){
        if( this.value == '1' ){
            jQuery('#title_options').slideDown();
        }
        else{
            jQuery('#title_options').slideUp();
        }
    });
    jQuery('#title_show').change();
    
    jQuery('#portfolio_video_mp4').change(function(){
    	if( this.value != '' ){
    		jQuery('#option_wrapper_portfolio_video_webm').slideDown();
    	}
    	else{
    		jQuery('#option_wrapper_portfolio_video_webm').slideUp();
    	}
    });
    jQuery('#portfolio_video_mp4').change();
    
});