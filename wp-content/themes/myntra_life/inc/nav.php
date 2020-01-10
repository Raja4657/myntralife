<?php 
$blog_base_url=ot_get_option('blog_url');
$career_base_url=ot_get_option('career_url');
        global $post;
        $post_slug = $post->post_name;
        $menu_color="";
        if($post_slug=="about" || $post_slug=="contact" ){$menu_color="black";}
        ?>
<header class="header-top <?php if($menu_color==""){?>transparent<?php }?>">
          <div class="container container--banner navbar">
            <div class="align-center-v"><a class="nav-logo" href="<?php echo site_url()?>">
            <img class="nav-logo__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-white.svg" alt="Logo"/>
                <div id="life-header"></div></a></div>
            <div class="align-center-v">
              <div class="nav-toggler mx-3">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
              </div>
              <div class="nav-menu-wrapper">
                <nav class="nav-menu">
                	<a class="nav-menu__link <?php if($post_slug=="about"){?>active<?php }?>" href="<?php echo site_url()?>/about">About</a>
                	<a class="nav-menu__link" href="<?php echo $career_base_url?>">Careers</a>
                	<a class="nav-menu__link <?php if($post_slug=="myntra-life"){?>active<?php }?>" href="<?php echo site_url()?>/myntra-life">Life</a>
                	<a class="nav-menu__link" href="<?php echo $blog_base_url?>">Stories</a>
                </nav>
              </div>
            </div>
          </div>
        </header>