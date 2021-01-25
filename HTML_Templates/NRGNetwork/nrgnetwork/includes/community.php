<?php

class NRGCommunity_Setings{

	function __construct(){
        add_filter( 'document_title_parts', array($this, 'network_wp_title'), 10, 2 );
		add_filter( 'the_content', array($this, 'the_content_filter') );

        add_action('wp_ajax_post_like_action', array($this, 'post_like_action_hook'));
        add_action('wp_ajax_nopriv_post_like_action', array($this, 'post_like_action_hook'));

		add_action('wp_ajax_post_like_blog_action', array($this, 'post_like_action_blog_hook'));
        add_action('wp_ajax_nopriv_post_like_blog_action', array($this, 'post_like_action_blog_hook'));

        // get coll list
        add_action('wp_ajax_add2col_get_list', array($this, 'add2col_get_list_hook'));
        add_action('wp_ajax_nopriv_add2col_get_list', array($this, 'add2col_get_list_hook'));

        // add coll
        add_action('wp_ajax_add2col_new', array($this, 'add2col_new_hook'));
        add_action('wp_ajax_nopriv_add2col_new', array($this, 'add2col_new_hook'));

        // save coll
        add_action('wp_ajax_add2col_save_col', array($this, 'add2col_save_col_hook'));
        add_action('wp_ajax_nopriv_add2col_save_col', array($this, 'add2col_save_col_hook'));

        add_action('wp_ajax_net_edit_coll_rename', array($this, 'net_edit_coll_rename_hook'));
        add_action('wp_ajax_nopriv_net_edit_coll_rename', array($this, 'net_edit_coll_rename_hook'));

        add_action('wp_ajax_net_edit_coll_remove', array($this, 'net_edit_coll_remove_hook'));
        add_action('wp_ajax_nopriv_net_edit_coll_remove', array($this, 'net_edit_coll_remove_hook'));

        add_action('wp_ajax_net_edit_coll_remove_item', array($this, 'net_edit_coll_remove_item_hook'));
        add_action('wp_ajax_nopriv_net_edit_coll_remove_item', array($this, 'net_edit_coll_remove_item_hook'));
        



        // save author meta fields
        add_action('wp_ajax_net_save_profile', array($this, 'net_save_profile_hook'));
        add_action('wp_ajax_nopriv_net_save_profile', array($this, 'net_save_profile_hook'));

        // get filtered portfolios
        add_action('wp_ajax_net_search_portfolios', array($this, 'net_search_portfolios_hook'));
        add_action('wp_ajax_nopriv_net_search_portfolios', array($this, 'net_search_portfolios_hook'));

        // save frontend data
        add_action('wp_ajax_net_frontend_content', array($this, 'net_frontend_content_hook'));
        add_action('wp_ajax_nopriv_net_frontend_content', array($this, 'net_frontend_content_hook'));

        // save frontend data
        add_action('wp_ajax_net_frontend_remove', array($this, 'net_frontend_remove_hook'));
        add_action('wp_ajax_nopriv_net_frontend_remove', array($this, 'net_frontend_remove_hook'));

        // save frontend register
        add_action('wp_ajax_net_frontend_register', array($this, 'net_frontend_register_hook'));
        add_action('wp_ajax_nopriv_net_frontend_register', array($this, 'net_frontend_register_hook'));

        // save frontend message
        add_action('wp_ajax_net_frontend_message', array($this, 'net_frontend_message_hook'));
        add_action('wp_ajax_nopriv_net_frontend_message', array($this, 'net_frontend_message_hook'));

        add_action('wp_ajax_net_frontend_sendmail', array($this, 'net_frontend_sendmail_hook'));
        add_action('wp_ajax_nopriv_net_frontend_sendmail', array($this, 'net_frontend_sendmail_hook'));

        // author page pagination
        add_action('wp_ajax_net_get_pager_folios', array($this, 'net_get_pager_folios_hook'));
        add_action('wp_ajax_nopriv_net_get_pager_folios', array($this, 'net_get_pager_folios_hook'));

        // private messages
        add_action('wp_ajax_net_get_private_messages', array($this, 'net_get_private_messages_hook'));
        add_action('wp_ajax_nopriv_net_get_private_messages', array($this, 'net_get_private_messages_hook'));
        // private message reply
        add_action('wp_ajax_net_get_private_msg_reply', array($this, 'net_get_private_msg_reply_hook'));
        add_action('wp_ajax_nopriv_net_get_private_msg_reply', array($this, 'net_get_private_msg_reply_hook'));

        // net_addremove_friend
        add_action('wp_ajax_net_addremove_friend', array($this, 'net_addremove_friend_hook'));
        add_action('wp_ajax_nopriv_net_addremove_friend', array($this, 'net_addremove_friend_hook'));

        // net_check_notification
        add_action('wp_ajax_net_check_notification', array($this, 'net_check_notification_hook'));
        add_action('wp_ajax_nopriv_net_check_notification', array($this, 'net_check_notification_hook'));

        
        


        // community templates
        add_action('init', array($this, 'custom_rewrite'), 10, 0);
        add_filter('query_vars', array($this, 'add_query_vars'));
        add_filter('template_include', array($this, 'community_templates'));

        add_action('wp_head', array($this, 'print_frontend_styles'), 1024);




        if( function_exists('bp_get_option') && is_admin() ){
            $active_components = apply_filters( 'bp_active_components', bp_get_option( 'bp-active-components' ) );

            if( empty($active_components['notifications']) || empty($active_components['friends']) || empty($active_components['messages']) ){
                $active_components['notifications'] = "1";
                $active_components['friends'] = "1";
                $active_components['messages'] = "1";

                // Load up BuddyPress
                $bp = buddypress();

                // Save settings and upgrade schema
                require_once( $bp->plugin_dir . '/bp-core/admin/bp-core-admin-schema.php' );

                $bp->active_components = bp_core_admin_get_active_components_from_submitted_settings( $active_components );

                bp_core_install( $bp->active_components );
                bp_core_add_page_mappings( $bp->active_components );
                bp_update_option( 'bp-active-components', $bp->active_components );
            }
        }
        
        

        add_filter( 'ajax_query_attachments_args', array($this, 'show_current_user_attachments'), 10, 1 );
        add_filter( 'get_comment_author_link', array($this, 'get_comment_author_link'), 10, 999 );


        add_action('customize_save_after', array($this, 'settings_flush_rewrite'));


        add_filter('get_avatar' , array($this, 'network_user_avatar_filter'), 999, 5);
	}


    public function settings_flush_rewrite(){
        flush_rewrite_rules();
    }



    public function network_user_avatar_filter($avatar, $id_or_email, $size, $default, $alt){
        $user = false;

        if ( is_numeric( $id_or_email ) ) {
            $id = (int) $id_or_email;
            $user = get_user_by( 'id' , $id );
        }
        elseif ( is_object( $id_or_email ) ) {
            if ( ! empty( $id_or_email->user_id ) ) {
                $id = (int) $id_or_email->user_id;
                $user = get_user_by( 'id' , $id );
            }
        }
        else {
            $user = get_user_by( 'email', $id_or_email );   
        }

        if ( $user && is_object( $user ) ) {
            $user_image = get_the_author_meta('user_image', $user->ID);
            if( !empty($user_image) && abs($user_image)>0 ){
                $avatar_src = wp_get_attachment_image_src( $user_image, 'thumbnail' );
                $avatar_src = !empty($avatar_src) ? $avatar_src[0] : '';
                $avatar = "<img alt=\"{$alt}\" src=\"{$avatar_src}\" class=\"avatar avatar-{$size}\" height=\"{$size}\" width=\"{$size}\" />";
            }
        }

        return $avatar;
    }




    public function show_current_user_attachments( $query = array() ) {
        $user_id = get_current_user_id();
        if( $user_id ) {
            $query['author'] = $user_id;
        }
        return $query;
    }

    public function get_comment_author_link( $return, $author, $comment_ID ){

        $user = false;
        if( abs($author)>0 ){
            $user = get_user_by( 'id', $author );
        }
        else{
            $user = get_user_by( 'login', $author );
        }

        if($user != false) {
            $url = TT_C::get_author_uri($user->ID);
            return "<a href='$url' title='author link'>$user->display_name</a>";
        } else {
            return "";
        }
    }


