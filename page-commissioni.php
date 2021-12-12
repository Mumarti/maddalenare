<?php get_header(); ?>
<h3 id="titolo-collage"><?php echo get_theme_mod("id_setting_collage_commissione_titolo"); ?></h3>
<p id="paragrafo-collage"><?php echo get_theme_mod("id_setting_collage_commissione_paragrafo"); ?></p>
<?php $commissione = get_theme_mod("id_setting_show_collage_commissione_collage1");?>
<section class="collage">
<div class="container-collage">
<?php if ($commissione){ ?>
<div class="card-collage">
<div class="img-collage">
<img src="<?php echo get_theme_mod("id_setting_collage_commissione_collage1"); ?>" width="300px" height="auto" alt="">
</div>

<?php $disponibile = get_theme_mod("id_setting_disponibile_collage_commissione_collage1");?>
<?php if ($disponibile){ ?>
    <div class="badge-collage">
        <a href="#"><img src="http://localhost/wordpress/wp-content/themes/madda/img/negozio.png" ></a>
    </div>
               <?php } ?>

<div class="content-collage">
<div class="contentBx-collage">
<h3><?php echo get_theme_mod("id_setting_titolo_collage_commissione_collage1");?></h3>
<ul class="sci-collage">
<li style="--i:1;"><?php echo get_theme_mod("id_setting_tecnica_collage_commissione_collage1");?></li>
<li style="--i:2;"><?php echo get_theme_mod("id_setting_dimensioni_collage_commissione_collage1");?></li>
<a href=""><li style="--i:3;"><i class="fa fa-plus-circle" aria-hidden="true"></i></li></a>
</ul>
</div>
</div>
</div>
<?php } ?>
<?php $commissione = get_theme_mod("id_setting_show_collage_commissione_collage2");?>
<?php if ($commissione){ ?>
<div class="card-collage">
<div class="img-collage">
<img src="<?php echo get_theme_mod("id_setting_collage_commissione_collage2"); ?>" width="300px" height="auto" alt="">
</div>

<?php $disponibile2 = get_theme_mod("id_setting_disponibile_collage_commissione_collage2");?>
<?php if ($disponibile2){ ?>
    <div class="badge-collage">
               <a href="#"><img src="http://localhost/wordpress/wp-content/themes/madda/img/negozio.png"></a>
    </div>
               <?php } ?>

<div class="content-collage">
<div class="contentBx-collage">
<h3><?php echo get_theme_mod("id_setting_titolo_collage_commissione_collage2");?></h3>
<ul class="sci-collage">
<li style="--i:1;"><?php echo get_theme_mod("id_setting_tecnica_collage_commissione_collage2");?></li>
<li style="--i:2;"><?php echo get_theme_mod("id_setting_dimensioni_collage_commissione_collage2");?></li>
<a href=""><li style="--i:3;"><i class="fa fa-plus-circle" aria-hidden="true"></i></li></a>
</ul>
</div>
</div>
</div>
<?php } ?>
<?php $commissione = get_theme_mod("id_setting_show_collage_commissione_collage3");?>
<?php if ($commissione){ ?>
<div class="card-collage">
<div class="img-collage">
<img src="<?php echo get_theme_mod("id_setting_collage_commissione_collage3"); ?>" width="300px" height="auto" alt="">
</div>

<?php $disponibile3 = get_theme_mod("id_setting_disponibile_collage_commissione_collage3");?>
<?php if ($disponibile3){ ?>
    <div class="badge-collage">
               <a href="#"><img src="http://localhost/wordpress/wp-content/themes/madda/img/negozio.png"></a>
    </div>
               <?php } ?>


<div class="content-collage">
<div class="contentBx-collage">
<h3><?php echo get_theme_mod("id_setting_titolo_collage_commissione_collage3");?></h3>
<ul class="sci-collage">
<li style="--i:1;"><?php echo get_theme_mod("id_setting_tecnica_collage_commissione_collage3");?></li>
<li style="--i:2;"><?php echo get_theme_mod("id_setting_dimensioni_collage_commissione_collage3");?></li>
<a href=""><li style="--i:3;"><i class="fa fa-plus-circle" aria-hidden="true"></i></li></a>
</ul>
</div>
</div>
</div>
<?php } ?>
</div>
</section>

