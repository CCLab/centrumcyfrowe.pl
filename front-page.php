<?php
/*
	Template name: Front page
*/

get_header(); ?>
    <header class="header" style="background-image: url('<?php echo get_field('header-zdjecie')['url'] ?>')">
        <div class="filter-box" style="position: absolute; width: 100%; height: 100%; background-image: linear-gradient(-180deg, rgba(255,207,0,0.30) 0%, #FF5722 100%);">

        </div>
        <div class="content">
            <div class="content-box">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-xs-10">
                            <h1><?php the_field('header-naglowek') ?></h1>
                            <h4><?php the_field('header-zajawka') ?></h4>
                            <a href="<?php the_field('header-przycisk-odnosnik')?>" 
                            class="button white">
                                <?php the_field('header-przycisk-tekst') ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="side-code">
            <div class="toggle-code">
                <span></span>
                <div class="tooltip-container">
                    <div class="tooltip-images" tabindex="0">
			<div class="label">
                        	<?php
					$currentLanguage  = pll_current_language();

						if ( $currentLanguage == "en" ) {

							echo "We have nothing to hide!" . "<br>" . "Check out our code.";
										}

							else { 
    
							echo "Nie mamy nic do ukrycia!" . "<br>" . "Zobacz nasz kod.";
										}
				?>
			</div>
                    </div>
                </div>
            </div>
            <div class="code-container">
                <div class="css-container">
				    <?php echo get_template_part('part', 'codepanel') ?>
                </div>
            </div>
        </div>
    </header>

    <?php if(get_field('pokaz_obszary_dzialan')){ ?>
        <section id="obszary-dzialan" class="obszary-dzialan">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <h3><?php the_field('obszary-naglowek') ?></h3>
                        <p><?php the_field('obszary-zajawka') ?></p>
                    </div>
                </div> <!-- </.row> -->

                <div class="row">
                    <?php
                        $obszary_dzialan = new WP_Query(array(
                            'post_type' =>
                                array('obszary_dzialan'),
                                'post_status' => 'publish',
                                'posts_per_page' => -1,
                                'order' => 'ASC',
                                'orderby' => 'ID'
                            ));
                            $counter = 0;
                    if ($obszary_dzialan->have_posts()) {
                        while ($obszary_dzialan->have_posts()) {
                                $obszary_dzialan->the_post();

                            ?>
                            <?php if (get_field('obszar-dzialan-pokaz-na-glownej')): ?>
                            <a href="<?php the_permalink(); ?>">
                                <div class="col-md-4 col-sm-6 col-xs-12 area-block">
                                    <?php $icon = get_field('obszar-dzialan-ikona');
                                    if ($icon['mime_type'] === "image/svg+xml"): ?>
                                    <?php getSvg($icon['url']); ?>
                                    <?php else: ?>
                                        <img src="<?php echo $icon['url'] ?>" />
                                    <?php endif; ?>
                                    <h4><?php the_title() ?></h4>
                                    <p><?php the_field('obszar-dzialan-zajawka-na-liste') ?></p>
                                </div>
                            </a>
                            <?php
                            if(++$counter % 2 === 0) { echo "<div class='clear'></div>"; }
                            endif;
                        }
                        wp_reset_postdata();
                    }
                    ?>

                </div>

                <div class="row">
                    <div class="col-md-3">
                        <a href="<?php the_field('obszary-przycisk-odnosnik') ?>" class="button orange"><?php the_field('obszary-przycisk-tekst') ?></a>
                    </div>
                </div> <!-- </.row> -->

            </div> <!-- </.containter> -->

        </section> <!-- </section> -->
    <?php } ?>

    <?php if(get_field('pokaz_czytelnie')){ ?>
        <section id="czytelnia" class="czytelnia">

            <div class="container">

                <div class="row">

                    <div class="col-md-12">
                        <h3><?php the_field('czytelnia-naglowek') ?></h3>
                        <p><?php the_field('czytelnia-zajawka') ?></p>
                    </div>

                </div> <!-- </.row> -->

            </div> <!-- </.containter> -->

            <div class="container">

                    <?php
                        $artykuly = new WP_Query(array(
                            'post_type' =>
                                array('czytelnia'),
                            'post_status' => 'publish',
                            'posts_per_page' => 3,
                            'order' => 'DASC',
                            'orderby' => 'date'
                        ));

                        if ($artykuly->have_posts()) {
                            while ($artykuly->have_posts()) {
                                $artykuly->the_post();
                                    $image = get_field('zdjecie-na-liscie');

                                    $tooltipEnabled = false;
                                    if(get_field('licencja', $image['ID']) && get_field('licencja', $image['ID']) !== 'none'){
                                        $tooltipEnabled = true;
                                    }
                                ?>

                    <div class="row single-article">
                        <div class="col-md-12 article-container">

                            <div class="row">
                                <div class="col-md-4 col-sm-7 col-xs-12">
                                <?php
                                    $taxy = get_taxonomies();
                                    $current_term = wp_get_post_terms(get_the_ID(), $taxy["kategoria"])[0];
                                ?>
                                    <ol class="breadcrumb">
                                        <li><?php echo $current_term->name ?></li>
                                        <li><?php echo get_the_date('d.m.Y') ?></li>
                                    </ol>

                                    <h4>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title() ?>
                                        </a>
                                    </h4>

                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-4 hidden-sm hidden-xs">
                                    <p><?php
                                            if (get_field('zajawka-z-postu-na-liscie') === 'Nie') {
                                                the_field('zajawka-na-liscie');
                                            } else {
                                                the_field('zajawka');
                                            }
                                        ?></p>
                                </div>

                                <div class="col-md-4 col-sm-5 article-image <?php echo $tooltipEnabled ? 'tooltip-enabled' : '' ?>">
                                    <div>
                                        <a href="<?php the_permalink() ?>">
                                            <img src="<?php echo $image['sizes']['list-thumbnail'] ?>" alt="<?php echo $image['alt'] ?>">
                                        </a>
											
                                        <?php 
										$currentLanguage  = pll_current_language();
										if ( $currentLanguage == "en" ) {
											
											cc_tooltip_en($image);
											}
										else {
											cc_tooltip($image);
											}
										
										?>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>



                    <?php

                        }
                        wp_reset_postdata();
                    }
                    ?>
            </div>


            <div class="container">

                <div class="row">
                    <div class="col-md-3">
                        <a href="<?php the_field('czytelnia-przycisk-odnosnik') ?>" class="button orange"><?php the_field('czytelnia-przycisk-tekst') ?></a>
                    </div>
                </div>

            </div>

        </section> <!-- </section> -->
	<?php } ?>


    <?php if(get_field('pokaz_projekty')){ ?>
        <section class="projekty" id="projekty">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3><?php the_field('projekty-naglowek') ?></h3>
                        <p><?php the_field('projekty-zajawka') ?></p>
                    </div> <!-- </.col-md-12> -->
                </div> <!-- </.row> -->
            </div> <!-- </.row> -->

            <div class="swiper-container swiper-container-projects-home">
                <div class="row swiper-wrapper">
                    <?php
                        $projekty = new WP_Query(array(
                            'post_type' =>
                                array('projekty'),
                                'posts_per_page' => -1,
                                'meta_query' => array(
                                    array(
                                        'key' => 'projekt_wyrozniony',
                                        'value' => true,
                                        'compare' => '=='
                                    ),
                                ),
                                'post_status' => 'publish',
                                'order' => 'ASC',
                                'orderby' => 'ID'
                            ));
                        if ($projekty->have_posts()) {
                            while ($projekty->have_posts()) { $projekty->the_post();
                                $obrazek = get_field('obrazek-na-stronie-glownej');
	                            $tooltipEnabled = false;
	                            if(get_field('licencja', $obrazek['ID']) && get_field('licencja', $obrazek['ID']) !== 'none'){
		                            $tooltipEnabled = true;
	                            }
                            ?>

                                <div class="swiper-slide project <?php echo $tooltipEnabled ? 'tooltip-enabled' : '' ?>">
                                    <a href="<?php echo the_permalink() ?>">
                                        <div style="background-image: url(<?php echo $obrazek['url'] ?>)">
                                            <h3><?php the_title() ?></h3>
                                            <button class="button button-small orange"><?php echo get_field('tekst-na-przycisku') ?></button>
                                        </div>
                                    </a>
									
									 <?php 
										$currentLanguage  = pll_current_language();
										if ( $currentLanguage == "en" ) {
											
											cc_tooltip_en($obrazek);
											}
										else {
											cc_tooltip($obrazek);
											}
										
										?>
									

                                </div>
                                <?php
                            }
                            wp_reset_postdata();
                        }
                    ?>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div> <!-- </.container> -->

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php the_field('projekty-przycisk-odnoœnik') ?>?filtr=wyroznione" class="button orange"><?php the_field('projekty-przycisk-tekst') ?></a>
                    </div>
                </div> <!-- </.row> -->
            </div>

        </section> <!-- </section> -->
	<?php } ?>

    <section class="newsletter" id="newsletter">

        <div class="container">

            <div class="row">

                <div class="col-md-12">
                    <h3><?php the_field('newsletter-naglowek') ?></h3>
                    <p><?php the_field('newsletter-zajawka') ?></p>
                </div>

            </div> <!-- </.row> -->

            <div class="row">

                <?php echo do_shortcode(get_field('formularz')) ?>

            </div>

        </div>

    </section> <!-- </section> -->
    
    <?php get_footer(); ?>