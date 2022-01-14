<?php
/**
 *
 * Template Name: Запись блога
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
				$menu = preg_replace( '~<li~', '<li class="menu-item"><a href="' . home_url() . '" title="На главную"><img width="100" height="100" src="' . home_url() . '/wp-content/uploads/2022/01/school-home-icon.png" class="_mi _before _image" alt="" loading="lazy" aria-hidden="true"><span>Главная</span></a></li><li', $menu, 1 );
			}
			echo $menu;
			?>
        </nav>
      </div>
    </section>

    <div class="inner" style="padding: 0;">
      <div class="blog__item">
		  <?php
		  while ( have_posts() ) :
			  the_post();

			  get_template_part( 'template-parts/content', get_post_type() );

			  the_post_navigation(
				  array(
					  'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Пред.:', 'we-are-for-teachers' ) . '</span> <span class="nav-title">%title</span>',
					  'next_text' => '<span class="nav-subtitle">' . esc_html__( 'След.:', 'we-are-for-teachers' ) . '</span> <span class="nav-title">%title</span>',
				  )
			  );

			  // If comments are open, or we have at least one comment, load up the comment template.
			  if ( comments_open() || get_comments_number() ) :
				  comments_template();
			  endif;
		  endwhile; // End of the loop.
		  ?>
      </div>

    </div>
  </main><!-- #main -->

<?php //get_sidebar();
get_footer(); ?>