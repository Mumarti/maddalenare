<?php get_header(); ?>
<main id="site-content" role="main">
   <div id="copertina"></div>
<section>
<div class="banner">
    <div class="content">
    <h2>Sono <span><?php echo get_theme_mod("id_setting_nome",'NOME E COGNOME'); ?></span></h2>
    <p><?php echo get_theme_mod("id_setting_descrizione"); ?></p>
    <!--a href="http://localhost/wordpress/chi-sono/"></a-->
    </div>
    
    <!--<ul class="social">
    <li><a href="<?php //echo get_theme_mod("id_setting_facebook"); ?>" id="facebook"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
    <li><a href="<?php //echo get_theme_mod("id_setting_instagram"); ?>" id="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
    <li><a href="<?php //echo get_theme_mod("id_setting_linkedin"); ?>" id="linkedin"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
    </ul>-->
</div> 
</section>
<h2 class="miei-lavori">I miei <span>lavori</span></h2>
<section class ="tipologie-lavori">
<div class="container-lavori">
<div class="card">
<div class="imgBx">
<img class="img-lavori" src="<?php echo get_theme_mod("id_setting_lavori_Personali"); ?>" alt="">
</div>
<div class="contentBx">
<div class="content-lavori">
<a href="http://localhost/wordpress/collage-personali/" style="text-decoration:none; color:#262626"><h3><?php echo get_theme_mod("id_setting_nome_lavori_Personali");?></h3>
<p><?php echo get_theme_mod("id_setting_descrizione_lavori_Personali");?></p></a>
</div>
</div>
</div>
<div class="card">
<div class="imgBx">
<img class="img-lavori" src="<?php echo get_theme_mod("id_setting_lavori_Epoca"); ?>" alt="">
</div>
<div class="contentBx">
<div class="content-lavori">
<a href="http://localhost/wordpress/collage-depoca/" style="text-decoration:none; color:#262626"><h3><?php echo get_theme_mod("id_setting_nome_lavori_Epoca");?></h3>
<p><?php echo get_theme_mod("id_setting_descrizione_lavori_Epoca");?></p></a>
</div>
</div>
</div>
<div class="card">
<div class="imgBx">
<img class="img-lavori" src="<?php echo get_theme_mod("id_setting_lavori_Commissioni"); ?>" alt="">
</div>
<div class="contentBx">
<div class="content-lavori">
<a href="http://localhost/wordpress/commissioni/" style="text-decoration:none; color:#262626"><h3><?php echo get_theme_mod("id_setting_nome_lavori_Commissioni");?></h3>
<p><?php echo get_theme_mod("id_setting_descrizione_lavori_Commissioni");?></p></a>
</div>
</div>
</div>
</div>
</section>
<section>
<div class="container-video">
<div class="box box1">
    <video src="wp-content/themes/madda/img/opere/video/4.mp4" autoplay loop muted></video>
<div class="content-video">
    <h2>Video 1</h2>
</div>
</div>
<div class="box box2">
<video src="wp-content/themes/madda/img/opere/video/2.mp4" autoplay loop muted></video>
<div class="content-video">
    <h2>Video 2</h2>
</div>
</div>
<div class="box box3">
<video src="wp-content/themes/madda/img/opere/video/3.mp4" autoplay loop muted></video>
<div class="content-video">
    <h2>Video 3</h2>
</div>
</div>
</div>
</section>
</main>
<?php get_footer(); ?>