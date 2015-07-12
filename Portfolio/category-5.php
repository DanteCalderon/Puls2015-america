<?php get_header() ?>
<body>
	<h1 class="page-heading max-width">Categoria: <b><?php single_cat_title(); ?>  - Personazliada</b></h1>
	<div class="grid">	
		<div class="block__body grid">
			<?php 				
				if(have_posts()) :
					while(have_posts()) :
						the_post();
			?>
						<article class="block_body">
							<h2 class="block_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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