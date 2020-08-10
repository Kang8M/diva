<?php
function create_chinh_sach_type() {
$chinhsachlabels = array (
//BEGIN - Việt Hóa menu custom post type
'name' => _x('Trang chính sách','Trang chính sách'),
'singular_name' => _x('Trang chính sách','Trang chính sách'),
'add_new' => __ ('Thêm chính sách'),
'add_new_item' => __('Thêm chính sách'),
'edit_item' => __('Sửa chính sách'),
'new_item' => __('Thêm chính sách'),
'all_items' => __('Tất cả chính sách'),
'view_item' => __('Xem chính sách'),
'search_item' => __('Tìm chính sách'),
'not_found' => __('Hiện tại chưa có chính sách nào'),
'not_found_in_trash' => __('Không có chính sách nào trong sọt rác'),
'menu_name' => 'Danh sách chính sách'
//END - Việt hóa menu custom post type
);
$args = array(
'labels' => $chinhsachlabels,
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
register_post_type ('trang_chinh_sach',$args);
}
add_action ('init','create_chinh_sach_type');
?>