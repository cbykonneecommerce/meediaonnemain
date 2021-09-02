<?php
/**
* The template for displaying posts in the Video post format.
*
* @package WordPress
* @subpackage nt_conversi_
* @since nt_conversi_ 1.0
*/
$nt_conversi_embed = rwmb_meta( 'nt_conversi_video_embed' );
$nt_conversi_m4v = rwmb_meta( 'nt_conversi_video_m4v' );
$nt_conversi_ogv = rwmb_meta( 'nt_conversi_video_ogv' );
$nt_conversi_webm = rwmb_meta( 'nt_conversi_video_webm' );
$nt_conversi_image_id = get_post_thumbnail_id();
$nt_conversi_image_url = wp_get_attachment_image_src($nt_conversi_image_id, true);
$nt_conversi_wp_video = '[video poster="'.$nt_conversi_image_url[0].'" mp4="'.$nt_conversi_m4v.'"  webm="'.$nt_conversi_webm.'"]';
?>

<!-- Start .hentry -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="hentry-box">
        <?php if( $nt_conversi_embed!='' ) : ?>
            <div class="post-thumb blog-bg">
                <div class="media-element video-responsive"><?php echo wp_kses( $nt_conversi_embed, nt_conversi_allowed_html() ); ?></div>
            </div>
        <?php else : ?>
            <div class="post-thumb"><?php echo do_shortcode ($nt_conversi_wp_video); ?></div>
        <?php endif; ?>

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
                        )
                    );

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
