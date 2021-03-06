<?php  /*Template Name: Privacy Policy */ 

/**
* The main template file
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package myntra
* @subpackage myntraLife
* @since 1.0.0
*/
?><!DOCTYPE html>
<html lang="en">
  <head>
       
        <title>Privacy policy</title>
        <?php get_header();?>
  </head>
  <body>   
    <!-- START: Header-->
        <?php include_once 'inc/nav.php';?>
    <main class="page-main content-page-template">
      <div class="container">
        <h1><?php echo get_field('privacy_heading');?></h1>
        <?php echo get_field('privacy_description');?>
      </div>
    </main>
     <?php get_footer();?>
     
  </body>
</html>