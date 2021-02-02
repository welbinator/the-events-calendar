<?php
/**
 * Utility class that provides methods for Widgets for handling template modifications and shortcuts.
 *
 * @since   TBD
 *
 * @package Tribe\Events\Views\V2\Widgets
 */

namespace Tribe\Events\Views\V2\Widgets;

/**
 * Class Template Helpers.
 *
 * @since   TBD
 *
 * @package Tribe\Events\Views\V2\Widgets
 */
class Template_Helpers {
	/**
	 * Prefix a given set of classes and append which component we pass.
	 *
	 * @since TBD
	 *
	 * @see tribe_classes()
	 *
	 * @param array|string $classes   Which classes we will prefix and maybe append a component.
	 * @param string       $component Which component will be appended to the end of the string with `__`.
	 *
	 * @return array<string,bool> Classes primed for usage on tribe_classes().
	 */
	public function prefix_widget_class( $classes = [], $component = null ) {
		$classes     = array_filter( (array) $classes );
		$classes     = array_merge( [ 'common' ], $classes );
		$classes     = array_unique( $classes );
		$base_prefix = 'tribe-events-widget-%s';
		if ( ! empty( $component ) && is_string( $component ) ) {
			$base_prefix .= '__' . $component;
		}

		$output = [];

		foreach ( $classes as $value ) {
			$output[ sanitize_html_class( sprintf( $base_prefix, $value ) ) ] = true;
		}

		return $output;
	}
}
