<?php get_header(); ?>


<div class="main">
		<!-- SECCION 1: INCIO ============== -->
	<?php echo get_template_part("contenidos/Post/Seccion_1"); ?>



	<div class="contenedor_post"> 
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

 


			<div class="imagen">
				<?php the_post_thumbnail();?>
			</div>
			 

	 		<div class="titulo">
				<?php the_title(); ?>
			</div>
			 


			<div class="detalles">
				<span class="date"><?php the_time('M j, Y'); ?> | <?php the_time('g:i a'); ?></span>
				<span class="author"><?php _e( 'Publicado por: ', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
			</div>
			 
			<!-- /post details -->

			<div class="contenido">

			<!-- contenido -->
			<?php the_content(); ?>



			<!-- video youtube -->
			<?php  $video_youtube = (get_post_meta($post->ID, 'id_video_youtube', true)); ?>
			<?php 
				if($video_youtube  != '') { ?>
				<center>
			 		<iframe src="https://www.youtube.com/embed/<?php echo $video_youtube; ?>?ecver=2"  frameborder="0" allowfullscreen></iframe> 
			 	</center>
			 <?php } ?>  


			 <!-- video facebook -->
			<?php $video_facebook = (get_post_meta($post->ID, 'id_video_facebook', true)); ?>
			<?php 
				if($video_facebook  != '') { ?>



				 <center>
			 	  <?php echo $video_facebook; ?>
			 	  </center>
			 	 
			 <?php } ?>  

			 


			

			

			</div>

			<div class="meta">
			<?php the_tags( __( 'Etiquetas: ', 'html5blank' ), ', ', '<br>'); ?> 
			 <?php _e( 'Categorías: ', 'html5blank' ); the_category(', '); ?> 
			</div>


 
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

	 
 

	<?php endif; ?>

 

	</div><!-- contendor_post -->

	</div><!-- main -->


<?php get_footer(); ?>
