<?php if ( $paged < 2 ) { // Do stuff specific to first page?>
<?php if ( is_category() ) : ?>
<h2 id="category-name-header"><?php echo $cache_categories[$cat]->cat_name ?></h2>
<?php add_filter('category_description', 'wpautop'); ?>
<?php add_filter('category_description', 'wptexturize'); ?>
<div id="category-description">
<?php echo category_description(); ?>
</div>
<?php endif; ?>
<?php } else { // Do stuff specific to non-first page ?>
<?php } ?>