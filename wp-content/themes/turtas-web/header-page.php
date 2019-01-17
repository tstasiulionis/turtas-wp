<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Turtas
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

		<!-- open menu .menu-main--open -->
    <div class="menu-main overlay-turtas animated">
      <div class="overlay-content-turtas">
        <div class="container menu-main__content">
        <div class="row">
          <div class="col-12">
            <div class="menu-main__close float-right">
              UŽDARYTI
              <a class="burger-menu-close">
                <img src="<?php echo get_template_directory_uri() . '/img/close.png'; ?>" alt="">
              </a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <div class="menu-main__icon-box">
              <a class="menu-main__icon">
                <img src="<?php echo get_template_directory_uri() . '/img/icon_lang.png'; ?>" alt="">
                ENGLISH
              </a>
              <a class="menu-main__icon">
                <img src="<?php echo get_template_directory_uri() . '/img/icon_lang_clr.png'; ?>" alt="">
                LIETUVIŲ
              </a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <div class="menu-main__box">
              <p>Meniu</p>
              <ul>
                <li><a href="index.html">Pradinis</a></li>
                <li><a href="posts.html">Įrašai</a></li>
                <li><a href="about.html">Apie</a></li>
                <li><a href="contact.html">Kontaktai</a></li>
                <li><a href="single-post.html">Lorem ipsum</a></li>
                <li><a href="single-post.html">Consectetur</a></li>
                <li><a href="single-post.html">Adipisicing</a></li>
                <li><a href="single-post.html">Perferendis</a></li>
                <li><a href="single-post.html">Corrupti</a></li>
                <li><a href="single-post.html">Nam perferendis</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>

    <div class="content-wrap">

    <nav>
      <div class="container">
        <div class="row">
          <div class="col-12 header-line">
            <div class="header-line__col line__col-w25">
              <a class="icon-link offer-link" href="#">
              <div class="offer-i-wrap">
                <img class="icon_offer" src="<?php echo get_template_directory_uri() . '/img/icon_offer.png'; ?>" alt="">
              </div>
              </a>
              <a class="icon-link offer-link" href="#">
                <div class="offer-i-wrap offer-link">
                  <img src="<?php echo get_template_directory_uri() . '/img/icon_offer2.png'; ?>" alt="">
                </div>
              </a>
            </div>
            <div class="header-line__col line__col-w50 text-center">
              <a class="icon-link" href="index.html">
                <div class="logo-wrap">
                  <img src="<?php echo get_template_directory_uri() . '/img/logo.png'; ?>" alt="">
                </div>
              </a>
            </div>
            <div class="header-line__col line__col-w25 menu-icons">
              <div class="float-right">
                <a class="icon-link fb-i-link" href="#">
                  <div class="fb-i-wrap">
                    <img class="icon_fb" src="<?php echo get_template_directory_uri() . '/img/icon_fb.png'; ?>" alt="">
                  </div>
                </a>
                <a class="icon-link search-i-link" href="#">
                  <div class="search-i-wrap">
                    <img class="icon_search" src="<?php echo get_template_directory_uri() . '/img/icon_search.png'; ?>" alt="">
                  </div>
                </a>
                <a class="icon-link menu-burger-link">
                  <div class="burger-i-wrap">
                    <img src="<?php echo get_template_directory_uri() . '/img/icon_burger.png'; ?>" alt="">
                  </div>
                </a>

              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
