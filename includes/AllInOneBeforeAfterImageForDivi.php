<?php

class AIOBAI_AllInOneBeforeAfterImageForDivi extends DiviExtension {

	/**
	 * The gettext domain for the extension's translations.
	 *
	 * @since 1.0.0
	 *
	 * @var string
	 */
	public $gettext_domain = 'aiobai-all-in-one-before-after-image-for-divi';

	/**
	 * The extension's WP Plugin name.
	 *
	 * @since 1.0.0
	 *
	 * @var string
	 */
	public $name = 'all-in-one-before-after-image-for-divi';

	/**
	 * The extension's version
	 *
	 * @since 1.0.0
	 *
	 * @var string
	 */
	public $version = '1.0.0';

	/**
	 * AIOBAI_AllInOneBeforeAfterImageForDivi constructor.
	 *
	 * @param string $name
	 * @param array  $args
	 */
	public function __construct( $name = 'all-in-one-before-after-image-for-divi', $args = array() ) {
		$this->plugin_dir     = plugin_dir_path( __FILE__ );
		$this->plugin_dir_url = plugin_dir_url( $this->plugin_dir );

		parent::__construct( $name, $args );
	}
}

new AIOBAI_AllInOneBeforeAfterImageForDivi;
