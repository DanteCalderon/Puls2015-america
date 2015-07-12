<?php get_header() ?>
<body>
			<?php 
				if(have_posts()) :
					while(have_posts()) :
						the_post();
			?>
					<main>
						<h1 class="page-heading max-width"><?php the_title(); ?></h1>
						
						<article class="block_body">
							<small>by <b><?php the_author(); ?></b></small>
							<p><?php the_content(); ?></p>							
							<footer>
								<small><?php the_tags() ?></small>
							</footer>
						</article>
					</main>
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
	<?php get_footer() ?>
</body>
</html>