    public function network_wp_title( $title ){
        global $wp_query;

        if( isset($wp_query->query_vars['network_page'], $wp_query->query_vars['user']) && $wp_query->query_vars['network_page']=='netauth' && !empty($wp_query->query_vars['user']) ){
            $title['title'] = esc_html__('Author Profile', 'nrgnetwork');
        }
        else if( is_user_logged_in() && isset($wp_query->query_vars['network_page'], $wp_query->query_vars['user']) && $wp_query->query_vars['network_page']=='netauth-edit' && abs($wp_query->query_vars['user'])==get_current_user_id() ){
            $title['title'] = esc_html__('Edit Profile', 'nrgnetwork');
        }
        else if( isset($wp_query->query_vars['network_page'], $wp_query->query_vars['user'], $wp_query->query_vars['collect']) && $wp_query->query_vars['network_page']=='netcollect' && abs($wp_query->query_vars['user'])>0 && !empty($wp_query->query_vars['collect']) ){
            $title['title'] = esc_html__('Author Collections', 'nrgnetwork');
        }
        else if( isset($wp_query->query_vars['network_page'], $wp_query->query_vars['portfolio']) && $wp_query->query_vars['network_page']=='netfolio-edit' && abs($wp_query->query_vars['portfolio'])>=0 ){
            $title['title'] = esc_html__('Edit Portfolio', 'nrgnetwork');
        }
        else if( isset($wp_query->query_vars['network_page']) && $wp_query->query_vars['network_page']=='netauth-stats' ){
            $title['title'] = esc_html__('Statistics', 'nrgnetwork');
        }
        else if( isset($wp_query->query_vars['network_page']) && $wp_query->query_vars['network_page']=='netauth-msgs' ){
            $title['title'] = esc_html__('Messages', 'nrgnetwork');
        }

        return $title;
    }



	public function the_content_filter($content){
		if( isset($GLOBALS['post']->ID) && !empty($GLOBALS['post']->ID) ){
			TT_STAT::update_post_views();
		}

		return $content;
	}




    public function add_query_vars($public_query_vars){
        $public_query_vars[] = 'network_page';
        $public_query_vars[] = 'user';
        $public_query_vars[] = 'collect';
        return $public_query_vars;
    }



    public function custom_rewrite(){
        $slug = TT_C::get_slug('netauth');
        add_rewrite_rule( $slug . '/([a-zA-Z0-9]+)/?$', 'index.php?network_page=netauth&user=$matches[1]', 'top' );

        $slug = TT_C::get_slug('netauth-edit');
        add_rewrite_rule( $slug . '/([0-9]+)/?$', 'index.php?network_page=netauth-edit&user=$matches[1]', 'top' );

        $slug = TT_C::get_slug('netcollect');
        add_rewrite_rule( $slug . '/([0-9]+)/([^/]*)/?$', 'index.php?network_page=netcollect&user=$matches[1]&collect=$matches[2]', 'top' );

        $slug = TT_C::get_slug('netfolio-edit');
        add_rewrite_rule( $slug . '/([0-9]+)/?$', 'index.php?network_page=netfolio-edit&portfolio=$matches[1]', 'top' );

        $slug = TT_C::get_slug('netauth-stats');
        add_rewrite_rule( $slug . '/?$', 'index.php?network_page=netauth-stats', 'top' );

        $slug = TT_C::get_slug('netauth-msgs');
        add_rewrite_rule( $slug . '/?$', 'index.php?network_page=netauth-msgs', 'top' );
    }




    public function community_templates($template){
        global $wp_query;

        // author profile
        if( isset($wp_query->query_vars['network_page'], $wp_query->query_vars['user']) && $wp_query->query_vars['network_page']=='netauth' && !empty($wp_query->query_vars['user']) ){
            $user_info = get_userdata( $wp_query->query_vars['user'] );
            if( abs($wp_query->query_vars['user'])<1 ){
                $user_info = get_user_by( 'login', $wp_query->query_vars['user'] );
            }
            if( $user_info!==false ){
                TT_STAT::update_profile_views($user_info->ID);
                return TT::file_require(get_template_directory() . '/tpl-author.php');
            }
        }

        // edit author profile
        else if( is_user_logged_in() && isset($wp_query->query_vars['network_page'], $wp_query->query_vars['user']) && $wp_query->query_vars['network_page']=='netauth-edit' && abs($wp_query->query_vars['user'])==get_current_user_id() ){
            return TT::file_require(get_template_directory() . '/tpl-author-edit.php');
        }

        // edit author collection
        else if( isset($wp_query->query_vars['network_page'], $wp_query->query_vars['user'], $wp_query->query_vars['collect']) && $wp_query->query_vars['network_page']=='netcollect' && abs($wp_query->query_vars['user'])>0 && !empty($wp_query->query_vars['collect']) ){
            return TT::file_require(get_template_directory() . '/tpl-author-collect.php');
        }

        // edit work
        else if( is_user_logged_in() && isset($wp_query->query_vars['network_page'], $wp_query->query_vars['portfolio']) && $wp_query->query_vars['network_page']=='netfolio-edit' && abs($wp_query->query_vars['portfolio'])>=0 ){
            return TT::file_require(get_template_directory() . '/tpl-folio-add.php');
        }

        // statistics
        else if( is_user_logged_in() && isset($wp_query->query_vars['network_page']) && $wp_query->query_vars['network_page']=='netauth-stats' ){
            return TT::file_require(get_template_directory() . '/tpl-statistic.php');
        }

        // messages
        else if( is_user_logged_in() && function_exists('buddypress') && isset($wp_query->query_vars['network_page']) && $wp_query->query_vars['network_page']=='netauth-msgs' ){
            return TT::file_require(get_template_directory() . '/tpl-messages.php');
        }

        return $template;
    }




    public function post_like_action_hook(){
        $post_id = $_POST['post_id'];

        if( is_user_logged_in() && !empty($post_id) ){
            TT_STAT::update_project_like($post_id);

            echo '1';
        }

        exit;
    }


	public function post_like_action_blog_hook(){
        $post_id = $_POST['post_id'];

        echo TT_C::get_likes($post_id);

        exit;
    }


    /* COLLECTION
    ========================================================= */
    public function get_option_collection($user){
    	$coll_name = 'add2collection' . $user;
		$option = get_option($coll_name  , '' );
		$colls =  TT_C::decode($option);
		return $colls;
    }

    public function get_collection_html($colls, $post_id){
    	$lists = '';
		foreach ($colls as $coll) {
			$active = '';
			if( isset($coll['posts']) && in_array($post_id, $coll['posts']) ){
				$active = 'selected';
			}

            if( array_key_exists('id', $coll) && array_key_exists('name', $coll) ){
                $lists .= '<li><a href="javascript:;" class="'.$active.'" data-col-id="'.$coll['id'].'">'.$coll['name'].' <i class="fa fa-check"></i></a></li>';
            }
		}

		return $lists;
    }

    public function save_collections_option($colls, $user){
    	$coll_name = 'add2collection' . $user;
    	$encoded = TT_C::encode($colls);
    	update_option($coll_name  , $encoded);
    }


    public function add2col_get_list_hook(){
    	$post_id = $_POST['post_id'];
    	$user = is_user_logged_in() ? get_current_user_id() : '';
    	if( !empty($post_id) && !empty($user) ){
    		$colls = $this->get_option_collection($user);

    		$lists = $this->get_collection_html($colls, $post_id);

    		printf('%s', $lists);
    	}

    	exit;
    }

    public function add2col_new_hook(){
    	
    	$name = $_POST['name'];
    	$post_id = $_POST['post_id'];
    	$user = is_user_logged_in() ? get_current_user_id() : '';

    	if( !empty($name) && !empty($post_id) && !empty($user) ){
    		$colls = $this->get_option_collection($user);

    		$colls = array_merge( array( 
    									array(
											'id'=>uniqid(), 
											'name'=>$name, 
											'posts'=>array($post_id) 
										) 
									), $colls);

    		$this->save_collections_option($colls, $user);
			$lists = $this->get_collection_html($colls, $post_id);

			printf('%s', $lists);
    	}

    	exit;
    }

