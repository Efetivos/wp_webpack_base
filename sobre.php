<!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html;charset=UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><meta http-equiv="X-UA-Compatible" content="ie=edge"><meta name="theme-color" content="#000000"><title><?php    if(is_front_page())
       echo "Home";
   else if(is_404())
       echo "Page Not Found";
   else if(is_category() || is_search() )
       echo single_cat_title();
   else
       the_title();
   echo ' | '.get_bloginfo('name');  
?></title><?php  //Template Name: Sobre
?><link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/app.css"><?php wp_head(); ?></head><body <?php body_class(); ?>><?php include 'includes/mymenu.php'; ?><div class="box-img-header e-wvw e-hvh e-hiiden e-flex e-rel"><?php the_post_thumbnail('large', array('class' => 'img-header e-wp e-hp e-img-fit')); ?><h1 class="h1-header e-abs t-white">PAGINA SOBRE</h1></div><!-- init foooter--><?php include 'includes/myfooter.php'; ?></body></html>