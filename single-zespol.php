<?php
    get_header();
?>

    <main class="zespol-osoba" id="zespol-osoba">

        <div class="container">

            <div class="row">
                <div class="col-md-offset-2 col-sm-offset-2 col-xs-offset-0 col-md-8 col-sm-8 col-xs-12">

                    <ol class="breadcrumb">
                        <li><a href="<?php the_permalink(209) ?>">Zespół</a></li>
                    </ol>

                </div>
            </div>

            <div class="row">

                <div class="col-md-2 col-sm-2 col-xs-12 social-media-box vertical">
                    <a href="#" data-url="<?php the_permalink() ?>" data-description="<?php the_title ?>" data-type="facebook" class="prettySocial"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                    <a href="#" data-url="<?php the_permalink() ?>" data-description="<?php the_title ?>" data-via="centrumcyfrowe" data-type="twitter" class="prettySocial"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </div>

                <div class="col-md-8 col-sm-8 col-xs-12">
                    <h1><?php the_title(); ?></h1>
                    <h4><?php the_field('stanowisko') ?></h4>
                </div>

            </div>

            <section>

                <div class="row">

                    <?php if(get_field('zdjecie', $autor->ID)){ ?>
                        <div class="col-md-4 col-sm-4 col-xs-6 center-block">
                            <img class="osoba" src="<?php echo get_field('zdjecie')['sizes']['large'] ?>" alt="<?php echo get_field('zdjecie')['title'] ?>">
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <p> <?php the_field('opis-osoby') ?></p>
                        </div>
                    <?php }else{ ?>
                        <div class="col-md-7 col-sm-7 col-sm-offset-2 col-md-offset-2 col-xs-12">
                            <p> <?php the_field('opis-osoby') ?></p>
                        </div>
                    <?php } ?>
                </div>


            </section>

            <div class="related-articles">
                <div class="row">

                    <div class="col-md-offset-2 col-sm-offset-2 col-xs-offset-0 col-md-8 col-sm-8 col-xs-12">

                        <hr>

                        <h3 class="with-subtext">Teksty <?php the_field('odmiana-imienia') ?></h3>
                        <p>Aktualności, artykuły, opinie, materiały.</p>

                    </div>

                </div>
            
                <?php get_related_posts('autor_wpisu') ?>

                <div class="row">
                    <div class="col-md-12 more-posts-container">
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-md-offset-2 more-button-container">
                        <a href="#" class="show-more-posts button orange"
                        data-querykey="powiazane_wpisy"
                        data-showmore="Pokaż więcej"
                        data-showless="Zwiń"
                        >
                            Pokaż więcej
                        </a>
                        <div class="posts-loader">
                            <?php getLogoImage() ?>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </main>

<?php get_footer(); ?>
