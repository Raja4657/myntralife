<?php  /*Template Name: About */ 

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
        <title>About</title>
         <?php get_header();?>
  </head>
  <body>   
    <!-- START: Header-->
         <?php include_once 'inc/nav.php';?>
    <main class="page-main">
      <!-- START: Banner-->
      <section class="about-banner" style="background-image: url('<?php echo get_field('back_ground_banner_image');?>')">
	  <img src="<?php echo get_field('about_banner_image');?>" alt="<?php echo get_field('about_alt_tag_one');?>"/>
	  </section>
      <section class="about-intro px-2 px-md-0">
        <div class="about-intro--pattern">
          <div id="arrow-anim"></div>
        </div>
        <div class="about-intro--container">
          <div class="about-intro--logo"><img src="<?php echo get_field('about_myntra_image');?>" alt="<?php echo get_field('about_alt_tag_two');?>"/></div>
          <h3 class="about-intro--head"><?php echo get_field('leading_the_text');?>
		  <img src="<?php echo get_field('fashion_and_life_style_image');?>" alt="<?php echo get_field('about_alt_tag_three');?>"/>
				<?php echo get_field('_e_commerce_text');?></h3>
          <p class="about-intro--text"><?php echo get_field('about_sub_title');?></p>
        </div>
      </section>
      <section class="about-timeline" data-aos="fade" data-anchor-placement="about-timeline">
        <div class="about-timeline__head">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/decade-awesome.svg" 
		alt="<?php echo get_field('about_alt_tag_four');?>"/></div>
        <div class="about-timeline__slider swiper-container">
          <div class="swiper-wrapper">
		  <?php while(have_rows("about_time_line_repeater")){
			  the_row()
			  ?>
            <div class="swiper-slide">
              <div class="about-timeline__item">
			  <span class="about-timeline__year"><?php echo get_sub_field('time_line_year');?></span>
                <div class="about-timeline__logo">
				<img src="<?php echo get_sub_field('time_line_image');?>" alt="<?php echo get_sub_field('alt_tag_six');?>"/></div>
                <div class="about-timeline__desc">
                  <p><?php echo get_sub_field('time_line_description');?></p>
                </div>
              </div>
            </div>
		  <?php }?>
            
			
          </div>
          <div class="swiper-button-next"><span></span></div>
          <div class="swiper-button-prev"><span></span></div>
        </div>
      </section>
      <section class="about-magic px-2 px-md-0" data-aos="fade" data-anchor-placement="about-magic">
        <div class="container">
          <h2 class="about-magic__title"><?php echo get_field('we_create_text');?>
		  <img src="<?php echo get_field('about_magic_image');?>" alt="<?php echo get_field('about_alt_tag_seven');?>"/><br/>
		  <span class="mt-2 mt-sm-0"><?php echo get_field('about_with_our_value');?></span></h2>
          <div class="about-magic__define">
		  <?php while(have_rows('about_magic_repeater')){
			  the_row();?>
            <div class="about-magic__defineblock mb-5 mb-xl-0" data-aos="fade-up" data-aos-delay="0" data-anchor-placement="about-magic">
              <div class="about-magic__defineimg"><img src="<?php echo get_sub_field('about_icon_image');?>" alt=""/>
			  </div>
              <div class="about-magic__definetext"><span class="about-m"><?php echo get_sub_field('character_value');?></span>
                <div>
                  <h3 class="magic-<?php echo strtolower(get_sub_field('character_value'));?>-col"><?php echo get_sub_field('about_magic_title');?></h3>
                  <p><?php echo get_sub_field('about_magic_description');?></p>
                </div>
              </div>
            </div>
			<?php }?>
            
			
          </div>
          <div class="about-magic__video">
            <embed src="<?php echo get_template_directory_uri(); ?>/assets/img/about/video-frame.svg"/>
			<a href="#" data-target="#myModal" data-toggle="modal"><span></span></a>
          </div>
        </div>
      </section>
      <section class="about-leaders" data-aos="fade" data-anchor-placement="about-leaders">
        <h2><?php echo get_field('about_meet_our_text');?><span class="mt-2 mt-md-0"><?php echo get_field('about_leader_text');?></span></h2>
		<img class="about-leaders__pattern" 
		src="<?php echo get_field('about_leader_image');?>" alt="<?php echo get_field('alt_tag_nine');?>"/>
        <div class="container">
          <div class="about-leaders__gallery">
            <div class="row about-leaders__cards">
			<?php while(have_rows('about_leader_repeater')){
				the_row();?>
              <div class="col-lg-3 col-md-4 col-sm-6 about-leaders__card"
			  data-aos="fade-up" data-aos-delay="0" data-anchor-placement="about-leaders">
			  <a class="about-leaders__box" href="#" data-index="<?php echo get_sub_field('leader_name');?>"
			  data-toggle="modal" data-target="#leader-modal">
                 
				 <div class="about-leaders__img">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
					width="343" height="361" viewBox="0 0 343 361">
                      <defs>
                        <clippath id="jqsda">
                          <path d="M30.273 3.718A4 4 0 0 1 34.259.05h304.383a4 4 0 0 1 3.986 4.332l-29.373 352.714a4 4 0 0 1-3.986 3.668H4.885A4 4 0 0 1 .9 356.432z"></path>
                        </clippath>
                      </defs>
                      <g>
                        <path fill="#d8d8d8" d="M30.273 3.718A4 4 0 0 1 34.259.05h304.383a4 4 0 0 1 3.986 4.332l-29.373 352.714a4 4 0 0 1-3.986 3.668H4.885A4 4 0 0 1 .9 356.432z"></path>
                        <g clip-path="url(#jqsda)">
                          <image width="100%" height="100%" 
						  xlink:href="<?php echo get_sub_field('leaders_image');?>" ></image>
                        </g>
                      </g>
                    </svg>
                  </div>
                  <div class="about-leaders__text">
                    <h3><?php echo get_sub_field('leader_name');?></h3>
                    <p><?php echo get_sub_field('leader_designation');?></p>
                  </div></a>
				  </div>
			<?php }?>
              
            </div>
          </div>
        </div>
      </section>
      <div class="modal fade web-middle-modal" id="leader-modal" role="dialog">
        <div class="modal-dialog leader-modal">
          <!-- Modal content-->
          <div class="modal-content">
		  <span class="close" data-dismiss="modal">×</span>
		  <img class="about-leaders__pattern" src="<?php echo get_template_directory_uri(); ?>/assets/img/about/popup-pattern.svg" alt=""/>
            <div class="modal-body">
              <div class="leader-slider swiper-container">
                <div class="swiper-wrapper">
				<?php while(have_rows('about_leader_repeater')){
				the_row();?>
                  <div class="swiper-slide" data-slide="<?php echo get_sub_field('leader_name');?>">
                    <div class="leader-slider__box">
                      <div class="leader-slider__img">
                        <div class="leader-slider__profile">
						<img src="<?php echo get_sub_field('leaders_image');?>" alt="<?php echo get_sub_field('leader_alt_tag');?>"/></div>
                        <div class="leader-slider__social"><a href="<?php echo get_sub_field('linkedin_link');?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/icon-linkedin-col.svg" alt=""/></a></div>
                      </div>
                      <div class="leader-slider__text mt-3 mt-md-0">
                        <h2><?php echo get_sub_field('leader_name');?></h2>
                        <label><?php echo get_sub_field('leader_designation');?></label>
                        <p><?php echo get_sub_field('leader_description');?></p>                       
                      </div>
                    </div>
                  </div>
				<?php }?>
                 
                </div>
                <div class="leader-button-next"><span></span></div>
                <div class="leader-button-prev"><span></span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    
    <?php get_footer();?>
    
      
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/about.js"></script>
    <!-- Video Modal-->
        <div class="modal fade web-middle-modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <!-- 16:9 aspect ratio-->
                <div class="embed-responsive embed-responsive-16by9">
                  <video controls="" autoplay="autoplay">
                    <source data-src="<?php echo get_field('about_video_link');?>" src="" type="video/mp4"/>
                  </video>
                </div>
              </div>
            </div>
          </div>
        </div>
  </body>
</html>