<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package myntra
 * @subpackage myntraLife
 * @since 1.0.0
 */
?>
   <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" type="image/x-icon"/>
        
        <?php wp_head()?>
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,600,500,700,800,900|Source+Sans+Pro:300,400,600,900&amp;display=swap" rel="stylesheet"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css"/>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css"/>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
        <script>var asset_url="<?php echo get_template_directory_uri();?>";</script>
        