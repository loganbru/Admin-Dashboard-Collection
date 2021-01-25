<?php
if ( post_password_required() ) {
    return;
}



function themeton_custom_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;

    if ( 'div' == $args['style'] ) {
        $tag = 'div';
        $add_below = 'comment';
    } else {
        $tag = 'li';
        $add_below = 'div-comment';
    }

    switch ( $comment->comment_type ) :
        case 'pingback' :
        case 'trackback' :
    ?>
    <<?php echo esc_attr($tag); ?> class="post pingback">
        <p><?php esc_html_e('Pingback:', 'nrgnetwork'); ?> <?php comment_author_link(); ?><?php edit_comment_link( esc_html__('Edit', 'nrgnetwork'), '<span class="edit-link">', '</span>' ); ?></p>
    <?php
            break;
        default:
    ?>

    <<?php echo esc_attr($tag); ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">

    <div class="be-comment">
        <div class="be-img-comment img-round">
            <?php echo get_avatar( $comment, 80 ); ?>
        </div>
        <div class="be-comment-content">
            <span class="be-comment-name"><?php echo get_comment_author_link(); ?></span>
            <span class="be-comment-time"><?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'], 'before' => '<i class="fa fa-reply"></i>', 'after' => '&nbsp;&nbsp;&nbsp;') ) ); ?> <i class="fa fa-clock-o"></i><?php printf( esc_html__('%1$s', 'nrgnetwork'), get_comment_date() ); ?></span>
            <div class="be-comment-text"><?php comment_text(); ?></div>
        </div>
    </div>

<?php
            break;
    endswitch;
}




?>

<div class="be-comment-block" id="be-comment-block">

        <div class="comments">

            <?php if ( have_comments() ) : ?>
                <h1 class="comments-title">
                    <?php
                        printf( _nx( 'One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'nrgnetwork' ),
                            number_format_i18n( get_comments_number() ), get_the_title() );
                    ?>
                </h1>

                <?php tt_theme_comment_nav(); ?>

                <ol class="media-list comment-list">
                    <?php
                        wp_list_comments( array(
                            'style'       => 'ol',
                            'short_ping'  => true,
                            'avatar_size' => 60,
                            'callback'    => 'themeton_custom_comment'
                        ) );
                    ?>
                </ol><!-- .comment-list -->

                <?php tt_theme_comment_nav(); ?>

            <?php endif; // have_comments() ?>



            <?php
                // If comments are closed and there are comments, let's leave a little note, shall we?
                if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
            ?>  
                <p>&nbsp;</p>
                <p class="no-comments"><?php esc_html_e('Comments are closed.', 'nrgnetwork'); ?></p>
            <?php endif; ?>



    </div>

    <div class="form-block">
    <?php
        $req = get_option( 'require_name_email' );
        $aria_req = ( $req ? " aria-required='true'" : '' );
        comment_form(
            array(
                'comment_notes_before' => '',
                'comment_notes_after' => '',
                'title_reply' => '<h1 class="comments-title">Leave a Reply</h1>',
                'class_submit' => 'btn color-1 size-2 hover-1 pull-right',
                'label_submit' => 'Submit',
                'fields' => array(
                    'author' => '<div class="row"><div class="col-xs-12 col-sm-6">
                                    <div class="form-group fl_icon">
                                        <div class="icon"><i class="fa fa-user"></i></div><input class="form-input" placeholder="'.esc_html_e('Your name', 'nrgnetwork').'" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
                                        '" size="30"' . $aria_req . ' /></div></div>',

                    'email' => '<div class="col-xs-12 col-sm-6"><div class="form-group fl_icon">
                                        <div class="icon"><i class="fa fa-envelope-o"></i></div><input class="form-input" placeholder="'.esc_html_e('Your email', 'nrgnetwork').'" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                                    '" size="30"' . $aria_req . ' /></div></div></div>'
                ),
                'comment_field' => '<div class="row"><div class="col-xs-12">                                 
                                    <div class="form-group"><textarea id="comment" class="form-input" name="comment" cols="50" rows="6" tabindex="4" aria-required="true" placeholder="'.esc_html_e('Your text', 'nrgnetwork').'"></textarea></div></div></div>'
            )
        );
    ?>
    </div>

    
</div>