<?php $commissione = get_theme_mod("id_setting_show_collage_commissione_collage4");?>
<section class="collage">
<div class="container-collage">
<?php if ($commissione){ ?>
<div class="card-collage">
<div class="img-collage">
<img src="<?php echo get_theme_mod("id_setting_collage_commissione_collage4"); ?>" width="300px" height="auto" alt="">
</div>

<?php $disponibile4 = get_theme_mod("id_setting_disponibile_collage_commissione_collage4");?>
<?php if ($disponibile4){ ?>
    <div class="badge-collage">
        <a href="#"><img src="http://localhost/wordpress/wp-content/themes/madda/img/negozio.png" ></a>
    </div>
               <?php } ?>

<div class="content-collage">
<div class="contentBx-collage">
<h3><?php echo get_theme_mod("id_setting_titolo_collage_commissione_collage4");?></h3>
<ul class="sci-collage">
<li style="--i:1;"><?php echo get_theme_mod("id_setting_tecnica_collage_commissione_collage4");?></li>
<li style="--i:2;"><?php echo get_theme_mod("id_setting_dimensioni_collage_commissione_collage4");?></li>
<a href=""><li style="--i:3;"><i class="fa fa-plus-circle" aria-hidden="true"></i></li></a>
</ul>
</div>
</div>
</div>
<?php } ?>
<?php $commissione = get_theme_mod("id_setting_show_collage_commissione_collage5");?>
<?php if ($commissione){ ?>
<div class="card-collage">
<div class="img-collage">
<img src="<?php echo get_theme_mod("id_setting_collage_commissione_collage5"); ?>" width="300px" height="auto" alt="">
</div>

<?php $disponibile5 = get_theme_mod("id_setting_disponibile_collage_commissione_collage5");?>
<?php if ($disponibile5){ ?>
    <div class="badge-collage">
               <a href="#"><img src="http://localhost/wordpress/wp-content/themes/madda/img/negozio.png"></a>
    </div>
               <?php } ?>

<div class="content-collage">
<div class="contentBx-collage">
<h3><?php echo get_theme_mod("id_setting_titolo_collage_commissione_collage5");?></h3>
<ul class="sci-collage">
<li style="--i:1;"><?php echo get_theme_mod("id_setting_tecnica_collage_commissione_collage5");?></li>
<li style="--i:2;"><?php echo get_theme_mod("id_setting_dimensioni_collage_commissione_collage5");?></li>
<a href=""><li style="--i:3;"><i class="fa fa-plus-circle" aria-hidden="true"></i></li></a>
</ul>
</div>
</div>
</div>
<?php } ?>
<?php $commissione = get_theme_mod("id_setting_show_collage_commissione_collage6");?>
<?php if ($commissione){ ?>
<div class="card-collage">
<div class="img-collage">
<img src="<?php echo get_theme_mod("id_setting_collage_commissione_collage6"); ?>" width="300px" height="auto" alt="">
</div>

<?php $disponibile6 = get_theme_mod("id_setting_disponibile_collage_commissione_collage6");?>
<?php if ($disponibile6){ ?>
    <div class="badge-collage">
               <a href="#"><img src="http://localhost/wordpress/wp-content/themes/madda/img/negozio.png"></a>
    </div>
               <?php } ?>


<div class="content-collage">
<div class="contentBx-collage">
<h3><?php echo get_theme_mod("id_setting_titolo_collage_commissione_collage6");?></h3>
<ul class="sci-collage">
<li style="--i:1;"><?php echo get_theme_mod("id_setting_tecnica_collage_commissione_collage6");?></li>
<li style="--i:2;"><?php echo get_theme_mod("id_setting_dimensioni_collage_commissione_collage6");?></li>
<a href=""><li style="--i:3;"><i class="fa fa-plus-circle" aria-hidden="true"></i></li></a>
</ul>
</div>
</div>
</div>
<?php } ?>
</div>
</section>

<section>
<div class="informazioni">
<h2><?php echo get_theme_mod("id_setting_titolo_collage_commissione_informazioni");?></h2>
<p><?php echo get_theme_mod("id_setting_descrizione_collage_commissione_informazioni");?></p>
</div>
</section>
<?php get_footer(); ?>