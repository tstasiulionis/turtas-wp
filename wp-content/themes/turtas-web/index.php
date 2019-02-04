<?php

get_header('page');
?>

<div class="header-inner">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<img class="header-inner__line" src="<?php echo get_template_directory_uri() . '/img/header-line.png'; ?>" alt="">
				<div class="horizontal-menu">
					<img class="inner-header__arrow" src="<?php echo get_template_directory_uri() . '/img/scroll_arrow-left.png"'; ?>" alt="">
					<img class="inner-header__arrow" src="<?php echo get_template_directory_uri() . '/img/scroll_arrow-right.png'; ?>" alt="">
					<div class="horizontal-menu-wrapper">
						<ul>
							<li>Submeniu 1</li>
							<li>Submeniu 2</li>
							<li>Submeniu 3</li>
							<li>Submeniu 4</li>
							<li>Submeniu 5</li>
							<li>Submeniu 6</li>
							<li>Submeniu 7</li>
							<li>Submeniu 8</li>
							<li>Submeniu 9</li>
							<li>Submeniu 10</li>
							<li>Submeniu 11</li>
							<li>Submeniu 12</li>
							<li>Submeniu 13</li>
							<li>Submeniu 14</li>
							<li>Submeniu 15</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="content-note">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-10">
				<p class="text-center">Lorem ipsum dolor sit amet, in laoreet quaerendum cotidieque est, ex legere forensibus eam. Ipsum iriure voluptatum ad cum, vim in unum probatus voluptatibus.
Mel an tantas epicuri, vix ne eros adversarium, soleat tibique duo at. Sed te choro affert comprehensam, cu putent audiam eos.
Vix ea doming labores volumus, his te quando dolores. </p>
			</div>
		</div>
	</div>
</div>

<div class="posts-wrapper">
<?php 
      /* Start the Loop */
			while ( have_posts() ) :
				// the_post();
				//echo 'test';
				$index = $wp_query->current_post + 1;
				the_post();
				
        if ($index%2 == 0) {
          get_template_part( 'template-parts/content-post-left', get_post_type() );
        } else {
          get_template_part( 'template-parts/content-post-right', get_post_type() );
        }

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				// get_template_part( 'template-parts/content-post-left', get_post_type() );

			endwhile;
    ?>

<?php?>
</div>
<?php
get_footer();