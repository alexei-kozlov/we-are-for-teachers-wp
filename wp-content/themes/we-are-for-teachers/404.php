<?php
/**
 *
 * Template Name: Error-404
 *
 */
?>
<?php get_header(); ?>

  <main id="primary" class="site-main">

    <section class="nav">
      <h2 class="visually-hidden">Главное меню</h2>
      <div class="inner inner--secondary">
        <nav class="nav__menu">
			<?php
			$args = array(
				'menu'            => 'Меню в шапке',
				'menu_class'      => 'nav__list',
				'container'       => 'ul',
				'container_class' => 'nav__list',
				'fallback_cb'     => 'wp_page_menu',
				'echo'            => '0',
				'depth'           => '0',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			);
			$menu = wp_nav_menu( $args );
			if ( ! is_front_page() ) {
				$menu = preg_replace( '~<li~', '<li class="menu-item"><a href="' . home_url() . '"><img width="100" height="100" src="' . home_url() . '/wp-content/uploads/2022/01/school-home-icon.png" class="_mi _before _image" alt="" loading="lazy" aria-hidden="true"><span>Главная</span></a></li><li', $menu, 1 );
			}
			echo $menu;
			?>
        </nav>
      </div>
    </section>

    <section class="error-404 not-found">
      <header class="page-header">
        <h1 class="page-title title"><?php esc_html_e( '404', 'we-are-for-teachers' ); ?></h1>
        <p class="page-subtitle"><?php esc_html_e( 'Ой! Запрашиваемая страница не найдена...', 'we-are-for-teachers' ); ?></p>
      </header><!-- .page-header -->

      <div class="page-content">
        <p style="text-align: center;"><?php esc_html_e( 'Похоже, что ничего не удалось найти. Попробуйте вернуться на главную страницу, воспользуйтесь одним из пунктов меню или поиском по сайту!', 'we-are-for-teachers' ); ?></p>

		  <?php get_search_form(); ?>

      </div><!-- .page-content -->
    </section><!-- .error-404 -->

  </main><!-- #main -->

<?php get_footer(); ?>