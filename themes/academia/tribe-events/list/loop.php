<?php
/**
 * List View Loop
 * This file sets up the structure for the list loop
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list/loop.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
} ?>

<?php
global $post;
global $more;
$more = false;
?>

<div class="row column-equal-height g5plus-tribe-events-loop">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php do_action( 'tribe_events_inside_before_loop' ); ?>
		<!-- Event  -->
		<?php
        $post_attr = array();
        if ($post->post_parent) {
            $post_attr[] = sprintf('data-parent-post-id="%s"',absint( $post->post_parent ));
        }
		?>
		<div id="post-<?php the_ID() ?>" class="col-md-4 col-sm-6 mg-bottom-60 <?php tribe_events_event_classes() ?>" <?php echo join(' ', $post_attr)?>>
			<?php tribe_get_template_part( 'list/single', 'event' ) ?>
		</div>
		<?php do_action( 'tribe_events_inside_after_loop' ); ?>
	<?php endwhile; ?>
</div><!-- .tribe-events-loop -->