<?php

/**
 * This widget lets you set a background on a text editor block
 *
 * @class FLBlockWidget
 */
class FLBlockWidget extends FLBuilderModule {

    /**
     * Constructor function for the module. You must pass the
     * name, description, dir and url in an array to the parent class.
     *
     * @method __construct
     */
    public function __construct()
    {
        parent::__construct(array(
            'name'          => __('Block Widget', 'fl-builder'),
            'description'   => __('This widget lets you set a background on a text editor block.', 'fl-builder'),
            'category'		=> __('Advanced Modules', 'fl-builder'),
            'dir'           => FL_MODULE_EXAMPLES_DIR . 'block-widget/',
            'url'           => FL_MODULE_EXAMPLES_URL . 'block-widget/',
            'editor_export' => true,
            'enabled'       => true,
        ));
    }
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('FLBlockWidget', array(
    'general'       => array( // Tab
        'title'         => __('General', 'fl-builder'), // Tab title
        'sections'      => array( // Tab Sections
            'content'       => array( // Section
                'title'         => __('Content', 'fl-builder'), // Section Title
                'fields'        => array( // Section Fields
                    'editor_field' => array(
                        'type'          => 'editor',
                        'media_buttons' => true,
                        'rows'          => 10
                    ),
                )
            ),
            'style'       => array( // Section
                'title'         => __('Style', 'fl-builder'), // Section Title
                'fields'        => array( // Section Fields
                    'padding'     => array(
                        'type'          => 'select',
                        'label'         => __('Use padding', 'fl-builder'),
                        'default'       => 'no',
                        'options'       => array(
                            'yes'         => __('Yes', 'fl-builder'),
                            'no'         => __('No', 'fl-builder')
                        ),
                        'toggle'        => array(
                            'yes'         => array(
                                'fields'        => array('padding_top','padding_bottom','padding_left','padding_right'),
                                'sections'      => array('content', 'text')
                            ),
                            'no'         => array(
                            )
                        )
                    ),
                    'padding_top' => array(
                        'type'          => 'text',
                        'label'         => __( 'Padding top', 'fl-builder' ),
                        'default'       => '0',
                        'maxlength'     => '2',
                        'size'          => '3',
                        'placeholder'   => __( '10', 'fl-builder' ),
                        'description'   => __( 'px', 'fl-builder' ),
                    ),
                    'padding_bottom' => array(
                        'type'          => 'text',
                        'label'         => __( 'Padding bottom', 'fl-builder' ),
                        'default'       => '10',
                        'maxlength'     => '2',
                        'size'          => '3',
                        'placeholder'   => __( '10', 'fl-builder' ),
                        'description'   => __( 'px', 'fl-builder' ),
                    ),
                    'padding_left' => array(
                        'type'          => 'text',
                        'label'         => __( 'Padding left', 'fl-builder' ),
                        'default'       => '10',
                        'maxlength'     => '2',
                        'size'          => '3',
                        'placeholder'   => __( '10', 'fl-builder' ),
                        'description'   => __( 'px', 'fl-builder' ),
                    ),
                    'padding_right' => array(
                        'type'          => 'text',
                        'label'         => __( 'Padding right', 'fl-builder' ),
                        'default'       => '10',
                        'maxlength'     => '2',
                        'size'          => '3',
                        'placeholder'   => __( '10', 'fl-builder' ),
                        'description'   => __( 'px', 'fl-builder' ),
                    ),
                    'border_radius' => array(
                        'type'          => 'text',
                        'label'         => __( 'Border radius', 'fl-builder' ),
                        'default'       => '0',
                        'maxlength'     => '2',
                        'size'          => '3',
                        'placeholder'   => __( '0', 'fl-builder' ),
                        'description'   => __( 'px', 'fl-builder' ),
                    ),
                    'borders'     => array(
                        'type'          => 'select',
                        'label'         => __('Use borders', 'fl-builder'),
                        'default'       => 'no',
                        'options'       => array(
                            'yes'         => __('Yes', 'fl-builder'),
                            'no'         => __('No', 'fl-builder')
                        ),
                        'toggle'        => array(
                            'yes'         => array(
                                'fields'        => array('border_top','border_bottom','border_left','border_right','border_color'),
                                'sections'      => array('content', 'text')
                            ),
                            'no'         => array(
                            )
                        )
                    ),
                    'border_top' => array(
                        'type'          => 'text',
                        'label'         => __( 'Border top', 'fl-builder' ),
                        'default'       => '0',
                        'maxlength'     => '2',
                        'size'          => '3',
                        'placeholder'   => __( '0', 'fl-builder' ),
                        'description'   => __( 'px', 'fl-builder' ),
                    ),
                    'border_bottom' => array(
                        'type'          => 'text',
                        'label'         => __( 'Border bottom', 'fl-builder' ),
                        'default'       => '0',
                        'maxlength'     => '2',
                        'size'          => '3',
                        'placeholder'   => __( '0', 'fl-builder' ),
                        'description'   => __( 'px', 'fl-builder' ),
                    ),
                    'border_left' => array(
                        'type'          => 'text',
                        'label'         => __( 'Border left', 'fl-builder' ),
                        'default'       => '0',
                        'maxlength'     => '2',
                        'size'          => '3',
                        'placeholder'   => __( '0', 'fl-builder' ),
                        'description'   => __( 'px', 'fl-builder' ),
                    ),
                    'border_right' => array(
                        'type'          => 'text',
                        'label'         => __( 'Border right', 'fl-builder' ),
                        'default'       => '0',
                        'maxlength'     => '2',
                        'size'          => '3',
                        'placeholder'   => __( '0', 'fl-builder' ),
                        'description'   => __( 'px', 'fl-builder' ),
                    ),
                    'border_color'      => array(
                        'type'          => 'color',
                        'label'         => __('Border color', 'fl-builder')
                    ),
                )
            ),
            'background' => array(
                'title'     => __('Background Layout', 'fl-builder'),
                'fields'    => array(
                    'bg_layout'     => array(
                        'type'          => 'select',
                        'label'         => __('Type', 'fl-builder'),
                        'default'       => 'photo',
                        'help'          => __('This setting is for the entire background of your block.', 'fl-builder'),
                        'options'       => array(
                            'photo'         => __('Photo', 'fl-builder'),
                            'color'         => __('Color', 'fl-builder'),
                            'none'          => __('None', 'fl-builder')
                        ),
                        'toggle'        => array(
                            'photo'         => array(
                                'fields'        => array('bg_photo','bg_photo_color','photo_settings'),
                                'sections'      => array('content', 'text')
                            ),
                            'color'         => array(
                                'fields'        => array('bg_color','bg_text_color'),
                                'sections'      => array('content', 'text')
                            ),
                            'none'          => array(
                                'sections'      => array('content', 'text')
                            )
                        )
                    ),
                    'photo_settings'     => array(
                        'type'          => 'select',
                        'label'         => __('Photo behaviour', 'fl-builder'),
                        'default'       => 'center',
                        'options'       => array(
                            'cover'         => __('Cover', 'fl-builder'),
                            'center'         => __('Center', 'fl-builder')
                        )
                    ),
                    'bg_photo'      => array(
                        'type'          => 'photo',
                        'label'         => __('Background Photo', 'fl-builder')
                    ),
                    'bg_photo_color'      => array(
                        'type'          => 'color',
                        'label'         => __('Photo text color', 'fl-builder')
                    ),
                    'bg_color'      => array(
                        'type'          => 'color',
                        'label'         => __('Background Color', 'fl-builder'),
                        'show_reset'    => true
                    ),
                    'bg_text_color'      => array(
                        'type'          => 'color',
                        'label'         => __('Text Color', 'fl-builder'),
                        'show_reset'    => true
                    )
                )
            )
        )
    )
));
