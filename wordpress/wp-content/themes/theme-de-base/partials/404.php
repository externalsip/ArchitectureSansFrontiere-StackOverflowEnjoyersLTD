<section class="notFound" id="page404">
        <div class="notFound__wrapper container-fluid">
            <div class="row">
                <div class="col-12 text-sm-start text-center notFound__container">
                    <?php
                    $missing = new WP_Query("post_type=erreur404");
                    while($missing->have_posts()) : $missing->the_post();
                    ?>
                    <h1 class="notFound__title"></h1>
                    <p class="notFound__text"><?php the_content(); ?></p>
                    <?php 
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
        <script>


                    </script>
    </section>
