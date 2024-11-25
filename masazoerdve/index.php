<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>
<!--hero-->
<?php get_template_part("template-parts/hero.php"); ?>
<!--hero-->


    <!--types of massages-->
   <?php get_template_part ("template-parts/massages.php");?>
  
    <!--types of massages-->
 <!--about me-->
 <?php get_template_part("template-parts/about.php"); ?>

    <!--about me-->

    <!--benefits-->
<?php get_template_part("template-parts/benefits.php"); ?>
    <!--benefits-->


        <?php endwhile ?>
    <?php endif ?>
<?php get_footer() ?>      