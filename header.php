<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4W4-Gr1 | Antoine Chamberland</title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="site__entete">
        <section class="entete-nav">
                <?= get_search_form(); ?>
                <?php wp_nav_menu(array(
                    "menu" => "entete",
                    "container" => "nav",
                    "container_class" => "menu__entete"
                )); ?>
            <?php the_custom_logo() ?>
        </section>
        <h1 class="site__titre"><a href="<?= bloginfo('url'); ?>"><?= bloginfo('name'); ?></a></h1>
        <h2 class="site_description"><?= bloginfo('description'); ?></h2>
    </header>

    <aside class="site__aside">
            <h3>Menu secondaire</h3>

            <?php
                $category = get_queried_object();
                if(isset($category)){
                    $menu = $category->slug;
                }else{$menu = "4w4";}

                wp_nav_menu(array(
                    "menu"=>"$menu",
                    "container"=>"nav",
                ))
            ?>
            
    </aside>