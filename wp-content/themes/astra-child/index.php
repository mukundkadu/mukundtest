<?php get_header();?>

 

<div class="post-wrapper">


<?php

 if(have_posts()):
    while(have_posts()):
    the_post(); ?>

    
      <div class="post-section">
      <div class="post-images">
        <?php the_post_thumbnail()?>
      </div>
  
    <div class="post-details">
        <div>
            <h2 id=" post -<?php the_ID();?>"><a href="<?php the_permalink (); ?>"><?php the_title(); ?></a> </h2>
        </div>
        <div class="date-single">
            Date: <p><?php the_date();?></p>
        </div>
        <div class="date-single">
            Author: <p><?php the_author();?></p>
        </div>
        <!-- <div>
            Categories: <p><?php the_category();?></p>
        </div>
        <div>
            Tags: <p><?php the_tags();?></p>
        </div> -->
        <div class="single-para">
           <p><?php  the_excerpt();?></p>
           <a href="<?php the_permalink();?>"></a>
      </div>
    </div>
    </div>

      
     

<?php endwhile;      

else:

endif;    

?>
</div>



<?php get_footer();?>