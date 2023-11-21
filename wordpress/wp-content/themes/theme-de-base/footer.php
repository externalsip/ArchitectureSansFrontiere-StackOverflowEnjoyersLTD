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
            <div class="col-sm-12 col-lg-8 pt-4 text-start">
              <button
                type="button"
                class="btn2 btn--map text-start"
                data-bs-toggle="modal"
                data-bs-target="#button_modal"
              >
                201 rue Sainte-Catherine <br />
                Est, Montréal, QC, H2X 1L2
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
                Numéro d'organisme de bienfaisance<br />
                officiel du Canada: 831067012RR0001
              </p>
              <div class="col-12 col-lg-8 text-start">
                <p class="droits">
                  Copyright (c)2023 Architecture sans frontières Québec. Tous
                  droits réservés. | Propulsé par Stack Overflow Enjoyers LTD
                </p>
              </div>
            </div>
          </div>

          <div class="col-12 col-lg-3 pt-2 pb-3">
            <div class="logo_partenaire">
              <p class="presentation">Notre partenaire fondateur</p>

              <img src="<?php bloginfo('template_url'); ?>/images/footer/logo_partenaire.png" class="partenaire" alt="logo_partenaire">
            </div>
          </div>

          <div class="col-12 col-lg-2 pt-2 pb-3">
		  <?php 
		// Affiche un menu si dans le tableau de bord un menu a été défini dans cet emplacement
		wp_nav_menu( array( 'theme_location' => 'footer',
		'menu_class' => 'footer_menus',
		'list_item_class' => 'p-2' ) );
		?>
          </div>

          <div class="col-12 col-lg-4 pt-3 pb-3">
            <div class="dons text-center pb-5">
              <button type="button" class="btn-dons">Faire un don</button>
            </div>
            <div class="infolettre text-center pb-4">
              <button type="button" class="btn-newsletter">Infolettre</button>
            </div>
            <p class="conditions text-center pt-5 pb-4">
              Conditions d'utilisation <br />
              Politique de confidentialité
            </p>
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
              <a href="index.html#carrousel_hero" scroll-behavior:smooth
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
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
</body>

</html>
