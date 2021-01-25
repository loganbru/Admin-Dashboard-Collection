<?php

class NRGCommunity_Extra{

	function __construct(){

		add_filter('friends_notification_new_request_message', array($this, 'fb_notification_new_request_message'), 110, 2);
		add_filter('messages_notification_new_message_message', array($this, 'msg_notification_new_message_message'), 10, 7);

		// add_action( 'bulk_edit_custom_box', array($this, 'bulk_quick_edit_custom_box'), 10, 2 );
		// add_action( 'quick_edit_custom_box', array($this, 'bulk_quick_edit_custom_box'), 10, 2 );

		// add_filter('manage_edit-portfolio_columns', array($this, 'portfolio_edit_columns'));

		add_action( 'admin_init', array($this, 'shared_uploads'));
		add_action( 'init', array($this, 'shared_uploads'));

	}



	public function shared_uploads(){
		$subscriber = get_role( 'subscriber' );
	    $subscriber->add_cap( 'upload_files' );
	}

	public function fb_notification_new_request_message($message = '', $initiator_name = '', $initiator_link = '', $all_requests_link = '', $settings_link = ''){
		$message  = sprintf( __('%1$s started following you on %2$s', 'nrgnetwork' ), $initiator_name, esc_url(home_url('/')) );
		return $message;
	}

	public function msg_notification_new_message_message($email_content = '', $sender_name = '', $subject = '', $content = '', $message_link = '', $settings_link = '', $ud = ''){
		$email_content = sprintf( __(
'%1$s sent you a new message:

Subject: %2$s

"%3$s"
', 'nrgnetwork' ), $sender_name, $subject, $content );

		return $email_content;
	}


	public function bulk_quick_edit_custom_box( $column_name, $post_type ){
		if( $post_type=='portfolio' && $column_name=='featured' ){
		?>
			<fieldset class="inline-edit-col-right inline-edit-featured">
				<div class="inline-edit-col column-<?php echo $column_name; ?>">
					<label class="inline-edit-group">
						<span class="title">Featured</span>
						<input type="checkbox" name="featured" />
					</label>
				</div>
			</fieldset>
		<?php
		}
	}


	public function portfolio_edit_columns($columns) {
        $columns = array(
            "cb"        => "<input type=\"checkbox\" />",
            "thumbnail column-comments" => "Image",
            "title"     => esc_html__("Portfolio Title", 'nrgnetwork'),
            "category"  => esc_html__("Categories", 'nrgnetwork'),
            "date"      => esc_html__("Date", 'nrgnetwork'),
        );
        return $columns;
    }

}

new NRGCommunity_Extra();