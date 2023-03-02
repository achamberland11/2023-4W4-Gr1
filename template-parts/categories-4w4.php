<?php
    /**
     * "template part" gabarit categorie-4w4 permet d'afficher un article bloc
     * qui s'intègre dans la liste des notes de 4w4 qu'on accède avec categorie/4w4
     */
    $titre = get_the_title();
    // Retirer le premier du titre d'article de catégorie 
    if(substr($titre, 0, 1) == '0'){

    }
?>

<article class="blocflex__article">
    <h5 href="<?php the_permalink(); ?>"><?= $titre ?></h5>
    <p><?= wp_trim_words(get_the_excerpt(), 15); ?></p>
</article>