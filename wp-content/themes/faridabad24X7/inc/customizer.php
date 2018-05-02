<?php
function wpb_customize_register($wp_customize){
    //showcase section
    $wp_customize->add_section('showcase', array(
        'title'        => __('Showcase', 'wpbootstrap'),
        'description'  => sprintf(__('Options for showcase','wpbootstrap'))
        
    ));

    $wp_customize->add_setting('showcase_image',array(
        'default'   => get_bloginfo('template_directory').'/image/banner_news.jpg' ,
        'type'      => 'theme_mod'
    ));
      
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'showcase_image',array(
        'label'        => __('Showcase Image','wpbootstrap'),
        'section'      => 'showcase',
        'setting'      => 'showcase_image',
        'priority'     => 1 
    )));

    $wp_customize->add_setting('showcase_heading',array(
        'default'   => _x('Custome wordpress Theme','wpbootstrap'),
        'type'      => 'theme_mod'
    ));
      
    $wp_customize->add_control('showcase_heading',array(
        'label'        => __('Heading','wpbootstrap'),
        'section'      => 'showcase',
        'priority'     => 2
    ));
    
    $wp_customize->add_setting('showcase_text',array(
        'default'   => _x('this is the demo page for the site','wpbootstrap'),
        'type'      => 'theme_mod'
    ));
    
    $wp_customize->add_control('showcase_text',array(
        'label'   => __('text','wpbootstrap'),
        'section'      => 'showcase',
        'priority'     => 2
    ));

    $wp_customize->add_setting('btn_url',array(
        'default'   => _x('http://test.com','wpbootstrap'),
        'type'      => 'theme_mod'
    ));
    
    $wp_customize->add_control('btn_url',array(
        'label'   => __('Button URL','wpbootstrap'),
        'section'      => 'showcase',
        'priority'     => 3
    ));
    
    $wp_customize->add_setting('btn_text',array(
        'default'   => _x('Read More','wpbootstrap'),
        'type'      => 'theme_mod'
    ));
    
    $wp_customize->add_control('btn_text',array(
        'label'   => __('Button text','wpbootstrap'),
        'section'      => 'showcase',
        'priority'     => 4
    ));
    

}

add_action('customize_register', 'wpb_customize_register');