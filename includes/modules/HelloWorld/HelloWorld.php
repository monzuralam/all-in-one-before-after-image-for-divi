<?php

class AIOBAI_HelloWorld extends ET_Builder_Module {

	public $slug       = 'aiobai_hello_world';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => '',
		'author'     => 'Monzur Alam',
		'author_uri' => 'https://profiles.wordpress.org/monzuralam',
	);

	public function init() {
		$this->name = esc_html__( 'Hello World', 'aiobai-all-in-one-before-after-image-for-divi' );
	}

	public function get_fields() {
		return array(
			'content' => array(
				'label'           => esc_html__( 'Content', 'aiobai-all-in-one-before-after-image-for-divi' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Content entered here will appear inside the module.', 'aiobai-all-in-one-before-after-image-for-divi' ),
				'toggle_slug'     => 'main_content',
			),
		);
	}

	public function render( $attrs, $content = null, $render_slug ) {
		return sprintf( '<h1>%1$s</h1>', $this->props['content'] );
	}
}

new AIOBAI_HelloWorld;
