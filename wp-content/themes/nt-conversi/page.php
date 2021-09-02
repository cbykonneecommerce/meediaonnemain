
	<?php

		get_header();

		$nt_conversi_pagelayout 		= rwmb_meta( 'nt_conversi_pagelayout' );
		$nt_conversi_disable_title 		= rwmb_meta( 'nt_conversi_disable_title' );
		$nt_conversi_page_title 		= rwmb_meta( 'nt_conversi_alt_title' );
		$nt_conversi_page_disable_sub 	= rwmb_meta( 'nt_conversi_disable_subtitle' );
		$nt_conversi_page_subtitle 		= rwmb_meta( 'nt_conversi_subtitle' );
		$nt_conversi_bread_visibility 	= rwmb_meta( 'nt_conversi_disable_bredcrumbs' );

	?>

	<div class="template-cover-style-2 js-full-height-off section-class-scroll page-id-<?php echo get_the_ID(); ?> index-header">

		<div class="template-overlay"></div>

		<?php  get_template_part( 'index-header' ); ?>

		<div class="template-cover-text">
			<div class="container">
				<div class="row">
					<div class="col-md-8 center">
						<div class="template-cover-intro">

							<?php  if( ( $nt_conversi_disable_title ) != true ): ?>
								<?php  if( $nt_conversi_page_title  ): ?>
									<h2 class="uppercase lead-heading"><?php echo esc_html( $nt_conversi_page_title ) ; ?></h2>
								<?php else : ?>
									<h2 class="uppercase lead-heading"><?php echo the_title(); ?></h2>
								<?php endif; ?>
							<?php endif; ?>

							<?php  if( ( $nt_conversi_page_disable_sub ) != true ): ?>
								<?php  if( $nt_conversi_page_subtitle  ): ?>
									<h2 class="cover-text-sublead wow">
										<?php echo wp_kses( $nt_conversi_page_subtitle, nt_conversi_allowed_html() );?>
									</h2>
								<?php endif; ?>
							<?php endif; ?>

							<?php if ( $nt_conversi_bread_visibility != 'off' ) : ?>
								<?php if( function_exists( 'bcn_display' ) ) : ?>
									<p class="breadcrubms"> <?php bcn_display(); ?></p>
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
				<div class="col-md-12-off  has-margin-bottom-off">

					<?php if( ( $nt_conversi_pagelayout ) =='right-sidebar' || ($nt_conversi_pagelayout ) =='' ){ ?>
					<div class="col-lg-8  col-md-8 col-sm-12 index float-right posts">
					<?php } elseif(( $nt_conversi_pagelayout ) == 'left-sidebar') { ?>
					<?php get_sidebar(); ?>
					<div class="col-lg-8  col-md-8 col-sm-12 index float-left posts">
					<?php } elseif(( $nt_conversi_pagelayout ) == 'full-width') { ?>
					<div class="col-xs-12 full-width-index v">
					<?php } ?>

						<?php
							wp_enqueue_style(  'nt-conversi-custom-flexslider');
							wp_enqueue_script( 'nt-conversi-custom-flexslider');
							wp_enqueue_script( 'fitvids');
							wp_enqueue_script( 'nt-conversi-blog-settings');
							// Start the loop.
							while ( have_posts() ) : the_post();

								// Include the page content template.
								get_template_part( 'content', 'page' );

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

							// End the loop.
							endwhile;
						?>
					</div>

					<?php if( ( $nt_conversi_pagelayout ) =='right-sidebar' || ($nt_conversi_pagelayout ) =='' ){ ?>
						<?php get_sidebar(); ?>
					<?php } ?>

				</div>
			</div>
		</div>
	</section>

	<?php get_footer(); ?>
