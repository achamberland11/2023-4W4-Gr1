    <footer class="site__footer">
        <section class="lien"><?php the_custom_logo() ?></section>
        
        <div class="lien">
                <section class="lien"><a  href="<?= bloginfo('url'); ?>"><?= bloginfo('name'); ?></a></section>
                <?php  wp_nav_menu(array( 
                                "menu" => "entete",
                                "container" => "nav",
                                "container_class" => "menu__entete"
                )); ?>
        </div>
    </footer>
    <?php wp_footer(); ?>

</body>
</html>    