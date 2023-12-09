<div class="credits container-fluid" id="credits">
      <div class="row justify-content-center">
      <?php $bannerInfo = new WP_Query("post_type=banniere");
 while ($bannerInfo->have_posts()) : $bannerInfo->the_post(); ?>
        <p class="credit_site text-center col-12">
<?php the_field("bannieretext");?>
          <a class="asfq" href="https://www.asf-quebec.org/"><?php the_field("banniereclick");?></a
          ><i class="bi bi-x col-12 ps-2 pt-2" id="close"></i>
        </p>
        <?php endwhile;
        wp_reset_postdata();?>
      </div>
    </div>