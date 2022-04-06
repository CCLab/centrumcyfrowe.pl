
<?php
	/*
	 * Template name: Podstrona konferecji Cyfrowa 2022
	 */
	get_header();
?>

<style>

main {
	background-color: #FFFFFF;
}

.image img {
	background-color: transparent;
}

p br {
	display: none;
}

.breadcrumb a{
	font-size: 20px;
}

.wp-block-column .table-24-march {
	word-break: keep-all;
}

.table-24-march table{
	font-size: 17px !important;
	margin-top: 0px !important;
	margin-bottom: 30px;
}

 
.table-24-march th, .table-24-march td {
	padding-left: 10px;
	padding-right: 10px;
	
}


@media only screen and (max-width: 768px) {
	.image img {
		width: 60% !important;
		margin-left: auto;
		margin-right: auto;
		margin-top: 20px;
	}
	.image-container {
		margin-top: 0px;
	}
	.image-small img{
		width: 100% !important;
	}
}



</style>


    <main class="tekstowa" id="tekstowa">
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
					<h1><?php the_title() ?></h1>
                    <h4><?php the_field('zajawka') ?></h4>
				</div>
			</div>



	        <?php include(locate_template("modules-includer.php")); ?>

			<div class="related-articles">
				<div class="row">

					<div class="col-md-offset-2 col-sm-offset-2 col-xs-offset-0 col-md-8 col-sm-8 col-xs-12">

						<hr>

						<h3 class="with-subtext">Powiązane</h3>
						<p>Aktualności, artykuły, opinie, materiały.</p>

					</div>

				</div>


				<?php get_related_posts('powiazane_wpisy') ?>

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
