<?php 
/**
 * index.php est le modèle par défaut du thème 4w4 
 */
?>

<?php get_header(); ?>
    <main>
        <h1>Bienvenue sur 4W4</h1>

        <?php
            if(have_posts()):
                while(have_posts()):
                    the_post(); // Extrait un objet "post"
                    the_title('<h3>', '</h3>'); // Affiche le titre du post
                    the_content();
                endwhile;
            endif;
        ?>
        
    </main>
    
    <?php get_footer(); ?>
</body>
</html>