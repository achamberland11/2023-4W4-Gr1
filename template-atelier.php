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
        <table class="tableau tableau-atelier">
            <tr>
                <td>Formateur</td>
                <td><?php the_field('formateur'); ?></td>
            </tr>
            <tr>
                <td>Date de l'atelier</td>
                <td><?php the_field('date_atelier'); ?></td>
            </tr>
            <tr>
                <td>Heure de l'atelier</td>
                <td><?php the_field('heure_atelier'); ?></td>
            </tr>
            <tr>
                <td>Durée de l'atelier</td>
                <td><?php the_field('duree'); ?></td>
            </tr>
            <tr>
                <td>Local de l'atelier</td>
                <td><?php the_field('local'); ?></td>
            </tr>
        </table>

    <?php endif;?>
    </main><!-- #main -->
    <?php
    get_footer();