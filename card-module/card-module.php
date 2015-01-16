<?php

/**
* This widget lets you set a background on a text editor block
*
* @class FLCardModule
*/
class FLCardModule extends FLBuilderModule {

  /**
  * Constructor function for the module. You must pass the
  * name, description, dir and url in an array to the parent class.
  *
  * @method __construct
  */
  public function __construct()
  {
    parent::__construct(array(
      'name'          => __('Card', 'fl-builder'),
      'description'   => __('This module lets you create a card with photo and a background on a text editor block.', 'fl-builder'),
      'category'		=> __('Advanced Modules', 'fl-builder'),
      'dir'           => FL_CARDMODULE_DIR . 'card-module/',
      'url'           => FL_CARDMODULE_URL . 'card-module/',
      'editor_export' => true,
      'enabled'       => true,
    ));
  }
}

/**
* Register the module and its form settings.
*/
FLBuilder::register_module('FLCardModule', array(
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
          )
        )
      )
    )
  ),
  'appearance'    => array( // Tab
    'title'   => __('Settings', 'fl-builder'),
    'sections'    => array(
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
          'block_height'      => array(
            'type'          => 'text',
            'label'         => __('Block height', 'fl-builder')
          )
        )
      ),
      'background' => array( // Section
        'title'     => __('Background', 'fl-builder'),
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
                'fields'        => array('bg_photo','bg_text_color','photo_settings','photo_repeat','bg_color','bg_position'),
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
          'bg_photo'      => array(
            'type'          => 'photo',
            'label'         => __('Background Photo', 'fl-builder')
          ),
          'photo_settings'     => array(
            'type'          => 'select',
            'label'         => __('Photo behaviour', 'fl-builder'),
            'default'       => 'center',
            'options'       => array(
              'cover'         => __('Cover', 'fl-builder'),
              'none'         => __('Normal', 'fl-builder')
            )
          ),
          'photo_repeat'     => array(
            'type'          => 'select',
            'label'         => __('Repeat', 'fl-builder'),
            'default'       => 'no',
            'options'       => array(
              'yes'         => __('Yes', 'fl-builder'),
              'no'         => __('No', 'fl-builder')
            )
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
          ),
          'bg_position'      => array(
            'type'          => 'text',
            'label'         => __('Background position', 'fl-builder'),
            'placeholder'   => __('Example Left top, Right bottom, X Y', 'fl-builder'),
            'default'       => 'center center',
          )
        )
      )
    )
  ),
  'card_layout'    => array( // Tab
    'title'   => __('Photo', 'fl-builder'),
    'sections'    => array(
      'card' => array( // Section
        'title'     => __('Card photo', 'fl-builder'),
        'fields'    => array(
          'card_photo'      => array(
            'type'          => 'photo',
            'label'         => __('Card Photo', 'fl-builder')
          ),
          'card_with_padding'     => array(
            'type'          => 'select',
            'label'         => __('Use card padding', 'fl-builder'),
            'default'       => 'no',
            'options'       => array(
              'yes'         => __('Yes', 'fl-builder'),
              'no'         => __('No', 'fl-builder')
            )
          )
        )
      )
    )
  )
));
