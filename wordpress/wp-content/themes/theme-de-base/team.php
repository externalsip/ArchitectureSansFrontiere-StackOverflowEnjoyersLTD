<?php 
/**
 * 	Template Name: Equipe
 *  Template Post Type: post, page, equipe
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>
<?php
  $personnel = new WP_Query('post_type=personnel');
  $i = 1;
?>
<section class="hero_equipe pt-5 pb-5" id="pageequipe">
    <div id="heroGeneric" class="container-fluid genericHero">
        <div class="genericHero__filter"></div>
        <div class="row align-self-end col-12 justify-content-center justify-content-md-start">
            <div id="titre_Contenu"
                class="col-8 col-md-4 col-lg-3 align-self-end justify-self-md-start justify-self-center genericHero__textContent">
                Notre équipe</br>
                <span class="texte_titre">Tous architectes d'un monde meilleur.</span>
            </div>
        </div>
    </div>
    <div class="equipe__wrapper container-fluid">
        <div class="row pt-5">
            <div class="equipe__titre col-12 text-center pt-5 pb-2">
                L'équipe de la direction
            </div>
        </div>
        <div id="equipe_direction <?php echo $i ?>" class="row justify-content-center pt-4 pb-4">
            <?php while ($personnel->have_posts()) : $personnel->the_post();?>
            <div class="personnel col-8 col-sm-6 col-lg-2 pb-4">
                <div class="card-direction card">
                    <?php the_post_thumbnail('medium', array('class' => 'card-img-top')) ?>
                    <div class="row">
                        <div class="poste-direction card-body">
                            <h4 class="nom text-center">&nbsp;<?php the_title();?></h4>
                            <p class="quote text-center"><?php the_content();?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $i = 1;
  endwhile; 
  wp_reset_postdata(); 
?>
    </div>
</section>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>