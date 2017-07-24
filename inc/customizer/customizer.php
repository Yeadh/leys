<?php
/**
 * presley Theme Customizer
 *
 * @package presley
 */

function presley_customizer( $wp_customize ) {
	$wp_customize->add_panel( 'presley_hero', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Home Setting', 'presley' ),
		) 
	);
	
	/*Start Home Hero Image*/
	
	$wp_customize->add_section('presley_home_hero', array(
		'title' => 'Home Hero',
		'description' => 'Upload Hero Image.',
		'priority' => 10,
		'panel' => 'presley_hero',
		)
	);
	
	$wp_customize->add_setting('presley_homehero_image', array(
			'sanitize_callback'	=> 'esc_url_raw',
			'transport'		=> 'postMessage'
		)
    );
	
	$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,'presley_homehero_bg_img',array(
               'label'      => __( 'Upload a Image', 'presley' ),
               'section'    => 'presley_home_hero',
               'settings'   => 'presley_homehero_image',
               'context'    => 'your_setting_context' 
           )
       )
   );
   /*End Home Hero Image*/
   
	/*Start Home Hero Title*/
	$wp_customize->add_setting('presley_homehero_text', array(
            'default' => 'presley TRUE MINIMAL THEME',
			'sanitize_callback' => 'home_hero_title'
        )
    );
	
	 function home_hero_title( $text ) {
		return sanitize_text_field( $text );
	 }
	 
	
	$wp_customize->add_control('home_herotitle', array(
			'label'    => __( 'Hero Title Text ', 'presley' ),
			'section'  => 'presley_home_hero',
			'settings' => 'presley_homehero_text',
			'type'     => 'text',
		)
	);
	/*End Home Hero Title*/
	
	/*Start Home Hero Sub Title*/
	$wp_customize->add_setting('presley_homehero_services', array(
            'default' => 'DESIGN | DEVELOPMENT | BRANDING',
			'sanitize_callback' => 'home_hero_services'
        )
    );
	
	 function home_hero_services( $text ) {
		return sanitize_text_field( $text );
	 }
	 
	
	$wp_customize->add_control('home_heroservices', array(
			'label'    => __( 'Hero Sub-Title ', 'presley' ),
			'section'  => 'presley_home_hero',
			'settings' => 'presley_homehero_services',
			'type'     => 'text',
		)
	);
	/*End Home Hero Sub Title*/
	
	/*Start Home Hero discription*/
	
	$wp_customize->add_setting('presley_homehero_discription', array(
            'default' => 'Learn how to balance your city job with nature',
			'sanitize_callback' => 'home_hero_discription'
        )
    );
	
	 function home_hero_discription( $text ) {
		return sanitize_text_field( $text );
	 }
	 
	
	$wp_customize->add_control('home_herodiscription', array(
			'label'    => __( 'Hero Discription ', 'presley' ),
			'section'  => 'presley_home_hero',
			'settings' => 'presley_homehero_discription',
			'type'     => 'text',
		)
	);
	/*End Home Hero discription*/
	
	/*Start Home Hero button Text*/
	
	$wp_customize->add_setting('presley_homehero_button_text', array(
            'default' => 'Read More',
			'sanitize_callback' => 'home_hero_button_text'
        )
    );
	
	 function home_hero_button_text( $text ) {
		return sanitize_text_field( $text );
	 }
	 
	
	$wp_customize->add_control('home_herobutton_text', array(
			'label'    => __( 'Button Text ', 'presley' ),
			'section'  => 'presley_home_hero',
			'settings' => 'presley_homehero_button_text',
			'type'     => 'text',
		)
	);
	/*End Home Hero button Text*/
	
	/*Start Home Hero button URL*/
	
	$wp_customize->add_setting('presley_homehero_button_url', array(
            'default' => '#',
			'sanitize_callback' => 'home_hero_button_url'
        )
    );
	
	 function home_hero_button_url( $text ) {
		return sanitize_text_field( $text );
	 }
	 
	
	$wp_customize->add_control('home_herobutton_url', array(
			'label'    => __( 'Button URL ', 'presley' ),
			'section'  => 'presley_home_hero',
			'settings' => 'presley_homehero_button_url',
			'type'     => 'text',
		)
	);
	/*End Home Hero button URL*/
	
		/*
			*
			*Start HomePage About Section /Image
			*
			*
		*/
	
	$wp_customize->add_section('presley_home_about', array(
		'title' => 'Home About section',
		'priority' => 20,
		'panel' => 'presley_hero',
		)
	);
	
	$wp_customize->add_setting('presley_homeabout_image', array(
			'sanitize_callback'	=> 'esc_url_raw',
			'transport'		=> 'postMessage'
		)
    );
	
	$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,'presley_homeabout_image',array(
               'label'      => __( 'Upload Your Image', 'presley' ),
               'section'    => 'presley_home_about',
               'settings'   => 'presley_homeabout_image',
               'context'    => 'your_setting_context' 
           )
       )
   );
	/*End HomePage About Image*/
	
	/*Start HomePage About who are you*/
	
	$wp_customize->add_setting('presley_who_are_you', array(
            'default' => 'I AM A PASSIONATE DESIGNER',
			'sanitize_callback' => 'home_who_are_you'
        )
    );
	
	 function home_who_are_you( $text ) {
		return sanitize_text_field( $text );
	 }
	 
	
	$wp_customize->add_control('presley_who_are_you', array(
			'label'    => __( 'Button Text ', 'presley' ),
			'section'  => 'presley_home_about',
			'settings' => 'presley_who_are_you',
			'type'     => 'text',
		)
	);
	/*End HomePage About who are you?*/
	
	/*Start Home About what u do?*/
	
	$wp_customize->add_setting('presley_homeabout_whatudo', array(
            'default' => 'WE TRY TO PROVIDE BEST SERVICE',
			'sanitize_callback' => 'home_about_whatudo'
        )
    );
	
	 function home_about_whatudo( $text ) {
		return sanitize_text_field( $text );
	 }
	 
	
	$wp_customize->add_control('presley_homeabout_whatudo', array(
			'label'    => __( 'Button URL ', 'presley' ),
			'section'  => 'presley_home_about',
			'settings' => 'presley_homeabout_whatudo',
			'type'     => 'text',
		)
	);
	/*End Home About what u do?*/
	
	
	/*Start HomePage About content*/
	
	$wp_customize->add_setting( 'presley_textarea_setting_id', array(
	  'capability' => 'edit_theme_options',
	  'default' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the, when an unknown printer took a galley',
	  'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'presley_textarea_setting_id', array(
	  'type' => 'textarea',
	  'section' => 'presley_home_about',
	  'settings' => 'presley_textarea_setting_id',
	  'label' => __( 'Custom Text Area' ),
	  'description' => __( 'This is a custom textarea.' ),
	) );
	/*End HomePage About content*/


