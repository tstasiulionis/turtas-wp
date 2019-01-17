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
                <h2>About <br> turtas.info project</h2>
                <div class="main-block__line line--sm"></div>
                <div class="content-box__content">
                  <p>Sužinokite PERKAMO, PARDUODAMO, NUOMOJAMO turto kainą, gaukite
naudingų patarimų ir rekomendacijų.</p>
                <p>Lorem ipsum dolor sit amet, in laoreet quaerendum cotidieque est, ex legere forensibus eam. Ipsum iriure voluptatum ad cum, vim in unum probatus voluptatibus. Mel an tantas epicuri, vix ne eros adversarium, soleat tibique duo at. Sed te choro affert comprehensam, cu putent audiam eos. Vix ea doming labores volumus, his te quando dolores. Cu movet vocent mea.</p>
                </div>
                <a class="posts-btn posts-btn-main" href="#">įrašai <i class="fas fa-long-arrow-alt-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php
get_footer();
