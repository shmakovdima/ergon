<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
 <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/fancybox/jquery.fancybox.css" type="text/css" media="screen" /> 
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/scripts.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/fancybox/jquery.fancybox.pack.js"></script> 
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="navig_header">
  <div class="menu_nav menu-mainmenu">
          <div class="container">
              <div class="row">
                    <?php wp_nav_menu(array(
              'menu' => 'mainmenu', // название меню, мы его писали в админке, в поле, скриншот которого, на картинке выше.
               // контейнер для меню, по умолчанию 'div', в нашем случае указано 'nav', чтобы не создавать контейнер - пишем false.
              'container_class' => '', // класс для контейнера <div> или <nav>, если класс не нужен, ничего не пишем.
              'container_id' => '', // id для для контейнера <div> или <nav>, если класс не нужен, ничего не пишем.
              'menu_class' => 'footer__menu', // класс для меню. этот класс добавится к тегу <ul>
              'menu_id' => '', // id для меню. этот id добавится к тегу <ul>
            )); ?>
              <div class="search text-right">
                <span>Поиск</span>
                                <form role="form" role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <input title="Поиск" type="text" class="search-form" autocomplete="off" placeholder="Найти..." name="s">
                                    <i class="fa fa-search"></i>              
                                </form>
                
                           </div>
              </div>
        </div>
    </div>
    <div class="scroll_bar">
         <div class="container">
            <div class="row">
                 <a class="col-md-3 show" href="">
                            <span>Шовные материалы</span>
                        </a>
                        <a class="col-md-3 set">
                            <span>Сетчатые импланты</span>
                        </a>
                        <a class="col-md-3 gem">
                            <span>Гемостатики</span>
                        </a>
                        <a class="col-md-3 retr">
                            <span>Ретракторы</span>
                        </a>
            </div>
         </div>
    </div>
</div>



<header class="wow fadeIn  animated">
	   <!--<div id="header-top">
       
            <div class="container">
                <div class="row">
                 <ul class="social">
                  <li>
                      <a href="#" title="Мы в Facebook">
                        <i class="fa fa-facebook"></i>
                      </a>
                  </li>
                  <li>
                       <a href="#" title="Мы в Twitter">
                        <i class="fa fa-twitter"></i>
                      </a>
                  </li>
                  <li>
                       <a href="#" title="Мы в Google+">
                        <i class="fa fa-google-plus"></i>
                      </a>
                  </li>
                  <li>
                       <a href="#" title="Мы в LinkenId">
                        <i class="fa fa-linkedin"></i>
                      </a>
                  </li>
                  <li>
                       <a href="#" title="Мы в Youtube">
                        <i class="fa fa-youtube-play"></i>
                      </a>
                  </li>
                  <li>
                       <a href="#" title="Мы в Instagram">
                        <i class="fa fa-instagram"></i>
                      </a>
                  </li>
                </ul>

         
            </div>
            </div>
        </div>-->
                <div class="container footer_first">
          <div class="row">
            <div class="navbar-header col-xs-6">
              
              <a class="logo navbar-btn pull-left" href="" title="">
                <img height="79px" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logi.png" alt="" />
              </a>
             
                    <p class="lead">Хирургические<br>материалы</p>
               
            

              </div>
              <div class="col-xs-6 text-right link_top">
                  <a href="tel:+375 (17) 335 33 96" title="Наш телефон" class="phone">+375 (17) 335 33 96</a>
                  <a href="tel:info@ergonest.com" title="Наш ящик" class="mail">info@ergonest.com</a>
              </div>

              
              

          </div>
   </div>
   <div class="header-bottom ">
      <div class="menu_nav menu-mainmenu">
          <div class="container">
              <div class="row">
                    <?php wp_nav_menu(array(
              'menu' => 'mainmenu', // название меню, мы его писали в админке, в поле, скриншот которого, на картинке выше.
               // контейнер для меню, по умолчанию 'div', в нашем случае указано 'nav', чтобы не создавать контейнер - пишем false.
              'container_class' => '', // класс для контейнера <div> или <nav>, если класс не нужен, ничего не пишем.
              'container_id' => '', // id для для контейнера <div> или <nav>, если класс не нужен, ничего не пишем.
              'menu_class' => 'footer__menu', // класс для меню. этот класс добавится к тегу <ul>
              'menu_id' => '', // id для меню. этот id добавится к тегу <ul>
            )); ?>
              <div class="search text-right">
                <span>Поиск</span>
                                <form role="form" role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <input title="Поиск" type="text" class="search-form" autocomplete="off" placeholder="Найти..." name="s">
                                    <i class="fa fa-search"></i>              
                                </form>
                
                           </div>
              </div>
          </div>
      </div>

       <div id="carousel_main" class="carousel slide carousel-fade" data-ride="carousel_main">
               
            
          <div class="carousel-inner">
               

                     <?php $counter = 0; ?>
           <?php $posts = get_posts("category_name=slider&numberposts=6&orderby=date&order=ASC&post_status=publish"); ?>
          <?php if ($posts) : ?>
          <?php foreach ($posts as $post) : setup_postdata ($post); ?>
            <?php 

              $url_array = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium');
              $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
      

              if ($counter==0) {
                echo '  <div class="item active" style="background-image: url('.$url_array[0].')" data-img = "'.$thumb['0'].'">';
              }else{
                echo ' <div class="item" style="background-image: url('.$url_array[0].')" data-img = "'.$thumb['0'].'">';
              }
               $counter++;
            ?>
                 
                </div>
             <?php endforeach; ?>
              <?php endif; ?>
                  
              <div class="container">

                <div class="row "> 

                                       <ol class="carousel-indicators text-left">
                <?php $counter = 0;  ?>
                <?php $posts = get_posts("category_name=slider&numberposts=6&orderby=date&order=ASC&post_status=publish"); ?>
                <?php if ($posts) : ?>
                <?php foreach ($posts as $post) : setup_postdata ($post); ?>
                  <?php 
                    if ($counter==0) {
                      echo '<li data-target="#carousel_main" data-slide-to="'.$counter.'" class="active"></li>';
                    }else{
                      echo '<li data-target="#carousel_main" data-slide-to="'.$counter.'"></li>';
                    }
                    $counter++;
                  ?>

               
                <?php endforeach; ?>
                <?php endif; ?> 
              </ol>
              </div>
              </div>

              </div>

               <div class="slider_text">
                <div class="h1_text">
                    <h1>Итальянский производитель хирургических шовных материалов и сетчатых имплантантов 
Премиум класса</h1>
                </div>
            <div class="container slider_row">
               
                <div class="row "> 
                    <a href="" title="" class="make_order">Сделать заказ</a>     

                    <div class="slider__bottom_down">
                        <a class="col-md-3 show" href="">
                            <span>Шовные материалы</span>
                        </a>
                        <a class="col-md-3 set">
                            <span>Сетчатые импланты</span>
                        </a>
                        <a class="col-md-3 gem">
                            <span>Гемостатики</span>
                        </a>
                        <a class="col-md-3 retr">
                            <span>Ретракторы</span>
                        </a>
                    </div> 
                </div>
                
            </div>
          </div>
             
              
          </div>
   </div>
   
</header>