    public function add2col_save_col_hook(){

    	$post_id = $_POST['post_id'];
    	$collections = $_POST['collections'];
    	$coll_ex = explode("|", $collections);
    	$user = is_user_logged_in() ? get_current_user_id() : '';

    	if( !empty($coll_ex) && !empty($post_id) && !empty($user) ){
    		$colls = $this->get_option_collection($user);
    		for( $i=0; $i<count($colls); $i++ ){
    			$cur = $colls[$i];
    			if( in_array($cur['id'], $coll_ex) ){
    				$colls[$i]['posts'] = array_merge( $colls[$i]['posts'], array($post_id) );
    			}
    			else{
    				$ndx = array_search($post_id, $colls[$i]['posts']);
    				if( $ndx!==false ){
    					$cur_ar = $colls[$i]['posts'];
    					unset( $cur_ar[$ndx] );
    					$colls[$i]['posts'] = $cur_ar;
    				}
    			}
    		}

    		$this->save_collections_option($colls, $user);
			$lists = $this->get_collection_html($colls, $post_id);

			printf('%s', $lists);
    	}

    	exit;
    }


    public function re_indexing($colls){
        $new_coll = array();
        foreach ($colls as $val) {
            $new_coll[] = $val;
        }
        return $new_coll;
    }



    public function net_edit_coll_rename_hook(){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $nonce = $_POST['nonce'];

        if( is_user_logged_in() && wp_verify_nonce( $nonce, 'coll_edit_nonce' ) ){
            $user = get_current_user_id();
            $coll_name = 'add2collection' . $user;
            $option = get_option($coll_name  , '' );
            $colls = TT_C::decode($option);

            $colls = $this->re_indexing($colls);

            for( $i=0; $i<count($colls); $i++ ){
                if( $colls[$i]['id']==$id ){
                    $colls[$i]['name'] = $name;
                }
            }


            $this->save_collections_option($colls, $user);
        }

        echo json_encode(array('result'=>'yes'));

        exit;
    }

    public function net_edit_coll_remove_hook(){
        $id = $_POST['id'];
        $nonce = $_POST['nonce'];

        if( is_user_logged_in() && wp_verify_nonce( $nonce, 'coll_edit_nonce' ) ){
            $user = get_current_user_id();
            $coll_name = 'add2collection' . $user;
            $option = get_option($coll_name  , '' );
            $colls = TT_C::decode($option);
            $colls = $this->re_indexing($colls);
            
            $index = -1;
            for( $i=0; $i<count($colls); $i++ ){
                if( $colls[$i]['id']==$id ){
                    $index = $i;
                }
            }

            if( $index>=0 ){
                unset($colls[$index]);
            }

            $this->save_collections_option($colls, $user);
        }

        echo json_encode(array('result'=>'yes'));

        exit;
    }


    public function net_edit_coll_remove_item_hook(){
        $post_id = $_POST['id'];
        $nonce = $_POST['nonce'];
        $_coll = $_POST['coll'];

        if( is_user_logged_in() && wp_verify_nonce( $nonce, 'coll_edit_nonce' ) ){
            $user = get_current_user_id();
            $coll_name = 'add2collection' . $user;
            $option = get_option($coll_name  , '' );
            $colls = TT_C::decode($option);
            for( $i=0; $i<count($colls); $i++ ){
                if( isset($colls[$i]) && $colls[$i]['id']==$_coll ){
                    $ndx = array_search($post_id, $colls[$i]['posts']);
                    if( $ndx!==false ){
                        $cur_ar = $colls[$i]['posts'];
                        unset( $cur_ar[$ndx] );
                        $colls[$i]['posts'] = $cur_ar;
                    }
                }
            }

            $this->save_collections_option($colls, $user);
        }

        echo json_encode(array('result'=>'yes'));

        exit;
    }






    public function net_save_profile_hook(){

        if( !is_user_logged_in() ){
            echo '0';
            exit;
        }

        $user = get_current_user_id();

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $user_image = $_POST['user_image'];
        $occupation = $_POST['occupation'];
        $company = $_POST['company'];
        $country = $_POST['country'];
        $city = $_POST['city'];
        $website = $_POST['website'];
        $facebook = $_POST['facebook'];
        $twitter = $_POST['twitter'];
        $google = $_POST['google'];
        $pinterest = $_POST['pinterest'];
        $instagram = $_POST['instagram'];
        $linkedin = $_POST['linkedin'];
        $description = $_POST['description'];
        $password = $_POST['password'];
        $custom_sections = isset($_POST['custom_sections']) && !empty($_POST['custom_sections']) ? $_POST['custom_sections'] : array();


        update_user_meta( $user, 'first_name',      esc_attr($fname) );
        update_user_meta( $user, 'last_name',       esc_attr($lname) );
        update_user_meta( $user, 'user_image',      esc_attr($user_image) );
        update_user_meta( $user, 'cs_occupation',   esc_attr($occupation) );
        update_user_meta( $user, 'cs_company',      esc_attr($company) );
        update_user_meta( $user, 'cs_country',      esc_attr($country) );
        update_user_meta( $user, 'cs_city',         esc_attr($city) );
        update_user_meta( $user, 'user_url',        apply_filters ('pre_user_url', $website) );
        update_user_meta( $user, 'description',     apply_filters( 'pre_user_description', $description) );

        if( !empty($password) ){
            wp_set_password($password, $user);
        }

        // custom sections
        $custom_section = array();
        if( is_array($custom_sections) ){
            foreach ($custom_sections as $value) {
                $ex = explode('$$$', $value);
                if( !empty($value) && count($ex)>2 ){
                    $_id = $ex[0];
                    $_title = $ex[1];
                    $_content = $ex[2];

                    if( $_id=='0' ){
                        $_id = 'cs'.uniqid();
                    }

                    $custom_section[] = array('id'=>$_id, 'title'=>esc_attr($_title), 'content'=>esc_attr($_content));
                }
            }

            update_user_meta( $user, 'custom_section', TT_C::encode($custom_section) );
        }


        // socials
        $cs_socials = array();
        $cs_socials['facebook'] = $facebook;
        $cs_socials['twitter'] = $twitter;
        $cs_socials['google'] = $google;
        $cs_socials['pinterest'] = $pinterest;
        $cs_socials['instagram'] = $instagram;
        $cs_socials['linkedin'] = $linkedin;

        update_user_meta( $user, 'cs_socials', TT_C::encode($cs_socials) );

        echo '1';

        exit;

    }




    public function net_folio_content_filter( $where, &$wp_query ){
        global $wpdb;
        if ( $search_term = $wp_query->get( 'search_ct_value' ) ) {
            $where .= ' AND (' . $wpdb->posts . '.post_title LIKE \'%' . $wpdb->esc_like( $search_term ) . '%\' OR ' 
                              . $wpdb->posts . '.post_content LIKE \'%' . $wpdb->esc_like( $search_term ) . '%\')';
        }
        
        return $where;
    }





    /* Search Contents
    ======================================================*/

