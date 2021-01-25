<?php

class TT_STAT{


	/* Project Views 
	========================================*/

	public static function update_post_views(){
		
		if( is_user_logged_in() && get_current_user_id()==$GLOBALS['post']->post_author ){
			return false;
		}

		$network_post_type = TT::get_mod('network_post_type');
		$network_post_type = !empty($network_post_type) ? $network_post_type : 'portfolio';

		if( is_singular($network_post_type) ){
			$post_id = $GLOBALS['post']->ID;
			$post_author = $GLOBALS['post']->post_author;

			$views = TT::getmeta('post_view', $post_id);
			TT::setmeta($post_id, 'post_view', abs($views)+1);

			if( is_user_logged_in() ){
				$visitor = get_current_user_id();

				$vmeta = get_user_meta($visitor, 'netproject_view', true);
				update_user_meta( $visitor, 'netproject_view', abs($vmeta)+1 );
			}

			$ameta = get_user_meta($post_author, 'netproject_who_view', true);
			update_user_meta( $post_author, 'netproject_who_view', abs($ameta)+1 );

			// meta: netproject_view_2015_10
			$meta = 'netproject_view_' . date('Y') . '_' . date('m');
			$meta_val = get_user_meta($post_author, $meta, true);
			$meta_data = TT_C::decode($meta_val);
			$mday = 'd' . date('d');
			$views = 0;
			if( isset($meta_data[$mday]) ){
				$views = abs($meta_data[$mday]);
			}
			$meta_data[$mday] = $views+1;
			update_user_meta( $post_author, $meta, TT_C::encode($meta_data) );
			
		}

	}

	public static function get_views($post_id){
		$views = TT::getmeta('post_view', $post_id);
		return abs($views);
	}

	public static function get_total_views($user){
		$total = get_user_meta( $user, 'netproject_who_view', true );
		return abs($total);
	}




	/* Profile Views
	========================================*/

	public static function update_profile_views($profile_id){

		if( is_user_logged_in() && get_current_user_id()==$profile_id ){
			return false;
		}

		$ameta = get_user_meta($profile_id, 'netprofile_who_view', true);
		update_user_meta( $profile_id, 'netprofile_who_view', abs($ameta)+1 );

		// meta: netproject_view_2015_10
		$meta = 'netprofile_view_' . date('Y') . '_' . date('m');
		$meta_val = get_user_meta($profile_id, $meta, true);
		$meta_data = TT_C::decode($meta_val);
		$mday = 'd' . date('d');
		$views = 0;
		if( isset($meta_data[$mday]) ){
			$views = abs($meta_data[$mday]);
		}
		$meta_data[$mday] = $views+1;
		update_user_meta( $profile_id, $meta, TT_C::encode($meta_data) );


		if( is_user_logged_in() ){
			$visitor = get_current_user_id();

			$vmeta = get_user_meta($visitor, 'netprofile_view', true);
			update_user_meta( $visitor, 'netprofile_view', abs($vmeta)+1 );
		}
	}



	/* Project Like
	========================================*/
	public static function update_project_like($project_id){
		$user = get_current_user_id();

		// visitor info
		$plikes = abs(get_user_meta($user, 'netproject_likes_count', true));
		$umeta = get_user_meta($user, 'netproject_likes', true);
		$umeta_data = TT_C::decode($umeta);

		// portfolio meta
		$post_likes = abs(TT::getmeta('post_likes', $project_id));
		$post_likes_data = TT::getmeta('post_likes_data', $project_id);
		$liked_users = TT_C::decode($post_likes_data);

		// portfolio author
		$cur_post = get_post($project_id);
        $post_author = $cur_post->post_author;
        $author_likes = abs(get_user_meta($post_author, 'netproject_total_likes', true));


		if( in_array($project_id, $umeta_data) ){

			// visitor info
			unset( $umeta_data[array_search($project_id, $umeta_data)] );
			$plikes = $plikes>0 ? $plikes-1 : 0;

			// portfolio meta
			$post_likes = $post_likes>0 ? $post_likes-1 : 0;
			if( in_array($user, $liked_users) ){
				unset( $liked_users[array_search($user, $liked_users)] );
			}

			// portfolio author
			$author_likes = $author_likes>0 ? $author_likes-1 : 0;
		}
		else{
			// visitor info
			$umeta_data[] = $project_id;
			$plikes += 1;

			// portfolio meta
			$post_likes += 1;
			if( !in_array($user, $liked_users) ){
				$liked_users[] = $user;
			}

			// meta: netproject_view_2015_10
			$meta = 'netproject_like_' . date('Y') . '_' . date('m');
			$meta_val = get_user_meta($post_author, $meta, true);
			$meta_data = TT_C::decode($meta_val);
			$mday = 'd' . date('d');
			$views = 0;
			if( isset($meta_data[$mday]) ){
				$views = abs($meta_data[$mday]);
			}
			$meta_data[$mday] = $views+1;
			update_user_meta( $post_author, $meta, TT_C::encode($meta_data) );

			$author_likes += 1;
		}

		// visitor update
		update_user_meta( $user, 'netproject_likes', TT_C::encode($umeta_data) );
		update_user_meta( $user, 'netproject_likes_count', $plikes );

		// portfolio meta update
		TT::setmeta($project_id, 'post_likes', $post_likes);
		TT::setmeta($project_id, 'post_likes_data', TT_C::encode($liked_users));

		// portfolio author update
		update_user_meta( $post_author, 'netproject_total_likes', $author_likes );

	}

	public static function get_likes($post_ids){
		$post_likes = abs(TT::getmeta('post_likes', $post_ids));
		return abs($post_likes);
	}

	public static function get_total_likes($user){
		$total = get_user_meta( $user, 'netproject_total_likes', true );
		return abs($total);
	}


}

?>