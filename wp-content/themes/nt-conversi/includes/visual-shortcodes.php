<?php

/*-----------------------------------------------------------------------------------*/
/*	Shortcode Filter
/*-----------------------------------------------------------------------------------*/
// Filter to replace default css class names for vc_row shortcode and vc_column
add_filter( 'vc_shortcodes_css_class', 'nt_conversi_custom_css_classes_for_vc_row_and_vc_column', 10, 2 );
function nt_conversi_custom_css_classes_for_vc_row_and_vc_column( $class_string, $tag ) {
    if (  $tag == 'vc_row_inner' ) {
        $class_string = str_replace( 'vc_row-fluid', 'container bootstrap', $class_string ); // This will replace "vc_row-fluid" with "my_row-fluid"
    }
    return $class_string; // Important: you should always return modified or original $class_string
}

vc_set_as_theme( $disable_updater = false );
vc_is_updater_disabled();

//FOR ROW EXTRA ATTR
$nt_conversi_background_one_attributes = array(
    array(
        'type' => 'dropdown',
        'heading' => esc_html__('Background position Y-X axis', 'nt-conversi' ),
        'param_name' => 'nt_conversi_bg_position',
        'description' => esc_html__('Change position Y-X axis for bg image.', 'nt-conversi'),
        'group' => esc_html__('Design Options','nt-conversi'),
        'value' => array(
            esc_html__('Select Y-X position', 'nt-conversi' ) => '',
            esc_html__('Left-Top', 		'nt-conversi' ) => 'left top',
            esc_html__('Left-Center', 'nt-conversi' ) => 'left center',
            esc_html__('Left-Bottom', 'nt-conversi' ) => 'left bottom',
            esc_html__('Right-Top', 'nt-conversi' ) => 'right top',
            esc_html__('Right-Center', 'nt-conversi' ) => 'right center',
            esc_html__('Right-Bottom', 'nt-conversi' ) => 'right bottom',
            esc_html__('Center-Top', 'nt-conversi' ) => 'center top',
            esc_html__('Center-Center', 'nt-conversi' ) => 'center center',
            esc_html__('Center-Bottom', 'nt-conversi' ) => 'center bottom',
            esc_html__('Custom', 		'nt-conversi' ) => 'custom',
        ),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Background position Y axis', 'nt-conversi'),
        'param_name' => 'nt_conversi_bg_positiony',
        'description' => esc_html__('Change position X axis offset for bg image.example: center or 40px or 25% ...etc', 'nt-conversi'),
        'group' => esc_html__('Design Options','nt-conversi'),
        'dependency' => array(
            'element' => 'nt_conversi_bg_position',
            'value' => 'custom'
        )
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Background position X axis', 'nt-conversi'),
        'param_name' => 'nt_conversi_bg_positionx',
        'description' => esc_html__('Change position X axis offset for bg image.example: center or 40px or 25% ...etc', 'nt-conversi'),
        'group' => esc_html__('Design Options','nt-conversi'),
        'dependency' => array(
            'element' => 'nt_conversi_bg_position',
            'value' => 'custom'
        )
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Background position X axis offset', 'nt-conversi'),
        'param_name' => 'nt_conversi_bg_xoffset',
        'description' => esc_html__('Change position X axis offset for bg image.example: 40px or 25% ...etc', 'nt-conversi'),
        'group' => esc_html__('Design Options','nt-conversi'),
        'dependency' => array(
            'element' => 'nt_conversi_bg_position',
            'value' => 'custom'
        )
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Background size', 'nt-conversi'),
        'param_name' => 'nt_conversi_bg_size',
        'description' => esc_html__('Change size for bg image.example: 100px or 100% or 100vh', 'nt-conversi'),
        'group' => esc_html__('Design Options','nt-conversi'),
    ),
    array(
        'type' => 'checkbox',
        'heading' => esc_html__('Background image display ( 992px )', 'nt-conversi' ),
        'param_name' => 'nt_conversi_bg_ontablet',
        'value' => array(
            'Hide background image'=>'hide',
        ), //value
        'std' => '',
        'description' => esc_html__('This option to hide the row background image below 992px', 'nt-conversi'),
        'group' => esc_html__('Design Options','nt-conversi'),
    ),
    array(
        'type' => 'checkbox',
        'heading' => esc_html__('Background image display ( 768px )', 'nt-conversi' ),
        'param_name' => 'nt_conversi_bg_onmobile',
        'value' => array(
            'Hide background image'=>'hide',
        ), //value
        'std' => '',
        'description' => esc_html__('This option to hide the row background image below 768px', 'nt-conversi'),
        'group' => esc_html__('Design Options','nt-conversi'),
    ),
    array(
        'type' => 'checkbox',
        'heading' => esc_html__('Background image display ( 480px )', 'nt-conversi' ),
        'param_name' => 'nt_conversi_bg_onphone',
        'value' => array(
            'Hide background image'=>'hide',
        ), //value
        'std' => '',
        'description' => esc_html__('This option to hide the row background image below 480px', 'nt-conversi'),
        'group' => esc_html__('Design Options','nt-conversi'),
    ),
);
vc_add_params( 'vc_row', $nt_conversi_background_one_attributes );

//FOR ROW 480 RESOLUTION
$nt_conversi_vc_row_responsive_attributes = array(

    array(
        'type' => 'checkbox',
        'heading' => esc_html__('Add container ?', 'nt-conversi'),
        'param_name' => 'nt_conversi_container_display',
        'weight' => 1,
        'value' => array(
            'Add container'=>'true',
        ), //value
        'std' => '',
        'description' => esc_html__('This option is only for Row stretch : Default and Row stretch : Stretch row.', 'nt-conversi')
    ),

    array(
        'type' => 'css_editor',
        'heading' => esc_html__( 'Max width 992px resolution', 'nt-conversi' ),
        'param_name' => 'nt_conversi_vc_row_992_responsive',
        'description' => esc_html__( 'These options for 992px resolution - responsive medya', 'nt-conversi' ),
        'group' => esc_html__('Responsive Extra','nt-conversi'),
    ),
    array(
        'type' => 'css_editor',
        'heading' => esc_html__( 'Max width 768px resolution', 'nt-conversi' ),
        'param_name' => 'nt_conversi_vc_row_768_responsive',
        'description' => esc_html__( 'These options for 768px resolution - responsive medya', 'nt-conversi' ),
        'group' => esc_html__('Responsive Extra','nt-conversi'),
    ),
    array(
        'type' => 'css_editor',
        'heading' => esc_html__( 'Max width 480px resolution', 'nt-conversi' ),
        'param_name' => 'nt_conversi_vc_row_480_responsive',
        'description' => esc_html__( 'These options for 480px resolution - responsive medya', 'nt-conversi' ),
        'group' => esc_html__('Responsive Extra','nt-conversi'),
    ),

);
vc_add_params( 'vc_row', $nt_conversi_vc_row_responsive_attributes );

//FOR ROW EXTRA 3 OVERLAY ATTR
$nt_conversi_row_overlay_attributes = array(
    //OVERLAY 1
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Overlay Color', 'nt-conversi'),
        'param_name' => 'overlaybg',
        'description' => esc_html__('Add color.', 'nt-conversi'),
        'group' => esc_html__('Overlay 1','nt-conversi'),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Width', 'nt-conversi'),
        'param_name' => 'overlaywidth',
        'description' => esc_html__('Add width.example:100% or 75%....etc.', 'nt-conversi'),
        'group' => esc_html__('Overlay 1','nt-conversi'),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Height', 'nt-conversi'),
        'param_name' => 'overlayheight',
        'description' => esc_html__('Add width.example:100% or 75%....etc.', 'nt-conversi'),
        'group' => esc_html__('Overlay 1','nt-conversi'),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Top offset', 'nt-conversi'),
        'param_name' => 'overlaytop',
        'description' => esc_html__('Add Top offset for top position.example:10px or 10%.', 'nt-conversi'),
        'group' => esc_html__('Overlay 1','nt-conversi'),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Left offset', 'nt-conversi'),
        'param_name' => 'overlayleft',
        'description' => esc_html__('Add left offset for left position.example:10px or 10%.', 'nt-conversi'),
        'group' => esc_html__('Overlay 1','nt-conversi'),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Right offset', 'nt-conversi'),
        'param_name' => 'overlayright',
        'description' => esc_html__('Add right offset for right position.example:10px or 10%.', 'nt-conversi'),
        'group' => esc_html__('Overlay 1','nt-conversi'),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Bottom offset', 'nt-conversi'),
        'param_name' => 'overlaybottom',
        'description' => esc_html__('Add bottom offset for bottom position.example:10px or 10%.', 'nt-conversi'),
        'group' => esc_html__('Overlay 1','nt-conversi'),
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__('Display under 992px', 'nt-conversi' ),
        'param_name' => 'overlay992',
        'description' => esc_html__('You can select show or hide overlay and underlay color maximum device width 992px', 'nt-conversi' ),
        'group' => esc_html__('Overlay 1', 'nt-conversi' ),
        'value' => array(
            esc_html__('Select position', 'nt-conversi' ) => '',
            esc_html__('Show', 'nt-conversi' ) => 'show',
            esc_html__('Hide', 'nt-conversi' ) => 'hide',
        ),
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__('Display under 768px', 'nt-conversi' ),
        'param_name' => 'overlay768',
        'description' => esc_html__('You can select show or hide overlay and underlay color maximum device width 768px', 'nt-conversi' ),
        'group' => esc_html__('Overlay 1', 'nt-conversi' ),
        'value' => array(
            esc_html__('Select position', 'nt-conversi' ) => '',
            esc_html__('Show', 'nt-conversi' ) => 'show',
            esc_html__('Hide', 'nt-conversi' ) => 'hide',
        ),
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__('Display under 480px', 'nt-conversi' ),
        'param_name' => 'overlay480',
        'description' => esc_html__('You can select show or hide overlay and underlay color maximum device width 480px', 'nt-conversi' ),
        'group' => esc_html__('Overlay 1', 'nt-conversi' ),
        'value' => array(
            esc_html__('Select position', 'nt-conversi' ) => '',
            esc_html__('Show', 'nt-conversi' ) => 'show',
            esc_html__('Hide', 'nt-conversi' ) => 'hide',
        ),
    ),
    //OVERLAY 2
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Overlay Color', 'nt-conversi'),
        'param_name' => 'overlaybg2',
        'description' => esc_html__('Add color.', 'nt-conversi'),
        'group' => esc_html__('Overlay 2','nt-conversi'),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Width', 'nt-conversi'),
        'param_name' => 'overlaywidth2',
        'description' => esc_html__('Add width.example:100% or 75%....etc.', 'nt-conversi'),
        'group' => esc_html__('Overlay 2','nt-conversi'),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Height', 'nt-conversi'),
        'param_name' => 'overlayheight2',
        'description' => esc_html__('Add width.example:100% or 75%....etc.', 'nt-conversi'),
        'group' => esc_html__('Overlay 2','nt-conversi'),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Top offset', 'nt-conversi'),
        'param_name' => 'overlaytop2',
        'description' => esc_html__('Add Top offset for top position.example:10px or 10%.', 'nt-conversi'),
        'group' => esc_html__('Overlay 2','nt-conversi'),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Left offset', 'nt-conversi'),
        'param_name' => 'overlayleft2',
        'description' => esc_html__('Add left offset for left position.example:10px or 10%.', 'nt-conversi'),
        'group' => esc_html__('Overlay 2','nt-conversi'),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Right offset', 'nt-conversi'),
        'param_name' => 'overlayright2',
        'description' => esc_html__('Add right offset for right position.example:10px or 10%.', 'nt-conversi'),
        'group' => esc_html__('Overlay 2','nt-conversi'),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Bottom offset', 'nt-conversi'),
        'param_name' => 'overlaybottom2',
        'description' => esc_html__('Add bottom offset for bottom position.example:10px or 10%.', 'nt-conversi'),
        'group' => esc_html__('Overlay 2','nt-conversi'),
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__('Display under 992px', 'nt-conversi' ),
        'param_name' => 'overlay2_992',
        'description' => esc_html__('You can select show or hide overlay and underlay color maximum device width 992px', 'nt-conversi' ),
        'group' => esc_html__('Overlay 2', 'nt-conversi' ),
        'value' => array(
            esc_html__('Select position', 'nt-conversi' ) => '',
            esc_html__('Show', 'nt-conversi' ) => 'show',
            esc_html__('Hide', 'nt-conversi' ) => 'hide',
        ),
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__('Display under 768px', 'nt-conversi' ),
        'param_name' => 'overlay2_768',
        'description' => esc_html__('You can select show or hide overlay and underlay color maximum device width 768px', 'nt-conversi' ),
        'group' => esc_html__('Overlay 2', 'nt-conversi' ),
        'value' => array(
            esc_html__('Select position', 'nt-conversi' ) => '',
            esc_html__('Show', 'nt-conversi' ) => 'show',
            esc_html__('Hide', 'nt-conversi' ) => 'hide',
        ),
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__('Display under 480px', 'nt-conversi' ),
        'param_name' => 'overlay2_480',
        'description' => esc_html__('You can select show or hide overlay and underlay color maximum device width 480px', 'nt-conversi' ),
        'group' => esc_html__('Overlay 2', 'nt-conversi' ),
        'value' => array(
            esc_html__('Select position', 'nt-conversi' ) => '',
            esc_html__('Show', 'nt-conversi' ) => 'show',
            esc_html__('Hide', 'nt-conversi' ) => 'hide',
        ),
    ),
);
vc_add_params( 'vc_row', $nt_conversi_row_overlay_attributes );

//FOR COLUMN
$nt_conversi_vc_column_responsive_attributes = array(

    array(
        'type' => 'css_editor',
        'heading' => esc_html__( 'Max width 992px resolution', 'nt-conversi' ),
        'param_name' => 'nt_conversi_vc_column_992',
        'description' => esc_html__( 'These options for 992px resolution - responsive medya', 'nt-conversi' ),
        'group' => esc_html__('Responsive Extra','nt-conversi'),
    ),
    array(
        'type' => 'css_editor',
        'heading' => esc_html__( 'Max width 768px resolution', 'nt-conversi' ),
        'param_name' => 'nt_conversi_vc_column_768',
        'description' => esc_html__( 'These options for 768px resolution - responsive medya', 'nt-conversi' ),
        'group' => esc_html__('Responsive Extra','nt-conversi'),
    ),
    array(
        'type' => 'css_editor',
        'heading' => esc_html__( 'Max width 480px resolution', 'nt-conversi' ),
        'param_name' => 'nt_conversi_vc_column_480',
        'description' => esc_html__( 'These options for 480px resolution - responsive medya', 'nt-conversi' ),
        'group' => esc_html__('Responsive Extra','nt-conversi'),
    ),

);
vc_add_params( 'vc_column', $nt_conversi_vc_column_responsive_attributes );

