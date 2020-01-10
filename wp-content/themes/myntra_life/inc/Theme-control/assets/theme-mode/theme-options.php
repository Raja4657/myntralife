<?php
/**
 * Initialize the custom Theme Options.
 */
add_action( 'init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 *
 * @return    void
 * @since     2.0
 */
function custom_theme_options() {

  /* OptionTree is not loaded yet, or this is not an admin request */
  if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() )
    return false;

  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( ot_settings_id(), array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'content'       => array( 
        array(
          'id'        => 'option_types_help',
          'title'     => __( 'Option Types', 'myntra' ),
          'content'   => '<p>' . __( 'Help content goes here!', 'myntra' ) . '</p>'
        )
      ),
      'sidebar'       => '<p>' . __( 'Sidebar content goes here!', 'myntra' ) . '</p>'
    ),
	
	//Option Section
	
    'sections'        => array( 
    
      
      array(
            'id'  => 'myntra_urls',
            'title' => __( 'Myntra URLs', 'myntra' ),

            ),
      /*  array(
            'id'  => 'project',
            'title' => __( 'Myntra Social Links', 'myntra' ),
            
        ),*/
    		
    ),
	
	//Option Settings & Header section
	
    'settings'        => array( 
    
    //Domain Tab
     array(
    		'id' => 'myntra_urls',
    		'label' => 'Myntra Domain URLs',
    		'type' => 'tab',
    		'section' => 'myntra_urls'
    ),

    
     array(
        'id'          => 'career_url',
        'label'       => __( 'Myntra Career Domain', 'myntra' ),
		'desc'        => 'Ex: https://career.myntra.com',
        'type'        => 'text',
        'section'     => 'myntra_urls',
      ),
        array(
            'id'          => 'blog_url',
            'label'       => __( 'Myntra Blogs Domain', 'myntra' ),
            'desc'        => 'Ex: https://blog.myntra.com',
            'type'        => 'text',
            'section'     => 'myntra_urls',
        ),
	  
        //Social links Tab
        
        array(
            'id' => 'myntra_social',
            'label' => 'Social Links',
            'type' => 'tab',
            'section' => 'myntra_urls'
        ),
        array(
            'id' => 'facebook_url',
            'label' => 'Facebook URL',
            'type' => 'text',
            'section' => 'myntra_urls'
        ),
        array(
            'id' => 'linkedin_url',
            'label' => 'LinkedIn URL',
            'type' => 'text',
            'section' => 'myntra_urls'
        ),
        array(
            'id' => 'youtube_url',
            'label' => 'Youtube URL',
            'type' => 'text',
            'section' => 'myntra_urls'
        ),
        array(
            'id' => 'insta_url',
            'label' => 'Instagram URL',
            'type' => 'text',
            'section' => 'myntra_urls'
        ),
        array(
            'id' => 'twitter_url',
            'label' => 'Twitter URL',
            'type' => 'text',
            'section' => 'myntra_urls'
        ),
        
      
        //API Keys
        array(
            'id' => 'myntra_api',
            'label' => 'Myntra API Keys',
            'type' => 'tab',
            'section' => 'myntra_urls'
        ),
        
        
        array(
            'id'          => 'myntra_greenhouse_api',
            'label'       => __( 'Myntra Green House Key', 'myntra' ),
            'type'        => 'text',
            'section'     => 'myntra_urls',
        ),
      
        
    ),
      
      
  );
  
  
   	
  
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( ot_settings_id(), $custom_settings ); 
  }
  
  /* Lets OptionTree know the UI Builder is being overridden */
  global $ot_has_custom_theme_options;
  $ot_has_custom_theme_options = true;
  
}