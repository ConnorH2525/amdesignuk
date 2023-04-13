<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package amconsult
 */

?>

    <?php $frontpage_id = get_option( 'page_on_front' ); ?>

	<footer id="colophon" class="site-footer">
        <div class="footer-top">
            <?php if( get_field('footer_logo', $frontpage_id) ): ?>
                <img class="footer-logo" src='<?php the_field('footer_logo', $frontpage_id); ?>'>
            <?php endif; ?>
            <hr />
        </div>
        <div class="site-info">
            <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'amconsult' ); ?></button>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                    )
                );
                ?>
            </nav><!-- #site-navigation -->
            <?php if( get_field('address', $frontpage_id) ): ?>
                <div class="address"><?php the_field('address', $frontpage_id); ?> </div>
            <?php endif; ?>
            <?php if( get_field('contact', $frontpage_id) ): ?>
                <div class="contact"><?php the_field('contact', $frontpage_id); ?> </div>
            <?php endif; ?>
            <div class='social-links'>
                <?php
                if ( get_field('linkedin', $frontpage_id)): ?>
                    <a src="<?php the_field('linkedin', $frontpage_id);?>"><img src="/wp-content/uploads/2023/03/Group-6linkedin.png"></a>
                <?php endif; ?>
                <?php
                if ( get_field('instagram', $frontpage_id)): ?>
                    <a src="<?php the_field('instagram', $frontpage_id);?>"><img src="/wp-content/uploads/2023/03/Group-5instagram.png"></a>
                <?php endif; ?>
            </div>
		</div><!-- .site-info -->
        <div class='spacer'></div>
        <div class="footer-bottom">
            <?php if( get_field('footer_info', $frontpage_id) ): ?>
                <div class="footer-info"><?php the_field('footer_info', $frontpage_id); ?></div>
            <?php endif; ?>
            <a class="privacy-link">Privacy & Cookie Policy</a>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
