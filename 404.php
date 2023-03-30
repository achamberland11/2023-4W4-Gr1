<?php 
/**
 * index.php est le modèle par défaut du thème 4w4 
 */
?>

<?php get_header(); ?>
    <main class="site__main">
        <h1>Erreur 404</h1>
        <h2>Page introuvable, vous devez tenter une recherche</h2>
        <div class="recherche__404"><?= get_search_form(); ?></div>

        <section id="menu__404">
            <section>
                <h3>Nos choix de cours</h3>
                <div class="articles__404">
                    <?php
                    wp_nav_menu(array(
                        "menu"=>"cours",
                        "container"=>"nav"
                        ))
                        ?>
                </div>    
            </section>
            <section>
                <h3>Nos notes de cours</h3>
                <div class="articles__404">
                    <?php 
                    wp_nav_menu(array(
                        "menu"=>"note-4w4",
                        "container"=>"nav"
                    ));
                    ?>
                </div>
            </section>
        </section>
        
    </main>
    
    <?php get_footer(); ?>