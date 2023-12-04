<?php 
/**
 * 	Template Name: Actualités
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	<article>
		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
			<h2>
				<?php the_title(); // Titre de la page ?>
			</h2>
		<?php endif; ?>
		
		<?php the_content(); // Contenu principal de la page ?>
	</article>


<?php get_template_part("partials/generichero") ?>
	<section class="news_container container py-5">

<label for="filter">Filtre:</label>

<select name="filter">
  <option value="Récent">Récent</option>
  <option value="Plus vieux">Plus vieux</option>
</select> 

<div class="row" style="justify-content: center;">
  <!-- featured article row -->

  <div class="card mx-2 featured news col-8">
	<img class="card-img-top" src="../../sources/medias/02_hub_nouvelles/image_06_nouvelle.png" alt="Nishiki" style="border-radius: 5px; padding-top: 10px; max-height: 400px; object-fit: cover;" />
	<div class="card-body">
	  <h5 class="card-title">Featured article</h5>
	  <p class="card-text">La conception de l’école primaire pour la communauté massaï d’Enguserosambu est terminée et sa construction s’apprête à commencer. L’équipe de volontaires du Programme du regroupement étudiants pour la coopération internationale de l’ÉTS (PRÉCI) prend désormais le relais en Tanzanie pour participer au chantier.</p>
	</div>
  </div>
</div>

</div>
</section>

<div class="articlesBtnDiv">
  <button class="articlesBtn" type="button" >
	Plus d'articles
  </button>
</div>

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>