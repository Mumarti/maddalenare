<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head> 
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Maddalena Re</title>
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header id="site-header" class="l-header">
    <div class="logo"><?php the_custom_logo('custom-logo',['width'=>'60'],['height'=>'60']);?></div>
<div class="menu-toggle"></div>
<nav>
    <ul>
            <li><a href="http://localhost/wordpress" class="active">Home</a></li>
            <li><a href="collage-personali">Collage Personali</a></li>
            <li><a href="collage-depoca">Collage d'Epoca</a></li>
            <li><a href="commissioni">Commissioni</a></li>
            <li><a href="shop">Shop</a></li>
            <li><a href="chi-sono">Chi sono</a></li>
            <li><a href="contatti">Contatti</a></li>
    </ul>
</nav>
<div class="clearfix"></div>
</header>

