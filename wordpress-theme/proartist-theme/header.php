<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
    <div class="container">
        <div class="site-branding">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo-link">
                <strong>Pro</strong>Artist
            </a>
        </div>
        <nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e('Primary Menu', 'proartist'); ?>">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class' => 'primary-menu',
                'container' => false,
            ));
            ?>
        </nav>
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>

