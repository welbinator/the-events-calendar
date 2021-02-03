<?php
/**
 * Widget: Featured Venue Event Recurring Icon
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events-pro/v2/widgets/widget-featured-venue/events-list/event/date/recurring.php
 *
 * See more documentation about our views templating system.
 *
 * @link https://evnt.is/1aiy
 *
 * @since TBD
 *
 * @var WP_Post $event The event post object with properties added by the `tribe_get_event` function.
 *
 * @see tribe_get_event() For the format of the event object.
 *
 * @version 5.2.0
 */

if ( empty( $event->recurring ) ) {
	return;
}
?>
<a
	<?php tribe_classes( $helpers->prefix_widget_class( 'featured-venue', 'event-datetime-recurring-link' ) ); ?>
	href="<?php echo esc_url( $event->permalink_all ); ?>"
>
	<em
		<?php tribe_classes( $helpers->prefix_widget_class( 'featured-venue', 'event-datetime-recurring-icon' ) ); ?>
		aria-label="<?php echo esc_attr_x( 'Recurring', 'Recurring label for event in events list widget.', 'tribe-events-calendar-pro' ); ?>"
		title="<?php echo esc_attr_x( 'Recurring', 'Recurring label for event in events list widget.', 'tribe-events-calendar-pro' ); ?>"
	>
		<?php
		$this->template(
			'components/icons/recurring',
			[
				'classes' => [
					$helpers->prefix_widget_class( 'featured-venue', 'event-datetime-recurring-icon-svg' ),
				],
			]
		);
		?>
	</em>
</a>
