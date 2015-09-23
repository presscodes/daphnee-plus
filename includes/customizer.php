<?php

if ( class_exists( 'Kirki' ) ) {

    Kirki::add_field( 'daphnee', array(
        'type'      => 'textarea',
        'settings'  => 'footer_copyright_text',
        'label'     => __( 'Footer Copyright Text', 'daphnee-plus' ),
        'section'   => 'footer',
        'default'   => sprintf( esc_html__( 'Theme: %1$s by %2$s.', 'daphnee' ), 'daphnee', '<a href="https://press.codes" rel="designer">PressCodes Team</a>' ),
        'priority'  => 30,
        'transport' => 'postMessage',
        'js_vars'   => array(
            array(
                'element'  => '#colophon .site-info .col_12',
                'function' => 'html',
            ),
        )
    ) );
}
