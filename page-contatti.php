<?php get_header(); ?>
<div class="pagina-contatti">
  <div class="container-contatti">
    <div class="contactInfo-contatti">
      <div>
        <h2>Contatti</h2>
        <ul class="info-pagina-contatti">
        <li>
          <span>
          <i class="fa fa-envelope-o" aria-hidden="true"></i>
          </span>
          <span>
          maddirex28@gmail.com 
          </span>
        </li>
        <li>
          <span>  
          <i class="fa fa-phone" aria-hidden="true"></i>
          </span>
          <span>
            347 148 2806
          </span>
        </li>
        <li>
</div>
<div>
<ul class="info-pagina-contatti">
  <li>
          <span>
            <a href="<?php echo get_theme_mod("id_setting_facebook"); ?>">
            <i class="fa fa-facebook-square" aria-hidden="true"></i>
            </a>
          </span>
          <span>
            Maddalena Re
          </span>
        </li>
        <li>
          <span>
          <a href="<?php echo get_theme_mod("id_setting_instagram"); ?>" >
          <i class="fa fa-instagram" aria-hidden="true"></i>
          </a>
          </span>
          <span>
            maddare28
          </span>
        </li>
        
        </ul>
      </div>
    </div>
    <div class="contactForm-contatti">
      <h2>Invia un messaggio</h2>
      <?php if(have_posts()){
      the_post();	?>
      <?php the_content(); ?>
      <?php } ?>
    </div>
  </div>
</div>


<?php get_footer(); ?>