<?php get_header(); ?>
	<!--main-->
	<div id="main" class="clearfix">
		<?
			$news = get_page_by_path('nuestro-colegio/noticias');
		?>
		<div id="foto-encabezado" class="absolute">
			<?php 
				$image = get_field('_cabecera', $news);
				$size = 'encabezado'; 
				if($image) {
					echo wp_get_attachment_image( $image, $size );
				}
			?>
	    </div>
		<h2 class="titulo-seccion center relative"><span><? echo get_the_title($news);?></span></h2>

		<div class="container relative ficha-noticia" id="noticias">
			<div class="row">
				<div class="col-md-9 col-sm-12 noticia-selected">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<h1 class="t-exo upper"><? the_title();?></h3>

						<?php
							if ( has_post_thumbnail() ) {
								echo get_the_post_thumbnail($post->ID, 'news-det', array('class' => 'img-responsive'));
							}
						?>

						<article class="clearfix">
							<h4><span><img src="<?php bloginfo('template_directory'); ?>/img/iconos/calendario-mini-verde.svg"></span><?php echo get_the_date(); ?></h4>
							<? the_content();?>
						</article>

						<div class="col-sm-4">
							<div class="row">
								<a class="btn-primary btn-lg btn-block btn-azul" href="<?php bloginfo('wpurl'); ?>/nuestro-colegio/noticias/">Volver a NOTICIAS</a>
							</div>
						</div>
					<?php endwhile; else: ?>
			            <div class="col-xs-12">
			                <p class="textos">Lo sentimos, el contenido que buscas no se encuentra disponible.</p>
			            </div>
			        <?php endif; ?>
				</div>

				<div class="col-sm-3 hidden-xs car-noticia">
					<h3 class="h3-aside upper text-center">Últimas noticias</h3>
					<? include_once('modulos/related.php');?>

					<div id="sidebar-bulletin" class="col-sm-12 burbuja-alerta-aside">
						<? echo do_shortcode('[contact-form-7 id="987" title="Suscribirse side"]');?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>