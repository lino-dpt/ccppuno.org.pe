<?php

function d5corporate_customize_register($wp_customize){

    
    $wp_customize->add_section('d5corporate_options', array(
        'priority' 		=> 10,
		'capability'     => 'edit_theme_options',
		'title'    		=> __('CORPORATE OPTIONS', 'd5-corporate-lite'),
        'description'   => ' <div class="infohead">' . __('We appreciate an','d5-corporate-lite') . ' <a href="http://wordpress.org/support/view/theme-reviews/d5-corporate-lite" target="_blank">' . __('Honest Review','d5-corporate-lite') . '</a> ' . __('of this Theme if you Love our Work','d5-corporate-lite') . '<br /> <br />

' . __('Need More Features and Options including Exciting Slide and 100+ Advanced Features? Try ','d5-corporate-lite') . '<a href="' . esc_url('https://d5creation.com/theme/corporate/') .'
" target="_blank"><strong>' . __('CORPORATE Extend','d5-corporate-lite') . '</strong></a><br /> <br /> 
        
        
' . __('You can Visit the CORPORATE Extend ','d5-corporate-lite') . ' <a href="' . esc_url('http://demo.d5creation.com/themes/?theme=CORPORATE') .'" target="_blank"><strong>' . __('Demo Here','d5-corporate-lite') . '</strong></a> 
        </div>		
		'
    ));
	
	// Phone Number
    $wp_customize->add_setting('d5corporate[contactnumber]', array(
        'default'        	=> '',
        'capability'     	=> 'edit_theme_options',
    	'sanitize_callback' => 'esc_html',
        'type'           	=> 'option'

    ));

    $wp_customize->add_control('d5corporate_contactnumber' , array(
        'label'      => __('Contact Number', 'd5-corporate-lite'),
        'section'    => 'd5corporate_options',
        'settings'   => 'd5corporate[contactnumber]'
    ));
	
	// E-Mail or Extra
    $wp_customize->add_setting('d5corporate[extra-num]', array(
        'default'        	=> '',
        'capability'     	=> 'edit_theme_options',
    	'sanitize_callback' => 'esc_html',
        'type'           	=> 'option'

    ));

    $wp_customize->add_control('d5corporate_extra-num' , array(
        'label'      => __('E-Mail or Extra', 'd5-corporate-lite'),
        'section'    => 'd5corporate_options',
        'settings'   => 'd5corporate[extra-num]'
    ));
	
	
	//  Responsive Layout
    $wp_customize->add_setting('d5corporate[responsive]', array(
        'default'        	=> '1',
    	'sanitize_callback' => 'esc_html',
        'capability'     	=> 'edit_theme_options',
        'type'           	=> 'option'

    ));

    $wp_customize->add_control('d5corporate_responsive', array(
        'label'      => __('Use Responsive Layout', 'd5-corporate-lite'),
        'section'    => 'd5corporate_options',
        'settings'   => 'd5corporate[responsive]',
		'description' => __('Check the Box if you want the Responsive Layout of your Website','d5-corporate-lite'),
		'type' 		 => 'checkbox'
    ));	
	
	//  Front Page Post
    $wp_customize->add_setting('d5corporate[lpost]', array(
        'default'        	=> '1',
    	'sanitize_callback' => 'esc_html',
        'capability'     	=> 'edit_theme_options',
        'type'           	=> 'option'

    ));

    $wp_customize->add_control('d5corporate_lpost', array(
        'label'      => __('Display Page/Latest Posts', 'd5-corporate-lite'),
        'section'    => 'd5corporate_options',
        'settings'   => 'd5corporate[lpost]',
		'description' => __('Check here if you want to display the latest Posts in Front Page','d5-corporate-lite'),
		'type' 		 => 'checkbox'
    ));
	
	
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ //

 $wp_customize->add_section('d5corporate_slide', array(
        'priority' 			=> 11,
		'capability'     	=> 'edit_theme_options',
		'title'    			=> __('&nbsp;&nbsp;&nbsp;&nbsp; - Banner Image', 'd5-corporate-lite'),
        'description'  		=> ''
    ));
 
 	  
	//  Banner Image/ Slide Image
		
    $wp_customize->add_setting('d5corporate[banner-image]', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
    	'sanitize_callback' => 'esc_url',
        'type'           	=> 'option'
		

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'banner-image', array(
        'label'    			=> __('Front Page Banner Image', 'd5-corporate-lite'),
        'section'  			=> 'd5corporate_slide',
        'settings' 			=> 'd5corporate[banner-image]',
		'description'   	=> __('Upload an image for the Front Page Banner.1050px X 400px image is recommended', 'd5-corporate-lite')
		
    )));
	

// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ //

 $wp_customize->add_section('d5corporate_heading', array(
        'priority' 			=> 12,
		'capability'     	=> 'edit_theme_options',
		'title'    			=> __('&nbsp;&nbsp;&nbsp;&nbsp; - Heading Text', 'd5-corporate-lite'),
        'description'  		=> ''
    ));
	
	