//FOR COLUMN INNER
$nt_conversi_vc_column_inner_responsive_attributes = array(

    array(
        'type' => 'css_editor',
        'heading' => esc_html__( 'Max width 992px resolution', 'nt-conversi' ),
        'param_name' => 'nt_conversi_vc_colinner_992',
        'description' => esc_html__( 'These options for 992px resolution - responsive medya', 'nt-conversi' ),
        'group' => esc_html__('Responsive Extra','nt-conversi'),
    ),
    array(
        'type' => 'css_editor',
        'heading' => esc_html__( 'Max width 768px resolution', 'nt-conversi' ),
        'param_name' => 'nt_conversi_vc_colinner_768',
        'description' => esc_html__( 'These options for 768px resolution - responsive medya', 'nt-conversi' ),
        'group' => esc_html__('Responsive Extra','nt-conversi'),
    ),
    array(
        'type' => 'css_editor',
        'heading' => esc_html__( 'Max width 480px resolution', 'nt-conversi' ),
        'param_name' => 'nt_conversi_vc_colinner_480',
        'description' => esc_html__( 'These options for 480px resolution - responsive medya', 'nt-conversi' ),
        'group' => esc_html__('Responsive Extra','nt-conversi'),
    ),

);
vc_add_params( 'vc_column_inner', $nt_conversi_vc_column_inner_responsive_attributes );

