<?php
/*
Template name: Page - Home
*/
get_header();
?>



<?php do_action('flatsome_before_page'); ?>

<div id="content" role="main" class="content-area">

    <?php while (have_posts()) :
        the_post(); ?>
    <?php the_content(); ?>

    <?php endwhile; // end of the loop. 
    ?>

    <div class="container bg-white pt-4 ">
        <div class="row">
            <div class="col-md-3 siderbar-left">
                <?php include('pages/siderbar-left.php') ?>
            </div>
            <?php include('pages/main.php') ?>
            <div class="col-md-3 siderbar-right">
                <?php include('pages/siderbar-right.php') ?>
            </div>
            <?php do_action('flatsome_after_page'); ?>

            <?php get_footer(); ?>