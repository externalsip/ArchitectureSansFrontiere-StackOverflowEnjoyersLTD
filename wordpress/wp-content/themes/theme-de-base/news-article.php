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
      
    <?php
$prev_post = get_previous_post();
if ( ! empty( $prev_post ) ): ?>
      <div class="line container">

      </div>
      <h2 class="pt-2">Prochain Article</h2>
      <div class="col-8 py-4" style="margin: auto;">
      <a href="<?php echo get_permalink( $prev_post->ID );?>">   
          <div class="card news">      
            <?php $thumbnail_id = get_post_thumbnail_id($prev_post->ID);
                  $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'full', true)[0]; ?>
            <img class="card-img-top" src="<?php echo $thumbnail_url ?>" style="border-radius: 15px; padding: 10px; max-height: 200px; object-fit: cover;" />
            <div class="card-body">
              <h5 class="card-title"><?php echo apply_filters( 'the_title', $prev_post->post_title ); ?></h5>
              <p class="card-text"><?php echo apply_filters( 'the_content', $prev_post->post_content ); ?></p>
            </div>
          </div>
        </div>

      </p>

<?php endif; ?>
    </section>


      </div>

  <?php
else: // Si aucune page n'a été trouvée
  get_template_part('partials/404'); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>