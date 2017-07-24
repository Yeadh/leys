<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package presley
 */

?>
    <!-- Back to Top -->
    <a href="#" id="back-to-top" title="Back to top" class="show"></a>

<!-- Start Footer -->
    <footer class="custom-footer">
        <div class="container">
            <div class="copyright">
                <p><?php footer_text(); ?></p>
            </div>
            <ul class="list-inline f-social pad-top-20">
                <?php presley_social_share(); ?>
            </ul>
        </div>
    </footer>
    <!-- End Footer -->


<?php wp_footer(); ?>

</body>
</html>
