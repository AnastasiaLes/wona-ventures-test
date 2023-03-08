<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Classic Ecommerce
 */

get_header(); ?>


<?php
echo do_shortcode('[smartslider3 slider="2"]');
?>
<div class='wp_container'>

    <div class='wp_text_block'>
            <?php the_content('Read on...', TRUE); 
            
            ?>
            <!-- <button class='wp_read_more_btn'>Read more </button> -->
    </div>
    
    <div class='wp_cards_block'>

        <?php
         $args = array(
        'post_type' => 'product',
        'post_status' => 'publish',
        'posts_per_page' => 10,
    );
    $loop = new WP_Query( $args );
        if ($loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <?php get_template_part('template-parts/product-card') ?>
        <?php endwhile; else: ?>
            There are no available products
            <?php endif; ?>
        </div>
</div>
<?php get_footer(); ?>