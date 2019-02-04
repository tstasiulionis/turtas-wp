<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Turtas
 */

?>

<div class="posts-block">
	<div class="container">
		<div class="row position-relative">
			<div class="col-lg-6 order-12 order-lg-1">
				<?php the_post_thumbnail('post-thumbnail', ['class' => 'posts-block__img main-block__img-left']); ?>
			</div>
			<div class="col-lg-5 offset-lg-1 posts-block__text-item order-1 order-lg-12">
				<div class="main-block__line post-line post-line--left line--lg"></div>
				<h2><?php the_title(); ?></h2>
				<div class="main-block__line line--sm"></div>
				<div class="main-block__content">
					<?php the_excerpt(); ?>
				</div>
			</div>
		</div>
	</div>
</div>

