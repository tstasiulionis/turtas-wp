<?php
/* Template Name: About Template */ 

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

    <div class="content-box">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 pl-0 pr-0">
            <div class="about-img-wrapper">
              <div class="about-img-tint"></div>
              <img src="<?php echo get_template_directory_uri() . '/img/about_img.jpg'; ?>" alt="">
            </div>
          </div>
          <div class="col-md-6 pl-0 pr-0">
            <div class="half-cont-right half-cont-md-mx">
              <div class="half-cont-col content-box__info">
                <h2 class="pre-wrap"><?php echo get_theme_mod( 'about_head_setting' ); ?></h2>
                <div class="main-block__line line--sm"></div>
                <div class="content-box__content pre-wrap">
                  <?php echo get_theme_mod( 'about_text_setting' ); ?>
                </div>
                <a class="posts-btn posts-btn-main" href="<?php echo get_page_link(30); ?>">įrašai <i class="fas fa-long-arrow-alt-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php
get_footer();
