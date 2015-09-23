<?php

if ( class_exists( 'Kirki' ) ) {

    Kirki::add_field( 'daphnee', array(
        'type'      => 'textarea',
        'settings'  => 'footer_copyright_text',
        'label'     => __( 'Footer Copyright Text', 'daphnee-plus' ),
        'section'   => 'footer',
        'default'   => Daphnee_Plus_Helper::default_copyright_text(),
        'priority'  => 30,
        'transport' => 'postMessage',
        'js_vars'   => array(
            array(
                'element'  => '#colophon .site-info .col_12',
                'function' => 'html',
            ),
        )
    ) );

    Kirki::add_field( 'daphnee', array(
        'type'      => 'typography',
        'settings'  => 'h1',
        'label'     => __( 'H1 Typography Settings', 'daphnee-plus' ),
        'section'   => 'typography_headers',
        'default'   => array(
            'font-family' => 'Roboto',
            'font-weight' => '700',
            'font-size'   => '2em',
        ),
        'choices'   => array(
            'font-family' => true,
            'font-weight' => true,
            'font-size'   => true,
        ),
        'priority'  => 30,
        'output'    => array(
            array(
                'element' => 'h1',
            ),
        ),
    ) );

    Kirki::add_field( 'daphnee', array(
        'type'      => 'typography',
        'settings'  => 'h2',
        'label'     => __( 'H2 Typography Settings', 'daphnee-plus' ),
        'section'   => 'typography_headers',
        'default'   => array(
            'font-family' => 'Roboto',
            'font-weight' => '700',
            'font-size'   => '1.5em',
        ),
        'choices'   => array(
            'font-family' => true,
            'font-weight' => true,
            'font-size'   => true,
        ),
        'priority'  => 30,
        'output'    => array(
            array(
                'element' => 'h2',
            ),
        ),
    ) );

    Kirki::add_field( 'daphnee', array(
        'type'      => 'typography',
        'settings'  => 'h3',
        'label'     => __( 'H3 Typography Settings', 'daphnee-plus' ),
        'section'   => 'typography_headers',
        'default'   => array(
            'font-family' => 'Roboto',
            'font-weight' => '700',
            'font-size'   => '1.17em',
        ),
        'choices'   => array(
            'font-family' => true,
            'font-weight' => true,
            'font-size'   => true,
        ),
        'priority'  => 30,
        'output'    => array(
            array(
                'element' => 'h3',
            ),
        ),
    ) );

    Kirki::add_field( 'daphnee', array(
        'type'      => 'typography',
        'settings'  => 'h4',
        'label'     => __( 'H4 Typography Settings', 'daphnee-plus' ),
        'section'   => 'typography_headers',
        'default'   => array(
            'font-family' => 'Roboto',
            'font-weight' => '700',
            'font-size'   => '1em',
        ),
        'choices'   => array(
            'font-family' => true,
            'font-weight' => true,
            'font-size'   => true,
        ),
        'priority'  => 30,
        'output'    => array(
            array(
                'element' => 'h4',
            ),
        ),
    ) );

    Kirki::add_field( 'daphnee', array(
        'type'      => 'typography',
        'settings'  => 'h5',
        'label'     => __( 'H5 Typography Settings', 'daphnee-plus' ),
        'section'   => 'typography_headers',
        'default'   => array(
            'font-family' => 'Roboto',
            'font-weight' => '700',
            'font-size'   => '0.9em',
        ),
        'choices'   => array(
            'font-family' => true,
            'font-weight' => true,
            'font-size'   => true,
        ),
        'priority'  => 30,
        'output'    => array(
            array(
                'element' => 'h5',
            ),
        ),
    ) );

    Kirki::add_field( 'daphnee', array(
        'type'      => 'typography',
        'settings'  => 'h6',
        'label'     => __( 'H6 Typography Settings', 'daphnee-plus' ),
        'section'   => 'typography_headers',
        'default'   => array(
            'font-family' => 'Roboto',
            'font-weight' => '700',
            'font-size'   => '0.85em',
        ),
        'choices'   => array(
            'font-family' => true,
            'font-weight' => true,
            'font-size'   => true,
        ),
        'priority'  => 30,
        'output'    => array(
            array(
                'element' => 'h6',
            ),
        ),
    ) );
}
