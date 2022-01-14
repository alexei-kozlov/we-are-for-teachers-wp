<?php
/**
 *
 * Template Name: Архив
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

    <div class="inner">

		<?php if ( have_posts() ) : ?>
          <header class="page-header">
			  <?php the_archive_title( '<h1 class="page-title">', '</h1>' );
			  the_archive_description( '<div class="archive-description">', '</div>' ); ?>
          </header><!-- .page-header -->

			<?php // Start the Loop
			while ( have_posts() ) :
				the_post();
				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile; // End the Loop

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

    </div>
  </main><!-- #main -->

<?php //get_sidebar();
get_footer(); ?>