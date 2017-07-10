<!DOCTYPE HTML>
<html>
	<head>
		
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		
<?php wp_head();?>
	</head>
	<body>

		
			<header id="header">
				<?php get_template_part( 'template-parts/header/header', 'image' ); ?>
				<?php
						wp_nav_menu(array(
									'theme_location' => 'home_page',
									'items_wrap' => '<div id="%1$s" class="%2$s"><span>%3$s</span></div>',
									'menu_class' => 'logo',
									'menu_id' => '',
									'depth' => 3
								));
								?>
					
					
				
				<a href="#"><?php the_custom_logo();?></a>
				<a href="#menu"><span>Меню</span></a>
			</header>

		
				<?php
				wp_nav_menu(array(
									'theme_location' => 'primary',
									'items_wrap' => '<nav id="%1$s"><ul  class="%2$s">%3$s</ul></nav>',
									'menu_class' => 'links',
									'menu_id' => 'menu',
									'depth' => 3
								));
				?>
 