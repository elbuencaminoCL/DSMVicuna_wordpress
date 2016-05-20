					<?php 
						$orig_post = $post;
						global $post;
						$categories = get_the_category($post->ID);
						if ($categories) {
						$category_ids = array();
						foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
						$args=array(
							'category__in' => $category_ids,
							'post__not_in' => array($post->ID),
							'posts_per_page'=> 1,
							'caller_get_posts'=>1
						);
						$my_query = new wp_query( $args );
						if( $my_query->have_posts() ) {
						while( $my_query->have_posts() ) {
						$my_query->the_post();
					?>
						<div class="col col-lg-12 col-md-12 col-sm-12">
							<div class="row">
								<a class="block" href="<? the_permalink();?>">
									<?
										if(has_post_thumbnail()){
                                            echo get_the_post_thumbnail($post->ID, 'news-home', array('class' => 'img-responsive'));
                                        } else {
                                            echo '<img src="'.get_bloginfo('template_directory').'/img/default-news.jpg" class="img-responsive" alt="Colegio Santa María de Lo Cañas" />';
                                        }
									?>
								</a>
							</div>									
						</div>

						<div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12 detalle">																
							<h4><a href="<? the_permalink();?>"><? the_title();?></a></h4>									
							<h5><? echo get_the_date();?></h5>
							<?
								if($excerpt) {
                                    echo '<p class="hidden-xs">'.excerpt(15).'</p>';
                                } else {
                                    echo '<p class="hidden-xs">'.content(15).'</p>';
                                }
							?>
							<a class="ver-mas" href="<? the_permalink();?>">Ver Noticia</a>
						</div>    
					<?
						}}}
						$post = $orig_post;
						wp_reset_query(); 
					?>