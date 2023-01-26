<?php
    /**
     * L'ensemble des fonctions du thème
     */

    wp_enqueue_style('main-styles', // Identifier
        get_template_directory_uri() . '/css/style.css', // Addresse url de style.css
        array(), // Définir les dépendances
        filemtime(get_template_directory() . '/css/style.css'), // Le calcul de la version du fichier css
        'all'); // Media