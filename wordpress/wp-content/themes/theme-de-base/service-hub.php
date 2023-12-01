<?php 
/**
 * 	Template Name: hubService
 *  Template Post Type: post, page, hubService
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

<section class="generic__desc">
    <div class="description container mt-2">
        <h1 id="title_programs" class="description_title pt-3">
            <span>Nos programmes</span>
        </h1>
        <p class="description_paragraph mx-5 p-lg-5 mt-5">
            Bienvenue sur la page des programmes offerts de l'organisme
            Architecture Sans Frontière Québec! Sur cette page, vous pourrez
            consulter une courte description informelle des programmes en vigueur.
            Si vous désirez en savoir plus sur l'un ou plusieurs des programmes,
            cliquer sur le bouton "En savoir plus!" et celui-ci vous amènera à la
            page désirée.
        </p>
    </div>
</section>

<?php
 $i = 1;
  $service = new WP_Query('post_type=hubService'); 
?>
<section class="hub_services" id="page_hub_services">
    <div class="programs__wrapper container pt-5">
        <div class="row justify-content-evenly pt-5">
            <?php while  ($service->have_posts()) : $service->the_post(); ?>
            <div class="card mb-5 col-8 col-md-5 programs__card<?php echo $i ?>">
                <div class="row g-0">
                    <div class="col-12 col-md-9">
                        <div class="card-body">
                            <h5 class="card-title"> <?php the_title(); ?></h5>
                            <p class="card-text">
                                <?php the_content(); ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 text-center">
                        <?php the_post_thumbnail('medium', array('class' => 'img-fluid')) ?>
                    </div>
                    <button class="btn_lien mt-4 ms-2">
                        <a class="detail_lien" href="/website/detail_service.html" target="_self">
                            <?php the_content(); ?></a>
                    </button>
                </div>
            </div>
            <?php
  endwhile; 
  $i = 1;
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