    public function net_search_portfolios_hook(){

        $search = isset($_POST['search']) ? $_POST['search'] : '';
        $types = isset($_POST['types']) ? $_POST['types'] : 'projects';
        $category = isset($_POST['category']) ? $_POST['category'] : '';
        $features = isset($_POST['features']) ? $_POST['features'] : '';
        $worldwide = isset($_POST['worldwide']) ? $_POST['worldwide'] : '';
        $paged = isset($_POST['paged']) ? abs($_POST['paged']) : 1;

        $meta_field1 = isset($_POST['meta_field1']) ? $_POST['meta_field1'] : '';
        $meta_field2 = isset($_POST['meta_field2']) ? $_POST['meta_field2'] : '';
        $meta_field3 = isset($_POST['meta_field3']) ? $_POST['meta_field3'] : '';
        $meta_field_color = isset($_POST['meta_field_color']) ? $_POST['meta_field_color'] : '';

        $paged += 1;

        $network_post_type = TT::get_mod('network_post_type');
        $network_post_type = !empty($network_post_type) ? $network_post_type : 'portfolio';

        $projects_type = isset($_POST['projects_type']) ? $_POST['projects_type'] : $network_post_type;
        $projects_cat = 'portfolio_entries';
        if( $projects_type=='product' ){ $projects_cat='product_cat'; }
        if( $projects_type=='post' ){ $projects_cat='category'; }

        // build query
        $args = array(
                    'post_type' => $projects_type,
                    'posts_per_page' => 16,
                    'ignore_sticky_posts' => true
                );

        
        // filter category
        if( !empty($category) && abs($category)>0 ){
            $args['tax_query'] = array(
                                    'relation' => 'IN',
                                    array(
                                        'taxonomy' => $projects_cat,
                                        'field' => 'id',
                                        'terms' => array($category)
                                    )
                                );
        }



        $meta_query = array();

        if( !empty($features) ){

            if( $features=='features' ){
                $meta_query[] = array(
                                    'key' => '_featured_item',
                                    'value'   => 1,
                                    'type'    => 'numeric',
                                    'compare' => '='
                                );
            }
            else if( $features=='likes' ){
                $args['order']     = 'DESC';
                $args['meta_key']  = '_post_likes';
                $args['orderby']   = 'meta_value_num';
            }
            else if( $features=='views' ){
                $args['order']     = 'DESC';
                $args['meta_key']  = '_post_view';
                $args['orderby']   = 'meta_value_num';
            }
            else if( $features=='comments' ){
                $args['order']     = 'DESC';
                $args['orderby']   = 'comment_count';
            }

        }




        if( !empty($meta_field1) ){
            $meta_query[] = array(
                                'key' => '_extra_brand',
                                'value'   => $meta_field1,
                                'compare' => 'LIKE'
                            );
        }
        if( !empty($meta_field2) ){
            $meta_query[] = array(
                                'key' => '_extra_tools',
                                'value'   => $meta_field2,
                                'compare' => 'LIKE'
                            );
        }
        if( !empty($meta_field3) ){
            $meta_query[] = array(
                                'key' => '_extra_copyright',
                                'value'   => $meta_field3,
                                'compare' => 'LIKE'
                            );
        }
        if( !empty($meta_field_color) ){
            $meta_query[] = array(
                                'key' => '_extra_color',
                                'value'   => trim($meta_field_color),
                                'compare' => 'LIKE'
                            );
        }

        $args['meta_query'] = $meta_query;


        // worldwide
        $user_ids = array();
        if( !empty($worldwide) ){
            $users = get_users(array(
                        'meta_key'     => 'cs_country',
                        'meta_value'   => $worldwide,
                        'meta_compare' => '='
                    ));
            foreach ($users as $val) {
                $user_ids[] = $val->ID;
            }

            $args['author__in'] = !empty($user_ids) ? $user_ids : array(0);
        }



        $result = '';

        if( $types=='people' ){

            $arg_user = array(
                            'orderby' => 'post_count',
                            'order' => 'DESC',
                            'number' => 16
                        );

            if( !empty($search) ){
                $arg_user['search'] = $search;
            }

            if( !empty($worldwide) ){
                $arg_user['meta_key']     = 'cs_country';
                $arg_user['meta_value']   = $worldwide;
                $arg_user['meta_compare'] = '=';
            }

            // offset
            if( $paged==1 ){
                $arg_user['offset'] = 0;
            }
            else{
                $arg_user['offset'] = ($paged-1)*16;
            }


            $user_ids = array();
            $users = get_users($arg_user);
            foreach ($users as $val) {
                $user_ids[] = $val->ID;
            }
            
            $result = $this->get_authors_list($user_ids);

            echo json_encode(array(
                                'types'   => 'people',
                                'paged'  => $paged,
                                'count'  => count($user_ids),
                                'result' => $result,
                                'args'   => TT_C::encode($arg_user),
                                'error'  => esc_html__('Not found authors.', 'nrgnetwork')
                            ));
            exit;

        }
        else{

            if( isset($_POST['encrypted_args']) && !empty($_POST['encrypted_args']) ){
                $args = TT_C::decode($_POST['encrypted_args']);
            }

            if( !empty($search) ){
                $args['search_ct_value'] = $search;
                add_filter( 'posts_where', array($this, 'net_folio_content_filter'), 10, 3 );
            }

            $args['paged'] = $paged;
            $args['post_status'] = 'publish';

            $posts_query = new WP_Query($args);

            $result = $this->get_projects_list($posts_query);

            if( !empty($search) ){
                remove_filter( 'posts_where', array($this, 'net_folio_content_filter'), 10, 3 );
            }

            echo json_encode(array(
                                'types'   => 'projects',
                                'paged'  => $paged,
                                'count'  => $posts_query->post_count,
                                'result' => $result,
                                'args'   => TT_C::encode($args),
                                'error'  => esc_html__('Not found projects.', 'nrgnetwork')
                            ));
            exit;
        }

        echo '0';

        exit;
    }




    public function get_projects_list($posts_query){

        $result = '';

        while ( $posts_query->have_posts() ) {
            $posts_query->the_post();

            $thumb = '';
            if( has_post_thumbnail() ){
                $img_size = 'full';

                $img = wp_get_attachment_image( get_post_thumbnail_id( get_the_ID() ), 'nrgnetwork-folio-grid' );
                $thumb = '<a href="'.esc_url(get_permalink()).'" class="be-img-block">'.TT_C::image_filter($img).'</a>';
            }

            $cat_html = array();
            $cats = TPL::get_folio_cats(get_the_id());
            foreach ($cats as $cat) {
                $cat_html[] = '<a href="'.$cat['link'].'" class="be-post-tag">'.$cat['title'].'</a>';
            }

            $author_id = get_post_field( 'post_author', get_the_id() );

            $featured = TT::getmeta('featured_item');
            $featured = $featured=='1' ? '<span class="item-featured"><i class="fa fa-star-o"></i></span>' : '';
            $thumb = $thumb . $featured;

            $result .= '<div class="custom-column-5">
                            <div class="be-post item-media">
                                '.$thumb.'
                                <a href="'.esc_url(get_permalink()).'" class="be-post-title">'.get_the_title().'</a>
                                <span>
                                    '.implode(', ', $cat_html).'
                                </span>
                                <div class="author-post">
                                    '.get_avatar( $author_id, 20 ).'
                                    <span>by <a href="'.TT_C::get_author_uri($author_id).'">'.get_the_author().'</a></span>
                                </div>
                                <div class="info-block">
                                    <span><i class="fa fa-thumbs-o-up"></i> '.TT_C::get_likes().'</span>
                                    <span><i class="fa fa-eye"></i> '.TT_C::get_views().'</span>
                                    <span><a href="'. get_permalink() .'#be-comment-block"><i class="fa fa-comment-o"></i> '.get_comments_number().'</a></span>
                                </div>
                            </div>
                        </div>';
        }

        wp_reset_postdata();

        return $result;
    }



    public function get_authors_list($user_ids){

        $result = '';

        $network_post_type = TT::get_mod('network_post_type');
        $network_post_type = !empty($network_post_type) ? $network_post_type : 'portfolio';

        foreach ($user_ids as $user) {
            
            $args_author = array(
                            'post_type' => $network_post_type,
                            'posts_per_page' => 1000,
                            'ignore_sticky_posts' => true,
                            'author' => $user
                        );

            $user_posts = '';
            $index_folio = 0;
            $count_folio = 0;

            $posts_query = new WP_Query($args_author);
            $count_folio = abs($posts_query->post_count);
            while ( $posts_query->have_posts() ) {
                $posts_query->the_post();

                if( $index_folio>2 ){
                    break;
                }

                if( has_post_thumbnail() ){
                    $img = wp_get_attachment_image( get_post_thumbnail_id( get_the_ID() ), 'nrgnetwork-folio-thumb' );
                    $user_posts .= TT_C::image_filter($img);
                    $index_folio++;
                }

            }
            wp_reset_postdata();


            $fname = get_the_author_meta('first_name', $user);
            $lname = get_the_author_meta('last_name', $user);
            $user_name = !empty($fname) || !empty($lname) ? $fname . ' ' . $lname : get_the_author_meta('display_name', $user);

            

            $follow_btn = '';
            if( is_user_logged_in() ){
                if( get_current_user_id() == $user ){
                    $follow_btn = '<a href="javascript:;" class="btn color-1 size-2 hover-1">'.esc_html__('AUTHOR', 'nrgnetwork').'</a>';
                }
                else{
                    $is_following = TT_C::net_is_following($user);

                    if( $is_following=='following' ){
                        $follow_btn = '<a href="javascript:;" class="btn color-1 size-2 hover-1 bp-follow-action" data-user-id="'.$user.'" data-text-follow="'.esc_html__('FOLLOW', 'nrgnetwork').'" data-text-following="'.esc_html__('FOLLOWING', 'nrgnetwork').'">'.esc_html__('FOLLOWING', 'nrgnetwork').'</a>';
                    }
                    else{
                        $follow_btn = '<a href="javascript:;" class="btn color-1 size-2 hover-1 bp-follow-action" data-user-id="'.$user.'" data-text-follow="'.esc_html__('FOLLOW', 'nrgnetwork').'" data-text-following="'.esc_html__('FOLLOWING', 'nrgnetwork').'">'.esc_html__('FOLLOW', 'nrgnetwork').'</a>';
                    }
                }
            }
            else{
                $follow_btn = '<a href="javascript:;" class="btn color-1 size-2 hover-1 no-logged-in">'.esc_html__('FOLLOW', 'nrgnetwork').'</a>';
            }



            $result .= '<div class="mix custom-column-5 net-item-people">
                            <div class="be-user-block style-2">
                                <a class="be-ava-user style-2 img-round" href="'.TT_C::get_author_uri($user).'">
                                    '.get_avatar($user, 115).'
                                </a>
                                <div class="be-user-counter">
                                    <div class="c_number">'.$count_folio.'</div>
                                    <div class="c_text">projects</div>
                                </div>
                                <a href="'.TT_C::get_author_uri($user).'" class="be-use-name">'.$user_name.'</a>
                                <p class="be-user-info">'.get_user_meta($user, 'cs_city', true).', '.get_user_meta($user, 'cs_country', true).'</p>
                                <div class="be-text-tags">
                                    '.get_user_meta($user, 'cs_occupation', true).'
                                </div>
                                <div class="info-block">
                                    <span><i class="fa fa-thumbs-o-up"></i> '.TT_STAT::get_total_likes($user).'</span>
                                    <span><i class="fa fa-eye"></i> '.TT_STAT::get_total_views($user).'</span>
                                </div>
                                '.$follow_btn.'
                                <a class="portfolio-link type-1 clearfix" href="'.TT_C::get_author_uri($user).'">
                                    '.$user_posts.'
                                    <div class="color_bg">
                                        <span>view portfolio</span>
                                        <span class="child"></span>
                                    </div>
                                </a>
                            </div>
                        </div>';

        }

        return $result;

    }






