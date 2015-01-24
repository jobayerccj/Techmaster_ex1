<?php get_header(); ?>
	
			<div id="main">

				<!-- One -->
                                
					<section id="one">
                                                <?php
                                                    while (have_posts()){
                                                        the_post();
                                                        ?>
                                                        
                                                        <header class="major">
                                                            <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
                                                        </header>
                                            <p><?php the_content();  ?></p>
                                                            <?php                                                           
                                                                                                         
                                                        }
                                                        
                                                ?>
							
						
					</section>

				
			</div>

		<?php get_footer();?>