<?php
/* Template Name: Front Template */ 

get_header();
?>

	<header class="header-landing">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h1>Viskas Apie Turtą</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <img class="icon_line" src="<?php echo get_template_directory_uri() . '/img/icon_header-line.png'; ?>" alt="">
            <img class="icon-down" src="<?php echo get_template_directory_uri() . '/img/icon_down.png'; ?>" alt="">
          </div>
        </div>
      </div>
    </header>

    <div id="about-section">
      <div class="container">
        <div class="row about-section__head">
          <div class="col-sm-4 tab-1-head text-center pr-0 active">
            <?php echo get_theme_mod( 'tab_head1_setting' ); ?>
            <img class="line_marker" src="<?php echo get_template_directory_uri() . '/img/line_marker.png'; ?>" alt="">
          </div>
          <div class="col-sm-4 tab-2-head border_liner text-center pl-sm-0 pr-sm-0">
            <?php echo get_theme_mod( 'tab_head2_setting' ); ?>
            <img class="line_marker" src="<?php echo get_template_directory_uri() . '/img/line_marker.png'; ?>" alt="">
          </div>
          <div class="col-sm-4 tab-3-head border_liner text-center pl-sm-0">
            <?php echo get_theme_mod( 'tab_head3_setting' ); ?>
            <img class="line_marker" src="<?php echo get_template_directory_uri() . '/img/line_marker.png'; ?>" alt="">
          </div>
        </div>
        <div class="row about-section__content">
          <div class="col-12 tab-1-text">
            <?php echo get_theme_mod( 'tab_text1_setting' ); ?>
          </div>
          <div class="col-12 tab-2-text">
            <?php echo get_theme_mod( 'tab_text2_setting' ); ?>
          </div>
          <div class="col-12 tab-3-text">
            <?php echo get_theme_mod( 'tab_text3_setting' ); ?>
            Tikslai. Lorem ipsum dolor sit amet, nec stet congue ea, his nullam primis doctus id, ut quot ceteros sed. Eu mel nobis munere accommodare. Labitur facilisi sapientem est te. Nam id alterum mentitum. Ad vix purto altera. Ius no populo mollis tacimates. Ne has nostrud ponderum, eu propriae cotidieque mea. Soleat hendrerit voluptatibus eu vix, usu ignota verear quaerendum id. Eum agam quas salutatus cu, eos mazim tation deserunt an. An pertinax perpetua pro, qui elit probo in. An pri veri definitionem vituperatoribus, et quando option facilisi mei. In eos veniam quodsi appareat, doctus reprehendunt pri ea.
          </div>
        </div>
      </div>
    </div>

    <div class="index-main-cont">
    
    <?php 
      query_posts('cat=2');
      /* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-index', get_post_type() );

			endwhile;
    ?>
    
    <div class="posts-box">
      <img class="posts-box__arrow-l" src="<?php echo get_template_directory_uri() . '/img/arrow_bg_l.png'; ?>" alt="">
      <img class="posts-box__arrow-r" src="<?php echo get_template_directory_uri() . '/img/arrow_bg_r.png'; ?>" alt="">
      <div class="container">
        <div class="row posts-box__row justify-content-center">
          <div class="col-12">
            <a href="single-post.html">
              <div class="post-box__item">
                <div class="posts-box__head text-center">
                  Įrašo pavadinimas
                </div>
                <div class="posts-box__image">
                  <div class="post-box__triangle"></div>
                  <img src="<?php echo get_template_directory_uri() . '/img/posts_img-1.jpg'; ?>" alt="">
                </div>
              </div>
            </a>
            <a href="single-post.html">
              <div class="post-box__item">
                <div class="posts-box__head text-center">
                  Įrašo pavadinimas
                </div>
                <div class="posts-box__image">
                  <div class="post-box__triangle"></div>
                  <img src="<?php echo get_template_directory_uri() . '/img/posts_img-2.jpg'; ?>" alt="">
                </div>
              </div>
            </a>
            <a href="single-post.html">
              <div class="post-box__item">
                <div class="posts-box__head text-center">
                  Įrašo pavadinimas
                </div>
                <div class="posts-box__image">
                  <div class="post-box__triangle"></div>
                  <img src="<?php echo get_template_directory_uri() . '/img/posts_img-3.jpg'; ?>" alt="">
                </div>
              </div>
            </a>
            <a href="single-post.html">
              <div class="post-box__item">
                <div class="posts-box__head text-center">
                  Įrašo pavadinimas
                </div>
                <div class="posts-box__image">
                  <div class="post-box__triangle"></div>
                  <img src="<?php echo get_template_directory_uri() . '/img/posts_img-4.jpg'; ?>" alt="">
                </div>
              </div>
            </a>
            <a href="single-post.html">
              <div class="post-box__item">
                <div class="posts-box__head text-center">
                  Įrašo pavadinimas
                </div>
                <div class="posts-box__image">
                  <div class="post-box__triangle"></div>
                  <img src="<?php echo get_template_directory_uri() . '/img/posts_img-5.jpg'; ?>" alt="">
                </div>
              </div>
            </a>
          </div>
          
        </div>
      </div>
    </div>

    <?php 
      query_posts('cat=3');
      /* Start the Loop */
			while ( have_posts() ) :
        $index = $wp_query->current_post + 1;
				the_post();
        if ($index%2 == 0) {
          get_template_part( 'template-parts/content-index-left', get_post_type() );
        } else {
          get_template_part( 'template-parts/content-index', get_post_type() );
        }
				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				//get_template_part( 'template-parts/content-index', get_post_type() );

			endwhile;
    ?>
      

    </div>

<?php
get_footer();
