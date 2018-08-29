<?php get_header(); ?>

    <main class="tekstowa" id="tekstowa">
        <div class="container">

            <div class="row"> <!-- breadcrumb -->
				<div class="col-md-offset-2 col-sm-offset-2 col-xs-offset-0 col-md-8 col-sm-8 col-xs-12">
					<?php 
						$taxy = get_taxonomies();
						$current_term = wp_get_post_terms(get_the_ID(), $taxy["kategoria"])[0]; 
					?>
					<ol class="breadcrumb">
						<li><a href="<?php the_permalink(242) ?>">Czytelnia</a></li>
						<li><a href="<?php echo get_permalink(242) .'#' . $current_term->slug ?>"><?php echo $current_term->name; ?></a></li>
						<li><a href="<?php the_permalink() ?>"><?php echo get_the_date('d.m.Y') ?></a></li>
					</ol>


				</div>
			</div>

            <div class="row"> <!-- sociale -->

				<div class="col-md-2 col-sm-2 col-xs-12 social-media-box vertical">
					<a href="#" data-url="<?php the_permalink() ?>" data-description="<?php the_title() ?>" data-type="facebook" class="prettySocial"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
					<a href="#" data-url="<?php the_permalink() ?>" data-description="<?php the_title() ?>" data-via="centrumcyfrowe" data-type="twitter" class="prettySocial"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				</div>

				<div class="col-md-8 col-sm-8 col-xs-12"> <!-- tytuł -->
					<h1><?php the_title() ?></h1>
                    <h4><?php the_field('zajawka') ?></h4>
				</div>
			</div>

			<div class="row team-small">
				<div class="col-md-4 col-md-offset-2 col-sm-offset-2 col-xs-offset-0 team-member">
					<?php $autor = get_field('autor_wpisu'); ?>
					<a href="<?php echo the_permalink($autor->ID) ?>">
						<div class="team-member-image">
                            <?php if(get_field('zdjecie', $autor->ID)){ ?>
                                <img src="<?php $obrazek = get_field('zdjecie', $autor->ID);
                                echo $obrazek['url'] ?>" alt="<?php echo $autor->post_title . ' - zdjęcie'?>">
                            <?php } ?>
						</div>

						<div class="team-member-description">

							<span class="team-member-name"> <?php echo $autor->post_title; ?></span>

							<span class="team-member-occupation">
								<?php the_field('stanowisko', $autor->ID) ?>
							</span>

						</div>

					</a>
				</div>
			</div>

	        <?php
                include(locate_template("modules-includer.php"));
	        ?>

			<div class="row post-info">

				<div class="col-md-4 col-sm-4 col-xs-4 col-md-offset-2 col-sm-offset-2 col-xs-offset-0 author">
                    <h5 class="title">Autor</h5>
                    <a href="<?php echo the_permalink($autor->ID) ?>"><?php echo $autor->post_title; ?></a>
                    <span><?php the_field('stanowisko', $autor->ID) ?></span>
				</div>


				<div class="col-md-4 col-sm-4 col-xs-4 date">
					<h5 class="title">Data</h5>
					<span><?php echo get_the_date('d M Y') ?></span>

                    <h5 class="title" style="margin-top: 10px;">Powiązane obszary</h5>
					<?php foreach (get_field('powiazane_obszary') as $area){?>
                        <a href="<?php echo the_permalink($area->ID) ?>"><?php echo $area->post_title; ?></a>
					<?php } ?>
				</div>
				

				<div class="col-md-2 col-sm-4 col-xs-4 tags">
					<h5 class="title">Tagi</h5>
					<ul class="tags-list">
					<?php 
					$lista_tagow = get_the_tags(get_the_ID());
					if($lista_tagow):
						foreach($lista_tagow as $pojedynczy_tag): 
							$tag_id = $pojedynczy_tag->term_id;
					?> 
						
						<li><a href="<?php echo get_tag_link($tag_id) ?>" data-slug="<?php echo $pojedynczy_tag->slug ?>"><?php echo $pojedynczy_tag->name; ?></a></li>
				
					<?php
						endforeach;
					else:
						echo "<span><i>Brak tagów</i></span>";

					endif;
					?>
					</ul>
				</div>

			</div>
			
			<div class="row">
				<div class="col-md-offset-2 col-sm-offset-2 col-xs-offset-0 col-md-8 col-sm-8 col-xs-12">
					<?php comments_template() ?>
				</div>
			</div>

			<div class="related-articles">
				<div class="row">

					<div class="col-md-offset-2 col-sm-offset-2 col-xs-offset-0 col-md-8 col-sm-8 col-xs-12">

						<hr>

						<h3 class="with-subtext"><?php the_field('powiazane-tytul') ?></h3>
						<p><?php the_field('powiazane-podtytul') ?></p>

					</div>

				</div>


				<?php 
					get_related_posts('powiazane_wpisy');
				?>

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
