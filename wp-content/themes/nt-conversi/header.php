<!DOCTYPE html>
<!--[if lt IE 7]><html class="ie ie6" lang="en"><![endif]-->
<!--[if IE 7]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8]><html class="ie ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if (gte IE 10)|!(IE)]><!--><html <?php language_attributes(); ?> ><!--<![endif]-->

<head>
    <!-- Meta UTF8 charset -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php wp_head(); ?>
</head>

<!-- BODY START=========== -->
<body <?php body_class(); ?>>
    <?php

    if ( function_exists( 'wp_body_open' ) ) {
        wp_body_open();
    }
    ?>
    <?php if ( ot_get_option('nt_conversi_pre') != 'off' ) : ?>

        <?php if ( ot_get_option( 'nt_conversi_preloader' ) == 'custom' ) { ?>

            <?php if ( ot_get_option( 'nt_conversi_custom_preloader_js' ) == 'off' && ot_get_option( 'nt_conversi_custom_preloader' ) !='' ) : ?>
                <div class="nt-conversi-custom-preloader">
                <?php endif; ?>

                <?php echo wp_kses( ot_get_option( 'nt_conversi_custom_preloader' ), nt_conversi_allowed_html() ); ?>

                <?php if ( ot_get_option( 'nt_conversi_custom_preloader_js' ) == 'off' && ot_get_option( 'nt_conversi_custom_preloader' ) !='' ) : ?>
                </div>
            <?php endif; ?>

        <?php } elseif ( ot_get_option( 'nt_conversi_preloader' ) == 'default' ) { ?>

            <?php // DEFAULT PRELOADER ?>
            <div class="preloader-container">
                <div class="la-ball-triangle-path la-2x">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>

        <?php } else { ?>
            <div id="nt-preloader" class="preloader"><div class="loader<?php echo esc_attr( ot_get_option( 'nt_conversi_preloader') ); ?>"></div></div>
        <?php } ?>
    <?php endif; ?>
