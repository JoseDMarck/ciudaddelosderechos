<?php get_header(); ?>


<div class="main">

	<!-- SECCION 1: INCIO ============== -->
	<?php echo get_template_part("contenidos/Blog/Seccion_1"); ?>







	<div class="Seccion_Blog">		

	<div class="titulo_meta">
		<?php _e( 'Publicaciones para: ', 'html5blank' ); single_cat_title(); ?>
		</div>
		
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>


		<div class="Bloque_post">
		<div class="imagen">
			<a href="<?php the_permalink();?>">
			<?php echo get_the_post_thumbnail( $post_id, 'full' );?>
			</a>
		


		</div>



			<div class="titulo">
				<a href="<?php the_permalink();?>">
				   <?php echo the_title();  ?>
				</a>
			</div>


			<div class="descripcion">
				<a href="<?php the_permalink();?>">
				   <?php echo $propuestasExtracto = propuestasExtracto ($post_id);  ?>
				</a>
			</div>

	<div style="clear: both;"></div>
	</div>




				<?php endwhile; ?>

				<?php else: ?>
				
					<!-- article -->
					<article>
						<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
					</article>
					<!-- /article -->
				
				<?php endif; ?>


  <?php
      if (function_exists(custom_pagination)) {
        custom_pagination($custom_query->max_num_pages,"",$paged);
      }
    ?>


    

</div>

</div> <!-- Main -->


<?php get_footer(); ?>


