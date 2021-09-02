<?php
/**
* The template for displaying the footer
*
*
* @package WordPress
* @subpackage nt_conversi
* @since nt_conversi 1.0
*/

    if ( 'page' == ot_get_option( 'nt_conversi_footer_template_type' ) && function_exists( 'nt_conversi_vc_inject_shortcode_css' ) ) {

        if ( '' != ot_get_option( 'nt_conversi_footer_custom_template' ) ) {

            nt_conversi_vc_inject_shortcode_css( ot_get_option( 'nt_conversi_footer_custom_template' ) );

            $content = get_post_field( 'post_content', ot_get_option( 'nt_conversi_footer_custom_template' ) );

            echo do_shortcode( $content );
        }

    } elseif ( 'custom' == ot_get_option( 'nt_conversi_footer_template_type' ) ) {

        if ( '' != ot_get_option( 'nt_conversi_footer_custom_html' ) ) {

            echo do_shortcode( ot_get_option( 'nt_conversi_footer_custom_html' ) );

        }

    } else {

        // footer widgetize
        if ( ot_get_option('nt_conversi_widgetize') == 'on') :
            ?>
            <div class="footer-top footer-widgetize">
                <div class="container">
                    <div class="row">
                        <?php
                        if ( ot_get_option('nt_conversi_use_custom_footer_widget') == 'yes' ) {
                            $nt_conversi_fw_widget = ot_get_option('nt_conversi_fw_widget', array());
                            $count = 1;
                            foreach( $nt_conversi_fw_widget as $fw ) {
                                dynamic_sidebar( 'nt_conversi_fw'.$count  );
                                $count++;
                            }

                        } else {

                            if ( is_active_sidebar( 'nt-conversi-footer-widgetize' ) ) {
                                dynamic_sidebar( 'nt-conversi-footer-widgetize' );
                            }
                        }

                        ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if ( ot_get_option('nt_conversi_defaultfooter_visibility') != 'off' ) : ?>
            <!-- footer -->
            <footer id="footer" class="default-footer">
                <div class="container">
                    <?php if ( ot_get_option('nt_conversi_copyright_visibility') != 'off') : ?>
                        <?php
                        if ( ot_get_option('nt_conversi_copyright') != '') :

                            $nt_conversi_copyright = ot_get_option('nt_conversi_copyright');

                            echo wp_kses( $nt_conversi_copyright, nt_conversi_allowed_html() );

                            else :
                                ?>
                                <p class="copyright-txt"><?php echo esc_html_e( 'Ninetheme Conversi. All Rights Reserved.', 'nt-conversi' ); ?></p>
                            <?php endif; ?>
                        <?php endif; ?>

                        <?php
                        if ( ot_get_option( 'nt_conversi_social_section' ) != 'off' ) {
                            $nt_conversi_social = ot_get_option( 'nt_conversi_social', array() );
                            $nt_conversi_social_target = ot_get_option( 'nt_conversi_social_target' );
                            if ( ! empty( $nt_conversi_social ) ) {
                                ?>
                                <div class="socials">
                                    <?php
                                    foreach( $nt_conversi_social as $soc ) {
                                        $nt_conversi_target = ( $nt_conversi_social_target != '' ) ? 'target="'. esc_attr( $nt_conversi_social_target ) .'"' : '';
                                        if ( ! empty( $soc ) ) {
                                            ?>
                                            <a class="link-<?php echo esc_attr( $soc['nt_conversi_social_class'] ); ?>" href="<?php echo esc_url( $soc['nt_conversi_social_link'] ); ?>" <?php echo esc_attr( $nt_conversi_target ); ?>><i class="<?php echo esc_attr( $soc['nt_conversi_social_text'] ); ?>"></i></a>

                                            <?php
                                        } // end soc
                                    } // end foreach
                                    ?>
                                </div>
                                <?php
                            } // end nt_conversi_social
                        } // end nt_conversi_social_section
                        ?>
                    </div>
                </footer>
            <?php endif; ?>
        <?php } ?>

        <?php nt_conversi_backtotop(); ?>
        <!-- #footer end -->
        <?php wp_footer(); ?>

    </body>
</html>
