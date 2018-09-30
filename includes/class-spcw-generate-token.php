<?php
/**
 * SPCW Generate Token Class
 *
 * @package ShipRocket Pincode Checker Woocommerce
 */

class SPCW_Generate_Token {
	/**
	 * Constructor Function
	 *
	 * SPCW_Generate_Token constructor.
	 */
	public function __construct() {
		register_activation_hook( SPCW_PLUGIN_PATH, array( $this, 'spcw_schedule_event_for_token_generation' ) );
		add_action( 'spcw_generate_shiprocket_token_daily', array ( $this, 'regenerate_shiprocket_token' ) );
	}

	function spcw_schedule_event_for_token_generation() {

		// Use wp_next_scheduled to check if the event is already scheduled.
		$timestamp = wp_next_scheduled( 'spcw_generate_shiprocket_token_daily' );

		// If $timestamp == false, schedule daily token generation since it hasn't been done previously.
		if( $timestamp === false ){

			$cron_time = strtotime( 'midnight' ) - ( get_option( 'gmt_offset' ) * HOUR_IN_SECONDS );

			//Schedule the event for right now, then to repeat daily using the hook 'spcw_generate_shiprocket_token_daily'

			wp_schedule_event( $cron_time, 'daily', 'spcw_generate_shiprocket_token_daily' );

		}
	}

	private function regenerate_shiprocket_token() {

		$url = 'https://apiv2.shiprocket.in/v1/external/auth/login';
		$headers = [ ];
		$body = [ ];

		array_push( $headers, 'Accept: application/json' );
		array_push( $headers, 'Content-Type: application/json' );

		$response = wp_remote_post( $url, array(
				'method' => 'POST',
				'timeout' => 30,
				'redirection' => 10,
				'httpversion' => '1.1',
				'blocking' => true,
				'headers' => $headers,
				'body' => $body,
				'cookies' => array()
			)
		);
		
	}
}