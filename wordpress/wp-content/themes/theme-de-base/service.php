<?php 
/**
 * 	Template Name: Service
 *  Template Post Type: post, page, programme
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 

  get_template_part("partials/generichero");

  get_template_part("partials/genericdesc");
?>

<section class="articleSwap">
      <div class="container px-5">
        <div class="row">
          <div class="col-6 text-start">
          <?php echo next_post_link( '%link')?>
          </div>
          <div class="col-6 text-end">
            <?php echo previous_post_link( '%link')?>
          </div>
        </div>
      </div>
    </section>

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>