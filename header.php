<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head() ?>

</head>
<body <?php body_class() ?>>

<header role="banner" class="mb-3">
    <div class="header">
        <div class="container d-flex bg-dark">
            <div class="navbar navbar-dark bg-dark">
                <a href="<?php echo esc_url(home_url('/')) ?>" class="navbar-brand"><?php esc_html(bloginfo('name')) ?></a>
            </div>
            <div class="float-right">
                <?php get_search_form(true) ?>
            </div>
            
        </div>
    </div>
</header>

<div id="content">
