<?php get_header(); ?>
    <div id="primary">
        <div id="main">
            <div class="container">
                <h2>Search results for: </h2><?php echo get_search_query(); ?>
                <?php 
                get_search_form();
                    while(have_posts()): the_post();
                        get_template_part('templates-parts/content', 'search');
                        if(comments_open() || get_comments_number()):
                            comments_template();
                        endif;
                    endwhile;
                    the_posts_pagination(
                        array(
                            'mid_size' => 1,
                            'prev_text' => _x( 'Previous', 'previous set of posts' ),
                            'next_text' => _x( 'Next', 'next set of posts' ),
                            'screen_reader_text' => __( 'Posts navigation' ),
                            'aria_label'  => __( 'Posts' ),
                            'class'  => 'pagination',
                        )
                    );
                ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>