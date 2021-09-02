<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package nt_conversi
 */

if ( ! function_exists( 'nt_conversi_paging_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 *
 * @return void
 */
function nt_conversi_paging_nav() {
	// Don't print empty markup if there's only one page.
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	}
	?>
	<nav class="navigation paging-navigation" role="navigation">
		<ul class="pager">

			<?php if ( get_next_posts_link() ) : ?>
			<li class="previous"><?php next_posts_link( esc_html__( ' Older posts', 'nt-conversi' ) ); ?></li>
			<?php endif; ?>

			<?php if ( get_previous_posts_link() ) : ?>
			<li class="next"><span class="icon-facebook"></span><?php previous_posts_link( esc_html__( 'Newer posts ', 'nt-conversi' ) ); ?></li>
			<?php endif; ?>

		</ul><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'nt_conversi_post_nav' ) ) :
/**
 * Display navigation to next/previous post when applicable.
 *
 * @return void
 */
function nt_conversi_post_nav() {
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}
	?>
	<!-- Navigation -->
	<ul class="pager">
		<li class="previous"><?php previous_post_link( '%link', _x( '<i class="fa fa-angle-left"></i> %title ', 'Previous post link', 'nt-conversi' ) ); ?></li>
		<li class="next"><?php next_post_link(     '%link', _x( '%title <i class="fa fa-angle-right"></i> ', 'Next post link',     'nt-conversi' ) ); ?><li>
	</ul>
	<?php
}
endif;

if ( ! function_exists( 'nt_conversi_post_nav_old' ) ) :
/**
 * Display navigation to next/previous post when applicable.
 *
 * @return void
 */
function nt_conversi_post_nav_old() {
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}
	?>
	<!-- Navigation -->
	<ul class="pager">
	<?php $next_post = get_next_post();
	if (!empty( $next_post )):
	$nexty=$next_post->post_title;
	if (strlen($nexty) > 15){$newshort = substr($nexty,0,25).'...';}else{$newshort=$nexty;}
	endif; ?>

	<?php $prev_post = get_previous_post();
	if (!empty( $prev_post )):
	$previ=$prev_post->post_title;
	if (strlen($previ) > 15){$newshortprev = substr($previ,0,25).'...';}else{$newshortprev=$previ;}
	endif; ?>


		<li class="previous"><?php if (!empty( $prev_post )): next_post_link('%link', $newshortprev ); endif; ?></li>
		<li class="next"><?php if (!empty( $next_post )): next_post_link('%link', $newshort ); endif; ?><li>
	</ul>
	<?php
}
endif;


if ( ! function_exists( 'nt_conversi_post_button' ) ) {
/**
 * Display post button
 *
 * @return void
 */
	function nt_conversi_post_button() {

		$readmore_display = ot_get_option( 'nt_conversi_blog_post_readmore_display' );
		$readmore = ot_get_option( 'nt_conversi_blog_post_readmore' );
		$readmore = $readmore != '' ? $readmore : 'Read More';

		if ( $readmore_display !='off' ) {
			echo '<a class="margin_30 btn" href="'. esc_url( get_permalink() ) .'" role="button">'.esc_html( $readmore ).'</a>';
		}
	}
}
if ( ! function_exists( 'nt_conversi_backtotop' ) ) {

	function nt_conversi_backtotop() {

		$offset = ot_get_option('nt_conversi_backtotop_offset');
		$speed = ot_get_option('nt_conversi_backtotop_speed');
		if ( ot_get_option('nt_conversi_backtotop') == 'on') :
			wp_enqueue_script( 'jquery-scrollUp' );
			wp_add_inline_script( 'jquery-scrollUp',
			'jQuery(document).ready(function($){
				jQuery.scrollUp({
					scrollName: \'scrollUp\',
					scrollDistance: '.esc_attr($offset).',
					scrollFrom: \'top\',
					scrollSpeed: '.esc_attr($speed).',
					easingType: \'linear\',
					animation: \'fade\',
					animationSpeed: 200,
					scrollTrigger: false,
					scrollTarget: false,
					scrollText: \'<i class="fa fa-angle-up" aria-hidden="true"></i>\',
					scrollTitle: false,
					scrollImg: false,
					activeOverlay: false,
					zIndex: 2147483647
				});
			});' );
		endif;
	}
}
