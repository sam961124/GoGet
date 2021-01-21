<?php

/**
 * Single Topic Content Part
 *
 * @package bbPress
 * @subpackage Theme
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

?>

<div id="bbpress-forums" class="bbpress-wrapper">

    <h1 align="center"><b><br><?php echo(bbp_get_topic_title(bbp_get_topic_id())); ?></b></h1>

	<?php bbp_breadcrumb(); ?>

	<?php bbp_topic_subscription_link(); ?>

	<?php bbp_topic_favorite_link(); ?>

	<?php do_action( 'bbp_template_before_single_topic' ); ?>

	<?php if ( post_password_required() ) : ?>

		<?php bbp_get_template_part( 'form', 'protected' ); ?>

	<?php else : ?>

		<?php bbp_topic_tag_list(); ?>
		
		<?php echo(do_shortcode("[GoGet_display_sell_count]")); ?>

		<?php bbp_single_topic_description(); ?>

		<?php if ( bbp_show_lead_topic() ) : ?>

			<?php bbp_get_template_part( 'content', 'single-topic-lead' ); ?>

		<?php endif; ?>

		<?php if ( bbp_has_replies() ) : ?>

			<?php bbp_get_template_part( 'pagination', 'replies' ); ?>

			<?php bbp_get_template_part( 'loop',       'replies' ); ?>

			<?php bbp_get_template_part( 'pagination', 'replies' ); ?>

		<?php endif; ?>

        <!-- unlocked section -->
        <?php $user_id=get_current_user_id() ?>
        <?php $post_id=bbp_get_topic_id() ?>
        <?php $author_id=bbp_get_topic_author_id($post_id) ?>
<!-- for issue 49 start -->
        <?php if ( !mycred_post_is_for_sale($post_id) || mycred_user_paid_for_content( $user_id, $post_id ) || mycred_is_admin($user_id) || $user_id == $author_id ) : ?>
<!-- for issue 49 end -->
            <?php bbp_get_template_part( 'form', 'reply' ); ?>
        <?php endif; ?>
        <!-- end of unlocked section -->


	<?php endif; ?>

	<?php bbp_get_template_part( 'alert', 'topic-lock' ); ?>

	<?php do_action( 'bbp_template_after_single_topic' ); ?>

</div>
