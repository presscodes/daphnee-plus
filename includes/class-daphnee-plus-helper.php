<?php

class Daphnee_Plus_Helper {

    public static function default_copyright_text() {

        $copyright_text  = '<a href="https://wordpress.org/">' . sprintf( esc_html__( 'Proudly powered by %s', 'daphnee' ), 'WordPress' ) . '</a>';
        $copyright_text .= '<span class="sep"> | </span>';
        $copyright_text .= sprintf( esc_html__( 'Theme: %1$s by %2$s.', 'daphnee' ), 'daphnee', '<a href="https://press.codes" rel="designer">PressCodes Team</a>' );

        return $copyright_text;

    }
}
