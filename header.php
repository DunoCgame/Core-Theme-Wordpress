<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
	<title><?php bloginfo( 'name' ); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!--llamada del icon-->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/logo.png">
	<!--llamada de Stylos-->
	
 <?php wp_head();?>
</head>

<body class="body <?php body_class(); ?> ">
	
	<header class="Header" id="HeaderScroll">
		
		<div class="custom-header-media">
			<?php the_custom_header_markup(); ?>
		<?php 	
			// function the_custom_header_markup() {
    // $custom_header = get_custom_header_markup();
    // if ( empty( $custom_header ) ) {
        // return;
    // }
	?>
		</div>
		
		<nav class="nav-item">
			<?php
				CoreWeb_the_custom_logo();
			?>
			<div class="titulo-web">
			<H1 class="titulo"><?php bloginfo( 'name' );   bloginfo( 'version' );  ?> </H2>
				<p class="site-description" style="color:white;"><?php echo bloginfo( 'description' ); ?></p>
			</div>
			
			<?php 
			 // wp_nav_menu(
                // array(
                // 'container'=>false,
                // 'items_wrap'=>'<ul>%3$s</ul>',
                // 'theme_locaton'=>'menu'

                // ));

				// wp_nav_menu(
								// array(
							  // 'menu'            => 'menu',
						// 'container'       => 'div',
						// 'container_class' => '',
						// 'container_id'    => '',
						// 'menu_class'      => 'menu',
						// 'menu_id'         => 'menus',
						// 'echo'            => true,
						// 'fallback_cb'     => 'wp_page_menu',
						// 'before'          => '',
						// 'after'           => '',
						// 'link_before'     => '',
						// 'link_after'      => '',
						// 'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						// 'item_spacing'    => 'preserve',
						// 'depth'           => 0,
						// 'walker'          => '',
						// 'theme_location'  => 'menu',
                // )
				// );

include('nav_menu.php');				
				?>
		</nav>
		

	</header>