    /* Save Frontend Editor Content
    ======================================================*/

    public function net_frontend_content_hook(){

        $post_id = $_POST['post'];
        $title = $_POST['title'];
        $desc = $_POST['desc'];
        $content = $_POST['content'];
        $cover = $_POST['cover'];
        $tags = $_POST['tags'];
        
        $cats = $_POST['cats'];
        $extra = $_POST['extra'];
        $custom_styles = $_POST['custom_styles'];


        $network_post_type = TT::get_mod('network_post_type');
        $network_post_type = !empty($network_post_type) ? $network_post_type : 'portfolio';

        $network_post_status = TT::get_mod('network_post_status');
        $network_post_status = !empty($network_post_status) ? $network_post_status : 'publish';


        $my_post = array();
        $my_post['post_type']       = $network_post_type;
        $my_post['post_title']      = $title;
        $my_post['post_excerpt']    = $desc;
        $my_post['post_content']    = $content;
        $my_post['post_status']     = $network_post_status;
        $my_post['post_author']     = get_current_user_id();

        if( !empty($post_id) ){ $my_post['ID'] = $post_id; }
        if( !empty($tags) ){
            if( $network_post_type=='post' ){
                $my_post['tax_input'] = array('post_tag'=>explode(",", $tags));
            }
            else if( $network_post_type=='portfolio' ){
                $my_post['tax_input'] = array('portfolio_tag'=>explode(",", $tags));
            }
            else if( $network_post_type=='product' ){
                $my_post['tax_input'] = array('product_tag'=>explode(",", $tags));
            }
        }

        $post_id = wp_insert_post($my_post);

        // set featured image
        set_post_thumbnail( $post_id, $cover );

        // set categories
        if( $network_post_type=='post' ){
            wp_set_post_terms($post_id, $cats, 'category');
        }
        else if( $network_post_type=='portfolio' ){
            wp_set_post_terms($post_id, $cats, 'portfolio_entries');
        }
        else if( $network_post_type=='product' ){
            wp_set_post_terms($post_id, $cats, 'product_cat');
        }

        
        TT::setmeta($post_id, 'folio_about', $desc);
        TT::setmeta($post_id, 'extra_brand', $extra['brand']);
        TT::setmeta($post_id, 'extra_tools', $extra['tools']);
        TT::setmeta($post_id, 'extra_color', $extra['color']);
        TT::setmeta($post_id, 'extra_copyright', $extra['copyright']);
        TT::setmeta($post_id, 'extra_adult', (!empty($extra['adult']) && $extra['adult']=='adult' ? 'adult' : '') );

        TT::setmeta($post_id, 'cs_divider', $custom_styles['divider']);
        TT::setmeta($post_id, 'cs_space', $custom_styles['space']);
        TT::setmeta($post_id, 'cs_padding', $custom_styles['padding']);
        TT::setmeta($post_id, 'cs_color', $custom_styles['color']);
        TT::setmeta($post_id, 'cs_bg', $custom_styles['bg']);
        TT::setmeta($post_id, 'cs_text', $custom_styles['text']);

        printf('%s', get_permalink($post_id));

        exit;

    }





    /* Print Custom Styles for Portfolio
    ======================================================*/

    public function print_frontend_styles(){
        global $post;

        $network_post_type = TT::get_mod('network_post_type');
        $network_post_type = !empty($network_post_type) ? $network_post_type : 'portfolio';

        if( is_singular($network_post_type) ){
            $cs_divider = TT::getmeta('cs_divider');
            $cs_space = TT::getmeta('cs_space');
            $cs_padding = TT::getmeta('cs_padding');
            $cs_color = TT::getmeta('cs_color');
            $cs_bg = TT::getmeta('cs_bg');
            $cs_text = TT::getmeta('cs_text');

            $block1 = "";
            $block2 = "";
            $block3 = "";
            $block4 = "";

            if( !empty($cs_divider) ){ $block1 .= "border-top-style: $cs_divider;"; }
            if( !empty($cs_color) ){ $block1 .= "border-top-color: $cs_color;"; }
            if( !empty($cs_space) ){ $cs_space = abs($cs_space). "px"; $block1 .= "margin-top: $cs_space; padding-top: $cs_space;"; }

            if( !empty($cs_padding) ){ $cs_padding = abs($cs_padding). "px"; $block2 .= "padding-top: $cs_padding; padding-bottom: $cs_padding;"; }

            if( !empty($cs_bg) && $cs_bg!='inherit' ){ $block3 .= "background-color: $cs_bg;"; }

            if( !empty($cs_text) && $cs_text!='inherit' ){ $block4 .= "color: $cs_text;"; }

            echo "<style type='text/css'>
                    .tt-frontend-viewport .tt-el-embed + .tt-el-embed{ border-top-width: 1px; $block1 }
                    .tt-frontend-viewport{ $block2 }
                    .tt-frontend-content-wrapper{ $block3 }
                    .tt-frontend-viewport .tt-el-embed-text .entry-text,
                    .tt-frontend-content-wrapper h3,
                    .tt-frontend-content-wrapper h5,
                    .tt-frontend-content-wrapper a
                    { $block4 }
                  </style>";
        }

        $addnew_text = TT::get_mod('addnew_text');
        $addnew_text = !empty($addnew_text) ? $addnew_text : esc_html__('Add Work', 'nrgnetwork');

        $addnew_status = TT::get_mod('addnew_status');
        $addnew_status = !empty($addnew_status) ? $addnew_status : '0';
        $addnew_force_status = '1';

        // Network post type
        $network_post_type = TT::get_mod('network_post_type');
        $network_post_type = !empty($network_post_type) ? $network_post_type : 'portfolio';
        if( !post_type_exists('portfolio') ){
            $addnew_force_status = '0';
        }

        echo '<script>
                var netvars = {
                                addnew: "'.TT_C::get_folio_edit_uri('0').'",
                                addnew_text: "'.$addnew_text.'",
                                addnew_force_disable: "'.$addnew_force_status.'",
                                addnew_disable: "'.$addnew_status.'"
                              };
          </script>';

    }





    /* Frontend Remove
    ======================================================*/

    public function net_frontend_remove_hook(){
        $post_id = $_POST['post_id'];
        $nonce = $_POST['nonce'];
        $result = 'no';
        $redirect = '';
        
        if( is_user_logged_in() && wp_verify_nonce( $nonce, 'net_remove_post' ) && abs($post_id)>0 ){
            $result = 'yes';
            $redirect = TT_C::get_author_uri(get_current_user_id());
            // wp_trash_post( abs($post_id) );
            wp_delete_post( abs($post_id), true );
        }

        echo json_encode( array('result' => $result, 'redirect'=>$redirect) );

        exit;
    }






