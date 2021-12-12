<?php get_header(); ?>
<div class="section-about-me">
  <img src="<?php echo get_theme_mod("id_setting_foto_personale"); ?>" class="immagine-about-me" alt="">
<div class="content-about-me">
<div class="textBox-about-me">
<h2>MADDALENA RE</h2>
<h3>Collage Artist</h3>
<p><em><?php echo get_theme_mod("id_setting_citazione"); ?></em>
<br><br>
<?php echo get_theme_mod("id_setting_descr_approf"); ?></p>
</div>
</div>
          <ul class = "social-about-me">
          <li><a href="<?php echo get_theme_mod("id_setting_facebook"); ?>" style="--i:12;"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
          <li><a href="<?php echo get_theme_mod("id_setting_instagram"); ?>" style="--i:13;"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          </ul>
</div>


<!-- ABOUT ME OLD -->
<!--
<div class = "about-me">
      <div class = "about-left">
        <div class = "about-left-content">
          <div>
            <div class = "shadow">
              <div class = "about-img">
                <img src = "<?php //echo get_theme_mod("id_setting_foto_personale"); ?>" width="300" height="auto" alt="">" alt = "about image">
              </div>
            </div>

            <h2>Maddalena<br>Re</h2>
            <h3>collage artist</h3>
          </div>

          <ul class = "icons-about-me">
          <li><a href="<?php //echo get_theme_mod("id_setting_facebook"); ?>"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
          <li><a href="<?php //echo get_theme_mod("id_setting_instagram"); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          </ul>
        </div>
      </div>

      <div class = "about-right">
        
        <div class = "about-para">
          <i><?php //echo get_theme_mod("id_setting_citazione"); ?></i>
          <p><?php //echo get_theme_mod("id_setting_descr_approf"); ?></p>
        </div>

        <div class = "about-btns">
          <a href="#">Curriculum</a>
        </div>
      </div>
    </div>
-->

<?php get_footer(); ?>