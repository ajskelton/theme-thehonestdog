<?php
/**
 * The Honest Dog Theme Customizer.
 *
 * @package The Honest Dog
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function thehonestdog_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	// Add our social link options
    $wp_customize->add_section(
        'thehonestdog_social_links_section',
        array(
            'title'       => __( 'Social Links', 'thehonestdog' ),
            'description' => __( 'These are the settings for social links. Please limit the number of social links to 5.', 'thehonestdog' ),
            'priority'    => 90,
        )
    );

    // Create an array of our social links for ease of setup
    $social_networks = array( 'twitter', 'facebook', 'instagram' );

    // Loop through our networks to setup our fields
    foreach( $social_networks as $network ) {

	    $wp_customize->add_setting(
	        'thehonestdog_' . $network . '_link',
	        array(
	            'default' => '',
	            'sanitize_callback' => 'thehonestdog_sanitize_customizer_url'
	        )
	    );
	    $wp_customize->add_control(
	        'thehonestdog_' . $network . '_link',
	        array(
	            'label'   => sprintf( __( '%s Link', 'thehonestdog' ), ucwords( $network ) ),
	            'section' => 'thehonestdog_social_links_section',
	            'type'    => 'text',
	        )
	    );
    }

    // Add our Footer Customization section section
    $wp_customize->add_section(
        'thehonestdog_footer_section',
        array(
            'title'    => __( 'Footer Customization', 'thehonestdog' ),
            'priority' => 90,
        )
    );

    // Add our copyright text field
    $wp_customize->add_setting(
        'thehonestdog_copyright_text',
        array(
            'default'           => ''
        )
    );
    $wp_customize->add_control(
        'thehonestdog_copyright_text',
        array(
            'label'       => __( 'Copyright Text', 'thehonestdog' ),
            'description' => __( 'The copyright text will be displayed beneath the menu in the footer.', 'thehonestdog' ),
            'section'     => 'thehonestdog_footer_section',
            'type'        => 'text',
            'sanitize'    => 'html'
        )
    );
}
add_action( 'customize_register', 'thehonestdog_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function thehonestdog_customize_preview_js() {
	wp_enqueue_script( 'thehonestdog_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'thehonestdog_customize_preview_js' );

/**
 * Sanitize our customizer text inputs
 */
function thehonestdog_sanitize_customizer_text( $input ) {
    return sanitize_text_field( force_balance_tags( $input ) );
}

/**
 * Sanitize our customizer URL inputs
 */
function thehonestdog_sanitize_customizer_url( $input ) {
    return esc_url( $input );
}