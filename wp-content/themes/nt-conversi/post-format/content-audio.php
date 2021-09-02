
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php
    $nt_conversi_mp3 = rwmb_meta( 'nt_conversi_audio_mp3' );
    $nt_conversi_oga = rwmb_meta( 'nt_conversi_audio_ogg' );
    $nt_conversi_sc_url = rwmb_meta( 'nt_conversi_audio_sc' );
    $nt_conversi_sc_color = rwmb_meta( 'nt_conversi_audio_sc_color' );
    $nt_conversi_wp_audio = '[audio mp3="'.$nt_conversi_mp3.'"  ogg="'.$nt_conversi_oga.'"]';
    $nt_conversi_soundcloud_audio = '<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url='.urlencode( $nt_conversi_sc_url ).'&amp;show_comments=true&amp;auto_play=false&amp;color='.$nt_conversi_sc_color.'"></iframe>';
    ?>

    <?php if( $nt_conversi_sc_url !='' ) : ?>
        <div class="post-thumb blog-bg"><?php echo wp_kses( $nt_conversi_soundcloud_audio, nt_conversi_allowed_html() ); ?></div>
    <?php else : ?>
        <div class="post-thumb blog-bg">
            <?php if(has_post_thumbnail()) : the_post_thumbnail(); endif; ?>
            <?php echo do_shortcode ( $nt_conversi_wp_audio ); ?>
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
</article><!-- #post-## -->
