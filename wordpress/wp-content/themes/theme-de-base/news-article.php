<?php
/**
 * 	Template Name: Article
 * 	Template Post Type: post, article
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php
?>

<?php
$article = new WP_Query("post_type=article");
?>

<?php
if (have_posts()): // Est-ce que nous avons des pages à afficher ? 
  // Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
  while (have_posts()):
    the_post();
    ?>

  <?php endwhile; // Fermeture de la boucle
  ?>

  <div itemscope itemtype="https://schema.org/NewsArticle">
    <!--hero-->
    <section class="nouvelle_hero">
      <div>
        <!-- hero news tag here -->
        <svg class="tag_genre" width="372" height="118" viewBox="0 0 328 74" fill="<?php the_field("tagcolor") ?>"
          xmlns="http://www.w3.org/2000/svg">
          <path d="M-2 73.9999L260.227 74L328 0.00012207L-2 0V73.9999Z" fill="<?php the_field("tagcolor") ?>" />
        </svg>

        <h1 itemprop="articleSection" class="tag_title">
          <?php the_field("tagname") ?>
        </h1>
      </div>
      <div class="nouvelle_hero_container container-fluid p-0">
        <!-- hero image here -->
        <div class="row nouvelle_hero_image_row">
          <div class="nouvelle_hero_image col-md-6 col-12"
            style="background-image: url(' <?php the_field("heroimage") ?> ') ;">
            <!-- gradient -->
            <div class="nouvelle_hero_image_gradient container-fluid p-0"></div>
          </div>
        </div>
        <div class="hero_text">
          <h1 itemprop="headline" class="hero_title">
            <?php the_field("herotitle") ?>
          </h1>
          <p class="hero_paragraph">
            <?php the_field("herosubtitle") ?>
          </p>
        </div>
      </div>
    </section>

    <section class="summary container">
      <p itemprop="about" class="summary_paragraph">
        <?php the_field("summaryparagraph") ?>
      </p>
      <p itemprop="datePublished" class="date">
        <?php the_field("date") ?>
      </p>
    </section>
    <section class="main_content container">
      <p itemprop="articleBody" class="main_content_paragraph">
        <?php the_field("paragraph1") ?>
      </p>
      <img src="<?php the_field("image") ?>" />


      <div class="main_content_paragraph2">

        <p itemprop="articleBody" class="main_content_paragraph">
          <?php the_field("paragraph2") ?>
        </p>
        <img src="<?php the_field("secondaryimage") ?>" />
        <p class="photo_credits image2">
          <?php the_field("secondaryimagetext") ?>
        </p>
      </div>
    </section>

    <section class="suggested_article container">
      <div class="line container">
      </div>
      <h2 class="nextArticleTitle"> Nouvelle suivante</h2>
      <div itemprop="image" class="nextArticleImage"></div>
      <h2 class="nextArticleHeadline">

      </h2>
      <p class="nextArticleParagraph">

      </p>
    </section>
  </div>

  <?php
else: // Si aucune page n'a été trouvée
  get_template_part('partials/404'); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>