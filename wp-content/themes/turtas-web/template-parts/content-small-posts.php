<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Turtas
 */

?>

<a href="<?php echo esc_url( get_permalink( get_page_by_title( the_title() ) ) ); ?>">
	<div class="post-box__item">
		<div class="posts-box__head text-center">
			<?php the_title(); ?>
		</div>
		<div class="posts-box__image">
			<div class="post-box__triangle"></div>
			<?php turtas_web_post_thumbnail(); ?>
		</div>
	</div>
</a>
