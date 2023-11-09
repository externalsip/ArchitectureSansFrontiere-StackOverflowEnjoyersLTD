<?php 
/**
 * 	Template Name: Accueil
 * 
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

?>

<section class="hero" id="carrousel_hero">
      <div class="hero__wrapper container">
        <div class="row">
          <div class="hero__image col-md-6 col-12">
            <div class="hero__image__gradient"></div>
          </div>
          <div class="hero__info col-md-6 col-12 swiperProject">
            <div class="swiper-wrapper swiperProjectWrapper">
                <?php
                $slideArguments = array(
                  'post_type' => 'slideheroprincipal',
                  'posts_per_page' => 4
                );
                $heroSlides = new WP_Query($slideArguments);
                while ($heroSlides->have_posts()) : $heroSlides->the_post(); 
                ?>
              <div class="swiper-slide hero__text">
                <h1><?php the_title();?></h1>
                <p>
					<?php the_content();?>
                </p>
              </div>
			<?php
      endwhile;
      wp_reset_postdata();
			 ?>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
    </section>

    <!--PROJECTS-->

    <section class="projects">
      <div class="projects__wrapper container p-2">
        <div class="row projects__title mt-3 mb-5">
          <div class="col-12 text-center"><?php ?>Projets</div>
        </div>
        <div class="row projects__list justify-content-sm-between justify-content-center gy-5 mb-5">		
          <?php
    $projectArguments = array(
      'post_type' => 'projets',
      'posts_per_page' => 3
    );
    $project = new WP_Query($projectArguments);
    while ($project->have_posts()) : $project->the_post(); ?>

          <div class="col-sm-4 col-8 projects__item">
            <?php the_post_thumbnail(array('class' => 'projects__image'));?>
            <p class="projects__name"><?php the_title();?></p>
          </div>
	<?php endwhile;
  wp_reset_postdata(); ?>
      </div>
    </section>

    <!--ACTUALITÉS-->

    <section class="actuality">
      <div class="actuality__wrapper container pt-2">
        <div class="row actuality__title mb-5 mt-3">
          <div class="col-12 text-center">Actualités</div>
        </div>
        <div class="row p-0">
          <div
            class="col-md-6 col-12 swiperActIMG actuality__swiper swiper-no-swiping px-0 pb-3 pb-sm-0"
          >
            <div class="swiper-wrapper col-6">
				<?php     $articleArguments = array(
      'post_type' => 'article',
      'posts_per_page' => 3
    );
    $article = new WP_Query($articleArguments);
    while ($article->have_posts()) : $article->the_post(); ?>
              <div class="swiper-slide actuality__img">
                <div class="actuality__img__gradient"></div>
                  <?php the_post_thumbnail(array('class' => 'actuality__img_source'));?>
              </div>

			  <?php 
        endwhile;
        wp_reset_postdata();
        ?>

            </div>
            <div class="swiper-button-next actuality__swiper__btn"></div>
            <div class="swiper-button-prev actuality__swiper__btn"></div>
          </div>
          <div
            class="col-md-6 col-12 swiperActTXT actuality__swiper swiper-no-swiping pb-3"
          >
            <div class="swiper-wrapper col-6">

				<?php     while ($article->have_posts()) : $article->the_post();?>

              <div class="swiper-slide actuality__txt p-3">
                <h1>
					<?php the_title();?>
                </h1>
                <p>
					<?php the_content();?>
                </p>
              </div>

			  <?php 
                endwhile;
                wp_reset_postdata();
        ?>

            </div>
          </div>
        </div>
      </div>
    </section>

    <!--DONS-->

    <section class="charity">
      <div class="charity__wrapper container p-0 pt-3 pt-sm-0">
        <div class="row">
          <div
            class="charity__text col-12 col-sm-9 text-center text-sm-start p-5"
          >
            <h1> <?php ?>Donnez</h1>
            <p>
				<?php ?>
              Nos donateurs sont essentiels. Consultez notre portail de dons
              pour soutenir notre mission ou une cause qui vous tient à coeur.
              Vous bénéficierez d’un reçu de charité déductible d’impôt !
            </p>
            <button
              type="button"
              class="charity__button col-12 col-md-4 align-self-center align-self-sm-start"
              id="animationBtn"
            >
			<?php ?>
              Faire un don
            </button>
          </div>
          <div class="charity__imgContainer col-12 col-sm-3">
            <div class="charity__img__gradient"></div>
            <img
              src="/sources/medias/01_accueil/image_dons.png"
              class="charity__img"
            />
          </div>
        </div>
      </div>
    </section>

    <!--NOS PROGRAMMES (Nos Services)-->

    <section class="programs">
      <div class="programs__wrapper container">
        <div class="row mb-5 pt-3">
          <div class="programs__title col-12 text-center">
			<?php ?>
            Nos Programmes
          </div>
        </div>
        <div class="row justify-content-evenly">
          <div class="card mb-5 col-8 col-md-5 programs__card">
            <div class="row g-0">
            <?php ?>
              <div class="col-12 col-md-9">
                <div class="card-body">
                  <h5 class="card-title"><?php ?>Coopération internationale</h5>
                  <p class="card-text">
					<?php ?>
                    Une expertise architecturale pour les projets de coopération
                    internationale des ONG canadiennes et de leurs partenaires
                    des pays en développement
					
                  </p>
                </div>
              </div>
              <div class="col-12 col-md-3 text-center">
                <img
                  src="/sources/medias/01_accueil/iconProgramme1.png"
                  class="img-fluid"
                  alt="icon1"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--TÉMOIGNAGES-->

    <section class="feedback">
      <div class="feedback__wrapper container-">
        <div class="row">
          <div class="feedback__title col-12 text-center">Témoignages</div>
        </div>
        <div class="row justify-content-evenly">
			<?php ?>
          <div class="col-8 col-md-3 person__wrapper">
            <div class="person__img"></div>
            <div class="person__text">
              <h2 class="person__name"><?php ?>Jean Remont</h2>
              <p class="person__statement">
				<?php ?>
                J’étais présent lors de la constructon d’une école et c’était
                très inspirant!
              </p>
            </div>
	
          </div>		
		  <?php ?>
          </div>
        </div>
      </div>
    </section>
<?php
get_footer(); // Affiche footer.php 
?>