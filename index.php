
<?php wp_head();?>


<?php

if ( is_home() ) :

	get_header();
	
elseif ( is_404() ) :

 get_header( '404' );
 
endif;

?>
	<div class="Container">

		
	<main class="Main"  id="Aticulos">
		<!--section-->
		<?php include('posts.php'); ?>
		<!--section-->	
	</main>
	
<!--aside-->
	<?php get_sidebar(); ?>
<!--aside-->

<!--Footer-->
		<?php get_footer(); ?>
<!--Footer-->
	


	</div>


