<?php get_header(); ?>

	<!--main-->
	<div id="main" class="clearfix">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="img-seccion">
				<div class="img-shadow"></div>
				<?php 
					$image = get_field('_cabecera');
					$size = 'encabezado'; 
					if( $image ) {
						echo wp_get_attachment_image( $image, $size, false, array('class' => 'img-absolute'));
					}
				?>
			</div>

			<div class="titulo-seccion">
				<div class="circulo">
					<span>
						<img src="<?php bloginfo('template_directory'); ?>/img/iconos/bandera.svg">
					</span>
				</div>	
				<h1><? the_title();?></h1>
			</div>

			<?php
				global $post;
				if ( has_excerpt( $post->ID ) ) {
					$excerpt= apply_filters('the_excerpt', get_post_field('post_excerpt', $post->ID));
				    echo '<div class="container">';
				    	if(is_page('proyecto-educativo')){
					    	echo '<img src=""'.get_bloginfo('template_directory').'/img/iconos/ico-globo.svg"><br>';
					    }
						echo '<h3 class="centrar">'.$excerpt.'</h3>';
					echo '</div>';
				} 
			?>

			<div class="container bt-padding">
				<?php
					if ( has_post_thumbnail() ) {
						echo get_the_post_thumbnail($post->ID, 'generica', array('class' => 'img-responsive col-md-6 col-xs-12 no-padding article'));
					}
				?>
				<? the_content();?>
				<? include_once('modulos/descargas.php');?>				
			</div>
		<?php endwhile; else: ?>
            <div class="col-xs-12">
                <p class="textos">Lo sentimos, el contenido que buscas no se encuentra disponible.</p>
            </div>
        <?php endif; ?>
	</div>
	<!--/main-->

<?php get_footer(); ?>