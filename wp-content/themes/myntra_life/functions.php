<?php

/**
 * Hexaware functions and definitions
*
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
* @package WordPress
* @subpackage Twenty_Nineteen
* @since 1.0.0
*/
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );
/**
 * Hexaware only works in WordPress 4.7 or later.
*/
if ( version_compare( $GLOBALS['wp_version'], '4.7', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 1568, 9999 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
*/

/**
 * Enqueue scripts and styles.
*/

/**
 * Enhance the theme by hooking into WordPress.
*/
require get_template_directory() . '/inc/template-functions.php';

/**
 * SVG Icons related functions.
 */
require get_template_directory() . '/inc/icon-functions.php';

/**
 * Custom template tags for the theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


/**
 * SVG Icons class.
 */

add_filter( 'ot_show_pages','__return_false' );
add_filter( 'ot_show_new_layout','__return_false' );
add_filter( 'ot_theme_mode','__return_true' );


include_once( 'inc/Theme-control/ot-loader.php' );
include_once( 'inc/Theme-control/assets/theme-mode/theme-options.php' );


//include_once( 'inc/custom-post-type-blogs.php' );
include_once ('inc/custom-post-type-life_myntra.php');







add_action( 'init', 'create_blogs_taxonomies', 0 );
function create_blogs_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	/* $labels = array(
			'name'              => _x( 'Blogs Categories', 'Myntra' ),
			'singular_name'     => _x( 'Blogs Category', 'Myntra' ),
			'search_items'      => __( 'Search Blogs Category', 'Myntra' ),
			'all_items'         => __( 'All Blogs Category', 'Myntra' ),
			'parent_item'       => __( 'Parent Blogs Category', 'Myntra' ),
			'parent_item_colon' => __( 'Parent Blogs Category:', 'Myntra' ),
			'edit_item'         => __( 'Edit Blogs Category', 'Myntra' ),
			'update_item'       => __( 'Update Blogs Category', 'Myntra' ),
			'add_new_item'      => __( 'Add New Blogs Category', 'Myntra' ),
			'new_item_name'     => __( 'New Blogs Category Name', 'Myntra' ),
			'menu_name'         => __( 'Blogs Category', 'Myntra' ),
	);

	$rewrite = array(
			'slug'                       => 'Blogs Category',
			'with_front'                 => true,
			'hierarchical'               => false,
	);
	$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
			'rewrite'                    => $rewrite,
	);


	// create two taxonomies, genres and writers for the post type "book"
	register_taxonomy( 'blogs_category', array( 'blogs' ) , $args ); */
	
	
	
/*  *******************  JOBs Categories  ***************************** */

	$labels = array(
			'name'              => _x( 'Categories', 'Myntra' ),
			'singular_name'     => _x( 'Category', 'Myntra' ),
			'search_items'      => __( 'Search Category', 'Myntra' ),
			'all_items'         => __( 'All Category', 'Myntra' ),
			'parent_item'       => __( 'Parent Category', 'Myntra' ),
			'parent_item_colon' => __( 'Parent Category:', 'Myntra' ),
			'edit_item'         => __( 'Edit Category', 'Myntra' ),
			'update_item'       => __( 'Update Category', 'Myntra' ),
			'add_new_item'      => __( 'Add New Category', 'Myntra' ),
			'new_item_name'     => __( 'New Category Name', 'Myntra' ),
			'menu_name'         => __( 'Category', 'Myntra' ),
	);
	
	$rewrite = array(
			'slug'                       => 'Life_myntra Category',
			'with_front'                 => true,
			'hierarchical'               => false,
	);
	$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
			'rewrite'                    => $rewrite,
	);
	
	
	// create two taxonomies, genres and writers for the post type "book"
	register_taxonomy( 'life_category', array( 'life_myntra' ) , $args );
	/*  ******************* end *** JOBs Categories  ***************************** */

}
/* +++++++++++++++++++++ */


add_filter( 'rest_endpoints', function( $endpoints ){
    if ( isset( $endpoints['/wp/v2/users'] ) ) {
        unset( $endpoints['/wp/v2/users'] );
    }
    if ( isset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] ) ) {
        unset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] );
    }
    return $endpoints;
});



function wpb_total_posts() {
    $total = wp_count_posts()->publish;
    return $total;
} 
add_shortcode('total_posts','wpb_total_posts');

