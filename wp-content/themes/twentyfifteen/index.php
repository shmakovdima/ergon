<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<section class="izb wow fadeIn  animated ">
	<div class="container">
		<div class="row">
				<a href="" title="Перейти в магазин" class="link">Перейти в магазин</a>
				<h2>Избранная продукция</h2>
				<?php $posts = get_posts("category_name=izbrannoe&orderby=date&post_status=publish"); ?>
          <?php if ($posts) : ?>
          <?php foreach ($posts as $post) : setup_postdata ($post); ?>
           	<div class="col-md-6 item">
           		<div class="col-xs-6">
           			<a class="fancyimage" title="<?php echo $post->post_title; ?>" rel="group" href="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID));  ?>"> 
           				<div>
           					<?php the_post_thumbnail('full'); ?>
           				</div>
           				
           			</a>
           		</div>
           		<div class="col-xs-6">
           			<h3><?php the_title() ?></h3>
           			<p><?php echo $post->post_content; ?></p>
           			<a href="" title="Конфигурации модели">Конфигурации модели</a>
           		</div>
           		

           		
           	</div>
             <?php endforeach; ?>
              <?php endif; ?> 
            
		</div>
	</div>

</section>

<section class="prev special_border wow fadeIn  animated">
	<div class="container">
		<div class="row">
			<div class="bread_crumbs">
				<span class="main">Главная</span>
				<span class="delimetr"></span>
				<span class="active">Преимущества</span>

			</div>
				<h2>Наши преимущества</h2>
				<?php $posts = get_posts("category_name=prev&orderby=date&numberposts=4&post_status=publish"); ?>
          <?php if ($posts) : ?>
          <?php foreach ($posts as $post) : setup_postdata ($post); ?>
           	<div class="col-md-3 col-sm-6 " >
           		<?php the_post_thumbnail('full'); ?>

           		<h3><?php the_title() ?></h3>
           		<p><?php echo $post->post_content; ?></p>
           	</div>
             <?php endforeach; ?>
              <?php endif; ?> 
            
		</div>
	</div>

</section>

<section class="red_section wow fadeIn  animated">
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<h3>Мы свяжемся с Вами!</h3>
				<span class="new">Заполните форму обратной связи<br> 
и ждите звонка</span>
			</div>
	
			<div class="col-sm-9">
				<?php echo do_shortcode( '[contact-form-7 id="60" title="Без названия"]' ); ?>
			</div>
			
		</div>
	</div>
</section>

<section class="about_us wow fadeIn  animated">
	<div class="container">
		<div class="row">
			<div class="bread_crumbs">
				<span class="main">Главная</span>
				<span class="delimetr"></span>
				<span class="active">О компании</span>
			</div>
			<div class="col-sm-12 text-center text_introd">
				<span class="year">1963 г.</span>
				<p class="lead_text">Итальянская компания «Эргон Сутрамед» с 1963 производит и успешно продвигает шовные<br> материалы «Эргон» на мировом рынке</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="logo_mid">
						
					</div>
				</div>
				<div class="col-sm-6 border_lefted">
					<p class="mid_text">Сегодня компания <span class="red">«Ergon Est»</span> производит и поставляет хирургические шовные материалы,
					 сетчатые импланты и гемостатики, а также поставляет ретракторы и<br> кардиомаркеры.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<p class="mid_text second">
						Продукция компании пользуется спросом у хирургов в 
						сотнях организаций здравоохранения Республики Беларусь и тысячах ЛПУ Российской Федерации.
					</p>
					
				</div>
				<div class="col-sm-6 border_lefted">
					<div class="logo_pin"></div>
				</div>
			</div>
			<div class="col-sm-6">
			<div class="logo_bel"></div>
			</div>
			<div class="col-sm-6 border_lefted">
				<p class="mid_text third"><span class="red">СООО «Эргон Эст»</span> — это дочерняя
				 компания итальянской фирмы «Эргон Сутрамед». Наша фабрика расположена в Беларуси. В производстве, полностью основанном на итальянских технологиях и
				 научных разработках, используется только качественное европейское сырье.</p>
			</div>
			<div class="col-sm-12 text-center text_introd">
				<span class="year">2015 г.</span>
				<p class="lead_text">Сегодня компания <span class="red">«Ergon Est»</span> производит и<br>
				 поставляет хирургические шовные<br>
				  материалы, сетчатые импланты и гемостатики,<br>
				   а также поставляет ретракторы и<br>
				    кардиомаркеры.</p>
			</div>
             
		</div>
	</div>

