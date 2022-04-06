<?php get_header(); ?>

	<main class="obszar-dzialan" id="obszar-dzialan">

		<div class="container">

			<div class="row">
				<div class="col-md-offset-2 col-sm-offset-0 col-xs-offset-0 col-md-8 col-sm-12 col-xs-12">

					<ol class="breadcrumb">
						<li><a href="<?php the_permalink(218) ?>">Obszary działań</a></li>
					</ol>

				</div>
			</div>

			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12 social-media-box vertical">
					<a href="#" data-url="<?php the_permalink() ?>" data-description="<?php the_title ?>" data-type="facebook" class="prettySocial"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
					<a href="#" data-url="<?php the_permalink() ?>" data-description="<?php the_title ?>" data-via="centrumcyfrowe" data-type="twitter" class="prettySocial"><i class="fa fa-twitter" aria-hidden="true"></i></a> 
				</div>
				<div class="col-md-8 col-sm-12 col-xs-12">
					<h1><?php the_title() ?></h1>
                    <h4><?php the_field('zajawka') ?></h4>
				</div>
			</div>

			<?php
				include(locate_template("modules-includer.php"));
			?>

            <div class="related-articles">
                <div class="row">

                    <div class="col-md-offset-2 col-sm-offset-0 col-xs-offset-0 col-md-8 col-sm-12 col-xs-12">

                        <hr>

                        <h3 class="with-subtext"><?php the_field('powiazane-naglowek') ?></h3>
                        <p><?php the_field('powiazane-podpis') ?></p>

                    </div>

                </div>

				<?php  get_related_posts('powiazane_obszary') ?>

                <div class="row">
                    <div class="col-md-12 more-posts-container">
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-md-offset-2 more-button-container">
                        <a href="#" class="show-more-posts button orange"
                           data-querykey="powiazane_obszary"
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

		<div class="container">

			<div class="row">
				<div class="col-md-8 col-sm-12 col-xs-12 col-md-offset-2 col-sm-offset-0 col-xs-offset-0">

					<hr class="separator">

				</div>
			</div>
<?php /* ?>
			<div class="row team-small">
				<div class="col-md-8 col-sm-12 col-xs-12 col-md-offset-2 col-sm-offset-0 col-xs-offset-0">
					<h3><?php the_field('zespol-naglowek') ?></h3>
				</div>
                <div class="col-md-12">
                    <div class="row">

                        <?php
                            $osoby = get_field('zespol-osoba');
                            foreach ($osoby as $key => $osoba ):
                        ?>

                            <?php if($key%2 === 0){ ?>
                                </div><div class="row">
                            <?php } ?>

                            <div class="col-md-4 col-sm-6 col-xs-12 <?php if($key%2 === 0): ?>col-md-offset-2 col-sm-offset-0 col-xs-offset-0<?php endif;?> team-member <?php if ($key >= 2) : ?>padding-12<?php endif; ?>">
                                <a href="<?php echo $osoba->guid ?>">
                                    <div class="team-member-image">
                                        <?php if(get_field('zdjecie', $osoba->ID)){ ?>
                                            <img src="<?php
                                                    $obrazek = get_field('zdjecie', $osoba->ID);
                                                    echo $obrazek['url'] ?>" alt="<?php echo $osoba->post_title . ' - zdjęcie'
                                                ?>">
                                        <?php } ?>
                                    </div>

                                    <div class="team-member-description">

                                        <span class="team-member-name"><?php echo $osoba->post_title; ?></span>
                                        <span class="team-member-occupation"><?php the_field('stanowisko', $osoba->ID) ?></span>

                                    </div>
                                </a>
                            </div>
				        <?php endforeach; ?>
                    </div>
                </div>
			</div>
<?php */ ?>

		</div>

	</main>


	<?php get_footer(); ?>
