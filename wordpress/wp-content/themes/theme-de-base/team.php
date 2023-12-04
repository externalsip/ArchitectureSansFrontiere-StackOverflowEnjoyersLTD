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

    <div class="equipe__direction__wrapper container-fluid">
        <div class="row pt-5">
            <div class="equipe__titre col-12 text-center pt-5 pb-2">
                L'équipe de la direction
            </div>
        </div>
        <?php

$publication = array(
    'post_type' => 'personnel',
    'posts_per_page' => -1,
    'order' => 'ASC'
);
  $personnel = new WP_Query($publication);
?>
        <div id="equipe_direction" class="row justify-content-center pt-4 pb-4">
            <?php while ($personnel->have_posts()) : $personnel->the_post();       
                if(get_field("categorie_poste")== "Direction"):
                ?>
            <div class="personnel col-8 col-sm-6 col-lg-2 pb-4 ps-1 me-3">
                <div class="card-direction card">
                    <button type="button" class="btn text-start" data-bs-toggle="modal"
                        data-bs-target="#button_modal<?php the_ID()?>">
                        <?php the_post_thumbnail('medium', array('class' => 'card-img-top team_img')) ?>
                    </button>
                    <div class="modal fade" id="button_modal<?php the_ID()?>" tabindex="-1"
                        aria-labelledby="button_modalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md modal-dialog-centered ps-3">
                            <div class="modal-content text-center">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <?php the_post_thumbnail('large', array('class' => 'card-img-top team_img')) ?>
                                    <h4><?php the_title();?></h4>
                                    <p class="test"><?php the_field('info');?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="poste-direction card-body">
                            <h4 class="nom text-center">&nbsp;<?php the_title();?></h4>
                            <p class="quote text-center">
                                <?php the_content();?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
 endif;
  endwhile; 
?>
        </div>
    </div>
    <div class="equipe__collaborateur__wrapper container-fluid">
        <div class="row pt-4">
            <div class="equipe__titre col-12 text-center pt-2 pb-2">
                Collaboratrices
            </div>
        </div>
        <div id="equipe_collaborateur" class="row justify-content-center pt-4 pb-4">
            <?php while ($personnel->have_posts()) : $personnel->the_post();       
                if(get_field("categorie_poste")== "Collaboratrices"):
                ?>
            <div class="personnel col-8 col-sm-6 col-lg-2 pb-4 ps-1 me-3">
                <div class="card-direction card">
                    <button type="button" class="btn text-start" data-bs-toggle="modal"
                        data-bs-target="#button_modal<?php the_ID()?>">
                        <?php the_post_thumbnail('medium', array('class' => 'card-img-top team_img')) ?>
                    </button>
                    <div class="modal fade" id="button_modal<?php the_ID()?>" tabindex="-1"
                        aria-labelledby="button_modalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md modal-dialog-centered ps-3">
                            <div class="modal-content text-center">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <?php the_post_thumbnail('large', array('class' => 'card-img-top team_img')) ?>
                                    <h4><?php the_title();?></h4>
                                    <p class="test"><?php the_field('info');?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="poste-direction card-body">
                            <h4 class="nom text-center">&nbsp;<?php the_title();?></h4>
                            <p class="quote text-center">
                                <?php the_content();?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            endif;
         endwhile; 
        ?>
        </div>
        <div class="equipe__administration__wrapper container-fluid">
            <div class="row pt-4">
                <div class="equipe__titre col-12 text-center pt-2 pb-2">
                    Le conseil d'administration
                </div>
            </div>
            <div id="equipe_administration" class="row justify-content-center pt-4 pb-4">
                <?php while ($personnel->have_posts()) : $personnel->the_post();       
                if(get_field("categorie_poste")== "Administration"):
                ?>
                <div class="personnel col-8 col-sm-6 col-lg-2 pb-4 ps-1 me-3">
                    <div class="card-direction card">
                        <button type="button" class="btn text-start" data-bs-toggle="modal"
                            data-bs-target="#button_modal<?php the_ID()?>">
                            <?php the_post_thumbnail('medium', array('class' => 'card-img-top team_img')) ?>
                        </button>
                        <div class="modal fade" id="button_modal<?php the_ID()?>" tabindex="-1"
                            aria-labelledby="button_modalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-md modal-dialog-centered ps-3">
                                <div class="modal-content text-center">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <?php the_post_thumbnail('large', array('class' => 'card-img-top team_img')) ?>
                                        <h4><?php the_title();?></h4>
                                        <p class="test"><?php the_field('info');?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="poste-direction card-body">
                                <h4 class="nom text-center">&nbsp;<?php the_title();?></h4>
                                <p class="quote text-center">
                                    <?php the_content();?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
 endif;
  endwhile; 
?>
            </div>
            <?php wp_reset_postdata(); ?>
        </div>
</section>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;


get_footer(); // Affiche footer.php 
?>