/*-----------------------------------------------------------------------------------*/
/*	HERO 1 conversi
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'NT_Conversi_hero1_integrateWithVC' );
function NT_Conversi_hero1_integrateWithVC() {
    vc_map(
        array(
            "name" => esc_html__( "Hero Form 1", "nt-conversi" ),
            "base" => "nt_conversi_section_hero1",
            "category" => esc_html__( "NT Conversi", "nt-conversi"),
            "params" => array(
                //Section ID for scroll menu
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Section ID', 'nt-conversi' ),
                    'param_name' => 's_id',
                    'description' => esc_html__("Add Your Section ID for scroll", "nt-conversi"),
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Top menu display ( hide or show )', 'nt-conversi' ),
                    'param_name' => 'm_display',
                    'description' => esc_html__('You can select hide or show top header static menu', 'nt-conversi' ),
                    'value' => array(
                        esc_html__('Show', 'nt-conversi' ) => 'show',
                        esc_html__('Hide', 'nt-conversi' ) => 'hide',
                    ),
                ),
                array(
                    "type" => "attach_image",
                    "heading" => esc_html__("BG Parallax image", "nt-conversi"),
                    "param_name" => "bg_img",
                    "description" => esc_html__("Add your BG Parallax image", "nt-conversi"),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('BG color', 'nt-conversi' ),
                    'param_name' => 'secbgcolor',
                    'description' => esc_html__("Select color for background", "nt-conversi"),
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Overlay color display', 'nt-conversi' ),
                    'param_name' => 'o_display',
                    'description' => esc_html__('You can select hide or show overlay color on bg image', 'nt-conversi' ),
                    'value' => array(
                        esc_html__('Show', 'nt-conversi' ) => 'show',
                        esc_html__('Hide', 'nt-conversi' ) => 'hide',
                    ),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Overlay color', 'nt-conversi' ),
                    'param_name' => 'o_color',
                    'description' => esc_html__("Select color for overlay", "nt-conversi"),
                    'dependency' => array(
                        'element' => 'o_display',
                        'value' => 'show'
                    )
                ),
                //Section heading
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Heading display ( hide or show )', 'nt-conversi' ),
                    'param_name' => 'h_display',
                    'description' => esc_html__('You can select hide or show section heading all text', 'nt-conversi' ),
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                    'value' => array(
                        esc_html__('Show', 'nt-conversi' ) => 'show',
                        esc_html__('Hide', 'nt-conversi' ) => 'hide',
                    ),
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Heading', 'nt-conversi' ),
                    'param_name' => 's_heading',
                    'description' => esc_html__("Add heading for this section", "nt-conversi"),
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                    'dependency' => array(
                        'element' => 'h_display',
                        'value' => 'show'
                    )
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Heading Tag', 'nt-conversi' ),
                    'param_name' => 't_tag',
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                    'value' => array(
                        esc_html__('select a option', 'nt-conversi' ) => '',
                        esc_html__('H1', 'nt-conversi' ) => 'h1',
                        esc_html__('H2', 'nt-conversi' ) => 'h2',
                        esc_html__('H3', 'nt-conversi' ) => 'h3',
                        esc_html__('H4', 'nt-conversi' ) => 'h4',
                        esc_html__('H5', 'nt-conversi' ) => 'h5',
                        esc_html__('H6', 'nt-conversi' ) => 'h6',
                        esc_html__('span', 'nt-conversi' ) => 'span',
                        esc_html__('div', 'nt-conversi' ) => 'div',
                        esc_html__('p', 'nt-conversi' ) => 'p',
                    ),
                    'dependency' => array(
                        'element' => 'h_display',
                        'value' => 'show'
                    )
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Subtitle/slogan', 'nt-conversi' ),
                    'param_name' => 's_subtitle',
                    'description' => esc_html__("Add description for this section", "nt-conversi"),
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                    'dependency' => array(
                        'element' => 'h_display',
                        'value' => 'show'
                    )
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Subtitle Tag', 'nt-conversi' ),
                    'param_name' => 'st_tag',
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                    'value' => array(
                        esc_html__('select a option', 'nt-conversi' ) => '',
                        esc_html__('H1', 'nt-conversi' ) => 'h1',
                        esc_html__('H2', 'nt-conversi' ) => 'h2',
                        esc_html__('H3', 'nt-conversi' ) => 'h3',
                        esc_html__('H4', 'nt-conversi' ) => 'h4',
                        esc_html__('H5', 'nt-conversi' ) => 'h5',
                        esc_html__('H6', 'nt-conversi' ) => 'h6',
                        esc_html__('span', 'nt-conversi' ) => 'span',
                        esc_html__('div', 'nt-conversi' ) => 'div',
                        esc_html__('p', 'nt-conversi' ) => 'p',
                    ),
                    'dependency' => array(
                        'element' => 'h_display',
                        'value' => 'show'
                    )
                ),
                //Form heading
                array(
                    'type' => 'checkbox',
                    'param_name' => 'hide_form',
                    'heading' => esc_html__('Hide Form Section?', 'nt-conversi'),
                    'value' => array( esc_html__('Yes', 'nt-conversi') => 'yes' ),
                    'group' => esc_html__('Form', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Form heading', 'nt-conversi' ),
                    'param_name' => 'f_heading',
                    'description' => esc_html__("Add heading for form", "nt-conversi"),
                    'group' => esc_html__('Form', 'nt-conversi' ),
                    'dependency' => array(
                        'element' => 'hide_form',
                        'is_empty' => true
                    )
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Form Heading Tag', 'nt-conversi' ),
                    'param_name' => 'ft_tag',
                    'group' => esc_html__('Form', 'nt-conversi' ),
                    'value' => array(
                        esc_html__('select a option', 'nt-conversi' ) => '',
                        esc_html__('H1', 'nt-conversi' ) => 'h1',
                        esc_html__('H2', 'nt-conversi' ) => 'h2',
                        esc_html__('H3', 'nt-conversi' ) => 'h3',
                        esc_html__('H4', 'nt-conversi' ) => 'h4',
                        esc_html__('H5', 'nt-conversi' ) => 'h5',
                        esc_html__('H6', 'nt-conversi' ) => 'h6',
                        esc_html__('span', 'nt-conversi' ) => 'span',
                        esc_html__('div', 'nt-conversi' ) => 'div',
                        esc_html__('p', 'nt-conversi' ) => 'p',
                    ),
                    'dependency' => array(
                        'element' => 'hide_form',
                        'is_empty' => true
                    )
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Form description', 'nt-conversi' ),
                    'param_name' => 'f_desc',
                    'description' => esc_html__("Add description for form", "nt-conversi"),
                    'group' => esc_html__('Form', 'nt-conversi' ),
                    'dependency' => array(
                        'element' => 'hide_form',
                        'is_empty' => true
                    )
                ),
                array(
                    'type' => 'textarea_html',
                    'heading' => esc_html__('Contact form shortcode', 'nt-conversi' ),
                    'param_name' => 'content',
                    'description' => esc_html__("Add contact 7 form shortcode here", "nt-conversi"),
                    'group' => esc_html__('Form', 'nt-conversi' ),
                    'dependency' => array(
                        'element' => 'hide_form',
                        'is_empty' => true
                    )
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Form bottom description', 'nt-conversi' ),
                    'param_name' => 'fb_desc',
                    'description' => esc_html__("Add bottom description for form", "nt-conversi"),
                    'group' => esc_html__('Form', 'nt-conversi' ),
                    'dependency' => array(
                        'element' => 'hide_form',
                        'is_empty' => true
                    )
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Form BG color', 'nt-conversi' ),
                    'param_name' => 'bg_color',
                    'description' => esc_html__("Select color for Form background", "nt-conversi"),
                    'group' => esc_html__('Form', 'nt-conversi' ),
                    'dependency' => array(
                        'element' => 'hide_form',
                        'is_empty' => true
                    )
                ),
                //Hero features loop
                array(
                    'type' => 'param_group',
                    'heading' => esc_html__('Features item', 'nt-conversi' ),
                    'param_name' => 'h1loop',
                    'group' => esc_html__('Features', 'nt-conversi' ),
                    'params' => array(
                        array(
                            'type' => 'checkbox',
                            'param_name' => 'use_imgicon',
                            'heading' => esc_html__('Use Image Icon?', 'nt-conversi'),
                            'value' => array( esc_html__('Yes', 'nt-conversi') => 'yes' ),
                            'dependency' => array(
                                'element' => 'h_display',
                                'value' => 'show'
                            )
                        ),
                        array(
                            "type" => "textfield",
                            "heading" => esc_html__("Icon", "nt-conversi"),
                            "param_name" => "i_icon",
                            "description" => esc_html__("Add icon name for hero list item.", "nt-conversi"),
                            'dependency' => array(
                                'element' => 'use_imgicon',
                                'is_empty'  => true
                            )
                        ),
                        array(
                            "type" => "attach_image",
                            "heading" => esc_html__("Image icon", "nt-conversi"),
                            "param_name" => "imgicon",
                            "description" => esc_html__("Add your image icon", "nt-conversi"),
                            'dependency' => array(
                                'element' => 'use_imgicon',
                                'not_empty'  => true
                            )
                        ),
                        array(
                            "type" => "textfield",
                            "heading" => esc_html__("Title", "nt-conversi"),
                            "param_name" => "i_title",
                            "description" => esc_html__("Add title for hero list item.", "nt-conversi"),
                        ),
                        array(
                            'type' => 'dropdown',
                            'heading' => esc_html__('Title Tag', 'nt-conversi' ),
                            'param_name' => 'lt_tag',
                            'value' => array(
                                esc_html__('select a option', 'nt-conversi' ) => '',
                                esc_html__('H1', 'nt-conversi' ) => 'h1',
                                esc_html__('H2', 'nt-conversi' ) => 'h2',
                                esc_html__('H3', 'nt-conversi' ) => 'h3',
                                esc_html__('H4', 'nt-conversi' ) => 'h4',
                                esc_html__('H5', 'nt-conversi' ) => 'h5',
                                esc_html__('H6', 'nt-conversi' ) => 'h6',
                                esc_html__('span', 'nt-conversi' ) => 'span',
                                esc_html__('div', 'nt-conversi' ) => 'div',
                                esc_html__('p', 'nt-conversi' ) => 'p',
                            ),
                        ),
                        array(
                            "type" => "textarea",
                            "heading" => esc_html__("Detail", "nt-conversi"),
                            "param_name" => "i_desc",
                            "description" => esc_html__("Add detail for hero list item.", "nt-conversi"),
                        )
                    )
                )
            )
        )
    );
}
class NT_Conversi_section_hero1 extends WPBakeryShortCode {
}

/*-----------------------------------------------------------------------------------*/
/*	HERO 2 conversi
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'NT_Conversi_hero2_integrateWithVC' );
function NT_Conversi_hero2_integrateWithVC() {
    vc_map(
        array(
            "name" => esc_html__( "Hero Form 2", "nt-conversi" ),
            "base" => "nt_conversi_section_hero2",
            "category" => esc_html__( "NT Conversi", "nt-conversi"),
            "params" => array(
                //Section ID for scroll menu
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Section ID', 'nt-conversi' ),
                    'param_name' => 's_id',
                    'description' => esc_html__("Add Your Section ID for scroll", "nt-conversi"),
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Top menu display ( hide or show )', 'nt-conversi' ),
                    'param_name' => 'm_display',
                    'description' => esc_html__('You can select hide or show top header static menu', 'nt-conversi' ),
                    'value' => array(
                        esc_html__('Show', 'nt-conversi' ) => 'show',
                        esc_html__('Hide', 'nt-conversi' ) => 'hide',
                    ),
                ),
                array(
                    "type" => "attach_image",
                    "heading" => esc_html__("BG Parallax image", "nt-conversi"),
                    "param_name" => "bg_img",
                    "description" => esc_html__("Add your BG Parallax image", "nt-conversi"),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('BG color', 'nt-conversi' ),
                    'param_name' => 'secbgcolor',
                    'description' => esc_html__("Select color for background", "nt-conversi"),
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Overlay color display', 'nt-conversi' ),
                    'param_name' => 'o_display',
                    'description' => esc_html__('You can select hide or show overlay color on bg image', 'nt-conversi' ),
                    'value' => array(
                        esc_html__('Show', 'nt-conversi' ) => 'show',
                        esc_html__('Hide', 'nt-conversi' ) => 'hide',
                    ),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Overlay color', 'nt-conversi' ),
                    'param_name' => 'o_color',
                    'description' => esc_html__("Select color for overlay", "nt-conversi"),
                    'dependency' => array(
                        'element' => 'o_display',
                        'value' => 'show'
                    )
                ),
                //Section heading
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Heading display ( hide or show )', 'nt-conversi' ),
                    'param_name' => 'h_display',
                    'description' => esc_html__('You can select hide or show section heading all text', 'nt-conversi' ),
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                    'value' => array(
                        esc_html__('Show', 'nt-conversi' ) => 'show',
                        esc_html__('Hide', 'nt-conversi' ) => 'hide',
                    ),
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Heading', 'nt-conversi' ),
                    'param_name' => 's_heading',
                    'description' => esc_html__("Add heading for this section", "nt-conversi"),
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                    'dependency' => array(
                        'element' => 'h_display',
                        'value' => 'show'
                    )
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Subtitle/slogan', 'nt-conversi' ),
                    'param_name' => 's_desc',
                    'description' => esc_html__("Add description for this section", "nt-conversi"),
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                    'dependency' => array(
                        'element' => 'h_display',
                        'value' => 'show'
                    )
                ),
                array(
                    'type' => 'textarea_raw_html',
                    'heading' => esc_html__('Subtitle/slogan ( allow HTML )', 'nt-conversi' ),
                    'param_name' => 's_desc_raw',
                    'description' => esc_html__("Add description for this section", "nt-conversi"),
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                    'dependency' => array(
                        'element' => 'h_display',
                        'value' => 'show'
                    )
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Video URL', 'nt-conversi' ),
                    'param_name' => 'v_url',
                    'description' => esc_html__("Add youtube video url. example: https://www.youtube.com/embed/4ZawV1mXlS8?autoplay=1", "nt-conversi"),
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                ),
                array(
                    'type' => 'attach_image',
                    'heading' => esc_html__('Add image', 'nt-conversi' ),
                    'param_name' => 'img',
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                ),
                array(
                    'type' => 'vc_link',
                    'heading' => esc_html__('Add link to image', 'nt-conversi' ),
                    'param_name' => 'imglink',
                    'group' => esc_html__('Heading', 'nt-conversi'),
                ),
                //Form features loop
                array(
                    'type' => 'param_group',
                    'heading' => esc_html__('Features item', 'nt-conversi' ),
                    'param_name' => 'h2loop',
                    'group' => esc_html__('Form', 'nt-conversi' ),
                    'params' => array(
                        array(
                            "type" => "textfield",
                            "heading" => esc_html__("Icon", "nt-conversi"),
                            "param_name" => "i_icon",
                            "description" => esc_html__("Add icon name for hero list item.", "nt-conversi"),
                        ),
                        array(
                            "type" => "textarea",
                            "heading" => esc_html__("Detail", "nt-conversi"),
                            "param_name" => "i_desc",
                            "description" => esc_html__("Add detail for hero list item.", "nt-conversi"),
                        )
                    )
                ),
                array(
                    'type' => 'textarea_html',
                    'heading' => esc_html__('Contact form shortcode', 'nt-conversi' ),
                    'param_name' => 'content',
                    'description' => esc_html__("Add contact 7 form shortcode here", "nt-conversi"),
                    'group' => esc_html__('Form', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Form bottom description', 'nt-conversi' ),
                    'param_name' => 'fb_desc',
                    'description' => esc_html__("Add bottom description for form", "nt-conversi"),
                    'group' => esc_html__('Form', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textarea_raw_html',
                    'heading' => esc_html__('Form bottom description ( allow HTML )', 'nt-conversi' ),
                    'param_name' => 'f_desc_raw',
                    'description' => esc_html__("Add description for this section", "nt-conversi"),
                    'group' => esc_html__('Form', 'nt-conversi' ),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Form BG color', 'nt-conversi' ),
                    'param_name' => 'bg_color',
                    'description' => esc_html__("Select color for Form background", "nt-conversi"),
                    'group' => esc_html__('Form', 'nt-conversi' ),
                )
            )
        )
    );
}
class NT_Conversi_section_hero2 extends WPBakeryShortCode {
}

/*-----------------------------------------------------------------------------------*/
/*	HERO 3 conversi
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'NT_Conversi_hero3_integrateWithVC' );
function NT_Conversi_hero3_integrateWithVC() {
    vc_map(
        array(
            "name" => esc_html__( "Hero Form 3", "nt-conversi" ),
            "base" => "nt_conversi_section_hero3",
            "category" => esc_html__( "NT Conversi", "nt-conversi"),
            "params" => array(
                //Section ID for scroll menu
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Section ID', 'nt-conversi' ),
                    'param_name' => 's_id',
                    'description' => esc_html__("Add Your Section ID for scroll", "nt-conversi"),
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Top menu display ( hide or show )', 'nt-conversi' ),
                    'param_name' => 'm_display',
                    'description' => esc_html__('You can select hide or show top header static menu', 'nt-conversi' ),
                    'value' => array(
                        esc_html__('Show', 'nt-conversi' ) => 'show',
                        esc_html__('Hide', 'nt-conversi' ) => 'hide',
                    ),
                ),
                array(
                    "type" => "attach_image",
                    "heading" => esc_html__("BG Parallax image", "nt-conversi"),
                    "param_name" => "bg_img",
                    "description" => esc_html__("Add your BG Parallax image", "nt-conversi"),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('BG color', 'nt-conversi' ),
                    'param_name' => 'secbgcolor',
                    'description' => esc_html__("Select color for background", "nt-conversi"),
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Overlay color display', 'nt-conversi' ),
                    'param_name' => 'o_display',
                    'description' => esc_html__('You can select hide or show overlay color on bg image', 'nt-conversi' ),
                    'value' => array(
                        esc_html__('Show', 'nt-conversi' ) => 'show',
                        esc_html__('Hide', 'nt-conversi' ) => 'hide',
                    ),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Overlay color', 'nt-conversi' ),
                    'param_name' => 'o_color',
                    'description' => esc_html__("Select color for overlay", "nt-conversi"),
                    'dependency' => array(
                        'element' => 'o_display',
                        'value' => 'show'
                    )
                ),
                //Section heading
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Heading display ( hide or show )', 'nt-conversi' ),
                    'param_name' => 'h_display',
                    'description' => esc_html__('You can select hide or show section heading all text', 'nt-conversi' ),
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                    'value' => array(
                        esc_html__('Show', 'nt-conversi' ) => 'show',
                        esc_html__('Hide', 'nt-conversi' ) => 'hide',
                    ),
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Heading', 'nt-conversi' ),
                    'param_name' => 's_heading',
                    'description' => esc_html__("Add heading for this section", "nt-conversi"),
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                    'dependency' => array(
                        'element' => 'h_display',
                        'value' => 'show'
                    )
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Subtitle/slogan', 'nt-conversi' ),
                    'param_name' => 's_desc',
                    'description' => esc_html__("Add description for this section", "nt-conversi"),
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                    'dependency' => array(
                        'element' => 'h_display',
                        'value' => 'show'
                    )
                ),
                array(
                    "type" => "attach_image",
                    "heading" => esc_html__("Video background image", "nt-conversi"),
                    "param_name" => "vbg_img",
                    "description" => esc_html__("Add video background  image", "nt-conversi"),
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Video URL', 'nt-conversi' ),
                    'param_name' => 'v_url',
                    'description' => esc_html__("Add youtube video url. example: https://www.youtube.com/embed/4ZawV1mXlS8?autoplay=1", "nt-conversi"),
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Open Video Type', 'nt-conversi' ),
                    'param_name' => 'target',
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                    'value' => array(
                        esc_html__('Select', 'nt-conversi' ) => '',
                        esc_html__('Popup lightbox', 'nt-conversi' ) => 'popup',
                        esc_html__('New blank page', 'nt-conversi' ) => 'blank',
                    ),
                ),
                //Form features loop
                array(
                    'type' => 'param_group',
                    'heading' => esc_html__('Features item', 'nt-conversi' ),
                    'param_name' => 'h3loop',
                    'group' => esc_html__('Form', 'nt-conversi' ),
                    'params' => array(
                        array(
                            "type" => "textfield",
                            "heading" => esc_html__("Icon", "nt-conversi"),
                            "param_name" => "i_icon",
                            "description" => esc_html__("Add icon name for hero list item.", "nt-conversi"),
                        ),
                        array(
                            "type" => "textarea",
                            "heading" => esc_html__("Detail", "nt-conversi"),
                            "param_name" => "i_desc",
                            "description" => esc_html__("Add detail for hero list item.", "nt-conversi"),
                        )
                    )
                ),
                array(
                    'type' => 'textarea_html',
                    'heading' => esc_html__('Contact form shortcode', 'nt-conversi' ),
                    'param_name' => 'content',
                    'description' => esc_html__("Add contact 7 form shortcode here", "nt-conversi"),
                    'group' => esc_html__('Form', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Form bottom description', 'nt-conversi' ),
                    'param_name' => 'fb_desc',
                    'description' => esc_html__("Add bottom description for form", "nt-conversi"),
                    'group' => esc_html__('Form', 'nt-conversi' ),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Form BG color', 'nt-conversi' ),
                    'param_name' => 'bg_color',
                    'description' => esc_html__("Select color for Form background", "nt-conversi"),
                    'group' => esc_html__('Form', 'nt-conversi' ),
                )
            )
        )
    );
}
class NT_Conversi_section_hero3 extends WPBakeryShortCode {
}

/*-----------------------------------------------------------------------------------*/
/*	HERO 4 conversi
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'NT_Conversi_hero4_integrateWithVC' );
function NT_Conversi_hero4_integrateWithVC() {
    vc_map(
        array(
            "name" => esc_html__( "Hero Form 4", "nt-conversi" ),
            "base" => "nt_conversi_section_hero4",
            "category" => esc_html__( "NT Conversi", "nt-conversi"),
            "params" => array(
                //Section ID for scroll menu
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Section ID', 'nt-conversi' ),
                    'param_name' => 's_id',
                    'description' => esc_html__("Add Your Section ID for scroll", "nt-conversi"),
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Top menu display ( hide or show )', 'nt-conversi' ),
                    'param_name' => 'm_display',
                    'description' => esc_html__('You can select hide or show top header static menu', 'nt-conversi' ),
                    'value' => array(
                        esc_html__('Show', 'nt-conversi' ) => 'show',
                        esc_html__('Hide', 'nt-conversi' ) => 'hide',
                    ),
                ),
                array(
                    "type" => "attach_image",
                    "heading" => esc_html__("BG Parallax image", "nt-conversi"),
                    "param_name" => "bg_img",
                    "description" => esc_html__("Add your BG Parallax image", "nt-conversi"),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('BG color', 'nt-conversi' ),
                    'param_name' => 'secbgcolor',
                    'description' => esc_html__("Select color for background", "nt-conversi"),
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Overlay color display', 'nt-conversi' ),
                    'param_name' => 'o_display',
                    'description' => esc_html__('You can select hide or show overlay color on bg image', 'nt-conversi' ),
                    'value' => array(
                        esc_html__('Show', 'nt-conversi' ) => 'show',
                        esc_html__('Hide', 'nt-conversi' ) => 'hide',
                    ),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Overlay color', 'nt-conversi' ),
                    'param_name' => 'o_color',
                    'description' => esc_html__("Select color for overlay", "nt-conversi"),
                    'dependency' => array(
                        'element' => 'o_display',
                        'value' => 'show'
                    )
                ),
                //Section heading
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Heading display ( hide or show )', 'nt-conversi' ),
                    'param_name' => 'h_display',
                    'description' => esc_html__('You can select hide or show section heading all text', 'nt-conversi' ),
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                    'value' => array(
                        esc_html__('Show', 'nt-conversi' ) => 'show',
                        esc_html__('Hide', 'nt-conversi' ) => 'hide',
                    ),
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Heading', 'nt-conversi' ),
                    'param_name' => 's_heading',
                    'description' => esc_html__("Add heading for this section", "nt-conversi"),
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                    'dependency' => array(
                        'element' => 'h_display',
                        'value' => 'show'
                    )
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Subtitle/slogan', 'nt-conversi' ),
                    'param_name' => 's_desc',
                    'description' => esc_html__("Add description for this section", "nt-conversi"),
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                    'dependency' => array(
                        'element' => 'h_display',
                        'value' => 'show'
                    )
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Video URL', 'nt-conversi' ),
                    'param_name' => 'v_url',
                    'description' => esc_html__("Add youtube video url. example: https://www.youtube.com/embed/4ZawV1mXlS8?autoplay=1", "nt-conversi"),
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Open Video Type', 'nt-conversi' ),
                    'param_name' => 'target',
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                    'value' => array(
                        esc_html__('Select', 'nt-conversi' ) => '',
                        esc_html__('Popup lightbox', 'nt-conversi' ) => 'popup',
                        esc_html__('New blank page', 'nt-conversi' ) => 'blank',
                    ),
                ),
                //Form 4
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Form heading', 'nt-conversi' ),
                    'param_name' => 'f_heading',
                    'description' => esc_html__("Add heading for form", "nt-conversi"),
                    'group' => esc_html__('Form', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textarea_html',
                    'heading' => esc_html__('Contact form shortcode', 'nt-conversi' ),
                    'param_name' => 'content',
                    'description' => esc_html__("Add contact 7 form shortcode here", "nt-conversi"),
                    'group' => esc_html__('Form', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Form bottom description', 'nt-conversi' ),
                    'param_name' => 'fb_desc',
                    'description' => esc_html__("Add bottom description for form", "nt-conversi"),
                    'group' => esc_html__('Form', 'nt-conversi' ),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Form BG color', 'nt-conversi' ),
                    'param_name' => 'bg_color',
                    'description' => esc_html__("Select color for Form background", "nt-conversi"),
                    'group' => esc_html__('Form', 'nt-conversi' ),
                )
            )
        )
    );
}
class NT_Conversi_section_hero4 extends WPBakeryShortCode {
}

/*-----------------------------------------------------------------------------------*/
/*	HERO 5 conversi
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'NT_Conversi_hero5_integrateWithVC' );
function NT_Conversi_hero5_integrateWithVC() {
    vc_map(
        array(
            "name" => esc_html__( "Hero Form 5", "nt-conversi" ),
            "base" => "nt_conversi_section_hero5",
            "category" => esc_html__( "NT Conversi", "nt-conversi"),
            "params" => array(
                //Section ID for scroll menu
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Section ID', 'nt-conversi' ),
                    'param_name' => 's_id',
                    'description' => esc_html__("Add Your Section ID for scroll", "nt-conversi"),
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Top menu display ( hide or show )', 'nt-conversi' ),
                    'param_name' => 'm_display',
                    'description' => esc_html__('You can select hide or show top header static menu', 'nt-conversi' ),
                    'value' => array(
                        esc_html__('Show', 'nt-conversi' ) => 'show',
                        esc_html__('Hide', 'nt-conversi' ) => 'hide',
                    ),
                ),
                //Section heading
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Heading display ( hide or show )', 'nt-conversi' ),
                    'param_name' => 'h_display',
                    'description' => esc_html__('You can select hide or show section heading all text', 'nt-conversi' ),
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                    'value' => array(
                        esc_html__('Show', 'nt-conversi' ) => 'show',
                        esc_html__('Hide', 'nt-conversi' ) => 'hide',
                    )
                ),
                array(
                    'type' => 'checkbox',
                    'param_name' => 'customhtml',
                    'heading' => esc_html__('Use custom HTML content?', 'nt-conversi'),
                    'value' => array( esc_html__('Yes', 'nt-conversi') => 'yes' ),
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                    'dependency' => array(
                        'element' => 'h_display',
                        'value' => 'show'
                    )
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Subtitle/slogan', 'nt-conversi' ),
                    'param_name' => 's_subtitle',
                    'description' => esc_html__("Add subtitle for this section", "nt-conversi"),
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                    'dependency' => array(
                        'element' => 'customhtml',
                        'is_empty'  => true
                    )
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Heading', 'nt-conversi' ),
                    'param_name' => 's_heading',
                    'description' => esc_html__("Add heading for this section", "nt-conversi"),
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                    'dependency' => array(
                        'element' => 'customhtml',
                        'is_empty'  => true
                    )
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Description', 'nt-conversi' ),
                    'param_name' => 's_desc',
                    'description' => esc_html__("Add description for this section", "nt-conversi"),
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                    'dependency' => array(
                        'element' => 'customhtml',
                        'is_empty'  => true
                    )
                ),
                array(
                    'type' => 'textarea_raw_html',
                    'heading' => esc_html__('Custom HTML Area', 'nt-conversi' ),
                    'param_name' => 'customcontent',
                    'description' => esc_html__("Add your custom HTML content here.", "nt-conversi"),
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                    'dependency' => array(
                        'element' => 'customhtml',
                        'not_empty'  => true
                    )
                ),
                array(
                    'type' => 'vc_link',
                    'heading' => esc_html__('Button 1(Link)', 'nt-conversi' ),
                    'param_name' => 'btnlink1',
                    'group' => esc_html__('Heading', 'nt-conversi'),
                    'description' => esc_html__('Add custom button title and link', 'nt-conversi' ),
                ),
                array(
                    'type' => 'vc_link',
                    'heading' => esc_html__('Button 1(Link)', 'nt-conversi' ),
                    'param_name' => 'btnlink2',
                    'group' => esc_html__('Heading', 'nt-conversi'),
                    'description' => esc_html__('Add custom button title and link', 'nt-conversi' ),
                ),
                //Form features loop
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Form heading', 'nt-conversi' ),
                    'param_name' => 'f_heading',
                    'description' => esc_html__("Add heading for form", "nt-conversi"),
                    'group' => esc_html__('Form', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Form description', 'nt-conversi' ),
                    'param_name' => 'f_desc',
                    'description' => esc_html__("Add description for form", "nt-conversi"),
                    'group' => esc_html__('Form', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textarea_html',
                    'heading' => esc_html__('Contact form shortcode', 'nt-conversi' ),
                    'param_name' => 'content',
                    'description' => esc_html__("Add contact 7 form shortcode here", "nt-conversi"),
                    'group' => esc_html__('Form', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Form bottom description', 'nt-conversi' ),
                    'param_name' => 'fb_desc',
                    'description' => esc_html__("Add bottom description for form", "nt-conversi"),
                    'group' => esc_html__('Form', 'nt-conversi' ),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Form BG color', 'nt-conversi' ),
                    'param_name' => 'bg_color',
                    'description' => esc_html__("Select color for Form background", "nt-conversi"),
                    'group' => esc_html__('Form', 'nt-conversi' ),
                ),
                //Background CSS
                array(
                    'type' => 'css_editor',
                    'heading' => esc_html__('Background CSS', 'nt-conversi' ),
                    'param_name' => 'bgcss',
                    'group' => esc_html__('Background options', 'nt-conversi' ),
                ),
            )
        )
    );
}
class NT_Conversi_section_hero5 extends WPBakeryShortCode {
}

/*-----------------------------------------------------------------------------------*/
/*	HERO 6 conversi
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'NT_Conversi_hero6_integrateWithVC' );
function NT_Conversi_hero6_integrateWithVC() {
    vc_map(
        array(
            "name" => esc_html__( "Hero Form 6", "nt-conversi" ),
            "base" => "nt_conversi_section_hero6",
            "category" => esc_html__( "NT Conversi", "nt-conversi"),
            "params" => array(
                //Section ID for scroll menu
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Section ID', 'nt-conversi' ),
                    'param_name' => 's_id',
                    'description' => esc_html__("Add Your Section ID for scroll", "nt-conversi"),
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Top menu display ( hide or show )', 'nt-conversi' ),
                    'param_name' => 'm_display',
                    'description' => esc_html__('You can select hide or show top header static menu', 'nt-conversi' ),
                    'value' => array(
                        esc_html__('Show', 'nt-conversi' ) => 'show',
                        esc_html__('Hide', 'nt-conversi' ) => 'hide',
                    ),
                ),
                array(
                    "type" => "attach_image",
                    "heading" => esc_html__("BG Parallax image", "nt-conversi"),
                    "param_name" => "bg_img",
                    "description" => esc_html__("Add your BG Parallax image", "nt-conversi"),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Overlay color', 'nt-conversi' ),
                    'param_name' => 'secbgcolor',
                    'description' => esc_html__("Select color for overlay bg image", "nt-conversi"),
                ),
                //Section heading
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Heading display ( hide or show )', 'nt-conversi' ),
                    'param_name' => 'h_display',
                    'description' => esc_html__('You can select hide or show section heading all text', 'nt-conversi' ),
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                    'value' => array(
                        esc_html__('Show', 'nt-conversi' ) => 'show',
                        esc_html__('Hide', 'nt-conversi' ) => 'hide',
                    )
                ),
                array(
                    'type' => 'checkbox',
                    'param_name' => 'customhtml',
                    'heading' => esc_html__('Use custom HTML content?', 'nt-conversi'),
                    'value' => array( esc_html__('Yes', 'nt-conversi') => 'yes' ),
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                    'dependency' => array(
                        'element' => 'h_display',
                        'value' => 'show'
                    )
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Heading', 'nt-conversi' ),
                    'param_name' => 's_heading',
                    'description' => esc_html__("Add heading for this section", "nt-conversi"),
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                    'dependency' => array(
                        'element' => 'customhtml',
                        'is_empty'  => true
                    )
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Subtitle/slogan', 'nt-conversi' ),
                    'param_name' => 's_desc',
                    'description' => esc_html__("Add description for this section", "nt-conversi"),
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                    'dependency' => array(
                        'element' => 'customhtml',
                        'is_empty'  => true
                    )
                ),
                array(
                    'type' => 'textarea_raw_html',
                    'heading' => esc_html__('Custom HTML Area', 'nt-conversi' ),
                    'param_name' => 'customcontent',
                    'description' => esc_html__("Add your custom HTML content here.", "nt-conversi"),
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                    'dependency' => array(
                        'element' => 'customhtml',
                        'not_empty'  => true
                    )
                ),
                array(
                    "type" => "attach_image",
                    "heading" => esc_html__("Video background image", "nt-conversi"),
                    "param_name" => "vbg_img",
                    "description" => esc_html__("Add video background  image", "nt-conversi"),
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Video URL', 'nt-conversi' ),
                    'param_name' => 'v_url',
                    'description' => esc_html__("Add youtube video url. example: https://www.youtube.com/embed/4ZawV1mXlS8?autoplay=1", "nt-conversi"),
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Open Video Type', 'nt-conversi' ),
                    'param_name' => 'target',
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                    'value' => array(
                        esc_html__('Select', 'nt-conversi' ) => '',
                        esc_html__('Popup lightbox', 'nt-conversi' ) => 'popup',
                        esc_html__('New blank page', 'nt-conversi' ) => 'blank',
                    ),
                ),
                //Form
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Form heading', 'nt-conversi' ),
                    'param_name' => 'f_heading',
                    'description' => esc_html__("Add heading for form", "nt-conversi"),
                    'group' => esc_html__('Form', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Form description', 'nt-conversi' ),
                    'param_name' => 'f_desc',
                    'description' => esc_html__("Add description for form", "nt-conversi"),
                    'group' => esc_html__('Form', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textarea_html',
                    'heading' => esc_html__('Contact form shortcode', 'nt-conversi' ),
                    'param_name' => 'content',
                    'description' => esc_html__("Add contact 7 form shortcode here", "nt-conversi"),
                    'group' => esc_html__('Form', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Form bottom description', 'nt-conversi' ),
                    'param_name' => 'fb_desc',
                    'description' => esc_html__("Add bottom description for form", "nt-conversi"),
                    'group' => esc_html__('Form', 'nt-conversi' ),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Form BG color', 'nt-conversi' ),
                    'param_name' => 'bg_color',
                    'description' => esc_html__("Select color for Form background", "nt-conversi"),
                    'group' => esc_html__('Form', 'nt-conversi' ),
                )
            )
        )
    );
}
class NT_Conversi_section_hero6 extends WPBakeryShortCode {
}

/*-----------------------------------------------------------------------------------*/
/*	FEATURES 1 conversi
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'NT_Conversi_features1_integrateWithVC' );
function NT_Conversi_features1_integrateWithVC() {
    vc_map(
        array(
            "name" => esc_html__( "Features Section", "nt-conversi" ),
            "base" => "nt_conversi_section_features1",
            "category" => esc_html__( "NT Conversi", "nt-conversi"),
            "params" => array(
                //Section ID for scroll menu
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Section ID', 'nt-conversi' ),
                    'param_name' => 's_id',
                    'description' => esc_html__("Add Your Section ID for scroll", "nt-conversi"),
                ),
                //Section heading
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Heading display ( hide or show )', 'nt-conversi' ),
                    'param_name' => 'h_display',
                    'description' => esc_html__('You can select hide or show section heading all text', 'nt-conversi' ),
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                    'value' => array(
                        esc_html__('Show', 'nt-conversi' ) => 'show',
                        esc_html__('Hide', 'nt-conversi' ) => 'hide',
                    ),
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Heading', 'nt-conversi' ),
                    'param_name' => 's_heading',
                    'description' => esc_html__("Add heading for this section", "nt-conversi"),
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                    'dependency' => array(
                        'element' => 'h_display',
                        'value' => 'show'
                    )
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Description', 'nt-conversi' ),
                    'param_name' => 's_desc',
                    'description' => esc_html__("Add description for this section", "nt-conversi"),
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                    'dependency' => array(
                        'element' => 'h_display',
                        'value' => 'show'
                    )
                ),
                //Features 1 item column
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Item column size', 'nt-conversi' ),
                    'param_name' => 'i_col',
                    'description' => esc_html__('You can select detail item column size', 'nt-conversi' ),
                    'group' => esc_html__('Features', 'nt-conversi' ),
                    'value' => array(
                        esc_html__('Select column for all item', 'nt-conversi' ) => '',
                        esc_html__('1 Column', 'nt-conversi' ) => 'col-md-4 col-sm-12 col-xs-12',
                        esc_html__('2 Column', 'nt-conversi' ) => 'col-md-6 col-sm-6 col-xs-12',
                        esc_html__('3 Column', 'nt-conversi' ) => 'col-md-4 col-sm-6 col-xs-12',
                        esc_html__('4 Column', 'nt-conversi' ) => 'col-md-3 col-sm-6 col-xs-12',
                        esc_html__('6 Column', 'nt-conversi' ) => 'col-md-2 col-sm-6 col-xs-12',
                        esc_html__('Custom Column', 'nt-conversi' ) => 'custom',
                    ),
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Desktop device column', 'nt-conversi' ),
                    'param_name' => 'lg_col',
                    'description' => esc_html__('You can select desktop column size', 'nt-conversi' ),
                    'group' => esc_html__('Features', 'nt-conversi' ),
                    'value' => array(
                        esc_html__('Select desktop column for all item', 'nt-conversi' ) => '',
                        esc_html__('col-lg-1', 'nt-conversi' ) => 'col-lg-1',
                        esc_html__('col-lg-2', 'nt-conversi' ) => 'col-lg-2',
                        esc_html__('col-lg-3', 'nt-conversi' ) => 'col-lg-3',
                        esc_html__('col-lg-4', 'nt-conversi' ) => 'col-lg-4',
                        esc_html__('col-lg-5', 'nt-conversi' ) => 'col-lg-5',
                        esc_html__('col-lg-6', 'nt-conversi' ) => 'col-lg-6',
                        esc_html__('col-lg-7', 'nt-conversi' ) => 'col-lg-7',
                        esc_html__('col-lg-8', 'nt-conversi' ) => 'col-lg-8',
                        esc_html__('col-lg-9', 'nt-conversi' ) => 'col-lg-9',
                        esc_html__('col-lg-10', 'nt-conversi' ) => 'col-lg-10',
                        esc_html__('col-lg-11', 'nt-conversi' ) => 'col-lg-11',
                        esc_html__('col-lg-12', 'nt-conversi' ) => 'col-lg-12',
                    ),
                    'dependency' => array(
                        'element' => 'i_col',
                        'value' => 'custom'
                    )
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Desktop device column', 'nt-conversi' ),
                    'param_name' => 'md_col',
                    'description' => esc_html__('You can select desktop column size', 'nt-conversi' ),
                    'group' => esc_html__('Features', 'nt-conversi' ),
                    'value' => array(
                        esc_html__('Select desktop column for all item', 'nt-conversi' ) => '',
                        esc_html__('col-md-1', 'nt-conversi' ) => 'col-md-1',
                        esc_html__('col-md-2', 'nt-conversi' ) => 'col-md-2',
                        esc_html__('col-md-3', 'nt-conversi' ) => 'col-md-3',
                        esc_html__('col-md-4', 'nt-conversi' ) => 'col-md-4',
                        esc_html__('col-md-5', 'nt-conversi' ) => 'col-md-5',
                        esc_html__('col-md-6', 'nt-conversi' ) => 'col-md-6',
                        esc_html__('col-md-7', 'nt-conversi' ) => 'col-md-7',
                        esc_html__('col-md-8', 'nt-conversi' ) => 'col-md-8',
                        esc_html__('col-md-9', 'nt-conversi' ) => 'col-md-9',
                        esc_html__('col-md-10', 'nt-conversi' ) => 'col-md-10',
                        esc_html__('col-md-11', 'nt-conversi' ) => 'col-md-11',
                        esc_html__('col-md-12', 'nt-conversi' ) => 'col-md-12',
                    ),
                    'dependency' => array(
                        'element' => 'i_col',
                        'value' => 'custom'
                    )
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Tablet device column', 'nt-conversi' ),
                    'param_name' => 'sm_col',
                    'description' => esc_html__('You can select tablet device column size', 'nt-conversi' ),
                    'group' => esc_html__('Features', 'nt-conversi' ),
                    'value' => array(
                        esc_html__('Select tablet column for all item', 'nt-conversi' ) => '',
                        esc_html__('col-sm-1', 'nt-conversi' ) => 'col-sm-1',
                        esc_html__('col-sm-2', 'nt-conversi' ) => 'col-sm-2',
                        esc_html__('col-sm-3', 'nt-conversi' ) => 'col-sm-3',
                        esc_html__('col-sm-4', 'nt-conversi' ) => 'col-sm-4',
                        esc_html__('col-sm-5', 'nt-conversi' ) => 'col-sm-5',
                        esc_html__('col-sm-6', 'nt-conversi' ) => 'col-sm-6',
                        esc_html__('col-sm-7', 'nt-conversi' ) => 'col-sm-7',
                        esc_html__('col-sm-8', 'nt-conversi' ) => 'col-sm-8',
                        esc_html__('col-sm-9', 'nt-conversi' ) => 'col-sm-9',
                        esc_html__('col-sm-10', 'nt-conversi' ) => 'col-sm-10',
                        esc_html__('col-sm-11', 'nt-conversi' ) => 'col-sm-11',
                        esc_html__('col-sm-12', 'nt-conversi' ) => 'col-sm-12',
                    ),
                    'dependency' => array(
                        'element' => 'i_col',
                        'value' => 'custom'
                    )
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Phone device column', 'nt-conversi' ),
                    'param_name' => 'xs_col',
                    'description' => esc_html__('You can select phone device column size', 'nt-conversi' ),
                    'group' => esc_html__('Features', 'nt-conversi' ),
                    'value' => array(
                        esc_html__('Select phone column for all item', 'nt-conversi' ) => '',
                        esc_html__('col-xs-1', 'nt-conversi' ) => 'col-xs-1',
                        esc_html__('col-xs-2', 'nt-conversi' ) => 'col-xs-2',
                        esc_html__('col-xs-3', 'nt-conversi' ) => 'col-xs-3',
                        esc_html__('col-xs-4', 'nt-conversi' ) => 'col-xs-4',
                        esc_html__('col-xs-5', 'nt-conversi' ) => 'col-xs-5',
                        esc_html__('col-xs-6', 'nt-conversi' ) => 'col-xs-6',
                        esc_html__('col-xs-7', 'nt-conversi' ) => 'col-xs-7',
                        esc_html__('col-xs-8', 'nt-conversi' ) => 'col-xs-8',
                        esc_html__('col-xs-9', 'nt-conversi' ) => 'col-xs-9',
                        esc_html__('col-xs-10', 'nt-conversi' ) => 'col-xs-10',
                        esc_html__('col-xs-11', 'nt-conversi' ) => 'col-xs-11',
                        esc_html__('col-xs-12', 'nt-conversi' ) => 'col-xs-12',
                    ),
                    'dependency' => array(
                        'element' => 'i_col',
                        'value' => 'custom'
                    )
                ),
                //Features 1 loop
                array(
                    'type' => 'param_group',
                    'heading' => esc_html__('Features item', 'nt-conversi' ),
                    'param_name' => 'f1loop',
                    'group' => esc_html__('Features', 'nt-conversi' ),
                    'params' => array(
                        array(
                            'type' => 'vc_link',
                            'heading' => esc_html__('Image Link', 'nt-conversi' ),
                            'param_name' => 'link',
                            'description' => esc_html__('Add link to image', 'nt-conversi' ),
                        ),
                        array(
                            "type" => "attach_image",
                            "heading" => esc_html__("Item image", "nt-conversi"),
                            "param_name" => "i_img",
                            "description" => esc_html__("Add your features image", "nt-conversi"),
                        ),
                        array(
                            "type" => "textfield",
                            "heading" => esc_html__("Title", "nt-conversi"),
                            "param_name" => "i_title",
                            "description" => esc_html__("Add title for item.", "nt-conversi"),
                        ),
                        array(
                            "type" => "textarea",
                            "heading" => esc_html__("Detail", "nt-conversi"),
                            "param_name" => "i_desc",
                            "description" => esc_html__("Add detail for item.", "nt-conversi"),
                        ),
                    )
                ),
                //Background CSS
                array(
                    'type' => 'css_editor',
                    'heading' => esc_html__('Background CSS', 'nt-conversi' ),
                    'param_name' => 'bgcss',
                    'group' => esc_html__('Background options', 'nt-conversi' ),
                ),
                //
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Heading line-height', 'nt-conversi'),
                    'param_name' => 'hlineh',
                    'description' => esc_html__('Change Heading line-height.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Heading font-size', 'nt-conversi'),
                    'param_name' => 'hsize',
                    'description' => esc_html__('Change Heading fontsize.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Heading color', 'nt-conversi'),
                    'param_name' => 'hcolor',
                    'description' => esc_html__('Change Heading color.', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                //
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Description line-height', 'nt-conversi'),
                    'param_name' => 'shlineh',
                    'description' => esc_html__('Change Description line-height.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Description font-size', 'nt-conversi'),
                    'param_name' => 'shsize',
                    'description' => esc_html__('Change Description fontsize.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Description color', 'nt-conversi'),
                    'param_name' => 'shcolor',
                    'description' => esc_html__('Change Description color.', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                //
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Item title line-height', 'nt-conversi'),
                    'param_name' => 'itlineh',
                    'description' => esc_html__('Change Item title  line-height.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Item title font-size', 'nt-conversi'),
                    'param_name' => 'itsize',
                    'description' => esc_html__('Change Item title fontsize.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Item title color', 'nt-conversi'),
                    'param_name' => 'itcolor',
                    'description' => esc_html__('Change Item title color.', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                //
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Item description line-height', 'nt-conversi'),
                    'param_name' => 'idlineh',
                    'description' => esc_html__('Change Item description  line-height.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Item description font-size', 'nt-conversi'),
                    'param_name' => 'idsize',
                    'description' => esc_html__('Change Item description fontsize.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Item description color', 'nt-conversi'),
                    'param_name' => 'idcolor',
                    'description' => esc_html__('Change Item description color.', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                )
            )
        )
    );
}
class NT_Conversi_section_features1 extends WPBakeryShortCode {
}

/*-----------------------------------------------------------------------------------*/
/*	FEATURES 2 conversi
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'NT_Conversi_features2_integrateWithVC' );
function NT_Conversi_features2_integrateWithVC() {
    vc_map(
        array(
            "name" => esc_html__( "Features 2 Section", "nt-conversi" ),
            "base" => "nt_conversi_section_features2",
            "category" => esc_html__( "NT Conversi", "nt-conversi"),
            "params" => array(
                //Section ID for scroll menu
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Section ID', 'nt-conversi' ),
                    'param_name' => 's_id',
                    'description' => esc_html__("Add Your Section ID for scroll", "nt-conversi"),
                ),
                //Left image
                array(
                    "type" => "attach_image",
                    "heading" => esc_html__("Left image", "nt-conversi"),
                    "param_name" => "l_img",
                    "description" => esc_html__("Add your features left image", "nt-conversi"),
                    'group' => esc_html__('Left section', 'nt-conversi' ),
                ),
                //Section heading
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Heading display ( hide or show )', 'nt-conversi' ),
                    'param_name' => 'h_display',
                    'description' => esc_html__('You can select hide or show section heading all text', 'nt-conversi' ),
                    'group' => esc_html__('Right section', 'nt-conversi' ),
                    'value' => array(
                        esc_html__('Show', 'nt-conversi' ) => 'show',
                        esc_html__('Hide', 'nt-conversi' ) => 'hide',
                    ),
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Subtitle', 'nt-conversi' ),
                    'param_name' => 's_subtitle',
                    'description' => esc_html__("Add heading for this section", "nt-conversi"),
                    'group' => esc_html__('Right section', 'nt-conversi' ),
                    'dependency' => array(
                        'element' => 'h_display',
                        'value' => 'show'
                    )
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Heading', 'nt-conversi' ),
                    'param_name' => 's_heading',
                    'description' => esc_html__("Add heading for this section", "nt-conversi"),
                    'group' => esc_html__('Right section', 'nt-conversi' ),
                    'dependency' => array(
                        'element' => 'h_display',
                        'value' => 'show'
                    )
                ),
                array(
                    'type' => 'checkbox',
                    'param_name' => 'custom_content',
                    'heading' => esc_html__('Use custom content?', 'nt-conversi'),
                    'value' => array( esc_html__('Yes', 'nt-conversi') => 'yes' ),
                    'group' => esc_html__('Right section', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Description', 'nt-conversi' ),
                    'param_name' => 's_desc',
                    'description' => esc_html__("Add description for this section", "nt-conversi"),
                    'group' => esc_html__('Right section', 'nt-conversi' ),
                    'dependency' => array(
                        'element' => 'custom_content',
                        'is_empty' => true
                    )
                ),
                array(
                    'type' => 'textarea_html',
                    'heading' => esc_html__('Custom HTML Content', 'nt-conversi' ),
                    'param_name' => 'content',
                    'description' => esc_html__("Add description or custom html content for this section", "nt-conversi"),
                    'group' => esc_html__('Right section', 'nt-conversi' ),
                    'dependency' => array(
                        'element' => 'custom_content',
                        'not_empty' => true
                    )
                ),
                //Features 1 loop
                array(
                    'type' => 'param_group',
                    'heading' => esc_html__('Features list item', 'nt-conversi' ),
                    'param_name' => 'f2loop',
                    'group' => esc_html__('Right section', 'nt-conversi' ),
                    'params' => array(
                        array(
                            "type" => "textarea",
                            "heading" => esc_html__("Detail", "nt-conversi"),
                            "param_name" => "i_desc",
                            "description" => esc_html__("Add detail for item.", "nt-conversi"),
                        ),
                    )
                ),
                //Background CSS
                array(
                    'type' => 'css_editor',
                    'heading' => esc_html__('Background CSS', 'nt-conversi' ),
                    'param_name' => 'bgcss',
                    'group' => esc_html__('Background options', 'nt-conversi' ),
                ),
                //
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Heading line-height', 'nt-conversi'),
                    'param_name' => 'hlineh',
                    'description' => esc_html__('Change Heading line-height.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Heading font-size', 'nt-conversi'),
                    'param_name' => 'hsize',
                    'description' => esc_html__('Change Heading fontsize.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Heading color', 'nt-conversi'),
                    'param_name' => 'hcolor',
                    'description' => esc_html__('Change Heading color.', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                //
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Description line-height', 'nt-conversi'),
                    'param_name' => 'shlineh',
                    'description' => esc_html__('Change Description line-height.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Description font-size', 'nt-conversi'),
                    'param_name' => 'shsize',
                    'description' => esc_html__('Change Description fontsize.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Description color', 'nt-conversi'),
                    'param_name' => 'shcolor',
                    'description' => esc_html__('Change Description color.', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                //
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Item description line-height', 'nt-conversi'),
                    'param_name' => 'idlineh',
                    'description' => esc_html__('Change Item description  line-height.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Item description font-size', 'nt-conversi'),
                    'param_name' => 'idsize',
                    'description' => esc_html__('Change Item description fontsize.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Item description color', 'nt-conversi'),
                    'param_name' => 'idcolor',
                    'description' => esc_html__('Change Item description color.', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                //
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('List item line-height', 'nt-conversi'),
                    'param_name' => 'itlineh',
                    'description' => esc_html__('Change List item line-height.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('List item font-size', 'nt-conversi'),
                    'param_name' => 'itsize',
                    'description' => esc_html__('Change List item fontsize.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('List item color', 'nt-conversi'),
                    'param_name' => 'itcolor',
                    'description' => esc_html__('Change List item color.', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
            )
        )
    );
}
class NT_Conversi_section_features2 extends WPBakeryShortCode {
}

/*-----------------------------------------------------------------------------------*/
/*	FEATURES 3 conversi
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'NT_Conversi_features3_integrateWithVC' );
function NT_Conversi_features3_integrateWithVC() {
    vc_map(
        array(
            "name" => esc_html__( "Features 3 Section", "nt-conversi" ),
            "base" => "nt_conversi_section_features3",
            "category" => esc_html__( "NT Conversi", "nt-conversi"),
            "params" => array(
                //Section ID for scroll menu
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Section ID', 'nt-conversi' ),
                    'param_name' => 's_id',
                    'description' => esc_html__("Add Your Section ID for scroll", "nt-conversi"),
                ),
                //Section heading
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Heading display ( hide or show )', 'nt-conversi' ),
                    'param_name' => 'h_display',
                    'description' => esc_html__('You can select hide or show section heading all text', 'nt-conversi' ),
                    'group' => esc_html__('Left section', 'nt-conversi' ),
                    'value' => array(
                        esc_html__('Show', 'nt-conversi' ) => 'show',
                        esc_html__('Hide', 'nt-conversi' ) => 'hide',
                    ),
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Heading', 'nt-conversi' ),
                    'param_name' => 's_heading',
                    'description' => esc_html__("Add heading for this section", "nt-conversi"),
                    'group' => esc_html__('Left section', 'nt-conversi' ),
                    'dependency' => array(
                        'element' => 'h_display',
                        'value' => 'show'
                    )
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Subtitle', 'nt-conversi' ),
                    'param_name' => 's_subtitle',
                    'description' => esc_html__("Add heading for this section", "nt-conversi"),
                    'group' => esc_html__('Left section', 'nt-conversi' ),
                    'dependency' => array(
                        'element' => 'h_display',
                        'value' => 'show'
                    )
                ),
                array(
                    'type' => 'checkbox',
                    'param_name' => 'custom_content',
                    'heading' => esc_html__('Use custom content?', 'nt-conversi'),
                    'value' => array( esc_html__('Yes', 'nt-conversi') => 'yes' ),
                    'group' => esc_html__('Left section', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Description', 'nt-conversi' ),
                    'param_name' => 's_desc',
                    'description' => esc_html__("Add description for this section", "nt-conversi"),
                    'group' => esc_html__('Left section', 'nt-conversi' ),
                    'dependency' => array(
                        'element' => 'custom_content',
                        'is_empty' => true
                    )
                ),
                array(
                    'type' => 'textarea_html',
                    'heading' => esc_html__('Custom HTML Content', 'nt-conversi' ),
                    'param_name' => 'content',
                    'description' => esc_html__("Add description or custom html content for this section", "nt-conversi"),
                    'group' => esc_html__('Left section', 'nt-conversi' ),
                    'dependency' => array(
                        'element' => 'custom_content',
                        'not_empty' => true
                    )
                ),
                //Features 1 loop
                array(
                    'type' => 'param_group',
                    'heading' => esc_html__('Features list item', 'nt-conversi' ),
                    'param_name' => 'f3loop',
                    'group' => esc_html__('Left section', 'nt-conversi' ),
                    'params' => array(
                        array(
                            "type" => "textfield",
                            "heading" => esc_html__("Title", "nt-conversi"),
                            "param_name" => "i_title",
                            "description" => esc_html__("Add title for item.", "nt-conversi"),
                        ),
                        array(
                            "type" => "textarea",
                            "heading" => esc_html__("Detail", "nt-conversi"),
                            "param_name" => "i_desc",
                            "description" => esc_html__("Add detail for item.", "nt-conversi"),
                        ),
                    )
                ),
                //Right image
                array(
                    "type" => "attach_image",
                    "heading" => esc_html__("Right image", "nt-conversi"),
                    "param_name" => "r_img",
                    "description" => esc_html__("Add your features left image", "nt-conversi"),
                    'group' => esc_html__('Right section', 'nt-conversi' ),
                ),
                //Background CSS
                array(
                    'type' => 'css_editor',
                    'heading' => esc_html__('Background CSS', 'nt-conversi' ),
                    'param_name' => 'bgcss',
                    'group' => esc_html__('Background options', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Heading line-height', 'nt-conversi'),
                    'param_name' => 'hlineh',
                    'description' => esc_html__('Change Heading line-height.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Heading font-size', 'nt-conversi'),
                    'param_name' => 'hsize',
                    'description' => esc_html__('Change Heading fontsize.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Heading color', 'nt-conversi'),
                    'param_name' => 'hcolor',
                    'description' => esc_html__('Change Heading color.', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                //
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Subheading line-height', 'nt-conversi'),
                    'param_name' => 'shlineh',
                    'description' => esc_html__('Change Subheading line-height.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Subheading font-size', 'nt-conversi'),
                    'param_name' => 'shsize',
                    'description' => esc_html__('Change Subheading fontsize.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Subheading color', 'nt-conversi'),
                    'param_name' => 'shcolor',
                    'description' => esc_html__('Change Subheading color.', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),

                //
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Description line-height', 'nt-conversi'),
                    'param_name' => 'idlineh',
                    'description' => esc_html__('Change Description line-height.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Description font-size', 'nt-conversi'),
                    'param_name' => 'idsize',
                    'description' => esc_html__('Change Description fontsize.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Description color', 'nt-conversi'),
                    'param_name' => 'idcolor',
                    'description' => esc_html__('Change Description color.', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                //
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('List item title line-height', 'nt-conversi'),
                    'param_name' => 'itlineh',
                    'description' => esc_html__('Change List item title line-height.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('List item title font-size', 'nt-conversi'),
                    'param_name' => 'itsize',
                    'description' => esc_html__('Change List item title fontsize.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('List item title color', 'nt-conversi'),
                    'param_name' => 'itcolor',
                    'description' => esc_html__('Change List item title color.', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                //
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('List item description line-height', 'nt-conversi'),
                    'param_name' => 'itdlineh',
                    'description' => esc_html__('Change List item description line-height.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('List item description font-size', 'nt-conversi'),
                    'param_name' => 'itdsize',
                    'description' => esc_html__('Change List item description fontsize.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('List item description color', 'nt-conversi'),
                    'param_name' => 'itdcolor',
                    'description' => esc_html__('Change List item description color.', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
            ),
        )
    );
}
class NT_Conversi_section_features3 extends WPBakeryShortCode {
}

/*-----------------------------------------------------------------------------------*/
/*	TESTIMONIAL conversi
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'NT_Conversi_testimonial_integrateWithVC' );
function NT_Conversi_testimonial_integrateWithVC() {
    vc_map(
        array(
            "name" => esc_html__( "Testimonial Section", "nt-conversi" ),
            "base" => "nt_conversi_section_testimonial",
            "category" => esc_html__( "NT Conversi", "nt-conversi"),
            "params" => array(
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Section ID', 'nt-conversi' ),
                    'param_name' => 's_id',
                    'description' => esc_html__("Add Your Section ID for scroll", "nt-conversi"),
                ),
                //TESTIMONIAL LOOP
                array(
                    'type' => 'param_group',
                    'heading' => esc_html__('Testimonial items', 'nt-conversi' ),
                    'param_name' => 't_loop',
                    'group' => esc_html__('Testimonial', 'nt-conversi' ),
                    'params' => array(
                        array(
                            "type" => "attach_image",
                            "heading" => esc_html__("Testimonial image", "nt-conversi"),
                            "param_name" => "t_img",
                            "description" => esc_html__("Add your client image", "nt-conversi"),
                        ),
                        array(
                            "type" => "textfield",
                            "heading" => esc_html__("Testimonial name", "nt-conversi"),
                            "param_name" => "t_name",
                            "description" => esc_html__("Add your testimonial name", "nt-conversi"),
                        ),
                        array(
                            "type" => "textfield",
                            "heading" => esc_html__("Testimonial job", "nt-conversi"),
                            "param_name" => "t_job",
                            "description" => esc_html__("Add your testimonial job or detail", "nt-conversi"),
                        ),
                        array(
                            "type" => "textarea",
                            "heading" => esc_html__("Testimonial quote", "nt-conversi"),
                            "param_name" => "t_quote",
                            "description" => esc_html__("Add your testimonial quote text", "nt-conversi"),
                        )
                    )
                ),
                //BACKGROUND CSS
                array(
                    'type' => 'css_editor',
                    'heading' => esc_html__('Background CSS', 'nt-conversi' ),
                    'param_name' => 'bgcss',
                    'group' => esc_html__('Background options', 'nt-conversi' ),
                ),
                //
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Name line-height', 'nt-conversi'),
                    'param_name' => 'nlineh',
                    'description' => esc_html__('Change Name line-height.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Name font-size', 'nt-conversi'),
                    'param_name' => 'nsize',
                    'description' => esc_html__('Change Name fontsize.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Name color', 'nt-conversi'),
                    'param_name' => 'ncolor',
                    'description' => esc_html__('Change Name color.', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                //
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Job line-height', 'nt-conversi'),
                    'param_name' => 'jlineh',
                    'description' => esc_html__('Change Job line-height.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Job font-size', 'nt-conversi'),
                    'param_name' => 'jsize',
                    'description' => esc_html__('Change Job fontsize.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Job color', 'nt-conversi'),
                    'param_name' => 'jcolor',
                    'description' => esc_html__('Change Job color.', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                //
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Quote line-height', 'nt-conversi'),
                    'param_name' => 'qlineh',
                    'description' => esc_html__('Change Quote line-height.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Quote font-size', 'nt-conversi'),
                    'param_name' => 'qsize',
                    'description' => esc_html__('Change Quote fontsize.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Quote color', 'nt-conversi'),
                    'param_name' => 'qcolor',
                    'description' => esc_html__('Change Quote color.', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
            ),
        )
    );
}
class NT_Conversi_section_testimonial extends WPBakeryShortCode {
}

/*-----------------------------------------------------------------------------------*/
/*	COUNTER conversi
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'NT_Conversi_counter_integrateWithVC' );
function NT_Conversi_counter_integrateWithVC() {
    vc_map(
        array(
            "name" => esc_html__( "Counterup Section", "nt-conversi" ),
            "base" => "nt_conversi_section_counter",
            "category" => esc_html__( "NT Conversi", "nt-conversi"),
            "params" => array(
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Section ID', 'nt-conversi' ),
                    'param_name' => 's_id',
                    'description' => esc_html__("Add Your Section ID for scroll", "nt-conversi"),
                ),
                array(
                    "type" => "attach_image",
                    "heading" => esc_html__("BG image", "nt-conversi"),
                    "param_name" => "bg_img",
                    "description" => esc_html__("Add your bg image", "nt-conversi"),
                ),
                //counter loop
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Item column size', 'nt-conversi' ),
                    'param_name' => 'i_col',
                    'description' => esc_html__('You can select item column size', 'nt-conversi' ),
                    'group' => esc_html__('Counterup', 'nt-conversi' ),
                    'value' => array(
                        esc_html__('Select column for all item', 'nt-conversi' ) => '',
                        esc_html__('1 Column', 'nt-conversi' ) => 'col-sm-12 col-xs-12',
                        esc_html__('2 Column', 'nt-conversi' ) => 'col-sm-6 col-xs-12',
                        esc_html__('3 Column', 'nt-conversi' ) => 'col-sm-4 col-xs-12',
                        esc_html__('4 Column', 'nt-conversi' ) => 'col-sm-3 col-xs-12',
                        esc_html__('6 Column', 'nt-conversi' ) => 'col-sm-2 col-xs-12',
                        esc_html__('Custom Column', 'nt-conversi' ) => 'custom',
                    ),
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Large device', 'nt-conversi' ),
                    'param_name' => 'lg_col',
                    'description' => esc_html__('You can select large device column size', 'nt-conversi' ),
                    'group' => esc_html__('Counterup', 'nt-conversi' ),
                    'value' => array(
                        esc_html__('Select desktop column for all item', 'nt-conversi' ) => '',
                        esc_html__('col-lg-1', 'nt-conversi' ) => 'col-lg-1',
                        esc_html__('col-lg-2', 'nt-conversi' ) => 'col-lg-2',
                        esc_html__('col-lg-3', 'nt-conversi' ) => 'col-lg-3',
                        esc_html__('col-lg-4', 'nt-conversi' ) => 'col-lg-4',
                        esc_html__('col-lg-5', 'nt-conversi' ) => 'col-lg-5',
                        esc_html__('col-lg-6', 'nt-conversi' ) => 'col-lg-6',
                        esc_html__('col-lg-7', 'nt-conversi' ) => 'col-lg-7',
                        esc_html__('col-lg-8', 'nt-conversi' ) => 'col-lg-8',
                        esc_html__('col-lg-9', 'nt-conversi' ) => 'col-lg-9',
                        esc_html__('col-lg-10', 'nt-conversi' ) => 'col-lg-10',
                        esc_html__('col-lg-11', 'nt-conversi' ) => 'col-lg-11',
                        esc_html__('col-lg-12', 'nt-conversi' ) => 'col-lg-12',
                    ),
                    'dependency' => array(
                        'element' => 'i_col',
                        'value' => 'custom'
                    )
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Desktop device', 'nt-conversi' ),
                    'param_name' => 'md_col',
                    'description' => esc_html__('You can select desktop column size', 'nt-conversi' ),
                    'group' => esc_html__('Counterup', 'nt-conversi' ),
                    'value' => array(
                        esc_html__('Select desktop column for all item', 'nt-conversi' ) => '',
                        esc_html__('col-md-1', 'nt-conversi' ) => 'col-md-1',
                        esc_html__('col-md-2', 'nt-conversi' ) => 'col-md-2',
                        esc_html__('col-md-3', 'nt-conversi' ) => 'col-md-3',
                        esc_html__('col-md-4', 'nt-conversi' ) => 'col-md-4',
                        esc_html__('col-md-5', 'nt-conversi' ) => 'col-md-5',
                        esc_html__('col-md-6', 'nt-conversi' ) => 'col-md-6',
                        esc_html__('col-md-7', 'nt-conversi' ) => 'col-md-7',
                        esc_html__('col-md-8', 'nt-conversi' ) => 'col-md-8',
                        esc_html__('col-md-9', 'nt-conversi' ) => 'col-md-9',
                        esc_html__('col-md-10', 'nt-conversi' ) => 'col-md-10',
                        esc_html__('col-md-11', 'nt-conversi' ) => 'col-md-11',
                        esc_html__('col-md-12', 'nt-conversi' ) => 'col-md-12',
                    ),
                    'dependency' => array(
                        'element' => 'i_col',
                        'value' => 'custom'
                    )
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Tablet device', 'nt-conversi' ),
                    'param_name' => 'sm_col',
                    'description' => esc_html__('You can select tablet device column size', 'nt-conversi' ),
                    'group' => esc_html__('Counterup', 'nt-conversi' ),
                    'value' => array(
                        esc_html__('Select mobile column for all item', 'nt-conversi' ) => '',
                        esc_html__('col-sm-1', 'nt-conversi' ) => 'col-sm-1',
                        esc_html__('col-sm-2', 'nt-conversi' ) => 'col-sm-2',
                        esc_html__('col-sm-3', 'nt-conversi' ) => 'col-sm-3',
                        esc_html__('col-sm-4', 'nt-conversi' ) => 'col-sm-4',
                        esc_html__('col-sm-5', 'nt-conversi' ) => 'col-sm-5',
                        esc_html__('col-sm-6', 'nt-conversi' ) => 'col-sm-6',
                        esc_html__('col-sm-7', 'nt-conversi' ) => 'col-sm-7',
                        esc_html__('col-sm-8', 'nt-conversi' ) => 'col-sm-8',
                        esc_html__('col-sm-9', 'nt-conversi' ) => 'col-sm-9',
                        esc_html__('col-sm-10', 'nt-conversi' ) => 'col-sm-10',
                        esc_html__('col-sm-11', 'nt-conversi' ) => 'col-sm-11',
                        esc_html__('col-sm-12', 'nt-conversi' ) => 'col-sm-12',
                    ),
                    'dependency' => array(
                        'element' => 'i_col',
                        'value' => 'custom'
                    )
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Phone device', 'nt-conversi' ),
                    'param_name' => 'xs_col',
                    'description' => esc_html__('You can select phone device column size', 'nt-conversi' ),
                    'group' => esc_html__('Counterup', 'nt-conversi' ),
                    'value' => array(
                        esc_html__('Select mobile column for all item', 'nt-conversi' ) => '',
                        esc_html__('col-xs-1', 'nt-conversi' ) => 'col-xs-1',
                        esc_html__('col-xs-2', 'nt-conversi' ) => 'col-xs-2',
                        esc_html__('col-xs-3', 'nt-conversi' ) => 'col-xs-3',
                        esc_html__('col-xs-4', 'nt-conversi' ) => 'col-xs-4',
                        esc_html__('col-xs-5', 'nt-conversi' ) => 'col-xs-5',
                        esc_html__('col-xs-6', 'nt-conversi' ) => 'col-xs-6',
                        esc_html__('col-xs-7', 'nt-conversi' ) => 'col-xs-7',
                        esc_html__('col-xs-8', 'nt-conversi' ) => 'col-xs-8',
                        esc_html__('col-xs-9', 'nt-conversi' ) => 'col-xs-9',
                        esc_html__('col-xs-10', 'nt-conversi' ) => 'col-xs-10',
                        esc_html__('col-xs-11', 'nt-conversi' ) => 'col-xs-11',
                        esc_html__('col-xs-12', 'nt-conversi' ) => 'col-xs-12',
                    ),
                    'dependency' => array(
                        'element' => 'i_col',
                        'value' => 'custom'
                    )
                ),
                array(
                    'type' => 'param_group',
                    'heading' => esc_html__('Counterup items', 'nt-conversi' ),
                    'param_name' => 'c_loop',
                    'group' => esc_html__('Counterup', 'nt-conversi' ),
                    'params' => array(
                        array(
                            'type' => 'dropdown',
                            'heading' => esc_html__('Icon type', 'nt-conversi' ),
                            'param_name' => 'icon_type',
                            'description' => esc_html__('You can select type icon', 'nt-conversi' ),
                            'value' => array(
                                esc_html__('Select', 'nt-conversi' ) => '',
                                esc_html__('Custom Icon', 'nt-conversi' ) => 'custom',
                                esc_html__('Icon List', 'nt-conversi' ) => 'iconlist',
                            ),
                        ),
                        array(
                            "type" => "textfield",
                            "heading" => esc_html__("Fonticon name", "nt-conversi"),
                            "param_name" => "i_icon",
                            "description" => esc_html__("Add Font awesome icons. example : icon-layers", "nt-conversi"),
                            'dependency' => array(
                                'element' => 'icon_type',
                                'value' => array('','custom')
                            )
                        ),
                        array(
                            "type" => "iconpicker",
                            "heading" => esc_html__("Fonticon", "nt-conversi"),
                            "param_name" => "i_icontwo",
                            "description" => esc_html__("Please select icon.", "nt-conversi"),
                            'dependency' => array(
                                'element' => 'icon_type',
                                'value' => 'iconlist'
                            )
                        ),
                        array(
                            "type" => "textfield",
                            "heading" => esc_html__("Number", "nt-conversi"),
                            "param_name" => "i_number",
                            "description" => esc_html__("Add number for item.", "nt-conversi"),
                        ),
                        array(
                            "type" => "textfield",
                            "heading" => esc_html__("Title", "nt-conversi"),
                            "param_name" => "i_title",
                            "description" => esc_html__("Add title for item.", "nt-conversi"),
                        )
                    )
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Overlay color display', 'nt-conversi' ),
                    'param_name' => 'o_display',
                    'description' => esc_html__('You can select hide or show overlay color on bg image', 'nt-conversi' ),
                    'group' => esc_html__('Background options', 'nt-conversi' ),
                    'value' => array(
                        esc_html__('Show', 'nt-conversi' ) => 'show',
                        esc_html__('Hide', 'nt-conversi' ) => 'hide',
                    ),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Overlay color', 'nt-conversi' ),
                    'param_name' => 'o_color',
                    'description' => esc_html__("Select color for overlay", "nt-conversi"),
                    'group' => esc_html__('Background options', 'nt-conversi' ),
                    'dependency' => array(
                        'element' => 'o_display',
                        'value' => 'show'
                    )
                ),
                array(
                    'type' => 'css_editor',
                    'heading' => esc_html__('Background CSS', 'nt-conversi' ),
                    'param_name' => 'bgcss',
                    'group' => esc_html__('Background options', 'nt-conversi' ),
                )
            )
        )
    );
}
class NT_Conversi_section_counter extends WPBakeryShortCode {
}

/*-----------------------------------------------------------------------------------*/
/*	PRICING conversi
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'NT_Conversi_section_pricing_integrateWithVC' );
function NT_Conversi_section_pricing_integrateWithVC() {
    vc_map(
        array(
            "name" => esc_html__("Pricing ( Plugin )", "nt-conversi"),
            "base" => "nt_conversi_section_pricing",
            "icon" => "icon-wpb-row",
            "category" => esc_html__("NT Conversi", "nt-conversi"),
            "params" => array(
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Section ID', 'nt-conversi'),
                    'param_name' => 's_id',
                    'description' => esc_html__('Add your Section ID for scroll', 'nt-conversi'),
                ),
                //Section heading
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Heading display ( hide or show )', 'nt-conversi' ),
                    'param_name' => 'h_display',
                    'description' => esc_html__('You can select hide or show section heading all text', 'nt-conversi' ),
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                    'value' => array(
                        esc_html__('Show', 'nt-conversi' ) => 'show',
                        esc_html__('Hide', 'nt-conversi' ) => 'hide',
                    ),
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Heading', 'nt-conversi' ),
                    'param_name' => 's_heading',
                    'description' => esc_html__("Add heading for this section", "nt-conversi"),
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                    'dependency' => array(
                        'element' => 'h_display',
                        'value' => 'show'
                    )
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Description', 'nt-conversi' ),
                    'param_name' => 's_desc',
                    'description' => esc_html__("Add description for this section", "nt-conversi"),
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                    'dependency' => array(
                        'element' => 'h_display',
                        'value' => 'show'
                    )
                ),
                //BUTTON options
                array(
                    'type' => 'vc_link',
                    'heading' => esc_html__('Button (Link)', 'nt-conversi' ),
                    'param_name' => 'btnlink',
                    'group' => esc_html__('Button', 'nt-conversi'),
                    'description' => esc_html__('Add custom button title and link for pricing pack', 'nt-conversi' ),
                ),
                //post options
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Price Table Count', 'nt-conversi' ),
                    'param_name' => 'p_number',
                    'group' => esc_html__('Post Options', 'nt-conversi'),
                    'description' => esc_html__('You can control with number your price tables.Please enter a number', 'nt-conversi'),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Order', 'nt-conversi' ),
                    'param_name' => 'order',
                    'group' => esc_html__('Post Options', 'nt-conversi'),
                    'description' => esc_html__('Enter Price table order. DESC or ASC', 'nt-conversi'),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Orderby', 'nt-conversi' ),
                    'param_name' => 'orderby',
                    'group' => esc_html__('Post Options', 'nt-conversi'),
                    'description' => esc_html__('Enter Price table orderby. Default is : date', 'nt-conversi'),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Category', 'nt-conversi' ),
                    'param_name' => 'p_cat',
                    'group' => esc_html__('Post Options', 'nt-conversi'),
                    'description' => esc_html__('Enter Price table category or write all', 'nt-conversi'),
                ),
                array(
                    'type' => 'css_editor',
                    'heading' => esc_html__('Background CSS', 'nt-conversi' ),
                    'param_name' => 'bgcss',
                    'group' => esc_html__('Background options', 'nt-conversi' ),
                ),
                //
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Title line-height', 'nt-conversi'),
                    'param_name' => 'hlineh',
                    'description' => esc_html__('Change Title line-height.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Title font-size', 'nt-conversi'),
                    'param_name' => 'hsize',
                    'description' => esc_html__('Change Title fontsize.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Title color', 'nt-conversi'),
                    'param_name' => 'hcolor',
                    'description' => esc_html__('Change Title color.', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                //
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Price line-height', 'nt-conversi'),
                    'param_name' => 'plineh',
                    'description' => esc_html__('Change Price line-height.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Price font-size', 'nt-conversi'),
                    'param_name' => 'psize',
                    'description' => esc_html__('Change Price fontsize.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Price color', 'nt-conversi'),
                    'param_name' => 'pcolor',
                    'description' => esc_html__('Change Price color.', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                //
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('List Item line-height', 'nt-conversi'),
                    'param_name' => 'itlineh',
                    'description' => esc_html__('Change List Item line-height.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('List Item font-size', 'nt-conversi'),
                    'param_name' => 'itsize',
                    'description' => esc_html__('Change List Item fontsize.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('List Item color', 'nt-conversi'),
                    'param_name' => 'itcolor',
                    'description' => esc_html__('Change List Item color.', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
            )
        )
    );
}
class NT_Conversi_section_pricing extends WPBakeryShortCode {
}
/*-----------------------------------------------------------------------------------*/
/*	PRICING item conversi
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'NT_Conversi_section_pricing_item_integrateWithVC' );
function NT_Conversi_section_pricing_item_integrateWithVC() {
    vc_map(
        array(
            "name" => esc_html__("Pricing İtem", "nt-conversi"),
            "base" => "nt_conversi_section_pricing_item",
            "icon" => "icon-wpb-row",
            "category" => esc_html__("NT Conversi", "nt-conversi"),
            "params" => array(
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Pack Type', 'nt-conversi' ),
                    'param_name' => 'featuredd',
                    'description' => esc_html__('You can select item fetured or normal', 'nt-conversi' ),
                    'group' => esc_html__('General', 'nt-conversi' ),
                    'value' => array(
                        esc_html__('Select Pack Type', 'nt-conversi' ) => '',
                        esc_html__('Featured', 'nt-conversi' ) => 'featured',
                        esc_html__('Normal', 'nt-conversi' ) => 'normal',
                    ),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Featured pack title', 'nt-conversi' ),
                    'param_name' => 'f_title',
                    'group' => esc_html__('General', 'nt-conversi'),
                    'description' => esc_html__('Enter Featured pack title', 'nt-conversi'),
                    'std' => 'recommended',
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Title', 'nt-conversi' ),
                    'param_name' => 'title',
                    'group' => esc_html__('General', 'nt-conversi'),
                    'description' => esc_html__('Enter Price title', 'nt-conversi'),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Currency', 'nt-conversi' ),
                    'param_name' => 'currency',
                    'group' => esc_html__('General', 'nt-conversi'),
                    'description' => esc_html__('Enter Price Currency', 'nt-conversi'),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Price', 'nt-conversi' ),
                    'param_name' => 'price',
                    'group' => esc_html__('General', 'nt-conversi'),
                    'description' => esc_html__('Enter Price Price', 'nt-conversi'),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Period', 'nt-conversi' ),
                    'param_name' => 'period',
                    'group' => esc_html__('General', 'nt-conversi'),
                    'description' => esc_html__('Enter Price Period', 'nt-conversi'),
                ),
                //Form features loop
                array(
                    'type' => 'param_group',
                    'heading' => esc_html__('Pricing item', 'nt-conversi' ),
                    'param_name' => 'features',
                    'group' => esc_html__('İtem', 'nt-conversi' ),
                    'params' => array(
                        array(
                            "type" => "textfield",
                            "heading" => esc_html__("Features", "nt-conversi"),
                            "param_name" => "texts",
                            "description" => esc_html__("Add icon name for hero list item.", "nt-conversi"),
                        ),
                    )
                ),
                //BUTTON options
                array(
                    'type' => 'vc_link',
                    'heading' => esc_html__('Button (Link)', 'nt-conversi' ),
                    'param_name' => 'btnlink',
                    'group' => esc_html__('Button', 'nt-conversi'),
                    'description' => esc_html__('Add custom button title and link for pricing pack', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Title line-height', 'nt-conversi'),
                    'param_name' => 'hlineh',
                    'description' => esc_html__('Change Title line-height.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Title font-size', 'nt-conversi'),
                    'param_name' => 'hsize',
                    'description' => esc_html__('Change Title fontsize.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Title color', 'nt-conversi'),
                    'param_name' => 'hcolor',
                    'description' => esc_html__('Change Title color.', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                //
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Price line-height', 'nt-conversi'),
                    'param_name' => 'plineh',
                    'description' => esc_html__('Change Price line-height.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Price font-size', 'nt-conversi'),
                    'param_name' => 'psize',
                    'description' => esc_html__('Change Price fontsize.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Price color', 'nt-conversi'),
                    'param_name' => 'pcolor',
                    'description' => esc_html__('Change Price color.', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                //
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('List Item line-height', 'nt-conversi'),
                    'param_name' => 'itlineh',
                    'description' => esc_html__('Change List Item line-height.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('List Item font-size', 'nt-conversi'),
                    'param_name' => 'itsize',
                    'description' => esc_html__('Change List Item fontsize.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('List Item color', 'nt-conversi'),
                    'param_name' => 'itcolor',
                    'description' => esc_html__('Change List Item color.', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
            ),
        )
    );
}
class NT_Conversi_section_pricing_item extends WPBakeryShortCode {
}

/*-----------------------------------------------------------------------------------*/
/*	MAP  meder
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'NT_Conversi_map_integrateWithVC' );
function NT_Conversi_map_integrateWithVC() {
    vc_map(
        array(
            "name" => esc_html__( "Custom Map", "nt-conversi" ),
            "base" => "nt_conversi_section_map",
            "category" => esc_html__( "NT Conversi", "nt-conversi"),
            "params" => array(
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Section ID', 'nt-conversi' ),
                    'param_name' => 's_id',
                    'description' => esc_html__("Add Your Section ID for scroll", "nt-conversi"),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Coordinate 1 ( lat ) Required!', 'nt-conversi' ),
                    'param_name' => 'lat',
                    'description' => esc_html__("Add your location coordinate 1 ( lat ). example:-12.042", "nt-conversi"),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Coordinate 2 ( lng ) Required!', 'nt-conversi' ),
                    'param_name' => 'lng',
                    'description' => esc_html__("Add your location coordinate 2 ( lng ). example:-77.028333", "nt-conversi"),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Zoom', 'nt-conversi' ),
                    'param_name' => 'zoom',
                    'description' => esc_html__("Default value : 8", "nt-conversi"),
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Over title', 'nt-conversi' ),
                    'param_name' => 'over_title',
                    'description' => esc_html__("Add your title for over map", "nt-conversi"),
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Map over description', 'nt-conversi' ),
                    'param_name' => 'over_desc',
                    'description' => esc_html__("Add your description for over map", "nt-conversi"),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Map overlay color', 'nt-conversi' ),
                    'param_name' => 'o_color',
                    'description' => esc_html__("Select color for overlay", "nt-conversi"),
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('marker title', 'nt-conversi' ),
                    'param_name' => 'marker_title',
                    'description' => esc_html__("Add your title for marker icon. example: Your Company Name", "nt-conversi"),
                )
            )
        )
    );
}
class NT_Conversi_section_map extends WPBakeryShortCode {
}

/*-----------------------------------------------------------------------------------*/
/*	SUBSCRIBE  conversi
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'NT_Conversi_subscribe_integrateWithVC' );
function NT_Conversi_subscribe_integrateWithVC() {
    vc_map(
        array(
            "name" => esc_html__( "Subscribe Section", "nt-conversi" ),
            "base" => "nt_conversi_section_subscribe",
            "category" => esc_html__( "NT Conversi", "nt-conversi"),
            "params" => array(
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Section ID', 'nt-conversi' ),
                    'param_name' => 's_id',
                    'description' => esc_html__("Add Your Section ID for scroll", "nt-conversi"),
                ),
                //Section heading
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Heading display ( hide or show )', 'nt-conversi' ),
                    'param_name' => 'h_display',
                    'description' => esc_html__('You can select hide or show section heading all text', 'nt-conversi' ),
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                    'value' => array(
                        esc_html__('Show', 'nt-conversi' ) => 'show',
                        esc_html__('Hide', 'nt-conversi' ) => 'hide',
                    ),
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Heading', 'nt-conversi' ),
                    'param_name' => 's_heading',
                    'description' => esc_html__("Add heading for this section", "nt-conversi"),
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                    'dependency' => array(
                        'element' => 'h_display',
                        'value' => 'show'
                    )
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Description', 'nt-conversi' ),
                    'param_name' => 's_desc',
                    'description' => esc_html__("Add description for this section", "nt-conversi"),
                    'group' => esc_html__('Heading', 'nt-conversi' ),
                    'dependency' => array(
                        'element' => 'h_display',
                        'value' => 'show'
                    )
                ),
                //BG image
                array(
                    "type" => "attach_image",
                    "heading" => esc_html__("BG image", "nt-conversi"),
                    "param_name" => "bg_img",
                    "description" => esc_html__("Add your bg image", "nt-conversi"),
                    'group' => esc_html__('BG Image', 'nt-conversi' ),
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Overlay color display ( hide or show )', 'nt-conversi' ),
                    'param_name' => 'o_display',
                    'description' => esc_html__('You can select hide or show overlay color on bg parallax image', 'nt-conversi' ),
                    'group' => esc_html__('BG Image', 'nt-conversi' ),
                    'value' => array(
                        esc_html__('Show', 'nt-conversi' ) => 'show',
                        esc_html__('Hide', 'nt-conversi' ) => 'hide',
                    ),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Overlay color', 'nt-conversi' ),
                    'param_name' => 'o_color',
                    'description' => esc_html__("Select color", "nt-conversi"),
                    'group' => esc_html__('BG Image', 'nt-conversi' ),
                    'dependency' => array(
                        'element' => 'o_display',
                        'value' => 'show'
                    )
                ),
                //Subscribe Form
                array(
                    'type' => 'textarea_html',
                    'heading' => esc_html__('Subscribe Form shortcode', 'nt-conversi' ),
                    'param_name' => 'content',
                    'description' => esc_html__("Add contact form 7 shortcode here", "nt-conversi"),
                    'group' => esc_html__('Subscribe Form', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textarea',
                    'heading' => esc_html__('Form description', 'nt-conversi' ),
                    'param_name' => 'form_desc',
                    'description' => esc_html__("Add description for subscribe form", "nt-conversi"),
                    'group' => esc_html__('Subscribe Form', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Heading line-height', 'nt-conversi'),
                    'param_name' => 'hlineh',
                    'description' => esc_html__('Change Heading line-height.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Heading font-size', 'nt-conversi'),
                    'param_name' => 'hsize',
                    'description' => esc_html__('Change Heading fontsize.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Heading color', 'nt-conversi'),
                    'param_name' => 'hcolor',
                    'description' => esc_html__('Change Heading color.', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                //
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Description line-height', 'nt-conversi'),
                    'param_name' => 'dlineh',
                    'description' => esc_html__('Change Description line-height.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Description font-size', 'nt-conversi'),
                    'param_name' => 'dsize',
                    'description' => esc_html__('Change Description fontsize.use number in ( px or unit )', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
                array(
                    'type' => 'colorpicker',
                    'heading' => esc_html__('Description color', 'nt-conversi'),
                    'param_name' => 'dcolor',
                    'description' => esc_html__('Change DescriptionDescription color.', 'nt-conversi'),
                    'group' => esc_html__('Custom Style', 'nt-conversi' ),
                ),
            ),
        )
    );
}
class NT_Conversi_section_subscribe extends WPBakeryShortCode {
}

/*-----------------------------------------------------------------------------------*/
/*	LOGO SLIDER conversi
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'NT_Conversi_logoslider_integrateWithVC' );
function NT_Conversi_logoslider_integrateWithVC() {
    vc_map(
        array(
            "name" => esc_html__( "Logo Slider", "nt-conversi" ),
            "base" => "nt_conversi_section_logoslider",
            "category" => esc_html__( "NT Conversi", "nt-conversi"),
            "params" => array(
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Section ID', 'nt-conversi' ),
                    'param_name' => 's_id',
                    'description' => esc_html__("Add Your Section ID for scroll", "nt-conversi"),
                ),
                array(
                    "type" => "attach_images",
                    "heading" => esc_html__("Images", "nt-conversi"),
                    "param_name" => "logos",
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Image width', 'nt-conversi' ),
                    'param_name' => 'imgw',
                    'description' => esc_html__("Use simple number for auto cropping.", "nt-conversi"),
                    'edit_field_class' => 'vc_col-sm-6',
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Image height', 'nt-conversi' ),
                    'param_name' => 'imgh',
                    'description' => esc_html__("Use simple number for auto cropping.", "nt-conversi"),
                    'edit_field_class' => 'vc_col-sm-6',
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Slides to show', 'nt-conversi' ),
                    'param_name' => 'slidestoshow',
                    'group' => esc_html__("Slider Options", "nt-conversi"),
                    'description' => esc_html__("of slides to show at a time", "nt-conversi"),
                    'edit_field_class' => 'vc_col-sm-4 pt15',
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Slides to scroll', 'nt-conversi' ),
                    'param_name' => 'slidestoscroll',
                    'group' => esc_html__("Slider Options", "nt-conversi"),
                    'description' => esc_html__("of slides to scroll at a time", "nt-conversi"),
                    'edit_field_class' => 'vc_col-sm-4',
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Speed', 'nt-conversi' ),
                    'param_name' => 'speed',
                    'group' => esc_html__("Slider Options", "nt-conversi"),
                    'description' => esc_html__("Transition speed", "nt-conversi"),
                    'edit_field_class' => 'vc_col-sm-4',
                ),
                array(
                    'type' => 'checkbox',
                    'param_name' => 'infinite',
                    'heading' => esc_html__('Infinite?', "nt-conversi"),
                    'value' => array( esc_html__('Yes', "nt-conversi") => 'yes' ),
                    'group' => esc_html__("Slider Options", "nt-conversi"),
                    'edit_field_class' => 'vc_col-sm-4',
                ),
                array(
                    'type' => 'checkbox',
                    'param_name' => 'autoplay',
                    'heading' => esc_html__('Autoplay?', "nt-conversi"),
                    'value' => array( esc_html__('Yes', "nt-conversi") => 'yes' ),
                    'group' => esc_html__("Slider Options", "nt-conversi"),
                    'edit_field_class' => 'vc_col-sm-4',
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Autoplay speed', 'nt-conversi' ),
                    'param_name' => 'autoplayspeed',
                    'group' => esc_html__("Slider Options", "nt-conversi"),
                    'description' => esc_html__("Auto play change interval", "nt-conversi"),
                    'edit_field_class' => 'vc_col-sm-4',
                ),
                array(
                    'type' => 'checkbox',
                    'param_name' => 'dots',
                    'heading' => esc_html__('Dots?', "nt-conversi"),
                    'value' => array( esc_html__('Yes', "nt-conversi") => 'yes' ),
                    'group' => esc_html__("Slider Options", "nt-conversi"),
                    'edit_field_class' => 'vc_col-sm-4',
                ),
                array(
                    'type' => 'checkbox',
                    'param_name' => 'arrows',
                    'heading' => esc_html__('Arrows?', "nt-conversi"),
                    'value' => array( esc_html__('Yes', "nt-conversi") => 'yes' ),
                    'group' => esc_html__("Slider Options", "nt-conversi"),
                    'edit_field_class' => 'vc_col-sm-4',
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Arrows vertical position', 'nt-conversi' ),
                    'param_name' => 'arrowsvert',
                    'description' => esc_html__('You can select hide or show section heading all text', 'nt-conversi' ),
                    'group' => esc_html__('Slider Options', 'nt-conversi' ),
                    'edit_field_class' => 'vc_col-sm-6',
                    'value' => array(
                        esc_html__('Select a option', 'nt-conversi' ) => '',
                        esc_html__('Top', 'nt-conversi' ) => 'nav-top',
                        esc_html__('Bottom', 'nt-conversi' ) => 'nav-bottom',
                    ),
                    'dependency' => array(
                        'element' => 'arrows',
                        'not_empty' => true
                    )
                ),
                array(
                    'type' => 'dropdown',
                    'heading' => esc_html__('Arrows horizontal position', 'nt-conversi' ),
                    'param_name' => 'arrowshor',
                    'description' => esc_html__('You can select hide or show section heading all text', 'nt-conversi' ),
                    'group' => esc_html__('Slider Options', 'nt-conversi' ),
                    'edit_field_class' => 'vc_col-sm-6',
                    'value' => array(
                        esc_html__('Select a option', 'nt-conversi' ) => '',
                        esc_html__('Left', 'nt-conversi' ) => 'nav-left',
                        esc_html__('Right', 'nt-conversi' ) => 'nav-right',
                        esc_html__('Center', 'nt-conversi' ) => 'nav-center',
                    ),
                    'dependency' => array(
                        'element' => 'arrows',
                        'not_empty' => true
                    )
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Slides to show (Desktop)', 'nt-conversi' ),
                    'param_name' => 'lgshow',
                    'group' => esc_html__("Responsive", "nt-conversi"),
                    'description' => esc_html__("max-device width 1200px of slides to show at a time", "nt-conversi"),
                    'edit_field_class' => 'vc_col-sm-6 pt15',
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Slides to scroll (Desktop)', 'nt-conversi' ),
                    'param_name' => 'lgscroll',
                    'group' => esc_html__("Responsive", "nt-conversi"),
                    'description' => esc_html__("max-device width 1200px of slides to scroll at a time", "nt-conversi"),
                    'edit_field_class' => 'vc_col-sm-6',
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Slides to show (Tablet)', 'nt-conversi' ),
                    'param_name' => 'mdshow',
                    'group' => esc_html__("Responsive", "nt-conversi"),
                    'description' => esc_html__("max-device width 992px of slides to show at a time", "nt-conversi"),
                    'edit_field_class' => 'vc_col-sm-6',
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Slides to scroll (Tablet)', 'nt-conversi' ),
                    'param_name' => 'mdscroll',
                    'group' => esc_html__("Responsive", "nt-conversi"),
                    'description' => esc_html__("max-device width 992px of slides to scroll at a time", "nt-conversi"),
                    'edit_field_class' => 'vc_col-sm-6',
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Slides to show (Phone)', 'nt-conversi' ),
                    'param_name' => 'smshow',
                    'group' => esc_html__("Responsive", "nt-conversi"),
                    'description' => esc_html__("max-device width 768px of slides to show at a time", "nt-conversi"),
                    'edit_field_class' => 'vc_col-sm-6',
                ),
                array(
                    'type' => 'textfield',
                    'heading' => esc_html__('Slides to scroll (Phone)', 'nt-conversi' ),
                    'param_name' => 'smscroll',
                    'group' => esc_html__("Responsive", "nt-conversi"),
                    'description' => esc_html__("max-device width 768px of slides to scroll at a time", "nt-conversi"),
                    'edit_field_class' => 'vc_col-sm-6',
                ),
                //BACKGROUND CSS
                array(
                    'type' => 'css_editor',
                    'heading' => esc_html__('Background CSS', 'nt-conversi' ),
                    'param_name' => 'bgcss',
                    'group' => esc_html__('Background options', 'nt-conversi' ),
                )
            ),
        )
    );
}
class NT_Conversi_section_logoslider extends WPBakeryShortCode {
}
