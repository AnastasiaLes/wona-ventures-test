<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package Classic Ecommerce
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header >
    <?php if( is_front_page() ) : ?>
    <div>
    <?php else : ?>
    <div class='wp-header'>
    <?php endif; ?>
    
        <button class="category-btn" id="menu_btn"><i class="fa fa-bars" aria-hidden="true"></i></button>
        <div class="category-dropdown">
            <?php wp_nav_menu(array(
                'theme_location' => 'header_menu',
                'container' => false,
            ));
            ?> 
        </div>
    </div>
</header>
