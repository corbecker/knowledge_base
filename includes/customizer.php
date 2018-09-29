<?php 

function wpb_customize_register($wp_customize)
{
    //showcase section
    $wp_customize->add_section(
        'showcase', array(
        'title' => __('showcase', 'knowledgebase'),
        'description' => sprintf(__('Options for the showcase', 'knowledgebase')),
        'priority' => 130
        )
    );  

    $wp_customize->add_section(
        'topics_parent', array(
        'title' => __('Topics Parent', 'knowledgebase'),
        'description' => sprintf(__('ID for topics parent page', 'knowledgebase')),
        'priority' => 130
        )
    );  

    $wp_customize->add_setting(
        'topics_parent', array(
        'type' => 'theme_mod'
        )
    );

    $wp_customize->add_control(
        'topics_parent', array(
        'label' => __('Text', 'knowledgebase'),
        'section' =>'topics_parent', 
        'priority' => 2
        )
    );

    $wp_customize->add_setting(
        'showcase_heading', array(
        'default' => _x('Knowledge Base', 'knowledgebase'), 
        'type' => 'theme_mod'
        )
    );

    $wp_customize->add_control(
        'showcase_heading', array(
        'label' => __('Heading', 'knowledgebase'),
        'section' =>'showcase', 
        'priority' => 1
        )
    );

    $wp_customize->add_setting(
        'showcase_text', array(
        'default' => _x('Collection of tips.', 'knowledgebase'), 
        'type' => 'theme_mod'
        )
    );

    $wp_customize->add_control(
        'showcase_text', array(
        'label' => __('Text', 'knowledgebase'),
        'section' =>'showcase', 
        'priority' => 2
        )
    );
}

add_action('customize_register', 'wpb_customize_register');


?>