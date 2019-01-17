<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Turtas
 */

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
            Apie projektą
            <img class="line_marker" src="<?php echo get_template_directory_uri() . '/img/line_marker.png'; ?>" alt="">
          </div>
          <div class="col-sm-4 tab-2-head border_liner text-center pl-sm-0 pr-sm-0">
            Kas mes
            <img class="line_marker" src="<?php echo get_template_directory_uri() . '/img/line_marker.png'; ?>" alt="">
          </div>
          <div class="col-sm-4 tab-3-head border_liner text-center pl-sm-0">
            Tikslai
            <img class="line_marker" src="<?php echo get_template_directory_uri() . '/img/line_marker.png'; ?>" alt="">
          </div>
        </div>
        <div class="row about-section__content">
          <div class="col-12 tab-1-text">
            Apie projektą. Lorem ipsum dolor sit amet, nec stet congue ea, his nullam primis doctus id, ut quot ceteros sed. Eu mel nobis munere accommodare. Labitur facilisi sapientem est te. Nam id alterum mentitum. Ad vix purto altera. Ius no populo mollis tacimates. Ne has nostrud ponderum, eu propriae cotidieque mea. Soleat hendrerit voluptatibus eu vix, usu ignota verear quaerendum id. Eum agam quas salutatus cu, eos mazim tation deserunt an. An pertinax perpetua pro, qui elit probo in. An pri veri definitionem vituperatoribus, et quando option facilisi mei. In eos veniam quodsi appareat, doctus reprehendunt pri ea.
          </div>
          <div class="col-12 tab-2-text">
            Kas mes. Lorem ipsum dolor sit amet, nec stet congue ea, his nullam primis doctus id, ut quot ceteros sed. Eu mel nobis munere accommodare. Labitur facilisi sapientem est te. Nam id alterum mentitum. Ad vix purto altera. Ius no populo mollis tacimates. Ne has nostrud ponderum, eu propriae cotidieque mea. Soleat hendrerit voluptatibus eu vix, usu ignota verear quaerendum id. Eum agam quas salutatus cu, eos mazim tation deserunt an. An pertinax perpetua pro, qui elit probo in. An pri veri definitionem vituperatoribus, et quando option facilisi mei. In eos veniam quodsi appareat, doctus reprehendunt pri ea.
          </div>
          <div class="col-12 tab-3-text">
            Tikslai. Lorem ipsum dolor sit amet, nec stet congue ea, his nullam primis doctus id, ut quot ceteros sed. Eu mel nobis munere accommodare. Labitur facilisi sapientem est te. Nam id alterum mentitum. Ad vix purto altera. Ius no populo mollis tacimates. Ne has nostrud ponderum, eu propriae cotidieque mea. Soleat hendrerit voluptatibus eu vix, usu ignota verear quaerendum id. Eum agam quas salutatus cu, eos mazim tation deserunt an. An pertinax perpetua pro, qui elit probo in. An pri veri definitionem vituperatoribus, et quando option facilisi mei. In eos veniam quodsi appareat, doctus reprehendunt pri ea.
          </div>
        </div>
      </div>
    </div>

    <div class="index-main-cont">

      <div class="main-block">
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
                  <h2>Lorem ipsum dollor sit amet</h2>
                  <div class="main-block__line line--sm"></div>
                  <div class="main-block__content">
                    <p>
                      Sužinokite PERKAMO, PARDUODAMO, NUOMOJAMO turto kainą, gaukite
      naudingų patarimų ir rekomendacijų.
                    </p>
                    <p>
                      Lorem ipsum dolor sit amet, in laoreet quaerendum cotidieque est, ex legere forensibus eam. Ipsum iriure voluptatum ad cum, vim in unum probatus voluptatibus. Mel an tantas epicuri, vix ne eros adversarium, soleat tibique duo at. Sed te choro affert comprehensam, cu putent audiam eos. Vix ea doming labores volumus, his te quando dolores. Cu movet vocent mea.
                    </p>
                  </div>
                  <div class="main-block__line line--md"></div>
                  <br>
                  <a class="main-block__more" href="#">DAUGIAU <i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-6 pl-0 pr-0">
              <div class="main-block-img-wrapper">
                <!-- [360 width="100%" height="400px" src="yofla360/360-View-Demo"] -->
                <?php echo do_shortcode( '[360 width="100%" height="400px" src="yofla360/360-View-Demo"]' ); ?>
                
              </div>
            </div>
          </div>
        </div>
      </div>

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

      <div class="main-block">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-md-6 pl-0 pr-0 order-12 order-lg-1">
              <div class="main-block-img-wrapper">
                <?php echo do_shortcode( '[360 width="100%" height="400px" src="yofla360/360-View-Demo"]' ); ?>
              </div>
            </div>
            <div class="col-lg-6 main-block__text-item order-1 order-lg-12">
              <div class="half-cont-right half-cont-sm-mx">
                <div class="haf-cont-col-6 float-right">
                  <div class="main-block__head">
                    <div class="main-block__line image-line image-line--left line--lg"></div>
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
                      <div class="submenu-triangle submenu-triangle--left"></div>
                    </div>
                  </div>
                  <h2>Lorem ipsum dollor sit amet</h2>
                  <div class="main-block__line line--sm"></div>
                  <div class="main-block__content">
                    <p>
                      Sužinokite PERKAMO, PARDUODAMO, NUOMOJAMO turto kainą, gaukite
      naudingų patarimų ir rekomendacijų.
                    </p>
                    <p>
                      Lorem ipsum dolor sit amet, in laoreet quaerendum cotidieque est, ex legere forensibus eam. Ipsum iriure voluptatum ad cum, vim in unum probatus voluptatibus. Mel an tantas epicuri, vix ne eros adversarium, soleat tibique duo at. Sed te choro affert comprehensam, cu putent audiam eos. Vix ea doming labores volumus, his te quando dolores. Cu movet vocent mea.
                    </p>
                  </div>
                  <div class="main-block__line line--md"></div>
                  <br>
                  <a class="main-block__more" href="#">DAUGIAU <i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="main-block">
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
                  <h2>Lorem ipsum dollor sit amet</h2>
                  <div class="main-block__line line--sm"></div>
                  <div class="main-block__content">
                    <p>
                      Sužinokite PERKAMO, PARDUODAMO, NUOMOJAMO turto kainą, gaukite
      naudingų patarimų ir rekomendacijų.
                    </p>
                    <p>
                      Lorem ipsum dolor sit amet, in laoreet quaerendum cotidieque est, ex legere forensibus eam. Ipsum iriure voluptatum ad cum, vim in unum probatus voluptatibus. Mel an tantas epicuri, vix ne eros adversarium, soleat tibique duo at. Sed te choro affert comprehensam, cu putent audiam eos. Vix ea doming labores volumus, his te quando dolores. Cu movet vocent mea.
                    </p>
                  </div>
                  <div class="main-block__line line--md"></div>
                  <br>
                  <a class="main-block__more" href="#">DAUGIAU <i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-6 pl-0 pr-0">
              <div class="main-block-img-wrapper">
                <?php echo do_shortcode( '[360 width="100%" height="400px" src="yofla360/360-View-Demo"]' ); ?>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

<?php
get_footer();
