<?php

class Daphnee_Plus {

    // TODO: Add extra partial templates folder

    // TODO: Add extra typography options for headers (h1 - h6)

    // TODO: Add extra header templates

    // TODO: Add option to change the footer text (copyright)

    public function __construct() {
        add_filter( 'daphnee/template/footer', array( $this, 'override_footer_partial' ) );
    }

    public function override_footer_partial() {
        return DAPHNEE_PLUS_PATH . 'templates/partials/footer.php';
    }

}
