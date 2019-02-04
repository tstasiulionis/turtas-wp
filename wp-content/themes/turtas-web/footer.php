<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Turtas
 */

?>

	</div>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-2 foot-col">
					<img src="<?php echo get_template_directory_uri() . '/img/icon_foot-phone.png'; ?>" alt="">
					<?php echo get_theme_mod( 'footer_phone_setting' ); ?>
				</div>
				<div class="col-lg-2 col-md-3 foot-col">
					<img src="<?php echo get_template_directory_uri() . '/img/icon_foot-letter.png'; ?>" alt="">
					<?php echo get_theme_mod( 'footer_email_setting' ); ?>
				</div>
				<div class="col-md-3 foot-col">
					<img src="<?php echo get_template_directory_uri() . '/img/icon_foot-mark.png'; ?>" alt="">
					<?php echo get_theme_mod( 'footer_address_setting' ); ?>
				</div>
				<div class="col-md-4 offset-lg-1 footer__social foot-col">
					<div class="social-box">
						<a class="icon-link" href="<?php echo get_theme_mod( 'footer_facebook_setting' ); ?>">
							<i class="fab fa-facebook-f"></i>
						</a>
						<a class="icon-link" href="<?php echo get_theme_mod( 'footer_linkedin_setting' ); ?>">
							<i class="fab fa-linkedin-in"></i>
						</a>
						<a class="icon-link" href="<?php echo get_theme_mod( 'footer_instagram_setting' ); ?>">
							<i class="fab fa-instagram"></i>
						</a>
						<a class="icon-link" href="<?php echo get_theme_mod( 'footer_youtube_setting' ); ?>">
							<i class="fab fa-youtube"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
