<?php
/**
 * View: Month View Mobile Events
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/views/v2/month/mobile-events.php
 *
 * See more documentation about our views templating system.
 *
 * @link {INSERT_ARTCILE_LINK_HERE}
 *
 * @version TBD
 *
 * @var array $days An array containing the data for each day on the calendar grid, divided by day.
 *                  Shape `[ <Y-m-d> => [ ...<day_data> ] ]`.
 */

?>
<section class="tribe-events-calendar-month-mobile-events" data-js="tribe-events-pro-week-mobile-events">

	<?php foreach ( $days as $day_date => $day ) : ?>

		<?php if ( ! empty( $day[ 'events' ] ) ) : ?>

			<?php $this->template( 'month/mobile-events/mobile-day', [ 'day' => $day, 'day_date' => $day_date ] ); ?>

		<?php endif; ?>

	<?php endforeach; ?>

	<?php $this->template( 'month/nav', [ 'location' => 'mobile' ] ); ?>

</section>
