<div class="contenedor_noticias">
	<div class="sliderSeccion">
	<?php  $temp = $wp_query; 
     $wp_query = null; 
     $wp_query = new WP_Query(); 
     $wp_query->query('showposts=5&post_type=post'.'&paged='.$paged); 
     while ($wp_query->have_posts()) : $wp_query->the_post(); 
	?>
		
	<div class="BloqueSlider">
		<div class="contenedorNoticia">
			<?php $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
			
			<div class="imagen">
			 <?php the_post_thumbnail();?>
			</div><!--imagen -->

			<div class="textos">
				<div class="titulo">
					<a href="<?php the_permalink();?>">
						<?php echo the_title(); ?>
					</a>
				</div>


			<div class="detalles">
				<span class="date"><?php the_time('M j, Y'); ?> | <?php the_time('g:i a'); ?></span>
				<span class="author"><?php _e( 'Publicado por: ', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
			</div>

			<div class="descripcion">
				<a href="<?php the_permalink();?>" class="extracto_web">
				   <?php echo $propuestasExtractoSlider = propuestasExtractoSlider($post_id);  ?>
				</a>

				<a href="<?php the_permalink();?>" class="extracto_movil">
				   <?php echo $propuestasExtractoSlider_2 = propuestasExtracto($post_id);  ?>
				</a>
			</div>
			
			</div><!-- textos -->
		
		</div><!-- contenedorNoticias -->
		
	</div>


	<?php endwhile; ?>
			 
	</div>


<div style="clear: both;"></div>
</div><!-- slider_noticias -->