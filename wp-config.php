<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'diva' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', 'root' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '89pA>Ji1OKp08G;Q mUDACe.M03E@+3Wklf[d+X7foF+)aFeATK[0=<%F3 9l=%&' );
define( 'SECURE_AUTH_KEY',  'z)Ujt~(N~?kmu3SxNj0;ZoI#]c+BeoVNV7z@S%Ob8Z^!>)BNPSTQ)BCR*+(27d@,' );
define( 'LOGGED_IN_KEY',    '{Tu?-nd8NT.q?{+k:&RTwF|II}El.fYURQSN )uSVevet8FL^YnXy0s;g(LCP^Eg' );
define( 'NONCE_KEY',        'e=:rBf>;*d!MwK^_?Dvu9yWnFGokIn|Kxv1bfJ$ajz j^WCH&[r0%1J3U_he0{Ca' );
define( 'AUTH_SALT',        '%zfn5v0JzvhU{|!+mA//zJk]F67nbPP1:X+%1>1ft5)v}+Wz@f+#@((B,eN3r&_i' );
define( 'SECURE_AUTH_SALT', 'gtq8>>bhhRgsYiuqj9[v&I{@ILm2J_@VExo&/.vh]3|FO[JC4Ts{z_Ej[Wr>lkrT' );
define( 'LOGGED_IN_SALT',   'AN5C4M?~AqhSY<R2Oc:z?Tb6kfqW^bbKjXQVN>.r7~S(F +OVkoY{C5C]st,M}T0' );
define( 'NONCE_SALT',       'egX$+4MU(y:= zcY>^tHDOU&g1z*V9xcLN>DE+ Z8<l?1:qp~y `>b|{LOK-C*|`' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'diva_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
