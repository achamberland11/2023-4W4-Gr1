<?php
/**
 * Template permettant d'afficher la zone aside
 */
?>
<aside class="site__aside aside__atelier">
    <h3>Atelier</h3>
    <?php 
    $menu = "atelier";
      // $menu peut prendre les valeurs : "note-4w4" ou "cours"
        wp_nav_menu(array(
        "menu"=>$menu,
        "container"=>"nav"
      ))
    ?>
</aside>