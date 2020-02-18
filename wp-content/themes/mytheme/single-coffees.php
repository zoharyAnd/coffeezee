<?php get_header();?>

<div class="container">

    <?php if(has_post_thumbnail()):?>
        <img src="<?php the_post_thumbnail_url('img-large'); ?>" alt="<?php the_title(); ?>" class="img-fluid img-thumbnail"> 
    <?php endif;?>
    
    <h1><?php the_title();?></h1>

    <!-- include the include/section-articlecontent.php partial view -->
    <?php get_template_part( 'includes/section', 'coffees' );?>

</div>

    


<?php get_footer();?>
 