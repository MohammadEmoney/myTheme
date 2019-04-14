<article <?php post_class('card my-3 p-3') ?>>
    <h2>
        <a href="<?php the_permalink('') ?>" title="<?php the_title_attribute() ?>"><?php the_title() ?></a>
    </h2>
    <div>
        <?php _themename_post_meta(); ?>
        
        <div>
            <?php the_excerpt(); ?>
        </div>
    </div>
    <?php _themename_readMore_link(); ?>
</article>