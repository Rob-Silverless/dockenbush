<?php
/**
 * The header for our theme
 *
 * @package Dockenbush
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
 	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">   
    <meta name="description" content="Luxury Lodge, South Central Rift, Kenya">
    <meta name="keywords" content=" ">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Muli:300,400,700&display=swap" rel="stylesheet">
	
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="page" class="site-wrapper">

		<nav>

			<div class="container-fluid">

				<div class="row align-items-center">

					<div class="col-lg-9 col-sm-5 col-6 row align-items-center">

						<div class="nav-wrapper">

							<!--<div class="nav-wrapper__trigger hamburger hamburger--collapse">
								<div class="hamburger-box">
									<div class="hamburger-inner">
    									<span>Menu</span>
    									</div>
								</div>
							</div>-->

							<div class="nav-wrapper__menu">

							    <?php
							    wp_nav_menu( array(
							    'theme_location' => 'main-menu',
							    'container_class' => 'mainMenu' ) );
							    ?>

							</div>

						</div>

					</div>

					<div class="col-lg-2 col-sm-5 col-6 text-right nav-logo">
						<?php get_template_part("inc/img/logo"); ?>
					</div>


				</div>

			</div>

		</nav>

	<main>
