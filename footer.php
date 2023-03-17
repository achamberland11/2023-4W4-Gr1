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
                <a href="https://github.com/achamberland11/2023-4W4-Gr1"><li><img src="https://s2.svgbox.net/social.svg?ic=github&color=f0f8ff" width="32" height="32"></li></a>
                <a href=""><li><img src="https://s2.svgbox.net/hero-solid.svg?ic=folder&color=f0f8ff" width="32" height="32"></li></a>
                <a href="https://cidweb13.sg-host.com/"><li><img src="https://s2.svgbox.net/materialui.svg?ic=web&color=f0f8ff" width="32" height="32"></li></a>
            </ul>       
        </section>
    </footer>
    <?php wp_footer(); ?>

</body>
</html>