    /* Register frontend
    ======================================================*/

    public function net_frontend_register_hook(){
        $reg_fname = $_POST['reg_fname'];
        $reg_lname = $_POST['reg_lname'];
        $reg_username = $_POST['reg_username'];
        $reg_email = $_POST['reg_email'];
        $reg_pass = $_POST['reg_pass'];
        $reg_country = $_POST['reg_country'];
        $reg_birth_month = $_POST['reg_birth_month'];
        $reg_birth_day = $_POST['reg_birth_day'];
        $reg_birth_year = $_POST['reg_birth_year'];

        $user_id = username_exists( $reg_username );
        if ( !$user_id and email_exists($reg_email) == false ){
            $user_id = wp_create_user( $reg_username, $reg_pass, $reg_email );

            if( !empty($reg_fname) ){ update_user_meta( $user_id, 'first_name', esc_attr($reg_fname) ); }
            if( !empty($reg_lname) ){ update_user_meta( $user_id, 'last_name', esc_attr($reg_lname) ); }
            if( !empty($reg_country) ){ update_user_meta( $user_id, 'cs_country', esc_attr($reg_country) ); }
            if( !empty($$reg_birth_year) && !empty($reg_birth_month) && !empty($reg_birth_day) ){
                update_user_meta( $user_id, 'cs_birthday', esc_attr("$reg_birth_year-$reg_birth_month-$reg_birth_day") );
            }

            // sending register info email
            $to = $reg_email;
            $admin_email = get_bloginfo('admin_email');
            $blog_name = get_bloginfo('name');
            $blog_url = get_bloginfo('url');
            $subject = "Registration - $blog_name";
            $content = "Welcome to - $blog_name\n
                        Your username: " . $reg_username . "\n
                        Please join <a href='$blog_url'>$blog_name</a>";
            $headers = array(
                'Reply-To' => "$blog_name <$admin_email>"
            );
            $status = wp_mail($to, $subject, $content, $headers);


            echo '1';
        }
        else{
            esc_html_e('User already exists', 'nrgnetwork');
        }

        exit;
    }






    /* Send message frontend
    ======================================================*/

    public function net_frontend_message_hook(){
        if( is_user_logged_in() ){
            $user = $_POST['user'];
            $content = $_POST['content'];
            $user_data = get_userdata( get_current_user_id() );

            if( function_exists('buddypress') ){
                $recipients              = apply_filters( 'bp_messages_recipients', array($user) );
                $thread_id               = messages_new_message( array(
                    'recipients' => $recipients,
                    'subject'    => 'You have a message from ' . $user_data->user_login,
                    'content'    => $content
                ) );
                
                if ( ! empty( $thread_id ) ) {
                    echo '1';
                } else {
                    esc_html_e('There was an error sending that message. Please try again.', 'nrgnetwork');
                }
            }
            else{
                esc_html_e('Buddypress not installed. Please install buddypress and try again.', 'nrgnetwork');
            }
        }
        else{
            esc_html_e('You are not logged in. Please log in and try again ...', 'nrgnetwork');
        }

        exit;
    }





    /* Send mail frontend
    ======================================================*/

    public function net_frontend_sendmail_hook(){
        $msg_author = $_POST['msg_author'];
        $msg_fname = $_POST['msg_fname'];
        $msg_lname = $_POST['msg_lname'];
        $msg_country = $_POST['msg_country'];
        $msg_mail = $_POST['msg_mail'];
        $msg_content = $_POST['msg_content'];

        if( !empty($msg_author) && !empty($msg_mail) ){
            $email = get_the_author_meta('user_email', $msg_author);

            $to = $email;
            $subject = esc_html__('You have a message from', 'nrgnetwork'). " $msg_fname $msg_lname ($msg_country)";
            $content = $msg_content;
            $headers = array(
                'Reply-To' => "$msg_fname $msg_lname <$msg_mail>"
            );
            $status = wp_mail($to, $subject, $content, $headers);

            echo '1';
        }
        else{
            esc_html_e('Please check your fields', 'nrgnetwork');
        }

        exit;
    }







    /* Author profile pager
    ======================================================*/

    public function net_get_pager_folios_hook(){
        if( isset($_POST['type'], $_POST['encrypt_args']) ){

            $args = TT_C::decode($_POST['encrypt_args']);
            if( !isset($args['paged']) ){
                $args['paged'] = 1;
            }
            $args['paged'] = abs($args['paged'])+1;

            $result = '';

            $posts_query = new WP_Query($args);
            while ( $posts_query->have_posts() ){
                $posts_query->the_post();

                $post_type = get_post_type(get_the_ID());

                $thumb = '';
                if( has_post_thumbnail() ){
                    $img = wp_get_attachment_image( get_post_thumbnail_id( get_the_ID() ), 'nrgnetwork-folio-grid' );
                    $thumb = '<a href="'.esc_url(get_permalink()).'" class="be-img-block">
                                '.TT_C::image_filter($img).'
                              </a>';
                }

                $user = get_post_field( 'post_author', get_the_id() );

                if( $_POST['type']=='projects' ){

                    $cat_html = array();
                    $cats = TPL::get_post_cats($post_type, get_the_id());
                    foreach ($cats as $cat) {
                        $cat_html[] = '<a href="'.$cat['link'].'" class="be-post-tag">'.$cat['title'].'</a>';
                    }

                    $edit = '';
                    if( $user == get_current_user_id() ){
                        $edit = '<a href="'.TT_C::get_folio_edit_uri(get_the_ID()).'" class="folio-edit-uri">Edit</a>';
                    }

                    $result .= '<div class="col-ml-12 col-xs-6 col-sm-4 netauthor-item">
                                    <div class="be-post">
                                        '.$thumb.'
                                        '.$edit.'
                                        <a href="'.esc_url(get_permalink()).'" class="be-post-title">'.get_the_title().'</a>
                                        <span>
                                            '.implode(', ', $cat_html).'
                                        </span>
                                        <div class="author-post">
                                            '.get_avatar( $user, 20 ).'
                                            <span>by <a href="'.TT_C::get_author_uri($user).'">'.get_the_author().'</a></span>
                                        </div>
                                        <div class="info-block">
                                            <span><i class="fa fa-thumbs-o-up"></i> '.TT_C::get_likes().'</span>
                                            <span><i class="fa fa-eye"></i> '.TT_C::get_views().'</span>
                                            <span><a href="'. get_permalink() .'#be-comment-block"><i class="fa fa-comment-o"></i> '.get_comments_number().'</a></span>
                                        </div>
                                    </div>
                                </div>';
                }

                if( $_POST['type']=='liked' ){
                    $result .= '<div class="col-ml-12 col-xs-6 col-sm-4 netauthor-item">
                                    <div class="be-post style-4">
                                        '.$thumb.'
                                        <a href="'.esc_url(get_permalink()).'" class="be-post-title">'.get_the_title().'</a>
                                        <div class="author-post clearfix">
                                            '.get_avatar( $user, 20 ).'
                                            <span>by <a href="'.TT_C::get_author_uri($user).'">'.get_the_author().'</a></span>
                                            <span class="like-counter"><i class="fa fa-thumbs-o-up"></i> '.TT_C::get_likes().'</span>
                                        </div>
                                    </div>                                  
                                </div>';
                }
            }

            $val = array(
                    'count'=>$posts_query->post_count,
                    'result'=>$result,
                    'args'=>TT_C::encode($args)
                );

            echo json_encode($val);
            exit;

        }
        else{
            
        }

        echo json_encode(array('count'=>0, 'result'=>''));
        exit;
    }






    // private messages
    public function net_get_private_messages_hook(){
        if( isset($_POST['thread_id']) && abs($_POST['thread_id'])>0 ){

            $thread_id = abs($_POST['thread_id']);
            $messages = BP_Messages_Thread::get_messages($thread_id);
            BP_Messages_Thread::mark_as_read($thread_id);

            foreach ($messages as $val):
            ?>
                <div class="be-comment">
                    <div class="be-img-comment">    
                        <a href="<?php echo TT_C::get_author_uri($val->sender_id); ?>" class="img-round">
                            <?php echo get_avatar($val->sender_id, 60); ?>
                        </a>
                    </div>
                    <div class="be-comment-content">
                        <span class="be-comment-name">
                            <a href="<?php echo TT_C::get_author_uri($val->sender_id); ?>">
                                <?php echo get_the_author_meta('display_name', $val->sender_id); ?>
                            </a>
                        </span>
                        <span class="be-comment-time">
                            <i class="fa fa-clock-o"></i>
                            <?php printf('%s', $val->date_sent); ?>
                        </span>
                        <p class="be-comment-text">
                            <?php printf('%s', $val->message); ?>
                        </p>
                    </div>
                </div>
            <?php
            endforeach;

            echo '<div class="be-comment"></div>';

        }

        exit;
    }


