<?php  /*Template Name: Contact */ 

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
        <title>Contact</title>
       <?php get_header();?>
  </head>
  <body>   
    <!-- START: Header-->
         <?php include_once 'inc/nav.php';?>
    <main class="page-main">
      <div class="contact-main">
        <section class="contact-banner">
          <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact/contact-title.svg" alt=""/></h2>
        </section>
        <section class="contact-content">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
              <a class="external-btn" href="<?php echo get_field('customer_support_link');?>" target="_blank">
                  <h3><?php echo get_field('customer_support_text');?></h3></a>
                  <a class="external-btn" href="<?php echo get_field('partner_link');?>" target="_blank">
                  <h3><?php echo get_field('partner_text');?></h3></a>
                  <a class="external-btn js-reach-out reach-out-form" href="javascript:void(0);">
                  <h3><?php echo get_field('media_relations_text');?></h3></a>
                <form id="contact-form">
                  <div class="form-group">
                    <input type="text" requried="requried"/>
                    <label>Your Name<sup>*</sup></label>
                  </div>
                  <div class="form-group">
                    <input type="email" requried="requried"/>
                    <label>Your Email<sup>*</sup></label>
                  </div>
                  <div class="form-group">
                    <input type="text" requried="requried"/>
                    <label>Subject<sup>*</sup></label>
                  </div>
                  <div class="form-group">
                    <textarea requried="requried"></textarea>
                    <label>Message<sup>*</sup></label>
                  </div>
                  <!-- add class '.success-btn' to show success form submit indication-->
                  <a class="shape-btn" href="javascript:void(0);" type="submit"><span>Submit</span></a>
                </form>
              </div>
              <div class="col-md-6">
                <h3><?php echo get_field('contact_heading');?></h3>
                <div class="contact-location">
				<?php while(have_rows('adress_repeater')){
					the_row();?>
                  <div class="contact-location__box">
                    <h4><?php echo get_sub_field('contact_location');?></h4>
                    <p><?php echo get_sub_field('contact_adress');?></p>
                  </div>
				  
                  <?php }?>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </main>
    <?php get_footer();?>
        <!-- Common scripts-->
        <script src="<?php echo $career_base_url?>/wp-content/themes/myntra_career/assets/js/plugins/validation.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/contact.js"></script>
  </body>
</html>