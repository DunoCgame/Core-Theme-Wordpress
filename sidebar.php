<?php if ( is_active_sidebar( 'sidebar-1' ) ): ?>
	<aside class="Aside">
		<h3 class="Aside-title">Aside</h3>
		<p class="Aside-text">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
		</p>
		<br>
	<!--Aside php-->
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
	<!--Aside php	-->
	
	</aside>

<?php endif; ?>
	<?php get_sidebar(); ?>