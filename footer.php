    <footer class="site__footer">
        <section class="section__footer">
            <div class="logo">
                <?php the_custom_logo() ?>
            </div>        
        </section>    
        <section class="section__footer">
        <?php  wp_nav_menu(array( 
                                "menu" => "Footer",
                                "container" => "nav",
                                "container_class" => "menu__footer"
        )); ?>
        </section>
        <section class="section__footer">
            <ul class="menu__footer">
                <a href=""><li>Github</li></a>
                <a href=""><li>LinkedIn</li></a>
                <a href=""><li>Osama</li></a>
            </ul>       
        </section>
    </footer>
    <?php wp_footer(); ?>

</body>
</html>