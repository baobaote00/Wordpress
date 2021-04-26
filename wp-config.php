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
define( 'DB_NAME', 'wordpress' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '[;G=)P2_uN#9PQJ/&YPkY|L/ToY4}Q`Qq_3&IH7,}G#Z>F[oc!<jqgFc8V/.|kt[' );
define( 'SECURE_AUTH_KEY',  '{yHF0u|~pr?qNbLKZ#5V6jEaN/No[iVrD?1oT$lB;q=wc_&C#bQ74qK4Hy(F/L`k' );
define( 'LOGGED_IN_KEY',    '>q_Pcry+3$ls`ZoncCOWy0xqgJe`U`ss:/t;IKGewbSJ`0LNsL_Rm^AM21s,~jG<' );
define( 'NONCE_KEY',        'H_ifG(V(u7}`GSWpPPyYjNb)$s~F-56/B@yo:L~),lUE{(^&}vr&DiO(O}_vzysK' );
define( 'AUTH_SALT',        's|ZG]8G8l;Ot33r|F,>4x/6%K!)321~]5P `/nXU=Phd$.dgqDMFc)#Bn9?c{5!r' );
define( 'SECURE_AUTH_SALT', 'oc(FUlwdBLjm3K66N&[sTZ>xRH|^>mFd1w3VP1pMnCr_X<dn]nSL:F$1fu+wEM,J' );
define( 'LOGGED_IN_SALT',   'IX60c-q491mZ}{Pa4I]!JJTdY.8[1GNF#P|x?MnFdQ&TW0_p3#%m qX8WY#v_]fl' );
define( 'NONCE_SALT',       '2p1XP:B3taZMm* {D+P`N{];buBL<8v6~C6_50%`!sok#Fb4;Ofq7aO%eRL]t0cq' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

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
