<?php
/**
 * Template Name: Home Page
 */

get_header();
?>

	<main id="primary" class="site-main">

        <div class="hero">
            <?php if( get_field('hero_image') ): ?>
                <img class="hero-image" src='<?php the_field('hero_image'); ?>'>
            <?php endif; ?>
            <div class="hero-content">
                <?php if( get_field('hero_heading') ): ?>
                    <h2 class="hero-heading"><?php the_field('hero_heading'); ?></h2>
                <?php endif;
                if( get_field('hero_text') ): ?>
                    <p class="hero-text"><?php the_field('hero_text'); ?></p>
                <?php endif;
                if( get_field('hero_cta') ): ?>
                    <a class="hero-cta" src=""><?php the_field('hero_cta'); ?></a>
                <?php endif; ?>
            </div>
        </div>
		<div class="partners">
            <h3 class="partners-heading"><?php the_field('partners_heading'); ?></h3>
            <div id="partner-icons">
                <img class="partner-1" src='<?php the_field('partner_1'); ?>'>
                <img class="partner-2" src='<?php the_field('partner_2'); ?>'>
                <img class="partner-3" src='<?php the_field('partner_3'); ?>'>
                <img class="partner-4" src='<?php the_field('partner_4'); ?>'>
                <img class="partner-5" src='<?php the_field('partner_5'); ?>'>
                <img class="partner-6" src='<?php the_field('partner_6'); ?>'>
                <img class="partner-7" src='<?php the_field('partner_7'); ?>'>
            </div>
        </div>
        <hr />
        <div class="form">
            <?php get_template_part( 'template-parts/content', 'home' );
            if( get_field('map') ): ?>
                    <a class="map" src=""><?php the_field('map'); ?></a>
                <?php endif; ?>
        </div>
		  
	</main><!-- #main -->

<?php
