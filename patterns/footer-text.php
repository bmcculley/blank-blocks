<?php
/**
* Title: Footer Copyright Title Text
* Slug: blank-blocks/footer-text
* Categories: blankblocks-footer
* Description: A block that contains the copyright symbol and site title text.
* Viewport Width: 800
* Block Types: core/template-part/footer
* Inserter: yes
*/
?>

<!-- wp:paragraph -->
<p>&copy; <?php echo wp_kses_post( date_i18n( 'Y' ) . ' ' . get_bloginfo( 'name' ) ); ?></p>
<!-- /wp:paragraph -->