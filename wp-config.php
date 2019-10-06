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
define( 'DB_USER', 'wordpress' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'z[c;?K*$ig[w}#ju38YSh>#v/R;=d@8LnLh[j ]j^O]am%zt]+_cW!=vq~*u.+x~' );
define( 'SECURE_AUTH_KEY',  '2i%_<d0z1#mtX?XDbQ=O<iNK_1QScAHB>XW>w76:[!mu<+Jg%y]t2b(~*VtE2#<7' );
define( 'LOGGED_IN_KEY',    'w|qn^d;Ai8{yCp}$f:SJ`h[x_2R*^o(N|<fSyEHp$?n>tq#)f$eM(MEa1~HOn,I*' );
define( 'NONCE_KEY',        ',w/6i;D__qzWjk%%}v~VY-,9<HniOHD|pv-gL?)VrmLFa1?v@uf/5B3AA)Lq1 Qk' );
define( 'AUTH_SALT',        '/jUnBfr?zq(8PSo[UuVmT0HRa|b>.abv!$N-/Rhi.6U-b7r-KmI|Go1o.Z8tX=]i' );
define( 'SECURE_AUTH_SALT', 'T>lI)MpYbjZ JT~r=h@oG7@mtZBw1D1.heFixbrN{.2fF+}y^TEporgr^_mUvS7d' );
define( 'LOGGED_IN_SALT',   '$:Y4vnFW68kYTU$ipm*JE%@O!Tcp=8pm:KVHX.41bMBc/8<;j8CcQ[n*RJ3OWjfB' );
define( 'NONCE_SALT',       'ixBWddhb-G=DH~}lI>*MG>!Yg#9_GFZ:WUC+5cXht.JI(`CG4WeFgAUq0OtB(/8!' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

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
