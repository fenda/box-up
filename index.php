<?php get_header(); ?>

<div id="home_slider">
	<?php putRevSlider("homeslider") ?>
</div>

<?php if ( is_active_sidebar( 'produtos' ) ) { ?>
<div id="products" class="clear">
	<h1><span>Nossos</span> Destaques</h1>
	<div class="product_list">
		<?php dynamic_sidebar( 'produtos' ); ?>
	</div>
</div>
<?php } ?>

<?php if ( is_active_sidebar( 'promowidgets' ) ) { ?>
<div class="home_widgets home_widgets--news">
	<h1>Novidades &amp; Promoções</h1>
	<?php dynamic_sidebar( 'promowidgets' ); ?>
</div>
<?php } ?>

<?php if ( is_active_sidebar( 'home-widgets' ) ) { ?>
<div class="home_widgets">
	<h1>Porque trabalhar conosco</h1>
	<?php dynamic_sidebar( 'home-widgets' ); ?>
</div>
<?php } ?>

<?php get_footer(); ?>