<?php if ( have_posts() ) :while( have_posts() ) : the_post(); ?>

    

    <?php the_content(); ?>

    <?php 
        $fname  = get_the_author_meta('first_name');
        $lname  = get_the_author_meta('last_name');
    ?>

    <p>Posted by <?php echo $fname .' '. $lname; ?></p>
    <p>On <?php echo get_the_date('l jS F, Y, h:i' )?></p>

    <?php 
        $tags = get_the_tags();
        if ($tags):
        foreach($tags as $tag):?>
    
            <a href="<?php echo get_tag_link($tag->term_id);?>" class="badge badge-info">
                <?php echo $tag->name;?>
            </a>

    <?php endforeach; endif; ?>

    <p> Category - 
    <?php 
    $terms = get_terms('categories');
    if ( !empty( $terms ) && !is_wp_error( $terms ) ):?>
        <?php foreach ( $terms as $term ):?>
            <a href="<?php echo get_category_link($term->term_id);?>">
                <?php echo $term->name;?>
            </a>
    <?php endforeach; endif;?>
    </p>
    

    <div class="ingredients">
        <h4>Ingredients</h4>
        <ul>
            <li><?php the_field('coffeeamount');?></li>
            
            <!-- check if the acf is empty, if not: create a li -->
            <?php if(!empty(get_field('cream'))):?>
            <li><?php the_field('cream');?></li>
            <?php endif; ?>
            
            <!-- check if the acf is empty, if not: create a li -->
            <?php if(!empty(get_field('toppings'))):?>
                <li><?php the_field('toppings');?></li>
            <?php endif; ?>
            
            
            
        </ul>
    </div>

    <!-- comments -->
    <?php comments_template(); ?>
    
<?php endwhile; else: endif; ?>