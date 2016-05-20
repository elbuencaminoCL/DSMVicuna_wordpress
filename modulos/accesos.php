                    <?php if( have_rows('_accesos_directos') ): ?>
                        <?php while( have_rows('_accesos_directos') ): the_row(); 
                            $image = get_sub_field('_icono_acceso');
                            $titulo = get_sub_field('_titulo_acceso');
                            $link = get_sub_field('_enlace_acceso_directo');
                        ?>
                            <a href="<?php echo $link; ?>" class="btn btn-once mayus"><?php echo $titulo; ?> <img class="right img-ico" src="<?php echo $image; ?>" alt="<?php echo $titulo ?>" /></a>
                        <?php endwhile; ?>
                    <?php endif; wp_reset_postdata(); ?>