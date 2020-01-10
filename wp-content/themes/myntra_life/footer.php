<?php 
$blog_base_url=ot_get_option('blog_url');
$career_base_url=ot_get_option('career_url');
        ?>

<!--   data-aos="fade"-->
<footer class="footer">
	<img class="bg-pattern" src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-pattern.svg" alt=""/>
      <div class="container">
        <div class="row justify-content-between m-0">
          <div class="footerlogo"><img class="footer-logo img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-full.svg" alt="" />
            <ul class="footer-list footer-locations">
              <li class="footer-list__item">
				  <a class="footer-link" href="https://goo.gl/maps/4Gxspk7K97PipHk16" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/location.svg" alt=""/>Bengaluru (HQ)</a></li>
              <li class="footer-list__item">
				  <a class="footer-link" href="https://goo.gl/maps/DvtsDJLNDgLDs1U47" target="_blank">gurgaon</a></li>
              <li class="footer-list__item">
				  <a class="footer-link" href="https://goo.gl/maps/fwrB6S1rQYFTB39Q8" target="_blank">Mumbai</a></li>
            </ul>
            <div class="footer-social-links d-flex justify-content-between"><a href="<?php echo ot_get_option('linkedin_url');?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/icon-linkedin-col.svg" alt=""/></a><a href="<?php echo ot_get_option('facebook_url');?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/icon-facebook-col.svg" alt=""/></a><a href="<?php echo ot_get_option('youtube_url');?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/icon-youtube-col.svg"/></a><a href="<?php echo ot_get_option('insta_url');?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/icon-instagram-col.svg" alt=""/></a><a href="<?php echo ot_get_option('twitter_url');?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/icon-twitter-col.svg" alt=""/></a></div>
          </div>
          <div class="footerlinks text-center">
            <div class="d-flex align-items-center">
              <ul class="footer-list">
                <li class="footer-list__item"><a class="footer-link" href="<?php echo site_url()?>/contact">contact</a></li>
                <li class="footer-list__item"><a class="footer-link" href="https://www.myntra.com/" target="_blank">Shop</a></li>
                <li class="footer-list__item"><a class="footer-link" href="<?php echo $career_base_url?>">Careers</a></li>
                <li class="footer-list__item"><a class="footer-link" href="<?php echo site_url()?>/privacy-policy">Privacy Policy</a></li>
                <li class="footer-list__item"><a class="footer-link" href="<?php echo site_url()?>/terms">Terms & Conditions</a></li>
              </ul>
            </div>
            <h4 class="footer-desc"><span class="">Myntra </span>is proud to be an Equal Opportunity Employer</h4>
          </div>
          <div class="w-100">
            <p class="footer-copyright">© 2019 www.myntra.com. All rights reserved.</p>
          </div><a class="backtotop" href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
<path d="M30.4553438,22.0053438 C30.0439737,21.5939737 29.3771031,21.5936752 28.9653649,22.0046768 L23.80625,27.1545625 L23.80625,27.1545625 L23.80625,15.35625 C23.80625,14.7728992 23.3333508,14.3 22.75,14.3 C22.1666492,14.3 21.69375,14.7728992 21.69375,15.35625 L21.69375,27.1545625 L21.69375,27.1545625 L16.5491408,22.0007336 C16.135703,21.5865549 15.4647873,21.5859542 15.0506086,21.999392 C15.0503848,21.9996154 15.0501611,21.9998389 15.0499375,22.0000625 C14.6357585,22.4142415 14.6357585,23.0857585 15.0499375,23.4999375 L21.8307612,30.2807612 C22.3384428,30.7884428 23.1615572,30.7884428 23.6692388,30.2807612 L30.4553438,23.4946562 C30.866606,23.083394 30.866606,22.416606 30.4553438,22.0053438 Z" id="Path" transform="translate(22.750000, 22.750000) rotate(-180.000000) translate(-22.750000, -22.750000) "/>
</svg></a>
        </div>
      </div>
    </footer>
    
    
    <!-- Common scripts-->
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<script defer="defer" src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/lottie.js"></script>
        <!-- if (page_name == "home")-->
        <!--    script(src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/countUp.min.js")-->
        <script defer="defer" src="<?php echo get_template_directory_uri(); ?>/assets/js/app.js"></script>