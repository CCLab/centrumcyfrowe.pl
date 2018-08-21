<?php
	/*
	 * Template name: Aktualności
	 */

	get_header();
?>

    <input type="hidden" id="search-for-news" />
    <main class="czytelnia" id="czytelnia">
        <div class="container">

            <div class="row">
                <!-- breadcrumb -->
                <div class="col-md-offset-2 col-sm-offset-2 col-xs-offset-0 col-md-8 col-sm-8 col-xs-12">
                    <?php include(locate_template('modules/breadcrumbs.php')); ?>
                </div>
            </div>

            <div class="row">
                <!-- sociale -->

                <div class="col-md-2 col-sm-2 col-xs-12 social-media-box vertical">
                    <a href="#" data-url="<?php the_permalink() ?>" data-description="<?php the_title() ?>" data-type="facebook" class="prettySocial">
                        <i class="fa fa-facebook-official" aria-hidden="true"></i>
                    </a>
                    <a href="#" data-url="<?php the_permalink() ?>" data-description="<?php the_title() ?>" data-via="centrumcyfrowe" data-type="twitter"
                        class="prettySocial">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                </div>

                <div class="col-md-8 col-sm-8 col-xs-12">
                    <!-- tytuł -->
                    <h1>
                        <?php the_title() ?>
                    </h1>
                    <h4>
                        <?php the_field('podpis_pod_naglowkiem') ?>
                    </h4>
                </div>
            </div>

            <div class="row filter-box" id="news-filter-box">
                <div class="col-md-12">

                    <ul class="filter-list">
                        <li>
                            <a href="#">Filtr</a>
                        </li>
                        <li class="bold dropdown">
                            <a class="filter-top" data-filterdefault="Obszary" href="#">
                                <span>Obszary</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                                    <path fill="none" fill-rule="evenodd" d="M1 7l5 4 5-4" />
                                </svg>
                            </a>
                            <ul class="submenu area-dropdown">
                                <li>
                                    <a href="#" data-value="-1">Wszystkie obszary</a>
                                </li>
                                <?php
			                    $areas = get_posts(array(
                                    'post_type' => 'obszary_dzialan',
                                    'post_per_page' => -1
			                    ));

			                    foreach ($areas as $area) : ?>
                                    <li>
                                        <a href="#" data-value="<?php echo $area->ID ?>">
                                            <?php echo $area->post_title; ?>
                                        </a>
                                    </li>
                                    <?php endforeach; ?>
                            </ul>
                        </li>
                        
                        
                    </ul>

                    <div class="search-box">
                        <div class="separator">
                            <div></div>
                        </div>
                        <input type="text" placeholder="Szukaj w Czytelni" class="search-input" name="projekty-search">
                        <a href="#" class="search-input-trigger">
                            <i id="projects-search" class="fa fa-search"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="posts-loader-container hidden">
                <div class="posts-loader">
                    <?php getLogoImage() ?>
                </div>
            </div>

            <div class="news-box"></div>


            </div>
        </div>
    </main>


    <?php get_footer(); ?>