<?php get_header(); ?>
	<main role="main" class="clear">
		<h1 class="page__title"><?php single_cat_title(); ?></h1>
		<section class="content-padding product-list">
			<?php get_template_part('loop'); ?>
			<?php get_template_part('pagination'); ?>
		</section>
		<?php get_sidebar(); ?>
	</main>
<?php get_footer(); ?>