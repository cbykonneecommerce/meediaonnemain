<?php
/**
* The template for displaying posts in the Quote post format.
*
* @package WordPress
* @subpackage nt_conversi_
* @since nt_conversi_ 1.0
*/

$nt_conversi_quote_text = rwmb_meta( 'nt_conversi_quote_text' );
$nt_conversi_quote_author = rwmb_meta( 'nt_conversi_quote_author' );
$nt_conversi_image_id = get_post_thumbnail_id();
$nt_conversi_image_url = wp_get_attachment_image_src($nt_conversi_image_id, true);
$nt_conversi_color = rwmb_meta( 'nt_conversi_quote_bg' );
$nt_conversi_opacity = rwmb_meta( 'nt_conversi_quote_bg_opacity' );
$nt_conversi_opacity = $nt_conversi_opacity / 100;
?>

<!-- Start .hentry -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="hentry-box">

        <div class="post-thumb">
            <div class="content-quote-format-wrapper">
                <?php if(has_post_thumbnail()) : ?>
                <div class="entry-media" style="background-image: url(<?php echo esc_url( $nt_conversi_image_url[0] ); ?>); ">
                <?php else : ?>
                <div class="entry-media">
                <?php endif; ?>
                    <div class="content-quote-format-overlay" style="background-color: <?php echo esc_attr( $nt_conversi_color ); ?>; opacity: <?php echo esc_attr( $nt_conversi_opacity ); ?>;"></div>
                    <div class="content-quote-format-textwrap">
                        <h3><a href="<?php esc_url( the_permalink() ); ?>"><?php echo esc_attr( $nt_conversi_quote_text ); ?></a></h3>
                        <p><a href="#0" target="_blank" style="color: #ffffff;"><?php echo esc_attr( $nt_conversi_quote_author ); ?></a></p>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <div class="post-container">
            <div class="content-container">
                <div class="entry-header">
                    <?php
                    if ( ! is_single() ) :
                        the_title( sprintf( '<h2 class="entry-title all-caps"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
                    endif;
                    ?>
                </div><!-- .entry-header -->

                <?php if ( 'off' != ot_get_option( 'nt_conversi_single_post_all_meta_visibility' ) ) : ?>
                    <ul class="entry-meta">
                        <?php if ( 'off' != ot_get_option( 'nt_conversi_single_post_date_visibility' ) ) : ?>
                            <li><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_time(get_option( 'date_format' )); ?></a></li>
                        <?php endif; ?>
                        <?php if ( 'off' != ot_get_option( 'nt_conversi_single_post_cat_visibility' ) ) : ?>
                            <?php if ( is_rtl() ) : ?>
                                <li><?php the_category(', '); ?> <?php esc_html_e('in', 'nt-conversi'); ?></li>
                            <?php else : ?>
                                <li><?php esc_html_e('in', 'nt-conversi'); ?>  <?php the_category(', '); ?></li>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if ( 'off' != ot_get_option( 'nt_conversi_single_post_author_visibility' ) ) : ?>
                            <li><?php the_author(); ?></li>
                        <?php endif; ?>
                        <?php if ( 'off' != ot_get_option( 'nt_conversi_single_post_tags_visibility' ) ) : ?>
                            <?php the_tags( '<li>', ',', '</li> '); ?>
                        <?php endif; ?>
                    </ul>
                <?php endif; ?>

            </div>

            <div class="entry-content">
                <?php

                if ( ! is_single() && has_excerpt() ) {

                    the_excerpt();

                } else {
                    /* translators: %s: Name of current post */
                    the_content( sprintf(
                        esc_html__( 'Continue reading %s', 'nt-conversi' ),
                        the_title( '<span class="screen-reader-text">', '</span>', false )
                        ) );

                }

                wp_link_pages(
                    array(
                        'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'nt-conversi' ) . '</span>',
                        'after'       => '</div>',
                        'link_before' => '<span>',
                        'link_after'  => '</span>',
                        'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'nt-conversi' ) . ' </span>%',
                        'separator'   => '<span class="screen-reader-text">, </span>',
                    )
                );
                ?>
            </div><!-- .entry-content -->

            <?php

            if ( ! is_single() ) {

                nt_conversi_post_button();

            }

            if ( is_single() ) {

                do_action('nt_conversi_after_post_single_content');

            }
            ?>
        </div>
    </div>
</article><!-- #post-## -->
