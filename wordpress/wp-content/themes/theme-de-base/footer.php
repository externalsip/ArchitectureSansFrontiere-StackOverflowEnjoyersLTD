<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche le pied de page (Footer) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/

// Fermeture de la zone de contenu principale ?>
</main>

<footer class="bd-footer">
      <div class="container pt-3 pb-3 ps-3 pe-3">
        <div class="row">
          <!--<div class="col-sm-12 col-lg-8 ps-4 text-start">-->
          <div class="col-12 col-lg-3">
            <a href="<?php echo esc_url( home_url( '/' ) ); // Lien vers la page d'accueil ?>">
              <img src="<?php bloginfo('template_url'); ?>/images/hero/logo.png" class="logo" alt="logo">
            </a>
            <?php 
            $footerInfo = new WP_Query("post_type=footer");
            while ($footerInfo->have_posts()) : $footerInfo->the_post(); 
            //ACFs ont été utilisés pour s'assurer que les informations soient traduites en Français et Anglais?>
            <div class="col-sm-12 col-lg-8 pt-4 text-start">
              <button
                type="button"
                class="btn2 btn--map text-start"
                data-bs-toggle="modal"
                data-bs-target="#button_modal"
              >
                <?php the_field("adressepart1"); ?> <br/>
                <?php the_field("adressepart2"); ?>
              </button>
              <div
                class="modal fade"
                id="button_modal"
                tabindex="-1"
                aria-labelledby="button_modalLabel"
                aria-hidden="true"
              >
                <div class="modal-dialog modal-lg modal-dialog-centered ps-3">
                  <div class="modal-content text-center">
                    <div class="modal-header">
                      <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                      ></button>
                    </div>
                    <div class="modal-body">
                      <iframe
                        class="col-12"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11183.655466016115!2d-73.5622731!3d45.5118125!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc9108322460ef1%3A0xca8e823480d71fa5!2sArchitecture%20Sans%20Fronti%C3%A8res%20Qu%C3%A9bec!5e0!3m2!1sfr!2sca!4v1696025495060!5m2!1sfr!2sca"
                        width="750"
                        height="450"
                        style="border: 0"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                      ></iframe>
                    </div>
                  </div>
                </div>
              </div>
              <p class="contact pt-3">
                514 868-1767<br />
                info@asf-quebec.org
              </p>
              <p class="bienfaisance">
              <?php the_field("organismepart1"); ?><br />
              <?php the_field("organismepart2"); ?>
              </p>
              <div class="col-12 col-lg-8 text-start">
                <p class="droits">
                <?php the_field("copyright"); ?>
                </p>
              </div>
            </div>
          </div>

          <div class="col-12 col-lg-3 pt-2 pb-3">
            <div class="logo_partenaire">
              
              <p class="presentation"><?php the_field("partenairetitre"); ?></p>

              <?php endwhile;
              wp_reset_postdata();
              $partnerInfo = new WP_Query("post_type=partenaire");
              while ($partnerInfo->have_posts()) : $partnerInfo->the_post();?>
              <a href="<?php the_field("partenaireurl");?>">
              <img
                class="partenaire"
                src="<?php the_field("partenaireimg");?>"
                alt="logo_partenaire"
              />
              </a>
              <?php endwhile;
              wp_reset_postdata();
              ?>

            </div>
          </div>

          <div class="col-12 col-lg-2 pt-2 pb-3">
		  <?php 
		// Affiche un menu si dans le tableau de bord un menu a été défini dans cet emplacement
		wp_nav_menu( array( 'theme_location' => 'footer-menu',
		'menu_class' => 'footer_menus',
		'list_item_class' => 'p-2' ) );
		?>
          </div>
          <?php 
            $footerInfo = new WP_Query("post_type=footer");
            while ($footerInfo->have_posts()) : $footerInfo->the_post(); ?>

          <div class="col-12 col-lg-4 pt-3 pb-3">
            <div class="dons text-center pb-5">
              <button type="button" class="btn-dons"><?php the_field("don");?></button>
            </div>
            <div class="infolettre text-center pb-4">
              <button type="button" class="btn-newsletter"><?php the_field("infolettre");?></button>
            </div>
            <p class="conditions text-center pt-5 pb-4">
            <?php the_field("tos");?> <br />
            <?php the_field("politiques");?>
            </p>
            <?php endwhile;
            wp_reset_postdata();?>
            <div class="medias text-center pt-4">
              <a
                href="https://www.facebook.com/architecturesansfrontieres/"
                target="_blank"
                ><i class="bi bi-facebook pe-3"></i
              ></a>
              <a
                href="https://www.youtube.com/channel/UCrfEAiivf9hiHqsQsxTCpBg/videos"
                target="_blank"
                ><i class="bi bi-youtube pe-3"></i
              ></a>
              <a
                href="https://www.linkedin.com/company/architectes-de-l'urgence-et-de-la-coop%C3%A9ration/"
                target="_blank"
                ><i class="bi bi-linkedin pe-3"></i
              ></a>
              <a href="https://twitter.com/quebecasf" target="_blank"
                ><i class="bi bi-twitter-x"></i
              ></a>
            </div>
            <div class="text-end pe-4">
              <a href="#" scroll-behavior:smooth
                ><i class="bi bi-arrow-up-circle"></i
              ></a>
            </div>
          </div>
        </div>
        <!---->
      </div>
</footer>

<?php wp_footer(); 
/* Espace où WordPress peut insérer des fichiers .js et autres. Par exemple pour des extensions (plugins). 
	 Si vous enlevez cette fonction, vous désactiverez du même coup toutes vos extensions (plugins) 🤷. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>
</body>

</html>
