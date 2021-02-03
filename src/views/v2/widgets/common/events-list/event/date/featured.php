<?php
/**
 * Widget: Featured Venue Event Featured Icon
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events-pro/v2/widgets/common/events-list/event/date/featured.php
 *
 * See more documentation about our views templating system.
 *
 * @link http://evnt.is/1aiy
 *
 * @version TBD
 *
 * @var WP_Post $event The event post object with properties added by the `tribe_get_event` function.
 *
 * @see tribe_get_event() For the format of the event object.
 */

if ( empty( $event->featured ) ) {
	return;
}
?>
<em
	<?php tribe_classes( $helpers->prefix_widget_class( 'featured-venue', 'event-datetime-featured-icon' ) ); ?>
	aria-label="<?php esc_attr_e( 'Featured', 'the-events-calendar' ); ?>"
	title="<?php esc_attr_e( 'Featured', 'the-events-calendar' ); ?>"
>
	<?php
	$this->template(
		'components/icons/featured',
		[
			'classes' => [
				$helpers->prefix_widget_class( 'featured-venue', 'event-datetime-featured-icon-svg' ),
			],
		],
	);
	?>
</em>
<span <?php tribe_classes( 'tribe-common-a11y-visual-hide', $helpers->prefix_widget_class( 'featured-venue', 'event-datetime-featured-text' ) ); ?>>
	<?php esc_html_e( 'Featured', 'the-events-calendar' ); ?>
</span>