/* +++++++++++++++++++++ */
add_action('wp_ajax_load_posts_by_ajax', 'load_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_by_ajax_callback');
//function to load more post types
add_action( 'wp_enqueue_scripts', 'load_more_script_and_styles', 1 );

function load_more_script_and_styles() {
    global $wp_query;
    
    // register our main script but do not enqueue it yet
    //wp_register_script( 'loadmore_scripts', get_template_directory_uri() . '/js/loadmore.js', array('jquery'), time() );
    // now the most interesting part
    // we have to pass parameters to myloadmore.js script but we can get the parameters values only in PHP
    // you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
    wp_localize_script( 'loadmore_scripts', 'loadmore_params', array(
        'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
        'posts' => serialize( $wp_query->query_vars ), // everything about your loop is here
        'current_page' => $wp_query->query_vars['paged'] ? $wp_query->query_vars['paged'] : 1,
        'max_page' => $wp_query->max_num_pages
    ) );
    
    wp_enqueue_script( 'loadmore_scripts' );
}
/* +++++++++++++++++++++ */
function load_posts_by_ajax_callback() {
    
    
    $paged = $_POST['page'];
    $category=$_POST['category'];
    check_ajax_referer('load_more_posts', 'security');
    $offset=0;
    $gallary_id=1;
   echo "####";
   $the_query=new WP_Query(array('post_type' => 'life_myntra','posts_per_page'=>'10','paged' => $paged,'post_status' => 'publish',));
                  		while($the_query->have_posts() ) : $the_query->the_post(); 	{
						$video_link=get_field("lifemyntravideo");
                  		?>
                  		<?php if($video_link!=""){?>
                    <div class="col-sm-4">
                      <div class="gallery-content__box video" href="#" data-index="gallery<?php echo $gallary_id?>" data-toggle="modal" data-target="#gallery-modal">
                        <div style="background-image: url('<?php echo get_field('lifemyntraimage')?>')"></div><?php   
				     				$category_list=get_the_terms($id, "life_category");
				     				foreach ( $category_list as $category_names ) {
				     					$category_name1=$category_names->name;
                     		 ?>
                        <span data-link="<?php echo strtolower($category_name1)?>-content">#<?php echo $category_name1;?></span><?php }?>
                      </div>
                    </div>
                    <?php }else{?>
                    
                    <div class="col-sm-4">
                      <div class="gallery-content__box" href="#" data-index="gallery<?php echo $gallary_id?>" data-toggle="modal" data-target="#gallery-modal">
                        <div class="gallery-content__image" style="background-image: url('<?php echo get_field('lifemyntraimage')?>')"></div><?php   
				     				$category_list=get_the_terms($id, "life_category");
				     				foreach ( $category_list as $category_names ) {
				     					$category_name1=$category_names->name;
                     		 ?>
                        <span data-link="<?php echo strtolower($category_name1)?>-content">#<?php echo $category_name1;?></span><?php }?>
                      </div>
                    </div>
                    
                   <?php }$gallary_id++;}endwhile;wp_reset_query();
                   echo "####";
                    $gallary_pop_id=1;
                    $the_query=new WP_Query(array('post_type' => 'life_myntra','posts_per_page'=>'10','paged' => $paged,'post_status' => 'publish',));
                   while($the_query->have_posts() ) : $the_query->the_post(); 	{
                       $video_link=get_field("lifemyntravideo");
                       if($video_link!=""){
                           ?>
                    <div class="swiper-slide" data-slide="gallery<?php echo $gallary_pop_id?>">
                      <div class="leader-slider__box gallery-modal__box">
                        <div class="embed-responsive embed-responsive-16by9">
                          <iframe class="embed-responsive-item" id="video" data-src="<?php echo $video_link?>" allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                        <div class="leader-slider__popcontent">
                          <p><?php echo the_content()?></p>
                          <a href="#">Read more</a>
                        </div>
                      </div>
                    </div>
                    <?php }else{?>
                    <div class="swiper-slide" data-slide="gallery<?php echo $gallary_pop_id?>">
                      <div class="leader-slider__box gallery-modal__box"><img src="<?php echo get_field('lifemyntraimage')?>" alt=""/>
                        <div class="leader-slider__popcontent">
                          <p><?php echo the_content()?></p><a href="#">Read more</a>
                        </div>
                      </div>
                    </div>
                    
                    <?php }$gallary_pop_id++;}endwhile;wp_reset_query();
                    echo "####";
                      }             
?>
