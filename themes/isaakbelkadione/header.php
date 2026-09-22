<?php if ( ! defined( 'ABSPATH' ) ) exit; ?><!doctype html>
<html <?php language_attributes(); ?>><head>
<meta charset="<?php bloginfo( 'charset' ); ?>"><meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?></head>
<body <?php body_class(); ?>><?php wp_body_open(); ?>
<a class="skip-link" href="#main">Ga naar inhoud</a>
<header class="site-header"><a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Naar homepage"><?php echo esc_html( dp_option( 'name', 'Isaak Belkadi' ) ); ?><span>®</span></a>
<button class="menu-toggle" aria-expanded="false" aria-controls="primary-menu">Menu <i></i></button>
<nav class="primary-nav" aria-label="Hoofdnavigatie" id="primary-menu"><?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'fallback_cb' => 'dp_default_menu' ) ); ?></nav></header>
<?php function dp_default_menu() { ?><ul><li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li><li><a href="<?php echo esc_url( home_url( '/over-mij/' ) ); ?>">Over mij</a></li><li><a href="<?php echo esc_url( home_url( '/projecten/' ) ); ?>">Projecten</a></li><li><a href="#contact">Contact</a></li></ul><?php } ?>
