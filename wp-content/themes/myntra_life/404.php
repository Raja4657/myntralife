<?php  

/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage myntra
 * @since 
 */
?>
<!DOCTYPE html>
<html lang="en">

  <head>
       
        <title>404</title>
        <?php get_header();?>
        
  </head>
  <body>   
    <!-- START: Header-->
        <?php include_once 'inc/blog-nav.php';?>
    <main class="page-main">
      <div class="missing-content">
        <div class="missing-content__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/404.svg" alt=""/></div>
        <div class="missing-content__text">
          <p>This Page is unknown or does not exist</p><a class="shape-btn" href="<?php echo site_url()?>">Back to Home</a>
        </div>
      </div>
    </main>
    
    <?php get_footer()?>
    
  </body>
</html>