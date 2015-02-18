<?php
/*
Template Name: Mavericks My Events - Login Page
*/
get_header(); 
?>
<section id="login">
	<div class="row">	
		<div class="col-md-offset-2 col-md-8">
			<div class="row">
				<div class="col-md-7">
					<?php $args = array(
					        'echo'           => true,
					        'redirect'       => site_url('/events'), 
					        'form_id'        => 'loginform',
					        'label_username' => __( '' ),
					        'label_password' => __( '' ),
					        'label_remember' => __( 'Remember Me' ),
					        'label_log_in'   => __( 'Log In' ),
					        'id_username'    => 'user_login',
					        'id_password'    => 'user_pass',
					        'id_remember'    => 'rememberme',
					        'id_submit'      => 'wp-submit',
					        'remember'       => false,
					        'value_username' => NULL,
					        'value_remember' => false
					); ?> 

					<?php wp_login_form( $args ); ?> 
					<a href="<?php echo wp_lostpassword_url(); ?>" title="Lost Password">Forgot Password</a>
				</div>
				<div class="col-md-5"></div>
			</div>
		</div>
	</div>
</section>
<?php get_footer();?>