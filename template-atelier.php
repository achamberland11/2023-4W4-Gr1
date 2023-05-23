<?php
    /**
     * Template name: Atelier
     */
    ?>

    <?php get_header(); ?>
    <main class="site__main">
    <?php
    if ( have_posts() ) : the_post(); ?>
        <h1><?= get_the_title(); ?></h1>
        <?php the_post_thumbnail('medium'); ?>
        <?php the_content();?>
        <p>Formateur : <?php the_field('formateur'); ?></p>
        <p>Date de l'atelier : <?php the_field('date_atelier'); ?></p>
        <p>Heure de l'atelier : <?php the_field('heure_atelier'); ?></p>
        <p>Durée de l'atelier : <?php the_field('duree'); ?></p>
        <p>Local de l'atelier : <?php the_field('local'); ?></p>
    <?php endif;?>
    </main><!-- #main -->
    <?php
    get_footer();