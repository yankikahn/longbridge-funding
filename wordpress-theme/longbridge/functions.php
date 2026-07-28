<?php
/**
 * Longbridge Funding theme functions.
 *
 * @package Longbridge
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // No direct access.
}

/**
 * Theme setup.
 */
function longbridge_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'responsive-embeds' );
}
add_action( 'after_setup_theme', 'longbridge_setup' );

/**
 * Enqueue fonts, styles, and scripts.
 */
function longbridge_assets() {
	$version = wp_get_theme()->get( 'Version' );

	// Google Fonts: Fraunces (display) + Hanken Grotesk (body).
	wp_enqueue_style(
		'longbridge-fonts',
		'https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,500;0,9..144,600;1,9..144,400&family=Hanken+Grotesk:wght@400;500;600;700&display=swap',
		array(),
		null
	);

	// Main stylesheet (this theme's style.css).
	wp_enqueue_style( 'longbridge-style', get_stylesheet_uri(), array( 'longbridge-fonts' ), $version );

	// Interactions: theme toggle, scroll reveal, form confirmation.
	wp_enqueue_script( 'longbridge-main', get_template_directory_uri() . '/assets/main.js', array(), $version, true );
}
add_action( 'wp_enqueue_scripts', 'longbridge_assets' );

/**
 * Customizer: let the site owner edit phone + email without touching code.
 * Appearance -> Customize -> "Longbridge - Contact Info".
 */
function longbridge_customize_register( $wp_customize ) {
	$wp_customize->add_section(
		'longbridge_contact',
		array(
			'title'    => __( 'Longbridge - Contact Info', 'longbridge' ),
			'priority' => 30,
		)
	);

	$wp_customize->add_setting(
		'longbridge_phone',
		array(
			'default'           => '(800) 555-1234',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'longbridge_phone',
		array(
			'label'   => __( 'Phone number', 'longbridge' ),
			'section' => 'longbridge_contact',
			'type'    => 'text',
		)
	);

	$wp_customize->add_setting(
		'longbridge_email',
		array(
			'default'           => 'hello@longbridgefunding.com',
			'sanitize_callback' => 'sanitize_email',
		)
	);
	$wp_customize->add_control(
		'longbridge_email',
		array(
			'label'   => __( 'Email address', 'longbridge' ),
			'section' => 'longbridge_contact',
			'type'    => 'email',
		)
	);
}
add_action( 'customize_register', 'longbridge_customize_register' );
