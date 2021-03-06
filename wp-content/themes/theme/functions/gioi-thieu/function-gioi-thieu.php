<?php
function create_gioi_thieu_type() {
$gioithieulabels = array (
//BEGIN - Việt Hóa menu custom post type
'name' => _x('Trang giới thiệu','Trang giới thiệu'),
'singular_name' => _x('Trang giới thiệu','Trang giới thiệu'),
'add_new' => __ ('Thêm giới thiệu'),
'add_new_item' => __('Thêm giới thiệu'),
'edit_item' => __('Sửa giới thiệu'),
'new_item' => __('Thêm giới thiệu'),
'all_items' => __('Tất cả giới thiệu'),
'view_item' => __('Xem giới thiệu'),
'search_item' => __('Tìm giới thiệu'),
'not_found' => __('Hiện tại chưa có giới thiệu nào'),
'not_found_in_trash' => __('Không có giới thiệu nào trong sọt rác'),
'menu_name' => 'Trang giới thiệu'
//END - Việt hóa menu custom post type
);
$args = array(
'labels' => $gioithieulabels,
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
register_post_type ('trang_gioi_thieu',$args);
}
add_action ('init','create_gioi_thieu_type');
?>