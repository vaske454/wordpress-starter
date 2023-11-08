<!DOCTYPE html>
<html <?php language_attributes(); ?> lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <?php echo 'There is the header!'; ?>
</header>
