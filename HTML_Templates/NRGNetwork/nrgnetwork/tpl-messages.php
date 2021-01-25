<?php get_header(); ?>

<?php
$user = get_current_user_id();
?>


<?php if( function_exists('bp_message_threads') ): ?>
<!-- MAIN CONTENT -->
<div id="content-block">
    <div class="container be-detail-container">
        <?php
        if( isset($_POST['net_msg_to'], $_POST['net_msg_content']) && !empty($_POST['net_msg_to']) && !empty($_POST['net_msg_content']) ){
            $to = $_POST['net_msg_to'];
            $msg = $_POST['net_msg_content'];

            $to_user = get_user_by( 'login', $to );
            if( $to_user ){
                $recipients              = apply_filters( 'bp_messages_recipients', array($to_user->ID) );
                $thread_id               = messages_new_message( array(
                    'recipients' => $recipients,
                    'subject'    => 'You have a message from ' . get_the_author_meta('display_name', $user),
                    'content'    => $msg
                ) );
            }
            else{
            ?>
            <div class="row">
                <div class="col-sm-12">
                    <div class="alert style-3 fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="<?php esc_attr_e('Close', 'nrgnetwork'); ?>"><i class="fa fa-times"></i></button>
                        <div class="alert-title"><?php esc_html_e('Message Error', 'nrgnetwork'); ?></div>
                        <?php esc_html_e('Use does not exists', 'nrgnetwork'); ?>
                    </div>
                    <p>&nbsp;</p>
                </div>
            </div>
            <?php
            }
        }
        ?>
        <div class="row">
            <div class="col-xs-12 col-sm-5 left-feild">
                <a href="<?php echo TT_C::get_author_uri($user); ?>" class="btn color-4 size-1 hover-7"><i class="fa fa-chevron-left"></i> <?php esc_html_e('back to profile', 'nrgnetwork'); ?></a>
                <a href="javascript:;" class="btn btn-right color-1 send-btn size-1 hover-1" id="net_msg_btn_compose"><i class="fa fa-envelope-o"></i> <?php esc_html_e('compose', 'nrgnetwork'); ?></a>

                <form id="msg-form-entry">
                    <div class="noto-header clearfix">
                        <div class="form-checkbox">
                            <input class="select-all" id="ch1" type="checkbox" value="" name=""> <span class="check"><i class="fa fa-check"></i></span>
                            <label for="ch1"><?php esc_html_e('select all', 'nrgnetwork'); ?></label>
                        </div>
                        <div class="stat-sort be-drop-down">
                            <span class="be-dropdown-content"><?php esc_html_e('actions', 'nrgnetwork'); ?></span>
                            <ul class="drop-down-list">
                                <li><a><?php esc_html_e('Delete', 'nrgnetwork'); ?></a></li>
                            </ul>
                        </div>
                    </div>

                    <?php while ( bp_message_threads() ) : bp_message_thread(); ?>
                    <div class="noto-entry style-3 msg-entry <?php echo bp_message_thread_has_unread()=='1' ? 'unread' : ''; ?>">
                        <div class="noto-content clearfix">
                            <div class="form-checkbox">
                                <input type="checkbox" value="<?php bp_message_thread_id(); ?>" name="netmsg[]" class="msg-entry-id"> <span class="check"><i class="fa fa-check"></i></span>
                            </div>                          
                            <div class="noto-img">
                                <a href="javascript:;" class="img-round">
                                    <?php
                                    global $messages_template;
                                    echo get_avatar($messages_template->thread->last_sender_id, 50);
                                    ?>
                                </a>
                            </div>
                            <div class="noto-text">
                                <div class="noto-text-top">
                                    <span class="noto-name">
                                        <a href="javascript:;">
                                            <?php echo bp_core_get_user_displayname( $messages_template->thread->last_sender_id ); ?>
                                        </a>
                                    </span>
                                    <span class="noto-date"><i class="fa fa-clock-o"></i> <?php bp_message_thread_last_post_date(); ?></span>
                                </div>
                                <div class="noto-message"><?php bp_message_thread_subject(); ?></div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>


                </form>
            </div>
            <div class="col-xs-12 col-sm-7">


                <div class="be-large-post">

                    <div class="info-block style-2">
                        <div class="be-large-post-align">
                            <h3 class="info-block-label net_msg_current_label" data-label-new="<?php esc_attr_e('New Message', 'nrgnetwork'); ?>" data-label-msg="<?php esc_attr_e('Conversation', 'nrgnetwork'); ?>"><?php esc_html_e('New Message', 'nrgnetwork'); ?></h3>
                        </div>
                    </div>

                    <div class="be-large-post-align">

                        <form id="net_message_compose" method="post">
                            <div class="form-group">
                                    <div class="form-label"><?php esc_html_e('To', 'nrgnetwork'); ?></div>
                                    <input class="form-input" required="" type="text" placeholder="<?php esc_attr_e('Enter user name', 'nrgnetwork'); ?>" name="net_msg_to">
                                </div>                          
                            <div class="form-group">
                                <div class="form-label"><?php esc_html_e('Your Message', 'nrgnetwork'); ?></div>
                                <textarea class="form-input" required="" placeholder="<?php esc_attr_e('Message', 'nrgnetwork'); ?>" name="net_msg_content"></textarea>
                            </div>
                            <button class="btn btn-right color-4 size-2 hover-7" type="reset"><?php esc_html_e('cancel', 'nrgnetwork'); ?></button>
                            <button class="btn btn-right color-1 size-2 hover-1" type="submit"><?php esc_html_e('send', 'nrgnetwork'); ?></button>
                        </form>

                        <div class="net_messages_wrapper"></div>

                        <form id="net_message_reply" class="hidden">
                            <div class="form-group">
                                <div class="form-label"><?php esc_html_e('Your Message', 'nrgnetwork'); ?></div>
                                <textarea class="form-input" required="" placeholder="<?php esc_html_e('Message', 'nrgnetwork'); ?>" id="net_msg_reply_text"></textarea>
                            </div>
                            <button class="btn btn-right color-1 size-2 hover-1" type="button" id="net_msg_btn_reply"><?php esc_html_e('reply', 'nrgnetwork'); ?></button>
                        </form>



                    </div>
                </div>


            </div>
        </div>

        
    </div>
</div>
<?php endif; ?>



<?php get_footer(); ?>