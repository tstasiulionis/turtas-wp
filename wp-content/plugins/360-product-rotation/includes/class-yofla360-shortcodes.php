<?php

if (!defined("ABSPATH")) {
	exit;
}

class YoFLA360Shortcodes
{

	protected $yofla_360_settings;


	public function __construct()
	{
		add_shortcode('360', array($this, 'yofla_360_shortcode_callback'));

		$this->yofla_360_settings = array();  //var to store plugin settings
	}

	/**
	 * Function that processes the shortcode and outputs html code based on
	 * shortcode parameters.
	 * parameters
	 *
	 * @param $attributes
	 * @return string
	 */
	public function yofla_360_shortcode_callback($attributes)
	{

		//setup view data
		$viewData = new YoFLA360ViewData();
		$viewData->process_attributes($attributes);

		//exit there was some error constructing viewData
		if (!empty($viewData->eror)) {
			return YoFLA360()->Frontend()->format_plugin_output(YoFLA360()->get_errors());
		}

		//EXIT if src attribute is not set
		if (!isset($viewData->src)) {
			YoFLA360()->add_error('src attribute not specified!');
			return YoFLA360()->Frontend()->format_plugin_output(YoFLA360()->get_errors());
		}

		/**
		 * New version of the player
		 */
		if ($viewData->isNext360) {

			$isIframe = true;

			if ($isIframe) {
				$code = YoFLA360()->Frontend()->get_embed_iframe_html($viewData);

			} else {


				//embed engine script
				$scriptUrl = YoFLA360()->Utils()->get_product_url($viewData) . 'yofla360.js';
				wp_register_script('yofla_360_engine_js', $scriptUrl, false, '1.0.0');
				wp_enqueue_script('yofla_360_engine_js');

				//embed config data script
				$configUrl = YoFLA360()->Utils()->get_product_url($viewData) . 'config.js';
				$configHandle = 'yofla_360_config_js|' . $viewData->src;
				wp_register_script($configHandle, $configUrl, false, '1.0.0');
				wp_enqueue_script($configHandle);

				//get layout template (or use default)
				// todo

				//embed styles
				$stylesHandle = 'yofla_360_styles|' . $viewData->src;
				$stylesUrl = YoFLA360()->Utils()->get_product_url($viewData) . 'styles.css';
				wp_register_style($stylesHandle, $stylesUrl, false, '1.0.0');
				wp_enqueue_style($stylesHandle);

				//get code
				$code = YoFLA360()->Frontend()->get_embed_div_element_html_next360($viewData);
			}
		} else {
			//embedding using an iframe
			if ($viewData->iframe) {
				$code = YoFLA360()->Frontend()->get_embed_iframe_html($viewData);
			} //embedding using div
			else {
				//embed script
				wp_register_script('yofla_360_rotatetool_js', $viewData->get_rotatetool_js_src(), false, '1.0.0');
				wp_enqueue_script('yofla_360_rotatetool_js');

				//get code
				$code = YoFLA360()->Frontend()->get_embed_div_element_html($viewData);
			}
		}

		// send html to browser
		return YoFLA360()->Frontend()->format_plugin_output($code);
	}

}//class