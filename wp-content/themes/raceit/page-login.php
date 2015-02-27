<?php
/*
Template Name: Mavericks My Events - Login Page
*/

if( is_user_logged_in() ) {
	$current_user   = wp_get_current_user();
    $role_name      = $current_user->roles[0];
    var_dump($role_name);

    if('participants' == $role_name ) 
    	wp_redirect( site_url( '/participate?action=view' ) );
    else
    	wp_redirect( site_url( '/events' ) );
    exit();
}

get_header(); 
?>
<section id="login">
	<div class="row">	
		<div class="col-md-offset-2 col-md-8">
			<div class="row">
				<div class="col-md-7 wrap">
					<h1>Login to your account</h1>
					<?php //echo do_shortcode('[pie_register_login]')?>
					<?php $args = array(
					        'echo'           => true,
					        'form_id'        => 'loginform',
					        //'redirect'       => site_url('/login'), 
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
					<a href="<?php echo wp_lostpassword_url(); ?>" class="lost-password" title="Lost Password">Forgot Password</a>
					
				</div>
				<div class="col-md-5 accountlogin">
					<div class="accountlogin-details">
						<h2>Don't have a RaceIt account?</h2>
						<a href="<?php echo site_url('/create-an-account')?>" class="create-account">Create Account</a>
							
						<div class="socialoptions">
							<p>Use your Facebook or Google account to create/login</p>
						
							<div id="sociallogin" style="position: relative;">
							    <div class="newSection padTop">
							        <p class="legalText">We don't post anything without your permission.</p>
								    <p class="legalText">
								        By clicking "Facebook" or "Google+" you confirm that you accept the <a href="http://www.raceit.com/legal.aspx">Terms of Service</a> and <a href="http://www.raceit.com/legal/privacy-policy.aspx">Privacy Policy</a>.
							        </p>
							    </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer();?>