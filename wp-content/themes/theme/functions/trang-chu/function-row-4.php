<?php
function create_homepage_row_4_type() {
$homepageRow4labels = array (
//BEGIN - Việt Hóa menu custom post type
'name' => _x('Homepage row 4','Homepage row 4'),
'singular_name' => _x('Homepage row 4','Homepage row 4'),
'add_new' => __ ('Thêm row'),
'add_new_item' => __('Thêm row'),
'edit_item' => __('Sửa row'),
'new_item' => __('Thêm row'),
'all_items' => __('Tất cả row'),
'view_item' => __('Xem row'),
'search_item' => __('Tìm row'),
'not_found' => __('Hiện tại chưa có banner nào'),
'not_found_in_trash' => __('Không có banner nào trong sọt rác'),
'menu_name' => 'Homepage row 4'
//END - Việt hóa menu custom post type
);
$args = array(
'labels' => $homepageRow4labels,
'description' => 'Quản lý các Slide banner đầu trang trên website',
//Xác định những chức năng được hỗ trợ trong custom post type - line 25
'supports' => array('title','thumbnail','custom-fields'),
'taxonomies' => array( ), //Các taxonomy được phép 
'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, true thì giống như Page
'public' => true, //Kích hoạt post type
'show_ui' => true, //Hiển thị khung quản trị như Post/Page
'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
'menu_position' => 3, //Thứ tự vị trí hiển thị trong menu (tay trái)
//'menu_icon' => '', //Đường dẫn tới icon sẽ hiển thị
'can_export' => true, //Có thể export nội dung bằng Tools -> Export
'has_archive' => true, //Cho phép lưu trữ (month, date, year)
'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
'capability_type' => 'post' //
);
// echo "<pre>";
// var_dump($bannerlabels);
// die;
register_post_type ('homepage_row_4',$args);
}
add_action ('init','create_homepage_row_4_type');
?>