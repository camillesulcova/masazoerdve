<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>

 <!--about me-->
 <?php get_template_part("template-parts/about.php"); ?>

    <!--about me-->

    <!--types of massages-->
   <?php get_template_part ("template-parts/massages.php");?>
  
    <!--types of massages-->

        <?php endwhile ?>
    <?php endif ?>
<?php get_footer() ?>      