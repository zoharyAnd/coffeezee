<?php get_header();?>

<div class="container">
    
    <h2>Search Results for - '<?php echo get_search_query(  )?>'</h2>
    
    <!-- include the include/section-content.php partial view -->
    <!-- here section containing all articles -->
    <?php get_template_part( 'includes/section', 'searchresults' );?>


    <!-- pagination -->
    <!-- 1st method: pagination next and previous only -->
    <!-- <?php previous_posts_link(); ?>
    <?php next_posts_link(); ?> -->


    <!-- second method with number of pages -->
    <?php
        global $wp_query;

        $big = 999999999; //need an unlikely integer

        echo paginate_links( array(
            'base' => str_replace($big, '%#%', esc_url( get_pagenum_link($big) ) ),
            'format' => '?paged=%#%', 
            'current' => max(1, get_query_var('paged')),
            'total' => $wp_query -> max_num_pages
        ) );
    ?>
     
</div>

    


<?php get_footer();?>
 