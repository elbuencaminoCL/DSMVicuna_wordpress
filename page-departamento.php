<?php
    /*
    Template Name: Departamento
    */
?>

<?php get_header(); ?>

	<div id="main" class="clearfix">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>			
			
			<div class="img-seccion">
				<div class="img-shadow"></div>
				<?php 
					$image = get_field('_cabecera');
					$size = 'encabezado'; 
					if( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}
				?>
			</div>

			<div class="titulo-seccion">
				<div class="circulo">
					<span>
						<img src="<?php bloginfo('template_directory'); ?>/img/iconos/bandera.svg">
					</span>
				</div>	
				<h1><? the_title(); ?></h1>
			</div>
			
			<div class="container">
				<h3 class="centrar">El aprendizaje de una segunda lengua es enriquecedor en la educación inicial, adquiriendose con facilidad y naturalidad, permitiendoles asi expandir sus conocimientos en otra lengua y preparandolos para el proceso de playgroup a cuatro básico, que tendrá continuidad en la educación básica</h3>
			</div>
			
			
			<div class="container bt-padding">
			<?php
				if ( has_post_thumbnail() ) {
					echo '<div class="col-md-6 col-xs-12">';
						echo '<div class="row">';
							echo get_the_post_thumbnail($post->ID, 'generica', array('class' => 'img-responsive'));
						echo '</div>';
					echo '</div>';
					echo '<div class="col-md-6 col-xs-12">';
						echo get_the_content();
					echo '</div>';
				} else {
					echo get_the_content();
				}
			?>
			</div>
			
			<div class="titulo-uno">
				<div class="container">
					<h2 class="mayus">Noticias del departamento</h2>
				</div>
			</div>
			
			
			<div class="container">
				<div class="row">
					
					
					<?php 
						$posts = get_field('_noticias_departamento');
							$exc= apply_filters('the_excerpt', get_post_field('post_excerpt', $posts->ID));
						if( $posts ): ?>
						    <?php foreach( $posts as $post): ?>
						    <?php setup_postdata( $post); ?>
					<div class="col-md-3 col-xs-12 col-news">
						<h4><?php the_title(); ?></h4>

						<?
			            	if(has_post_thumbnail()){
			                	echo get_the_post_thumbnail($post->ID, 'news-related', array('class' => 'img-responsive'));
							} else {
			                    echo '<img src="'.get_bloginfo('template_directory').'/img/default-news.jpg" class="img-responsive" alt="Colegio Domingo santa Maria Vicuña" />';
							}
						?>

						<?
						    if($excerpt) {
                            	echo '<p class="hidden-xs">'.$excerpt.'</p>';
                            } else {
                                echo '<p class="hidden-xs">'.content(20).'</p>';
                            }
                        ?>
                        
						<a href="<? the_permalink();?>" class="btn-nueve clearfix">
							<span><? the_date();?></span>
							<span>Ver más</span>
						</a>

					</div>
					
						<?php wp_reset_postdata(); ?>
						<?php endforeach; ?>
						    
					<?php endif; ?>


					<div class="col-xs-12 centrar">
						<a href="<?php bloginfo('wpurl'); ?>/noticias/" class="btn btn-dos mayus">Ver todas las noticias</a>
					</div>																					

				</div>

			</div>

			

			
	<?php endwhile; else: ?>
            <div class="col-xs-12">
                <p class="textos">Lo sentimos, el contenido que buscas no se encuentra disponible.</p>
            </div>
        <?php endif; ?>
        
        
	</div><!--/main-->
<?php get_footer(); ?>