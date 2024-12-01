function coalitiontest_theme_customizer($wp_customize) {
    $wp_customize->add_section('contact_info_section', array(
        'title' => __('Contact Information', 'coalitiontest'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('logo_image');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo_image', array(
        'label' => __('Logo Image', 'coalitiontest'),
        'section' => 'contact_info_section',
        'settings' => 'logo_image',
    )));

    $wp_customize->add_setting('phone_number');
    $wp_customize->add_control('phone_number', array(
        'label' => __('Phone Number', 'coalitiontest'),
        'section' => 'contact_info_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('address_info');
    $wp_customize->add_control('address_info', array(
        'label' => __('Address Information', 'coalitiontest'),
        'section' => 'contact_info_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('fax_number');
    $wp_customize->add_control('fax_number', array(
        'label' => __('Fax Number', 'coalitiontest'),
        'section' => 'contact_info_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('social_media_links');
    $wp_customize->add_control('social_media_links', array(
        'label' => __('Social Media Links', 'coalitiontest'),
        'section' => 'contact_info_section',
        'type' => 'text',
    ));
}
add_action('customize_register', 'coalitiontest_theme_customizer');