/*
	*
	*Start portfolio Panel
	*
*/
	$wp_customize->add_panel( 'presley_portfolio_panel', array(
		'priority' => 20,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Portfolio Setting', 'presley' ),
		) 
	);
	
	/*Start portfolio Hero Image*/
	
	$wp_customize->add_section('presley_portfolio_hero', array(
		'title' => 'Portfolio Hero',
		'description' => 'Upload Hero Image.',
		'priority' => 30,
		'panel' => 'presley_portfolio_panel',
		)
	);
	$wp_customize->add_setting('presley_portfoliohero_image', array(
			'sanitize_callback'	=> 'esc_url_raw',
			'transport'		=> 'postMessage'
		)
    );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,'presley_portfoliohero_image',array(
				'settings'		=> 'presley_portfoliohero_image',
				'section'		=> 'presley_portfolio_hero',
				'label'			=> __( 'portfolio Hero Background Image', 'presley' ),
				'description'	=> __( 'Select the image to be used for portfolio Hero Background.', 'presley' )
			)
		)
	);
   /*End portfolio Hero Image*/
   
   
	/*Start portfolio Hero Title*/
	$wp_customize->add_setting('presley_portfoliohero_text', array(
            'default' => 'HERE IS OUR LATEST WORKS',
			'sanitize_callback' => 'portfolio_hero_title'
        )
    );
	
	 function portfolio_hero_title( $text ) {
		return sanitize_text_field( $text );
	 }
	 
	
	$wp_customize->add_control('presley_portfoliohero_text', array(
			'label'    => __( 'Hero Title Text ', 'presley' ),
			'section'  => 'presley_portfolio_hero',
			'settings' => 'presley_portfoliohero_text',
			'type'     => 'text',
		)
	);
	/*End portfolio Hero Title*/
	
	
