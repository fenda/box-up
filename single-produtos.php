<?php get_header(); ?>
	<main role="main" class="clear">
		<h1 class="page__title">
			<?php 
				$terms = get_the_terms( $post->ID , 'categorias' ); 
				foreach ( $terms as $term ) {
					$term_link = get_term_link( $term, 'categorias' );
					if( is_wp_error( $term_link ) )
						continue;
						echo '<a href="' . $term_link . '">' . $term->name . '</a>';
				} 
			?>
		</h1>
		<section class="content-padding">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if ( has_post_thumbnail()) : ?>
					<div class="article__ft-image">
						<?php the_post_thumbnail(); ?>
					</div>
				<?php endif; ?>
				<h2><?php the_title(); ?></h2>

				<?php the_content(); ?>
				<?php if( get_field('manual') ): ?>
					<div class="product-manual">
						<h3 class="product-manual__title">Manual do produto</h3>
						<p><a href="<?php the_field('manual'); ?>" target="_blank" class="product-manual__link"><i class="fa fa-file-text-o" aria-hidden="true"></i></a></p>
					</div>
				<?php endif; ?>
			</article>
		<?php endwhile; ?>
		<?php else: ?>
			<article>
				<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
			</article>
		<?php endif; ?>
	</section>
	<?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>