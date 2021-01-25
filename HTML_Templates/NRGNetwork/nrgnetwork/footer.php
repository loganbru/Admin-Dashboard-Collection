<!-- THE FOOTER -->
<?php
    if( TT::get_mod('footer')=='1'):
    
    switch (TT::get_mod('footer_widget_num')) {
        case 1:
            $col = 1;
            $percent = array('col-xs-12 col-sm-12 col-md-12 col-lg-12');
            break;
        case 2:
            $col = 2;
            $percent = array(
                'col-xs-12 col-sm-6 col-md-6 col-lg-6',
                'col-xs-12 col-sm-6 col-md-6 col-lg-6');
            break;
        case 3:
            $col = 3;
            $percent = array(
                'col-md-4 col-sm-4',
                'col-md-4 col-sm-4',
                'col-md-4 col-sm-4');
            break;
        case 4:
            $col = 4;
            $percent = array(
                'col-md-3 col-sm-6',
                'col-md-3 col-sm-6',
                'col-md-3 col-sm-6',
                'col-md-3 col-sm-6');
            break;
        case 5:
            $col = 3;
            $percent = array(
                'col-xs-12 col-sm-12 col-md-6 col-lg-6',
                'col-xs-12 col-sm-6 col-md-3 col-lg-3',
                'col-xs-12 col-sm-6 col-md-3 col-lg-3');
            break;
        case 6:
            $col = 3;
            $percent = array(
                'col-xs-12 col-sm-6 col-md-3 col-lg-3',
                'col-xs-12 col-sm-6 col-md-3 col-lg-3',
                'col-xs-12 col-sm-12 col-md-6 col-lg-6 pull-right');
            break;
        default:
            $col = 4;
            $percent = array(
                'col-md-3 col-sm-6',
                'col-md-3 col-sm-6',
                'col-md-3 col-sm-6',
                'col-md-3 col-sm-6');
            break;
    }
?>
<footer>
	<div class="footer_slider">
		<div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="500" data-center="0" data-slides-per-view="responsive" data-xs-slides="4" data-sm-slides="8" data-md-slides="14" data-lg-slides="19" data-add-slides="19">
            <div class="swiper-wrapper">
        		
        		<?php
        		$net_users = get_users( array( 'order'=>'DESC', 'orderby'=>'registered', 'number'=>24 ) );
        		foreach ($net_users as $user):
        		?>
            	<div class="swiper-slide active" data-val="0">
            		 <?php echo get_avatar($user->ID, 76); ?>
            	</div>
            	<?php endforeach; ?>

            </div>
            <div class="pagination hidden"></div>
        </div>
    </div>	
	<div class="footer-main">
		<div class="container-fluid custom-container">
			<div class="row">	
				<?php 
                    for ($i = 1; $i <= $col; $i++) {
                        echo "<div class='".$percent[$i - 1]." footer-column-$i'>";
                        dynamic_sidebar('footer' . $i);
                        echo '</div>';
                    }
                ?>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<?php if( TT::get_mod('sub-footer')=='1'): ?>
	<div class="footer-bottom">
		<div class="container-fluid custom-container">
			<div class="col-md-12 footer-end clearfix">
				<div class="left">
					<?php echo TT::get_mod('copyright_content'); ?>
				</div>
				<div class="right">
					<?php
                    wp_nav_menu( array(
                        'menu_id'           => '',
                        'menu_class'        => 'sub_footer_menu',
                        'theme_location'    => 'sub_footer',
                        'depth'				=> 1,
                        'container'         => '',
                        'fallback_cb'       => 'nrgnetwork_sub_footer_callback'
                    ) );
                    ?>
				</div>
			</div>			
		</div>
	</div>		
</footer>
<?php endif; ?>


<div class="be-fixed-filter"></div>


