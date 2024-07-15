<?php
/**
 * List View Single Event
 * This file contains one event in the list view
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list/single-event.php
 *
 * @package TribeEventsCalendar
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

// Setup an array of venue details for use later in the template
$venue_details = tribe_get_venue_details();

// Venue
$has_venue_address = ( ! empty( $venue_details['address'] ) ) ? ' location' : '';

// Organizer
$organizer = tribe_get_organizer();
?>
<!-- Event Image -->
<div class="event-image">
	<?php
	$thumbnail = g5plus_post_thumbnail('event-list');
	if (!empty($thumbnail)){
		echo wp_kses_post($thumbnail);
	}
	?>
	<div class="event-info">
		<span class="event-comment"><?php echo get_comments_number(); ?></span>
		<?php if (function_exists('g5plus_get_post_views') ):?>
			<span class="event-view"><?php echo g5plus_get_post_views(); ?></span>
		<?php endif; ?>
	</div>
</div>
	<!-- Event Title -->
<?php do_action( 'tribe_events_before_the_event_title' ) ?>
	<h2 class="p-font fs-18 fw-medium line-28 spacing-20 tribe-events-list-event-title">
		<a class="heading-color tribe-event-url" href="<?php echo esc_url( tribe_get_event_link() ); ?>" title="<?php the_title_attribute() ?>" rel="bookmark">
			<?php the_title() ?>
		</a>
	</h2>
<?php do_action( 'tribe_events_after_the_event_title' ) ?>
	<!-- Event Meta -->
<?php do_action( 'tribe_events_before_the_meta' ) ?>
	<div class="tribe-events-event-meta">
		<div class="author <?php echo esc_attr( $has_venue_address ); ?>">

			<!-- Schedule & Recurrence Details -->
			<div class="tribe-event-schedule-details">
				<?php echo tribe_events_event_schedule_details() ?>
			</div>

			<?php if ( $venue_details ):?>
				<?php if(! empty( $venue_details['address'])):?>
					<!-- Venue Display Info -->
					<div class="tribe-events-venue-details">
						<?php echo sprintf('%s', $venue_details['address']); ?>
					</div> <!-- .tribe-events-venue-details -->
				<?php endif;
			endif; ?>
		</div>
	</div><!-- .tribe-events-event-meta -->
<?php do_action( 'tribe_events_after_the_meta' ) ?>
	<!-- Event Cost -->
<?php if ( tribe_get_cost() ) : ?>
	<div class="tribe-events-event-cost">
		<span><?php echo tribe_get_cost( null, true ); ?></span>
	</div>
<?php endif; ?>
<!-- Event Content -->
<?php do_action( 'tribe_events_before_the_content' ) ?>
<div class="tribe-events-list-event-description tribe-events-content">
	<?php echo tribe_events_get_the_excerpt(); ?>
	<a href="<?php echo esc_url( tribe_get_event_link() ); ?>" class="bt bt-xs bt-tertiary bt-bg" rel="bookmark"><?php esc_html_e( 'DETAILS', 'g5plus-academia' ) ?></a>
</div><!-- .tribe-events-list-event-description -->
<?php
do_action( 'tribe_events_after_the_content' );