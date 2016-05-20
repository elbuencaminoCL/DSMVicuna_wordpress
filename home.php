<?php
    /*
    Template Name: Home
    */
?>

<?php get_header(); ?>
    <div id="main" class="clearfix">
        <div class="cont-header">
            <? include_once('modulos/slider.php');?>
        </div>
        <div id="proyecto" class="clearfix">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <? the_content();?>
                        <?php if( get_field('_agregar_enlace') ): ?>
                            <div class="cont-button clearfix">
                                <a href="<?php the_field('_agregar_enlace'); ?>" class="button button-home">Ver proyecto educacional</a>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>

        <div id="segmentos" class="clearfix block">
            <?php if(function_exists('home_pages')) home_pages("id=".$post->ID."&class=hp&childs=true"); ?>
        </div>

        <div class="container">

                <div class="row">

                    <div id="noticias" class="col-md-9 col-xs-12 bt-padding">

                        <h1>ÚLTIMAS <span>NOTICIAS</span></h1>

                        <div class="row">

                            <div class="col-md-4 col-xs-12 col-news">

                                <h4>Orgullosos de nuestra area tecnica profesional</h4>

                                <img src="img/sample-pics/016.jpg" class="img-responsive hidden-sm hidden-xs">

                                <p>La cigüeña tocaba el saxofón detrás del palenque de paja. Quiere la boca exhausta vid, kiwi, piña y fugaz jamón. Fabio me exige, sin tapujos, que añada cerveza al whisky. Jovencillo emponzoñado de whisky, ¡qué figurota exhibes! La cigüeña tocaba cada vez mejor el saxofón y el búho pedía kiwi y queso.</p>

                                <a href="#" class="btn-ocho clearfix">
                                    <span>20/04/2016</span>
                                    <span>Ver más</span>
                                </a>

                            </div>

                            <div class="col-md-4 col-xs-12 col-news">

                                <h4>Orgullosos de nuestra area tecnica profesional</h4>

                                <img src="img/sample-pics/017.jpg" class="img-responsive hidden-sm hidden-xs">

                                <p>La cigüeña tocaba el saxofón detrás del palenque de paja. Quiere la boca exhausta vid, kiwi, piña y fugaz jamón. Fabio me exige, sin tapujos, que añada cerveza al whisky. Jovencillo emponzoñado de whisky, ¡qué figurota exhibes! La cigüeña tocaba cada vez mejor el saxofón y el búho pedía kiwi y queso.</p>

                                <a href="#" class="btn-ocho clearfix">
                                    <span>20/04/2016</span>
                                    <span>Ver más</span>
                                </a>

                            </div>

                            <div class="col-md-4 col-xs-12 col-news">

                                <h4>Orgullosos de nuestra area tecnica profesional</h4>

                                <img src="img/sample-pics/018.jpg" class="img-responsive hidden-sm hidden-xs">

                                <p>La cigüeña tocaba el saxofón detrás del palenque de paja. Quiere la boca exhausta vid, kiwi, piña y fugaz jamón. Fabio me exige, sin tapujos, que añada cerveza al whisky. Jovencillo emponzoñado de whisky, ¡qué figurota exhibes! La cigüeña tocaba cada vez mejor el saxofón y el búho pedía kiwi y queso.</p>

                                <a href="#" class="btn-ocho clearfix">
                                    <span>20/04/2016</span>
                                    <span>Ver más</span>
                                </a>

                            </div>

                            <div class="col-xs-12">
                                <a class="right btn-trece" href="#"><span></span>Ver todas las noticias</a>
                            </div>

                        </div>

                    </div><!-- NOTICIAS -->

                    <!-- ACCESOS DIRECTOS -->
                    <div id="accesos" class="col-md-3 col-xs-12">
                        <h1>Accesos <span>Directos</span></h1>
                        <a class="btn btn-once mayus" role="button" data-toggle="collapse" href="#syscol" aria-expanded="false" aria-controls="syscol">Syscol <img class="right img-ico" src="img/iconos/icono-syscol.svg"></a>
                        <div class="collapse" id="syscol">
                            <form>
                                <input type="text" placeholder="Nombre de usuario">
                                <input type="text" placeholder="Contraseña">
                                <button type="submit" class="btn">Ingresar</button>
                                <a href="#">¿Olvidó su contraseña?</a>
                            </form>
                        </div>
                        <? include_once('modulos/accesos.php');?>
                    </div>
                </div> 
            </div>

            <div id="efemerides" class="hidden-sm hidden-xs">

                <div class="container">

                    <a href="#" class="clearfix btn-block evento">                      

                        <div class="fecha left">
                            <h4>APR</h4>
                            <h2>20</h2>
                        </div>

                        <div class="event-desc left">
                            <h4>Titulo evento</h4>
                            <p>Lorem ipsum dolor sit amet, sed an postea invenire, tale voluptatum vel no.</p>
                        </div>

                    </a>

                </div>

            </div>

            <div class="db-bg">

                <div class="container">

                    <div id="academias" class="col-md-7 col-xs-12">

                        <h1>Acade<span>mias</span></h1>

                        <div class="academia-md">

                            <a href="#" class="btn-dos mayus">Artísticas</a>

                            <div class="img-shadow"></div>

                            <img class="img-absolute" src="img/sample-pics/012.jpg">

                        </div>

                        <div class="academia-md">

                            <a href="#" class="btn-dos mayus">Deportivas</a>

                            <div class="img-shadow"></div>

                            <img class="img-absolute" src="img/sample-pics/026.jpg">

                        </div>

                        <div class="clearfix">
                            <a class="right btn-doce" href="#"><span></span>Ver todas las academias</a>
                        </div>

                    </div>

                    <!-- AGENDA -->

                    <div id="agenda" class="col-md-5 col-xs-12 bt-padding">

                        <h1>AGEN<span>DA</span></h1>

                        <a href="#" class="clearfix btn-block evento">                      

                            <div class="fecha left">
                                <h4>APR</h4>
                                <h2>20</h2>
                            </div>

                            <div class="event-desc right">
                                <h4>Titulo evento</h4>
                                <p>Lorem ipsum dolor sit amet, sed an postea invenire, tale voluptatum vel no.</p>

                                <div class="col-xs-6">
                                    <div class="row">
                                        <img src="img/iconos/ico-lugar.svg"> Lugar evento
                                    </div>
                                </div>

                                <div class="col-xs-6">
                                    <div class="row">
                                        <img src="img/iconos/ico-hora.svg"> 12:00 Hrs.
                                    </div>
                                </div>

                            </div>

                        </a>

                        <a href="#" class="clearfix btn-block evento">                      

                            <div class="fecha left">
                                <h4>APR</h4>
                                <h2>20</h2>
                            </div>

                            <div class="event-desc right">
                                <h4>Titulo evento</h4>
                                <p>Lorem ipsum dolor sit amet, sed an postea invenire, tale voluptatum vel no.</p>

                                <div class="col-xs-6">
                                    <div class="row">
                                        <img src="img/iconos/ico-lugar.svg"> Lugar evento
                                    </div>
                                </div>

                                <div class="col-xs-6">
                                    <div class="row">
                                        <img src="img/iconos/ico-hora.svg"> 12:00 Hrs.
                                    </div>
                                </div>

                            </div>

                        </a>

                        <a href="#" class="clearfix btn-block evento">                      

                            <div class="fecha left">
                                <h4>APR</h4>
                                <h2>20</h2>
                            </div>

                            <div class="event-desc right">
                                <h4>Titulo evento</h4>
                                <p>Lorem ipsum dolor sit amet, sed an postea invenire, tale voluptatum vel no.</p>

                                <div class="col-xs-6">
                                    <div class="row">
                                        <img src="img/iconos/ico-lugar.svg"> Lugar evento
                                    </div>
                                </div>

                                <div class="col-xs-6">
                                    <div class="row">
                                        <img src="img/iconos/ico-hora.svg"> 12:00 Hrs.
                                    </div>
                                </div>

                            </div>

                        </a>

                        <a href="#" class="clearfix btn-block evento">                      

                            <div class="fecha left">
                                <h4>APR</h4>
                                <h2>20</h2>
                            </div>

                            <div class="event-desc right">
                                <h4>Titulo evento</h4>
                                <p>Lorem ipsum dolor sit amet, sed an postea invenire, tale voluptatum vel no.</p>

                                <div class="col-xs-6">
                                    <div class="row">
                                        <img src="img/iconos/ico-lugar.svg"> Lugar evento
                                    </div>
                                </div>

                                <div class="col-xs-6">
                                    <div class="row">
                                        <img src="img/iconos/ico-hora.svg"> 12:00 Hrs.
                                    </div>
                                </div>

                            </div>

                        </a>

                        <div class="clearfix">
                            <a class="right btn-doce" href="#"><span></span>Ver todos los eventos</a>
                        </div>

                    </div><!-- AGENDA -->

                </div>

            </div>          

        </div><!-- FIN CONTENIDO -->
<?php get_footer(); ?>