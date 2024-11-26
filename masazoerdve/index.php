<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>
<!--hero-->
<?php get_template_part("template-parts/hero"); ?>
<!--hero-->


    <!--types of massages-->
   <?php get_template_part ("template-parts/massages");?>
  
    <!--types of massages-->
 <!--about me-->
 <?php get_template_part("template-parts/about"); ?>

    <!--about me-->

    <!--benefits-->
<?php get_template_part("template-parts/benefits"); ?>
    <!--benefits-->
    <?php echo do_shortcode('[wp-testimonials widget-id=1]'); ?>


        <?php endwhile ?>
    <?php endif ?>
<?php get_footer() ?>      