<?php get_header() ?>
<body>
	<h1 class="page-heading max-width"><?php bloginfo(name); ?></h1>
	<div class="grid">
		<div class="block grid--item-9">
			Últimos trabajos
		</div>		
		<div class="block__body grid">
			<?php 
				// Categoria == 4, Muestra las entradas con id 4
				// 	 => -4 excluye la categoría 4
				//$args = array('cat' => 4, 'author' => 'dantehemerson', 'posts_per_page' => 1);
				$args = array('author' => 'dantehemerson');
				$filter_posts = new WP_Query($args);

				if($filter_posts->have_posts()) :
					while($filter_posts->have_posts()) :
						$filter_posts->the_post();
			?>
						<article class="block_body">
							<h2 class="block_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<?php 
								if(has_post_thumbnail()){ ?>								
									<picture>
										<source srcset="<?php the_post_thumbnail_url('full'); ?>" media="(min-width: 600px)">
										<img src="<?php the_post_thumbnail_url(); ?>" alt="x">
									
										
									</picture>
							<?php
								}
							?>
							<p><?php the_excerpt(); ?></p>							
							<footer>
								<small><?php the_tags() ?></small>
								<small>by <b><?php the_author(); ?></b></small>
							</footer>
						</article>
			<?php 
					endwhile;
				else :					
			?>
					<h4>No se encontraron entradas</h4>
			<?php 
				endif;
				wp_reset_postdata(); // Cada vez que termine un loop
				// Reinicia las variables el array, etc.
			?>
		</div>
	</div>
	<?php get_footer() ?>
</body>
</html>