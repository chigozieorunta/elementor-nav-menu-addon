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
			'hip-child-menu-bgcolor-hover',
			[
				'label' => __( 'Child Menu Background on Hover', 'hip' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .elementor-menu-toggle:hover' => 'background-color: {{VALUE}}',
				],
			]
		);

		$element->add_control(
			'hip-child-menu-txcolor',
			[
				'label' => __( 'Child Menu Text Color', 'hip' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .elementor-menu-toggle:hover' => 'background-color: {{VALUE}}',
				],
			]
		);

		$element->add_control(
			'hip-child-menu-txcolor-hover',
			[
				'label' => __( 'Child Menu Text Color on Hover', 'hip' ),
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
			'hip-menu-cta1-bgcolor-hover',
			[
				'label' => __( 'CTA 1 Background on Hover', 'hip' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .elementor-menu-toggle:hover' => 'background-color: {{VALUE}}',
				],
			]
		);

		$element->add_control(
			'hip-menu-cta1-txcolor',
			[
				'label' => __( 'CTA 1 Text Color', 'hip' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .elementor-menu-toggle:hover' => 'background-color: {{VALUE}}',
				],
			]
		);

		$element->add_control(
			'hip-menu-cta1-txcolor-hover',
			[
				'label' => __( 'CTA 1 Text Color on Hover', 'hip' ),
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

		$element->add_control(
			'hip-menu-cta2-bgcolor-hover',
			[
				'label' => __( 'CTA 2 Background on Hover', 'hip' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .elementor-menu-toggle:hover' => 'background-color: {{VALUE}}',
				],
			]
		);

		$element->add_control(
			'hip-menu-cta2-txcolor',
			[
				'label' => __( 'CTA 2 Text Color', 'hip' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .elementor-menu-toggle:hover' => 'background-color: {{VALUE}}',
				],
			]
		);

		$element->add_control(
			'hip-menu-cta2-txcolor-hover',
			[
				'label' => __( 'CTA 2 Text Color on Hover', 'hip' ),
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

        if (isset($settings['hip-child-menu-bgcolor'])) {
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

            //CSS Styling
			echo '<style>
				.elementor-menu-toggle {
					font-size: 200% !important;
				}
				ul.elementor-nav-menu--dropdown li a {
					background: '.$settings['hip-child-menu-bgcolor'].'; color: '.$settings['hip-child-menu-txcolor'].' !important;
				} 
				ul.elementor-nav-menu--dropdown li a:hover {
					border-left: 0; background: '.$settings['hip-child-menu-bgcolor-hover'].' !important; color: '.$settings['hip-child-menu-txcolor-hover'].' !important;
				}
				.hip-nav-cta {
					display: none;
				}
				@media only screen and (max-width: 1024px) {
					.elementor-menu-toggle, 
					.elementor-menu-toggle:hover {
						position: relative; z-index: 0; background: none !important;
					}
					ul.elementor-nav-menu li a {
						border-bottom: '.$hip_menu_border_width.'px solid '.$settings['hip-menu-border-color'].'; border-left: 0;
					}
					.hip-nav-cta {
						width: 100%; display: none; position: fixed; top: 0; left: 0; padding: 10px; background: #fff; transition: all 0.3s; z-index: 1;
					} 
					.hip-nav-cta-col {
						width: 50%; float: left;
					} 
					.hip-nav-cta-pad {
						padding: 0 10px;
					} 
					.hip-nav-cta-btn {
						display: block; padding: 0.5em; text-align: center; border-radius: 5px; background: orange; color: #fff;
					} 
					.cta-1 {
						background: '.$settings['hip-menu-cta1-bgcolor'].' !important; color: '.$settings['hip-menu-cta1-txcolor'].' !important;
					} 
					.cta-2 {
						background: '.$settings['hip-menu-cta2-bgcolor'].' !important; color: '.$settings['hip-menu-cta2-txcolor'].' !important;
					} 
					.cta-1:hover {
						background: '.$settings['hip-menu-cta1-bgcolor-hover'].' !important; color: '.$settings['hip-menu-cta1-txcolor-hover'].' !important;
					} 
					.cta-2:hover {
						background: '.$settings['hip-menu-cta2-bgcolor-hover'].' !important; color: '.$settings['hip-menu-cta2-txcolor-hover'].' !important;
					}
					'.$hip_menu_fullscreen.' 
				}
			</style>';

            //CTA Fix for display & padding (depending on whether 1 or 2 buttons are selected)
            $button1 = ''; $button1_pad = '';
            $button2 = ''; $button2_pad = '';
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
			
			//CTA HTML (Front End)
			if($settings['hip-menu-cta1-text'] || $settings['hip-menu-cta2-text']) {
				echo '<div class="hip-nav-cta">
						<div class="hip-nav-cta-col" style="'.$button1.'">
							<div class="hip-nav-cta-pad" style="padding-left: 0; '.$button1_pad.'">
								<a href="'.$settings['hip-menu-cta1-link'].'" class="hip-nav-cta-btn cta-1">'.$settings['hip-menu-cta1-text'].'</a>
							</div>
						</div>
						<div class="hip-nav-cta-col" style="'.$button2.'">
							<div class="hip-nav-cta-pad" style="padding-right: 0; '.$button2_pad.'">
								<a href="'.$settings['hip-menu-cta2-link'].'" class="hip-nav-cta-btn cta-2">'.$settings['hip-menu-cta2-text'].'</a>
							</div>
						</div>
					</div>';
			} else {
				echo '';
			}
			
			//CTA Script (Position right underneath the toggle)
			echo '<script type="text/javascript">
				(function($) {
					var top = 0;
					$(document).ready(function() {
						var position = $( ".elementor-menu-toggle" ).offset();
						top = position.top + 61;
						var left = 0;
						$(".hip-nav-cta").css("top", top);
						$(".hip-nav-cta").css("left", left);
						$(".hip-nav-cta").css("position", "fixed");
						$(".hip-nav-cta").css("transition", "all 0.3s");
  						if($( window ).width() > 1024) {
							$(".hip-nav-cta").css("display", "none"); 
						} else {
							$(".hip-nav-cta").css("display", "block");
						}
					})
					$(document).scroll(function() { 
						scroll_start = $(this).scrollTop();
						if(scroll_start > top) {
							$(".hip-nav-cta").css("top", "0");
						}
					});
					$( window ).resize(function() {
  						if($( window ).width() > 1024) {
							$(".hip-nav-cta").css("display", "none"); 
						} else {
							$(".hip-nav-cta").css("display", "block");
						}
					});
				})(jQuery);
			</script>';
		}
	}

	protected function init_control() {
		add_action( 'elementor/frontend/widget/before_render', [ $this, 'before_render_element' ], 10, 1 );
		add_action( 'elementor/element/nav-menu/style_toggle/after_section_end', [ $this, 'register_controls' ], 10, 2 );
	}

}