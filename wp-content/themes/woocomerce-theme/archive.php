<?php get_header(); ?>





<div class="content mx-auto w-50">

    <div class="container d-flex align-items-center justify-content-center h-100">

        <div class="row">

            <div class="col-lg-9">


                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="blog-post">
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php the_post_thumbnail_url('post_image'); ?>" class="img-fluid mb-5 mx-auto">
                                </a>
                            <?php endif; ?>


                            <a href="<?php the_permalink(); ?>">
                                <h1 class="text-center"><?php the_title(); ?></h1>
                            </a>


                            <?php the_excerpt(); ?>
                        </div>
                <?php endwhile;
                else : endif; ?>
                     <div class="pagination">
                        <?php
                        global $wp_query;

                        $big = 999999999; // need an unlikely integer
                        $translated = __('Page', 'mytextdomain'); // Supply translatable string

                        echo paginate_links(array(
                            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                            'format' => '?paged=%#%',
                            'current' => max(1, get_query_var('paged')),
                            'total' => $wp_query->max_num_pages,
                            'before_page_number' => '<span class="screen-reader-text">' . $translated . ' </span>'
                        ));
                        ?>
                    </div>



                </div>

 

        </div>
    </div>

    <?php get_footer(); ?>