<div class="large-popup login">
	<div class="large-popup-fixed"></div>
	<div class="container large-popup-container">
		<div class="row">
			<div class="col-md-8 col-md-push-2 col-lg-6 col-lg-push-3 large-popup-content">
				<div class="row">
					<div class="col-md-12">
						<i class="fa fa-times close-button"></i>
						<h5 class="large-popup-title"><?php esc_attr_e('Log in', 'nrgnetwork'); ?></h5>
					</div>

					<form action="<?php echo esc_url(wp_login_url(home_url('/'))); ?>" method="post" class="popup-input-search">
					<div class="col-md-6">
						<input class="input-signtype" name="log" type="text" required="" placeholder="<?php esc_attr_e('Username', 'nrgnetwork'); ?>">
					</div>
					<div class="col-md-6">
						<input class="input-signtype" name="pwd" type="password" required="" placeholder="<?php esc_attr_e('Password', 'nrgnetwork'); ?>">
					</div>
					<div class="col-xs-6">
						<div class="be-checkbox">
						<label class="check-box">
							    <input class="checkbox-input" type="checkbox" name="rememberme" value="forever" /> <span class="check-box-sign"></span>
							</label>
							<span class="large-popup-text">
								<?php esc_attr_e('Stay signed in', 'nrgnetwork'); ?>
							</span>
						</div>
						
						<a href="<?php echo wp_lostpassword_url(); ?>" title="Lost password" class="link-large-popup"><?php esc_attr_e('Forgot password?', 'nrgnetwork'); ?></a>
						<a href="javascript:;" class="be-register link-large-popup"><?php esc_attr_e('Sign up now', 'nrgnetwork'); ?></a>
					</div>
					<div class="col-xs-6 for-signin">
						<input type="submit" class="be-popup-sign-button" value="<?php esc_attr_e('SIGN IN', 'nrgnetwork'); ?>">
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="large-popup register">
	<div class="large-popup-fixed"></div>
	<div class="container large-popup-container">
		<div class="row">
			<div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2 large-popup-content">
				<div class="row">
					<div class="col-md-12">
						<i class="fa fa-times close-button"></i>
						<h5 class="large-popup-title"><?php esc_attr_e('Register', 'nrgnetwork'); ?></h5>
					</div>

					<form class="popup-input-search" method="post" id="reg_frontend_form" autocomplete="off">
						<input type="hidden" name="action" value="net_frontend_register">
						<input type="email" name="hide_autocomplete_email" class="hidden" value="info@example.com">
						<input type="password" name="hide_autocomplete_pass" class="hidden">
					<div class="col-md-6">
						<input class="input-signtype" type="text" name="reg_fname" required="" placeholder="<?php esc_attr_e('First Name', 'nrgnetwork'); ?>" value="">
					</div>
					<div class="col-md-6">
						<input class="input-signtype" type="text" name="reg_lname" required="" placeholder="<?php esc_attr_e('Last Name', 'nrgnetwork'); ?>" value="">
					</div>
					<div class="col-md-6">
						<input class="input-signtype" type="text" name="reg_username" required="" placeholder="<?php esc_attr_e('Username', 'nrgnetwork'); ?>" value="">
					</div>
					<div class="col-md-6">
						<input class="input-signtype" type="email" name="reg_email" required="" placeholder="<?php esc_attr_e('Email', 'nrgnetwork'); ?>" value="">
					</div>
					<div class="col-md-6">
						<input class="input-signtype" type="password" name="reg_pass" required="" placeholder="<?php esc_attr_e('Password', 'nrgnetwork'); ?>" value="" autocomplete="off">
					</div>
					<div class="col-md-6">
						<div class="be-custom-select-block">
						<select name="reg_country" class="be-custom-select">
							<option value="" disabled selected>
								<?php esc_attr_e('Country', 'nrgnetwork'); ?>
							</option>
							<?php
							$countries = TT_C::get_countries();
							foreach ($countries as $val) {
								echo "<option>$val</option>";
							}
							?>
						</select>
						</div>
					</div>
					<div class="col-md-12 be-date-block">
						<span class="large-popup-text">
							<?php esc_attr_e('Date of birth', 'nrgnetwork'); ?>
						</span>
						<div class="be-custom-select-block mounth">
							<select name="reg_birth_month" class="be-custom-select">
								<option value="" disabled selected>
									<?php esc_attr_e('Month', 'nrgnetwork'); ?>
								</option>
								<option value="01"><?php esc_attr_e('January', 'nrgnetwork'); ?></option>	
								<option value="02"><?php esc_attr_e('February', 'nrgnetwork'); ?></option>	
								<option value="03"><?php esc_attr_e('March', 'nrgnetwork'); ?></option>	
								<option value="04"><?php esc_attr_e('April', 'nrgnetwork'); ?></option>	
								<option value="05"><?php esc_attr_e('May', 'nrgnetwork'); ?></option>	
								<option value="06"><?php esc_attr_e('June', 'nrgnetwork'); ?></option>	
								<option value="07"><?php esc_attr_e('July', 'nrgnetwork'); ?></option>	
								<option value="08"><?php esc_attr_e('August', 'nrgnetwork'); ?></option>	
								<option value="09"><?php esc_attr_e('September', 'nrgnetwork'); ?></option>	
								<option value="10"><?php esc_attr_e('October', 'nrgnetwork'); ?></option>	
								<option value="11"><?php esc_attr_e('November', 'nrgnetwork'); ?></option>	
								<option value="12"><?php esc_attr_e('December', 'nrgnetwork'); ?></option>
							</select>
						</div>
						<div class="be-custom-select-block">
							<select name="reg_birth_day" class="be-custom-select">
								<option value="" disabled selected>
									<?php esc_attr_e('Day', 'nrgnetwork'); ?>
								</option>
								<?php
								for($i=1; $i<=31; $i++){
									echo "<option>$i</option>";
								}
								?>
							</select>
						</div>
						<div class="be-custom-select-block">
							<select name="reg_birth_year" class="be-custom-select">
								<option value="" disabled selected>
									<?php esc_attr_e('Year', 'nrgnetwork'); ?>
								</option>
								<?php
								for($i=2010; $i>1900; $i--){
									echo "<option>$i</option>";
								}
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="be-checkbox">
							<label class="check-box">
							    <input class="checkbox-input" type="checkbox" value="1" name="reg_accept" /> <span class="check-box-sign"></span>
							</label>
							<span class="large-popup-text">
								<?php echo TT::get_mod('terms_of_use'); ?>
							</span>
						</div>
						<div class="be-checkbox">
							<label class="check-box">
							    <input class="checkbox-input" type="checkbox" value="1" name="reg_subs" /> <span class="check-box-sign"></span>
							</label>
							<span class="large-popup-text">
								<?php esc_attr_e('Send me notifications', 'nrgnetwork'); ?>
							</span>
						</div>
					</div>
					<div class="col-md-6 for-signin">
						<input type="submit" class="be-popup-sign-button" value="<?php esc_attr_e('SIGN UP', 'nrgnetwork'); ?>">
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="large-popup send-m msg-frontend-email">
	<div class="large-popup-fixed"></div>
	<div class="container large-popup-container">
		<div class="row">
			<div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2 large-popup-content">
				<div class="row">
					<div class="col-md-12">
						<i class="fa fa-times close-m close-button"></i>
						<h5 class="large-popup-title"><?php esc_attr_e('Send message', 'nrgnetwork'); ?></h5>
					</div>
					<form class="popup-input-search" method="post" id="frontend_mail_form">
						<input type="hidden" name="action" value="net_frontend_sendmail">
						<input type="hidden" name="msg_author" value="">
						<div class="col-md-6">
							<input class="input-signtype" type="text" name="msg_fname" required="" placeholder="<?php esc_attr_e('First Name', 'nrgnetwork'); ?>">
						</div>
						<div class="col-md-6">
							<input class="input-signtype" type="text" name="msg_lname" required="" placeholder="<?php esc_attr_e('Last Name', 'nrgnetwork'); ?>">
						</div>
						<div class="col-md-6">
							<div class="be-custom-select-block">
								<select name="msg_country" class="be-custom-select">
									<option value="" disabled selected>
										<?php esc_attr_e('Country', 'nrgnetwork'); ?>
									</option>
									<?php
									$countries = TT_C::get_countries();
									foreach ($countries as $val) {
										echo "<option>$val</option>";
									}
									?>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<input class="input-signtype" type="email" name="msg_mail" required="" placeholder="<?php esc_attr_e('Email', 'nrgnetwork'); ?>">
						</div>
						<div class="col-md-12">
							<textarea class="message-area" name="msg_content" placeholder="<?php esc_attr_e('Message', 'nrgnetwork'); ?>"></textarea>
						</div>
						<div class="col-md-12 for-signin">
							<input type="submit" class="be-popup-sign-button" value="<?php esc_attr_e('SEND', 'nrgnetwork'); ?>">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>





