<div class="card mb-5 col-8 col-md-5 programs__card">
    <a href="<?php echo esc_url(get_post_permalink());?>" > 
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
                  <?php the_post_thumbnail('full', array('class' => 'img-fluid', 'loading' => 'lazy')); ?>
              </div>
            </div>
        </a>
</div>