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

<?php get_template_part("partials/generichero");?>

<?php get_template_part("partials/genericdesc");?>

<section class="hero_equipe pt-5 pb-5" id="pageequipe">

    <?php

$titleOne = array(
    'post_type' => 'equipe',
    'posts_per_page' => -1,
    'order' => 'ASC'
);
  $team = new WP_Query($titleOne);
  
?>

    <div class="equipe__direction__wrapper container-fluid">
        <?php while ($team->have_posts()) : $team->the_post();       
                if(get_field("selection")== "Direction"):
                ?>
        <div class="row pt-5">
            <div class="equipe__titre col-12 text-center pt-5 pb-2">
                <?php the_field('title_team');?>
            </div>
            <?php
endif;
  endwhile; 
  wp_reset_postdata();
?>
        </div>
        <?php
//Loop différent pour chaque catégorie, pour isoler chacun des membres dépendement de leurs rôles avec un champ en ACF

//Loop
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
    <?php

$titleTwo = array(
    'post_type' => 'equipe',
    'posts_per_page' => -1,
    'order' => 'ASC'
);
  $teamTwo = new WP_Query($titleTwo);
?>
    <div class="equipe__collaborateur__wrapper container-fluid">
        <?php while ($teamTwo->have_posts()) : $teamTwo->the_post();       
                if(get_field("selection")== "Collaboratrices"):
                ?>
        <div class="row pt-4">
            <div class="equipe__titre col-12 text-center pt-2 pb-2">
                <?php the_field('title_team');?>
            </div>
            <?php
 endif;
  endwhile; 
  wp_reset_postdata();
?>
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
        <?php

$titleThree = array(
    'post_type' => 'equipe',
    'posts_per_page' => -1,
    'order' => 'ASC'
);
  $teamThree = new WP_Query($titleThree);
?>
        <div class="equipe__administration__wrapper container-fluid">
            <?php while ($teamThree->have_posts()) : $teamThree->the_post();       
                if(get_field("selection")== "Administration"):
                ?>
            <div class="row pt-4">
                <div class="equipe__titre col-12 text-center pt-2 pb-2">
                    <?php the_field('title_team');?>
                </div>
                <?php
 endif;
  endwhile; 
  wp_reset_postdata();
?>
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