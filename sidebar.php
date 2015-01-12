				<div id="sidebar1" class="sidebar m-all cf" role="complementary">

						<?php 
						    query_posts(array( 
						        'post_type' => 'recipe',
						        'showposts' => 4 
						    ) );  
						?>
						<div class="no-widgets t-1of3 d-1of3 cf">
							<h2>Recipes</h2>
							<?php while (have_posts()) : the_post(); ?>
						        <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
						        <!--<p><?php //echo get_the_excerpt(); ?></p>-->
							<?php endwhile;?>
						</div>

						<?php 
						    query_posts(array( 
						        'post_type' => 'code',
						        'showposts' => 4 
						    ) );  
						?>
						<div class="no-widgets t-1of3 d-1of3 cf">
							<h2>Code</h2>
							<?php while (have_posts()) : the_post(); ?>
						        <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
						        <!--<p><?php //echo get_the_excerpt(); ?></p>-->
							<?php endwhile;?>
						</div>

						<?php 
						    query_posts(array( 
						        'post_type' => 'music',
						        'showposts' => 4 
						    ) );  
						?>
						<div class="no-widgets t-1of3 d-1of3 cf">
							<h2>Music</h2>

							<?php while (have_posts()) : the_post(); ?>
						        <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>

						        <p><?php the_category() ?></p>

						        <p><?php the_content(); ?></p>
							<?php endwhile;?>
						</div>


				</div>
