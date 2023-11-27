<?php 
/**
 * 	Template Name: FAQ
 *  Template Post Type: post, page, question
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>
<section class="generic__desc">
    <div class="description container mt-5">
        <h1 class="description_title">
            <span>FAQ - Foire aux questions</span>
        </h1>
        <p class="description_paragraph mx-2 p-lg-5 mt-5">
            Bienvenue à la foire aux question de l'organisme Architecture sans
            frontière Québec. À l'intérieur de cette page, vous y trouverez des
            réponses qui pourront potentiellement répondre aux questions que vous
            vous posez concernant divers aspects de notre organisme.
        </p>
    </div>
</section>

<?php
  $question = new WP_Query('post_type=question');
  $i = 1;
 
?>
<!-- 👆 Début boucle while -->
<section class="faq" id="pagefaq">
    <div class="container text-center pt-5 pb-5">
        <div class="row justify-content-center ps-2 pe-4">
            <?php while  ($question->have_posts()) : $question->the_post(); ?>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq-01 <?php echo $i ?>">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapsefaq-01<?php echo $i ?>" aria-expanded="true"
                            aria-controls="collapsefaq-01<?php echo $i ?>">
                            <?php the_title(); ?>
                        </button>
                    </h2>

                    <div id="collapsefaq-01<?php echo $i ?>" class="accordion-collapse collapse"
                        aria-labelledby="faq-01<?php echo $i ?>" data-bs-parent="#accordionExample">
                        <div class="accordion-body text-start">
                            <p class="texte_01">
                                <?php the_content(); ?>
                            </p>
                            <p class="texte-02">
                                <?php the_content(); ?>
                            </p>
                            <p class="texte_03">
                                <?php the_content(); ?>
                            </p>
                        </div>
                    </div>
                    <?php
$i = $i + 1;
  endwhile; 
  wp_reset_postdata(); 
?>
                </div>
            </div>
        </div>
</section>

<!-- 👇 Fin boucle while -->

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;




get_footer(); // Affiche footer.php 
?>