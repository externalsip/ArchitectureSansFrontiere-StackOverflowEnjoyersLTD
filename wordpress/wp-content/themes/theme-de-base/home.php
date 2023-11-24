<?php 
/**
 * 	Template Name: Accueil
 * 
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

?>

<section class="hero" id="carrousel_hero">
      <div class="hero__wrapper container-fluid">
        <div class="row">
          <div class="col-md-6 col-12">
            <div class="hero__image__gradient"></div>
            <img src="<?php bloginfo('template_url'); ?>/images/accueil/hero.png" class="hero__image">
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
                //Loop sur chaque slide du héro pour tous les afficher.
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

          <div class="col-12 text-center"><?php the_field("titre_projets"); ?></div>
        </div>
        <div class="row projects__list justify-content-sm-between justify-content-center gy-5 mb-5">		
        <?php
    $projectArguments = array(
      'post_type' => 'projets',
      'posts_per_page' => 3
    );
    $project = new WP_Query($projectArguments);?>
    <?php
    while ($project->have_posts()) : $project->the_post(); ?>

          <div class="col-sm-4 col-8 projects__item">
            <?php the_post_thumbnail('full', array('class' => 'projects__image'));?>
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
          <div class="col-12 text-center"><?php the_field("titre_actualites"); ?></div>
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
                  <?php the_post_thumbnail('full', array('class' => 'actuality__img__source'));?>
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
          <?php
              $donationArguments = array(
                'post_type' => 'dons',
                'posts_per_page' => 1
              );
              $donation = new WP_Query($donationArguments);
              while ($donation->have_posts()) : $donation->the_post(); ?>
            <h1> <?php the_title(); ?></h1>
            <p>
				<?php the_content();?>
            </p>
            <button
              type="button"
              class="charity__button col-12 col-md-4 align-self-center align-self-sm-start"
              id="animationBtn"
            >
			<?php the_field("btnText"); ?>
            </button>

            <?php endwhile;
            wp_reset_postdata(); 
            ?>

          </div>
          <div class="charity__imgContainer col-12 col-sm-3">
            <div class="charity__img__gradient"></div>
            <img src="<?php bloginfo('template_url'); ?>/images/accueil/image_dons.png" class="charity__img">
          </div>
        </div>
      </div>
    </section>

    <!--NOS PROGRAMMES (Nos Services)-->

    <section class="programs">
      <div class="programs__wrapper container">
        <div class="row mb-5 pt-3">
          <div class="programs__title col-12 text-center">
			<?php
       get_field("titre_programmes"); ?>
          </div>
        </div>
        <div class="row justify-content-evenly">
        <?php 
                                $programArguments = array(
                                  'post_type' => 'programme',
                                  'posts_per_page' => 7,
                                  "order" => "DESC"
                                );
                                $program = new WP_Query($programArguments);
                                while ($program->have_posts()) : $program->the_post();?>
          <div class="card mb-5 col-8 col-md-5 programs__card">
            <div class="row g-0">
           
              <div class="col-12 col-md-9">
                <div class="card-body">
                  <h5 class="card-title"><?php the_title();?></h5>
                  <p class="card-text">
					            <?php the_field("resume");
                    ?>
                  </p>
                </div>
              </div>
              <div class="col-12 col-md-3 text-center">
                  <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
              </div>
            </div>
          </div>

          <?php endwhile;
          wp_reset_postdata();
          ?>
        </div>
      </div>
    </section>

    <!--TÉMOIGNAGES-->

    <section class="feedback">
      <div class="feedback__wrapper container-">
        <div class="row">
          <div class="feedback__title col-12 text-center"><?php the_field("titre_temoignages"); ?></div>
        </div>
        <div class="row justify-content-evenly">
			<?php                                 
        $temoignageArguments = array(
          'post_type' => 'temoignages',
          'posts_per_page' => 7,
          'order' => 'DESC'
        );
        $temoignage = new WP_Query($temoignageArguments);
        while ($temoignage->have_posts()) : $temoignage->the_post();?>
          <div class="col-8 col-md-3 person__wrapper">
            <?php the_post_thumbnail('full', array('class' => 'person__img')) ?>
            <div class="person__text">
              <h2 class="person__name"><?php the_title();?></h2>
              <p class="person__statement">
				<?php the_content();?>
              </p>
            </div>
	
          </div>		
		  <?php endwhile;
          wp_reset_postdata();?>
          </div>
        </div>
      </div>
    </section>
<?php
get_footer(); // Affiche footer.php 
?>