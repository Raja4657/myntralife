<?php  /*Template Name: Life */ 

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
        
        <title>Life</title>
         <?php get_header();?>
  </head>
  <body>   
    <!-- START: Header-->
        <?php include_once 'inc/nav.php';?>
    <main class="page-main">
      <div class="life-page-section">
        <!-- START: Banner-->
        <section class="banner-section life-banner">
          <div class="myn-video-wrapper">
            <video class="myn-banner-video" autoplay="autoplay" loop="loop" muted="muted" playsinline="playsinline">
              <source src="<?php echo get_template_directory_uri(); ?>/assets/media/life-myntra.mp4" type="video/mp4"/>
            </video>
          </div>
          <h2 class="life-banner__title"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/life-myntra/life-title.svg" alt=""/></h2>
          <div class="container banner-scrollwrap">
            <div class="banner-scrolldown-w">
              <p class="banner-scrolldown-text"><span></span></p>
            </div>
          </div>
        </section>
        <section class="container gallery-content">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item"><a class="nav-link active" id="all-tab" data-toggle="tab" href="#all-content" role="tab" aria-controls="all" aria-selected="true">All</a></li>
            <?php	
            $i=1;	  
    		  $categoryArgs = array('hide_empty' => 0, 'taxonomy' => 'life_category');
                      $category_list = get_categories($categoryArgs);
                      foreach ($category_list as $cat) {
                        $category_name="";$category_slug="";
                        $category_name=$cat->name;
                       $category_slug=$cat->slug;
                       if($i<=5){
                      ?>
            <li class="nav-item"><a class="nav-link" id="<?php echo $category_slug;?>-tab" data-toggle="tab" href="<?php echo "#".$category_slug;?>-content" role="tab" aria-controls="culture" aria-selected="false"><?php echo $category_name;?></a>
            </li>
            <?php }$i++; }?>
            <!-- <li class="nav-item"><a class="nav-link" id="workplace-tab" data-toggle="tab" href="#workplace-content" role="tab" aria-controls="workplace" aria-selected="false">Workplace</a></li>
            <li class="nav-item"><a class="nav-link" id="campaigns-tab" data-toggle="tab" href="#campaigns-content" role="tab" aria-controls="campaigns" aria-selected="false">Campaigns</a></li>
            <li class="nav-item"><a class="nav-link" id="wecare-tab" data-toggle="tab" href="#wecare-content" role="tab" aria-controls="wecare" aria-selected="false">Inclusion</a></li> -->
          </ul>
         
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="all-content" role="tabpanel" aria-labelledby="all-tab">
              
              <div class="overflow-hidden">
                <div class="gallery-content__boxwrap">
                  <div class="row">
                  		<?php 
                  		$the_query=new WP_Query(array('post_type' => 'life_myntra',
                  				'posts_per_page'=>'',
                  				'post_status' => 'publish',
                  		));
                  		while($the_query->have_posts() ) : $the_query->the_post(); 	{
						$video_link=get_field("lifemyntravideo");
                  		?>
                    <div class="col-sm-4">
                      <div class="gallery-content__box <?php if($video_link!=""){?>video<?php }?>" href="#" data-index="<?php echo $category_slug;?>" data-toggle="modal" data-target="#gallery-modal">
                        <div style="background-image: url('<?php echo get_field('lifemyntraimage')?>')">
                        
                        </div>
                        <?php   
				     				$category_list=get_the_terms($id, "life_category");
				     				foreach ( $category_list as $category_names ) {
				     					$category_name=$category_names->name;
                     		 ?>
                        <span>#<?php echo $category_name;?></span><?php }?>
                      </div>
                    </div>
                    <?php }endwhile;wp_reset_query();?>
                   
                    
                  </div>
                </div>
              </div>
              <div class="text-right">
                <ul class="pagination web-pagination d-inline-flex">
                  <li class="page-item"><a class="page-link prev-link" href="#"></a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link next-link" href="#"> </a></li>
                </ul>
              </div>
            </div>
            
            <?php	   
    		  $categoryArgs = array('hide_empty' => 0, 'taxonomy' => 'life_category');
                      $category_list = get_categories($categoryArgs);
                      foreach ($category_list as $cat) {
                        $category_name="";$category_slug="";
                        $category_name=$cat->name;
                       $category_slug=$cat->slug;
                      ?>
            <div class="tab-pane fade" id="<?php echo $category_slug;?>-content" role="tabpanel" aria-labelledby="<?php echo $category_slug;?>-tab">
              <div class="overflow-hidden">
              
                <div class="gallery-content__boxwrap">
                  <div class="row">
                
                  <?php $i=1;
                  		$the_query=new WP_Query(array('post_type' => 'life_myntra',
                  				'posts_per_page'=>'6',
                  				'post_status' => 'publish',
								'tax_query' => array(array ('taxonomy' => 'life_category','field' => 'slug','terms' => "$category_name"))
                  		));
                  		while($the_query->have_posts() ) : $the_query->the_post(); 	{
						$video_link=get_field("lifemyntravideo");
                  		?>
                    <div class="col-sm-4">
                     
                      <div class="gallery-content__box <?php if($video_link!=""){?>video<?php }?>" href="#" data-index="gallery<?php echo $i?>" data-toggle="modal" data-target="#gallery-modal">
                        <div style="background-image: url('<?php echo get_field('lifemyntraimage')?>')"></div>
                        <?php   
				     				$category_list=get_the_terms($id, "life_category");
				     				foreach ( $category_list as $category_names ) {
				     					$category_name1=$category_names->name;
                     		 ?>
                        <span>#<?php echo $category_name1;?></span><?php }?>
                      </div>
                    </div>
                    <?php $i++;}endwhile;wp_reset_query();?>
                   
                    
                  </div>
                </div>
                
              </div>
              
            </div>
            <?php }?>
            
            
            
            
          </div>
     
        </section>
        <?php 
        $categoryArgs = array('hide_empty' => 0, 'taxonomy' => 'life_category');
        $category_list = get_categories($categoryArgs);
        foreach ($category_list as $cat) {
        	$category_name="";$category_slug="";
        	$category_name=$cat->name;
        	$category_slug=$cat->slug;
        ?>
        <div class="modal fade web-middle-modal" id="gallery-modal" role="dialog">
        
          <div class="modal-dialog leader-modal">
            <!-- Modal content-->
            <div class="modal-content"><span class="close" data-dismiss="modal">×</span>
              <div class="modal-body">
                <div class="leader-slider gallery-slider swiper-container">
                  <div class="swiper-wrapper">
                  <?php 
                  		$the_query=new WP_Query(array('post_type' => 'life_myntra',
                  				'posts_per_page'=>'6',
                  				'post_status' => 'publish',
								'tax_query' => array(array ('taxonomy' => 'life_category','field' => 'slug','terms' => "$category_name"))
                  		));
                  		while($the_query->have_posts() ) : $the_query->the_post(); 	{
						$video_link=get_field("lifemyntravideo");
                  		?>
                    <div class="swiper-slide" data-slide="gallery<?php echo $i?>">
                      <div class="leader-slider__box gallery-modal__box">
                        
                        <?php if($video_link!=""){?>
                        <div class="embed-responsive embed-responsive-16by9">
                          <iframe class="embed-responsive-item" id="video" data-src="<?php echo get_field('lifemyntravideo');?>" allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                        <?php }else{?>
                          <img src="<?php echo get_field("lifemyntraimage") ?>" alt=""/>
                          <?php }?>
                      
                        <div class="leader-slider__popcontent">
                          <p><?php echo the_content();?></p><a href="#">Read more</a>
                        </div>
                      </div>
                    </div>
                    <?php $i++;}endwhile;wp_reset_query();?>
                    <!-- <div class="swiper-slide" data-slide="gallery2">
                      <div class="leader-slider__box gallery-modal__box"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/life-myntra/life-img2.png" alt=""/>
                        <div class="leader-slider__popcontent">
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, hic natus veritatis magni ipsa sunt numquam repudiandae itaque, explicabo ut quod eum provident dicta molestias! Blanditiis temporibus inventore doloremque recusandae.</p><a href="#">Read more</a>
                        </div>
                      </div>
                    </div>
                    
                    <div class="swiper-slide" data-slide="gallery3">
                      <div class="leader-slider__box gallery-modal__box"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/life-myntra/life-img3.png" alt=""/>
                        <div class="leader-slider__popcontent">
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, hic natus veritatis magni ipsa sunt numquam repudiandae itaque, explicabo ut quod eum provident dicta molestias! Blanditiis temporibus inventore doloremque recusandae.</p><a href="#">Read more</a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide" data-slide="gallery4">
                      <div class="leader-slider__box gallery-modal__box"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/life-myntra/life-img4.png" alt=""/>
                        <div class="leader-slider__popcontent">
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, hic natus veritatis magni ipsa sunt numquam repudiandae itaque, explicabo ut quod eum provident dicta molestias! Blanditiis temporibus inventore doloremque recusandae.</p><a href="#">Read more</a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide" data-slide="gallery5">
                      <div class="leader-slider__box gallery-modal__box">
                        <div class="embed-responsive embed-responsive-16by9">
                          <iframe class="embed-responsive-item" id="video" data-src="https://www.youtube.com/embed/BzscCtNmGnk" allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                        <div class="leader-slider__popcontent">
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, hic natus veritatis magni ipsa sunt numquam repudiandae itaque, explicabo ut quod eum provident dicta molestias! Blanditiis temporibus inventore doloremque recusandae.</p><a href="#">Read more</a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide" data-slide="gallery6">
                      <div class="leader-slider__box gallery-modal__box"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/life-myntra/life-img6.png" alt=""/>
                        <div class="leader-slider__popcontent">
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, hic natus veritatis magni ipsa sunt numquam repudiandae itaque, explicabo ut quod eum provident dicta molestias! Blanditiis temporibus inventore doloremque recusandae.</p><a href="#">Read more</a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide" data-slide="gallery7">
                      <div class="leader-slider__box gallery-modal__box"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/life-myntra/life-img7.png" alt=""/>
                        <div class="leader-slider__popcontent">
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, hic natus veritatis magni ipsa sunt numquam repudiandae itaque, explicabo ut quod eum provident dicta molestias! Blanditiis temporibus inventore doloremque recusandae.</p><a href="#">Read more</a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide" data-slide="gallery8">
                      <div class="leader-slider__box gallery-modal__box"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/life-myntra/life-img8.png" alt=""/>
                        <div class="leader-slider__popcontent">
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, hic natus veritatis magni ipsa sunt numquam repudiandae itaque, explicabo ut quod eum provident dicta molestias! Blanditiis temporibus inventore doloremque recusandae.</p><a href="#">Read more</a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide" data-slide="gallery9">
                      <div class="leader-slider__box gallery-modal__box"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/life-myntra/life-img4.png" alt=""/>
                        <div class="leader-slider__popcontent">
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, hic natus veritatis magni ipsa sunt numquam repudiandae itaque, explicabo ut quod eum provident dicta molestias! Blanditiis temporibus inventore doloremque recusandae.</p><a href="#">Read more</a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide" data-slide="gallery10">
                      <div class="leader-slider__box gallery-modal__box">
                        <div class="embed-responsive embed-responsive-16by9">
                          <iframe class="embed-responsive-item" id="video" data-src="https://www.youtube.com/embed/BzscCtNmGnk" allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                        <div class="leader-slider__popcontent">
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, hic natus veritatis magni ipsa sunt numquam repudiandae itaque, explicabo ut quod eum provident dicta molestias! Blanditiis temporibus inventore doloremque recusandae.</p><a href="#">Read more</a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide" data-slide="gallery11">
                      <div class="leader-slider__box gallery-modal__box"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/life-myntra/life-img9.png" alt=""/>
                        <div class="leader-slider__popcontent">
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, hic natus veritatis magni ipsa sunt numquam repudiandae itaque, explicabo ut quod eum provident dicta molestias! Blanditiis temporibus inventore doloremque recusandae.</p><a href="#">Read more</a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide" data-slide="gallery12">
                      <div class="leader-slider__box gallery-modal__box"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/life-myntra/life-img10.png" alt=""/>
                        <div class="leader-slider__popcontent">
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, hic natus veritatis magni ipsa sunt numquam repudiandae itaque, explicabo ut quod eum provident dicta molestias! Blanditiis temporibus inventore doloremque recusandae.</p><a href="#">Read more</a>
                        </div>
                      </div>
                    </div> -->
                  </div>
                  <div class="leader-button-next"><span></span></div>
                  <div class="leader-button-prev"><span></span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php }?>
        <section class="life-bottom d-flex align-items-center">
          <div class="w-100">
            <h3>Be a part of #AWorldOfAwesome</h3>
            <div class="life-bottom__text"><a class="shape-btn" href="<?php echo $career_base_url?>"><span>Explore Careers</span></a></div>
          </div>
        </section>
      </div>
    </main>
    
    <?php get_footer();?>
    
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/life-myntra.js"></script>
  </body>
</html>