<aside class="sidebar" role="complementary">
	<?php $categories = get_categories('taxonomy=surgical_cat&post_type=surgical'); ?>
        <?php foreach ($categories as $category) : ?>
            <li><a href="<?php echo get_category_link($category->cat_ID); ?>"><?php echo $category->name; ?></a></li>
    <?php endforeach; ?>
	<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-widgets')) ?>
</aside>
