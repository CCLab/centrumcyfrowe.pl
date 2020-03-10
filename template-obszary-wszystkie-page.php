<?php
	/*
	 * Template name: Obszary wszystkie
	 */

	get_header();
?>

<main class="obszary-wszystkie" id="obszary-wszystkie">

	<div class="container">

        <div class="row">
            <div class="col-md-offset-2 col-sm-offset-0 col-xs-offset-0 col-md-8 col-sm-12 col-xs-12">
	            <?php include(locate_template('modules/breadcrumbs.php')); ?>
            </div>
		</div>
		
		<div class="row">
            <div class="col-md-2 col-sm-12 col-xs-12 social-media-box vertical">
                <a href="#" data-url="<?php the_permalink() ?>" data-description="<?php the_title ?>" data-type="facebook" class="prettySocial"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                <a href="#" data-url="<?php the_permalink() ?>" data-description="<?php the_title ?>" data-via="centrumcyfrowe" data-type="twitter" class="prettySocial"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
            <div class="col-md-8 col-sm-12 col-xs-12">
                <h1><?php the_title() ?></h1>
                <h4><?php the_field('podpis_pod_naglowkiem') ?></h4>
            </div>
		</div>
	</div>

	<section class="obszary-dzialan">

		<div class="container">
			<div class="row">
				<?php
					$obszary_dzialan = new WP_Query(array(
						'post_type' =>
							array('obszary_dzialan'),
							'posts_per_page' => -1,
						'orderby' => 'menu_order',
                        'order' => 'ASC'
					));
				$counter = 3;
				if ($obszary_dzialan->have_posts()) {
					while ($obszary_dzialan->have_posts()) {
							$obszary_dzialan->the_post();

						?>
						<a href="<?php the_permalink(); ?>">
							<div class="col-md-4 col-sm-6 col-xs-12 area-block <?php 
								if($counter%3 === 0) {
									echo "col-md-offset-2 col-sm-offset-0 col-xs-offset-0";
									$counter = 3;
								}
								$counter--;
							?>">
								<?php $icon = get_field('obszar-dzialan-ikona');
								if ($icon['mime_type'] === "image/svg+xml") { ?>
								    <?php getSvg($icon['url']); ?>
								<?php 
								} else { ?>
									<img src="<?php echo $icon['url'] ?>" />
									
								<?php } ?>
								<h4><?php the_title() ?></h4>
								<p><?php the_field('obszar-dzialan-zajawka-na-liste') ?></p>
								<div class="clear"></div>
							</div>
						</a>
						<?php

					}
					wp_reset_postdata();
				}
			?>

			</div>
	
		</div>

	</section>

</main>

<?php get_footer(); ?>