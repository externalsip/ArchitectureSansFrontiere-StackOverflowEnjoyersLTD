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

<select name="filter" id="filterDropdown">
  <option value="newest">Récent</option>
  <option value="oldest">Plus vieux</option>
</select> 

<div class="row" style="justify-content: center;">
  <!-- featured article row -->

  <div class="card mx-2 featured news col-8 pb-2" id="featured">

  </div>
</div>

</div>

<div class="row gx-5 my-3" id="articleContainer">


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