
	<?php

		get_header();

		$nt_conversi_error_heading_v 		= ot_get_option( 'nt_conversi_error_heading_visibility' );
		$nt_conversi_error_heading 			= ot_get_option( 'nt_conversi_error_heading' );
		$nt_conversi_bread_visibility 		= ot_get_option( 'nt_conversi_bread' );
		$nt_conversi_single_disable_heading = ot_get_option( 'nt_conversi_single_disable_heading' );
		$nt_conversi_404_layout 			= ot_get_option( 'nt_conversi_404layout' );

	?>

	<div class="template-cover-style-2 js-full-height-off section-class-scroll index-header">

		<div class="template-overlay"></div>

		<?php  get_template_part( 'index-header' ); ?>

		<div class="template-cover-text">
			<div class="container">
				<div class="row">
					<div class="col-md-8 center">
						<div class="template-cover-intro">

							<?php if ( ( $nt_conversi_error_heading_v  ) != 'off') : ?>
								<?php if ( ( $nt_conversi_error_heading  ) != 'off') : ?>
									<h2 class="uppercase lead-heading"><?php echo esc_html( $nt_conversi_error_heading ); ?></h2>
								<?php else : ?>
									<h2 class="uppercase lead-heading"><?php echo esc_html_e('404 - Not Found','nt-conversi');?></h2>
								<?php endif; ?>
							<?php endif; ?>

							<?php if ( ot_get_option( 'nt_conversi_error_slogan_visibility' )!= 'off') : ?>
								<?php if ( ot_get_option( 'nt_conversi_error_slogan' )!= '') : ?>
									<h2 class="cover-text-sublead wow"><?php echo ( ot_get_option( 'nt_conversi_error_slogan' )); ?></h2>
								<?php else : ?>
									<h2 class="cover-text-sublead wow"><?php echo  the_title();?></h2>
								<?php endif; ?>
							<?php endif; ?>

							<?php if ( ( $nt_conversi_bread_visibility  ) != 'off') : ?>
								<?php if( function_exists('bcn_display') ) : ?>
									<p class="breadcrubms"> <?php  bcn_display();  ?></p>
								<?php endif; ?>
							<?php endif; ?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section id="blog">
		<div class="container has-margin-bottom">
			<div class="row">

				<?php if( ( $nt_conversi_404_layout ) == 'right-sidebar' || ( $nt_conversi_404_layout ) == '' ) { ?>
				<div class="col-lg-8  col-md-8 col-sm-12 index float-right posts">
				<?php } elseif( ( $nt_conversi_404_layout ) == 'left-sidebar') { ?>
				<?php get_sidebar(); ?>
				<div class="col-lg-8  col-md-8 col-sm-12 index float-left posts">
				<?php } elseif( ( $nt_conversi_404_layout ) == 'full-width') { ?>
				<div class="col-xs-12 full-width-index v">
				<?php } ?>

					<h3><?php esc_html_e( 'Hmm, we could not find what you are looking for.', 'nt-conversi' ); ?></h3>
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'nt-conversi' ); ?></p>

					<?php get_search_form(); ?>

					<div class="clearfix m-bottom-50"></div>
					<div class="recent">
						<div class="col-header">
							<h3><?php esc_html_e( 'Recent Posts', 'nt-conversi' ); ?></h3>
						</div>
						<ol>
							<?php wp_get_archives( array( 'type' => 'postbypost', 'limit' => 10, 'format' => 'custom', 'before' => '<li>', 'after' => '</li>' ) ); ?>
						</ol>
					</div>
				</div>

				<?php if( ( $nt_conversi_404_layout ) == 'right-sidebar' || ( $nt_conversi_404_layout ) == '' ) { ?>
					<?php get_sidebar(); ?>
				<?php } ?>

			</div>
		</div>
	</section>
	<?php get_footer(); ?>
