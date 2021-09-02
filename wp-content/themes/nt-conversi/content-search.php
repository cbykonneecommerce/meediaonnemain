<?php
/**
 * The template part for displaying results in search pages
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage nt_conversi
 * @since nt_conversi 1.0
 */
?>


<!-- ARTICLE -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="content-container post-container">
		<div class="entry-header">
			<?php
				if ( is_single() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
				endif;
			?>
		</div><!-- .entry-header -->

		<?php if ( 'off' != ot_get_option( 'nt_conversi_single_post_all_meta_visibility' ) ) : ?>
						<ul class="entry-meta">
							<?php if ( 'off' != ot_get_option( 'nt_conversi_single_post_date_visibility' ) ) : ?>
								<li><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_time(get_option( 'date_format' )); ?></a></li>
							<?php endif; ?>
							<?php if ( 'off' != ot_get_option( 'nt_conversi_single_post_cat_visibility' ) ) : ?>
								<li><?php esc_html_e('in', 'nt-conversi'); ?>  <?php the_category(', '); ?></li>
							<?php endif; ?>
							<?php if ( 'off' != ot_get_option( 'nt_conversi_single_post_author_visibility' ) ) : ?>
								<li><?php the_author(); ?></li>
							<?php endif; ?>
							<?php if ( 'off' != ot_get_option( 'nt_conversi_single_post_tags_visibility' ) ) : ?>
								<?php the_tags( '<li>', ',', '</li> '); ?>
							<?php endif; ?>
						</ul>
					<?php endif; ?>
	<?php the_excerpt(); ?>
	<!-- Date -->
	</div><!-- .entry-footer -->

	<!-- Read me BTN -->

</article><!-- #post-## -->
