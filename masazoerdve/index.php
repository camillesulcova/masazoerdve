<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>

<!-- 
test -->
<p>Marin</p>


        <?php endwhile ?>
    <?php endif ?>
<?php get_footer() ?>      