</section>


<section class="news special_border wow fadeIn  animated">
	<div class="container">
		<div class="row">
			<div class="bread_crumbs">
				<span class="main">Главная</span>
				<span class="delimetr"></span>
				<span class="active">Новости компании</span>

			</div>
				<h2>Будьте в курсе наших событий:</h2>
				<?php $posts = get_posts("category_name=news&orderby=date&numberposts=4&post_status=publish"); ?>
          <?php if ($posts) : ?>
          <?php foreach ($posts as $post) : setup_postdata ($post); ?>
           	<div class="col-md-6 col-xs-12 news_about" >
           		<div class="img" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID));  ?>')">
           			
           		</div>
           		<div class="block">
           			<h3><?php the_title(); ?></h3>
           			<p><?php kama_excerpt(); ?><p>
           			<div class="upper">
           				<span class="time"> <?php the_time('j.m.Y'); ?></span>
           				<a href="" title="Подробнее">Подробнее</a>
           			</div>
           		</div>
           		
           
           	</div>
             <?php endforeach; ?>
              <?php endif; ?> 
              <div class="col-sm-12 text-center margin_top_50">
					<a href="" class="btn">Все новости компании</a>
			</div>
		</div>
	</div>

</section>

<section class="our_photo special_border wow fadeIn  animated">
	<div class="container">
		<div class="row">
			<div class="bread_crumbs">
				<span class="main">Главная</span>
				<span class="delimetr"></span>
				<span class="active">Фотогалерея</span>

			</div>
				<h2>Фотогалерея:</h2>

		</div>
	</div>

</section>


<section class="our_retailrs special_border wow fadeIn  animated">
	<div class="container">
		<div class="row">
			<div class="bread_crumbs">
				<span class="main">Главная</span>
				<span class="delimetr"></span>
				<span class="active">Отзывы о компании</span>

			</div>
				<h2>О нас говорят:</h2>
          <?php $posts = get_posts("category_name=speak_about_us&orderby=date&post_status=publish"); ?>
          <?php if ($posts) : ?>
          <?php foreach ($posts as $post) : setup_postdata ($post); ?>
           	<div class="col-md-3 col-xs-6 icons_about" >

           		<a class="fancyimage" title="<?php echo $post->post_title; ?>" rel="group_about" href="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID));  ?>"> 
           				<div>
           					<?php the_post_thumbnail('full'); ?>
           				</div>
           				
           			</a>

           
           		<span><?php the_title() ?></span>
           	</div>
             <?php endforeach; ?>
              <?php endif; ?> 
              
		</div>
	</div>

</section>

<section class="out_partners special_border wow fadeIn  animated">
	<div class="container">
		<div class="row">
			<div class="bread_crumbs">
				<span class="main">Главная</span>
				<span class="delimetr"></span>
				<span class="active">Наши партнеры</span>

			</div>
				<h2>С нами сотрудничают:</h2>

          <?php $posts = get_posts("category_name=our_partners&orderby=date&post_status=publish"); ?>
          <?php if ($posts) : ?>
          <?php foreach ($posts as $post) : setup_postdata ($post); ?>
           	<div class="col-md-3 col-xs-6 icons" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID));  ?>')">
           		<span><?php the_title() ?></span>
           	</div>
             <?php endforeach; ?>
              <?php endif; ?> 
              
		</div>
	</div>

</section>

<section class="contact_us special_border wow fadeIn  animated">
	<div class="container">
		<div class="row">
			<h2>Обратная связь:</h2>
			 <?php echo do_shortcode( '[contact-form-7 id="18" title="Контактная форма 1"]' ); ?>
		</div>
	</div>

</section>
	
<?php get_footer(); ?>
