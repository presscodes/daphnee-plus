<footer id="colophon" class="site-footer" role="contentinfo">
    <?php tha_footer_top(); ?>
    <div class="footer-widgets row">
        <?php
        /**
         * Figure out how many widget areas we have on the footer and generate the widget areas accordingly.
         */
        ?>
        <?php $footer_widget_areas = get_theme_mod( 'footer_widget_areas', '3' ); ?>
        <?php for ( $i = 1; $i <= $footer_widget_areas; $i++ ) : ?>
            <?php
            /**
             * Calculate the width of each column
             */
            ?>
            <?php $columns = intval( 12 / $footer_widget_areas ); ?>
            <div class="col_<?php echo $columns; ?>">
                <?php dynamic_sidebar( 'footer-' . $i ); ?>
            </div>
        <?php endfor; ?>
    </div><!-- .footer-widgets -->
    <div class="site-info row">
        <div class="col_12">
            <?php echo html_entity_decode( get_theme_mod( 'footer_copyright_text', Daphnee_Plus_Helper::default_copyright_text() ) ); ?>
        </div>
    </div><!-- .site-info -->
    <?php tha_footer_bottom(); ?>
</footer><!-- #colophon -->
