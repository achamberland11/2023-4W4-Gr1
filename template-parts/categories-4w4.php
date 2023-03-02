<?php
    /**
     * "template part" gabarit categorie-cours permet d'afficher un article bloc
     * qui s'intègre dans la liste des cours qu'on accède avec categorie/cours
     */
    $titre = get_the_title();
    // Retirer le premier du titre d'article de catégorie 
    if(substr($titre, 0, 1) == '0'){

    }
?>

<article>
    <h5 href="<?php the_permalink(); ?>"><?= $titre ?></h5>
    <p><?= wp_trim_words(get_the_excerpt(), 15); ?></p>
</article>