<?php get_header(); ?>

<div class="content">

    <div class="container">

        <div class="row">

            <div class="col-lg-9">
         

                <h1><?php the_title(); ?></h1>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php the_content(); ?>

                <?php endwhile;
                else : endif; ?>

                <?php the_tags(); ?>


            </div>
        </div>
    </div>

    <?php get_footer(); ?>