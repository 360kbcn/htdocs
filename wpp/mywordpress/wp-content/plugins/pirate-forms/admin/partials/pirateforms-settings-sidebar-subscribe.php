<?php
if ( ! defined( 'PIRATEFORMSPRO_BASEFILE' ) ) :
	?>
	<div class="pirate-upgrade postbox card">
	<h3 class="title"><?php esc_html_e( 'Extend to FULL version', 'pirate-forms' ); ?></h3>
	<ul>
		<li>Multiple forms builder</li>
		<li>MailChimp integration</li>
		<li>Aweber integration</li>
		<li>GetResponse integration</li>
		<li>Sendinblue integration</li>
		<li>Developer friendly</li>
		<li>Custom fields</li>
		<li>12 months Support & Updates</li>
		<li>30 days Money Back Guaranteed</li>
	</ul>
	<a href="<?php echo PIRATEFORMS_USELL_LINK; ?>" target="_blank"
	   title="<?php esc_attr_e( 'View more features', 'pirate-forms' ); ?>"
	   class="btn"><?php esc_html_e( 'View more features', 'pirate-forms' ); ?></a>
	</div>
	<?php
endif;
?>
<div class="pirate-subscribe postbox card">
	<h3 class="title"><?php esc_html_e( 'Get Our Free Email Course', 'pirate-forms' ); ?></h3>
	<div class="pirate-forms-subscribe-content">
		<?php
		if ( ! empty( $_POST['pirate_forms_mail'] ) ) {
			if ( ! class_exists( 'Mailin' ) ) {
				require_once PIRATEFORMS_DIR . 'vendor/mailin-api/mailin-api-php/V2.0/Mailin.php';
			}
			$user_info = get_userdata( 1 );
			$mailin    = new Mailin( 'https://api.sendinblue.com/v2.0', 'cHW5sxZnzE7mhaYb' );
			$data      = array(
				'email'           => $_POST['pirate_forms_mail'],
				'attributes'      => array(
					'NAME'    => $user_info->first_name,
					'SURNAME' => $user_info->last_name,
				),
				'blacklisted'     => 0,
				'listid'          => array( 51 ),
				'blacklisted_sms' => 0,
			);
			$status    = $mailin->create_update_user( $data );
			if ( $status['code'] == 'success' ) {
				update_option( 'pirate_forms_subscribe', true );
			}
		}
		$was_submited = get_option( 'pirate_forms_subscribe', false );
		if ( $was_submited == false ) {
			echo sprintf( '<p> %s </p><form class="pirate-forms-submit-mail" method="post"><input name="pirate_forms_mail" type="email" value="' . get_option( 'admin_email' ) . '" /><input class="button" type="submit" value="Submit"></form>', esc_html__( 'Ready to learn how to reduce your website loading times by half? Come and join the 1st lesson here!', 'pirate-forms' ) );
		} else {
			echo sprintf( '<p> %s </p>', esc_html__( 'Thank you for subscribing! You have been added to the mailing list and will receive the next email information in the coming weeks. If you ever wish to unsubscribe, simply use the "Unsubscribe" link included in each newsletter.', 'pirate-forms' ) );
		}
		?>
	</div>
</div>

