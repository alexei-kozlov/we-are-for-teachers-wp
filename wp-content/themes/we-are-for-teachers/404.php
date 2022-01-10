<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package We_are_for_Teachers
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found" style="display: flex; flex-direction: column; align-items: center;">
			<header class="page-header">
				<h1 class="page-title title" style="font-size: 200px;"><?php esc_html_e( '404', 'we-are-for-teachers' ); ?></h1>
        <p style="text-align: center;"><?php esc_html_e( 'Ой! Страница не найдена...', 'we-are-for-teachers' ); ?></p>
			</header><!-- .page-header -->

			<div class="page-content">
				<p style="text-align: center;"><?php esc_html_e( 'Похоже, что ничего не удалось найти. Быть может Вам подойдет одна из ссылок ниже или поиск?', 'we-are-for-teachers' ); ?></p>

					<?php
					get_search_form();

					the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<div class="widget widget_categories">
						<h2 class="widget-title title"><?php esc_html_e( 'Часто используемые категории', 'we-are-for-teachers' ); ?></h2>
						<ul>
							<?php
							wp_list_categories(
								array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								)
							);
							?>
						</ul>
					</div><!-- .widget -->

					<?php
					$we_are_for_teachers_archive_content = '<p style="text-align: center;">' . esc_html__( 'Попробуйте поискать в ежемесячных архивах', 'we-are-for-teachers' ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$we_are_for_teachers_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
					?>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
