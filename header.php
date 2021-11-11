<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta charset="utf-8">
    <title><?php bloginfo( 'name' ); ?></title>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0" />
    <meta author="Alex B, Toby C" />
    <meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/assets/preview.png" />

    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/computer-3.png" type="image/png">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class( array('windows-scrollbar', 'bg-cloud') ); ?>>
<?php wp_body_open(); ?>



<!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-95 ">
        <a class="navbar-brand" href="/">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/computer-3.png"><?php bloginfo('name'); ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
	        
	        
	        <?php 
	        wp_nav_menu( 
				array( 
					'theme_location'	=>	'primary',
					'menu_class'		=>	'navbar-nav',
					'list_item_class'  => 'nav-item', //Added in functions.php
					'link_class'   => 'nav-link' //Added in functions.php
				) 
			);	
			?>
	        
	        
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown link
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    
<!-- /Navbar -->