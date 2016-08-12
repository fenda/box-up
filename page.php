<?php get_header(); ?>

	<main role="main" class="clear">
			<h1><?php the_title(); ?></h1>
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_content(); ?>
			</article>

		<?php endwhile; ?>
		<?php else: ?>

			<article>
				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
			</article>

		<?php endif; ?>

		</section>
		<?php get_sidebar(); ?>
	</main>

	<div id="base-promo" class="footer-promo-arrow">
		<a href="<?php echo site_url(); ?>/contato" target="_self">Entre em contato! <i class="fa fa-angle-right" aria-hidden="true"></i></a>
	</div>
<?php get_footer(); ?>