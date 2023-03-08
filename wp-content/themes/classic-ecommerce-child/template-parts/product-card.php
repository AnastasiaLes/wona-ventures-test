<div class='wp_one_card'>
    <a href='<?php the_permalink(); ?>'>
        <div class="img">
            <?php the_post_thumbnail( 'thumbnail' ); ?>
        </div>
    </a>
    <p><?php the_title() ?></p>
    <div class="meta_block">
        <p class="meta_data"><?php echo get_post_meta(get_the_ID(), 'Quantity', true); ?></p>
        <?php $price = get_post_meta( get_the_ID(), '_price', true ); ?>
        <p class='wp_price'><?php echo wc_price( $price ); ?> </p>
    </div>
    
    <a href='<?php the_permalink(); ?>'><button class='wp_buy_btn'  >סקירה מהירה</button></a>
</div>