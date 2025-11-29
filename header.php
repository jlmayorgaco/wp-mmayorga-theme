<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="icon"
          href="<?php echo esc_url( get_template_directory_uri() . '/img/cropped-map-icon-mm-32x32.png' ); ?>"
          sizes="32x32"
          type="image/png">
    <link rel="shortcut icon"
          href="<?php echo esc_url( get_template_directory_uri() . '/img/cropped-map-icon-mm-32x32.png' ); ?>"
          type="image/png">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="mm-site">

    <header class="mm-site-header">
        <div class="mm-header-inner">
            <a class="mm-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img
                    src="<?php echo esc_url( get_template_directory_uri() . '/img/MM_Logo-416x97.png' ); ?>"
                    alt="Mayorga Abogados"
                    width="200"
                    height="47"
                >
            </a>
        </div>
    </header>

    <main class="mm-site-main">

