<?php
add_action( 'init', 'nt_conversi_custom_theme_options' );
function nt_conversi_custom_theme_options() {

    if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() )
    return false;

    $nt_conversi_saved_settings = get_option( ot_settings_id(), array() );
    $nt_conversi_custom_settings = array(
        'contextual_help' => array(
            'sidebar'       => ''
        ),

        'sections'        => array(
            array(
                'id'          => 'generalcolor',
                'title'       => esc_html__( 'General Color', 'nt-conversi' ),
            ),
            array(
                'id'          => 'general',
                'title'       => esc_html__( 'Logo', 'nt-conversi' ),
            ),
            array(
                'id'          => 'pre',
                'title'       => esc_html__( 'Preloader', 'nt-conversi' ),
            ),
            array(
                'id'          => 'backtotop',
                'title'       => esc_html__( 'Back To Top', 'nt-conversi' ),
            ),
            array(
                'id'          => 'google_fonts',
                'title'       => esc_html__( 'Google Fonts', 'nt-conversi' ),
            ),
            array(
                'id'          => 'typography',
                'title'       => esc_html__( 'Typography', 'nt-conversi' ),
            ),
            array(
                'id'          => 'top_header',
                'title'       => esc_html__( 'Top header', 'nt-conversi' ),
            ),
            array(
                'id'          => 'navigation',
                'title'       => esc_html__( 'Navigation', 'nt-conversi' ),
            ),
            array(
                'id'          => 'sidebars',
                'title'       => esc_html__( 'Sidebars', 'nt-conversi' ),
            ),
            array(
                'id'          => 'header',
                'title'       => esc_html__( 'Blog Page', 'nt-conversi' ),
            ),
            array(
                'id'          => 'single_header',
                'title'       => esc_html__( 'Single Page', 'nt-conversi' ),
            ),
            array(
                'id'          => 'archive_page',
                'title'       => esc_html__( 'Archive Page', 'nt-conversi' ),
            ),
            array(
                'id'          => 'error_page',
                'title'       => esc_html__( '404 Page', 'nt-conversi' ),
            ),
            array(
                'id'          => 'search_page',
                'title'       => esc_html__( 'Search Page', 'nt-conversi' ),
            ),
            array(
                'id'          => 'breadcrubms',
                'title'       => esc_html__( 'Breadcrubms', 'nt-conversi' ),
            ),
            array(
                'id'          => 'copyright',
                'title'       => esc_html__( 'Footer Template', 'nt-conversi' ),
            ),
            array(
                'id'          => 'maps',
                'title'       => esc_html__( 'Google Maps', 'nt-conversi' ),
            ),
        ), // sidebar end

        // options start
        'settings'        => array(

            // theme skin
            array(
                'id'          => 'nt_conversi_boxed',
                'label'       => esc_html__( 'Theme layout', 'nt-conversi' ),
                'desc'        => esc_html__( 'Choose layout home page', 'nt-conversi' ),
                'std'         => 'stretched',
                'type'        => 'select',
                'section'     => 'generalcolor',
                'operator'    => 'and',
                'choices'     => array(
                    array(
                        'value'       => 'stretched',
                        'label'       => esc_html__('stretched', 'nt-conversi' ),
                    ),
                    array(
                        'value'       => 'boxed',
                        'label'       => esc_html__('boxed', 'nt-conversi' ),
                    )
                )
            ),
            array(
                'id'          => 'nt_conversi_theme_body_bg',
                'label'       => esc_html__( 'Use body background image or bg color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Upload background image', 'nt-conversi' ),
                'type'        => 'background',
                'condition'   => 'nt_conversi_boxed:is(boxed)',
                'section'     => 'generalcolor'
            ),
            array(
                'id'          => 'nt_conversi_theme_body_bgcolor',
                'label'       => esc_html__( 'Theme body background color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'condition'   => 'nt_conversi_boxed:is(stretched)',
                'section'     => 'generalcolor'
            ),
            array(
                'id'          => 'nt_conversi_theme_color',
                'label'       => esc_html__( 'Theme color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Choose theme general color', 'nt-conversi' ),
                'std'         => '#3ebcfa',
                'type'        => 'select',
                'section'     => 'generalcolor',
                'operator'    => 'and',
                'choices'     => array(
                    array(
                        'value'       => '#3ebcfa',
                        'label'       => esc_html__('blue', 'nt-conversi' ),
                    ),
                    array(
                        'value'       => '#44d86e',
                        'label'       => esc_html__('green', 'nt-conversi' ),
                    ),
                    array(
                        'value'       => '#fb53c2',
                        'label'       => esc_html__('pink', 'nt-conversi' ),

                    ),
                    array(
                        'value'       => '#c95ef5',
                        'label'       => esc_html__('purple', 'nt-conversi' ),
                    ),
                    array(
                        'value'       => '#ff7469',
                        'label'       => esc_html__('red', 'nt-conversi' ),
                    ),
                    array(
                        'value'       => '#f7b943',
                        'label'       => esc_html__('yellow', 'nt-conversi' ),
                    ),
                    array(
                        'value'       => 'custom',
                        'label'       => esc_html__( 'Custom color', 'nt-conversi' ),
                    ),

                )
            ),
            array(
                'id'          => 'nt_conversi_custom_color',
                'label'       => esc_html__( 'Theme general color 1', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'condition'   => 'nt_conversi_theme_color:is(custom)',
                'section'     => 'generalcolor'
            ),

            /*** logo settins **/
            array(
                'id'          => 'nt_conversi_logo_type',
                'label'       => esc_html__( 'Logo type', 'nt-conversi' ),
                'desc'        => esc_html__( 'Choose logo type', 'nt-conversi' ),
                'std'         => 'text',
                'type'        => 'select',
                'section'     => 'general',
                'operator'    => 'and',
                'choices'     => array(
                    array(
                        'value'       => 'img',
                        'label'       => esc_html__('image logo', 'nt-conversi' ),
                    ),
                    array(
                        'value'       => 'text',
                        'label'       => esc_html__('text logo', 'nt-conversi' ),
                    )
                )
            ),
            array(
                'id'          => 'nt_conversi_whitelogoimg',
                'label'       => esc_html__( 'Upload static menu logo image', 'nt-conversi' ),
                'desc'        => esc_html__( 'Upload white logo image', 'nt-conversi' ),
                'type'        => 'upload',
                'condition'   => 'nt_conversi_logo_type:is(img)',
                'section'     => 'general'
            ),
            array(
                'id'          => 'nt_conversi_darklogoimg',
                'label'       => esc_html__( 'Upload sticky menu logo image', 'nt-conversi' ),
                'desc'        => esc_html__( 'Upload dark logo image', 'nt-conversi' ),
                'type'        => 'upload',
                'condition'   => 'nt_conversi_logo_type:is(img)',
                'section'     => 'general'
            ),
            array(
                'id'          => 'nt_conversi_logo_dimension',
                'label'       => esc_html__( 'Static logo dimension', 'nt-conversi' ),
                'desc'        => esc_html__( 'Static logo image dimension', 'nt-conversi' ),
                'type'        => 'dimension',
                'condition'   => 'nt_conversi_logo_type:is(img)',
                'section'     => 'general',
            ),
            array(
                'id'          => 'nt_conversi_logo_dimension_sticky',
                'label'       => esc_html__( 'Sticky logo dimension', 'nt-conversi' ),
                'desc'        => esc_html__( 'Sticky logo image dimension', 'nt-conversi' ),
                'type'        => 'dimension',
                'condition'   => 'nt_conversi_logo_type:is(img)',
                'section'     => 'general',
            ),
            array(
                'id'          => 'nt_conversi_textlogo',
                'label'       => 'text logo',
                'desc'        => 'text logo',
                'std'         => '',
                'type'        => 'text',
                'condition'   => 'nt_conversi_logo_type:is(text)',
                'section'     => 'general'
            ),
            array(
                'id'          => 'nt_conversi_logo_link',
                'label'       => 'logo custom link',
                'desc'        => 'add logo your custom url/link',
                'std'         => '',
                'type'        => 'text',
                'section'     => 'general'
            ),
            array(
                'id'          => 'nt_conversi_logo_target',
                'label'       => esc_html__( 'Target logo link', 'nt-conversi' ),
                'desc'        => esc_html__( 'Select logo link target type.' , 'nt-conversi' ),
                'std'         => '',
                'type'        => 'select',
                'section'     => 'general',
                'operator'    => 'and',
                'choices'     => array(
                    array(
                        'value'       => '',
                        'label'       => esc_html__( 'Select target', 'nt-conversi' )
                    ),
                    array(
                        'value'       => '_blank',
                        'label'       => esc_html__( '_blank', 'nt-conversi' )
                    ),
                    array(
                        'value'       => '_self',
                        'label'       => esc_html__( '_self', 'nt-conversi' )
                    ),
                    array(
                        'value'       => '_parent',
                        'label'       => esc_html__( '_parent', 'nt-conversi' )
                    ),
                    array(
                        'value'       => '_top',
                        'label'       => esc_html__( '_top', 'nt-conversi' )
                    ),
                )
            ),
            array(
                'id'          => 'nt_conversi_textlogo_fs',
                'label'       => esc_html__( 'Font size', 'nt-conversi' ),
                'desc'        => esc_html__( 'Font size for text logo', 'nt-conversi' ),
                'std'         => '30',
                'type'        => 'numeric-slider',
                'condition'   => 'nt_conversi_logo_type:is(text)',
                'min_max_step'=> '0,100',
                'section'     => 'general',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_textlogo_fw',
                'label'       => esc_html__( 'Font weight', 'nt-conversi' ),
                'desc'        => esc_html__( 'Font weight for text logo', 'nt-conversi' ),
                'std'         => '700',
                'type'        => 'numeric-slider',
                'condition'   => 'nt_conversi_logo_type:is(text)',
                'min_max_step'=> '100,900,100',
                'section'     => 'general',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_textlogo_lettersp',
                'label'       => esc_html__( 'Letter spacing', 'nt-conversi' ),
                'desc'        => esc_html__( 'Letter spacing for text logo', 'nt-conversi' ),
                'std'         => '0',
                'type'        => 'numeric-slider',
                'condition'   => 'nt_conversi_logo_type:is(text)',
                'min_max_step'=> '0,10',
                'section'     => 'general',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_textlogo_fstyle',
                'label'       => esc_html__( 'Font style', 'nt-conversi' ),
                'desc'        => esc_html__( 'Choose font style for text logo', 'nt-conversi' ),
                'std'         => 'normal',
                'type'        => 'select',
                'section'     => 'general',
                'condition'   => 'nt_conversi_logo_type:is(text)',
                'operator'    => 'and',
                'choices'     => array(
                    array(
                        'value'       => 'normal',
                        'label'       => esc_html__('normal', 'nt-conversi' ),
                        'src'         => ''
                    ),
                    array(
                        'value'       => 'italic',
                        'label'       => esc_html__('italic', 'nt-conversi' ),
                        'src'         => ''
                    )
                )
            ),
            array(
                'id'          => 'nt_conversi_staticlogo_color',
                'label'       => esc_html__( 'Static text logo color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color for static menu text logo', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'condition'   => 'nt_conversi_logo_type:is(text)',
                'section'     => 'general'
            ),
            array(
                'id'          => 'nt_conversi_stickylogo_color',
                'label'       => esc_html__( 'Sticky text logo color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color for sticky menu text logo', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'condition'   => 'nt_conversi_logo_type:is(text)',
                'section'     => 'general'
            ),
            array(
                'id'          => 'nt_conversi_padding_logo',
                'label'       => esc_html__( 'Logo padding', 'nt-conversi' ),
                'desc'        => esc_html__( 'Logo padding', 'nt-conversi' ),
                'type'        => 'spacing',
                'section'     => 'general',
            ),
            array(
                'id'          => 'nt_conversi_margin_logo',
                'label'       => esc_html__( 'Logo margin', 'nt-conversi' ),
                'desc'        => esc_html__( 'Logo margin', 'nt-conversi' ),
                'type'        => 'spacing',
                'section'     => 'general',
            ),
            array(
                'id'          => 'nt_conversi_padding_logo_sticky',
                'label'       => esc_html__( 'Sticky logo padding', 'nt-conversi' ),
                'desc'        => esc_html__( 'Sticky logo padding', 'nt-conversi' ),
                'type'        => 'spacing',
                'section'     => 'general',
            ),
            array(
                'id'          => 'nt_conversi_margin_logo_sticky',
                'label'       => esc_html__( 'Sticky logo margin', 'nt-conversi' ),
                'desc'        => esc_html__( 'Sticky logo margin', 'nt-conversi' ),
                'type'        => 'spacing',
                'section'     => 'general',
            ),
            //preloader
            array(
                'id'          => 'nt_conversi_pre',
                'label'       => esc_html__( 'Preloader', 'nt-conversi' ),
                'desc'        => sprintf( esc_html__( 'preloader visibility %s or %s.', 'nt-conversi' ), '<code>on</code>', '<code>off</code>' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'pre',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_preloader',
                'label'       => esc_html__( 'Preloader selection', 'nt-conversi' ),
                'desc'        => esc_html__( 'Select preloader type. default or custom preloader' , 'nt-conversi' ),
                'std'         => 'default',
                'type'        => 'select',
                'section'     => 'pre',
                'condition'   => 'nt_conversi_pre:is(on)',
                'operator'    => 'and',
                'choices'     => array(
                    array(
                        'value'   => 'default',
                        'label'   => esc_html__( 'Default preloader', 'nt-conversi' )
                    ),
                    array(
                        'value'   => 'custom',
                        'label'   => esc_html__( 'Custom preloader', 'nt-conversi' )
                    ),
                    array(
                        'value' => '01',
                        'label' => esc_html__('type 1', 'nt-conversi' ),
                    ),
                    array(
                        'value' => '02',
                        'label' => esc_html__('type 2', 'nt-conversi' ),
                    ),
                    array(
                        'value' => '03',
                        'label' => esc_html__('type 3', 'nt-conversi' ),
                    ),
                    array(
                        'value' => '04',
                        'label' => esc_html__('type 4', 'nt-conversi' ),
                    ),
                    array(
                        'value' => '05',
                        'label' => esc_html__('type 5', 'nt-conversi' ),
                    ),
                )
            ),
            array(
                'id'          => 'nt_conversi_pre_bgcolor',
                'label'     => esc_html__( 'Preloader bg color', 'nt-conversi' ),
                'desc'      => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'      => 'colorpicker-opacity',
                'condition' => 'nt_conversi_pre:is(on)',
                'section'   => 'pre'
            ),
            array(
                'id'          => 'nt_conversi_pre_spincolor',
                'label'     => esc_html__( 'Preloader spin color', 'nt-conversi' ),
                'desc'      => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'      => 'colorpicker-opacity',
                'condition' => 'nt_conversi_pre:is(on)',
                'section'   => 'pre'
            ),
            //custom preloader
            array(
                'id'          => 'nt_conversi_custom_preloader',
                'label'       => esc_html__( 'Custom preloader html area', 'nt-conversi' ),
                'desc'        => esc_html__( 'Add your custom preloader html', 'nt-conversi' ),
                'type'        => 'textarea',
                'rows'        => '15',
                'condition'   => 'nt_conversi_pre:is(on),nt_conversi_preloader:is(custom)',
                'section'     => 'pre',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_preloadercss',
                'label'       => esc_html__( 'Custom preloader css', 'nt-conversi' ),
                'desc'        => esc_html__( 'You can add additional css for custom preloader', 'nt-conversi' ),
                'type'        => 'css',
                'condition'   => 'nt_conversi_pre:is(on),nt_conversi_preloader:is(custom)',
                'section'     => 'pre',
                'rows'        => '20',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_custom_preloader_js',
                'label'       => esc_html__( 'Use custom javascript ?', 'nt-conversi' ),
                'desc'        => sprintf( esc_html__( 'You can use custom javascript for your custom preloader class or id name. %s or %s.', 'nt-conversi' ), '<code>on</code>', '<code>off</code>' ),
                'std'         => 'off',
                'type'        => 'on-off',
                'condition'   => 'nt_conversi_pre:is(on),nt_conversi_preloader:is(custom)',
                'section'     => 'pre',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_preloaderjs',
                'label'       => esc_html__( 'Custom preloader js', 'nt-conversi' ),
                'desc'        => esc_html__( 'You can add additional javascript function for your custom preloader', 'nt-conversi' ),
                'type'        => 'javascript',
                'condition'   => 'nt_conversi_pre:is(on),nt_conversi_preloader:is(custom),nt_conversi_custom_preloader_js:is(on)',
                'section'     => 'pre',
                'rows'        => '20',
                'operator'    => 'and'
            ),

            //backtotop
            array(
                'id'          => 'nt_conversi_backtotop',
                'label'       => esc_html__( 'Back to top button', 'nt-conversi' ),
                'desc'        => sprintf( esc_html__( 'Back to top button visibility %s or %s.', 'nt-conversi' ), '<code>on</code>', '<code>off</code>' ),
                'std'         => 'off',
                'type'        => 'on-off',
                'section'     => 'backtotop',
                'operator'    => 'and'
            ),

            array(
                'id'          => 'nt_conversi_backtotop_offset',
                'label'       => esc_html__( 'Button offset top (px)', 'nt-conversi' ),
                'desc'        => esc_html__( 'Set button offset top visibility', 'nt-conversi' ),
                'type'        => 'numeric-slider',
                'min_max_step'=> '0,2000',
                'std'		  => '300',
                'section'     => 'backtotop',
                'condition'   => 'nt_conversi_backtotop:is(on)',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_backtotop_speed',
                'label'       => esc_html__( 'Scroll speed (ms)', 'nt-conversi' ),
                'desc'        => esc_html__( 'Set button click scroll speed.', 'nt-conversi' ),
                'type'        => 'numeric-slider',
                'min_max_step'=> '0,2000',
                'std'		  => '300',
                'section'     => 'backtotop',
                'condition'   => 'nt_conversi_backtotop:is(on)',
                'operator'    => 'and'
            ),
            array(
                'id'         => 'nt_conversi_backtotop_bg',
                'label'     => esc_html__( 'Button background color', 'nt-conversi' ),
                'desc'      => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'      => 'colorpicker-opacity',
                'condition' => 'nt_conversi_backtotop:is(on)',
                'section'   => 'backtotop'
            ),
            array(
                'id'          => 'nt_conversi_backtotop_hvrbg',
                'label'     => esc_html__( 'Hover button background color', 'nt-conversi' ),
                'desc'      => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'      => 'colorpicker-opacity',
                'condition' => 'nt_conversi_backtotop:is(on)',
                'section'   => 'backtotop'
            ),
            array(
                'id'          => 'nt_conversi_backtotop_icon',
                'label'     => esc_html__( 'Button icon color', 'nt-conversi' ),
                'desc'      => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'      => 'colorpicker',
                'condition' => 'nt_conversi_backtotop:is(on)',
                'section'   => 'backtotop'
            ),
            array(
                'id'          => 'nt_conversi_backtotop_hvricon',
                'label'     => esc_html__( 'Hover button icon color', 'nt-conversi' ),
                'desc'      => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'      => 'colorpicker',
                'condition' => 'nt_conversi_backtotop:is(on)',
                'section'   => 'backtotop'
            ),
            /**  google fonts settings.  **/
            array(
                'id'          => 'body_google_fonts',
                'label'       => esc_html__( 'Google Fonts', 'nt-conversi'  ),
                'desc'        => 'add google font and after the save settings follow these steps dashbont_conversi > appearance > theme options > typography',
                'type'        => 'google-fonts',
                'section'     => 'google_fonts',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'ot_font_api',
                'label'       => esc_html__( 'Google Webfonts API for Theme Options fonts', 'nt-conversi' ),
                'desc'        => esc_html__( 'Enter your API, more details here: https://www.youtube.com/watch?v=3OT9tH141mc ', 'nt-conversi' ),
                'type'        => 'text',
                'section'     => 'google_fonts',
                'operator'    => 'and'
            ),

            /**  typography settings.  **/
            array(
                'id'          => 'nt_conversi_tipigrof',
                'label'       => esc_html__( 'Typography', 'nt-conversi' ),
                'desc'        => 'the typography option type is for adding typography styles to your site.',
                'type'        => 'typography',
                'section'     => 'typography',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_tipigrof1',
                'label'       => esc_html__( 'Typography h1', 'nt-conversi' ),
                'desc'        => 'the typography option type is for adding typography styles to your site.',
                'type'        => 'typography',
                'section'     => 'typography',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_tipigrof2',
                'label'       => esc_html__( 'Typography h2', 'nt-conversi' ),
                'desc'        => 'the typography option type is for adding typography styles to your site.',
                'type'        => 'typography',
                'section'     => 'typography',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_tipigrof3',
                'label'       => esc_html__( 'Typography h3', 'nt-conversi' ),
                'desc'        => 'the typography option type is for adding typography styles to your site.',
                'type'        => 'typography',
                'section'     => 'typography',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_tipigrof4',
                'label'       => esc_html__( 'Typography h4', 'nt-conversi' ),
                'desc'        => 'the typography option type is for adding typography styles to your site.',
                'type'        => 'typography',
                'section'     => 'typography',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_tipigrof5',
                'label'       => esc_html__( 'Typography h5', 'nt-conversi' ),
                'desc'        => 'the typography option type is for adding typography styles to your site.',
                'type'        => 'typography',
                'section'     => 'typography',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_tipigrof6',
                'label'       => esc_html__( 'Typography h6', 'nt-conversi' ),
                'desc'        => 'the typography option type is for adding typography styles to your site.',
                'type'        => 'typography',
                'section'     => 'typography',
                'operator'    => 'and'
            ),
            //top header
            //contact section
            array(
                'id'          => 'nt_conversi_top_header_tabcontact',
                'label'       => esc_html__( 'Top header contact', 'nt-conversi' ),
                'type'        => 'tab',
                'section'     => 'top_header'
            ),
            array(
                'id'          => 'nt_conversi_header_contact_display',
                'label'       => esc_html__( 'Top header contact section display ', 'nt-conversi' ),
                'desc'        => sprintf( esc_html__( 'Choose social section display %s or %s.', 'nt-conversi' ), '<code>on</code>', '<code>off</code>' ),
                'std'         => 'off',
                'type'        => 'on-off',
                'section'     => 'top_header',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_mobile_contact_display',
                'label'       => esc_html__( 'Mobile menu contact section display ', 'nt-conversi' ),
                'desc'        => sprintf( esc_html__( 'Choose contact section display %s or %s.', 'nt-conversi' ), '<code>on</code>', '<code>off</code>' ),
                'std'         => 'off',
                'type'        => 'on-off',
                'section'     => 'top_header',
                'condition'   => 'nt_conversi_header_contact_display:is(on)',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_header_contact',
                'label'       => esc_html__( 'contact', 'nt-conversi' ),
                'desc'        => esc_html__( 'Add contact detail to top-header', 'nt-conversi' ),
                'type'        => 'list-item',
                'section'     => 'top_header',
                'condition'   => 'nt_conversi_header_contact_display:is(on)',
                'settings'    => array(
                    array(
                        'id'          => 'nt_conversi_header_contact_icon',
                        'label'       => esc_html__( 'before text icon', 'nt-conversi' ),
                        'desc'        => esc_html__( 'Enter icon name. example : fa fa-phone', 'nt-conversi' ),
                        'type'        => 'text'
                    ),
                    array(
                        'id'          => 'nt_conversi_header_contact_text',
                        'label'       => esc_html__( 'contact text', 'nt-conversi' ),
                        'desc'        => esc_html__( 'Enter contact detail text.example:+2543589415 or email', 'nt-conversi' ),
                        'type'        => 'text'
                    ),
                    array(
                        'id'          => 'nt_conversi_header_contact_link',
                        'label'       => esc_html__( 'Add link/url', 'nt-conversi' ),
                        'desc'        => esc_html__( 'You can add to link for this text', 'nt-conversi' ),
                        'type'        => 'text'
                    ),
                )
            ),
            array(
                'id'          => 'nt_conversi_header_contact_target',
                'label'       => esc_html__( 'Target contact link', 'nt-conversi' ),
                'desc'        => esc_html__( 'Select contact link target type. default : _blank' , 'nt-conversi' ),
                'std'         => '_blank',
                'type'        => 'select',
                'section'     => 'top_header',
                'condition'   => 'nt_conversi_header_contact_display:is(on)',
                'operator'    => 'and',
                'choices'     => array(
                    array(
                        'value'       => '_blank',
                        'label'       => esc_html__( '_blank', 'nt-conversi' )
                    ),
                    array(
                        'value'       => '_self',
                        'label'       => esc_html__( '_self', 'nt-conversi' )
                    ),
                    array(
                        'value'       => '_parent',
                        'label'       => esc_html__( '_parent', 'nt-conversi' )
                    ),
                    array(
                        'value'       => '_top',
                        'label'       => esc_html__( '_top', 'nt-conversi' )
                    ),
                )
            ),
            array(
                'id'          => 'nt_conversi_top_header_textcolor',
                'label'       => esc_html__( 'Top header contact text color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker-opacity',
                'condition'   => 'nt_conversi_header_contact_display:is(on)',
                'section'     => 'top_header'
            ),
            array(
                'id'          => 'nt_conversi_top_header_iconcolor',
                'label'       => esc_html__( 'Top header contact icon color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker-opacity',
                'condition'   => 'nt_conversi_header_contact_display:is(on)',
                'section'     => 'top_header'
            ),
            array(
                'id'          => 'nt_conversi_top_header_linkcolor',
                'label'       => esc_html__( 'Top header contact link color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker-opacity',
                'condition'   => 'nt_conversi_header_contact_display:is(on)',
                'section'     => 'top_header'
            ),
            array(
                'id'          => 'nt_conversi_top_header_linkhovercolor',
                'label'       => esc_html__( 'Top header contact link hover color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker-opacity',
                'condition'   => 'nt_conversi_header_contact_display:is(on)',
                'section'     => 'top_header'
            ),
            //social section
            array(
                'id'          => 'nt_conversi_top_header_tabsocial',
                'label'       => esc_html__( 'Top header social', 'nt-conversi' ),
                'type'        => 'tab',
                'section'     => 'top_header'
            ),
            array(
                'id'          => 'nt_conversi_header_social_display',
                'label'       => esc_html__( 'Top header social section display ', 'nt-conversi' ),
                'desc'        => sprintf( esc_html__( 'Choose social section display %s or %s.', 'nt-conversi' ), '<code>on</code>', '<code>off</code>' ),
                'std'         => 'off',
                'type'        => 'on-off',
                'section'     => 'top_header',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_header_mobile_social_display',
                'label'       => esc_html__( 'Mobile menu social section display ', 'nt-conversi' ),
                'desc'        => sprintf( esc_html__( 'Choose social section display %s or %s.', 'nt-conversi' ), '<code>on</code>', '<code>off</code>' ),
                'std'         => 'off',
                'type'        => 'on-off',
                'section'     => 'top_header',
                'condition'   => 'nt_conversi_header_social_display:is(on)',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_header_social',
                'label'       => esc_html__( 'Top header social media', 'nt-conversi' ),
                'desc'        => esc_html__( 'Add social media to top-header', 'nt-conversi' ),
                'type'        => 'list-item',
                'section'     => 'top_header',
                'condition'   => 'nt_conversi_header_social_display:is(on)',
                'settings'    => array(
                    array(
                        'id'          => 'nt_conversi_header_social_text',
                        'label'       => esc_html__( 'Social icon name', 'nt-conversi' ),
                        'desc'        => esc_html__( 'Enter icon name. example : fa fa-facebook', 'nt-conversi' ),
                        'type'        => 'text'
                    ),
                    array(
                        'id'          => 'nt_conversi_header_social_link',
                        'label'       => esc_html__( 'Url', 'nt-conversi' ),
                        'desc'        => esc_html__( 'Enter a url for social media', 'nt-conversi' ),
                        'type'        => 'text'
                    ),
                    array(
                        'id'          => 'nt_conversi_header_social_name',
                        'label'       => esc_html__( 'Social media name', 'nt-conversi' ),
                        'desc'        => esc_html__( 'Use simple social media name for bg color. example : facebook, twitter, pinterest and etc.', 'nt-conversi' ),
                        'type'        => 'text'
                    ),
                )
            ),
            array(
                'id'          => 'nt_conversi_header_social_target',
                'label'       => esc_html__( 'Target social media', 'nt-conversi' ),
                'desc'        => esc_html__( 'Select social media target type. default : _blank' , 'nt-conversi' ),
                'std'         => '_blank',
                'type'        => 'select',
                'section'     => 'top_header',
                'condition'   => 'nt_conversi_header_social_display:is(on)',
                'operator'    => 'and',
                'choices'     => array(
                    array(
                        'value'       => '_blank',
                        'label'       => esc_html__( '_blank', 'nt-conversi' )
                    ),
                    array(
                        'value'       => '_self',
                        'label'       => esc_html__( '_self', 'nt-conversi' )
                    ),
                    array(
                        'value'       => '_parent',
                        'label'       => esc_html__( '_parent', 'nt-conversi' )
                    ),
                    array(
                        'value'       => '_top',
                        'label'       => esc_html__( '_top', 'nt-conversi' )
                    ),
                )
            ),
            array(
                'id'          => 'nt_conversi_top_header_socialcolor',
                'label'       => esc_html__( 'Top header social icon color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker-opacity',
                'condition'   => 'nt_conversi_header_social_display:is(on)',
                'section'     => 'top_header'
            ),
            array(
                'id'          => 'nt_conversi_top_header_socialhovercolor',
                'label'       => esc_html__( 'Top header social icon hover color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker-opacity',
                'condition'   => 'nt_conversi_header_social_display:is(on)',
                'section'     => 'top_header'
            ),
            array(
                'id'          => 'nt_conversi_top_header_socialbgcolor',
                'label'       => esc_html__( 'Change social icon background color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker-opacity',
                'condition'   => 'nt_conversi_header_social_display:is(on)',
                'section'     => 'top_header'
            ),
            array(
                'id'          => 'nt_conversi_top_header_socialbghovercolor',
                'label'       => esc_html__( 'Change social icon background hover color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker-opacity',
                'condition'   => 'nt_conversi_header_social_display:is(on)',
                'section'     => 'top_header'
            ),
            array(
                'id'          => 'nt_conversi_top_header_socialfs',
                'label'       => esc_html__( 'Change social icon font-size', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select social icon font-size', 'nt-conversi' ),
                'type'        => 'numeric-slider',
                'min_max_step'=> '0,100',
                'section'     => 'top_header',
                'operator'    => 'and'
            ),
            //top header general section
            array(
                'id'          => 'nt_conversi_top_header_style',
                'label'       => esc_html__( 'Top header style', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'tab',
                'section'     => 'top_header'
            ),
            array(
                'id'          => 'nt_conversi_top_header_bgcolor',
                'label'       => esc_html__( 'Top hero background color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker-opacity',
                'section'     => 'top_header'
            ),
            array(
                'id'          => 'nt_conversi_top_header_pad_top',
                'label'       => esc_html__( 'Top header padding top', 'nt-conversi' ),
                'desc'        => esc_html__( 'You can use this option for heading text vertical align', 'nt-conversi' ),
                'type'        => 'numeric-slider',
                'min_max_step'=> '0,100',
                'std'		  => '20',
                'section'     => 'top_header',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_top_header_pad_bot',
                'label'       => esc_html__( 'Top header padding bottom', 'nt-conversi' ),
                'desc'        => esc_html__( 'You can use this option for heading text vertical align', 'nt-conversi' ),
                'type'        => 'numeric-slider',
                'min_max_step'=> '0,100',
                'std'		  => '20',
                'section'     => 'top_header',
                'operator'    => 'and'
            ),
            /**  navigation settings.  **/
            array(
                'id'          => 'nt_conversi_nav_general_tab',
                'label'       => esc_html__( 'General', 'nt-conversi' ),
                'type'        => 'tab',
                'section'     => 'navigation'
            ),
            array(
                'id'          => 'nt_conversi_nav_menu_ifs',
                'label'       => esc_html__('Navigation menu item font size', 'nt-conversi' ),
                'desc'        => esc_html__('Navigation menu item font size', 'nt-conversi' ),
                'type'        => 'numeric-slider',
                'min_max_step'=> '0,100',
                'section'     => 'navigation',
                'operator'    => 'and'
            ),
            //static tab
            array(
                'id'          => 'nt_conversi_nav_static_tab',
                'label'       => esc_html__( 'Static Navigation', 'nt-conversi' ),
                'type'        => 'tab',
                'section'     => 'navigation'
            ),
            array(
                'id'          => 'nt_conversi_navigationbg',
                'label'       => esc_html__( 'Theme navigation background color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'navigation'
            ),
            array(
                'id'          => 'nt_conversi_navitem',
                'label'       => esc_html__( 'Theme navigation menu item color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'navigation'
            ),
            array(
                'id'          => 'nt_conversi_navitemhover',
                'label'       => esc_html__( 'Theme navigation menu item hover color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'navigation'
            ),
            array(
                'id'          => 'nt_conversi_dropdown_bg',
                'label'       => esc_html__( 'Theme dropdown menu bg color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'navigation'
            ),
            array(
                'id'          => 'nt_conversi_dropdown_item',
                'label'       => esc_html__( 'Theme dropdown menu item color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'navigation'
            ),
            array(
                'id'          => 'nt_conversi_dropdown_itemhover',
                'label'       => esc_html__( 'Theme dropdown menu item hover color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'navigation'
            ),
            //sticky tab
            array(
                'id'          => 'nt_conversi_nav_sticky_tab',
                'label'       => esc_html__( 'Sticky Navigation', 'nt-conversi' ),
                'type'        => 'tab',
                'section'     => 'navigation'
            ),
            array(
                'id'          => 'nt_conversi_snavigation_display',
                'label'       => esc_html__( 'Theme sticky navigation display ', 'nt-conversi' ),
                'desc'        => sprintf( esc_html__( 'Choose sticky navigation display %s or %s.', 'nt-conversi' ), '<code>on</code>', '<code>off</code>' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'navigation'
            ),
            array(
                'id'          => 'nt_conversi_snavigationbg',
                'label'       => esc_html__( 'Theme sticky navigation background color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'navigation',
                'condition'   => 'nt_conversi_snavigation_display:is(on)',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_snavitem',
                'label'       => esc_html__( 'Theme sticky navigation menu item color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'navigation',
                'condition'   => 'nt_conversi_snavigation_display:is(on)',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_snavitemhover',
                'label'       => esc_html__( 'Theme sticky navigation menu item hover color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'navigation',
                'condition'   => 'nt_conversi_snavigation_display:is(on)',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_sdropdown_bg',
                'label'       => esc_html__( 'Theme sticky dropdown menu bg color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'navigation',
                'condition'   => 'nt_conversi_snavigation_display:is(on)',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_sdropdown_item',
                'label'       => esc_html__( 'Theme sticky dropdown menu item color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'navigation',
                'condition'   => 'nt_conversi_snavigation_display:is(on)',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_sdropdown_itemhover',
                'label'       => esc_html__( 'Theme sticky dropdown menu item hover color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'navigation',
                'condition'   => 'nt_conversi_snavigation_display:is(on)',
                'operator'    => 'and'
            ),
            //signup
            array(
                'id'          => 'nt_conversi_nav_signup_tab',
                'label'       => esc_html__( 'Signup Button', 'nt-conversi' ),
                'type'        => 'tab',
                'section'     => 'navigation'
            ),
            array(
                'id'          => 'nt_conversi_menubtn_display',
                'label'       => esc_html__( 'Navigation signup button display', 'nt-conversi' ),
                'desc'        => sprintf( esc_html__( 'Navigation signup button display %s or %s.', 'nt-conversi' ), '<code>on</code>', '<code>off</code>' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'navigation',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_menubtn',
                'label'       => 'navigation signup button title',
                'label'       => esc_html__('Navigation signup button title', 'nt-conversi' ),
                'std'         => 'sign-me up!',
                'type'        => 'text',
                'section'     => 'navigation',
                'condition'   => 'nt_conversi_menubtn_display:is(on)',
            ),
            array(
                'id'          => 'nt_conversi_menubtnurl',
                'label'       => esc_html__('Navigation signup button url/link', 'nt-conversi' ),
                'std'         => '#0',
                'type'        => 'text',
                'section'     => 'navigation',
                'condition'   => 'nt_conversi_menubtn_display:is(on)',
            ),
            array(
                'id'          => 'nt_conversi_menubtntarget',
                'label'       => esc_html__('Signup button target', 'nt-conversi' ),
                'desc'        => esc_html__( 'Choose button target type', 'nt-conversi' ),
                'std'         => '_blank',
                'type'        => 'select',
                'section'     => 'navigation',
                'condition'   => 'nt_conversi_menubtn_display:is(on)',
                'operator'    => 'and',
                'choices'     => array(
                    array(
                        'value'       => '_blank',
                        'label'       => esc_html__('_blank', 'nt-conversi' ),
                        'src'         => ''
                    ),
                    array(
                        'value'       => '_self',
                        'label'       => esc_html__('_self', 'nt-conversi' ),
                        'src'         => ''
                    ),
                    array(
                        'value'       => '_parent',
                        'label'       => esc_html__('_parent', 'nt-conversi' ),
                        'src'         => ''
                    ),
                    array(
                        'value'       => '_top',
                        'label'       => esc_html__('_top', 'nt-conversi' ),
                        'src'         => ''
                    ),
                )
            ),
            array(
                'id'          => 'nt_conversi_menubtn_bg',
                'label'       => esc_html__( 'Button background color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'navigation'
            ),
            array(
                'id'          => 'nt_conversi_menubtn_hvrbg',
                'label'       => esc_html__( 'Hover background color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'navigation'
            ),
            array(
                'id'          => 'nt_conversi_menubtn_clr',
                'label'       => esc_html__( 'Button title color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'navigation'
            ),
            array(
                'id'          => 'nt_conversi_menubtn_hvrclr',
                'label'       => esc_html__( 'Hover title color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'navigation'
            ),
            // phone number
            array(
                'id'          => 'nt_conversi_nav_phone_tab',
                'label'       => esc_html__( 'Phone Number', 'nt-conversi' ),
                'type'        => 'tab',
                'section'     => 'navigation'
            ),
            array(
                'id'          => 'nt_conversi_menutext',
                'label'       => esc_html__('Phone number', 'nt-conversi' ),
                'std'         => '',
                'type'        => 'text',
                'section'     => 'navigation',
            ),
            array(
                'id'          => 'nt_conversi_menutext_clr',
                'label'       => esc_html__( 'Phone color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'navigation'
            ),

            /**  sidebar type settings.  **/
            array(
                'id'          => 'nt_conversi_sidebar_general',
                'label'       => esc_html__( 'General', 'nt-conversi' ),
                'type'        => 'tab',
                'section'     => 'sidebars'
            ),
            array(
                'id'          => 'nt_conversi_bloglayout',
                'label'       => esc_html__( 'Blog layout', 'nt-conversi' ),
                'desc'        => esc_html__( 'Choose blog page layout type', 'nt-conversi' ),
                'std'         => 'right-sidebar',
                'type'        => 'radio-image',
                'section'     => 'sidebars',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_pagelayout',
                'label'       => esc_html__( 'Default page layout', 'nt-conversi' ),
                'desc'        => esc_html__( 'Choose default page layout type', 'nt-conversi' ),
                'std'         => 'right-sidebar',
                'type'        => 'radio-image',
                'section'     => 'sidebars',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_searchlayout',
                'label'       => esc_html__( 'Search page layout', 'nt-conversi' ),
                'desc'        => esc_html__( 'Choose search page layout type', 'nt-conversi' ),
                'std'         => 'right-sidebar',
                'type'        => 'radio-image',
                'section'     => 'sidebars',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_postlayout',
                'label'       => esc_html__( 'Blog single page layout', 'nt-conversi' ),
                'desc'        => esc_html__( 'Choose post page layout type', 'nt-conversi' ),
                'std'         => 'right-sidebar',
                'type'        => 'radio-image',
                'section'     => 'sidebars',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_archivelayout',
                'label'       => esc_html__( 'Archive page layout', 'nt-conversi' ),
                'desc'        => esc_html__( 'Choose archive page layout type', 'nt-conversi' ),
                'std'         => 'right-sidebar',
                'type'        => 'radio-image',
                'section'     => 'sidebars',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_404layout',
                'label'       => esc_html__( '404 page layout', 'nt-conversi' ),
                'desc'        => esc_html__( 'Choose 404 page layout type', 'nt-conversi' ),
                'std'         => 'right-sidebar',
                'type'        => 'radio-image',
                'section'     => 'sidebars',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'woosingle',
                'label'       => esc_html__( 'Woocommerce single page layout', 'nt-conversi' ),
                'desc'        => esc_html__( 'Choose woocommerce single page layout type', 'nt-conversi' ),
                'std'         => 'right-sidebar',
                'type'        => 'radio-image',
                'section'     => 'sidebars',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'woopage',
                'label'       => esc_html__( 'Woocommerce  page layout', 'nt-conversi' ),
                'desc'        => esc_html__( 'Choose woocommerce page layout type', 'nt-conversi' ),
                'std'         => 'right-sidebar',
                'type'        => 'radio-image',
                'section'     => 'sidebars',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_sidebar_generalcolor',
                'label'       => esc_html__( 'Sidebar Color', 'nt-conversi' ),
                'type'        => 'tab',
                'section'     => 'sidebars'
            ),
            /**  sidebar settings.  **/
            array(
                'id'          => 'nt_conversi_sidebarwidgetareabgcolor',
                'label'       => esc_html__( 'Theme sidebar widget area background color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'sidebars'
            ),
            array(
                'id'          => 'nt_conversi_sidebarwidgetgeneralcolor',
                'label'       => esc_html__( 'Theme sidebar widget general color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'sidebars'
            ),
            array(
                'id'          => 'nt_conversi_sidebarwidgettitlecolor',
                'label'       => esc_html__( 'Theme sidebar widget title color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'sidebars'
            ),
            array(
                'id'          => 'nt_conversi_sidebarlinkcolor',
                'label'       => esc_html__( 'Theme sidebar link title color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'sidebars'
            ),
            array(
                'id'          => 'nt_conversi_sidebarlinkhovercolor',
                'label'       => esc_html__( 'Theme sidebar link title hover color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'sidebars'
            ),
            array(
                'id'          => 'nt_conversi_sidebarsearchsubmittextcolor',
                'label'       => esc_html__( 'Theme sidebar search submit text color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'sidebars'
            ),
            array(
                'id'          => 'nt_conversi_sidebarsearchsubmitbgcolor',
                'label'       => esc_html__( 'Theme sidebar search submit background color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'sidebars'
            ),



            /**  blog/page hero settings.  **/
            array(
                'id'          => 'nt_conversi_header_general',
                'label'       => esc_html__( 'Hero', 'nt-conversi' ),
                'type'        => 'tab',
                'section'     => 'header'
            ),
            array(
                'id'          => 'nt_conversi_blog_mask_v',
                'label'       => esc_html__( 'Blog hero background overlay mask visibility', 'nt-conversi' ),
                'desc'        => sprintf( esc_html__( 'Blog hero background overlay mask  %s or %s.', 'nt-conversi' ), '<code>on</code>', '<code>off</code>' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'header',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_blog_mask_c',
                'label'       => esc_html__( 'Blog hero background overlay mask color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker-opacity',
                'condition'   => 'nt_conversi_blog_mask_v:is(on)',
                'section'     => 'header'
            ),
            array(
                'id'          => 'nt_conversi_blog_h_bg',
                'label'       =>  esc_html__( 'Blog page hero section background image', 'nt-conversi' ),
                'desc'        =>  esc_html__( 'You can upload your image for parallax background', 'nt-conversi' ),
                'type'        => 'upload',
                'section'     => 'header',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_blog_h_h',
                'label'       => esc_html__( 'Blog page hero height', 'nt-conversi' ),
                'desc'        => esc_html__( 'Blog page hero height', 'nt-conversi' ),
                'type'        => 'numeric-slider',
                'min_max_step'=> '0,100',
                'std		 '=> '65',
                'section'     => 'header',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_blog_h_p',
                'label'       => esc_html__( 'Hero padding top', 'nt-conversi' ),
                'desc'        => esc_html__( 'You can use this option for heading text vertical align', 'nt-conversi' ),
                'type'        => 'spacing',
                'section'     => 'header',
                'operator'    => 'and'
            ),
            /**  blog/page heading color settings.  **/
            array(
                'id'          => 'nt_conversi_heading',
                'label'       => esc_html__( 'Hero Heading', 'nt-conversi' ),
                'type'        => 'tab',
                'section'     => 'header'
            ),
            array(
                'id'          => 'nt_conversi_disable_title',
                'label'       => esc_html__( 'Blog page heading visibility', 'nt-conversi' ),
                'desc'        => sprintf( esc_html__( 'Blog page heading visibility %s or %s.', 'nt-conversi' ), '<code>on</code>', '<code>off</code>' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'header',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_blog_title',
                'label'       => esc_html__( 'Blog page heading', 'nt-conversi' ),
                'desc'        => esc_html__( 'Enter blog page heading', 'nt-conversi' ),
                'std'         => 'blog',
                'type'        => 'text',
                'condition'   => 'nt_conversi_disable_title:is(on)',
                'section'     => 'header'
            ),
            array(
                'id'          => 'nt_conversi_blogheadingfontsize',
                'label'       => esc_html__( 'Blog heading font size', 'nt-conversi' ),
                'desc'        => esc_html__( 'Enter blog heading font size', 'nt-conversi' ),
                'std'         => '42',
                'type'        => 'numeric-slider',
                'min_max_step'=> '0,100',
                'condition'   => 'nt_conversi_disable_title:is(on)',
                'section'     => 'header',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_blogheadingcolor',
                'label'       => esc_html__( 'Blog page heading color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'condition'   => 'nt_conversi_disable_title:is(on)',
                'section'     => 'header'
            ),
            array(
                'id'          => 'nt_conversi_page_disable_sub',
                'label'       => esc_html__( 'Blog page subtitle visibility', 'nt-conversi' ),
                'desc'        => sprintf( esc_html__( 'Blog page subtitle visibility %s or %s.', 'nt-conversi' ), '<code>on</code>', '<code>off</code>' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'header',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_blog_subtitle',
                'label'       => esc_html__( 'Blog page subtitle', 'nt-conversi' ),
                'desc'        => esc_html__( 'Enter blog page subtitle', 'nt-conversi' ),
                'std'         => '',
                'type'        => 'text',
                'condition'   => 'nt_conversi_page_disable_sub:is(on)',
                'section'     => 'header'
            ),
            array(
                'id'          => 'nt_conversi_blogsubheadingfontsize',
                'label'       => esc_html__( 'Blog subtitle font size', 'nt-conversi' ),
                'desc'        => esc_html__( 'Enter blog subtitle font size', 'nt-conversi' ),
                'std'         => '21',
                'type'        => 'numeric-slider',
                'min_max_step'=> '0,100',
                'condition'   => 'nt_conversi_page_disable_sub:is(on)',
                'section'     => 'header',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_blogsubtitlecolor',
                'label'       => esc_html__( 'Blog page subtitle color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'condition'   => 'nt_conversi_page_disable_sub:is(on)',
                'section'     => 'header'
            ),
            // post title
            array(
                'id'          => 'nt_conversi_color',
                'label'       => esc_html__( 'Post Title', 'nt-conversi' ),
                'type'        => 'tab',
                'section'     => 'header'
            ),
            array(
                'id'          => 'nt_conversi_blogposttitlecolor',
                'label'       => esc_html__( 'Blog post title color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'header'
            ),
            array(
                'id'          => 'nt_conversi_blogposttitlhoverecolor',
                'label'       => esc_html__( 'Blog post title hover color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'header'
            ),
            array(
                'id'          => 'nt_conversi_blogpostparagraphcolor',
                'label'       => esc_html__( 'Blog post content text color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'header'
            ),
            // post meta
            array(
                'id'          => 'nt_conversi_post_meta_tab',
                'label'       => esc_html__( 'Post Meta', 'nt-conversi' ),
                'type'        => 'tab',
                'section'     => 'header'
            ),
            array(
                'id'          => 'nt_conversi_blogmetacolor',
                'label'       => esc_html__( 'Blog post meta title color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'header'
            ),
            array(
                'id'          => 'nt_conversi_blogmetalinktextcolor',
                'label'       => esc_html__( 'Blog post meta link text color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'headerheader'
            ),
            array(
                'id'          => 'nt_conversi_blogmetalinkhovercolor',
                'label'       => esc_html__( 'Blog post meta link text hover color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'header'
            ),
            array(
                'id'          => 'nt_conversi_blogmetalinktextbgcolor',
                'label'       => esc_html__( 'Blog post meta link text background color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'header'
            ),
            array(
                'id'          => 'nt_conversi_blogmetalinktextbghovercolor',
                'label'       => esc_html__( 'Blog post meta link text background hover color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'header'
            ),
            // post button
            array(
                'id'          => 'nt_conversi_post_button_tab',
                'label'       => esc_html__( 'Post Button', 'nt-conversi' ),
                'type'        => 'tab',
                'section'     => 'header'
            ),
            array(
                'id'          => 'nt_conversi_blog_post_readmore_display',
                'label'       => esc_html__( 'Blog post read more button display', 'nt-conversi' ),
                'desc'        => sprintf( esc_html__( 'Blog post read more button display %s or %s.', 'nt-conversi' ), '<code>on</code>', '<code>off</code>' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'header',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_blog_post_readmore',
                'label'       => esc_html__( 'Blog post read more button text', 'nt-conversi' ),
                'desc'        => esc_html__( 'Enter blog post read more button text', 'nt-conversi' ),
                'type'        => 'text',
                'std'         => 'Read More',
                'condition'   => 'nt_conversi_blog_post_readmore_display:is(on)',
                'section'     => 'header'
            ),
            array(
                'id'          => 'nt_conversi_blogpostbuttonbgcolor',
                'label'       => esc_html__( 'Blog post button background color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'condition'   => 'nt_conversi_blog_post_readmore_display:is(on)',
                'section'     => 'header'
            ),
            array(
                'id'          => 'nt_conversi_blogpostbuttonbghovercolor',
                'label'       => esc_html__( 'Blog post button background hover color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'condition'   => 'nt_conversi_blog_post_readmore_display:is(on)',
                'section'     => 'header'
            ),
            array(
                'id'          => 'nt_conversi_blogpostbuttontitlecolor',
                'label'       => esc_html__( 'Blog post button title color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'condition'   => 'nt_conversi_blog_post_readmore_display:is(on)',
                'section'     => 'header'
            ),
            array(
                'id'          => 'nt_conversi_blogpostbuttontitlehovercolor',
                'label'       => esc_html__( 'Blog post button title hover color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'condition'   => 'nt_conversi_blog_post_readmore_display:is(on)',
                'section'     => 'header'
            ),
            // post pagination
            array(
                'id'          => 'nt_conversi_post_pager_tab',
                'label'       => esc_html__( 'Pagination', 'nt-conversi' ),
                'type'        => 'tab',
                'section'     => 'header'
            ),
            array(
                'id'          => 'nt_conversi_pagertitlecolor',
                'label'       => esc_html__( 'Pager button title color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'header'
            ),
            array(
                'id'          => 'nt_conversi_pagertitlehovercolor',
                'label'       => esc_html__( 'Pager button title hover color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'header'
            ),
            array(
                'id'          => 'nt_conversi_pagerbgcolor',
                'label'       => esc_html__( 'Pager button background color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'header'
            ),
            array(
                'id'          => 'nt_conversi_pagerbghovercolor',
                'label'       => esc_html__( 'Pager button background hover color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'header'
            ),
            /**  single header settings.  **/
            // hero
            array(
                'id'          => 'nt_conversi_single_hero_tab',
                'label'       => esc_html__( 'Hero', 'nt-conversi' ),
                'type'        => 'tab',
                'section'     => 'single_header'
            ),
            array(
                'id'          => 'nt_conversi_single_mask_v',
                'label'       => esc_html__( 'Single hero background overlay mask visibility', 'nt-conversi' ),
                'desc'        => sprintf( esc_html__( 'Single hero background overlay mask  %s or %s.', 'nt-conversi' ), '<code>on</code>', '<code>off</code>' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'single_header',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_single_mask_c',
                'label'       => esc_html__( 'Single hero background overlay mask color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker-opacity',
                'condition'   => 'nt_conversi_single_mask_v:is(on)',
                'section'     => 'single_header'
            ),
            array(
                'id'          => 'nt_conversi_singlepageheadbg',
                'label'       =>  esc_html__( 'Single hero section background image', 'nt-conversi' ),
                'desc'        =>  esc_html__( 'You can upload your image for parallax background', 'nt-conversi' ),
                'type'        => 'upload',
                'section'     => 'single_header',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_singleheaderbgcolor',
                'label'       => esc_html__( 'Single page hero section background color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'single_header'
            ),
            array(
                'id'          => 'nt_conversi_singleheaderbgheight',
                'label'       => esc_html__( 'Single page hero height', 'nt-conversi' ),
                'desc'        => esc_html__( 'Single page hero height', 'nt-conversi' ),
                'type'        => 'numeric-slider',
                'min_max_step'=> '0,100',
                'std		 '=> '65',
                'section'     => 'single_header',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_singleheaderpaddingtop',
                'label'       => esc_html__( 'Hero padding top', 'nt-conversi' ),
                'desc'        => esc_html__( 'You can use this option for heading text vertical align', 'nt-conversi' ),
                'type'        => 'numeric-slider',
                'min_max_step'=> '0,500',
                'section'     => 'single_header',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_singleheaderpaddingbottom',
                'label'       => esc_html__( 'Hero padding bottom', 'nt-conversi' ),
                'desc'        => esc_html__( 'You can use this option for heading text vertical align', 'nt-conversi' ),
                'type'        => 'numeric-slider',
                'min_max_step'=> '0,500',
                'section'     => 'single_header',
                'operator'    => 'and'
            ),
            // heading
            array(
                'id'          => 'nt_conversi_single_heading_tab',
                'label'       => esc_html__( 'Heading', 'nt-conversi' ),
                'type'        => 'tab',
                'section'     => 'single_header'
            ),
            array(
                'id'          => 'nt_conversi_single_disable_heading',
                'label'       => esc_html__( 'Single page heading post title visibility', 'nt-conversi' ),
                'desc'        => sprintf( esc_html__( 'Please select single page heading post title  visibility %s or %s.', 'nt-conversi' ), '<code>on</code>', '<code>off</code>' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'single_header',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_singleheadingcolor',
                'label'       => esc_html__( 'Single page heading color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'condition'   => 'nt_conversi_single_disable_heading:is(on)',
                'section'     => 'single_header'
            ),
            array(
                'id'          => 'nt_conversi_single_heading_fontsize',
                'label'       => esc_html__( 'Single heading font size', 'nt-conversi' ),
                'desc'        => esc_html__( 'Enter single heading font size', 'nt-conversi' ),
                'std'         => '65',
                'type'        => 'numeric-slider',
                'min_max_step'=> '0,100',
                'condition'   => 'nt_conversi_single_disable_heading:is(on)',
                'section'     => 'single_header',
                'operator'    => 'and'
            ),

            // post share
            array(
                'id'          => 'nt_conversi_post_share_tab',
                'label'       => esc_html__( 'Post Share', 'nt-conversi' ),
                'type'        => 'tab',
                'section'     => 'single_header'
            ),
            array(
                'id'          => 'nt_conversi_single_share_display',
                'label'       => esc_html__( 'Single post all share icon visibility', 'nt-conversi' ),
                'desc'        => sprintf( esc_html__( 'Please select single page post share icon visibility %s or %s.', 'nt-conversi' ), '<code>on</code>', '<code>off</code>' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'single_header',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_single_share_face_display',
                'label'       => esc_html__( 'Facebook share icon visibility', 'nt-conversi' ),
                'desc'        => sprintf( esc_html__( 'Please select single page post facebook share icon visibility %s or %s.', 'nt-conversi' ), '<code>on</code>', '<code>off</code>' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'single_header',
                'condition'   => 'nt_conversi_single_share_display:is(on)',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_single_share_twitter_display',
                'label'       => esc_html__( 'Twitter share icon visibility', 'nt-conversi' ),
                'desc'        => sprintf( esc_html__( 'Please select single page post twitter share icon visibility %s or %s.', 'nt-conversi' ), '<code>on</code>', '<code>off</code>' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'single_header',
                'condition'   => 'nt_conversi_single_share_display:is(on)',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_single_share_gplus_display',
                'label'       => esc_html__( 'Google+plus share icon visibility', 'nt-conversi' ),
                'desc'        => sprintf( esc_html__( 'Please select single page post google-plus share icon visibility %s or %s.', 'nt-conversi' ), '<code>on</code>', '<code>off</code>' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'single_header',
                'condition'   => 'nt_conversi_single_share_display:is(on)',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_single_share_digg_display',
                'label'       => esc_html__( 'Digg share icon visibility', 'nt-conversi' ),
                'desc'        => sprintf( esc_html__( 'Please select single page post digg share icon visibility %s or %s.', 'nt-conversi' ), '<code>on</code>', '<code>off</code>' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'single_header',
                'condition'   => 'nt_conversi_single_share_display:is(on)',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_single_share_reddit_display',
                'label'       => esc_html__( 'Reddit share icon visibility', 'nt-conversi' ),
                'desc'        => sprintf( esc_html__( 'Please select single page post reddit share icon visibility %s or %s.', 'nt-conversi' ), '<code>on</code>', '<code>off</code>' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'single_header',
                'condition'   => 'nt_conversi_single_share_display:is(on)',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_single_share_linkedin_display',
                'label'       => esc_html__( 'Linkedin share icon visibility', 'nt-conversi' ),
                'desc'        => sprintf( esc_html__( 'Please select single page post linkedin share icon visibility %s or %s.', 'nt-conversi' ), '<code>on</code>', '<code>off</code>' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'single_header',
                'condition'   => 'nt_conversi_single_share_display:is(on)',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_single_share_stumbleupon_display',
                'label'       => esc_html__( 'Stumbleupon share icon visibility', 'nt-conversi' ),
                'desc'        => sprintf( esc_html__( 'Please select single page post stumbleupon share icon visibility %s or %s.', 'nt-conversi' ), '<code>on</code>', '<code>off</code>' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'single_header',
                'condition'   => 'nt_conversi_single_share_display:is(on)',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_blogsharebgcolor',
                'label'       => esc_html__( 'Share icon background color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'single_header'
            ),
            array(
                'id'          => 'nt_conversi_blogsharebghovercolor',
                'label'       => esc_html__( 'Hover share icon background color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'single_header'
            ),
            array(
                'id'          => 'nt_conversi_blogsharecolor',
                'label'       => esc_html__( 'Share icon color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'single_header'
            ),
            array(
                'id'          => 'nt_conversi_blogsharehovercolor',
                'label'       => esc_html__( 'Hover share icon color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'single_header'
            ),
            // post comment
            array(
                'id'          => 'nt_conversi_post_comment_tab',
                'label'       => esc_html__( 'Post Comment', 'nt-conversi' ),
                'type'        => 'tab',
                'section'     => 'single_header'
            ),
            array(
                'id'          => 'nt_conversi_blogcommentformsubmitcolor',
                'label'       => esc_html__( 'Single post comment button title color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'single_header'
            ),
            array(
                'id'          => 'nt_conversi_blogcommentformsubmithovercolor',
                'label'       => esc_html__( 'Single post comment button title hover color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'single_header'
            ),
            array(
                'id'          => 'nt_conversi_blogcommentformsubmitbgcolor',
                'label'       => esc_html__( 'Single post comment button background color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'single_header'
            ),
            array(
                'id'          => 'nt_conversi_blogcommentformsubmitbghovercolor',
                'label'       => esc_html__( 'Single post comment button background hover color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'single_header'
            ),
            // post-meta
            array(
                'id'          => 'nt_conversi_single_postmeta_tab',
                'label'       => esc_html__( 'Post Meta', 'nt-conversi' ),
                'type'        => 'tab',
                'section'     => 'single_header'
            ),
            array(
                'id'          => 'nt_conversi_single_post_all_meta_visibility',
                'label'       => esc_html__( 'Single page all post meta visibility', 'nt-conversi' ),
                'desc'        => esc_html__( 'You can enable or disable all post meta with this option', 'nt-conversi' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'single_header',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_single_post_date_visibility',
                'label'       => esc_html__( 'Single page post date visibility', 'nt-conversi' ),
                'desc'        => esc_html__( 'You can enable or disable post date with this option', 'nt-conversi' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'single_header',
                'condition'   => 'nt_conversi_single_post_all_meta_visibility:is(on)',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_single_post_cat_visibility',
                'label'       => esc_html__( 'Single page post category visibility', 'nt-conversi' ),
                'desc'        => esc_html__( 'You can enable or disable post category with this option', 'nt-conversi' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'single_header',
                'condition'   => 'nt_conversi_single_post_all_meta_visibility:is(on)',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_single_post_author_visibility',
                'label'       => esc_html__( 'Single page post author visibility', 'nt-conversi' ),
                'desc'        => esc_html__( 'You can enable or disable post author with this option', 'nt-conversi' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'single_header',
                'condition'   => 'nt_conversi_single_post_all_meta_visibility:is(on)',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_single_post_tags_visibility',
                'label'       => esc_html__( 'Single page post tags visibility', 'nt-conversi' ),
                'desc'        => esc_html__( 'You can enable or disable post tags with this option', 'nt-conversi' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'single_header',
                'condition'   => 'nt_conversi_single_post_all_meta_visibility:is(on)',
                'operator'    => 'and'
            ),
            /**  archive header settings.  **/
            // hero
            array(
                'id'          => 'nt_conversi_archive_hero_tab',
                'label'       => esc_html__( 'Hero', 'nt-conversi' ),
                'type'        => 'tab',
                'section'     => 'archive_page'
            ),
            array(
                'id'          => 'nt_conversi_archive_mask_v',
                'label'       => esc_html__( 'Archive hero background overlay mask visibility', 'nt-conversi' ),
                'desc'        => sprintf( esc_html__( 'Archive hero background overlay mask  %s or %s.', 'nt-conversi' ), '<code>on</code>', '<code>off</code>' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'archive_page',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_archive_mask_c',
                'label'       => esc_html__( 'Archive hero background overlay mask color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker-opacity',
                'condition'   => 'nt_conversi_archive_mask_v:is(on)',
                'section'     => 'archive_page'
            ),
            array(
                'id'          => 'nt_conversi_archivepageheadbg',
                'label'       =>  esc_html__( 'Archive hero section background image', 'nt-conversi' ),
                'desc'        =>  esc_html__( 'You can upload your image for parallax background', 'nt-conversi' ),
                'type'        => 'upload',
                'section'     => 'archive_page',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_archiveheaderbgcolor',
                'label'       => esc_html__( 'Archive page hero section background color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'archive_page'
            ),
            array(
                'id'          => 'nt_conversi_archiveheaderbgheight',
                'label'       => esc_html__( 'Archive page hero height', 'nt-conversi' ),
                'desc'        => esc_html__( 'Archive page hero height', 'nt-conversi' ),
                'type'        => 'numeric-slider',
                'min_max_step'=> '0,100',
                'std		 '=> '65',
                'section'     => 'archive_page',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_archiveheaderpaddingtop',
                'label'       => esc_html__( 'Hero padding top', 'nt-conversi' ),
                'desc'        => esc_html__( 'You can use this option for heading text vertical align', 'nt-conversi' ),
                'type'        => 'numeric-slider',
                'min_max_step'=> '0,500',
                'section'     => 'archive_page',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_archiveheaderpaddingbottom',
                'label'       => esc_html__( 'Hero padding bottom', 'nt-conversi' ),
                'desc'        => esc_html__( 'You can use this option for heading text vertical align', 'nt-conversi' ),
                'type'        => 'numeric-slider',
                'min_max_step'=> '0,500',
                'section'     => 'archive_page',
                'operator'    => 'and'
            ),
            // heading
            array(
                'id'          => 'nt_conversi_archive_heading_tab',
                'label'       => esc_html__( 'Heading', 'nt-conversi' ),
                'type'        => 'tab',
                'section'     => 'archive_page'
            ),
            array(
                'id'          => 'nt_conversi_archive_heading_visibility',
                'label'       => esc_html__( 'Archive heading visibility', 'nt-conversi' ),
                'desc'        => sprintf( esc_html__( 'Archive heading visibility %s or %s.', 'nt-conversi' ), '<code>on</code>', '<code>off</code>' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'archive_page',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_archive_heading',
                'label'       => esc_html__( 'Archive heading', 'nt-conversi' ),
                'desc'        => esc_html__( 'Enter archive heading', 'nt-conversi' ),
                'std'         => 'our archive',
                'type'        => 'text',
                'condition'   => 'nt_conversi_archive_heading_visibility:is(on)',
                'section'     => 'archive_page'
            ),
            array(
                'id'          => 'nt_conversi_archive_heading_fontsize',
                'label'       => esc_html__( 'Archive heading font size', 'nt-conversi' ),
                'desc'        => esc_html__( 'Enter archive heading font size', 'nt-conversi' ),
                'std'         => '65',
                'type'        => 'numeric-slider',
                'min_max_step'=> '0,100',
                'condition'   => 'nt_conversi_archive_heading_visibility:is(on)',
                'section'     => 'archive_page',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_archiveheadingcolor',
                'label'       => esc_html__( 'Archive page heading color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'condition'   => 'nt_conversi_archive_heading_visibility:is(on)',
                'section'     => 'archive_page'
            ),
            // slogan
            array(
                'id'          => 'nt_conversi_archive_slogan_tab',
                'label'       => esc_html__( 'Slogan', 'nt-conversi' ),
                'type'        => 'tab',
                'section'     => 'archive_page'
            ),
            array(
                'id'          => 'nt_conversi_archive_slogan_visibility',
                'label'       => esc_html__( 'Archive slogan visibility', 'nt-conversi' ),
                'desc'        => sprintf( esc_html__( 'Archive slogan visibility %s or %s.', 'nt-conversi' ), '<code>on</code>', '<code>off</code>' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'archive_page',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_archive_slogan',
                'label'       => esc_html__( 'Archive slogan', 'nt-conversi' ),
                'desc'        => esc_html__( 'Enter archive slogan', 'nt-conversi' ),
                'std'         => 'welcome to your archive. this is your all post. edit or delete them, then start writing!',
                'type'        => 'text',
                'condition'   => 'nt_conversi_archive_slogan_visibility:is(on)',
                'section'     => 'archive_page'
            ),
            array(
                'id'          => 'nt_conversi_archiveheaderparagraphcolor',
                'label'       => esc_html__( 'Archive page slogan color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'condition'   => 'nt_conversi_archive_slogan_visibility:is(on)',
                'section'     => 'archive_page'
            ),

            /**  404 page hero settings.  **/
            // hero
            array(
                'id'          => 'nt_conversi_error_hero_tab',
                'label'       => esc_html__( 'Hero', 'nt-conversi' ),
                'type'        => 'tab',
                'section'     => 'error_page'
            ),
            array(
                'id'          => 'nt_conversi_error_mask_v',
                'label'       => esc_html__( '404 hero background overlay mask visibility', 'nt-conversi' ),
                'desc'        => sprintf( esc_html__( '404 hero background overlay mask  %s or %s.', 'nt-conversi' ), '<code>on</code>', '<code>off</code>' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'error_page',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_error_mask_c',
                'label'       => esc_html__( '404 hero background overlay mask color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker-opacity',
                'condition'   => 'nt_conversi_error_mask_v:is(on)',
                'section'     => 'error_page'
            ),
            array(
                'id'          => 'nt_conversi_errorpageheadbg',
                'label'       =>  esc_html__( '404 hero section background image', 'nt-conversi' ),
                'desc'        =>  esc_html__( 'You can upload your image for parallax background', 'nt-conversi' ),
                'type'        => 'upload',
                'section'     => 'error_page',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_errorheaderbgcolor',
                'label'       => esc_html__( '404 page hero section background color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'error_page'
            ),
            array(
                'id'          => 'nt_conversi_errorheaderbgheight',
                'label'       => esc_html__('404 page hero height', 'nt-conversi' ),
                'desc'        => esc_html__('404 page hero height', 'nt-conversi' ),
                'std'         => '50',
                'type'        => 'numeric-slider',
                'min_max_step'=> '0,100',
                'std		 '=> '65',
                'section'     => 'error_page',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_errorheaderpaddingtop',
                'label'       => esc_html__( 'Hero padding top', 'nt-conversi' ),
                'desc'        => esc_html__( 'You can use this option for heading text vertical align', 'nt-conversi' ),
                'type'        => 'numeric-slider',
                'min_max_step'=> '0,500',
                'section'     => 'error_page',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_errorheaderpaddingbottom',
                'label'       => esc_html__( 'Hero padding bottom', 'nt-conversi' ),
                'desc'        => esc_html__( 'You can use this option for heading text vertical align', 'nt-conversi' ),
                'type'        => 'numeric-slider',
                'min_max_step'=> '0,500',
                'section'     => 'error_page',
                'operator'    => 'and'
            ),
            // heading
            array(
                'id'          => 'nt_conversi_error_heading_tab',
                'label'       => esc_html__( 'Heading', 'nt-conversi' ),
                'type'        => 'tab',
                'section'     => 'error_page'
            ),
            array(
                'id'          => 'nt_conversi_error_heading_visibility',
                'label'       => esc_html__( '404 page heading visibility', 'nt-conversi' ),
                'desc'        => sprintf( esc_html__( 'error heading visibility %s or %s.', 'nt-conversi' ), '<code>on</code>', '<code>off</code>' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'error_page',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_error_heading',
                'label'       => esc_html__( '404 page heading', 'nt-conversi' ),
                'desc'        => esc_html__( 'Enter error heading', 'nt-conversi' ),
                'std'         => '404 page',
                'type'        => 'text',
                'condition'   => 'nt_conversi_error_heading_visibility:is(on)',
                'section'     => 'error_page'
            ),
            array(
                'id'          => 'nt_conversi_error_heading_fontsize',
                'label'       => esc_html__('404 page heading font size', 'nt-conversi' ),
                'desc'        => esc_html__( 'Enter 404 page heading font size', 'nt-conversi' ),
                'type'        => 'numeric-slider',
                'min_max_step'=> '0,100',
                'section'     => 'error_page',
                'condition'   => 'nt_conversi_error_heading_visibility:is(on)',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_errorheadingcolor',
                'label'       => esc_html__( '404 page heading color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'condition'   => 'nt_conversi_error_heading_visibility:is(on)',
                'section'     => 'error_page'
            ),
            // slogan
            array(
                'id'          => 'nt_conversi_error_slogan_tab',
                'label'       => esc_html__( 'Slogan', 'nt-conversi' ),
                'type'        => 'tab',
                'section'     => 'error_page'
            ),
            array(
                'id'          => 'nt_conversi_error_slogan_visibility',
                'label'       => esc_html__( '404 page slogan visibility', 'nt-conversi' ),
                'desc'        => sprintf( esc_html__( '404 page slogan visibility %s or %s.', 'nt-conversi' ), '<code>on</code>', '<code>off</code>' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'error_page',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_error_slogan',
                'label'       => esc_html__( '404 page slogan', 'nt-conversi' ),
                'desc'        => esc_html__( 'Enter 404 page slogan', 'nt-conversi' ),
                'std'         => 'oops! that page can not be found.',
                'type'        => 'text',
                'condition'   => 'nt_conversi_error_slogan_visibility:is(on)',
                'section'     => 'error_page'
            ),
            array(
                'id'          => 'nt_conversi_errorheaderparagraphcolor',
                'label'       => esc_html__( '404 page slogan color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'condition'   => 'nt_conversi_error_slogan_visibility:is(on)',
                'section'     => 'error_page'
            ),

            /**  search page hero settings.  **/
            // hero
            array(
                'id'          => 'nt_conversi_search_hero_tab',
                'label'       => esc_html__( 'Hero', 'nt-conversi' ),
                'type'        => 'tab',
                'section'     => 'search_page'
            ),
            array(
                'id'          => 'nt_conversi_search_mask_v',
                'label'       => esc_html__( 'Search hero background overlay mask visibility', 'nt-conversi' ),
                'desc'        => sprintf( esc_html__( 'Search hero background overlay mask  %s or %s.', 'nt-conversi' ), '<code>on</code>', '<code>off</code>' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'search_page',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_search_mask_c',
                'label'       => esc_html__( 'Search hero background overlay mask color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker-opacity',
                'condition'   => 'nt_conversi_search_mask_v:is(on)',
                'section'     => 'search_page'
            ),
            array(
                'id'          => 'nt_conversi_searchpageheadbg',
                'label'       =>  esc_html__( 'Search hero section background image', 'nt-conversi' ),
                'desc'        =>  esc_html__( 'You can upload your image for parallax background', 'nt-conversi' ),
                'type'        => 'upload',
                'section'     => 'search_page',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_searchheaderbgcolor',
                'label'       => esc_html__( 'Search page hero section background color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'search_page'
            ),
            array(
                'id'          => 'nt_conversi_searchheaderbgheight',
                'label'       => esc_html__( 'Search page hero height', 'nt-conversi' ),
                'desc'        => esc_html__( 'Search page hero height', 'nt-conversi' ),
                'type'        => 'numeric-slider',
                'min_max_step'=> '0,100',
                'std		 '=> '65',
                'section'     => 'search_page',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_searchheaderpaddingtop',
                'label'       => esc_html__( 'Hero padding top', 'nt-conversi' ),
                'desc'        => esc_html__( 'You can use this option for heading text vertical align', 'nt-conversi' ),
                'type'        => 'numeric-slider',
                'min_max_step'=> '0,500',
                'section'     => 'search_page',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_searchheaderpaddingbottom',
                'label'       => esc_html__( 'Hero padding bottom', 'nt-conversi' ),
                'desc'        => esc_html__( 'You can use this option for heading text vertical align', 'nt-conversi' ),
                'type'        => 'numeric-slider',
                'min_max_step'=> '0,500',
                'section'     => 'search_page',
                'operator'    => 'and'
            ),
            // heading
            array(
                'id'          => 'nt_conversi_search_heading_tab',
                'label'       => esc_html__( 'Heading', 'nt-conversi' ),
                'type'        => 'tab',
                'section'     => 'search_page'
            ),
            array(
                'id'          => 'nt_conversi_search_heading_visibility',
                'label'       => esc_html__( 'Search page heading visibility', 'nt-conversi' ),
                'desc'        => sprintf( esc_html__( 'Search heading visibility %s or %s.', 'nt-conversi' ), '<code>on</code>', '<code>off</code>' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'search_page',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_search_heading',
                'label'       => esc_html__( 'Search page heading', 'nt-conversi' ),
                'desc'        => esc_html__( 'Enter search heading', 'nt-conversi' ),
                'std'         => 'search page',
                'type'        => 'text',
                'condition'   => 'nt_conversi_search_heading_visibility:is(on)',
                'section'     => 'search_page'
            ),
            array(
                'id'          => 'nt_conversi_search_heading_fontsize',
                'label'       => esc_html__( 'Search page heading font size', 'nt-conversi' ),
                'desc'        => esc_html__( 'Enter search page heading font size', 'nt-conversi' ),
                'type'        => 'numeric-slider',
                'min_max_step'=> '0,100',
                'condition'   => 'nt_conversi_search_heading_visibility:is(on)',
                'section'     => 'search_page',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_searchheadingcolor',
                'label'       => esc_html__( 'Search page heading color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'condition'   => 'nt_conversi_search_heading_visibility:is(on)',
                'section'     => 'search_page'
            ),
            // slogan
            array(
                'id'          => 'nt_conversi_search_slogan_tab',
                'label'       => esc_html__( 'Slogan', 'nt-conversi' ),
                'type'        => 'tab',
                'section'     => 'search_page'
            ),
            array(
                'id'          => 'nt_conversi_search_slogan_visibility',
                'label'       => esc_html__( 'Search page slogan visibility', 'nt-conversi' ),
                'desc'        => sprintf( esc_html__( 'Search page slogan visibility %s or %s.', 'nt-conversi' ), '<code>on</code>', '<code>off</code>' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'search_page',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_search_slogan',
                'label'       => esc_html__( 'Search page slogan', 'nt-conversi' ),
                'desc'        => esc_html__( 'Enter search page slogan', 'nt-conversi' ),
                'std'         => 'search completed',
                'type'        => 'text',
                'condition'   => 'nt_conversi_search_slogan_visibility:is(on)',
                'section'     => 'search_page'
            ),
            array(
                'id'          => 'nt_conversi_searchheaderparagraphcolor',
                'label'       => esc_html__( 'Search page slogan color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'condition'   => 'nt_conversi_search_slogan_visibility:is(on)',
                'section'     => 'search_page'
            ),

            /**  breadcrubms settings.  **/
            array(
                'id'          => 'nt_conversi_bread',
                'label'       => esc_html__( 'Blog page breadcrubms visibility', 'nt-conversi' ),
                'desc'        => sprintf( esc_html__( 'Breadcrubms visibility %s or %s.', 'nt-conversi' ), '<code>on</code>', '<code>off</code>' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'breadcrubms',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_blogbreadcrubmscolor',
                'label'       => esc_html__( 'Blog page breadcrubms color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'condition'   => 'nt_conversi_bread:is(on)',
                'section'     => 'breadcrubms'
            ),
            array(
                'id'          => 'nt_conversi_blogbreadcrubmshovercolor',
                'label'       => esc_html__( 'Blog page breadcrubms hover color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'condition'   => 'nt_conversi_bread:is(on)',
                'section'     => 'breadcrubms'
            ),
            array(
                'id'          => 'nt_conversi_blogbreadcrubmscurrentcolor',
                'label'       => esc_html__( 'Blog page breadcrubms current page text color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'condition'   => 'nt_conversi_bread:is(on)',
                'section'     => 'breadcrubms'
            ),
            array(
                'id'          => 'nt_conversi_bread_f_s',
                'label'       => esc_html__('Breadcrubms font size', 'nt-conversi' ),
                'desc'        => esc_html__( 'Blog/page hero breadcrubms font size', 'nt-conversi' ),
                'type'        => 'numeric-slider',
                'std		 '=> '18',
                'min_max_step'=> '0,100',
                'section'     => 'breadcrubms',
                'condition'   => 'nt_conversi_bread:is(on)',
                'operator'    => 'and'
            ),

            /**  footer settings.  **/
            /**  footer settings.  **/
            array(
                'id'          => 'nt_conversi_footer_template_generaltab',
                'label'       => esc_html__( 'Footer Template', 'nt-conversi' ),
                'type'        => 'tab',
                'section'     => 'copyright'
            ),
            array(
                'id' => 'nt_conversi_footer_template_type',
                'label' => esc_html__( 'Footer Template Type', 'nt-conversi' ),
                'std' => 'default',
                'type' => 'select',
                'section' => 'copyright',
                'operator' => 'and',
                'choices' =>  array(
                    array(
                        'value' => 'default',
                        'label' => esc_html__( 'Default', 'nt-conversi' )
                    ),
                    array(
                        'value' => 'page',
                        'label' => esc_html__( 'Page Content', 'nt-conversi' )
                    ),
                    array(
                        'value' => 'custom',
                        'label' => esc_html__( 'Shortcode or Custom HTML', 'nt-conversi' )
                    ),
                )
            ),
            array(
                'id' => 'nt_conversi_footer_custom_template',
                'label' => esc_html__( 'Custom Page Template', 'nt-conversi' ),
                'desc' => esc_html__( 'You can use your custom page instead of the default footer template.', 'nt-conversi' ),
                'type' => 'page-select',
                'section' => 'copyright',
                'condition' => 'nt_conversi_footer_template_type:is(page)',
                'operator' => 'and'
            ),
            array(
                'id' => 'nt_conversi_footer_custom_html',
                'label' => esc_html__( 'Custom HTML or Shortcode', 'nt-conversi' ),
                'desc' => esc_html__( 'Copy paste your shortcode here.', 'nt-conversi' ),
                'type' => 'textarea',
                'section' => 'copyright',
                'condition' => 'nt_conversi_footer_template_type:is(custom)',
                'operator' => 'and'
            ),
            array(
                'id' => 'nt_conversi_widgetize_footer_info',
                'label' => esc_html__( 'Note: After creating your own custom footer area in a new page, save your page and select the page you created from this list.', 'nt-conversi' ),
                'type' => 'textblock-titled',
                'section' => 'copyright',
                'condition' => 'nt_conversi_footer_template_type:is(page)',
                'operator' => 'or'
            ),
            /**  footer settings.  **/
            array(
                'id'          => 'nt_conversi_footerfw_generaltab',
                'label'       => esc_html__( 'Footer Widgetarea', 'nt-conversi' ),
                'type'        => 'tab',
                'section'     => 'copyright'
            ),
            array(
                'id'          => 'nt_conversi_widgetize',
                'label'       => esc_html__( 'Footer widgetize area section display', 'nt-conversi' ),
                'desc'        => sprintf( esc_html__( 'Choose footer widgetize section %s or %s.', 'nt-conversi' ), '<code>on</code>', '<code>off</code>' ),
                'std'         => 'off',
                'type'        => 'on-off',
                'section'     => 'copyright',
                'condition' => 'nt_conversi_footer_template_type:is(default)',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_use_custom_footer_widget',
                'label'       => esc_html__( 'Use custom footer widget ?', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select yes, if you want to use custom widget column.', 'nt-conversi' ),
                'type'        => 'radio',
                'std'         => 'no',
                'section'     => 'copyright',
                'condition'   => 'nt_conversi_footer_template_type:is(default),nt_conversi_widgetize:is(on)',
                'choices'     => array(
                    array(
                        'value'  => 'yes',
                        'label'  => esc_html__( 'Yes', 'nt-conversi' ),
                    ),
                    array(
                        'value'  => 'no',
                        'label'  => esc_html__( 'No', 'nt-conversi' ),
                    )
                )
            ),
            array(
                'id'          => 'nt_conversi_fw_widget',
                'label'       => esc_html__( 'Create custom footer widget', 'nt-conversi' ),
                'desc'        => esc_html__( 'You can create your custom widget with custom column.', 'nt-conversi' ),
                'type'        => 'list-item',
                'section'     => 'copyright',
                'class'     => 'not-sortable',
                'condition'   => 'nt_conversi_footer_template_type:is(default),nt_conversi_widgetize:is(on),nt_conversi_use_custom_footer_widget:is(yes)',
                'settings'    => array(
                    array(
                        'id'          => 'name',
                        'label'       => esc_html__( 'Name', 'nt-conversi' ),
                        'desc'        => esc_html__( 'Enter custom widget area name here.Example:Custom widget 1', 'nt-conversi' ),
                        'type'        => 'text',
                        'std'        => 'Name'
                    ),
                    array(
                        'id'          => 'colmd',
                        'label'       => esc_html__( 'Desktop column', 'nt-conversi' ),
                        'desc'        => esc_html__( 'Enter simple number.min:1 max:12', 'nt-conversi' ),
                        'type'        => 'text',
                        'std'        => '3'
                    ),
                    array(
                        'id'          => 'colsm',
                        'label'       => esc_html__( 'Tablet column', 'nt-conversi' ),
                        'desc'        => esc_html__( 'Enter simple number.min:1 max:12', 'nt-conversi' ),
                        'type'        => 'text',
                        'std'        => '6'
                    ),
                )
            ),

            array(
                'id'          => 'nt_conversi_footerwidgetizepadding',
                'label'       => esc_html__( 'Footer widgetize padding top and botom', 'nt-conversi' ),
                'desc'        => esc_html__( 'Enter padding top and botom for widgetize footer', 'nt-conversi' ),
                'type'        => 'numeric-slider',
                'std'		  => '40',
                'min_max_step'=> '0,250',
                'condition'   => 'nt_conversi_footer_template_type:is(default),nt_conversi_widgetize:is(on)',
                'section'     => 'copyright',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_footerwidgetizebgcolor',
                'label'       => esc_html__( 'Footer widgetize background color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'condition'   => 'nt_conversi_footer_template_type:is(default),nt_conversi_widgetize:is(on)',
                'section'     => 'copyright',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_footer_h_c',
                'label'       => esc_html__( 'Widget heading color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'condition'   => 'nt_conversi_footer_template_type:is(default),nt_conversi_widgetize:is(on)',
                'section'     => 'copyright',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_footer_t_c',
                'label'       => esc_html__( 'Widget text color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'condition'   => 'nt_conversi_footer_template_type:is(default),nt_conversi_widgetize:is(on)',
                'section'     => 'copyright',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_footer_a_c',
                'label'       => esc_html__( 'Widget link color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'condition'   => 'nt_conversi_footer_template_type:is(default),nt_conversi_widgetize:is(on)',
                'section'     => 'copyright',
                'operator'    => 'and'
            ),
            /**  footer settings.  **/
            array(
                'id'          => 'nt_conversi_footer_generaltab',
                'label'       => esc_html__( 'Copyright General', 'nt-conversi' ),
                'type'        => 'tab',
                'section'     => 'copyright'
            ),
            array(
                'id'          => 'nt_conversi_defaultfooter_visibility',
                'label'       => esc_html__( 'Default footer section display', 'nt-conversi' ),
                'desc'        => sprintf( esc_html__( 'Choose footer widgetize section %s or %s.', 'nt-conversi' ), '<code>on</code>', '<code>off</code>' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'copyright',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_footerbgcolor',
                'label'       => esc_html__( 'Footer background color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'copyright',
                'condition'   => 'nt_conversi_footer_template_type:is(default),nt_conversi_defaultfooter_visibility:is(on)',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_footercopyrightpadding',
                'label'       => esc_html__( 'Footer copyright padding top and botom', 'nt-conversi' ),
                'desc'        => esc_html__( 'Enter padding top and botom for footer copyright', 'nt-conversi' ),
                'type'        => 'numeric-slider',
                'std'		  => '30',
                'min_max_step'=> '0,250',
                'condition'   => 'nt_conversi_footer_template_type:is(default),nt_conversi_defaultfooter_visibility:is(on)',
                'section'     => 'copyright',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_copyright_visibility',
                'label'       => esc_html__( 'Footer powered section', 'nt-conversi' ),
                'desc'        => sprintf( esc_html__( 'Choose footer powered section %s or %s.', 'nt-conversi' ), '<code>on</code>', '<code>off</code>' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'copyright',
                'condition'   => 'nt_conversi_footer_template_type:is(default),nt_conversi_defaultfooter_visibility:is(on)',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_copyright',
                'label'       => esc_html__( 'Footer copyright', 'nt-conversi' ),
                'std'         => esc_html__( 'Ninetheme conversi. All rights reserved', 'nt-conversi' ),
                'type'        => 'textarea',
                'condition'   => 'nt_conversi_footer_template_type:is(default),nt_conversi_defaultfooter_visibility:is(on),nt_conversi_copyright_visibility:is(on)',
                'section'     => 'copyright'
            ),
            array(
                'id'          => 'nt_conversi_footer_p_c',
                'label'       => esc_html__( 'Footer copyright text color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'condition'   => 'nt_conversi_footer_template_type:is(default),nt_conversi_defaultfooter_visibility:is(on),nt_conversi_copyright_visibility:is(on)',
                'section'     => 'copyright',
                'operator'    => 'and'
            ),
            // copyright
            array(
                'id'          => 'nt_conversi_footer_social_tab',
                'label'       => esc_html__( 'Copyright Social', 'nt-conversi' ),
                'type'        => 'tab',
                'section'     => 'copyright'
            ),
            array(
                'id'          => 'nt_conversi_social_section',
                'label'       => esc_html__( 'Social section visibility ', 'nt-conversi' ),
                'desc'        => sprintf( esc_html__( 'Choose social section visibility %s or %s.', 'nt-conversi' ), '<code>on</code>', '<code>off</code>' ),
                'std'         => 'on',
                'type'        => 'on-off',
                'section'     => 'copyright',
                'condition'   => 'nt_conversi_footer_template_type:is(default),nt_conversi_defaultfooter_visibility:is(on)',
                'operator'    => 'and'
            ),
            array(
                'id'          => 'nt_conversi_social',
                'label'       => esc_html__( 'Footer social icons', 'nt-conversi' ),
                'desc'        => esc_html__( 'Footer social icons', 'nt-conversi' ),
                'type'        => 'list-item',
                'section'     => 'copyright',
                'condition'   => 'nt_conversi_footer_template_type:is(default),nt_conversi_defaultfooter_visibility:is(on),nt_conversi_social_section:is(on)',
                'settings'    => array(
                    array(
                        'id'          => 'nt_conversi_social_text',
                        'label'       => esc_html__( 'Social icon name', 'nt-conversi' ),
                        'desc'        => esc_html__( 'Enter icon name. example : fa fa-facebook', 'nt-conversi' ),
                        'type'        => 'text'
                    ),
                    array(
                        'id'          => 'nt_conversi_social_link',
                        'label'       => esc_html__( 'Url', 'nt-conversi' ),
                        'desc'        => esc_html__( 'Enter a url for social media', 'nt-conversi' ),
                        'type'        => 'text'
                    ),
                    array(
                        'id'          => 'nt_conversi_social_class',
                        'label'       => esc_html__( 'Social icon class name', 'nt-conversi' ),
                        'desc'        => esc_html__( 'Use simple social media name for bg color. example : facebook, twitter, pinterest and etc.', 'nt-conversi' ),
                        'type'        => 'text'
                    ),
                )
            ),
            array(
                'id'          => 'nt_conversi_social_target',
                'label'       => esc_html__( 'Target social media', 'nt-conversi' ),
                'desc'        => esc_html__( 'Select social media target type. default : _blank' , 'nt-conversi' ),
                'std'         => '_blank',
                'type'        => 'select',
                'section'     => 'copyright',
                'condition'   => 'nt_conversi_footer_template_type:is(default),nt_conversi_defaultfooter_visibility:is(on),nt_conversi_social_section:is(on)',
                'operator'    => 'and',
                'choices'     => array(
                    array(
                        'value'       => '_blank',
                        'label'       => esc_html__( '_blank', 'nt-conversi' )
                    ),
                    array(
                        'value'       => '_self',
                        'label'       => esc_html__( '_self', 'nt-conversi' )
                    ),
                    array(
                        'value'       => '_parent',
                        'label'       => esc_html__( '_parent', 'nt-conversi' )
                    ),
                    array(
                        'value'       => '_top',
                        'label'       => esc_html__( '_top', 'nt-conversi' )
                    ),
                )
            ),
            array(
                'id'          => 'nt_conversi_footer_s_bgc',
                'label'       => esc_html__( 'Footer social bg color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'copyright',
                'condition'   => 'nt_conversi_footer_template_type:is(default),nt_conversi_defaultfooter_visibility:is(on),nt_conversi_social_section:is(on)',
                'operator'    => 'and',
            ),
            array(
                'id'          => 'nt_conversi_footer_s_hbgc',
                'label'       => esc_html__( 'Footer social bg hover color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'copyright',
                'condition'   => 'nt_conversi_footer_template_type:is(default),nt_conversi_defaultfooter_visibility:is(on),nt_conversi_social_section:is(on)',
                'operator'    => 'and',
            ),
            array(
                'id'          => 'nt_conversi_footer_s_ic',
                'label'       => esc_html__( 'Footer social icon color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'copyright',
                'condition'   => 'nt_conversi_footer_template_type:is(default),nt_conversi_defaultfooter_visibility:is(on),nt_conversi_social_section:is(on)',
                'operator'    => 'and',
            ),
            array(
                'id'          => 'nt_conversi_footer_s_hic',
                'label'       => esc_html__( 'Footer social icon hover color', 'nt-conversi' ),
                'desc'        => esc_html__( 'Please select color', 'nt-conversi' ),
                'type'        => 'colorpicker',
                'section'     => 'copyright',
                'condition'   => 'nt_conversi_footer_template_type:is(default),nt_conversi_defaultfooter_visibility:is(on),nt_conversi_social_section:is(on)',
                'operator'    => 'and',
            ),

            // google maps
            array(
                'id'          => 'nt_conversi_map_api_key',
                'label'       =>  esc_html__( 'Google maps api key', 'nt-conversi' ),
                'desc'        =>  esc_html__( 'You must create an api key and paste this box. create :https://developers.google.com/maps/documentation/javascript/get-api-key#key ', 'nt-conversi' ),
                'type'        => 'text',
                'section'     => 'maps'
            ),
            array(
                'id'          => 'nt_conversi_longitude',
                'label'       => esc_html__( 'Google maps longitude', 'nt-conversi' ),
                'type'        => 'text',
                'section'     => 'maps'
            ),
            array(
                'id'          => 'nt_conversi_latitude',
                'label'       => esc_html__( 'Google maps latitude', 'nt-conversi' ),
                'type'        => 'text',
                'section'     => 'maps'
            ),

        ) // end array

    ); // end function

    /* allow settings to be filtered before saving */
    $nt_conversi_custom_settings = apply_filters( ot_settings_id() . '_args', $nt_conversi_custom_settings );

    /* settings are not the same update the db */
    if ( $nt_conversi_saved_settings !== $nt_conversi_custom_settings ) {
        update_option( ot_settings_id(), $nt_conversi_custom_settings );
    }

    /* lets optiontree know the ui builder is being overridden */
    global $ot_has_custom_theme_options;
    $ot_has_custom_theme_options = true;

}
