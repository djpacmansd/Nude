<?php
/*
 * This file displays the main content of the standard post type.
 */
 ?>
<div class="main-content">
	<article <?php post_class('main-article'); ?> id="post-<?php the_ID(); ?>">
		<h1 id="<?php echo the_slug(); ?>"><?php the_title(); ?></h1>
		
		<?php if (has_post_thumbnail()) : ?>
					
		<figure class="article-preview-image">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
		</figure>
						
		<?php endif; ?>
		
		<?php the_content(); ?>
	</article>
</div>