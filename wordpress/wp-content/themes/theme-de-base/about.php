<?php
/**
 * 	Template Name: À propos
 *  Template Post Type: apropos
 */
?>
<?php
get_header(); // Affiche header.php
?>


<?php
$aboutText = new WP_Query("post_type=aPropos");
?>

<?php
if ($aboutText->have_posts()):
	?>

	<?php
	while ($aboutText->have_posts()):
		$aboutText->the_post();
		?>

		<section class="network_section">
			<div>
				<div class="description container mt-2">
					<h1 class="description_title"> <span>
							<?php the_title() ?>
						</span> </h1>
					<?php the_content(array("class" => "description_paragraph mx-2 p-lg-5")); ?>
				</div>
				<div class="sponsor">
					<?php the_post_thumbnail("full", array("class" => "section_image mb-5", "loading" => "lazy")); ?>
				</div>
			</div>
		</section>

		<?php
	endwhile;
	wp_reset_postdata();
	?>

	<?php
else: // Si aucune page n'a été trouvée
	get_template_part('partials/404'); // Affiche partials/404.php
endif;
?>

<?php
get_footer(); // Affiche footer.php 
?>