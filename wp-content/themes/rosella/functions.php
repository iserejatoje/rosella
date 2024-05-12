<?php
add_theme_support( 'html5', [ 'script', 'style' ] );
add_theme_support( 'post-thumbnails' );

add_image_size( 'contacts-gallery-thumb', 424, 264, true );
add_image_size( 'services-thumb', 460, 229, true );
add_image_size( 'service-content-image', 951, 517, true );
add_image_size( 'service-1-type', 865, 493, true );
add_image_size( 'service-2-type', 424, 493, true );
add_image_size( 'single', 1903, 630, true );

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}

define( 'THEME_PATH', get_template_directory_uri() );
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

function load_theme() {
	wp_enqueue_style( 'custom-css', THEME_PATH . '/css/custom.css', array(), '1.0' );
	wp_enqueue_style( 'app-css', THEME_PATH . '/css/app.min.css', array(), time() );
	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', THEME_PATH . '/js/jquery4.js', array(), '1.0', true );
	wp_enqueue_style( 'fancy-css', THEME_PATH . '/css/fancybox.css', array(), '1.0' );
	wp_enqueue_script( 'fancy', THEME_PATH . '/js/fancybox.js', array(), '1.0', true );
	wp_enqueue_script( 'swiper', THEME_PATH . '/js/swiper.js', array(), '1.0', true );
	wp_enqueue_script( 'imask', THEME_PATH . '/js/imask.js', array(), '1.0', true );
	wp_enqueue_script( 'app', THEME_PATH . '/js/app.min.js', array(
		'jquery',
		'fancy',
		'swiper',
		'imask'
	), time(), true );
	wp_enqueue_script( 'custom', THEME_PATH . '/js/custom.js', array( 'jquery', 'fancy' ), '1.0', true );
	wp_enqueue_style( 'swiper-css', THEME_PATH . '/css/swiper.css', array(), '1.0' );

	$wp_theme_settings = array(
		'root_url' => get_template_directory_uri(),
		'ajax_url' => admin_url( 'admin-ajax.php' )
	);
	wp_localize_script( 'app', 'wp_theme_settings', $wp_theme_settings );
}

add_action( 'wp_enqueue_scripts', 'load_theme' );

function P( $array ) {
	echo '<pre>' . var_export( $array, true ) . '</pre>';
}

function handle_form() {
	if ( ! isset( $_POST['my_form_nonce'] ) || ! wp_verify_nonce( $_POST['my_form_nonce'], 'my_form_action' ) ) {
		wp_send_json_error( 'Nonce verification failed', 403 );
		wp_die();
	}

	$expected_fields = array(
		'firstname' => 'sanitize_text_field',
		'lastname'  => 'sanitize_text_field',
		'email'     => 'sanitize_email',
		'subject'   => 'sanitize_text_field',
		'phone'     => 'sanitize_text_field',
		'message'   => 'sanitize_text_field',
	);

	$sanitized_data = [];

	foreach ( $expected_fields as $field => $sanitize_callback ) {
		if ( isset( $_POST[ $field ] ) ) {
			$sanitized_data[ $field ] = call_user_func( $sanitize_callback, $_POST[ $field ] );
		}
	}

	$message = '<p>First name: ' . $sanitized_data['firstname'] . '</p>';
	if ( ! empty( $sanitized_data['lastname'] ) ) {
		$message = '<p>Last name: ' . $sanitized_data['lastname'] . '</p>';
	}
	$message .= '<p>E-mail: ' . $sanitized_data['email'] . '</p>';
	$message .= '<p>Phone: ' . $sanitized_data['phone'] . '</p>';

	if ( ! empty( $sanitized_data['message'] ) ) {
		$message .= '<p>Message: ' . $sanitized_data['message'] . '</p>';
	}

	$headers = array( 'content-type: text/html' );
	echo wp_mail( 'serejatoje@gmail.com', $sanitized_data['subject'], $message, $headers );

	wp_die();
}

add_action( 'wp_ajax_handle_form', 'handle_form' );
add_action( 'wp_ajax_nopriv_handle_form', 'handle_form' );

function my_post_queries( $query ) {
	if ( ! is_admin() ) {
		$query->set( 'posts_per_page', 12 );
	}
}

add_action( 'pre_get_posts', 'my_post_queries' );