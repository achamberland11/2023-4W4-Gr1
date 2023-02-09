<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mon 4W4</title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="site_entete">
        <?php wp_nav_menu(array(
            "menu" => "entete",
            "container" => "nav",
            "container_class" => "menu__entete"
        )); ?>
        <?php the_custom_logo() ?>
        <h1><a class="site__titre" href="<?= bloginfo('url'); ?>"><?= bloginfo('name'); ?></a></h1>
        <h2><?= bloginfo('description'); ?></h2>
    </header>