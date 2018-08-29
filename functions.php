<?php

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

require_once('wp-bootstrap-navwalker.php');
include ('search-engines/related-articles.php');
include ('search-engines/projects.php');
include ('search-engines/articles.php');
include ('search-engines/news.php');
include ('search-engines/tags.php');

// IMAGE SIZES
add_image_size( 'fhd', 1920, 0 );
add_image_size( 'gallery-thumbnail', 360, 275);
add_image_size( 'team-thumbnail', 360, 0);
add_image_size( 'list-thumbnail', 353, 200, true);
add_image_size( 'project-thumbnail', 370, 450, true);


function getLogoImage(){

	$httpContext = stream_context_create([
		'ssl' => [
			'verify_peer' => false,
			'verify_peer_name' => false
		]
	]);
	echo file_get_contents(get_template_directory_uri() . '/dist/images/logo.svg', false, $httpContext);
}

function getSvg($file){

	$httpContext = stream_context_create([
		'ssl' => [
			'verify_peer' => false,
			'verify_peer_name' => false
		]
	]);
	echo file_get_contents($file, false, $httpContext);
}

// REGISTER SIDEBAR
if ( function_exists('register_sidebar') )
register_sidebar(array(
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
));

// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

// REMOVE WP EMBED
function my_deregister_scripts(){
	wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );

// REMOVE RECENT COMMENTS
function remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
}
add_action('widgets_init', 'remove_recent_comments_style');

// ACF OPTIONS
// function my_acf_init() {
// 	acf_update_setting('google_api_key', 'AIzaSyCRPjv9FXcWodJmJ1YU4Nq87F0VMjFl_NE');
// }
// add_action('acf/init', 'my_acf_init');

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();

	foreach (['pl', 'en'] as $lang) {
	
		acf_add_options_sub_page([
			'page_title' => "Opcje: ". $lang,
			'menu_title' => __("Opcje: " . $lang, 'textdomain'),
			'menu_slug' => "page-name-${lang}",
			'post_id' => $lang,
			// 'parent' => 'parent-slug'
		]);
	
	}
}


function cc_mime_types($mimes)
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function fix_svg_thumb_display()
{
	echo '<style>
    td.media-icon img[src$=".svg"], img[src$=".svg"].attachment-post-thumbnail { 
      width: 100% !important; 
      height: auto !important; 
    }
  </style>';
}
add_action('admin_head', 'fix_svg_thumb_display');


// INSERT YOUTUBE AND VIMEO IFRAMES INTO A DIV
add_filter('embed_oembed_html', 'wpse_embed_oembed_html', 99, 4);
function wpse_embed_oembed_html($cache, $url, $attr, $post_ID)
{
	$classes = array();

    // Add these classes to all embeds.
	$classes_all = array(
		'responsive-container',
	);

    // Check for different providers and add appropriate classes.

	if (false !== strpos($url, 'vimeo.com')) {
		$classes[] = 'vimeo';
	}

	if (false !== strpos($url, 'youtube.com')) {
		$classes[] = 'youtube';
	}

	$classes = array_merge($classes, $classes_all);

	return '<div class="' . esc_attr(implode($classes, ' ')) . '">' . $cache . '</div>';
}

//REGISTER NAV MENU
add_action('after_setup_theme', 'register_my_menu');
function register_my_menu()
{
	register_nav_menu('primary', __('Primary Menu', 'wp-bootstrap-gulp'));
}

//ENABLE COMMENTS FOR CUSTOM POST TYPES
add_post_type_support('czytelnia', array('comments'));

// COMMENTS FIELDS
function disable_comment_form_fields($fields)
{
	// unset($fields['author']);
	unset($fields['email']);
	unset($fields['url']);
	return $fields;
}
add_filter('comment_form_default_fields', 'disable_comment_form_fields');


// CUSTOM FUNCTIONS
function print_image($image) {
	if($image['mime_type'] === "image/svg+xml")
		getSvg($image['url']);
	else
		echo '<img src="'.$image['url'].'" />';
}

function add_custom_dashboard_widgets() {

	wp_add_dashboard_widget(
		'wpexplorer_dashboard_widget', // Widget slug.
		'Centrum Cyfrowe', // Title.
		'cc_custom_dashboard_widget' // Display function.
	);
}
add_action( 'wp_dashboard_setup', 'add_custom_dashboard_widgets' );

function cc_custom_dashboard_widget() {
	echo get_field('notatki_w_panelu', 'pl');
}

function is_tooltip_enabled($image){
	if(get_field('licencja', $image['ID']) && get_field('licencja', $image['ID']) !== 'none'){
		return true;
	}

	return false;
}

function cc_tooltip($image){
	?>
	<div class="tooltip-container">
        <div class="tooltip-images" tabindex="0">
            <div class="label">

                <?php if(get_field('image-url', $image['ID']) && $image['title'] ){ ?>
                    <a href="<?php the_field('image-url', $image['ID']) ?>" target="_blank">
	                    <?php if ($image['title']){?>
                            Tytuł: <?php echo $image['title'] ?>
	                    <?php } ?>
                    </a>
                    <br>
                <?php }else if($image['title']){ ?>
                    Tytuł: <?php echo $image['title'] ?>
                    <br>
                <?php }

                    $printLicense = false;
                    $license = get_field( 'licencja', $image['ID'] );
                    $licenseImg = get_template_directory_uri() . '/';
                    $licenseUrl = "";

                    if($license && $license !== 'none') {
                        $printLicense = true;
	                    if ( $license === 'ccby' ) {
		                    $licenseImg .= '/dist/images/licenses/cc-by.png';
	                    } else if ( $license === 'ccbysa' ) {
		                    $licenseImg .= '/dist/images/licenses/cc-by-sa.png';
	                    } else if ( $license === 'cczero' ) {
		                    $licenseImg .= '/dist/images/licenses/cc-zero.png';
	                    } else if ( $license === 'public' ) {
		                    $licenseImg .= '/dist/images/licenses/cc-public-domain.png';
	                    }

	                    $licenseUrl = get_field('wersja_licencji_' . $license, $image['ID']);
                    }

                if($printLicense){ ?>
                    <a href="<?php echo $licenseUrl ?>" target="_blank">
		                <img src="<?php echo $licenseImg ?>" alt="<?php echo get_field('licencja', $image['ID']) ?>">
                    </a>
                    <br>
	            <?php }

	            if (get_field('autor', $image['ID'])){?>
                    Autor: <?php the_field('autor', $image['ID']) ?>
                    <br>
	            <?php } ?>
            </div>

        </div>
    </div>
	<?php
}