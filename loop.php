<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" class="item">
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="item__thumbnail">
				<div class="item__hover"><i class="fa fa-search" aria-hidden="true"></i></div>
				<?php the_post_thumbnail('product_thumb'); ?>
			</a>
		<?php endif; ?>
		<h2 class="category__title">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		</h2>
	</article>

<?php endwhile; ?>
<?php else: ?>
	<article>
		<h2>Nenhum produto encontrado.</h2>
	</article>
<?php endif; ?>
