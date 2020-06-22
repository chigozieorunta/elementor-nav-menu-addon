<?php

class Hip_Nav_Menu_Addons extends \Elementor\Widget_Base {

	public $settings;
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
				'label' => __( 'HIP Mobile Menu Options', 'hip' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$element->add_control(
			'hip-menu-border-width',
			[
				'label' => __( 'Menu Border Width', 'hip' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .elementor-menu-toggle' => 'font-size: {{SIZE}}{{UNIT}}',
				],
				'separator' => 'before',
			]
		);

		$element->add_control(
			'hip-menu-border-color',
			[
				'label' => __( 'Menu Border Color', 'hip' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .elementor-menu-toggle:hover' => 'background-color: {{VALUE}}',
				],
			]
		);

		$element->add_control(
			'hip-child-menu-bgcolor',
			[
				'label' => __( 'Child Menu Background', 'hip' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .elementor-menu-toggle:hover' => 'background-color: {{VALUE}}',
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
				'return_value' => 'yes',
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
					'{{WRAPPER}} .elementor-menu-toggle:hover' => 'background-color: {{VALUE}}',
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
					'{{WRAPPER}} .elementor-menu-toggle:hover' => 'background-color: {{VALUE}}',
				],
			]
        );

		$element->end_controls_section();
	}

	public function before_render_element($element) {
		$settings = $element->get_settings();
		$this->setting = $settings;

        if (isset($settings['hip-menu-border-width'])) {
            //Get Menu Border Width
            $i = 0;
            foreach ($settings['hip-menu-border-width'] as $setting) {
                if ($i == 1) {
                    $hip_menu_border_width = $setting;
                }
                $i++;
            }
        
            //Get Menu FullScreen Option
            if ($settings['hip-menu-fullscreen'] == 'yes') {
                $hip_menu_fullscreen = 'nav.elementor-nav-menu__container {height: 100vh;}';
            } else {
                $hip_menu_fullscreen = '';
            }

            if ($settings['hip-child-menu-bgcolor']) {
                $hip_child_menu_bgcolor = 'ul.elementor-nav-menu--dropdown li a {background: '.$settings['hip-child-menu-bgcolor'].';}';
            } else {
                $hip_child_menu_bgcolor = '';
            }

            if ($settings['hip-menu-border-color'] && $hip_menu_border_width) {
                $hip_menu_border = 'ul.elementor-nav-menu li a {border-bottom: '.$hip_menu_border_width.'px solid '.$settings['hip-menu-border-color'].'; border-left: 0;} ';
            } else {
                $hip_menu_border = '';
            }

            //CSS Styling
			echo '<style>.elementor-menu-toggle {font-size: 200% !important;} '.$hip_child_menu_bgcolor.' .hip-nav-cta {display: none;} @media only screen and (max-width: 1024px) {'.$hip_menu_border.$hip_menu_fullscreen.' .hip-nav-cta {margin-bottom: 10px; width: 100%; display: block;} .hip-nav-cta-col {width: 50%; float: left;} .hip-nav-cta-pad {padding: 0 10px;} .hip-nav-cta-btn, .hip-nav-ctn-btn:hover {background: orange; display: block; padding: 0.5em; text-align: center; border-radius: 5px; color: #fff !important;}}</style>';

            //CTA Buttons
            $button1 = '';
            $button1_pad = '';
            $button2 = '';
            $button2_pad = '';
            if (!$settings['hip-menu-cta1-text']) {
                $button2 .= 'width: 100%;';
                $button2_pad = 'padding-left: 0;';
                $button1 .= 'display: none;';
            }
            if (!$settings['hip-menu-cta2-text']) {
                $button1 .= 'width: 100%;';
                $button1_pad = 'padding-right: 0;';
                $button2 .= 'display: none;';
            }
			
            echo '<div class="hip-nav-cta"><div class="hip-nav-cta-col" style="'.$button1.'"><div class="hip-nav-cta-pad" style="padding-left: 0; '.$button1_pad.'"><a href="'.$settings['hip-menu-cta1-link'].'" class="hip-nav-cta-btn" style="background: '.$settings['hip-menu-cta1-bgcolor'].'">'.$settings['hip-menu-cta1-text'].'</a></div></div><div class="hip-nav-cta-col" style="'.$button2.'"><div class="hip-nav-cta-pad" style="padding-right: 0; '.$button2_pad.'"><a href="'.$settings['hip-menu-cta2-link'].'" class="hip-nav-cta-btn" style="background: '.$settings['hip-menu-cta2-bgcolor'].'">'.$settings['hip-menu-cta2-text'].'</a></div></div></div>';
		}
	}
		
	public function cta_buttons() {
        if (isset($this->settings['hip-menu-border-width'])) {
            echo '<div class="hip-nav-cta"><div class="hip-nav-cta-col" style="'.$button1.'"><div class="hip-nav-cta-pad" style="padding-left: 0; '.$button1_pad.'"><a href="'.$settings['hip-menu-cta1-link'].'" class="hip-nav-cta-btn" style="background: '.$settings['hip-menu-cta1-bgcolor'].'">'.$settings['hip-menu-cta1-text'].'</a></div></div><div class="hip-nav-cta-col" style="'.$button2.'"><div class="hip-nav-cta-pad" style="padding-right: 0; '.$button2_pad.'"><a href="'.$settings['hip-menu-cta2-link'].'" class="hip-nav-cta-btn" style="background: '.$settings['hip-menu-cta2-bgcolor'].'">'.$settings['hip-menu-cta2-text'].'</a></div></div></div>';
        }
	}

	protected function init_control() {
		add_action( 'elementor/frontend/widget/before_render', [ $this, 'before_render_element' ], 10, 1 );
		add_action( 'elementor/element/nav-menu/style_toggle/after_section_end', [ $this, 'register_controls' ], 10, 2 );
		//add_action( 'elementor/element/header/after_section_end', [ $this, 'cta_buttons' ] );
	}

}