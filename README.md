# Elementor Nav Menu Addon

A simple plugin to extend your Elementor Pro Nav Menu.

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

## Development

This repository includes a WordPress development environment based on [Docker](https://docs.docker.com/install/) that can be run on your computer or inside a [Vagrant](https://www.vagrantup.com/) and [VirtualBox](https://www.virtualbox.org/) wrapper for network isolation and simple `.local` domain names.

1. Clone the plugin repository.

2. Setup the development environment and tools using [Node.js](https://nodejs.org) and [Composer](https://getcomposer.org):

```
npm install
```

Note that both Node.js and PHP 7.2 or later are required on your computer for running the `npm` scripts. Use `npm run docker -- npm install` to run the installer inside a Docker container if you don't have the required version of PHP installed locally.

3. To use the Vagrant based environment, run:

```
vagrant up
```

which will make it available at [slack-bot.local](http://enma.local).

Use the included wrapper command for running scripts inside the Docker container running inside Vagrant:

```
npm run vagrant -- npm run test:php
```

where `npm run test:php` is any of the scripts you would like to run.

Visit [enma.local:8025](http://enma.local:8025) to check all emails sent by WordPress.
