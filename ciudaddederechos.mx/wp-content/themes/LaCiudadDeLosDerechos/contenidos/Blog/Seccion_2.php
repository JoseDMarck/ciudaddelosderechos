<div class="Seccion_Blog">
	
<?php
  $temp = $wp_query; 
  $wp_query = null; 
  $wp_query = new WP_Query(); 
  $wp_query->query('showposts=5&post_type=post'.'&paged='.$paged); 

  while ($wp_query->have_posts()) : $wp_query->the_post(); 
?>


	<div class="Bloque_post">
		<div class="imagen">
			<a href="<?php the_permalink();?>">
			<?php echo the_post_thumbnail(); ?>
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

  <?php
      if (function_exists(custom_pagination)) {
        custom_pagination($custom_query->max_num_pages,"",$paged);
      }
    ?>



</div><!-- Seccion_Blog -->