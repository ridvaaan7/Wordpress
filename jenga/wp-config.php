<?php
/**
 * WordPress için başlangıç ayar dosyası.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * Bu dosya şu ayarları içerir:
 * 
 * * MySQL ayarları
 * * Gizli anahtarlar
 * * Veritabanı tablo ön eki
 * * ABSPATH
 * 
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri servis sağlayıcınızdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'jenga' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'ridvan' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', '260416Aydos.' );

/** MySQL sunucusu */
define( 'DB_HOST', '127.0.0.1' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define( 'DB_COLLATE', '' );

/**#@+
 * Eşsiz doğrulama anahtarları ve tuzlar.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!*aQBX?Eihfrh6iO|+M@vn{v6L9;cJw~sg,j;U>?*(_6:|N_]@Ot)&0f_O^yI)y#' );
define( 'SECURE_AUTH_KEY',  '3`j>Y`5f[Jd:DcTID1Vx-E$0[?LUpy;J)S7aWR{Bq?#^_*V$6tND?/M!%X&~J/>@' );
define( 'LOGGED_IN_KEY',    'v_h$ir[tBTTyj~I|8aBD8ini(S,#GI/ji>vTwp_rXT9Xb]jjSXU.Xc[[>{!M*N?j' );
define( 'NONCE_KEY',        'o_QyCyEmLo[YE7}fJV)#CpJ#%OI6$~9?po}S4-GF*.aMpvW+Dt/r$m?}`^[q Mbt' );
define( 'AUTH_SALT',        'bDY`IWciQ}it_~ZQct/Eyb6o;LlBN+8u#IJu`Us%w9QGg[OJlNy8rFaWZC~7bC/h' );
define( 'SECURE_AUTH_SALT', '!i~$|)RZnL_EB{MMl(]kj@Y1fwVIT7fQVsrqR-ZlJ)agf EIXA#U(8rIa_{sOWxn' );
define( 'LOGGED_IN_SALT',   'nNQ]S~jVhVmBZ*1SX4Wu*G#rZ  f(:f B`r+v;4G|pcV0Rlwon$[D~n|9|9@_T;4' );
define( 'NONCE_SALT',       '0g(:~4fbo`/.dj31dhNh>$Bq 4u6]dm05qJ;ipi]?j6OvvQZR&pU6!3go* //>Kt' );

/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 * 
 * Hata ayıklama için kullanabilecek diğer sabitler ile ilgili daha fazla bilgiyi
 * belgelerden edinebilirsiniz.
 * 
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** WordPress değişkenlerini ve yollarını kurar. */
require_once ABSPATH . 'wp-settings.php';