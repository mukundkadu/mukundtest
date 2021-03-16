<?php get_header(); ?>
<br>
<h1><?php bloginfo ('name');?></h1>
<br>
<h1><?php bloginfo ('description');?></h1>
<br>
<h1><?php the_title();?></h1>

<h1><?php the_content();?></h1>


<!-- loop close not understanding what is while loop -->
<?php
   while (have_posts()){
       the_post();?>
       <h1><?php the_title();?></h1>
       <?php the_content();?>
       <?php }
?>
<!-- loop close not understanding what is while loop -->

<!-- loop close not understanding what is while loop -->
<?php
   while (have_posts()){
       the_post();?>
       <h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
       <?php the_content();?>
       <?php }
?>



<?php get_footer(); ?>