<?php
/* Template Name: Contact Template */ 

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

    <div class="contact-box">
      <div class="container">
        <div class="row">
          <div class="col-md-6 contact-box__info">
            <h2>Contact Us</h2>
            <div class="contact-box__item">
              <img src="<?php echo get_template_directory_uri() . '/img/icon_foot-letter.png'; ?>" alt="">
              <p>Contacts:</p>
              <p>(+012) 253 4567</p>
              <p>turtas@info.lt</p>
            </div>
            <div class="contact-box__item">
              <img src="<?php echo get_template_directory_uri() . '/img/icon_foot-mark.png'; ?>" alt="">
              <p>Office Location:</p>
              <p>Lithuania: 101 Trakų g., Vilnius. LT 012345</p>
              <p>(<a href="#">show map</a>)</p>
            </div>
          </div>
          <div class="col-md-6 contact-box__form">
            <h2>Write us a message</h2>
            <form class="" action="">
              <div class="form-row">
                <div class="col pr-10">
                  <input type="text" class="turtas-input" placeholder="Your name">
                </div>
                <div class="col pl-10">
                  <input type="email" class="turtas-input" placeholder="Your email">
                </div>
              </div>
              <div class="form-row">
                <div class="col pr-10">
                  <input type="text" class="turtas-input" placeholder="Your phone">
                </div>
                <div class="col pl-10">
                  <input type="text" class="turtas-input" placeholder="Interest">
                </div>
              </div>
              <div class="form-row">
                <div class="col">
                  <textarea class="turtas-input" name="" id="" placeholder="Your message"></textarea>
                </div>
              </div>
              <button class="posts-btn posts-btn-main" type="submit">send <i class="fas fa-long-arrow-alt-right"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div>
<?php
get_footer();
