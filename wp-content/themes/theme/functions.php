<?php

function md_is_mobile() {
	require_once(get_template_directory() . '/includes/Mobile_Detect.php');
  	$detect = new Mobile_Detect;
  	if( $detect->isMobile() && !$detect->isTablet() ) {
  		return true;
  	} else {
  		return false;
  	}
}

add_theme_support( 'post-thumbnails' );

function wpdocs_custom_excerpt_length( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function theme_default_image_size() {
    return 'custom-image-size-2';
}
add_filter( 'pre_option_image_default_size', 'theme_default_image_size' );

//Thêm trang quản lý
//require('functions/trang-chu/create-home-type.php');
// require('functions/trang-chu/function-row-2.php');
// require('functions/trang-chu/function-row-3.php');
// require('functions/trang-chu/function-row-4.php');
// require('functions/trang-chu/function-row-5.php');
// require('functions/trang-chu/function-row-6.php');
// require('functions/gioi-thieu/function-gioi-thieu.php');
// require('functions/chinh-sach/function-chinh-sach.php');
// require('functions/san-pham/function-san-pham.php');
// require('functions/thu-vien/function-thu-vien.php');
// require('functions/tien-ich/function-tien-ich.php');

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

// add_action('wp_head', 'show_template');
// function show_template() {
//     global $template;
//     var_dump(basename($template));die;
// }

function add_file_types_to_uploads($file_types){
	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes );
	return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');

//add header options
if( function_exists('acf_add_options_page') ) {
  
  acf_add_options_page(array(
    'page_title'  => 'Theme General Settings',
    'menu_title'  => 'Theme Settings',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));
  
  acf_add_options_sub_page(array(
    'page_title'  => 'Theme Header Settings',
    'menu_title'  => 'Header',
    'parent_slug' => 'theme-general-settings',
  ));
  
  acf_add_options_sub_page(array(
    'page_title'  => 'Theme Footer Settings',
    'menu_title'  => 'Footer',
    'parent_slug' => 'theme-general-settings',
  ));

  acf_add_options_sub_page(array(
      'page_title'  => 'Theme Footer Settings',
      'menu_title'  => 'Trang chủ',
      'parent_slug' => 'theme-general-settings',
  ));

  acf_add_options_sub_page(array(
      'page_title'  => 'Theme Tin Tức Detail Settings',
      'menu_title'  => 'Tin Tức Detail',
      'parent_slug' => 'theme-general-settings',
  ));
  acf_add_options_sub_page(array(
      'page_title'  => 'Theme Footer Settings',
      'menu_title'  => 'Trang liên hệ',
      'parent_slug' => 'theme-general-settings',
  ));
    acf_add_options_sub_page(array(
        'page_title'  => 'Theme Footer Settings',
        'menu_title'  => 'Trang đào tạo',
        'parent_slug' => 'theme-general-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'  => 'Theme Footer Settings',
        'menu_title'  => 'Trang điều trị nám',
        'parent_slug' => 'theme-general-settings',
    ));

}
