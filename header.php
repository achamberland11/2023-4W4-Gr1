<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>mon 4W4</title>
    
    <?php wp_head(); ?>
</head>
<?php
$nouvel_class = "";
    if(is_front_page()){
        $nouvel_class = "no-aside";
    }
?>

<body class="site <?= $nouvel_class ?>">
    <header class="site__entete">
        <section class="entete__nav">
            <?= get_search_form(); ?>
            <div class="nav-menu">
                <input type="checkbox" id="chkBurger">
                <label class="burger" for="chkBurger">
                    <span class="material-symbols-outlined">menu</span>
                </label>
                <?php  wp_nav_menu(array( 
                                "menu" => "entete",
                                "container" => "nav",
                                "container_class" => "menu__entete"
                )); ?>
            </div>
        </section>
        <?php the_custom_logo(); ?> 
        <h1 class="site__titre"><a  href="<?= bloginfo('url'); ?>"><?= bloginfo('name'); ?></a></h1>
        <h2 class="site__description"><?= bloginfo('description'); ?></h2>
</header>

<?php 
if(! is_front_page()){
    get_template_part("template-parts/aside");
}
?>
   