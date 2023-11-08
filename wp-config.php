<?php
/**
 * #ddev-generated: Automatically generated WordPress settings file.
 * ddev manages this file and may delete or overwrite the file unless this comment is removed.
 * It is recommended that you leave this file alone.
 *
 * @package ddevapp
 */

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** Authentication Unique Keys and Salts. */
define( 'AUTH_KEY', 'vyWOkFSfeRKwUKBxIjkYVyKJaFkFgSKrsVWSIglYHzpmwuPZgJZNFGMcmNhvlLKq' );
define( 'SECURE_AUTH_KEY', 'nEIZOULjKuwamicOHgQOmMPFIqvgkBHdwguzPgZgMrqMkWbwYbqxUDvhYlpLSNbE' );
define( 'LOGGED_IN_KEY', 'wgVjSpCNiISgWhVDnkPhREzwWvXOLjvgQTfKFLCJUOHJnonmnSXDhaywffkrpQkP' );
define( 'NONCE_KEY', 'TxdylBMgPaowPkqVmTSWpUfONJJAualXaayQkSEApnFXDDpuKLGOjBVFDeuZhGPf' );
define( 'AUTH_SALT', 'leYQHNZnqWTSRBFTwSGlcmMOvJRXYqwHgzJlrpglKHUDqxVaFfxaEHkuDztaiLKb' );
define( 'SECURE_AUTH_SALT', 'pxAgCKTlYbvtoVZtuarptPpdaERdTwzWSlloLcbVBgaEYAPPPNXhxNwGGFljQjjW' );
define( 'LOGGED_IN_SALT', 'bLBCMQKzObUSTBryWyPOzXfFfrJuasgwCyoBbUxLMGPwUNKorbwuppHdVbSxGKoc' );
define( 'NONCE_SALT', 'kuBLKaMUHKNnREGDzNVeHyzwKVQlGZbDUTxGBoykTQgDtuYYoWDYSwLyabOrkNps' );

/** Absolute path to the WordPress directory. */
defined( 'ABSPATH' ) || define( 'ABSPATH', dirname( __FILE__ ) . '/' );

// Include for settings managed by ddev.
$ddev_settings = dirname( __FILE__ ) . '/wp-config-ddev.php';
if ( ! defined( 'DB_USER' ) && getenv( 'IS_DDEV_PROJECT' ) == 'true' && is_readable( $ddev_settings ) ) {
	require_once( $ddev_settings );
}

/** Include wp-settings.php */
if ( file_exists( ABSPATH . '/wp-settings.php' ) ) {
	require_once ABSPATH . '/wp-settings.php';
}
