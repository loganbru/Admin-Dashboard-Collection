(function($){
	'use strict';

	
	$('.msg-entry').each(function(){
		var $msg = $(this);

		$msg.find('.noto-text').on('click', function(){
			var thr_id = $msg.find('.msg-entry-id').val();

			$(".be-loader").fadeIn("slow");
			$.post(theme_options.ajax_url, {action:'net_get_private_messages', thread_id:thr_id}, function(data){
				$('#net_message_compose').hide();
				$('#net_message_reply').removeClass('hidden').show();

				if( data!='' && data!='0' ){
					$('.net_messages_wrapper').html( data );
				}

				$(".be-loader").fadeOut("fast");

				$msg.removeClass('unread');
			});

			$('.msg-entry.reading').removeClass('reading');
			$msg.addClass('reading');

			$('.net_msg_current_label').html( $('.net_msg_current_label').data('label-msg') );
		});
	});


	$('#net_msg_btn_reply').on('click', function(){
		var _text = $('#net_msg_reply_text').val();
		var _thr_id = $('.msg-entry.reading').find('.msg-entry-id').val();
		if( _text!='' && _thr_id!='' ){

			$(".be-loader").fadeIn("slow");
			$.post(theme_options.ajax_url, {action:'net_get_private_msg_reply', thread_id:_thr_id, content:_text}, function(data){
				if( data!='' && data!='0' ){
					$('.net_messages_wrapper').html( data );
				}

				$(".be-loader").fadeOut("fast");
				$('#net_msg_reply_text').val('');
			});

		}
	});


	$('#net_msg_btn_compose').on('click', function(){
		$('#net_message_compose').show();
		$('#net_message_reply').hide();
		$('.net_messages_wrapper').html('');

		$('.msg-entry.reading').removeClass('reading');
		$('.net_msg_current_label').html( $('.net_msg_current_label').data('label-new') );
	});

	
})(jQuery);