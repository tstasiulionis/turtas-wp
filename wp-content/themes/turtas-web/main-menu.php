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
              <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
              <!--<ul>
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
              </ul>-->
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>