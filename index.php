<?php 
/**
 * index.php est le modèle par défaut du thème 4w4 
 */
?>

<?php get_header(); ?>
    <main>
        <pre>index.php</pre>
        <h1>Bienvenue sur 4W4</h1>
        <div class="articles">
            <?php if(have_posts()):
                while(have_posts()): the_post(); ?>
                <article>
                    <a href="<?php the_permalink(); ?>"><h3><?php the_title('<h3>', '<h3>'); ?></h3></a>
                    <?php the_excerpt(); ?>
                    <?php the_permalink(); ?>
                </article>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>           
    </main>
    
    <?php get_footer(); ?>
</body>
</html>