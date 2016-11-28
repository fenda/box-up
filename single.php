<?php get_header(); ?>
	<main role="main" class="clear">
		<h2 class="page__title">Blog</h1>
		<section class="content-padding">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if ( has_post_thumbnail()) : ?>
					<?php the_post_thumbnail(); ?>
				<?php endif; ?>
				<h1>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
				</h1>

				<?php the_content(); ?>

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