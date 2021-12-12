<?php get_header(); ?>		
<?php if(have_posts()){
		the_post();	?>
<div class="container">

    <div class="row">

      <div class="col-single-page">

        <!-- Post Content -->
        <p><?php the_content(); ?></p>    
</div>
</div>
</div>
<?php } ?>
<?php get_footer(); ?>