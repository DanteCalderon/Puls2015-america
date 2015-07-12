<?php get_header() ?>
<body>
	<h1 class="page-heading max-width"><span>Infomación: </span><?php bloginfo(name); ?></h1>
	<div class="grid">	
		<div class="block__body grid">
			<?php 				
				if(have_posts()) :
					while(have_posts()) :
						the_post();
			?>
						<article class="block_body">
							<h2 class="block_title"><?php the_title(); ?></h2>
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