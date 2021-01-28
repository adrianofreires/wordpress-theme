<?php get_header(); ?>
    <div id="primary">
        <div id="main">
            <div class="container">
                <?php 
                    while(have_posts()): the_post();
                        get_template_part('templates-parts/content', 'single');
                        ?>
                        <div class="row">
                        <?php wp_link_pages(); ?>
                            <div class="pages text-start col-6"><?php next_post_link('&laquo; %link'); ?></div>
                            <div class="pages text-end col-6"><?php previous_post_link('%link &raquo;'); ?></div>
                        </div>
                        <?php
                        if(comments_open() || get_comments_number()):
                            comments_template();
                        endif;
                    endwhile;
                ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>