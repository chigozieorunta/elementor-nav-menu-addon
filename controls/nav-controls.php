<?php

class Hip_Nav_Menu_Addons extends \Elementor\Widget_Base {

	public function __construct() {
		parent::__construct();
		$this->init_control();
	}

	public function get_name() {
		return 'hip-nav-menu';
	}

	public function register_controls( $element, $args ) {
        
        $element->start_controls_section(
			'hip-nav-addon-section',
			[
				'label' => __( 'Hip Mobile Menu Options', 'hip' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$element->add_control(
			'hip-menu-border-width',
			[
				'label' => __( 'Parent Menu Border Width', 'hip' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
					],
				],
				'selectors' => [
					'{{WRAPPER}} ul.elementor-nav-menu li a' => 'border-bottom-width: {{SIZE}}{{UNIT}} !important;',
				],
			]
		);

		$element->add_control(
			'hip-menu-border-color',
			[
				'label' => __( 'Parent Menu Border Color', 'hip' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} ul.elementor-nav-menu li a' => 'border-bottom-color: {{VALUE}} !important;',
				],
			]
		);

		$element->add_control(
			'hip-child-menu-bgcolor',
			[
				'label' => __( 'Child Menu Background', 'hip' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} ul.elementor-nav-menu--dropdown li a' => 'background-color: {{VALUE}}',
				],
			]
		);

		$element->add_control(
			'hip-child-menu-bgcolor-hover',
			[
				'label' => __( 'Child Menu Background on Hover', 'hip' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} ul.elementor-nav-menu--dropdown li a:hover' => 'background-color: {{VALUE}}',
				],
			]
		);