/*
	*
	*Start Footer section
	*
*/
	
	$wp_customize->add_section('presley_Footer_setting', array(
		'title' => 'Footer Setting',
		'priority' => 30,
		)
	);
	
	$wp_customize->add_setting('footer_text', array(
            'default' => 'Copyright © 2017 PRESLEY. All Rights Reserved. Designed by Pressionate.',
			'sanitize_callback' => 'presley_footer_text'
        )
    );
	 function presley_footer_text( $text ) {
		return sanitize_text_field( $text );
	 }
	$wp_customize->add_control('footer_text', array(
			'label'    => __( 'Copy Right', 'presley' ),
			'section'  => 'presley_Footer_setting',
			'settings' => 'footer_text',
			'type'     => 'text',
		)
	);
	
	$wp_customize->add_setting('facebook_link', array(
            'default' => '#',
			'sanitize_callback' => 'footer_facebook_link'
        )
    );
	 function footer_facebook_link( $text ) {
		return sanitize_text_field( $text );
	 }
	$wp_customize->add_control('facebook_link', array(
			'label'    => __( 'Facebook ID', 'presley' ),
			'section'  => 'presley_Footer_setting',
			'settings' => 'facebook_link',
			'type'     => 'text',
		)
	);
	
	$wp_customize->add_setting('twitter_link', array(
            'default' => '#',
			'sanitize_callback' => 'footer_twitter_link'
        )
    );
	 function footer_twitter_link( $text ) {
		return sanitize_text_field( $text );
	 }
	$wp_customize->add_control('twitter_link', array(
			'label'    => __( 'Twitter ID', 'presley' ),
			'section'  => 'presley_Footer_setting',
			'settings' => 'twitter_link',
			'type'     => 'text',
		)
	);
	
	$wp_customize->add_setting('google_plus_link', array(
            'default' => '#',
			'sanitize_callback' => 'footer_google_plus_link'
        )
    );
	 function footer_google_plus_link( $text ) {
		return sanitize_text_field( $text );
	 }
	$wp_customize->add_control('google_plus_link', array(
			'label'    => __( 'Google Plus ID', 'presley' ),
			'section'  => 'presley_Footer_setting',
			'settings' => 'google_plus_link',
			'type'     => 'text',
		)
	);
	
	$wp_customize->add_setting('youtube_link', array(
            'default' => '#',
			'sanitize_callback' => 'footer_youtube_link'
        )
    );
	 function footer_youtube_link( $text ) {
		return sanitize_text_field( $text );
	 }
	$wp_customize->add_control('youtube_link', array(
			'label'    => __( 'Youtube ID', 'presley' ),
			'section'  => 'presley_Footer_setting',
			'settings' => 'youtube_link',
			'type'     => 'text',
		)
	);
	
	$wp_customize->add_setting('instagram_link', array(
            'default' => '#',
			'sanitize_callback' => 'footer_instagram_link'
        )
    );
	 function footer_instagram_link( $text ) {
		return sanitize_text_field( $text );
	 }
	$wp_customize->add_control('instagram_link', array(
			'label'    => __( 'Instagram ID', 'presley' ),
			'section'  => 'presley_Footer_setting',
			'settings' => 'instagram_link',
			'type'     => 'text',
		)
	);
	
	$wp_customize->add_setting('dribble_link', array(
            'default' => '#',
			'sanitize_callback' => 'footer_dribble_link'
        )
    );
	 function footer_dribble_link( $text ) {
		return sanitize_text_field( $text );
	 }
	$wp_customize->add_control('dribble_link', array(
			'label'    => __( 'Dribble ID', 'presley' ),
			'section'  => 'presley_Footer_setting',
			'settings' => 'dribble_link',
			'type'     => 'text',
		)
	);
	
	/*End Footer*/
	