// Front Page Heading
    $wp_customize->add_setting('d5corporate[heading_text]', array(
        'default'        	=> '',
        'capability'     	=> 'edit_theme_options',
    	'sanitize_callback' => 'esc_textarea',
        'type'           	=> 'option'

    ));

    $wp_customize->add_control('d5corporate_heading_text' , array(
        'label'      => __('Front Page Heading', 'd5-corporate-lite'),
        'section'    => 'd5corporate_heading',
        'settings'   => 'd5corporate[heading_text]'
    ));	
	
	
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ //

 $wp_customize->add_section('d5corporate_featured', array(
        'priority' 			=> 13,
		'capability'     	=> 'edit_theme_options',
		'title'    			=> __('&nbsp;&nbsp;&nbsp;&nbsp; - Featured Boxes', 'd5-corporate-lite'),
        'description'  		=> ''
    ));	
	

	foreach (range(1,4) as $fbsinumber) {
	  
//  Featured Image
    $wp_customize->add_setting('d5corporate[featured-image'. $fbsinumber .']', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
    	'sanitize_callback' => 'esc_url',
        'type'           	=> 'option'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'featured-image'. $fbsinumber, array(
        'label'    			=> __('Featured Image', 'd5-corporate-lite') . '-' . $fbsinumber,
        'section'  			=> 'd5corporate_featured',
        'settings' 			=> 'd5corporate[featured-image'. $fbsinumber .']',
		'description'   	=> __('Upload an image for the Featured Box. 220px X 100px image is recommended','d5-corporate-lite')
    )));
  
// Featured Image Title
    $wp_customize->add_setting('d5corporate[featured-title' . $fbsinumber . ']', array(
        'default'        	=> '',
        'capability'     	=> 'edit_theme_options',
    	'sanitize_callback' => 'esc_textarea',
        'type'           	=> 'option'

    ));

    $wp_customize->add_control('d5corporate_featured-title' . $fbsinumber, array(
        'label'      => __('Featured Title', 'd5-corporate-lite'). '-' . $fbsinumber,
        'section'    => 'd5corporate_featured',
        'settings'   => 'd5corporate[featured-title' . $fbsinumber .']'
    ));


// Featured Image Description
    $wp_customize->add_setting('d5corporate[featured-description' . $fbsinumber . ']', array(
        'default'        	=> '',
        'capability'     	=> 'edit_theme_options',
    	'sanitize_callback' => 'esc_textarea',
        'type'           	=> 'option'

    ));

    $wp_customize->add_control('d5corporate_featured-description' . $fbsinumber  , array(
        'label'      => __('Featured Description', 'd5-corporate-lite') . '-' . $fbsinumber,
        'section'    => 'd5corporate_featured',
        'settings'   => 'd5corporate[featured-description' . $fbsinumber .']',
		'type' 		 => 'textarea'
    ));
	
// Featured Links
    $wp_customize->add_setting('d5corporate[featured-link' . $fbsinumber . ']', array(
        'default'        	=> '',
        'capability'     	=> 'edit_theme_options',
    	'sanitize_callback' => 'esc_url',
        'type'           	=> 'option'

    ));

    $wp_customize->add_control('d5corporate_featured-link' . $fbsinumber  , array(
        'label'      => __('Featured Link', 'd5-corporate-lite') . '-' . $fbsinumber,
        'section'    => 'd5corporate_featured',
        'settings'   => 'd5corporate[featured-link' . $fbsinumber .']'
    ));
	
  }
	
  
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ //

 $wp_customize->add_section('d5corporate_quote', array(
        'priority' 			=> 14,
		'capability'     	=> 'edit_theme_options',
		'title'    			=> __('&nbsp;&nbsp;&nbsp;&nbsp; - Quote Text', 'd5-corporate-lite'),
        'description'  		=> ''
    ));	

	
 //  Quote Text
    $wp_customize->add_setting('d5corporate[bottom-quotation]', array(
        'default'        	=> '',
    	'sanitize_callback' => 'esc_textarea',
        'capability'     	=> 'edit_theme_options',
        'type'           	=> 'option'

    ));

    $wp_customize->add_control('d5corporate_bottom-quotation', array(
        'label'      => __('Quote Text', 'd5-corporate-lite'),
        'section'    => 'd5corporate_quote',
        'settings'   => 'd5corporate[bottom-quotation]',
		'type' 		 => 'textarea'
    )); 	

}

add_action('customize_register', 'd5corporate_customize_register');


	if ( ! function_exists( 'd5corporate_get_option' ) ) :
	function d5corporate_get_option( $d5corporate_name, $d5corporate_default = false ) {
	$d5corporate_config = get_option( 'd5corporate' );

	if ( ! isset( $d5corporate_config ) ) : return $d5corporate_default; else: $d5corporate_options = $d5corporate_config; endif;
	if ( isset( $d5corporate_options[$d5corporate_name] ) ):  return $d5corporate_options[$d5corporate_name]; else: return $d5corporate_default; endif;
	}
	endif;