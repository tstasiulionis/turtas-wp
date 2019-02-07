<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Turtas
 */

?>

<div class="post-single" id="post-<?php the_ID(); ?>">
	<div class="container">
		<div class="row post-row">
			<div class="col-12">
			<a href="#" class="post-single__img-link">
				<?php turtas_web_post_thumbnail(); ?>
			</a>
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
			?>
			</div>
		</div>
		<div class="row posts-btn-row">
			<div class="col-12">
				<a class="posts-btn posts-btn-main single-post-btn" href="#">Užklausos forma <i class="fas fa-long-arrow-alt-right"></i></a>
				<a class="posts-btn posts-btn-secondary single-post-btn float-right" href="#"><i class="fas fa-long-arrow-alt-left"></i> Grįžti į sąrašą</a>
			</div>
		</div>
	</div>
</div>
