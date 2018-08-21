<?php
	/*
	 * Template name: Do pobrania
	 */

	get_header();
?>

    <main class="do-pobrania" id="do-pobrania">
        <div class="container">

            <div class="row"> <!-- breadcrumb -->
				<div class="col-md-offset-2 col-sm-offset-2 col-xs-offset-0 col-md-8 col-sm-8 col-xs-12">
					<?php include(locate_template('modules/breadcrumbs.php')); ?>
				</div>
			</div>

            <div class="row"> <!-- sociale -->

				<div class="col-md-2 col-sm-2 col-xs-12 social-media-box vertical">
					<a href="#" data-url="<?php the_permalink() ?>" data-description="<?php the_title ?>" data-type="facebook" class="prettySocial"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
					<a href="#" data-url="<?php the_permalink() ?>" data-description="<?php the_title ?>" data-via="centrumcyfrowe" data-type="twitter" class="prettySocial"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				</div>

				<div class="col-md-8 col-sm-8 col-xs-12"> <!-- tytuł -->
					<h1><?php the_field('naglowek') ?></h1>
					<h4><?php the_field('zajawka') ?></h4>
				</div>
			</div>

			<?php 
				// check if the repeater field has rows of data
				if (have_rows('zawartosc')) : ?>
					
					<div class="row download-materials">
						<div class="col-md-8 col-xs-12 col-md-offset-2 col-sm-offset-2 col-xs-offset-0">
					
					<?php // loop through the rows of data
					while (have_rows('zawartosc')) : the_row();?>
					
							<h4><?php the_sub_field('naglowek-listy') ?></h4>
					
					<?php if(have_rows('lista-do-pobrania')) : ?>

							<ul class="downloadable-files-list">

								<?php while (have_rows('lista-do-pobrania')): the_row(); ?>

									<a href="<?php echo get_sub_field('plik-do-pobrania')['url'] ?>" download>
										<?php if(get_sub_field('plik-do-pobrania')): ?>
											<li class="hvr-forward"><?php echo get_sub_field('plik-do-pobrania')['title'] ?></li>
										<?php endif; ?>
									</a>

								<?php endwhile; ?>
							
							</ul>

						<?php endif;

					endwhile;
					?>

						</div>
					</div>

				<?php
				else :

					// no rows found

				endif;
			?>

        </div>
    </main>

<?php get_footer(); ?>
