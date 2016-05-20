<?php
    /*
    Template Name: Contacto
    */
?>

<?php get_header(); ?>
	<div id="main" class="clearfix">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div id="foto-encabezado" class="absolute">
				<?php 
					$image = get_field('_cabecera');
					$size = 'encabezado'; 
					if( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}
				?>
	    	</div>
			<h2 class="titulo-seccion center relative"><span><? the_title();?></span></h2>

			<div class="container relative">				
				<div class="col-sm-7 col-xs-12">
					<h3 class="upper titulo-tres">Contáctanos</h3>
					<div id="form-contacto">
						<? the_content();?>
					</div>
				</div>

				<div class="col-sm-5 col-xs-12">
					<h4>UBICACIÓN</h4>
					<div class="ubicacion">
						<?php if( get_field('_ingresar_mapa') ): ?>
							<?php the_field('_ingresar_mapa'); ?>
                        <?php endif; ?>
						<?php if( get_field('_datos_bajo_mapa') ): ?>
							<?php the_field('_datos_bajo_mapa'); ?>
                        <?php endif; ?>
					</div>
				</div>

				<div class="col-xs-12 como-llegar">
					<?php if( get_field('_titulo_seccion') ): ?>
						<h3 class="upper titulo-tres"><?php the_field('_titulo_seccion'); ?></h3>
                    <?php endif; ?>				

					<div class="panel-group" id="destino" role="tablist" aria-multiselectable="true">
						<?php if( have_rows('_ingresar_panel') ): ?>
							<?php while( have_rows('_ingresar_panel') ): the_row(); 
								$num = get_sub_field('_numero_panel');
								$titulo = get_sub_field('_titulo_panel');
								$panel = get_sub_field('_cont_panel');
							?>
								<div class="panel panel-default">
								    <div class="panel-heading" role="tab" id="headingOne">
								      	<h4 class="panel-title upper titulo-panel">
								        	<a class="clearfix" role="button" data-toggle="collapse" data-parent="#destino" href="#destino<? echo $num ;?>" aria-expanded="false" aria-controls="destino<? echo $num ;?>">
								        	<? echo $titulo ;?> <img class="pull-right" src="<?php bloginfo('template_directory'); ?>/img/iconos/ico-toggle.svg">
								       		</a>
								      	</h4>
								    </div>
								    <div id="destino<? echo $num ;?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<? echo $num ;?>">
								      	<div class="panel-body"><? echo $panel ;?></div>
								    </div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>				
				
			</div><!-- CONTAINER -->
		<?php endwhile; else: ?>
            <div class="col-xs-12">
                <p class="textos">Lo sentimos, el contenido que buscas no se encuentra disponible.</p>
            </div>
        <?php endif; ?>
	</div>

<?php get_footer(); ?>