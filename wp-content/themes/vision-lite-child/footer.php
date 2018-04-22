<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Vision Lite
 */
?>
</div><!-- main-container -->

<div class="copyright-wrapper">
                <div class="copyright">
                    	<p>&copy; <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_attr(bloginfo( 'name' )); ?></a>  <?php echo date_i18n( __( 'Y', 'vision-lite' ) ); ?>.</p>               
                </div><!-- copyright --><div class="clear"></div>           
        </div>
    </div>        
<?php wp_footer(); ?>

</body>
</html>