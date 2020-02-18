<?php if ( have_posts() ) :while( have_posts() ) : the_post(); ?>

<div class="card mb-3">
    <div class="card-body d-flex align-items-center p-0">
        <?php if(has_post_thumbnail()):?>
            <img src="<?php the_post_thumbnail_url('img-small'); ?>" alt="<?php the_title(); ?>" class="img-fluid img-thumbnail mr-4"> 
        <?php endif;?>
        
        <div class="article-content">
            <h3><?php the_title();?></h3>
            
            <!-- show a bried description of the description instead of the complete one -->
            <?php the_excerpt(  ); ?>
            
            <!-- link to its corresponding details page -->
            <a href="<?php the_permalink(); ?>" class="btn btn-success">Read more</a>
        </div>
    </div>
</div>
<?php endwhile; else: ?>

    <h5>The are no results for <?php echo get_search_query(  )?></h5>

<?php endif; ?>