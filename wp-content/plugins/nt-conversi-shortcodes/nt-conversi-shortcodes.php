<?php

/*
Plugin Name: NT Conversi Shortcodes
Plugin URI: http://themeforest.net/user/Ninetheme
Description: Shortcodes for Ninetheme WordPress Themes - nt-conversi Version
Version: 1.2.9
Author: Ninetheme
Author URI: http://themeforest.net/user/Ninetheme
*/

add_action( 'plugins_loaded', 'nt_conversi_vc_loaded' );
function nt_conversi_vc_loaded() {

    if ( class_exists( 'Vc_Manager' ) ) {

        // image resizer
        require_once plugin_dir_path(__FILE__) . 'aq_resizer.php';

        // shortcode functions
        require_once plugin_dir_path(__FILE__) . 'fronted.php';

    } else {

        require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
        deactivate_plugins(plugin_basename(__FILE__));

    }
}

if ( ! function_exists( 'nt_conversi_post_share' ) ) {
    /**
    * Display post share icon
    *
    * @return void
    */
    function nt_conversi_post_share() {

        if ( ot_get_option( 'nt_conversi_single_share_display' ) !='off' ) { ?>
            <div id="share-buttons">

                <?php if ( ot_get_option( 'nt_conversi_single_share_face_display' ) !='off' ) : ?>
                    <a href="http://www.facebook.com/sharer.php?u=<?php echo esc_url( get_permalink() ); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                <?php endif; ?>

                <?php if ( ot_get_option( 'nt_conversi_single_share_twitter_display' ) !='off' ) : ?>
                    <a href="http://twitter.com/share?url=<?php echo esc_url( get_permalink() ); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                <?php endif; ?>

                <?php if ( ot_get_option( 'nt_conversi_single_share_gplus_display' ) !='off' ) : ?>
                    <a href="https://plus.google.com/share?url=<?php echo esc_url( get_permalink() ); ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
                <?php endif; ?>

                <?php if ( ot_get_option( 'nt_conversi_single_share_digg_display' ) !='off' ) : ?>
                    <a href="http://www.digg.com/submit?url=<?php echo esc_url( get_permalink() ); ?>" target="_blank"><i class="fa fa-digg"></i></a>
                <?php endif; ?>

                <?php if ( ot_get_option( 'nt_conversi_single_share_reddit_display' ) !='off' ) : ?>
                    <a href="http://reddit.com/submit?url=<?php echo esc_url( get_permalink() ); ?>" target="_blank"><i class="fa fa-reddit"></i></a>
                <?php endif; ?>

                <?php if ( ot_get_option( 'nt_conversi_single_share_linkedin_display' ) !='off' ) : ?>
                    <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo esc_url( get_permalink() ); ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                <?php endif; ?>

                <?php if ( ot_get_option( 'nt_conversi_single_share_stumbleupon_display' ) !='off' ) : ?>
                    <a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());"><i class="fa fa-pinterest"></i></a>
                    <a href="http://www.stumbleupon.com/submit?url=<?php echo esc_url( get_permalink() ); ?>" target="_blank"><i class="fa fa-stumbleupon"></i></a>
                <?php endif; ?>

            </div>
            <?php
        }
    }
}
add_action('nt_conversi_after_post_single_content', 'nt_conversi_post_share', 10);

if ( ! function_exists( 'nt_conversi_portfolio_post_share' ) ) {
    /**
    * Display post share icon
    *
    * @return void
    */
    function nt_conversi_portfolio_post_share() {
        ?>
        <div class="fh5co-share">
            <h3><?php esc_html_e( 'Share' , 'nt-conversi' ); ?></h3>
            <ul>
                <li><a href="http://www.facebook.com/sharer.php?u=<?php echo esc_url( get_permalink() ); ?>" target="_blank"><?php esc_html_e( 'Facebook' , 'nt-conversi' ); ?></a></li>
                <li><a href="http://twitter.com/share?url=<?php echo esc_url( get_permalink() ); ?>" target="_blank"><?php esc_html_e( 'Twitter' , 'nt-conversi' ); ?></a></li>
                <li><a href="https://plus.google.com/share?url=<?php echo esc_url( get_permalink() ); ?>" target="_blank"><?php esc_html_e( 'Google Plus' , 'nt-conversi' ); ?></a></li>
                <li><a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());"><?php esc_html_e( 'Pinterest' , 'nt-conversi' ); ?></a></li>
            </ul>
        </div>
        <?php
    }
}
add_action('nt_conversi_after_portfolio_post_content', 'nt_conversi_portfolio_post_share', 10);
