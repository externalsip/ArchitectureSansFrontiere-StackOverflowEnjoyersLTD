<?php 
/**
 * 	Template Name: Histoire
 *  Template Post Type: post, page, histoire
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>
<?php endwhile; // Fermeture de la boucle

get_template_part("template/genericHero");

?>

<section class="history" id="history">
      <div class="container-fluid history__wrapper p-0">
        <div class="row">
          <div class="timeline mt-5">
            <div class="timeline__line py-1 py-md-2 py-xl-3"></div>
			<?php 
				$eventArguments = array(
					'post_type' => 'evenementhistoire',
					'posts_per_page' => 3
				  );
				  $event = new WP_Query($slideArguments);
				  while ($event->have_posts()) : $event->the_post(); 
				?>
            <div class="eventContainer col-3 pb-1 pb-md-2 pb-xl-3">
				
              <div
                class="timeline__dot d-flex justify-content-center align-items-center p-1 mt-md-3"
              >
                <span><?php the_field("annee"); ?></span>
              </div>
              <div class="timeline__event mb-md-3 mb-lg-5">
                <?php the_title(); ?>
              </div>
		</div>
			<?php endwhile;
			wp_reset_postdata(); 
			?>            

          	<div class="col-12 infoContainer">
				<?php 
					$eventArguments = array(
						'post_type' => 'evenementhistoire',
						'posts_per_page' => 3
					);
					$event = new WP_Query($slideArguments);
					while ($event->have_posts()) : $event->the_post(); 
					?>
            	<div class="info">
					<h1 class="info__title col-12 text-center my-5">
						<?php the_title(); ?>
					</h1>
					<h2 class="info__year col-12 text-center"><?php the_field("annee"); ?></h2>
					<p class="info__text col-12 p-5">
					<?php the_content(); ?>
					</p>
            	</div>
				<?php endwhile;
				wp_reset_postdata();?>
          </div>

        </div>
      </div>
    </section>

<?php

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>