<?php 
/**
 * 	Template Name: Service
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>
<?php endwhile; // Fermeture de la boucle

get_template_part(" partials/genericHero ");

get_template_part(" partials/genericDesc ");

?>  

<section class="articleSwap">
      <div class="container-fluid px-5">
        <div class="row">
          <div class="col-6 text-start">
            <a class="link" src="<?php next_post_link($in_same_term = true); ?>"><?php the_field("prochain_programme"); ?></a>
          </div>
          <div class="col-6 text-end">
            <a class="link" src="<?php previous_post_link($in_same_term = true); ?>"><?php the_field("dernier_programme"); ?>"</a>
          </div>
        </div>
      </div>
    </section>

<?php

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>