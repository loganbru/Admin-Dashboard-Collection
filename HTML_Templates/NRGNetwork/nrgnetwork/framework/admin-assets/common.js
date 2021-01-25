String.prototype.trim=function(){return this.replace(/^\s+|\s+$/g, '');};


/*
 * GET UNIQUE ID
 */
function tt_guid_temp(){
	return (((1+Math.random())*0x10000)|0).toString(16).substring(1);
}
function tt_guid(){
	return (tt_guid_temp()+tt_guid_temp());
}





/*
	Font Icon Dialog Public
	Usage: themeton_get_font( jQuery(this).parent().find('input') );
*/
function themeton_get_font($obj){
	alert('Removed fonts');
}




function tt_template_hide_admin_notice(){
	jQuery('#theme-admin-notice').slideUp();
	jQuery.post( ajaxurl, {'action':'template_hide_admin_notice'}, function(data){
		
	});
}



/*
 * BLOX MEDIA FUNCTION - WORDPRESS MEDIA MODAL
 */
function blox_media(current_state, title, pre_media, callback){
	
	var id_array = pre_media.split(','),
		args = {orderby: "post__in", order: "ASC", type: "image", perPage: -1, post__in:id_array},
		attachments = wp.media.query( args ),
		selection = new wp.media.model.Selection( attachments.models, {
	        props	: attachments.props.toJSON(),
	        multiple: true
	    });
	
	var frame = wp.media({
	    title 		: title,
	    state		: current_state,
	    library 	: { type: "image" },
	    frame		: 'post',
		selection	: selection
	});
	
	frame.states.add([
		new wp.media.controller.Library({
			id:         'blox_insert_video',
			title: 'Insert Video',
			priority:   20,
			toolbar:    'select',
			filterable: 'uploaded',
			library:    wp.media.query( {type: "video", orderby: "date", query: true} ),
			multiple:   false,
			editable:   true,
			displayUserSettings: false, 
			displaySettings: true,
			allowLocalEdits: true,
			button 		: { text : 'Insert Video' }
		})
	]);
	
	frame.on('select update insert',function(e) {
		var selection, state = frame.state();
		if(typeof e !== 'undefined'){
			selection = e;
		}
		else{
			selection = state.get('selection');
		}
		callback(selection);
	})
	frame.open();
}




var wp_ajax_delay = true;

jQuery(function(){
	
	if( jQuery('.widgets-holder-wrap').length > 0 ){
		jQuery('.tt_wpcolorpicker').wpColorPicker();
		jQuery('body').ajaxSuccess(function(evt, request, settings) {

			if( wp_ajax_delay ){
				wp_ajax_delay = false;
				jQuery('.wp-picker-container').each(function(){
					var $this = jQuery(this);
					var $input = $this.find('.tt_wpcolorpicker').clone();
					$input.attr('style', '');
					$input.removeClass('wp-color-picker');
					$this.replaceWith( $input );
				});
				jQuery('.tt_wpcolorpicker').wpColorPicker();

				setInterval(function(){ wp_ajax_delay = true; },3000);
			}
			
		});
	}

	/* Set value of select
	====================================*/
	jQuery('select.blox_select').each(function(){
		var data = jQuery(this).attr('data') + '';
		data = data!='undefined' ? data : '';
		jQuery(this).val(data);
		jQuery(this).change();

		if( data=='' ){
			jQuery(this).find('option').eq(0).attr('selected', 'selected');
			jQuery(this).change();
		}
	});


	jQuery('#page_template').change(function(){
        if( this.value == 'one-page.php' ){
            jQuery('#pmeta_one_page').slideDown();
            jQuery('#edit_with_customizer').remove();
        }
        else{
            jQuery('#pmeta_one_page').slideUp();
            jQuery('#edit_with_customizer').remove();
        }
    });
	if( jQuery('#page_template').length>0 )
		jQuery('#page_template').change();
});
