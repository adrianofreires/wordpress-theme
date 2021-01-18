<?php get_header(); ?>
    <div class="content-area">
        <main>
            <section class="slide">
                <div class="container">
                    <div class="row">
                        Slide
                    </div>
                </div>
            </section>
            <section class="services">
                <div class="container">
                    <div class="row">Serviços</div>
                </div>
            </section>
            <section class="middle-area">
                <div class="container">
                    <div class="row">
                    <aside class="sidebar col-md-4">Barra Lateral</aside>
                    <div class="portifolio col-md-8">
                        <?php 
                            if(have_posts()):
                                while(have_posts()): the_post();
                        ?>
                        <p>Conteúdo da Home.php</p>
                        <?php
                            endwhile;
                        else: 
                        ?>
                        <p>There's nothing yet to be displayed</p>
                        <?php endif; ?>
                    </div>
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