    public function net_get_private_msg_reply_hook(){
        if( isset($_POST['thread_id']) && abs($_POST['thread_id'])>0 && !empty($_POST['content']) ){
            $thread_id = abs($_POST['thread_id']);
            $content = $_POST['content'];

            $result = messages_new_message( array( 'thread_id' => $thread_id, 'content' => $content ) );

            $this->net_get_private_messages_hook();
        }

        exit;
    }






    public function net_addremove_friend_hook(){

        $result = array(
            'result' => '0',
            'following' => '0'
        );

        if( is_user_logged_in() ){
            $fid = $_POST['fid'];
            $user_data = get_userdata( get_current_user_id() );

            $data_followers = get_user_meta($fid, 'net_data_followers', true);
            $data_following = get_user_meta($user_data->ID, 'net_data_following', true);

            $friend_followers = TT_C::decode($data_followers);
            $following = TT_C::decode($data_following);

            // Notification
            $data_followers_info = get_user_meta($fid, 'net_data_followers_info', true);
            $followers_info = TT_C::decode($data_followers_info);
            $fi_key = 'user_' . $user_data->ID;


            if( array_search($fid, $following)==false ){
                $following[] = $fid;

                if( array_search($user_data->ID, $friend_followers)==false ){
                    $friend_followers[] = $user_data->ID;
                }

                $result['following'] = '1';

                
                if( !array_key_exists($fi_key, $followers_info) ){
                    $followers_info[$fi_key] = array('id' => $user_data->ID, 'date'=>date('M d,Y h:i:s'), 'state'=>'0' );
                }
            }
            else{
                $index = array_search($fid, $following);
                unset($following[$index]);

                if( array_search($user_data->ID, $friend_followers)!==false ){
                    $index = array_search($user_data->ID, $friend_followers);
                    unset($friend_followers[$index]);
                }
            }

            $friend_followers = array_unique($friend_followers);
            $following = array_unique($following);

            $data_followers = TT_C::encode($friend_followers);
            $data_following = TT_C::encode($following);

            update_user_meta( $fid, 'net_data_followers', $data_followers );
            update_user_meta( $user_data->ID, 'net_data_following', $data_following );


            // Notification
            $data_followers_info = TT_C::encode($followers_info);
            update_user_meta( $fid, 'net_data_followers_info', $data_followers_info );


            $result['result'] = '1';
        }


        echo json_encode($result);

        exit;
    }





    public function net_check_notification_hook(){
        if( is_user_logged_in() ){
            $user_id = get_current_user_id();

            $data_followers_info = get_user_meta($user_id, 'net_data_followers_info', true);
            $followers_info = TT_C::decode($data_followers_info);

            $new_info = array();
            foreach ($followers_info as $key => $value) {
                $val = $value;
                $val['state'] = '1';
                $new_info[$key] = $val;
            }

            $data_followers_info = TT_C::encode($new_info);
            update_user_meta( $user_id, 'net_data_followers_info', $data_followers_info );

            echo '1';
        }
        else{
            echo '0';
        }
        exit;
    }




}


new NRGCommunity_Setings();











class TT_C{


    public static function image_filter($img, $url=false, $post_id=false){

        if( !is_user_logged_in() ){
            $meta_val = '';
            if( $post_id!==false ){
                $meta_val = TT::getmeta('extra_adult', $post_id);
            }
            else{
                $meta_val = TT::getmeta('extra_adult');
            }
            
            if( $meta_val=='adult' ){
                $image = get_template_directory_uri() . "/img/placeholder.png";
                return $url ? $image : "<img src='$image' alt='image'>";
            }
        }
        
        return $img;
    }

    public static function decode($param){
        $data = array();
        try {
            $data = !empty($param) ? unserialize( urldecode("$param") ) : array();
        } catch (Exception $e) {
            
        }
        
        $data = is_array($data) ? $data : array();
        return $data;
    }

    public static function encode($param){
        $data = !empty($param) && is_array($param) ? $param : array();
        return urlencode( serialize($data) );
    }

	public static function get_likes($post_id = null){
		global $post;
		if( empty($post_id) && isset($post->ID) ){
			$post_id = $post->ID;
		}

        return TT_STAT::get_likes($post_id);
	}


    public static function get_views($post_id = null){
        global $post;
        if( empty($post_id) && isset($post->ID) ){
            $post_id = $post->ID;
        }
        
        return TT_STAT::get_views($post_id);
    }


	public static function get_like_button($post_id = null){
		global $post;
		if( empty($post_id) && isset($post->ID) ){
			$post_id = $post->ID;
		}

		$active_class = '';
        if( is_user_logged_in() ){
            $umeta = get_user_meta(get_current_user_id(), 'netproject_likes', true);
            $umeta_data = TT_C::decode($umeta);
            if( in_array($post_id, $umeta_data) ){
                $active_class = 'active';
            }
        } else {
            $active_class .=  ' no-logged-in';
        }

        return '<a href="javascript:;" class="be-button-vidget like-button blue-style '.$active_class.'" data-id="'.$post_id.'">
                    <span class="like-loader"><i class="fa fa-spinner"></i>'.esc_html__('LOADING...', 'nrgnetwork').'</span>
                    <span class="like-prject"><i class="fa fa-thumbs-o-up"></i>'.esc_html__('LIKE PROJECT', 'nrgnetwork').'</span>
                    <span class="liked-prject">'.esc_html__('YOU LIKED PROJECT', 'nrgnetwork').'</span>
                </a>';
    }


    public static function get_like_link($link_data = null) {
        global $post;
        if( empty($post_id) && isset($post->ID) ){
            $post_id = $post->ID;
        }

        $active_class = '';
        if( is_user_logged_in() ){
            $umeta = get_user_meta(get_current_user_id(), 'netproject_likes', true);
            $umeta_data = TT_C::decode($umeta);
            if( in_array($post_id, $umeta_data) ){
                $active_class = 'active';
            }
        } else {
            $active_class .=  ' no-logged-in';
        }

        return '<a href="javascript:;" class="like-button-blog spin-icon '.$active_class.'" data-id="'.$post_id.'">'.$link_data.'</a>';
    }


    public static function get_liked_posts($user){
        $user_likes_op = get_user_meta($user, 'netproject_likes', true);
        $result = TT_C::decode($user_likes_op);
        return !empty($result) ? $result : array(0);
    }



    public static function get_follow_btn(){

    }


    public static function get_slug($slug){
        $slug_value = TT::get_mod($slug);
        $slug_value = !empty($slug_value) ? $slug_value :$slug;

        return TT::create_slug($slug_value);
    }


    public static function get_uri($nice_uri, $uri){
        $permastruct = get_option('permalink_structure');
        return !empty($permastruct) ? $nice_uri : $uri;
    }


    public static function get_author_uri($user){
        $netauth_username = TT::get_mod('netauth_username');
        $slug = TT_C::get_slug('netauth');

        $user_slug = $user;
        if( abs($netauth_username)==1 ){
            if( abs($user)>0 ){
                $user_data = get_user_by( 'id', $user );
                $user_slug = $user_data->user_login;
            }
        }

        $nuri = home_url('/') . $slug . "/$user_slug/";
        $uri = home_url('/') . '?network_page=netauth&user=' . $user;
        return TT_C::get_uri($nuri, $uri);
    }

    public static function get_author_edit_uri($user){
        $slug = TT_C::get_slug('netauth-edit');
        $nuri = home_url('/') . $slug . "/$user/";
        $uri = home_url('/') . '?network_page=netauth-edit&user=' . $user;
        return TT_C::get_uri($nuri, $uri);
    }

    public static function get_author_collect_uri($user, $coll_id){
        $slug = TT_C::get_slug('netcollect');
        $nuri = home_url('/') . $slug . "/$user/$coll_id/";
        $uri = home_url('/') . '?network_page=netcollect&user=' . $user . '&collect=' . $coll_id;
        return TT_C::get_uri($nuri, $uri);
    }


