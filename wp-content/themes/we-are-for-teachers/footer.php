<footer class="footer">
  <div class="inner">

	  <?php the_custom_logo(); ?>
	  <?php /* <a href="#" class="footer__logo logo">
			  <img src="<?php bloginfo('template_directory') ?>/img/footer-logo.svg" alt="Мы - учителям!" width="363" height="46">
			  </a> */ ?>

	  <?php
	  $args = array(
		  'menu'            => 'footer',
		  'menu_class'      => 'footer__menu',
		  'container'       => 'ul',
		  'container_class' => 'footer__menu',
		  'fallback_cb'     => 'wp_page_menu',
		  'echo'            => 'true',
		  'depth'           => '0',
		  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	  );
	  wp_nav_menu( $args );
	  ?>
    <div class="footer__right-col">
      <div class="footer__contacts">
        <a href="tel:+7(000)000-00-00" class="footer__tel"><?php the_field( 'phone-number', 42 ) ?></a>
        <br>
        <a href="mailto:mail@mail.ru" class="footer__email"><?php the_field( 'e-mail', 42 ) ?></a>
      </div>
      <ul class="footer__social-list social">
        <li class="social__item">
          <a href="<?php the_field( 'telegram', 42 ) ?>" class="social__link" target="_blank">
            <svg class="social__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240 240" width="28"
                 height="24">
              <use xlink:href="#telegram-icon"/>
            </svg>
          </a>
        </li>
        <li class="social__item">
          <a href="<?php the_field( 'tiktok', 42 ) ?>" class="social__link" target="_blank">
            <svg class="social__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 26" width="27"
                 height="26">
              <use xlink:href="#tiktok-icon"/>
            </svg>
          </a>
        </li>
        <li class="social__item">
          <a href="<?php the_field( 'zen-yandex', 42 ) ?>" class="social__link" target="_blank">
            <svg class="social__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28" width="17"
                 height="17">
              <use xlink:href="#zen-icon"/>
            </svg>
          </a>
        </li>
        <li class="social__item">
          <a href="<?php the_field( 'youtube', 42 ) ?>" class="social__link" target="_blank">
            <svg class="social__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41 28" width="18"
                 height="12">
              <use xlink:href="#youtube-icon"/>
            </svg>
          </a>
        </li>
        <li class="social__item">
          <a href="<?php the_field( 'facebook', 42 ) ?>" class="social__link" target="_blank">
            <svg class="social__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 18" width="9"
                 height="18">
              <use xlink:href="#facebook-icon"/>
            </svg>
          </a>
        </li>
        <li class="social__item">
          <a href="<?php the_field( 'vk', 42 ) ?>" class="social__link" target="_blank">
            <svg class="social__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 10" width="17"
                 height="10">
              <use xlink:href="#vk-icon"/>
            </svg>
          </a>
        </li>
        <li class="social__item">
          <a href="<?php the_field( 'instagram', 42 ) ?>" class="social__link" target="_blank">
            <svg class="social__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14"
                 height="14">
              <use xlink:href="#instagram-icon"/>
            </svg>
          </a>
        </li>
      </ul>
    </div>
  </div>
</footer>

<script src="<?php bloginfo( 'template_directory' ) ?>/js/jquery-3.5.1.js" defer></script>
<script src="<?php bloginfo( 'template_directory' ) ?>/js/slick.min.js" defer></script>
<script src="<?php bloginfo( 'template_directory' ) ?>/js/script.js" defer></script>

</body>
</html>