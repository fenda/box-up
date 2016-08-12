<?php get_header(); ?>

<div id="home_slider">
	<?php putRevSlider("homeslider") ?>
</div>
<div id="products">
	<h1><span>Nossos</span> Destaques</h1>
	<ul class="product_list">
			<?php 
				$args = array(
					'post_type' => 'produtos',
					//'cat__in'=>array('4'),      //
					'showposts'=>4
				); 
				$loop = new WP_Query( $args );

				while ( $loop->have_posts() ) : $loop->the_post();
			?>
			<li>
				<div class="img_container"><?php if ( has_post_thumbnail() ) { the_post_thumbnail();} ?></div>
				<p class="product_name"><?php the_title(); ?></p>
				<p class="product_id"><?php the_field('id'); ?></p>
				<hr>
				<p class="post_category"><?php the_category(', '); ?></p>
			</li>
			<?php endwhile;?>
		</ul>

		<?php
			$args = array(
					'type'                     => 'post',
					'post_type' => 'produtos',
					'child_of'                 => 0,
					'parent'                   => '',
					'orderby'                  => 'name',
					'order'                    => 'ASC',
					'hide_empty'               => 1,
					'hierarchical'             => 1,
					'exclude'                  => '',
					'include'                  => '',
					'number'                   => '',
					//'taxonomy'                 => 'portfolio_category',
					'pad_counts'               => false );
			$categories = get_categories($args);

					echo '<ul>';

							foreach ($categories as $category) {
									$url = get_term_link($category);?>
									<div class="img_container"><?php if ( has_post_thumbnail() ) { the_post_thumbnail();} ?></div>
									<li><a href="<?php echo $url;?>"><?php echo $category->name; ?></a></li>
							<?php
							}

					echo '</ul>';
		?>
		<a href="<?php echo site_url(); ?>/produtos" class="button">Ver Todos</a>
</div>

<div id="home_widgets">
	<h1>Porque trabalhar conosco</h1>
	<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('home-widgets')) ?>
</div>
<?php get_footer(); ?>