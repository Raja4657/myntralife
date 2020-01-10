<?php  /*Template Name: Home */ 

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
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  		<title>Home</title>
        <?php get_header();?>
  </head>
  <body>   
    <!-- START: Header-->
        <?php include_once 'inc/nav.php';?>
		<?php include_once 'api.php';?>
    <main class="page-main home-page">
      <!-- START: Banner-->
      <section class="banner-section">
        <div class="myn-video-wrapper d-none d-md-block">
          <video class="myn-banner-video" autoplay="autoplay" loop="loop" muted="muted" playsinline="playsinline">
            <!--<source src="<?php echo get_template_directory_uri(); ?>/assets/media/banner-video-3.webm" type="video/webm"/> -->
            <source src="<?php echo get_field('home_banner_video') ;?>" type="video/mp4"/>
          </video>
        </div>
        <div class="myn-video-wrapper mobile d-md-none">
          <video class="myn-banner-video" autoplay="autoplay" loop="loop" muted="muted" playsinline="playsinline">
            <!-- <source src="<?php echo get_template_directory_uri(); ?>/assets/media/banner-video-3-mobile.webm" type="video/webm"/> -->
            <source src="<?php echo get_field('home_banner_video') ;?>" type="video/mp4"/>
          </video>
        </div>
        <div class="container banner-scrollwrap">
          <div class="banner-scrolldown-w">
            <p class="banner-scrolldown-text"><span></span></p>
          </div>
        </div>
      </section>
      <section class="make-world">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-11 col-xl-10 mx-auto">
              <div class="position-relative px-lg-4">
                <p class="make-border-text"><?php echo get_field('making_the_world_title');?></p>
                <div class="make-slider-w">
                  <div class="swiper-container make-slider">
                    <div class="swiper-wrapper">
					<?php
					while(have_rows("slider_svg_image_repeater")){
						the_row();
					?>
                      <div class="swiper-slide"><img class="make-stylish" src="<?php echo get_sub_field("making_the_world_svg_images")?>" alt="<?php echo get_sub_field("making_the_world_alt_tag")?>"/></div>
                     <!--  <div class="swiper-slide"><img class="make-stylish" src="<?php echo get_template_directory_uri(); ?>/assets/img/colorful.svg" alt="colorful"/></div>
                      <div class="swiper-slide"><img class="make-stylish" src="<?php echo get_template_directory_uri(); ?>/assets/img/happier.svg" alt="happier"/></div>  -->
					<?php }?>
				  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-8 col-xl-6 mt-md-5 mt-2 mx-auto text-center">
              <p class="make-content mb-4 mb-lg-5"><?php echo get_field('making_the_world_sub_title');?></p>
			  <a class="shape-btn" href="<?php echo site_url()?><?php echo get_field('about_us_path_link');?>">
			  <span><?php echo get_field('about_us_text');?></span></a>
            </div>
          </div>
        </div>
      </section>
      <section class="brands-section" data-aos="fade" data-anchor-placement="brands-section">
        <div class="container">
          <div class="row">
            <div class="col-sm-9 ml-auto pl-0">
              <div class="brands">
                <div class="brands__content">
                  <div class="row align-items-lg-center">
                    <div class="col-lg-5 col-xl-6">
                      <h2 class="section-title"><?php echo get_field('the_brand_title');?></h2>
                      <p class="section-sub-title"><?php echo get_field('the_brand_sub_title');?></p>
                    </div>
                    <div class="col-lg-7 col-xl-6">
                      <div class="branddata-list brands">
                        <div class="branddata-list__item">
                          <div class="branddata">
                            <h4 class="branddata__data"><span class="count_up_stat" data-to="<?php echo get_field('myntra_fashion_brands_value');?>">0</span>+</h4>
                            <p class="branddata__detail"><?php echo get_field('myntra_fashion_brands_text');?></p>
                          </div>
                        </div><span class="seperator"></span>
                        <div class="branddata-list__item">
                          <div class="branddata">
                            <h4 class="branddata__data"> <span class="count_up_stat" data-to="<?php echo get_field('myntra_partner_brands_value');?>">0</span>+</h4>
                            <p class="branddata__detail"><?php echo get_field('myntra_partner_brands_text');?></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-container js-logo-slider brands-list">
          <div class="swiper-wrapper">
		  <?php		
					while(have_rows("the_brand_logos_repeater")){
						the_row();
			?>
            <div class="brands-list__brand"><img class="img-fluid" src="<?php echo get_sub_field("brand_logo_image")?>"/></div>
        
					<?php }?>
		 </div>
        </div>
      </section>
      <section class="life-section">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <ul class="life-gallery" data-aos="fade-up" data-aos-offset="100" data-anchor-placement="life-section">
                
				<li class="life-gallery__item">
                  <div class="life-gallery">
				  <img class="life-gallery__img world" 
				  src="<?php echo get_template_directory_uri(); ?>/assets/img/world.svg" alt="awesome"/>
				  <img class="life-gallery__img awesome"
				  src="<?php echo get_template_directory_uri(); ?>/assets/img/awesome.svg" alt="awesome"
				  data-aos="fade-up" data-anchor-placement="life-section" 
				  data-aos-duration="1000" data-aos-delay="500" data-aos-id="drawlineanim"/>
                    <div id="line-animation"></div>
                  </div>
                </li>
				<?php
				$i=1;
					while(have_rows("world_of_awesome_repeater")){
						the_row();
						if($i==1)
					 {?>
                <li class="life-gallery__item">
                  <div class="life-gallery">
				  <img class="life-gallery__img no-visible" 
				  src="<?php echo get_sub_field('world_of_awesome_image');?>" alt="awesome"/>
                    <svg class="life-gallery__svg" xmlns="http://www.w3.org/2000/svg" 
					xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 383 382" preserveAspectRatio="none">
                      <defs>
                        <clippath id="46fpa">
                          <path d="M0 0h383l-20 382H30z"></path>
                        </clippath>
                      </defs>
                      <g>
                        <g>
                          <path fill="#d8d8d8" d="M0 0h383l-20 382H30z"></path>
                        </g>
                        <g clip-path="url(#46fpa)" opacity=".95">
                          <image xlink:href="<?php echo get_sub_field('world_of_awesome_image');?>"
						  width="100%" height="100%"></image>
                        </g>
                        <g clip-path="url(#46fpa)" opacity=".05">
                          <path d="M0 0h383l-20 382H30z"></path>
                        </g>
                      </g>
                    </svg>
                  </div>
                </li>
						<?php } elseif($i==2){?>
                <li class="life-gallery__item">
                  <div class="life-gallery"><img class="life-gallery__img no-visible" 
				  src="<?php echo get_sub_field('world_of_awesome_image');?>" alt="awesome"/>
                    <svg class="life-gallery__svg" xmlns="http://www.w3.org/2000/svg" 
					xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" viewBox="0 0 320 382">
                      <defs>
                        <clippath id="6prfa">
                          <path d="M20 0h300l-18.293 382H0z"></path>
                        </clippath>
                      </defs>
                      <g>
                        <g>
                          <path fill="#d8d8d8" d="M20 0h300l-18.293 382H0z"></path>
                        </g>
                        <g clip-path="url(#6prfa)">
                          <image href="<?php echo get_sub_field('world_of_awesome_image');?>" width="100%" height="100%"></image>
                        </g>
                      </g>
                    </svg>
                  </div>
                </li>
						<?php } elseif($i==3){$video_url=get_sub_field('world_of_awesome_video');?>
                <li class="life-gallery__item">
                  <div class="life-gallery"><img class="life-gallery__img no-visible" 
				  src="<?php echo get_sub_field('world_of_awesome_image');?>" alt="awesome"/>
                    <svg class="life-gallery__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" viewBox="0 0 488 382">
                      <defs>
                        <clippath id="590ba">
                          <path d="M0 0h458l30 382H15z"></path>
                        </clippath>
                      </defs>
                      <g>
                        <g>
                          <path fill="#d8d8d8" d="M0 0h458l30 382H15z"></path>
                        </g>
                        <g clip-path="url(#590ba)">
                          <image href="<?php echo get_sub_field('world_of_awesome_image');?>" width="100%" height="100%"></image>
                        </g>
                      </g>
                    </svg><a class="life-gallery__play-btn" href="javascript:void(0);" data-toggle="modal"
					data-src="<?php echo get_sub_field('world_of_awesome_video');?>" data-target="#myModal">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/play-btn.svg" alt="play"/></a>
                  </div>
                </li>
				<?php } elseif($i==4){?>
                <li class="life-gallery__item">
                  <div class="life-gallery">
				  <img class="life-gallery__img no-visible" src="<?php echo get_sub_field('world_of_awesome_image');?>" 
				  alt="awesome"/>
                    <svg class="life-gallery__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none"
					viewBox="0 0 333 382">
                      <defs>
                        <clippath id="rbdpa">
                          <path d="M0 0h333l-20 382H30z"></path>
                        </clippath>
                      </defs>
                      <g>
                        <g>
                          <path fill="#d8d8d8" d="M0 0h333l-20 382H30z"></path>
                        </g>
                        <g clip-path="url(#rbdpa)">
                          <image href="<?php echo get_sub_field('world_of_awesome_image');?>" width="100%" height="100%"></image>
                        </g>
                      </g>
                    </svg>
                  </div>
                </li>
				<?php } elseif($i==5){?>
                <li class="life-gallery__item">
                  <div class="life-gallery">
				  <img class="life-gallery__img no-visible" src="<?php echo get_sub_field('world_of_awesome_image');?>" alt="awesome"/>
                    <svg class="life-gallery__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none"
					viewBox="0 0 322 382">
                      <defs>
                        <clippath id="qoy7a">
                          <path d="M20 0h301.707l-18.293 382H0z"></path>
                        </clippath>
                      </defs>
                      <g>
                        <g>
                          <path fill="#d8d8d8" d="M20 0h301.707l-18.293 382H0z"></path>
                        </g>
                        <g clip-path="url(#qoy7a)">
                          <image href="<?php echo get_sub_field('world_of_awesome_image');?>" width="100%" height="100%"></image>
                        </g>
                        <g opacity=".05">
                          <path d="M20 0h301.707l-18.293 382H0z"></path>
                        </g>
                      </g>
                    </svg>
                  </div>
                </li>
					<?php }$i++;}?>
              </ul>
            </div>
            <div class="col-sm-12 text-center pt-4 pt-md-5">
			<a class="shape-btn" href="<?php echo site_url()?>/myntra-life">
			<span><?php echo get_field('experience_myntralife');?></span></a></div>
          </div>
        </div>
      </section>
    <section class="blog-section" data-aos="fade">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="d-flex align-items-center justify-content-center position-relative">
                <div class="position-relative">
                  <h2 class="section-title mb-0"><?php echo get_field('freshly_mynted_title');?></h2>
                  <p class="section-sub-title mb-0"><?php echo get_field('freshly_mynted_sub_title');?></p>
                </div>
                <div class="position-relative blog-paper-w"><img class="blogs-paper" 
				src="<?php echo get_template_directory_uri(); ?>/assets/img/paper.svg	" alt=""/>
                  <p class="blogs-paper-text"><?php echo get_field('freshly_mynted_stories_text');?></p>
                </div>
              </div>
            </div>
		
            <div class="col-sm-12 mt-lg-5 mt-4 p-0 blog-slider-wrap">
              <div class="swiper-container js-blog-slider blogs-slider">
                <div class="swiper-wrapper">
				
				<?php 
				
				$result=$make_call = callAPI('get', "https://blogs.myntra.com/blog-api/", array(), false);
				
				$result = strip_tags($result);
				$data=json_decode($result, true );
				
				//echo json_encode($data);
				// echo $blog_base_url;
				
				
				?>
				
				<?php  
				foreach ($data as $term) {
					 $title = $term['title'];
					 $link=$term['link'];
					 $cat=$term['category'];
				?>
                  <div class="swiper-slide">
                    <div class="blog-item blog-item--blue">
					<a class="full-link" href="<?php echo $link?>"></a><img class="blog-item__img" src="<?php echo $term['image'] ?>" alt=""/>
                      <div class="blog-item__content">
                        <p class="blog-item__tag">#<?php echo $cat;?></p>
                        <h3 class="blog-item__title"><?php echo $title ?></h3>
						<a class="shape-btn shape-btn--white shape-btn--arrow" href="javascript:void(0);"><span>
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-white.png" alt=""/></span></a>
                      </div>
                    </div>
                  </div>
				 <?php } ?>
                
				  
                </div>
                <div class="blog-nav-wrap">
                  <div class="js-blog-next"><span></span></div>
                  <div class="js-blog-prev"><span></span></div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 text-center mt-4">
			<a class="shape-btn shape-btn--white" href="<?php echo $blog_base_url?>">
			<span>All Stories</span></a></div>
            <div class="col-sm-12"></div>
          </div>
        </div>
      </section>
      <section class="styling-section">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center d-flex">
              <div class="d-flex align-items-center mx-auto whiteboxshadow" data-aos="fade">
			  <img class="styling-img" src="<?php echo get_field('india_in_scale_svg_image'); ?>" alt=""/>
                <h2 class="section-title blk-353 font-400 text-capitalize"><?php echo get_field('india_in_scale_title'); ?></h2>
              </div>
            </div>
            <div class="col-12">
              <ul class="styling-stat-list styling">
			  <?php
					while(have_rows("status_repeater")){
						the_row();					
					?>
			  
                 <li class="styling-stat-list__item">
                  <div class="styling-stat" data-aos="fade-up">
                    <h4 class="styling-stat__count"><span class="count_up_stat"
					data-to="<?php echo get_sub_field('status_value'); ?>">0</span><?php echo get_sub_field('status_special_character'); ?></h4>
                    <p class="styling-stat__title"><?php echo get_sub_field('status_title'); ?></p>
                  </div>
                </li>
				
              
					<?php }?>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section class="social"><img class="pattern pattern--right" src="<?php echo get_template_directory_uri(); ?>/assets/img/social-media.png"/>
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-xl-6">
              <h2 class="section-title section-title--small mb-0" data-aos="fade-right"><?php echo get_field('let_get_social_title'); ?></h2>
              <div class="d-xl-flex align-items-start" data-aos="fade-right">
                <p class="section-sub-title section-sub-title--footer pl-0"><?php echo get_field('let_get_social_sub_title'); ?></p>
              </div>
            </div>
            <div class="col-sm-6 col-xl-6 align-items-center d-flex">
              <ul class="social-list w-100 row">
			   <?php
					while(have_rows("social_media_repeater")){
						the_row();
			?>
                <li class="social-list__item col-2"><a class="social-icon" href="<?php echo get_sub_field('social_media_social_link');?>" target="_blank" data-aos="fade-up">
				<img src="<?php echo get_sub_field('social_media_image');?>" alt=""/></a></li>
               <!--  <li class="social-list__item col-2"><a class="social-icon" href="https://www.facebook.com/myntralife/" target="_blank" data-aos="fade-up"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/social/facebook.svg" alt=""/></a></li>
                <li class="social-list__item col-2"><a class="social-icon" href="https://www.youtube.com/user/myntradotcom" target="_blank" data-aos="fade-up"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/social/youtube.svg" alt=""/></a></li>
                <li class="social-list__item col-2"><a class="social-icon" href="https://www.instagram.com/myntra/" target="_blank" data-aos="fade-up"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/social/instagram.svg" alt=""/></a></li>
                <li class="social-list__item col-2"><a class="social-icon" href="https://twitter.com/myntra" target="_blank" data-aos="fade-up"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/social/twitter.svg" alt=""/></a></li> -->
					<?php }?>
			  </ul>
            </div>
          </div>
        </div>
      </section>
    </main>
    
    <?php get_footer();?>
    
        
    <!-- Video Modal-->
        <div class="modal fade web-middle-modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <!-- 16:9 aspect ratio-->
                <div class="embed-responsive embed-responsive-16by9">
                  <video controls="" autoplay="autoplay">
                    <source data-src="<?php echo $video_url?>" src="" type="video/mp4"/>
                  </video>
                </div>
              </div>
            </div>
          </div>
        </div>
  </body>
</html>
