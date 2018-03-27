<?php

/**
 * @class UABBInfoTableModule
 */
class UABBInfoTableModule extends FLBuilderModule {

    /**
     *
     * @method __construct
     */
    public function __construct()
    {
        parent::__construct(array(
            'name'              => __('Info Table', 'uabb'),
            'description'       => __('A basic info table.', 'uabb'),
            'category'      => BB_Ultimate_Addon_Helper::module_cat(''),
            'group'         => UABB_CAT,
            'dir'               => BB_ULTIMATE_ADDON_DIR . 'modules/info-table/',
            'url'               => BB_ULTIMATE_ADDON_URL . 'modules/info-table/',
            'editor_export'     => true, // Defaults to true and can be omitted.
            'enabled'           => true, // Defaults to true and can be omitted.
            'partial_refresh'   => true, // Defaults to false and can be omitted.
            'icon'              => 'editor-table.svg',
        ));
        add_filter( 'fl_builder_layout_data', array( $this , 'render_new_data' ), 10, 3 );   
    }

    function render_new_data( $data ) {

        foreach ( $data as &$node ) {
            
            if ( isset( $node->settings->type ) && 'info-table' === $node->settings->type ) {
                
                if ( isset( $node->settings->heading_font_size['small']) && !isset( $node->settings->heading_font_size_unit_responsive ) ) {
                    $node->settings->heading_font_size_unit_responsive = $node->settings->heading_font_size['small'];
                }
                if( isset( $node->settings->heading_font_size['medium']) && !isset( $node->settings->heading_font_size_unit_medium ) ) {
                    $node->settings->heading_font_size_unit_medium = $node->settings->heading_font_size['medium'];
                }
                if( isset( $node->settings->heading_font_size['desktop']) && !isset( $node->settings->heading_font_size_unit ) ) {
                    $node->settings->heading_font_size_unit = $node->settings->heading_font_size['desktop'];
                }

                if ( isset( $node->settings->heading_line_height['small']) && isset( $node->settings->heading_font_size['small']) && $node->settings->heading_font_size['small'] != 0 && !isset( $node->settings->heading_line_height_unit_responsive ) ) {
                    $node->settings->heading_line_height_unit_responsive = $node->settings->heading_line_height['small'] / $node->settings->heading_font_size['small'];
                }
                if( isset( $node->settings->heading_line_height['medium']) && isset( $node->settings->heading_font_size['medium']) && $node->settings->heading_font_size['medium'] != 0 && !isset( $node->settings->heading_line_height_unit_medium ) ) {
                    $node->settings->heading_line_height_unit_medium = $node->settings->heading_line_height['medium'] / $node->settings->heading_font_size['medium'];
                }
                if( isset( $node->settings->heading_line_height['desktop']) && isset( $node->settings->heading_font_size['desktop']) && $node->settings->heading_font_size['desktop'] != 0 && !isset( $node->settings->heading_line_height_unit ) ) {
                    $node->settings->heading_line_height_unit = $node->settings->heading_line_height['desktop'] / $node->settings->heading_font_size['desktop'];
                }

                if ( isset( $node->settings->description_font_size['small']) && !isset( $node->settings->description_font_size_unit_responsive ) ) {
                    $node->settings->description_font_size_unit_responsive = $node->settings->description_font_size['small'];
                }
                if( isset( $node->settings->description_font_size['medium']) && !isset( $node->settings->description_font_size_unit_medium ) ) {
                    $node->settings->description_font_size_unit_medium = $node->settings->description_font_size['medium'];
                }
                if( isset( $node->settings->description_font_size['desktop']) && !isset( $node->settings->description_font_size_unit ) ) {
                    $node->settings->description_font_size_unit = $node->settings->description_font_size['desktop'];
                }

                if ( isset( $node->settings->description_line_height['small']) && isset( $node->settings->description_font_size['small']) && $node->settings->description_font_size['small'] != 0 && !isset( $node->settings->description_line_height_unit_responsive ) ) {
                    $node->settings->description_line_height_unit_responsive = $node->settings->description_line_height['small'] / $node->settings->description_font_size['small'];
                }
                if( isset( $node->settings->description_line_height['medium']) && isset( $node->settings->description_font_size['medium']) && $node->settings->description_font_size['medium'] != 0 && !isset( $node->settings->description_line_height_unit_medium ) ) {
                    $node->settings->description_line_height_unit_medium = $node->settings->description_line_height['medium'] / $node->settings->description_font_size['medium'];
                }
                if( isset( $node->settings->description_line_height['desktop']) && isset( $node->settings->description_font_size['desktop']) && $node->settings->description_font_size['desktop'] != 0 && !isset( $node->settings->description_line_height_unit ) ) {
                    $node->settings->description_line_height_unit = $node->settings->description_line_height['desktop'] / $node->settings->description_font_size['desktop'];
                }

                if ( isset( $node->settings->sub_heading_font_size['small']) && !isset( $node->settings->sub_heading_font_size_unit_responsive ) ) {
                    $node->settings->sub_heading_font_size_unit_responsive = $node->settings->sub_heading_font_size['small'];
                }
                if( isset( $node->settings->sub_heading_font_size['medium']) && !isset( $node->settings->sub_heading_font_size_unit_medium ) ) {
                    $node->settings->sub_heading_font_size_unit_medium = $node->settings->sub_heading_font_size['medium'];
                }
                if( isset( $node->settings->sub_heading_font_size['desktop']) && !isset( $node->settings->sub_heading_font_size_unit ) ) {
                    $node->settings->sub_heading_font_size_unit = $node->settings->sub_heading_font_size['desktop'];
                }

                if ( isset( $node->settings->sub_heading_line_height['small']) && isset( $node->settings->sub_heading_font_size['small']) && $node->settings->sub_heading_font_size['small'] != 0 &&!isset( $node->settings->sub_heading_line_height_unit_responsive ) ) {
                    $node->settings->sub_heading_line_height_unit_responsive = $node->settings->sub_heading_line_height['small'] / $node->settings->sub_heading_font_size['small'];
                }
                if( isset( $node->settings->sub_heading_line_height['medium']) && isset( $node->settings->sub_heading_font_size['medium']) && $node->settings->sub_heading_font_size['medium'] != 0 &&!isset( $node->settings->sub_heading_line_height_unit_medium ) ) {
                    $node->settings->sub_heading_line_height_unit_medium = $node->settings->sub_heading_line_height['medium'] / $node->settings->sub_heading_font_size['medium'];
                }
                if( isset( $node->settings->sub_heading_line_height['desktop']) && isset( $node->settings->sub_heading_font_size['desktop']) && $node->settings->sub_heading_font_size['desktop'] != 0 &&!isset( $node->settings->sub_heading_line_height_unit ) ) {
                    $node->settings->sub_heading_line_height_unit = $node->settings->sub_heading_line_height['desktop'] / $node->settings->sub_heading_font_size['desktop'];
                }

                if ( isset( $node->settings->btn_font_size['small']) && !isset( $node->settings->btn_font_size_unit_responsive ) ) {
                    $node->settings->btn_font_size_unit_responsive = $node->settings->btn_font_size['small'];
                }
                if( isset( $node->settings->btn_font_size['medium']) && !isset( $node->settings->btn_font_size_unit_medium ) ) {
                    $node->settings->btn_font_size_unit_medium = $node->settings->btn_font_size['medium'];
                }
                if( isset( $node->settings->btn_font_size['desktop']) && !isset( $node->settings->btn_font_size_unit ) ) {
                    $node->settings->btn_font_size_unit = $node->settings->btn_font_size['desktop'];
                }

                if ( isset( $node->settings->btn_line_height['small']) && isset( $node->settings->btn_font_size['small']) && $node->settings->btn_font_size['small'] != 0 &&!isset( $node->settings->btn_line_height_unit_responsive ) ) {
                    $node->settings->btn_line_height_unit_responsive = $node->settings->btn_line_height['small'] / $node->settings->btn_font_size['small'];
                }
                if( isset( $node->settings->btn_line_height['medium']) && isset( $node->settings->btn_font_size['medium']) && $node->settings->btn_font_size['medium'] != 0 &&!isset( $node->settings->btn_line_height_unit_medium ) ) {
                    $node->settings->btn_line_height_unit_medium = $node->settings->btn_line_height['medium'] / $node->settings->btn_font_size['medium'];
                }
                if( isset( $node->settings->btn_line_height['desktop']) && isset( $node->settings->btn_font_size['desktop']) && $node->settings->btn_font_size['desktop'] != 0 &&!isset( $node->settings->btn_line_height_unit ) ) {
                    $node->settings->btn_line_height_unit = $node->settings->btn_line_height['desktop'] / $node->settings->btn_font_size['desktop'];
                }
            }
        }

        return $data;
    }
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('UABBInfoTableModule', array(
    'general'       => array(
        'title'         => __( 'General', 'uabb' ),
        'sections'      => array(
            'title-section'  => array(
                'title'            => __( 'Info-Table', 'uabb' ),
                'fields'        => array(
                    'it_title'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Heading', 'uabb' ),
                        'default'       => __( 'Heading', 'uabb' ),
                        'help'          => __('Enter Info-Table Title','uabb'),
                        'connections'   => array( 'string', 'html' )
                    ),
                    'sub_heading'     => array(
                        'type'          => 'text',
                        'label'         => __( 'Sub Heading', 'uabb' ),
                        'default'       => __( 'Sub Heading', 'uabb' ),
                        'connections'   => array( 'string', 'html' )
                    ),
                    'it_long_desc'     => array(
                        'type'          => 'editor',
                        'label'         => '',
                        'default'       => __('Enter description text here.','uabb'),
                        'connections'   => array( 'string', 'html' )
                    ),
                    'it_link_type'          => array(
                        'type'          => 'select',
                        'label'         => __( 'Add Link', 'uabb' ),  
                        'default'       => 'no',
                        'options'       => array(
                            'no'        => __( 'No Link', 'uabb' ),
                            'cta'       => __( 'Call to Action Button', 'uabb' ),
                            'complete_link'       => __( 'Link to Complete Box', 'uabb' ),
                        ),
                        'toggle'        => array(
                            'cta'       => array(
                                'sections'  => array( 'btn-style-section', 'btn_typography' ),
                                'fields'    => array( 'button_text', 'it_link', 'it_link_target' )
                            ),
                            'complete_link'       => array(
                                'fields'    => array( 'it_link', 'it_link_target' )
                            ),
                        ),
                    ),
                    'button_text'   => array(
                        'type'      => 'text',
                        'label'     => __( 'Call to action button text', 'uabb' ),
                        'connections'   => array( 'string', 'html' )
                    ),
                    'it_link'       => array(
                        'type'      => 'link',
                        'label'     => __( 'Select URL', 'uabb' ),
                        'connections'   => array( 'url' )
                    ),
                    'it_link_target'   => array(
                        'type'          => 'select',
                        'label'         => __('Link Target', 'uabb'),
                        'help'          => __( 'Controls where CTA link will open after click.', 'uabb' ),
                        'default'       => '_self',
                        'options'       => array(
                            '_self'         => __('Same Window', 'uabb'),
                            '_blank'        => __('New Window', 'uabb')
                        ),
                        'preview'       => array(
                            'type'          => 'none'
                        )
                    )
                )
            ),
        )
    ),
    'style'       => array(
        'title'         => __( 'Style', 'uabb' ),
        'sections'      => array(
            'style-section'  => array(
                'title'            => __( 'Styles', 'uabb' ),
                'fields'        => array(
                    'box_design'          => array(
                        'type'          => 'select',
                        'label'         => __( 'Select Design Style', 'uabb' ),  
                        'default'       => 'design01',
                        'options'       => array(
                            'design01'        => __( 'Design 01', 'uabb' ),
                            'design02'        => __( 'Design 02', 'uabb' ),
                            'design03'        => __( 'Design 03', 'uabb' ),
                            'design04'        => __( 'Design 04', 'uabb' ),
                            'design05'        => __( 'Design 05', 'uabb' ),
                            'design06'        => __( 'Design 06', 'uabb' ),
                        ),
                        'toggle' => array(
                            'design01' => array(
                                'fields' => array( 'btn_radius', 'btn_top_margin', 'btn_bottom_margin' )
                            ),
                            'design03' => array(
                                'fields' => array( 'btn_radius', 'btn_top_margin', 'btn_bottom_margin' )
                            ),
                            'design04' => array(
                                'fields' => array( 'btn_radius', 'btn_top_margin', 'btn_bottom_margin' )
                            ),
                            'design05' => array(
                                'fields' => array( 'btn_radius', 'btn_top_margin', 'btn_bottom_margin' )
                            ),
                            'design06' => array(
                                'fields' => array( 'btn_radius', 'btn_top_margin', 'btn_bottom_margin' )
                            )
                        )
                    ),
                    'color_scheme'          => array(
                        'type'          => 'select',
                        'label'         => __( 'Select Color Scheme', 'uabb' ),  
                        'default'       => 'black',
                        'options'       => array(
                            'black'        => __( 'Black', 'uabb' ),
                            'red'        => __( 'Red', 'uabb' ),
                            'blue'        => __( 'Blue', 'uabb' ),
                            'yellow'        => __( 'Yellow', 'uabb' ),
                            'green'        => __( 'Green', 'uabb' ),
                            'gray'        => __( 'Gray', 'uabb' ),
                            'custom'        => __( 'Design Your Own', 'uabb' ),
                        ),
                        'toggle'        => array(
                            'custom'       => array(
                                'fields'    => array( 'desc_back_color', 'desc_back_color_opc' )
                            ),
                        )
                    ),
                    'heading_back_color'    => array( 
                        'type'       => 'color',
                        'label'      => __('Main background Color', 'uabb'),
                        'default'    => '',
                        'show_reset' => true,
                    ),
                    'heading_back_color_opc'    => array( 
                        'type'        => 'text',
                        'label'       => __('Opacity', 'uabb'),
                        'default'     => '',
                        'description' => '%',
                        'maxlength'   => '3',
                        'size'        => '5',
                    ),

                    'desc_back_color'    => array( 
                        'type'       => 'color',
                        'label'      => __('Highlight background Color', 'uabb'),
                        'default'    => '',
                        'show_reset' => true,
                    ),
                    'desc_back_color_opc'    => array( 
                        'type'        => 'text',
                        'label'       => __('Opacity', 'uabb'),
                        'default'     => '',
                        'description' => '%',
                        'maxlength'   => '3',
                        'size'        => '5',
                    ),
                    
                    'hover_effect'          => array(
                        'type'          => 'select',
                        'label'         => __( 'Hover Effect', 'uabb' ),  
                        'default'       => 'shadow',
                        'options'       => array(
                            'none'        => __( 'None', 'uabb' ),
                            'shadow'      => __( 'Box Shadow', 'uabb' ),
                        ),
                    ),
                    'min_height'    => array(
                        'type'          => 'text',
                        'label'         => __( 'Min Height', 'uabb' ),  
                        'maxlength'     => '5',
                        'size'          => '6',
                        'description'   => 'px',
                    ),
                )
            ),
            'btn-style-section'  => array(
                'title'            => __( 'CTA Button Style', 'uabb' ),
                'fields'        => array(

                    'btn_text_color'        => array( 
                        'type'       => 'color',
                        'label'         => __('Text Color', 'uabb'),
                        'default'    => '',
                        'show_reset' => true,
                    ),
                    'btn_text_hover_color'        => array( 
                        'type'       => 'color',
                        'label'         => __('Text Hover Color', 'uabb'),
                        'default'    => '',
                        'show_reset' => true,
                        'preview'       => array(
                            'type'          => 'none'
                        )
                    ),
                    'btn_bg_color'    => array( 
                        'type'       => 'color',
                        'label'      => __('Background Color', 'uabb'),
                        'default'    => '',
                        'show_reset' => true,
                    ),
                    'btn_bg_color_opc'    => array( 
                        'type'        => 'text',
                        'label'       => __('Opacity', 'uabb'),
                        'default'     => '',
                        'description' => '%',
                        'maxlength'   => '3',
                        'size'        => '5',
                    ),

                    'btn_bg_hover_color'    => array( 
                        'type'       => 'color',
                        'label'      => __('Background Hover Color', 'uabb'),
                        'default'    => '',
                        'show_reset' => true,
                    ),
                    'btn_bg_hover_color_opc'    => array( 
                        'type'        => 'text',
                        'label'       => __('Opacity', 'uabb'),
                        'default'     => '',
                        'description' => '%',
                        'maxlength'   => '3',
                        'size'        => '5',
                    ),
                    'btn_radius'    => array(
                        'type'          => 'text',
                        'label'         => __('Border Radius', 'uabb'),
                        'default'       => '',
                        'maxlength'     => '3',
                        'size'          => '6',
                        'placeholder'   => '3',
                        'description'   => 'px',
                    ),
                    'btn_top_margin'    => array(
                        'type'          => 'text',
                        'label'         => __('Top Margin', 'uabb'),
                        'default'       => '',
                        'maxlength'     => '4',
                        'size'          => '6',
                        'description'   => 'px',
                        'placeholder'   => '15',
                    ),
                    'btn_bottom_margin'  => array(
                        'type'          => 'text',
                        'label'         => __('Bottom Margin', 'uabb'),
                        'default'       => '',
                        'maxlength'     => '4',
                        'size'          => '6',
                        'description'   => 'px',
                        'placeholder'   => '15',
                    ),
                )
            ),
        )
    ),

    'it_image_icon' => array(
        'title'         => __('Image / Icon', 'uabb'),
        'sections'      => array(
            'type_general'      => array( // Section
                'title'         => __('Image / Icon', 'uabb'), // Section Title
                'fields'        => array( // Section Fields
                    'image_type'    => array(
                        'type'          => 'select',
                        'label'         => __('Image Type', 'uabb'),
                        'default'       => 'icon',
                        'options'       => array(
                            'none'          => __( 'None', 'Image type.', 'uabb' ),
                            'icon'          => __('Icon', 'uabb'),
                            'photo'         => __('Photo', 'uabb'),
                        ),
                        'class'         => 'class_image_type',
                        'toggle'        => array(
                            'icon'          => array(
                                'sections'   => array( 'icon_basic',  'icon_style', 'icon_colors' ),
                            ),
                            'photo'         => array(
                                'sections'   => array( 'img_basic', 'img_style' ),
                            )
                        ),
                    ),
                )
            ),
            'icon_basic'    =>  array( // Section
                'title'         => __('Icon Basics','uabb'), // Section Title
                'fields'        => array( // Section Fields
                    'icon'          => array(
                        'type'          => 'icon',
                        'label'         => __('Icon', 'uabb'),
                        'show_remove'   => true,
                        'default'       => 'fa fa-child'
                    ),
                    'icon_size'     => array(
                        'type'          => 'text',
                        'label'         => __('Size', 'uabb'),
                        'maxlength'     => '5',
                        'size'          => '6',
                        'description'   => 'px',
                        'placeholder'       => '75',
                        'preview'   => array(
                            'type'      => 'refresh',
                        ),
                    ),
                )
            ),
            
            /* Image Basic Setting */
            'img_basic'     =>  array( // Section
                'title'         => __('Image Basics','uabb'), // Section Title
                'fields'        => array( // Section Fields
                    'photo_source'  => array(
                        'type'          => 'select',
                        'label'         => __('Photo Source', 'uabb'),
                        'default'       => 'library',
                        'options'       => array(
                            'library'       => __('Media Library', 'uabb'),
                            'url'           => __('URL', 'uabb')
                        ),
                        'toggle'        => array(
                            'library'       => array(
                                'fields'        => array('photo')
                            ),
                            'url'           => array(
                                'fields'        => array('photo_url' )
                            )
                        )
                    ),
                    'photo'         => array(
                        'type'          => 'photo',
                        'label'         => __('Photo', 'uabb'),
                        'show_remove'   => true,
                        'connections'         => array( 'photo' )
                    ),
                    'photo_url'     => array(
                        'type'          => 'text',
                        'label'         => __('Photo URL', 'uabb'),
                        'placeholder'   => 'http://www.example.com/my-photo.jpg',
                    ),
                    'img_size'     => array(
                        'type'          => 'text',
                        'label'         => __('Size', 'uabb'),
                        'maxlength'     => '5',
                        'size'          => '6',
                        'description'   => 'px',
                        'placeholder'       => '150',
                        'preview'   => array(
                            'type'      => 'refresh',
                        ),
                    ),
                    'img_align'         => array(
                        'type'          => 'select',
                        'label'         => __('Alignment', 'uabb'),
                        'options'       => array(
                            'left'          => __('Left', 'uabb'),
                            'center'        => __('Center', 'uabb'),
                            'right'         => __('Right', 'uabb'),
                            'inherit'       => __('Default', 'uabb'),
                        ),
                        'default'       => 'inherit',
                    )
                )
            ),
            'icon_style'    =>  array(
                'title'           => __('Style','uabb'),
                'fields'        => array(
                    /* Icon Style */
                   'icon_style'         => array(
                        'type'          => 'select',
                        'label'         => __('Icon Background Style', 'uabb'),
                        'default'       => 'simple',
                        'options'       => array(
                            'simple'        => __('Simple', 'uabb'),
                            'circle'          => __('Circle Background', 'uabb'),
                            'square'         => __('Square Background', 'uabb'),
                            'custom'         => __('Design your own', 'uabb'),
                        ),
                        'toggle' => array(
                            'simple' => array(
                                'fields' => array(),
                                /*'sections' => array( 'colors' )*/
                            ),
                            'circle' => array(
                                /*'sections' => array( 'colors' ),*/
                                'fields' => array( 'icon_color_preset', 'icon_bg_color', 'icon_bg_color_opc', 'icon_bg_hover_color', 'icon_bg_hover_color_opc', 'icon_three_d' ),
                            ),
                            'square' => array(
                                /*'sections' => array( 'colors' ),*/
                                'fields' => array( 'icon_color_preset', 'icon_bg_color', 'icon_bg_color_opc', 'icon_bg_hover_color', 'icon_bg_hover_color_opc', 'icon_three_d' ),
                            ),
                            'custom' => array(
                                /*'sections' => array( 'colors' ),*/
                                'fields' => array( 'icon_color_preset', 'icon_border_style', 'icon_bg_color', 'icon_bg_color_opc', 'icon_bg_hover_color', 'icon_bg_hover_color_opc', 'icon_three_d', 'icon_bg_size', 'icon_bg_border_radius' ),
                            )
                        ),
                        'trigger' => array(
                            'custom' => array(
                                'fields' => array( 'icon_border_style' ),
                            )
                        ),
                    ),
                    
                    /* Icon Background SIze */
                    'icon_bg_size'          => array(
                        'type'          => 'text',
                        'label'         => __('Background Size', 'uabb'),
                        'help'          => __('Spacing between Icon & Background edge','uabb'),
                        'placeholder'   => '30',
                        'maxlength'     => '3',
                        'size'          => '6',
                        'description'   => 'px'
                    ),

                    /* Border Style and Radius for Icon */
                    'icon_border_style'   => array(
                        'type'          => 'select',
                        'label'         => __('Border Style', 'uabb'),
                        'default'       => 'none',
                        'help'          => __('The type of border to use. Double borders must have a width of at least 3px to render properly.', 'uabb'),
                        'options'       => array(
                            'none'   => __( 'None', 'Border type.', 'uabb' ),
                            'solid'  => __( 'Solid', 'Border type.', 'uabb' ),
                            'dashed' => __( 'Dashed', 'Border type.', 'uabb' ),
                            'dotted' => __( 'Dotted', 'Border type.', 'uabb' ),
                            'double' => __( 'Double', 'Border type.', 'uabb' )
                        ),
                        'toggle'        => array(
                            'solid'         => array(
                                'fields'        => array('icon_border_width', 'icon_border_color','icon_border_hover_color' )
                            ),
                            'dashed'        => array(
                                'fields'        => array('icon_border_width', 'icon_border_color','icon_border_hover_color' )
                            ),
                            'dotted'        => array(
                                'fields'        => array('icon_border_width', 'icon_border_color','icon_border_hover_color' )
                            ),
                            'double'        => array(
                                'fields'        => array('icon_border_width', 'icon_border_color','icon_border_hover_color' )
                            )
                        ),
                    ),
                    'icon_border_width'    => array(
                        'type'          => 'text',
                        'label'         => __('Border Width', 'uabb'),
                        'description'   => 'px',
                        'maxlength'     => '3',
                        'size'          => '6',
                        'placeholder'   => '1',
                        'preview'   => array(
                            'type'      => 'refresh',
                        ),
                    ),
                    'icon_bg_border_radius'    => array(
                        'type'          => 'text',
                        'label'         => __('Border Radius', 'uabb'),
                        'description'   => 'px',
                        'maxlength'     => '3',
                        'size'          => '6',
                        'placeholder'   => '20',
                    ),
                )
            ),
            'img_style'     =>  array(
                'title'         => __('Style','uabb'),
                'fields'        => array(
                    /* Image Style */
                    'image_style'         => array(
                        'type'          => 'select',
                        'label'         => __('Image Style', 'uabb'),
                        'default'       => 'simple',
                        'help'          => __('Circle and Square style will crop your image in 1:1 ratio','uabb'),
                        'options'       => array(
                            'simple'        => __('Simple', 'uabb'),
                            'circle'        => __('Circle', 'uabb'),
                            'square'        => __('Square', 'uabb'),
                            'custom'        => __('Design your own', 'uabb'),
                        ),
                        'class' => 'uabb-image-icon-style',
                        'toggle' => array(
                            'simple' => array(
                                'fields' => array()
                            ),
                            'circle' => array(
                                'fields' => array( ),
                            ),
                            'square' => array(
                                'fields' => array( ),
                            ),
                            'custom' => array(
                                'sections'  => array( 'img_colors' ),
                                'fields'    => array( 'img_bg_size', 'img_border_style', 'img_border_width', 'img_bg_border_radius' ) 
                            )
                        ),
                        'trigger'       => array(
                            'custom'           => array(
                                'fields'        => array('img_border_style')
                            ),
                            
                        )
                    ),

                    /* Image Background Size */
                    'img_bg_size'          => array(
                        'type'          => 'text',
                        'label'         => __('Background Size', 'uabb'),
                        'help'          => __('Spacing between Image edge & Background edge','uabb'),
                        'maxlength'     => '3',
                        'size'          => '6',
                        'description'   => 'px',
                        'preview'   => array(
                            'type'      => 'refresh',
                        ),
                    ),

                    /* Border Style and Radius for Image */
                    'img_border_style'   => array(
                        'type'          => 'select',
                        'label'         => __('Border Style', 'uabb'),
                        'default'       => 'none',
                        'help'          => __('The type of border to use. Double borders must have a width of at least 3px to render properly.', 'uabb'),
                        'options'       => array(
                            'none'   => __( 'None', 'Border type.', 'uabb' ),
                            'solid'  => __( 'Solid', 'Border type.', 'uabb' ),
                            'dashed' => __( 'Dashed', 'Border type.', 'uabb' ),
                            'dotted' => __( 'Dotted', 'Border type.', 'uabb' ),
                            'double' => __( 'Double', 'Border type.', 'uabb' )
                        ),
                        'toggle'        => array(
                            'solid'         => array(
                                'fields'        => array('img_border_width', 'img_border_radius','img_border_color','img_border_hover_color' )
                            ),
                            'dashed'        => array(
                                'fields'        => array('img_border_width', 'img_border_radius','img_border_color','img_border_hover_color' )
                            ),
                            'dotted'        => array(
                                'fields'        => array('img_border_width', 'img_border_radius','img_border_color','img_border_hover_color' )
                            ),
                            'double'        => array(
                                'fields'        => array('img_border_width', 'img_border_radius','img_border_color','img_border_hover_color' )
                            )
                        ),
                    ),
                    'img_border_width'    => array(
                        'type'          => 'text',
                        'label'         => __('Border Width', 'uabb'),
                        'description'   => 'px',
                        'maxlength'     => '3',
                        'size'          => '6',
                        'placeholder'   => '1',
                        'preview'   => array(
                            'type'      => 'refresh',
                        ),
                    ),
                    'img_bg_border_radius'    => array(
                        'type'          => 'text',
                        'label'         => __('Border Radius', 'uabb'),
                        'description'   => 'px',
                        'maxlength'     => '3',
                        'size'          => '6',
                        'placeholder'   => '0',
                    ),
                )
            ),
            'icon_colors'   => array( // Section
                'title'         => __('Colors', 'uabb'), // Section Title
                'fields'        => array( // Section Fields
                            
                    /* Style Options */
                    'icon_color_preset'     => array(
                        'type'          => 'uabb-toggle-switch',
                        'label'         => __( 'Icon Color Presets', 'uabb' ),
                        'default'       => 'preset1',
                        'options'       => array(
                            'preset1'       => __('Preset 1','uabb'),
                            'preset2'       => __('Preset 2','uabb'),
                            /*'preset3'     => 'Preset 3',*/
                        ),
                        'help'          => __('Preset 1 => Icon : White, Background : Theme </br>Preset 2 => Icon : Theme, Background : #f3f3f3', 'uabb')
                    ),
                    /* Icon Color */
                    'icon_color' => array( 
                        'type'       => 'color',
                        'label'      => __('Icon Color', 'uabb'),
                        'default'    => '',
                        'show_reset' => true,
                    ),
                    'icon_hover_color' => array( 
                        'type'       => 'color',
                        'label'      => __('Icon Hover Color', 'uabb'),
                        'default'    => '',
                        'show_reset' => true,
                        'preview'       => array(
                               'type'      => 'none',
                        )
                    ),

                    /* Background Color Dependent on Icon Style **/
                    'icon_bg_color' => array( 
                        'type'       => 'color',
                        'label'         => __('Background Color', 'uabb'),
                        'default'    => '',
                        'show_reset' => true,
                    ),
                    'icon_bg_color_opc' => array( 
                        'type'        => 'text',
                        'label'       => __('Opacity', 'uabb'),
                        'default'     => '',
                        'description' => '%',
                        'maxlength'   => '3',
                        'size'        => '5',
                    ),
                    'icon_bg_hover_color' => array( 
                        'type'       => 'color',
                        'label'      => __('Background Hover Color', 'uabb'),
                        'default'    => '',
                        'show_reset' => true,
                        'preview'       => array(
                                'type'      => 'none',
                        )
                    ),
                    'icon_bg_hover_color_opc' => array( 
                        'type'        => 'text',
                        'label'       => __('Opacity', 'uabb'),
                        'default'     => '',
                        'description' => '%',
                        'maxlength'   => '3',
                        'size'        => '5',
                    ),

                     /* Border Color Dependent on Border Style for ICon */
                    'icon_border_color' => array( 
                        'type'       => 'color',
                        'label'      => __('Border Color', 'uabb'),
                        'default'    => '',
                        'show_reset' => true,
                    ),
                    'icon_border_hover_color' => array( 
                        'type'       => 'color',
                        'label'      => __('Border Hover Color', 'uabb'),
                        'default'    => '',
                        'show_reset' => true,
                    ),
                    
                    /* Gradient Color Option */
                    'icon_three_d'       => array(
                        'type'          => 'select',
                        'label'         => __('Gradient', 'uabb'),
                        'default'       => '0',
                        'options'       => array(
                            '0'             => __('No', 'uabb'),
                            '1'             => __('Yes', 'uabb')
                        )
                    ),
                )
            ),
            'img_colors'    => array( // Section
                'title'         => __('Colors', 'uabb'), // Section Title
                'fields'        => array( // Section Fields
                    /* Background Color Dependent on Icon Style **/
                    'img_bg_color' => array( 
                        'type'       => 'color',
                        'label'      => __('Background Color', 'uabb'),
                        'default'    => '',
                        'show_reset' => true,
                    ),
                    'img_bg_color_opc' => array( 
                        'type'        => 'text',
                        'label'       => __('Opacity', 'uabb'),
                        'default'     => '',
                        'description' => '%',
                        'maxlength'   => '3',
                        'size'        => '5',
                    ),
                    'img_bg_hover_color' => array( 
                        'type'       => 'color',
                        'label'      => __('Background Hover Color', 'uabb'),
                        'default'    => '',
                        'show_reset' => true,
                        'preview'       => array(
                                'type'      => 'none',
                        )
                    ),
                    'img_bg_hover_color_opc' => array( 
                        'type'        => 'text',
                        'label'       => __('Opacity', 'uabb'),
                        'default'     => '',
                        'description' => '%',
                        'maxlength'   => '3',
                        'size'        => '5',
                    ),

                     /* Border Color Dependent on Border Style for Image */
                    'img_border_color' => array( 
                        'type'       => 'color',
                        'label'         => __('Border Color', 'uabb'),
                        'default'    => '',
                        'show_reset' => true,
                    ),
                    'img_border_hover_color' => array( 
                        'type'       => 'color',
                        'label'         => __('Border Hover Color', 'uabb'),
                        'default'    => '',
                        'show_reset' => true,
                    ),
                )
            ),
        )
    ),
    'typography'         => array(
        'title'         => __('Typography', 'uabb'),
        'sections'      => array(
            'heading_typography'    =>  array(
                'title' => __('Heading', 'uabb' ),
                'fields'    => array(
                    'heading_tag_selection'   => array(
                        'type'          => 'select',
                        'label'     => __( 'Select Tag', 'uabb' ),
                        'default'   => 'h3',
                        'options'       => array(
                            'h1'      => __('H1', 'uabb'),
                            'h2'      => __('H2', 'uabb'),
                            'h3'      => __('H3', 'uabb'),
                            'h4'      => __('H4', 'uabb'),
                            'h5'      => __('H5', 'uabb'),
                            'h6'      => __('H6', 'uabb'),
                            'div'     => __('Div', 'uabb'),
                            'p'       => __('p', 'uabb'),
                            'span'    => __('span', 'uabb'),
                        )
                    ),
                    'heading_font_family'       => array(
                        'type'          => 'font',
                        'label'         => __('Font Family', 'uabb'),
                        'default'       => array(
                            'family'        => 'Default',
                            'weight'        => 'Default'
                        ),
                        'preview'         => array(
                            'type'            => 'font',
                            'selector'        => '.info-table-main-heading'
                        )
                    ),
                    'heading_font_size_unit'     => array(
                        'type'          => 'unit',
                        'label'         => __( 'Font Size', 'uabb' ),
                        'preview'         => array(
                            'type'            => 'css',
                            'selector'        => '.info-table-main-heading',
                            'property'        => 'font-size',
                            'unit'            => 'px'
                        ),
                        'responsive' => array(
                            'placeholder' => array(
                                'default' => '',
                                'medium' => '',
                                'responsive' => '',
                            ),
                        ),
                    ),
                    'heading_line_height_unit'    => array(
                        'type'          => 'unit',
                        'label'         => __( 'Line Height', 'uabb' ),
                        'preview'         => array(
                            'type'            => 'css',
                            'selector'        => '.info-table-main-heading',
                            'property'        => 'line-height',
                            'unit'            => 'px'
                        ),
                        'responsive' => array(
                            'placeholder' => array(
                                'default' => '',
                                'medium' => '',
                                'responsive' => '',
                            ),
                        ),
                    ),
                    'heading_color'        => array( 
                        'type'       => 'color',
                        'label'     => __( 'Color', 'uabb' ),
                        'default'    => '',
                        'show_reset' => true,
                    ),
                )
            ),
            'sub_heading_typography'    =>  array(
                'title' => __('Sub Heading', 'uabb' ),
                'fields'    => array(
                    'sub_heading_tag_selection'   => array(
                        'type'          => 'select',
                        'label'     => __( 'Select Tag', 'uabb' ),
                        'default'   => 'h5',
                        'options'       => array(
                            'h1'      => __('H1', 'uabb'),
                            'h2'      => __('H2', 'uabb'),
                            'h3'      => __('H3', 'uabb'),
                            'h4'      => __('H4', 'uabb'),
                            'h5'      => __('H5', 'uabb'),
                            'h6'      => __('H6', 'uabb'),
                            'div'     => __('Div', 'uabb'),
                            'p'       => __('p', 'uabb'),
                            'span'    => __('span', 'uabb'),
                        )
                    ),
                    'sub_heading_font_family'       => array(
                        'type'          => 'font',
                        'label'         => __('Font Family', 'uabb'),
                        'default'       => array(
                            'family'        => 'Default',
                            'weight'        => 'Default'
                        ),
                        'preview'         => array(
                            'type'            => 'font',
                            'selector'        => '.info-table-sub-heading'
                        )
                    ),
                    'sub_heading_font_size_unit'     => array(
                        'type'          => 'unit',
                        'label'         => __( 'Font Size', 'uabb' ),
                        'preview'         => array(
                            'type'            => 'css',
                            'selector'        => '.info-table-sub-heading',
                            'property'        => 'font-size',
                            'unit'            => 'px',
                        ),
                        'responsive' => array(
                            'placeholder' => array(
                                'default' => '',
                                'medium' => '',
                                'responsive' => '',
                            ),
                        ),
                    ),
                    'sub_heading_line_height_unit'    => array(
                        'type'          => 'unit',
                        'label'         => __( 'Line Height', 'uabb' ),
                        'preview'         => array(
                            'type'            => 'css',
                            'selector'        => '.info-table-sub-heading',
                            'property'        => 'line-height',
                            'unit'            => 'px',
                        ),
                        'responsive' => array(
                            'placeholder' => array(
                                'default' => '',
                                'medium' => '',
                                'responsive' => '',
                            ),
                        ),
                    ),
                    'sub_heading_color'        => array( 
                        'type'       => 'color',
                        'label'     => __( 'Color', 'uabb' ),
                        'default'    => '',
                        'show_reset' => true,
                    ),
                )
            ),
            'description_typography'    =>  array(
                'title' => __('Description', 'uabb' ),
                'fields'    => array(
                    'description_font_family'       => array(
                        'type'          => 'font',
                        'label'         => __('Font Family', 'uabb'),
                        'default'       => array(
                            'family'        => 'Default',
                            'weight'        => 'Default'
                        ),
                        'preview'         => array(
                            'type'            => 'font',
                            'selector'        => '.info-table-description *'
                        )
                    ),
                    'description_font_size_unit'     => array(
                        'type'          => 'unit',
                        'label'         => __( 'Font Size', 'uabb' ),
                       'preview'         => array(
                            'type'            => 'css',
                            'selector'        => '.info-table-description *',
                            'property'        => 'font-size',
                            'unit'            => 'px',
                        ),
                       'responsive' => array(
                            'placeholder' => array(
                                'default' => '',
                                'medium' => '',
                                'responsive' => '',
                            ),
                        ),
                    ),
                    'description_line_height_unit'    => array(
                        'type'          => 'unit',
                        'label'         => __( 'Line Height', 'uabb' ),
                        'preview'         => array(
                            'type'            => 'css',
                            'selector'        => '.info-table-description *',
                            'property'        => 'line-height',
                            'unit'            => 'px',
                        ),
                        'responsive' => array(
                            'placeholder' => array(
                                'default' => '',
                                'medium' => '',
                                'responsive' => '',
                            ),
                        ),
                    ),
                    'description_color'        => array( 
                        'type'       => 'color',
                        'label'      => __('Color', 'uabb'),
                        'default'    => '',
                        'show_reset' => true,
                    ),
                )
            ),
            'btn_typography'    =>  array(
                'title' => __('Button', 'uabb' ),
                'fields'    => array(
                    'btn_font_family'       => array(
                        'type'          => 'font',
                        'label'         => __('Font Family', 'uabb'),
                        'default'       => array(
                            'family'        => 'Default',
                            'weight'        => 'Default'
                        ),
                        'preview'         => array(
                            'type'            => 'font',
                            'selector'        => '.info-table-button a'
                        )
                    ),
                    'btn_font_size_unit'     => array(
                        'type'          => 'unit',
                        'label'         => __( 'Font Size', 'uabb' ),
                        'responsive' => array(
                            'placeholder' => array(
                                'default' => '',
                                'medium' => '',
                                'responsive' => '',
                            ),
                        ),
                    ),
                    'btn_line_height_unit'    => array(
                        'type'          => 'unit',
                        'label'         => __( 'Line Height', 'uabb' ),
                        'responsive' => array(
                            'placeholder' => array(
                                'default' => '',
                                'medium' => '',
                                'responsive' => '',
                            ),
                        ),
                    ),
                )
            ),
        )
    )
));
