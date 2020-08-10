<?php
function create_home_type() {
$homelabels = array (
//BEGIN - Việt Hóa menu custom post type
'name' => _x('Trang chủ','Trang chủ'),
'singular_name' => _x('Trang chủ','Trang chủ'),
'add_new' => __ ('Thêm Trang chủ'),
'add_new_item' => __('Thêm Trang chủ mới'),
'edit_item' => __('Sửa Trang chủ'),
'new_item' => __('Thêm dự Trang chủ'),
'all_items' => __('Tất cả Trang chủ'),
'view_item' => __('Xem Trang chủ'),
'search_item' => __('Tìm Trang chủ'),
'not_found' => __('Hiện tại chưa có Trang chủ nào'),
'not_found_in_trash' => __('Không có Trang chủ nào trong sọt rác'),
'menu_name' => 'Trang chủ'
//END - Việt hóa menu custom post type
);
$args = array(
'labels' => $homelabels,
'description' => 'Quản lý các Trang chủ trên website',
//Xác định những chức năng được hỗ trợ trong custom post type - line 25
'supports' => array('title','editor','thumbnail','excerpt','custom-fields'),
'taxonomies' => array('post_tag' ), //Các taxonomy được phép 
'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, true thì giống như Page
'public' => true, //Kích hoạt post type
'show_ui' => true, //Hiển thị khung quản trị như Post/Page
'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
'menu_position' => 4, //Thứ tự vị trí hiển thị trong menu (tay trái)
//'menu_icon' => '', //Đường dẫn tới icon sẽ hiển thị
'can_export' => true, //Có thể export nội dung bằng Tools -> Export
'has_archive' => true, //Cho phép lưu trữ (month, date, year)
'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
'capability_type' => 'post' //
);
register_post_type ('home_crystal',$args);
}
add_action ('init','create_home_type');
?>