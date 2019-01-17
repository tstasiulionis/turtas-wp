<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Turtas
 */

?>

<div class="main-block" id="post-<?php the_ID(); ?>">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-lg-6 main-block__text-item">
				<div class="half-cont-left half-cont-sm-mx">
					<div class="haf-cont-col-6">
						<div class="main-block__head">
							<div class="main-block__line image-line image-line--right line--lg"></div>
							<a href="">
								<img src="<?php echo get_template_directory_uri() . '/img/icon_offer_color.png'; ?>" alt="">
							</a>
							<img class="main-block__burger" src="<?php echo get_template_directory_uri() . '/img/icon_burger.png'; ?>" alt="">
							<!-- .sub-menu--open -->
							<div class="main-block__sub-menu animated">
								<div class="submenu-close">
									<img src="<?php echo get_template_directory_uri() . '/img/icon_close_sub.png'; ?>" alt="">
								</div>
								<div class="submenu-wrap">
									<ul>
										<li>Lorem ipsum</li>
										<li>Consectetur</li>
										<li>Adipisicing</li>
										<li>Perferendis</li>
										<li>Corrupti</li>
										<li>Nam perferendis</li>
									</ul>
								</div>
								<div class="submenu-triangle submenu-triangle--right"></div>
							</div>
						</div>
						<h2><?php the_title(); ?></h2>
						<div class="main-block__line line--sm"></div>
						<div class="main-block__content">
							<?php the_excerpt(); ?>
						</div>
						<div class="main-block__line line--md"></div>
						<br>
						<a class="main-block__more" href="<?php echo esc_url( get_permalink( get_page_by_title( the_title() ) ) ); ?>">DAUGIAU <i class="fas fa-long-arrow-alt-right"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-6 pl-0 pr-0">
				<div class="main-block-img-wrapper">
					<!-- [360 width="100%" height="400px" src="yofla360/360-View-Demo"] -->
					<?php $post_content = get_the_content(); ?>
					<?php if ( has_shortcode( $post_content, '360' ) ) {
						if (strpos($post_content, '[360') !== false) {
								$beginningStr = strpos($post_content, '[360');
								$endingStr = strpos($post_content, '"]');
								$shortCode = substr($post_content, $beginningStr, $endingStr);
								echo do_shortcode($shortCode);
						}
					 } ?>
					
					
				</div>
			</div>
		</div>
	</div>
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				turtas_web_posted_on();
				turtas_web_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php turtas_web_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'turtas-web' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'turtas-web' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php turtas_web_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
