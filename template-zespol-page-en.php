<?php
	/*
	 * Template name: Zespol EN
	 */

	get_header();
?>

	<main class="zespol" id="zespol">

		<div class="container">

			<div class="row">
				<div class="col-md-offset-2 col-sm-offset-2 col-xs-offset-0 col-md-8 col-sm-8 col-xs-12">
					<?php include(locate_template('modules/breadcrumbs.php')); ?>
				</div>
			</div>

			<div class="row">

				<div class="col-md-2 col-sm-2 col-xs-12 social-media-box vertical">
					<a href="#" data-url="<?php the_permalink() ?>" data-description="<?php the_title ?>" data-type="facebook" class="prettySocial"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
					<a href="#" data-url="<?php the_permalink() ?>" data-description="<?php the_title ?>" data-via="centrumcyfrowe" data-type="twitter" class="prettySocial"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				</div>

				<div class="col-md-8 col-sm-8 col-xs-12">
					<h1><?php the_title() ?></h1>
					<h4><?php the_field('zajawka') ?></h4>
				</div>

			</div>

            <div class="row filter-box" id="team-filter-box">
                <div class="col-md-12">
                    
                    <ul class="filter-list">
    
                        <li>Filer</li>
                        <li class="bold"><a href="#" data-slug="all">Our Team</a></li>
                        <?php 
                            
                            $lista_zespolow = get_terms([
                                'taxonomy' => "zespoly",
                                'hide_empty' => false,
                            ]);
                            
                            foreach($lista_zespolow as $pojedynczy_zespol): ?> 
                                
                                <li><a href="<?php get_permalink() ?>" data-slug="<?php echo $pojedynczy_zespol->slug ?>"><?php echo $pojedynczy_zespol->name; ?></a></li>
                        
                            <?php endforeach; ?>
                    
                    </ul>
                    
                </div>

            </div>

            <div class="row team-box">

            <?php
                $people = new WP_Query(array(
                    'post_type' =>
                        array('zespol'),
                        'posts_per_page' => -1,
                        'meta_query' => array(
                            array(
                                'key' => 'nie_pokazuj_na_stronie_zespolu',
                                'value' => true,
                                'compare' => '!='
                            ),
                        ),
                        'orderby' => 'menu_order',
                        'order' => 'ASC'
                    ));
                   

            if ($people->have_posts()) {
                while ($people->have_posts()) {
	                $people->the_post();
	                $terms = "";
	                $termsList = get_the_terms( get_the_ID(), 'zespoly' );
	                if($termsList) {
		                foreach ($termsList as $term ) {
			                $terms .= $term->slug . ' ';
		                }
	                }
                    ?>
                    <a href="<?php the_permalink(); ?>" class="sinle-person"
                        data-teams="<?php echo $terms ?>">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 team-member">

                            <?php if(get_field('zdjecie', $autor->ID)){ ?>
                                <img src="<?php echo get_field('zdjecie')['sizes']['gallery-thumbnail'] ?>">
                            <?php } ?>

                            <h3><?php the_title() ?></h3>
                            <p><?php the_field('stanowisko') ?></p>
                        </div>
                    </a>
                    <?php

                }
                wp_reset_postdata();
            }
        ?>

        </div>

        </div>
    </main>

<?php get_footer(); ?>
