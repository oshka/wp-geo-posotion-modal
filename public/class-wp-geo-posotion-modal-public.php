<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://oshka.000webhostapp.com/
 * @since      1.0.0
 *
 * @package    Wp_Geo_Posotion_Modal
 * @subpackage Wp_Geo_Posotion_Modal/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Wp_Geo_Posotion_Modal
 * @subpackage Wp_Geo_Posotion_Modal/public
 * @author     Olha Babchenko <olkace@gmail.com>
 */
class Wp_Geo_Posotion_Modal_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Geo_Posotion_Modal_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Geo_Posotion_Modal_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wp-geo-posotion-modal-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Geo_Posotion_Modal_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Geo_Posotion_Modal_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wp-geo-posotion-modal-public.js', array( 'jquery' ), $this->version, false );

	}
	
	/**
	 * Add modal HTML
	 *
	 * @since    1.0.0
	 */
	public function add_modal_html() {
	if(isset($HTTP_SERVER_VARS["HTTP_X_FORWARDED_FOR"]) && $HTTP_SERVER_VARS["HTTP_X_FORWARDED_FOR"]){
			$ip = $HTTP_SERVER_VARS["HTTP_X_FORWARDED_FOR"];		
		} elseif(isset($HTTP_SERVER_VARS["HTTP_CLIENT_IP"]) && $HTTP_SERVER_VARS["HTTP_CLIENT_IP"]){
			$ip = $HTTP_SERVER_VARS["HTTP_CLIENT_IP"];		
		} elseif (isset($HTTP_SERVER_VARS["REMOTE_ADDR"]) && $HTTP_SERVER_VARS["REMOTE_ADDR"]){
			$ip = $HTTP_SERVER_VARS["REMOTE_ADDR"];		
		} elseif (getenv("HTTP_X_FORWARDED_FOR")){
				$ip = getenv("HTTP_X_FORWARDED_FOR");
		} elseif (getenv("HTTP_CLIENT_IP")){
			$ip = getenv("HTTP_CLIENT_IP");
		} elseif (getenv("REMOTE_ADDR")){
				$ip = getenv("REMOTE_ADDR");
		} else{
			$ip = "";
		}
		$html=file_get_contents("https://ipapi.co/".$ip."/city");

		echo '<div id="myModal" class="modal">

		  <!-- Modal content -->
		  <div class="modal-content">
			<div class="modal-header">
			  <span class="close">&times;</span>
			  <h2>Your location</h2>
			</div>
			<div class="modal-body">
				<p><b>ip</b> :'.file_get_contents("https://ipapi.co/".$ip."/ip").' </p>
				<p><b>city</b> :'.file_get_contents("https://ipapi.co/".$ip."/city").' </p>
				<p><b>region</b> : '.file_get_contents("https://ipapi.co/".$ip."/region").'</p>
				<p><b>region_code</b> :'.file_get_contents("https://ipapi.co/".$ip."/region_code").'</p>
				<p><b>country</b> : '.file_get_contents("https://ipapi.co/".$ip."/country").'</p>
				<p><b>country_name</b> :  '.file_get_contents("https://ipapi.co/".$ip."/country_name").'</p>
				<p><b>continent_code</b> : '.file_get_contents("https://ipapi.co/".$ip."/continent_code").'</p>
				<p><b>in_eu</b> : '.file_get_contents("https://ipapi.co/".$ip."/in_eu").'</p>
				<p><b>postal</b> :  '.file_get_contents("https://ipapi.co/".$ip."/postal").'</p>
				<p><b>latitude</b> :  '.file_get_contents("https://ipapi.co/".$ip."/latitude").'</p>
				<p><b>longitude</b> :  '.file_get_contents("https://ipapi.co/".$ip."/longitude").'</p>
				<p><b>timezone</b> :  '.file_get_contents("https://ipapi.co/".$ip."/timezone").'</p>
				<p><b>utc_offset</b> :  '.file_get_contents("https://ipapi.co/".$ip."/utc_offset").'</p>
				<p><b>country_calling_code</b> :  '.file_get_contents("https://ipapi.co/".$ip."/country_calling_code").'</p>
				<p><b>currency</b> : '.file_get_contents("https://ipapi.co/".$ip."/currency").'</p>
				<p><b>languages</b> :  '.file_get_contents("https://ipapi.co/".$ip."/languages").'</p>
				<p><b>asn</b> : '.file_get_contents("https://ipapi.co/".$ip."/asn").'</p>
				<p><b>org</b> :  '.file_get_contents("https://ipapi.co/".$ip."/org").'</p>
			</div>
			<div class="modal-footer">
			  <h3>@ oshka 2018</h3>
			</div>
		  </div>

		</div>';

	}

}
