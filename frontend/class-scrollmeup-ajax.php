<?php

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( ! class_exists( 'ScrollMeUpClientAjax' ) ) {
	class ScrollMeUpClientAjax {

		public $base_client;

		public function __construct( $base_client ) {
			$this->base_client = $base_client;
		}

	}
}