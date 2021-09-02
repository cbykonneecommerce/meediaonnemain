

<?php

    $sidebar 		= ot_get_option( 'woosingle' );

?>

<div class="template-cover-style-2 woo-cover js-full-height-off section-class-scroll index-header">

    <div class="template-overlay"></div>


    <div class="template-cover-text">
        <div class="container">
            <div class="row">
                <div class="col-md-8 center">
                    <div class="template-cover-intro">

                        <h2 class="uppercase white"> <?php echo esc_html('SHOP','conversi'); ?> </h2>
                        <p class="breadcrubms"> <?php  bcn_display();  ?></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

	<section id="blog">
		<div class="container has-margin-bottom">
			<div class="row">

				<?php if( ( $sidebar ) == 'right-sidebar' || ( $sidebar ) == '' ) { ?>
				<div class="col-lg-8  col-md-8 col-sm-12 index float-right posts">
				<?php } elseif( ( $sidebar ) == 'left-sidebar') { ?>
                    <?php
                       if (  is_active_sidebar( 'shop-single-page-sidebar' )  ) :
        				      		dynamic_sidebar( 'shop-single-page-sidebar' );
                       endif;
                    ?>
				<div class="col-lg-8  col-md-8 col-sm-12 index float-left posts">
				<?php } elseif( ( $sidebar ) == 'full-width') { ?>
				<div class="col-xs-12 full-width-index v">
				<?php } ?>


					<?php woocommerce_content(); ?>


				</div>

				<?php if( ( $sidebar ) == 'right-sidebar' || ( $sidebar ) == '' ) { ?>
                    <?php
                       if (  is_active_sidebar( 'shop-single-page-sidebar' )  ) :
                                    dynamic_sidebar( 'shop-single-page-sidebar' );
                       endif;
                    ?>
				<?php } ?>

			</div>
		</div>
	</section>
