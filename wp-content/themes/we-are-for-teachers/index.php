<?php
/**
 *
 * Template Name: Блог
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

    <section class="blog">
      <div class="inner">
		  <?php while ( have_posts() ) : the_post(); ?>
            <div class="blog__item">
              <h2 class="blog__title"><?php the_title() ?></h2>
              <span><?php the_time( 'j F Y' ); ?></span>
              <p><?php the_excerpt(); ?></p>
              <p><?php the_tags(); ?></p>
              <a href="<?php echo get_permalink() ?>">Читать полностью</a>
            </div>
		  <?php endwhile; ?>
      </div>

	    <?php the_posts_pagination(); ?>
    </section>

  </main>

<?php get_footer(); ?>