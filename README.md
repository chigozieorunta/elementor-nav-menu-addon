# Nav Menu Addon For Elementor Pro

A simple list of mobile menu options targeted at giving you control over Elementor Pro's navigation menu.

## Controls

<ul>
    <li>Parent Menu Border Width</li>
    <li>Parent Menu Border Color</li>
    <li>Child Menu Text Color</li>
    <li>Child Menu Text Color on Hover</li>
    <li>Child Menu Background Color</li>
    <li>Child Menu Background Color on Hover</li>
    <li>Menu FullScreen Option (Yes/No)</li>
    <li>CTA 1 Button Text</li>
    <li>CTA 1 Button Link</li>
    <li>CTA 1 Button Text Color</li>
    <li>CTA 1 Button Text Color on Hover</li>
    <li>CTA 1 Button Background Color</li>
    <li>CTA 1 Button Background Color on Hover</li>
    <li>CTA 2 Button Text</li>
    <li>CTA 2 Button Link</li>
    <li>CTA 2 Button Text Color</li>
    <li>CTA 2 Button Text Color on Hover</li>
    <li>CTA 2 Button Background Color</li>
    <li>CTA 2 Button Background Color on Hover</li>
</ul>

## Extensions

You can extend the addon functionality further by adding in your own controls and specifying the selectors responsible for re-rendering on the preview mode. Use the register_controls method for this. For e.g.

```
public function register_controls( $element, $args ) {
		$element->add_control(
			'myColor',
			[
				'label' => __( 'My Color', 'hip' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} myCSS Selector' => 'color: {{VALUE}}',
				],
			]
		);
 }
 ```
