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
          </div>
        </div>
      </div>
    </div>

    <div class="index-main-cont">

    <?php 
      $the_second_query = new WP_Query( array('cat' => 3) );
      //query_posts('cat=3');
      /* Start the Loop */
			while ( $the_second_query->have_posts() ) :
        $index = $the_second_query->current_post + 1;
				$the_second_query->the_post();
        //var_dump($the_second_query->found_posts);
        if ($index%2 == 0) {
          get_template_part( 'template-parts/content-index', get_post_type() );
        } else {
          get_template_part( 'template-parts/content-index-left', get_post_type() );
        }

        if ($index === $the_second_query->found_posts - 2) {
          ?>
          
          <div class="posts-box">
            <img class="posts-box__arrow-l" src="<?php echo get_template_directory_uri() . '/img/arrow_bg_l.png'; ?>" alt="">
            <img class="posts-box__arrow-r" src="<?php echo get_template_directory_uri() . '/img/arrow_bg_r.png'; ?>" alt="">
            <div class="container">
              <div class="row posts-box__row justify-content-center">
                <div class="col-12">

                  <?php 
                    $the_small_posts_query = new WP_Query(array('cat' => 3) );
                    
                    //query_posts('cat=2');
                    /* Start the Loop */
                    $count = 0;
                    while ( $the_small_posts_query->have_posts() ) :
                      $the_small_posts_query->the_post();
                      $count++;
                      /*
                      * Include the Post-Type-specific template for the content.
                      * If you want to override this in a child theme, then include a file
                      * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                      */
                      get_template_part( 'template-parts/content-small-posts', get_post_type() );
                      if ($count > 5) {
                        break 1;
                      }
                    endwhile;
                    if($count < 5) {
                      while ( $the_small_posts_query->have_posts() ) :
                        $the_small_posts_query->the_post();
                        $count++;
                        /*
                        * Include the Post-Type-specific template for the content.
                        * If you want to override this in a child theme, then include a file
                        * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                        */
                        get_template_part( 'template-parts/content-small-posts', get_post_type() );
                        if ($count > 4) {
                          break 1;
                        }
                      endwhile;
                    }
                  ?>

                </div>
                
              </div>
            </div>
          </div>

          <?php
        }
				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				//get_template_part( 'template-parts/content-index', get_post_type() );

			endwhile;
    ?>
    

    <?php 
    $categories = get_categories();
    $formCategories = [];
    foreach($categories as $category) {
      if (strpos($category->name, 'form') !== false) {
        array_push($formCategories, $category->name);
      }
    }
    
    foreach($formCategories as $form) {
      $firstDashPos = strpos($form, '-');
      $name = substr($form, $firstDashPos + 1);
      
      $secondDashPos = strpos($name, '-');
      $id = substr($name, $secondDashPos + 1);
      
      ?>
      <!-- Modal -->
      <div class="modal fade" id="<?php echo $form; ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $form; ?>Title" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-center" id="<?php echo $form; ?>Title">Užklausa</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php echo do_shortcode('[contact-form-7 id="' . $id . '" title="'. $name .'"]'); ?>
            </div>
          </div>
        </div>
      </div>
      <?php

    }
    ?>

    </div>

<?php
get_footer();
