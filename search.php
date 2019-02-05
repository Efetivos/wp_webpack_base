<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#000000">
    <title>
      <?php    if(is_front_page())
             echo "Home";
         else if(is_404())
             echo "Page Not Found";
         else if(is_category() || is_search() )
             echo single_cat_title();
         else
             the_title();
         echo ' | '.get_bloginfo('name');  
      ?>
    </title>
    <?php  //Template Name: Search
    ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js-compiled/bundle.js"></script><?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>><?php include 'layout/partials/mymenu.php'; ?>
    <?php    $text = get_search_query();
       $allsearch = new WP_Query("s=$s&showposts=0"); 
       $qtdPost = $allsearch ->found_posts;
    ?><?php if( have_posts() ): ?>
    <h1>tem post</h1>
    <h1>Você buscou por: <?php echo $text ?></h1>
    <h2>Localizamos <?php echo $qtdPost ?>, espero que ajude :)</h2><?php  while( have_posts() ): the_post(); ?> 
    <div class="content-blog e-flex-col e-85 e-rel e-wvw e-hvh"><?php the_post_thumbnail('large', array('class' => 'img-service e-wp e-img-fit')); ?>
      <h1><?php the_title(); ?><a href="<?php the_permalink()?>">LINK PARA POSTAGEMS</a></h1><?php if ( $content_source == 'excerpt' ) { ?>   <div class="e-sans t-color">
             <?php the_excerpt(); ?>
         </div>
         <?php } else { ?>
         <div class="e-sans t-color">
             <?php the_category(' ')?> 
         </div>
      <?php } ?> 
      <btn-link class="e-rel e-serif t-gray e-curp"><a class="e-serif t-gray e-curp" href="<?php the_permalink(); ?>">visualizar</a></btn-link>
    </div><?php endwhile; else: ?>
    <h1>Você buscou por: <?php echo $text ?></h1>
    <p class="e-serif t-gray">Mas não encontramos nada, tente novamente :)</p><?php endif; ?>
    <!-- init foooter--><?php include 'layout/partials/myfooter.php'; ?>
  </body>
</html>