<?php 
/**
 * 	Template Name: Nos programmes
 *  Template Post Type: post, page, Nos programmes
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

get_template_part("partials/generichero");
get_template_part("partials/genericdesc");

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

<section class="generic__desc">
    <div class="programs__wrapper container">
        <div class="row mb-5 pt-3">

            <?php $programCategory = new WP_Query("post_type=programme");
        $programCategory->the_post();
        ?>
            <div class="programs__title col-12 text-center">
                <?php
       the_field("titre_de_section"); ?>
            </div>
            <?php
        wp_reset_postdata();
        ?>
        </div>
        <div class="row justify-content-evenly">
            <?php
                                $programArguments = array(
                                  'post_type' => 'programme',
                                  'posts_per_page' => 7,
                                  "order" => "ASC"
                                );
                                $program = new WP_Query($programArguments);
                                while ($program->have_posts()) : $program->the_post();
                              get_template_part("partials/programcard");
         endwhile;
          wp_reset_postdata();
          ?>
        </div>
    </div>
</section>

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>