<?php

namespace TenupFramework;

/**
 * This class provides methods to interact with the WordPress environment.
 *
 * @package TenupFramework
 * @since 0.0.0
 */
class Env {

	/**
	 * Get the current defined environment.
	 *
	 * @return string
	 */
	public static function get() : string {

		return \wp_get_environment_type();
	}

	/**
	 * Checks if the current environment is local.
	 *
	 * @since 0.0.0
	 * @return bool
	 */
	public static function is_local() : bool {
		return static::is( 'local' );
	}

	/**
	 * Checks if the current environment is development.
	 *
	 * @since 0.0.0
	 * @return bool
	 */
	public static function is_development() : bool {
		return static::is( 'development' );
	}

	/**
	 * Checks if the current environment is staging.
	 *
	 * @since 0.0.0
	 * @return bool
	 */
	public static function is_staging() : bool {
		return static::is( 'staging' );
	}

	/**
	 * Checks if the current environment is production.
	 *
	 * @since 0.0.0
	 * @return bool
	 */
	public static function is_production() : bool {
		return static::is( 'production' );
	}

	/**
	 * Check if current environment one of the requested.
	 *
	 * @param  string ...$envs
	 * @return boolean
	 */
	public static function in( string ...$envs ) : bool {

		if ( in_array( static::get(), $envs, true ) ) {
			return true;
		}

		return false;
	}

	/**
	 * Check environment against given string.
	 *
	 * @since 0.0.0
	 * @return bool
	 */
	public static function is( string $env ) : bool {
		return static::get() === $env;
	}
}
