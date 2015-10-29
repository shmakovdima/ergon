<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>


	<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="footer-top">
                <div class="container">
          <div class="row">
          
              <div class="col-sm-5 footer__element">
              	<?php wp_nav_menu(array(
  						'menu' => 'mainmenu', // название меню, мы его писали в админке, в поле, скриншот которого, на картинке выше.
  						 // контейнер для меню, по умолчанию 'div', в нашем случае указано 'nav', чтобы не создавать контейнер - пишем false.
  						'container_class' => '', // класс для контейнера <div> или <nav>, если класс не нужен, ничего не пишем.
  						'container_id' => '', // id для для контейнера <div> или <nav>, если класс не нужен, ничего не пишем.
  						'menu_class' => 'footer__menu', // класс для меню. этот класс добавится к тегу <ul>
  						'menu_id' => '', // id для меню. этот id добавится к тегу <ul>
						)); ?>
          
                   <span class="footer__social__icons">
                      <a href="#" title="Мы в Youtube">
                        <i class="fa fa-youtube"></i>
                      </a>
                       <a href="#" title="Мы в Skype">
                        <i class="fa fa-skype"></i>
                      </a>
                      <a href="#" title="Мы в ВКонтакте">
                        <i class="fa fa-vk"></i>
                      </a>
                      <a href="#" title="Мы в Facebook">
                        <i class="fa fa-facebook"></i>
                      </a>
                       <a href="#" title="Мы в Одноклассниках">
                          <i class="fa fa-odnoklassniki"></i>
                        </a>
                  </span>
                  
              </div>
              <div class="col-sm-3 footer__element__black">
                  <span class="footer__element__intro">Юридический адрес:</span>
                  <div class="footer__element__text">
                      Республика Беларусь,<br>
                      г. Молодечно,<br>
                      ул. В.Гостинец, 143 КГлавная
                  </div>
              </div>
               <div class="col-sm-2 footer__element__normal">
                  <span class="footer__element__intro">Почтовый адрес</span>
                  <div class="footer__element__text">
                      220053, г. Минск,<br>
                      ул. Бегомльская, 19
                  </div>


              </div>
               <div class="col-sm-2 footer__element__normal">
                  <span class="footer__element__intro">Контакты:</span>
                  <div class="footer__element__text">
                  Tel/ Fax/ E-mail:<br>
          <a href="tel:+375 (17) 335-33-96" title="Наш телефон">+375 (17) 335-33-96</a><br>
<a href="tel:+375 (17) 335-33-98" title="Наш телефон">+375 (17) 335-33-98</a><br>
<a href="tel:+375 (17) 335-34-00" title="Наш телефон">+375 (17) 335-34-00</a><br>
<a href="mailto:info@ergonest.com" title="Наша почта">info@ergonest.com</a><br>
<a href="mailto:marketing@ergonest.com" title="Наша почта">marketing@ergonest.com</a><br>
                </div>
            </div>

          </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="text-left col-xs-6"><span>©  Copyright IT-Time 2015</span></div>
                <div class="text-right col-xs-6"><span>Разработано в студии </span> <a class="footer_about_us" href="http://it-time.by/" title="Cделано в IT-time"></a></div>
            </div>
        </div>
    </div>
	
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>

</html>
