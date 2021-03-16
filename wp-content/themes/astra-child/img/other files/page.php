<?php
   while (have_posts()){
       the_post();?>
       <h1><?php the_title();?></h1>
       <h2>this is comming from page .php </h2>
       <?php }
?>