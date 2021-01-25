<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<!-- Chat layout and demo functionality is initialized in js/pages/be_comp_chat.min.js which was auto compiled from _es6/pages/be_comp_chat.js -->
<!--
    You can use the following JS function to add a header message to a chat window:
    BeCompChat.addHeader(chatId, chatMsg)

    chatId         : the data-chat-id attribute of the chat window
    chatMsg        : the header message you would like to add

    You can use the following JS function to add a message to a chat window:
    BeCompChat.addMessage(chatId, chatMsg, chatMsgLevel)

    chatId         : the data-chat-id attribute of the chat window
    chatMsg        : the message you would like to add
    chatMsgLevel   : 'self' the user sends the message, '' empty if the user receives the message (changes its style)
-->
<div class="js-chat-container content content-full invisible" data-toggle="appear" data-chat-height="350">
    <div class="row">
        <div class="col-md-6">
            <!-- Single Chat #3 -->
            <div class="block block-rounded block-themed">
                <!-- Chat Header -->
                <div class="js-chat-head block-content block-content-full block-sticky-options bg-gd-dusk text-center">
                    <div class="block-options">
                        <div class="dropdown">
                            <button type="button" class="btn-block-option" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-plus mr-5"></i>Add friend
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-user mr-5"></i>Check out profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-envelope-o mr-5"></i>Send a message
                                </a>
                            </div>
                        </div>
                    </div>
                    <img class="img-avatar img-avatar-thumb" src="assets/media/avatars/avatar13.jpg" alt="">
                    <div class="font-w600 mt-15 mb-5 text-white">
                        Jack Greene <span class="font-italic text-white-op">Photographer</span>
                    </div>
                </div>
                <!-- END Chat Header -->

                <!-- Messages (demonstration messages are added with JS code at the bottom of this page) -->
                <div class="js-chat-talk block-content block-content-full text-wrap-break-word overflow-y-auto" data-chat-id="3"></div>

                <!-- Chat Input -->
                <div class="js-chat-form block-content block-content-full block-content-sm bg-body-light">
                    <form action="be_comp_chat_single.php" method="post">
                        <input class="js-chat-input form-control" type="text" data-target-chat-id="3" placeholder="Type your message and hit enter..">
                    </form>
                </div>
                <!-- END Chat Input -->
            </div>
            <!-- END Single Chat #3 -->
        </div>
        <div class="col-md-6">
            <!-- Single Chat #4 -->
            <div class="block block-rounded block-themed">
                <!-- Chat Header -->
                <div class="js-chat-head block-content block-content-full block-sticky-options bg-gd-sea text-center">
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="pinned_toggle">
                            <i class="si si-pin"></i>
                        </button>
                    </div>
                    <img class="img-avatar img-avatar-thumb" src="assets/media/avatars/avatar1.jpg" alt="">
                    <div class="font-w600 mt-15 mb-5 text-white">
                        Megan Ti <span class="font-italic text-white-op">Designer</span>
                    </div>
                </div>
                <!-- END Chat Header -->

                <!-- Messages (demonstration messages are added with JS code at the bottom of this page) -->
                <div class="js-chat-talk block-content block-content-full text-wrap-break-word overflow-y-auto" data-chat-id="4"></div>

                <!-- Chat Input -->
                <div class="js-chat-form block-content block-content-full block-content-sm bg-body-light">
                    <form action="be_comp_chat_single.php" method="post">
                        <input class="js-chat-input form-control" type="text" data-target-chat-id="4" placeholder="Type your message and hit enter..">
                    </form>
                </div>
                <!-- END Chat Input -->
            </div>
            <!-- END Single Chat #4 -->
        </div>
        <div class="col-md-6">
            <!-- Single Chat #5 -->
            <div class="block block-rounded block-themed">
                <!-- Chat Header -->
                <div class="js-chat-head block-content block-content-full block-sticky-options text-center bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo26.jpg');">
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                    <img class="img-avatar img-avatar-thumb" src="assets/media/avatars/avatar5.jpg" alt="">
                    <div class="font-w600 mt-15 mb-5 text-white">
                        Lucy Lee <span class="font-italic text-white-op">CEO</span>
                    </div>
                </div>
                <!-- END Chat Header -->

                <!-- Messages (demonstration messages are added with JS code at the bottom of this page) -->
                <div class="js-chat-talk block-content block-content-full text-wrap-break-word overflow-y-auto" data-chat-id="5"></div>

                <!-- Chat Input -->
                <div class="js-chat-form block-content block-content-full block-content-sm bg-body-light">
                    <form action="be_comp_chat_single.php" method="post">
                        <input class="js-chat-input form-control" type="text" data-target-chat-id="5" placeholder="Type your message and hit enter..">
                    </form>
                </div>
                <!-- END Chat Input -->
            </div>
            <!-- END Single Chat #5 -->
        </div>
        <div class="col-md-6">
            <!-- Single Chat #6 -->
            <div class="block block-rounded block-themed">
                <!-- Chat Header -->
                <div class="js-chat-head block-content block-content-full block-sticky-options text-center bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo23.jpg');">
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                    </div>
                    <img class="img-avatar img-avatar-thumb" src="assets/media/avatars/avatar16.jpg" alt="">
                    <div class="font-w600 mt-15 mb-5 text-white">
                        John Truman <span class="font-italic text-white-op">Marketing</span>
                    </div>
                </div>
                <!-- END Chat Header -->

                <!-- Messages (demonstration messages are added with JS code at the bottom of this page) -->
                <div class="js-chat-talk block-content block-content-full text-wrap-break-word overflow-y-auto" data-chat-id="6"></div>

                <!-- Chat Input -->
                <div class="js-chat-form block-content block-content-full block-content-sm bg-body-light">
                    <form action="be_comp_chat_single.php" method="post">
                        <input class="js-chat-input form-control" type="text" data-target-chat-id="6" placeholder="Type your message and hit enter..">
                    </form>
                </div>
                <!-- END Chat Input -->
            </div>
            <!-- END Single Chat #6 -->
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_comp_chat.min.js'); ?>
<script>
    jQuery(function(){
        // Add demonstration headers and messages for Chat #3
        BeCompChat.addMessage(3, 'Hey Jack!', 'self');
        BeCompChat.addMessage(3, 'Can you contact me asap?', 'self');

        // Add demonstration headers and messages for Chat #4
        BeCompChat.addHeader(4, 'Yesterday');
        BeCompChat.addMessage(4, 'Hi Admin!');
        BeCompChat.addMessage(4, 'How are you?');
        BeCompChat.addHeader(4, 'Today');
        BeCompChat.addMessage(4, 'I\'m fine, thanks!', 'self');

        // Add demonstration headers and messages for Chat #5
        BeCompChat.addMessage(5, 'We will have to move forward as soon as possible!');
        BeCompChat.addMessage(5, 'Is your team you ready?');
        BeCompChat.addHeader(5, 'Today');
        BeCompChat.addMessage(5, 'Absolutely!', 'self');

        // Add demonstration headers and messages for Chat #6
        BeCompChat.addHeader(6, 'No new messages!');
    });
</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
