<?php 
/**
 * index.php est le modèle par défaut du thème 4w4 
 */
?>

<?php get_header(); ?>
    <main class="site__main">
        <h1>Bienvenue sur 4W4</h1>
        <section class="blocflex">
            <section class="menu-atelier-container">
                <?php wp_nav_menu(array(
                    "menu" => "atelier",
                    "container" => "nav",
                    "container_class" => "menu__atelier"));
                    ?>
            </section>
            <section class="menu-evenement-container">
                <?php wp_nav_menu(array(
                    "menu" => "evenement",
                    "container" => "nav",
                    "container_class" => "menu__evenement"));
                    ?>
            </section>
            <section class="bloc__viewport">
                <h2>Notre mission</h2>
                <?php wp_nav_menu(array( "menu"=>"bloc-archive", "container"=>"nav" )); ?>
            </section>
            <?php if(have_posts()):
                while (have_posts()): the_post(); 
                $la_categorie = '4w4';
                if (in_category('galerie')){
                    $la_categorie = 'galerie';}
                    get_template_part("template-parts/categorie", $la_categorie);
                endwhile; 
            endif; ?>
        </section>

    </main>
<?php get_footer(); ?>