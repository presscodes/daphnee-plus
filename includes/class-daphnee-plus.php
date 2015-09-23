<?php

class Daphnee_Plus {

    // TODO: Add extra typography options for headers (h1 - h6)

    // TODO: Add extra header templates

    // TODO: Add option to change the footer text (copyright)

    /**
     * The class constructor
     */
    public function __construct() {
        add_filter( 'daphnee/template/footer', array( $this, 'override_footer_partial' ) );
    }

    /**
     * Override the default footer template.
     * Returns an absolute path.
     *
     * @return string
     */
    public function override_footer_partial() {
        return DAPHNEE_PLUS_PATH . 'templates/partials/footer.php';
    }

}
