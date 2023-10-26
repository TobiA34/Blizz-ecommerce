<?php get_header(); ?>

<div id="hero">
    <div class="container d-flex align-items-center justify-content-center h-100">
        <h1>Welcome To My Shop</h1>
    </div>

</div>


<div class="content mx-auto w-50">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <p><?php the_content(); ?></p>
    <?php endwhile;
    else : endif; ?>
</div>

<?php get_footer(); ?>