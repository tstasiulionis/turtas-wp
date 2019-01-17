<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Turtas
 */

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

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-turtas', get_post_type() );

			

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>

<?php
get_footer();
