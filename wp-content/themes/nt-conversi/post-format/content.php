<?php
/**
* The default template for displaying content
*
* Used for both single and index/archive/search.
*
* @package WordPress
* @subpackage nt_conversi
* @since nt_conversi 1.0
*/
wp_enqueue_style(  'nt-conversi-custom-flexslider');
wp_enqueue_script( 'nt-conversi-custom-flexslider');
wp_enqueue_script( 'fitvids');
wp_enqueue_script( 'nt-conversi-blog-settings');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if ( has_post_thumbnail() ) : ?>
        <div class="article-img">
            <?php the_post_thumbnail('full'); ?>
        </div>
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
</article><!-- #post-## -->
