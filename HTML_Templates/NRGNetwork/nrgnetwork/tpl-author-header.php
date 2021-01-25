<?php
global $bp;

$data_followers_info = get_user_meta(get_current_user_id(), 'net_data_followers_info', true);
$followers_info_data = TT_C::decode($data_followers_info);

$followers_info = array();

foreach ($followers_info_data as $k => $f) {
	if( isset($f['state']) && $f['state']=='0' ){
		$followers_info[$k] = $f;
	}
}

?>
<a class="notofications-popup" href="javascript:;">
	<i class="fa fa-bell-o"></i>
	<?php if( count($followers_info)>0 ): ?>
	<span class="noto-count"><?php echo count($followers_info); ?></span>
	<?php endif; ?>
</a>

<div class="noto-popup notofications-block">
	<div class="noto-label"><?php esc_html_e('Your Notification', 'nrgnetwork'); ?></div>
	<div class="noto-body">

		<?php foreach ($followers_info as $val): ?>
		<div class="noto-entry">
			<div class="noto-content clearfix">
				<div class="noto-img">	
					<a href="<?php echo TT_C::get_author_uri($val['id']); ?>">
						<?php echo get_avatar($val['id'], 60); ?>
					</a>
				</div>
				<div class="noto-text">
					<div class="noto-text-top">
						<span class="noto-name"><a href="<?php echo TT_C::get_author_uri($val['id']); ?>"><?php echo get_the_author_meta('display_name', $val['id']); ?></a></span>
						<span class="noto-date"><i class="fa fa-clock-o"></i> <?php echo $val['date']; ?></span>
					</div>
					<a href="<?php echo TT_C::get_author_uri($val['id']); ?>" class="noto-message"><?php esc_html_e('Start following you', 'nrgnetwork'); ?></a>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
		
	</div>							
</div>



<a class="messages-popup" href="javascript:;">
	<i class="fa fa-envelope-o"></i>
	<?php
	$msg_count = '';

	if( function_exists('bp_total_unread_messages_count') ){
		ob_start();
	    bp_total_unread_messages_count();
	    $msg_count = ob_get_contents();
	    ob_end_clean();
	}

	$msg_count = trim($msg_count);
	if( !empty($msg_count) && abs($msg_count)>0 ):
	?>
	<span class="noto-count"><?php echo abs($msg_count); ?></span>
	<?php endif; ?>
</a>

<div class="noto-popup messages-block">
	<div class="noto-label">
		<?php esc_html_e('Your Messages', 'nrgnetwork'); ?> 
		<span class="noto-label-links">
			<?php if( function_exists('bp_loggedin_user_domain') ): ?>
			<a href="<?php echo TT_C::get_message_uri(); ?>"><?php esc_html_e('compose', 'nrgnetwork'); ?></a>
			<a href="<?php echo TT_C::get_message_uri(); ?>"><?php esc_html_e('View all messages', 'nrgnetwork'); ?></a>
			<?php endif; ?>
		</span>
	</div>

	<div class="noto-body">

		<?php
		if( function_exists('bp_has_message_threads') && bp_has_message_threads() ):
			while ( bp_message_threads() ) : bp_message_thread();
		?>
			<div class="noto-entry style-2">
				<div class="noto-content clearfix">
					<div class="noto-img">
						<a href="<?php echo TT_C::get_message_uri(); ?>">
							<?php
							global $messages_template;
							echo get_avatar($messages_template->thread->last_sender_id, 50);
							?>
						</a>
					</div>
					<div class="noto-text">
						<div class="noto-text-top">
							<span class="noto-name"><?php
								$fullname = bp_core_get_user_displayname( $messages_template->thread->last_sender_id );
								echo "<a href='".TT_C::get_message_uri()."'>$fullname</a>";
							?></span>
							<span class="noto-date"><i class="fa fa-clock-o"></i> <?php bp_message_thread_last_post_date(); ?></span>
						</div>
						<div class="noto-message"><?php bp_message_thread_excerpt(); ?></div>
					</div>
				</div>
			</div>
		<?php
			endwhile;
		endif;
		?>

	</div>							
</div>


<div class="be-drop-down login-user-down">
	<?php echo get_avatar( get_current_user_id(), 40 ); ?>
	<span class="be-dropdown-content"><?php esc_html_e('Hi', 'nrgnetwork'); ?>, <span><?php echo get_the_author_meta('display_name', get_current_user_id()); ?></span></span>
	<ul class="drop-down-list a-list">
		<a href="<?php echo TT_C::get_author_uri(get_current_user_id()); ?>"><?php esc_html_e('My Portfolio', 'nrgnetwork'); ?></a>
		<a href="<?php echo TT_C::get_author_stats_uri(); ?>"><?php esc_html_e('Statistics', 'nrgnetwork'); ?> </a>
		<a href="<?php echo TT_C::get_message_uri(); ?>"><?php esc_html_e('Messages', 'nrgnetwork'); ?></a>
		<a href="<?php echo TT_C::get_author_edit_uri(get_current_user_id()); ?>"><?php esc_html_e('Account Settings', 'nrgnetwork'); ?></a>
		<a href="<?php echo esc_url(wp_logout_url(home_url('/'))); ?>"><?php esc_html_e('Logout', 'nrgnetwork'); ?></a>
	</ul>
</div>