		$element->add_control(
			'hip-child-menu-txcolor',
			[
				'label' => __( 'Child Menu Text Color', 'hip' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} ul.elementor-nav-menu--dropdown li a' => 'color: {{VALUE}}',
				],
			]
		);

		$element->add_control(
			'hip-child-menu-txcolor-hover',
			[
				'label' => __( 'Child Menu Text Color on Hover', 'hip' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} ul.elementor-nav-menu--dropdown li a:hover' => 'color: {{VALUE}}',
				],
			]
		);

		$element->add_control(
			'hip-menu-fullscreen',
			[
				'label' => __( 'Menu FullScreen (Yes/No)', 'hip' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'default' => '',
				'label_on' => 'Yes',
				'label_off' => 'No',
				'return_value' => '100vh',
				'selectors' => [
					'{{WRAPPER}} nav.elementor-nav-menu__container' => 'height: {{VALUE}}',
				],
			]
		);

		$element->add_control(
			'hip-menu-cta-sticky',
			[
				'label' => __( 'Menu CTA Sticky (Yes/No)', 'hip' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'default' => '',
				'label_on' => 'Yes',
				'label_off' => 'No',
				'return_value' => 'fixed',
				'selectors' => [
					'{{WRAPPER}} .hip-nav-cta' => 'position: {{VALUE}}',
				],
			]
		);

		$element->add_control(
			'hip-menu-cta1-text',
			[
				'label' => __( 'CTA 1 Text', 'hip' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'input_type' => 'text'
			]
		);

		$element->add_control(
			'hip-menu-cta1-link',
			[
				'label' => __( 'CTA 1 URL Link', 'hip' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'input_type' => 'text'
			]
		);

		$element->add_control(
			'hip-menu-cta1-bgcolor',
			[
				'label' => __( 'CTA 1 Background', 'hip' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cta-1' => 'background-color: {{VALUE}} !important',
				],
			]
		);

		$element->add_control(
			'hip-menu-cta1-bgcolor-hover',
			[
				'label' => __( 'CTA 1 Background on Hover', 'hip' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cta-1:hover' => 'background-color: {{VALUE}} !important',
				],
			]
		);

		$element->add_control(
			'hip-menu-cta1-txcolor',
			[
				'label' => __( 'CTA 1 Text Color', 'hip' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cta-1' => 'color: {{VALUE}} !important',
				],
			]
		);

		$element->add_control(
			'hip-menu-cta1-txcolor-hover',
			[
				'label' => __( 'CTA 1 Text Color on Hover', 'hip' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cta-1:hover' => 'color: {{VALUE}} !important',
				],
			]
		);

		$element->add_control(
			'hip-menu-cta2-text',
			[
				'label' => __( 'CTA 2 Text', 'hip' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'input_type' => 'text'
			]
		);

		$element->add_control(
			'hip-menu-cta2-link',
			[
				'label' => __( 'CTA 2 URL Link', 'hip' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'input_type' => 'text'
			]
		);

		$element->add_control(
			'hip-menu-cta2-bgcolor',
			[
				'label' => __( 'CTA 2 Background', 'hip' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cta-2' => 'background-color: {{VALUE}} !important',
				],
			]
        );

		$element->add_control(
			'hip-menu-cta2-bgcolor-hover',
			[
				'label' => __( 'CTA 2 Background on Hover', 'hip' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cta-2:hover' => 'background-color: {{VALUE}} !important',
				],
			]
		);

		$element->add_control(
			'hip-menu-cta2-txcolor',
			[
				'label' => __( 'CTA 2 Text Color', 'hip' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cta-2' => 'color: {{VALUE}} !important',
				],
			]
		);

		$element->add_control(
			'hip-menu-cta2-txcolor-hover',
			[
				'label' => __( 'CTA 2 Text Color on Hover', 'hip' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cta-2:hover' => 'color: {{VALUE}} !important',
				],
			]
		);
		
		$element->add_control(
			'hip-menu-cta-font-size',
			[
				'label' => __( 'CTA Font Sizes (px)', 'hip' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .hip-nav-cta-btn' => 'font-size: {{SIZE}}{{UNIT}} !important;',
				],
			]
		);

		$element->add_control(
			'hip-menu-cta-margin-fix',
			[
				'label' => __( 'CTA Margin Top (px)', 'hip' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .hip-nav-cta' => 'margin-top: {{SIZE}}{{UNIT}} !important;',
				],
			]
		);

		$element->end_controls_section();
	}

	public function before_render_element($element) {
		$settings = $element->get_settings();
		$cta = '';

		$button1 = ''; $button1_pad = ''; $text1 = ''; $link1 = '';
		$button2 = ''; $button2_pad = ''; $text2 = ''; $link2 = '';

		if(isset($settings['hip-menu-cta1-link'])) 
			$link1 = $settings['hip-menu-cta1-link'];
		if(isset($settings['hip-menu-cta1-text'])) 
			$text1 = $settings['hip-menu-cta1-text'];
		if(isset($settings['hip-menu-cta2-link'])) 
			$link2 = $settings['hip-menu-cta2-link'];
		if(isset($settings['hip-menu-cta2-text'])) 
			$text2 = $settings['hip-menu-cta2-text'];

		$this->text1 = $text1; $this->link1 = $link1;
		$this->text2 = $text2; $this->link2 = $link2;

		/*if($text1 || $text2): ob_start();
			echo '
				<div class="hip-nav-cta">
					<div class="hip-nav-cta-col">
						<a href="'.$link1.'" class="hip-nav-cta-btn cta-1">
							'.$text1.'
						</a>
					</div>
					<div class="hip-nav-cta-col">
						<a href="'.$link2.'" class="hip-nav-cta-btn cta-2">
							'.$text2.'
						</a>
					</div>
				</div>
			';
		ob_end_flush();
		endif;*/
 	}

	protected function init_control() {
		add_action( 'elementor/frontend/widget/before_render', [ $this, 'before_render_element' ], 10, 1 );
		add_action( 'elementor/element/nav-menu/style_toggle/after_section_end', [ $this, 'register_controls' ], 10, 2 );
	}

}

?>