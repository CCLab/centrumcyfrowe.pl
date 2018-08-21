<?php get_header(); ?>

	<main class="obszar-dzialan" id="obszar-dzialan">

		<div class="container">

			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12 social-media-box vertical">
				</div>
				<div class="col-md-8 col-sm-12 col-xs-12">
					<h2>Wyniki wyszukiwania: <i><?php echo get_search_query() ?></i></h2>
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
									<h3><?php the_field('niestety_brak_wynikow', 'options') ?></h3>
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