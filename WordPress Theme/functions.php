<?php
// Custom login screen
//add_action('login_head', 'custom_login_style');
function custom_login_style(){
?>
	<style type="text/css">
    html, body {
		background-image: url(<?php bloginfo('template_directory')?>/images/custom-login-screen-background.jpg) !important;
	}
	
	h1 a {
		background-image:url(<?php bloginfo('template_directory')?>/images/custom-login-logo.png) !important; 
	}
    </style>
<?php
}

// Custom admin logo
//add_action('admin_head', 'custom_admin_logo', 11);
function custom_admin_logo() {
echo '<style type="text/css">
		#header-logo {
			background:url('.get_bloginfo('template_directory').'/images/custom-admin-logo.gif) left center no-repeat !important;
			width:32px !important;
			height:32px !important;
		}
	</style>';
}

// Remove lost password link from login screen
//add_action( 'login_head', 'remove_password_reset' );
function remove_password_reset_text( $text ){
	if($text == 'Lost your password?'){
		$text = '';
	}
	return $text;
}

function remove_password_reset(){
	add_filter( 'gettext', 'remove_password_reset_text' );
}

// Remove extra information from header
//add_filter('the_generator', 'remove_version');
function remove_version() {
	return '';
}

/*
remove_action( 'wp_head', 'feed_links_extra', 3 ); // Display the links to the extra feeds such as category feeds
remove_action( 'wp_head', 'feed_links', 2 ); // Display the links to the general feeds: Post and Comment Feed
remove_action( 'wp_head', 'rsd_link' ); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action( 'wp_head', 'wlwmanifest_link' ); // Display the link to the Windows Live Writer manifest file.
remove_action( 'wp_head', 'index_rel_link' ); // index link
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // prev link
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // start link
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 ); // Display relational links for the posts adjacent to the current post.
remove_action( 'wp_head', 'wp_generator' ); // Display the XHTML generator that is generated on the wp_head hook, WP version
*/

// Custom footer text
//add_filter('admin_footer_text', 'custom_footer_text');
function custom_footer_text() {
	echo "Change this text";
}

// Remove unwanted admin buttons
//add_action('admin_menu', 'remove_admin_menu_sections');
function remove_admin_menu_sections() {
	remove_menu_page('link-manager.php');
}

// Custom post type
//add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'product',
		array(
			'labels' => array(
				'name' => __( 'Products' ),
				'singular_name' => __( 'Product' )
			),
		'public' => true,
		'has_archive' => true,
		)
	);
}

// Custom excerpt length
//add_filter('excerpt_length', 'new_excerpt_length');
function new_excerpt_length($length) {
	return 30;
}

// Custom excerpty elipses
//add_filter('excerpt_more', 'new_excerpt_more');
function new_excerpt_more($more) {
	return '...';
}

// Custom user roles
remove_role('subscriber');
remove_role('author');
remove_role('contributor');

add_role('content_creator', 'Content Creator', array(
	'read' => true,
	'edit_pages' => true,
	'edit_others_pages' => true
));

// Custom image size
if(function_exists('add_image_size')){ 
	//add_image_size('my-custom-size', 100, 100, true);
}

// Remove default tooltip popups on links
//add_filter('wp_list_categories','remove_title_attribute');
//add_filter('wp_list_pages','remove_title_attribute');
function remove_title_attribute($output){
	$output = preg_replace('/title=\"(.*?)\"/','',$output);
	return $output;
}

?>