/*
	*
	*Start Contact section
	*
*/
	
	$wp_customize->add_section('presley_contact_setting', array(
		'title' => 'Contact Setting',
		'priority' => 30,
		)
	);
	//email
	$wp_customize->add_setting( 'presley_contact_email', array(
	  'capability' => 'edit_theme_options',
	  'default' => 'info@yoursite.com',
	  'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'presley_contact_email', array(
	  'type' => 'textarea',
	  'section' => 'presley_contact_setting',
	  'settings' => 'presley_contact_email',
	  'label' => __( 'Custom Text Area' ),
	  'description' => __( 'Add Your Email ID.' ),
	) );
	//phone
	$wp_customize->add_setting( 'presley_contact_phone', array(
	  'capability' => 'edit_theme_options',
	  'default' => '+1 23456-67890',
	  'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'presley_contact_phone', array(
	  'type' => 'textarea',
	  'section' => 'presley_contact_setting',
	  'settings' => 'presley_contact_phone',
	  'label' => __( 'Custom Text Area' ),
	  'description' => __( 'This is a custom textarea.' ),
	) );
	
	//Address
	$wp_customize->add_setting( 'presley_contact_address', array(
	  'capability' => 'edit_theme_options',
	  'default' => 'Upper Level, Overseas Passanger
					Terminal, The Rocks, Sydney 2000',
	  'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'presley_contact_address', array(
	  'type' => 'textarea',
	  'section' => 'presley_contact_setting',
	  'settings' => 'presley_contact_address',
	  'label' => __( 'Custom Text Area' ),
	  'description' => __( 'This is a custom textarea.' ),
	) );
	
	//Contact form shortcode

	$wp_customize->add_setting('presley_contact_shortcode', array(
            'default' => '',
			'sanitize_callback' => 'contact_shortcode'
        )
    );
	 function contact_shortcode( $text ) {
		return sanitize_text_field( $text );
	 }
	$wp_customize->add_control('presley_contact_shortcode', array(
			'label'    => __( 'Shortcode', 'presley' ),
			'section'  => 'presley_contact_setting',
			'settings' => 'presley_contact_shortcode',
			'type'     => 'text',
		)
	);
	
	/*End contact*/
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	/*
		*
		*Start blog Panel
		*
	*/
	$wp_customize->add_panel( 'presley_blog_panel', array(
		'priority' => 30,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Blog Setting', 'presley' ),
		) 
	);
	/*Start blog Hero Image*/
	$wp_customize->add_section('presley_blog_hero', array(
		'title' => 'Blog Hero',
		'description' => 'Upload Hero Image.',
		'priority' => 30,
		'panel' => 'presley_blog_panel',
		)
	);
	$wp_customize->add_setting('presley_bloghero_image', array(
			'sanitize_callback'	=> 'esc_url_raw',
			'transport'		=> 'postMessage'
		)
    );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,'presley_hero_bg_img',array(
				'settings'		=> 'presley_bloghero_image',
				'section'		=> 'presley_blog_hero',
				'label'			=> __( 'Blog Hero Background Image', 'presley' ),
				'description'	=> __( 'Select the image to be used for Blog Hero Background.', 'presley' )
			)
		)
	);
   /*End blog Hero Image*/
   
   
	/*Start blog Hero Title*/
	$wp_customize->add_setting('presley_bloghero_text', array(
            'default' => 'HERE IS OUR LATEST WORKS',
			'sanitize_callback' => 'blog_hero_title'
        )
    );
	
	 function blog_hero_title( $text ) {
		return sanitize_text_field( $text );
	 }
	 
	
	$wp_customize->add_control('blog_herotitle', array(
			'label'    => __( 'Hero Title Text ', 'presley' ),
			'section'  => 'presley_blog_hero',
			'settings' => 'presley_bloghero_text',
			'type'     => 'text',
		)
	);
	/*End blog Hero Title*/

}
add_action( 'customize_register', 'presley_customizer' );
