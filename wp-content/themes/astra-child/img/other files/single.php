<?php get_header(); ?>

<h1> hi this is single page</h1>

<br>
<br>

<?php
   while (have_posts()){
       the_post();?>
       <h1><?php the_title();?></h1>
       <br>
       <?php the_content();?>
       <?php }
?>


<?php get_footer(); ?>