    public static function get_folio_edit_uri($param){
        $slug = TT_C::get_slug('netfolio-edit');
        $nuri = home_url('/') . $slug . "/$param/";
        $uri = home_url('/') . '?network_page=netfolio-edit&portfolio=' . $param;
        return TT_C::get_uri($nuri, $uri);
    }

    public static function get_author_stats_uri(){
        $slug = TT_C::get_slug('netauth-stats');
        $nuri = home_url('/') . $slug . "/";
        $uri = home_url('/') . '?network_page=netauth-stats';
        return TT_C::get_uri($nuri, $uri);
    }
    

    public static function get_message_uri(){
        $slug = TT_C::get_slug('netauth-msgs');
        $nuri = home_url('/') . $slug . "/";
        $uri = home_url('/') . '?network_page=netauth-msgs';
        return TT_C::get_uri($nuri, $uri);
    }
    


    public static function net_is_following($fid){
        if( is_user_logged_in() ){
            $user = get_current_user_id();

            $data_following = get_user_meta($user, 'net_data_following', true);
            $following = TT_C::decode($data_following);

            if( array_search($fid, $following)!==false ){
                return 'following';
            }
        }

        return '';
    }




	public static function get_ip(){
		$ip = '';
		if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		}
		elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		else {
			$ip = $_SERVER['REMOTE_ADDR'];
		}

		return $ip;
	}



    
    public static function get_countries(){
        return array(
                    "Afghanistan",
                    "Aland Islands",
                    "Albania",
                    "Algeria",
                    "American Samoa",
                    "Andorra",
                    "Angola",
                    "Anguilla",
                    "Antarctica",
                    "Antigua and Barbuda",
                    "Argentina",
                    "Armenia",
                    "Aruba",
                    "Australia",
                    "Austria",
                    "Azerbaijan",
                    "Bahamas",
                    "Bahrain",
                    "Bangladesh",
                    "Barbados",
                    "Belarus",
                    "Belgium",
                    "Belize",
                    "Benin",
                    "Bermuda",
                    "Bhutan",
                    "Bolivia, Plurinational State of",
                    "Bonaire, Sint Eustatius and Saba",
                    "Bosnia and Herzegovina",
                    "Botswana",
                    "Bouvet Island",
                    "Brazil",
                    "British Indian Ocean Territory",
                    "Brunei Darussalam",
                    "Bulgaria",
                    "Burkina Faso",
                    "Burundi",
                    "Cabo Verde",
                    "Cambodia",
                    "Cameroon",
                    "Canada",
                    "Cayman Islands",
                    "Central African Republic",
                    "Chad",
                    "Chile",
                    "China",
                    "Christmas Island",
                    "Cocos (Keeling) Islands",
                    "Colombia",
                    "Comoros",
                    "Congo",
                    "Congo, the Democratic Republic of the",
                    "Cook Islands",
                    "Costa Rica",
                    "Cote d`Ivoire",
                    "Croatia",
                    "Cuba",
                    "Curacao",
                    "Cyprus",
                    "Czech Republic",
                    "Denmark",
                    "Djibouti",
                    "Dominica",
                    "Dominican Republic",
                    "Ecuador",
                    "Egypt",
                    "El Salvador",
                    "Equatorial Guinea",
                    "Eritrea",
                    "Estonia",
                    "Ethiopia",
                    "Falkland Islands (Malvinas)",
                    "Faroe Islands",
                    "Fiji",
                    "Finland",
                    "France",
                    "French Guiana",
                    "French Polynesia",
                    "French Southern Territories",
                    "Gabon",
                    "Gambia",
                    "Georgia",
                    "Germany",
                    "Ghana",
                    "Gibraltar",
                    "Greece",
                    "Greenland",
                    "Grenada",
                    "Guadeloupe",
                    "Guam",
                    "Guatemala",
                    "Guernsey",
                    "Guinea",
                    "Guinea-Bissau",
                    "Guyana",
                    "Haiti",
                    "Heard Island and McDonald Islands",
                    "Holy See (Vatican City State)",
                    "Honduras",
                    "Hong Kong",
                    "Hungary",
                    "Iceland",
                    "India",
                    "Indonesia",
                    "Iran, Islamic Republic of",
                    "Iraq",
                    "Ireland",
                    "Isle of Man",
                    "Israel",
                    "Italy",
                    "Jamaica",
                    "Japan",
                    "Jersey",
                    "Jordan",
                    "Kazakhstan",
                    "Kenya",
                    "Kiribati",
                    "Korea, Democratic People`s Republic of",
                    "Korea, Republic of",
                    "Kosovo",
                    "Kuwait",
                    "Kyrgyzstan",
                    "Lao People`s Democratic Republic",
                    "Latvia",
                    "Lebanon",
                    "Lesotho",
                    "Liberia",
                    "Libya",
                    "Liechtenstein",
                    "Lithuania",
                    "Luxembourg",
                    "Macao",
                    "Macedonia, the former Yugoslav Republic of",
                    "Madagascar",
                    "Malawi",
                    "Malaysia",
                    "Maldives",
                    "Mali",
                    "Malta",
                    "Marshall Islands",
                    "Martinique",
                    "Mauritania",
                    "Mauritius",
                    "Mayotte",
                    "Mexico",
                    "Micronesia, Federated States of",
                    "Moldova, Republic of",
                    "Monaco",
                    "Mongolia",
                    "Montenegro",
                    "Montserrat",
                    "Morocco",
                    "Mozambique",
                    "Myanmar",
                    "Namibia",
                    "Nauru",
                    "Nepal",
                    "Netherlands",
                    "New Caledonia",
                    "New Zealand",
                    "Nicaragua",
                    "Niger",
                    "Nigeria",
                    "Niue",
                    "Norfolk Island",
                    "Northern Mariana Islands",
                    "Norway",
                    "Oman",
                    "Pakistan",
                    "Palau",
                    "Palestine, State of",
                    "Panama",
                    "Papua New Guinea",
                    "Paraguay",
                    "Peru",
                    "Philippines",
                    "Pitcairn",
                    "Poland",
                    "Portugal",
                    "Puerto Rico",
                    "Qatar",
                    "Reunion",
                    "Romania",
                    "Russian Federation",
                    "Rwanda",
                    "Saint Barthelemy",
                    "Saint Helena, Ascension and Tristan da Cunha",
                    "Saint Kitts and Nevis",
                    "Saint Lucia",
                    "Saint Martin",
                    "Saint Pierre and Miquelon",
                    "Saint Vincent and the Grenadines",
                    "Samoa",
                    "San Marino",
                    "Sao Tome and Principe",
                    "Saudi Arabia",
                    "Senegal",
                    "Serbia",
                    "Seychelles",
                    "Sierra Leone",
                    "Singapore",
                    "Sint Maarten",
                    "Slovakia",
                    "Slovenia",
                    "Solomon Islands",
                    "Somalia",
                    "South Georgia and the South Sandwich Islands",
                    "South Africa",
                    "South Sudan",
                    "Spain",
                    "Sri Lanka",
                    "Sudan",
                    "Suriname",
                    "Svalbard and Jan Mayen",
                    "Swaziland",
                    "Sweden",
                    "Switzerland",
                    "Syrian Arab Republic",
                    "Taiwan",
                    "Tajikistan",
                    "Tanzania, United Republic of",
                    "Thailand",
                    "Timor-Leste",
                    "Togo",
                    "Tokelau",
                    "Tonga",
                    "Trinidad and Tobago",
                    "Tunisia",
                    "Turkey",
                    "Turkmenistan",
                    "Turks and Caicos Islands",
                    "Tuvalu",
                    "Uganda",
                    "Ukraine",
                    "United Arab Emirates",
                    "United Kingdom",
                    "United States Minor Outlying Islands",
                    "United States",
                    "Uruguay",
                    "Uzbekistan",
                    "Vanuatu",
                    "Venezuela, Bolivarian Republic of",
                    "Vietnam",
                    "Virgin Islands, British",
                    "Virgin Islands, U.S.",
                    "Wallis and Futuna",
                    "Western Sahara",
                    "Yemen",
                    "Zambia",
                    "Zimbabwe"
                );
    }


}



if( !function_exists('bp_get_friends_slug') ):
function bp_get_friends_slug() {
    return apply_filters( 'bp_get_friends_slug', '' );
}
endif;

if( !function_exists('bp_notifications_toolbar_menu') ):
function bp_notifications_toolbar_menu(){
    return;
}
endif;