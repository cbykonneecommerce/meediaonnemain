	<?php

		/*
		Template name: Fullwidth Template
		*/

		get_header();

		$nt_conversi_pagelayout 		= rwmb_meta( 'nt_conversi_pagelayout' );
		$nt_conversi_disable_fpage_hero = rwmb_meta( 'nt_conversi_disable_fpage_hero' );
		$nt_conversi_disable_title 		= rwmb_meta( 'nt_conversi_disable_title' );
		$nt_conversi_page_title 		= rwmb_meta( 'nt_conversi_alt_title' );
		$nt_conversi_page_disable_sub 	= rwmb_meta( 'nt_conversi_page_disable_subtitle' );
		$nt_conversi_page_subtitle 		= rwmb_meta( 'nt_conversi_page_subtitle' );
		$nt_conversi_bread_visibility 	= rwmb_meta( 'nt_conversi_disable_bredcrumbs' );

	?>
    <?php  if( ( $nt_conversi_disable_fpage_hero ) != true ): ?>

	<div class="template-cover-style-2 js-full-height-off section-class-scroll page-id-<?php echo get_the_ID(); ?> index-header">

		<div class="template-overlay"></div>
        
    <?php endif; ?>

		<?php  get_template_part( 'index-header' ); ?>

        <?php  if( ( $nt_conversi_disable_fpage_hero ) != true ): ?>
		<div class="template-cover-text">
			<div class="container">
				<div class="row">
					<div class="col-md-8 center">
						<div class="template-cover-intro">

							<?php  if( ( $nt_conversi_disable_title ) != true ): ?>
								<?php  if( $nt_conversi_page_title  ): ?>
									<h2 class="uppercase lead-heading"><?php echo esc_html( $nt_conversi_page_title ); ?></h2>
								<?php else : ?>
									<h2 class="uppercase lead-heading"><?php echo the_title(); ?></h2>
								<?php endif; ?>
							<?php endif; ?>

							<?php  if( ( $nt_conversi_page_disable_sub ) != true ): ?>
								<?php  if( $nt_conversi_page_subtitle  ): ?>
									<h2 class="cover-text-sublead wow">
										<?php echo wp_kses( $nt_conversi_page_subtitle, nt_conversi_allowed_html());?>
									</h2>
								<?php endif; ?>
							<?php endif; ?>

							<?php if ( ( $nt_conversi_bread_visibility  ) != true ) : ?>
								<?php if( function_exists( 'bcn_display' ) ) : ?>
									<p class="breadcrubms"> <?php bcn_display();  ?></p>
								<?php endif; ?>
							<?php endif; ?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>

	<section id="blog">
		<div class="container-off has-margin-bottom">
			<div class="row-off">
				<div class="col-md-12-off has-margin-bottom">
					<?php

						if ( have_posts() ) :
							while ( have_posts() ) : the_post();
								the_content();
							endwhile;
						endif;

					?>
				</div>
			</div>
		</div>
	</section>

	<?php get_footer(); ?>
