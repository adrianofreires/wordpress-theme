<?php get_header(); ?>

<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

    <div class="content-area">
        <main>
            <section class="middle-area">
                <div class="container">
                    <div class="row">
                    <div class="archive col-md-8">
                        <?php 
                        the_archive_title('<h1 class="archive-title">','</h1>');
                        the_archive_description();
                            if(have_posts()):
                                while(have_posts()): the_post();
                        ?>
                        <?php get_template_part('templates-parts/content', 'archive'); ?>
                        <?php
                            endwhile;
                            ?>
                            <div class="row">
                                <div class="pages text-star col-6"><?php previous_posts_link("<< Newer Posts"); ?></div>
                                <div class="pages text-end col-6"><?php next_posts_link("Older Posts >>"); ?></div>
                            </div>
                            <?php
                        else: 
                        ?>
                        <p>There's nothing yet to be displayed</p>
                        <?php endif; ?>
                    </div>
                    <?php get_sidebar('blog'); ?>
                    </div>
                </div>
            </section>
            <section class="contact">
                <div class="container">
                <div class="row">
                    Contato
                </div>
                </div>
                
            </section>
        </main>
    </div>
<?php get_footer(); ?>
    