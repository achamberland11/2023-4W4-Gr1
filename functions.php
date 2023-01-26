<?php
    /**
     * L'ensemble des fonctions du thème
     */
    function enfiler_css() {
        wp_enqueue_style('4W4-Gr2-principal', // Identifier
            get_template_directory_uri() . '/style.css', // Addresse url de style.css
            array(), // Définir les dépendances
            filemtime(get_template_directory() . '/style.css'), // Le calcul de la version du fichier css
            'all'); // Media
    }

    add_action('wp_enqueue_scripts', 'enfiler_css');