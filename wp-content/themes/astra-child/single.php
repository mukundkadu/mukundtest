
<?php get_header();?>
<?php

 if(have_posts()):
    while(have_posts()):
    the_post(); ?>

    <div class="head">
      <h2 id="post-<?php the_ID(); ?> "> <?php the_title(); ?> </h2>
    </div>

   

      

      
  
<div class="post-section">

   <div class="left-side">
      <div class="post-img">
           <?php the_post_thumbnail() ?>
      </div>   
   </div>  
   <div class="right-side">  
      
      <div class="post-detail"></div>
      <div class="block-item1">
          Date: <p class="date"><?php the_date();?></p>
      </div>
      <div class="block-item">
          Author: <p class="admin"><?php the_author();?></p>
      </div>
       <!-- <div>
          Categories: <p><?php the_category();?></p>
      </div>  -->
      <div class="block-item">
          Tags: <p><?php the_tags();?></p>
      </div>
      
   </div>

    
      <div>
           <p><?php the_content();?></p>
      </div>
    


     

<?php endwhile;      

else:

endif;    

?>




<?php get_footer();?>