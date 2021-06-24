<?php get_header(); ?>

	<main class="obszar-dzialan" id="obszar-dzialan">

		<div class="container">

			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12 social-media-box vertical">
				</div>
				<div class="col-md-8 col-sm-12 col-xs-12">
					<h2>Wyniki wyszukiwania dla: <i><?php echo get_search_query() ?></i></h2>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>

							<div class="container">
								<div class="col-xs-12">
									<hr>
								</div>
							</div>

							<div class="container">
								<div class="row">
									<div class="col-md-8 col-md-offset-2 col-xs-12">
										<h4><a href="<?php the_permalink() ?>" class="hvr-forward"><?php the_title() ?></a></h4>
					
					<span><?php echo get_the_date('d M Y') ?> </span>
                    <h5 class="title">Autor: <?php $autor = get_field('autor_wpisu'); ?>
			<a href="<?php echo the_permalink($autor->ID) ?>"><?php echo $autor->post_title; ?></a>
                    (<?php the_field('stanowisko', $autor->ID) ?>)</h5>
											<p>
											<?php the_excerpt() ?>
										</p>
									</div>
								</div>
							</div>

						<?php endwhile; ?>
					<?php else : ?>
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2 col-xs-12">
									<h3><?php the_field('niestety_brak_wynikow',  pll_current_language('slug')) ?></h3>
									<br/>
								</div>
							</div>
						</div>
					<?php endif; ?>
				</div>
			</div>

		</div>
	</main>



<?php get_footer(); ?>