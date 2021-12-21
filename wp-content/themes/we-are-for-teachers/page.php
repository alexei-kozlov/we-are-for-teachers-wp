<?php
	/*
	*
	Template Name: Главная
	*
	*/
?>
<?php get_header(); ?>

  <main id="primary" class="site-main">
    <section class="promo" id="promo">
      <div class="inner">
        <h1 class="promo__title title"><?php echo get_the_title(); ?></h1>
        <?php
					$args  = array(
						'numberposts'      => 1,
						'category_name'    => 'promo',
						'post_type'        => 'post',
						'suppress_filters' => true,
					);
					$posts = get_posts( $args );

					foreach ( $posts as $post ) : setup_postdata( $post ); ?>
            <div class="promo__quote-block">
              <img src="<?php bloginfo( 'template_directory' ) ?>/img/icons/back-quotes-icon.svg" alt="Кавычки"
                   class="promo__quote-icon" width="25" height="28">
              <blockquote class="promo__blockquote">
                <p class="promo__text"><?php the_title(); ?></p>
                <p class="promo__author"><?php the_field( 'quote-author' ) ?></p>
              </blockquote>
            </div>
            <a href="<?php the_field( 'url-youtube' ) ?>" class="promo__btn btn" target="_blank">
              <svg class="promo__btn-icon" width="41" height="28" viewBox="0 0 41 28" fill="#fff">
                <use xlink:href="#youtube-icon"/>
              </svg>
              <span class="promo__btn-name"><?php the_field( 'youtube-button-text' ) ?></span>
            </a>
					<?php endforeach; ?>

      </div>
    </section>

    <section class="nav">
      <h2 class="visually-hidden">Главное меню</h2>
      <div class="inner">
        <img class="nav__camera-roll" src="<?php the_field( 'main-menu-image', 183 ); ?>" alt="Фотопленка">
        <nav class="nav__menu">
					<?php
						$args = array(
							'menu'            => "main",
							'menu_class'      => "nav__list",
							'container'       => "ul",
							'container_class' => "nav__list",
							'fallback_cb'     => "wp_page_menu",
							'echo'            => "true",
							'depth'           => "0",
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						);
						wp_nav_menu( $args );
					?>
        </nav>
      </div>
    </section>

    <section class="about" id="about">
      <div class="inner">
				<?php
					$args  = array(
						'numberposts'      => 0,
						'category_name'    => 'about',
						'orderby'          => 'date',
						'order'            => 'ASC',
						'include'          => array(),
						'exclude'          => array(),
						'meta_key'         => '',
						'meta_value'       => '',
						'post_type'        => 'post',
						'suppress_filters' => true,
					);
					$posts = get_posts( $args ); ?>

        <h2 class="visually-hidden"><?php echo get_cat_name( 4 ); ?></h2>
        <ul class="about__list">

					<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
            <li class="about__item">
              <div class="about__item-header">
								<?php the_post_thumbnail( 'thumbnail', array( 'class' => 'about__avatar' ) ); ?>
                <img src="<?php bloginfo( 'template_directory' ) ?>/img/avatar-frame.svg" alt="Рамка"
                     class="about__avatar-frame" width="205" height="205">
                <h3 class="about__author"><?php the_title(); ?></h3>
                <p class="about__author-pos"><?php the_field( 'person-position' ); ?></p>
              </div>
              <div class="about__text"><?php the_excerpt(); ?></div>
            </li>
					<?php endforeach; ?>

        </ul>
      </div>
    </section>

    <section id="congratulations" class="congratulations">
      <div class="inner">
				<?php
					$args  = array(
						'numberposts'      => 0,
						'category_name'    => 'congratulations',
						'orderby'          => 'date',
						'order'            => 'ASC',
						'include'          => array(),
						'exclude'          => array(),
						'meta_key'         => '',
						'meta_value'       => '',
						'post_type'        => 'post',
						'suppress_filters' => true,
					);
					$posts = get_posts( $args ); ?>

        <h2 class="congratulations__title title"><?php echo get_cat_name( 6 ); ?></h2>
        <ul class="congratulations__slider">

					<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
            <li class="congratulations__item">
              <iframe class="congratulations__video" data-href="<?php the_field( 'url-youtube-congratulation' ); ?>"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                      allowfullscreen></iframe>
              <img class="congratulations__photo" src="<?php the_field( 'congratulation-poster-image' ); ?>"
                   alt="Постер">
              <img class="congratulations__frame"
                   src="<?php bloginfo( 'template_directory' ) ?>/img/shutterstock-bg.png" alt="Рамка" width="381"
                   height="380">
            </li>
					<?php endforeach; ?>

        </ul>
      </div>
    </section>

    <section id="cards" class="cards">
      <div class="inner">
					<?php
						$args  = array(
							'numberposts'      => 0,
							'category_name'    => 'cards',
							'orderby'          => 'date',
							'order'            => 'ASC',
							'include'          => array(),
							'exclude'          => array(),
							'meta_key'         => '',
							'meta_value'       => '',
							'post_type'        => 'post',
							'suppress_filters' => true,
						);
						$posts = get_posts( $args ); ?>

        <h2 class="visually-hidden"><?php echo get_cat_name( 7 ); ?></h2>
        <p class="cards__title title"><?php the_field('section-title', 199); ?></p>
        <p class="cards__subtitle"><?php the_field('section-subtitle', 199); ?></p>
        <ul class="cards__slider">

						<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
              <li class="cards__item">
                <img class="cards__photo" src="<?php the_field( 'card-poster-image' ); ?>" alt="Открытка">
              </li>
						<?php endforeach; ?>

        </ul>
        <div class="cards__btn-box">
          <label class="cards__btn btn">
            <img src="<?php bloginfo( 'template_directory' ) ?>/img/icons/download-icon.svg" alt="Загрузить"
                 class="cards__btn-icon" width="25" height="24">
            Загрузить
            <input class="visually-hidden ddd" type="file" name="card">
          </label>
        </div>
        <p class="cards__download-formats">Формат - .jpg, .jpeg, .png, .tiff, .bmp</p>
      </div>
    </section>
  </main>

<?php get_footer(); ?>