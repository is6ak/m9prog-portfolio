<?php
/** Theme setup and portfolio project content type. */
if ( ! defined( 'ABSPATH' ) ) exit;

function dp_setup() {
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'html5', array( 'search-form', 'comment-form', 'gallery', 'caption', 'style', 'script' ) );
  add_theme_support( 'custom-logo' );
  register_nav_menus( array( 'primary' => __( 'Primary menu', 'developer-portfolio' ) ) );
}
add_action( 'after_setup_theme', 'dp_setup' );

function dp_assets() {
  wp_enqueue_style( 'dp-fonts', 'https://fonts.googleapis.com/css2?family=DM+Mono&family=Manrope:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;1,600;1,700&display=swap', array(), null );
  wp_enqueue_style( 'dp-main', get_template_directory_uri() . '/assets/css/main.css', array( 'dp-fonts' ), '1.0.0' );
  wp_enqueue_style( 'dp-accessibility', get_template_directory_uri() . '/assets/css/accessibility.css', array( 'dp-main' ), '1.0.0' );
  wp_enqueue_script( 'dp-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'dp_assets' );

function dp_projects_cpt() {
  register_post_type( 'project', array(
    'labels' => array( 'name' => 'Projecten', 'singular_name' => 'Project', 'add_new_item' => 'Nieuw project toevoegen', 'edit_item' => 'Project bewerken' ),
    'public' => true, 'has_archive' => true, 'rewrite' => array( 'slug' => 'projecten' ),
    'menu_icon' => 'dashicons-portfolio', 'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields' ),
    'show_in_rest' => true,
  ) );
}
add_action( 'init', 'dp_projects_cpt' );

function dp_customize( $customize ) {
  $customize->add_section( 'dp_identity', array( 'title' => 'Portfolio identiteit', 'priority' => 30 ) );
  $fields = array(
    'name' => array( 'Jouw naam', 'Jouw Naam' ),
    'role' => array( 'Functie', 'Full-stack software developer' ),
    'intro' => array( 'Korte introductie', 'Ik bouw heldere, menselijke digitale ervaringen en zoek een stageplek waar ik kan groeien.' ),
    'email' => array( 'Contact e-mail', 'jij@voorbeeld.nl' ),
  );
  foreach ( $fields as $id => $field ) {
    $customize->add_setting( "dp_$id", array( 'default' => $field[1], 'sanitize_callback' => 'sanitize_text_field' ) );
    $customize->add_control( "dp_$id", array( 'label' => $field[0], 'section' => 'dp_identity', 'type' => $id === 'intro' ? 'textarea' : 'text' ) );
  }
}
add_action( 'customize_register', 'dp_customize' );

function dp_option( $key, $fallback = '' ) { return get_theme_mod( "dp_$key", $fallback ); }