<?php if( is_user_logged_in() ): ?>
<script type="text/template" id="tpl-add2collection">
	<div class="add2col-wrapper">
		<div class="add2col-form">
			<input id="new-collection" placeholder="<?php esc_html_e('New Collection', 'nrgnetwork'); ?>">
			<a href="javascript:;" id="add2col-btn" class="be-button-vidget blue-style"><?php esc_html_e('Add', 'nrgnetwork'); ?></a>
		</div>
		<ul class="add2col-list">
			<li><span>Loading Collection...</span></li>
		</ul>
	</div>
</script>


<script type="text/template" id="tpl-custom-section">
	<div class="affix-block custom-section-block">
		<div class="be-large-post">
			<div class="info-block style-2">
				<div class="be-large-post-align">
					<h3 class="info-block-label"><?php esc_html_e('New section', 'nrgnetwork'); ?></h3>
				</div>
				<i class="fa fa-times close-w"></i>
			</div>
			<div class="be-large-post-align">
				<div class="row">
					<div class="input-col col-xs-12">
						<div class="form-group focus-2">
							<div class="form-label"><?php esc_html_e('Section Title', 'nrgnetwork'); ?></div>
							<input class="form-input cs-input" type="text" value="<?php esc_html_e('Section Title', 'nrgnetwork'); ?>">
						</div>
					</div>
					<div class="input-col col-xs-12">
						<div class="form-group focus-2">
							<div class="form-label"><?php esc_html_e('Description', 'nrgnetwork'); ?></div>
							<textarea class="form-input cs-textarea" required=""><?php esc_html_e('Something about you', 'nrgnetwork'); ?></textarea>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</script>
<?php endif; ?>



<script type="text/template" id="tpl-search-filter">
	<div class="s_keywords">
		<div class="container-fluid custom-container">
			<a class="btn color-1 size-3 hover-10 sk-clears"><i class="fa fa-trash-o"></i><?php esc_html_e('clear all filters', 'nrgnetwork'); ?></a>
		</div>
	</div>
</script>


<?php wp_footer(); ?>

</body>
</html>