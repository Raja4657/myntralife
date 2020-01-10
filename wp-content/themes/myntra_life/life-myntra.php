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
         <style>.web-pagination .active{background-color: #ff3f6c;color: #fff;}
          .avoid-clicks {pointer-events: none;background-color: #f3f3f3!important;}
         </style>
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
          <h2 class="life-banner__title"> <img src="<?php echo get_field("titile_image"); ?>" 
											   alt="<?php echo get_field("life_alt_tag"); ?>"/></h2>
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
                           if($i==2){$tab2_cat=$category_slug;} if($i==3){$tab3_cat=$category_slug;} if($i==4){$tab4_cat=$category_slug;}
                           if($i==5){$tab5_cat=$category_slug;}
                      ?>
            <li class="nav-item"><a class="nav-link" id="<?php echo $category_slug;?>-tab" data-toggle="tab" href="<?php echo "#".$category_slug;?>-content" role="tab" aria-controls="culture" aria-selected="false"><?php echo $category_name;?></a>
            </li>
            <?php }$i++; }?>
          </ul>
          
          
          
          <div class="tab-content" id="myTabContent">
            
            
            
            
            <div class="tab-pane fade show active" id="all-content" role="tabpanel" aria-labelledby="all-tab">
              <div class="overflow-hidden">
                <div class="gallery-content__boxwrap">
                  <div class="row" id='taball'>
                  
                    
                    <?php $gallary_id=1;
                    $all_count_posts=0;
                    $all_count_posts = wp_count_posts( 'life_myntra' )->publish;
                    if($all_count_posts>0){$all_count_posts=$all_count_posts/10;}
                  		$the_query=new WP_Query(array('post_type' => 'life_myntra','posts_per_page'=>'10','paged' => 1,'post_status' => 'publish',));
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
                        <span>#<?php echo $category_name1;?></span><?php }?>
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
						  
                        <span data-link="<?php echo strtolower($category_name1)?>-content">#<?php echo $category_name1;?></span>
							 
							  <?php }?>
                      </div>
                    </div>
                    
                   <?php }$gallary_id++;}endwhile;wp_reset_query();?>
                   
                  </div>
                </div>
              </div>
              
              <div class="text-right">
             <?php if($all_count_posts>1){?>
                <ul class="pagination web-pagination d-inline-flex">
              
                  <li class="page-item"><a class="page-link prev-link avoid-clicks" href="javascript:void(0)" onclick="getPrevLife('all')"></a></li>
                   <?php $pagination_pages=$all_count_posts;if($all_count_posts>5){$pagination_pages=5;}for($z=1;$z<=$pagination_pages;$z++){?>
                  <li class="page-item" id="li-<?php echo $z?>"><a class='page-link page-<?php echo $z?> <?php if($z==1){?>active<?php }?>' onclick='getLife(<?php echo $z?>,"1")' href='javascript:void(0)'><?php echo $z?></a></li>
                  <?php }?>
                
                  <li class="page-item"><a class="page-link next-link" href="javascript:void(0)"  onclick="getNextLife('all')"> </a></li>
                </ul>
                <?php }?>
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
            <div class="tab-pane fade" id="<?php echo $category_slug?>-content" role="tabpanel" aria-labelledby="culture-tab">
              <div class="overflow-hidden">
                <div class="gallery-content__boxwrap">
                  <div class="row">
                    
                    
                     <?php $i=1;
                  		$the_query=new WP_Query(array('post_type' => 'life_myntra',
                  				'posts_per_page'=>'10',
                  				'post_status' => 'publish',
								'tax_query' => array(array ('taxonomy' => 'life_category','field' => 'slug','terms' => "$category_name"))
                  		));
                  		while($the_query->have_posts() ) : $the_query->the_post(); 	{
						$video_link=get_field("lifemyntravideo");
                  		if($video_link!=""){?>
                  		<div class="col-sm-4">
                      <div class="gallery-content__box video" href="#" data-index="gallery<?php echo $gallary_id;?>" data-toggle="modal" data-target="<?php echo "#".$category_slug?>-modal">
                        <div style="background-image: url('<?php echo get_field('lifemyntraimage')?>')"></div><?php   
				     				$category_list=get_the_terms($id, "life_category");
				     				foreach ( $category_list as $category_names ) {
				     					$category_name1=$category_names->name;
                     		 ?>
                        <span>#<?php echo $category_name1;?></span><?php }?>
                      </div>
                    </div>
                    <?php }else{?>
                    <div class="col-sm-4">
                      <div class="gallery-content__box" href="#" data-index="gallery<?php echo $gallary_id;?>" data-toggle="modal" data-target="<?php echo "#".$category_slug?>-modal">
                        <div class="gallery-content__image" style="background-image: url('<?php echo get_field('lifemyntraimage')?>')"></div><?php   
				     				$category_list=get_the_terms($id, "life_category");
				     				foreach ( $category_list as $category_names ) {
				     					$category_name1=$category_names->name;
                     		 ?>
                        <span>#<?php echo $category_name1;?></span><?php }?>
                      </div>
                    </div>
                     <?php }$i++;$gallary_id++;}endwhile;wp_reset_query();?>
                    
                    
                  </div>
                </div>
              </div>
            </div>
            
            <?php }?>
            
            
            
            
          </div>
        </section>
        
        
        
        <div class="modal fade web-middle-modal" id="gallery-modal" role="dialog">
          <div class="modal-dialog leader-modal">
            <!-- Modal content-->
            <div class="modal-content"><span class="close" data-dismiss="modal">×</span>
              <div class="modal-body">
                <div class="leader-slider gallery-slider swiper-container">
                  <div class="swiper-wrapper" id='tabscrollall'>
                    
                     <?php $gallary_pop_id=1;
                  		$the_query=new WP_Query(array('post_type' => 'life_myntra','posts_per_page'=>'10','post_status' => 'publish',));
                  		while($the_query->have_posts() ) : $the_query->the_post(); 	{
						$video_link=get_field("lifemyntravideo");
						if($video_link!=""){
                  		?>
                    <div class="swiper-slide" data-slide="gallery<?php echo $gallary_pop_id?>">
                      <div class="leader-slider__box gallery-modal__box">
                        <div class="embed-responsive embed-responsive-16by9">
                          <iframe class="embed-responsive-item" id="video" data-src="<?php echo $video_link?>" allowscriptaccess="always" allow=""></iframe>
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
                    
                    <?php }$gallary_pop_id++;}endwhile;wp_reset_query();?>
                    
                    
                  </div>
                  <div class="leader-button-next"><span></span></div>
                  <div class="leader-button-prev"><span></span></div>
                </div>
              </div>
            </div>
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
                      
                      
                       <div class="modal fade web-middle-modal" id="<?php echo $category_slug?>-modal" role="dialog">
          <div class="modal-dialog leader-modal">
            <!-- Modal content-->
            <div class="modal-content"><span class="close" data-dismiss="modal">×</span>
              <div class="modal-body">
                <div class="leader-slider gallery-slider swiper-container">
                  <div class="swiper-wrapper">
                    
                   <?php $i=1;
                  		$the_query=new WP_Query(array('post_type' => 'life_myntra',
                  				'posts_per_page'=>'10',
                  				'post_status' => 'publish',
								'tax_query' => array(array ('taxonomy' => 'life_category','field' => 'slug','terms' => "$category_name"))
                  		));
                  		while($the_query->have_posts() ) : $the_query->the_post(); 	{
						$video_link=get_field("lifemyntravideo");
						if($video_link!=""){
                  		?>
                    <div class="swiper-slide" data-slide="gallery<?php echo $gallary_pop_id?>">
                      <div class="leader-slider__box gallery-modal__box">
                        <div class="embed-responsive embed-responsive-16by9">
                          <iframe class="embed-responsive-item" id="video" data-src="<?php echo $video_link?>" allowscriptaccess="always" allow=""></iframe>
                        </div>
                        <div class="leader-slider__popcontent">
                          <p><?php echo the_content()?></p><a href="#">Read more</a>
                        </div>
                      </div>
                    </div>
                    <?php }else{?>
                    <div class="swiper-slide" data-slide="gallery<?php echo $gallary_pop_id?>">
                      <div class="leader-slider__box gallery-modal__box"><img src="<?php echo get_field('lifemyntraimage')?>" alt=""/>
                        <div class="leader-slider__popcontent">
                          <p><?php echo the_content()?></p><a href="<?php echo get_field('read_more_link')?>"><?php echo get_field('read_more')?></a>
                        </div>
                      </div>
                    </div>
                    
                    <?php }$gallary_pop_id++;}endwhile;wp_reset_query();?>
                    
                   
                  </div>
                  <div class="leader-button-next"><span></span></div>
                  <div class="leader-button-prev"><span></span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
                      
                       <?php $i++;}?>
        
        
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
        
        <script>

 var tab1_page=1;
 var tab2_page=1;
 var tab3_page=1;
 var tab4_page=1;
 var tab5_page=1;



 var tab2_cat="<?php echo $tab2_cat?>";
 var tab3_cat="<?php echo $tab3_cat?>";
 var tab4_cat="<?php echo $tab4_cat?>";
 var tab5_cat="<?php echo $tab5_cat?>";
 var total_pages="<?php echo $all_count_posts?>";
 function getPrevLife(cat){
	 tab1_page=tab1_page-1;
	 getLife(tab1_page,cat);
 }
 function getNextLife(cat){
	 tab1_page=tab1_page+1;
	 getLife(tab1_page,cat);
 }
 
   function getLife(page,cat){
	   
		if(cat==1){cat="all";}
		if(page>3 && page<(total_pages-1)){
			var j=1;
			
			for(var i=1;i<=5;i++){
				var p=0;
				
				if(j==1){p=parseInt(page-2);}if(j==2){p=parseInt(page-1);}if(j==3){p=parseInt(page);}if(j==4){p=parseInt(page+1);}if(j==5){p=parseInt(page+2);}
        		$("#li-"+j).html("<a class='page-link page-"+p+"' onclick='getLife("+p+",1)' href='javascript:void(0)'>"+p+"</a>");
        		j++;
			}
		}

		if(page>2 && page<4){
			var j=1;
			for(var i=1;i<=5;i++){
				var p=0;
				if(j==1){p=parseInt(page-2);}if(j==2){p=parseInt(page-1);}if(j==3){p=parseInt(page);}if(j==4){p=parseInt(page+1);}if(j==5){p=parseInt(page+2);}
        		$("#li-"+j).html("<a class='page-link page-"+p+"' onclick='getLife("+i+",1)' href='javascript:void(0)'>"+p+"</a>");
        		j++;
			}
		}

		$(".page-link").removeClass("active");
		   $(".page-"+page).addClass("active");

		   if(page>1){$(".prev-link").removeClass("avoid-clicks");}
		   if(page==1){$(".prev-link").addClass("avoid-clicks");}

		   if(page==total_pages){$(".next-link").addClass("avoid-clicks");}
		   if(page<total_pages){$(".next-link").removeClass("avoid-clicks");}
		   
	   tab1_page=page;
	   var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";
	   var data = {
          	  'category' : cat,
          	  'page' : page,
               'action': 'load_posts_by_ajax',
               'security': '<?php echo wp_create_nonce("load_more_posts"); ?>'
           };
      
           $.post(ajaxurl, data, function(response) {

        	   
        	 var count = 0;
         	 var temp=response.split("####");
         	count=temp[0];
         
         	$('#tab'+cat).html(temp[1]);

         	$('#tabscroll'+cat).html(temp[2]);
             
           }); 
   }
  
   </script>
   
  </body>
</html>