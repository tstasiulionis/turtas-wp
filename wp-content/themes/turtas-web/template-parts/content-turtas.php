<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Turtas
 */

?>

<div class="post-single" id="post-<?php the_ID(); ?>">
	<div class="container">
		<div class="row post-row">
			<div class="col-12">
			<a href="#" class="post-single__img-link">
				<?php turtas_web_post_thumbnail(); ?>
			</a>
				<?php
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'turtas-web' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );
			?>
			</div>
		</div>
		<div class="row posts-btn-row">
			<div class="col-12">
			<?php 
				$categories = get_the_category();
				$form;
				foreach($categories as $category) {
					if(strpos($category->name, 'form') !== false) {
						$form = $category->name;
					}
				}
				//var_dump($form);
				if($form !== NULL) {
					?>
						<a class="posts-btn posts-btn-main single-post-btn" href="#" data-toggle="modal" data-target="#<?php echo $form; ?>">Užklausos forma <i class="fas fa-long-arrow-alt-right"></i></a>
					<?php
				}
			 ?>
				<a class="posts-btn posts-btn-secondary single-post-btn float-right" href="<?php echo get_home_url(); ?>"><i class="fas fa-long-arrow-alt-left"></i> Grįžti į sąrašą</a>
			</div>
		</div>

		<?php
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

	</div>
</div>
