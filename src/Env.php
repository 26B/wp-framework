<?php

namespace TenupFramework;

/**
 * This class provides methods to interact with the WordPress environment.
 *
 * @package TenupFramework
 * @since 1.7.0
 */
class Env {

	/**
	 * Get the current defined environment.
	 *
	 * @since 1.7.0
	 * @return string
	 */
	public static function get() : string {

		return \wp_get_environment_type();
	}

	/**
	 * Checks if the current environment is local.
	 *
	 * @since 1.7.0
	 * @return bool
	 */
	public static function is_local() : bool {
		return static::is( 'local' );
	}

	/**
	 * Checks if the current environment is development.
	 *
	 * @since 1.7.0
	 * @return bool
	 */
	public static function is_development() : bool {
		return static::is( 'development' );
	}

	/**
	 * Checks if the current environment is staging.
	 *
	 * @since 1.7.0
	 * @return bool
	 */
	public static function is_staging() : bool {
		return static::is( 'staging' );
	}

	/**
	 * Checks if the current environment is production.
	 *
	 * @since 1.7.0
	 * @return bool
	 */
	public static function is_production() : bool {
		return static::is( 'production' );
	}

	/**
	 * Check if current environment one of the requested.
	 *
	 * @since 1.7.0
	 * @param  string ...$envs Environments to check against.
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
	 * @since 1.7.0
	 * @param string $env Environment to check against.
	 * @return bool
	 */
	public static function is( string $env ) : bool {
		return static::get() === $env;
	}
}
