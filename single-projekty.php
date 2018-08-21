<?php
    get_header();
?>

    <main class="project-single" id="project-single">
        <div class="container">

            <div class="row"> <!-- breadcrumb -->
				<div class="col-md-offset-2 col-sm-offset-0 col-xs-offset-0 col-md-8 col-sm-12 col-xs-12">
					
					<ol class="breadcrumb">
						<li><a href="<?php the_permalink(250) ?>">Projekty</a></li>
                        <?php if(get_field('projekt_wyrozniony')): ?><li><a href="<?php echo get_permalink(250).'/#wyroznione'?>">Wyróżnione</a></li><?php endif; ?>
					</ol>

				</div>
			</div>

            <div class="row"> <!-- sociale -->

				<div class="col-md-2 col-sm-12 col-xs-12 social-media-box vertical">
					<a href="#" data-url="<?php the_permalink() ?>" data-description="<?php the_title ?>" data-type="facebook" class="prettySocial"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
					<a href="#" data-url="<?php the_permalink() ?>" data-description="<?php the_title ?>" data-via="centrumcyfrowe" data-type="twitter" class="prettySocial"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				</div>

				<div class="col-md-8 col-sm-12 col-xs-12"> <!-- tytuł -->
					<h1><?php the_title() ?></h1>
				</div>
			</div>

			<section>
				<div class="row">
					<div class="col-md-4 col-sm-12 col-xs-12 side-info">
						<div class="project-logo">
							<img src="<?php echo get_field('ikona')['url'] ?>" alt="<?php echo get_field('ikona')['title'] ?>">
						</div> <!-- logo projektu -->
						<div class="col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
							<?php
                                $osoby = get_field('zespol-projektu');
                                if($osoby){
                                    ?>
                                <p>
                                    Zespół projektu:
                                    <?php
                                    foreach ($osoby as $key=>$osoba) {
                                        echo '<a href="' . get_permalink($osoba->ID) . '">'.$osoba->post_title.'</a>';
                                        if($key < count($osoby)-1) { echo ", ";}
                                    }
                                    ?>
                                </p>
                            <?php } ?>

                            <?php if(get_field('czas_trwania')){ ?>
                                <p>
                                    <?php echo get_field('czas_trwania_opis') ? get_field('czas_trwania_opis') : 'Czas trwania' ?>:
                                    <?php the_field('czas_trwania') ?>
                                </p>
                            <?php } ?>
							<?php
                                $obszary = get_field('obszary_dzialan');
                                if($obszary){
                                    ?>
                                <p>Obszary działań:
                                    <?php
                                    foreach ($obszary as $key=>$obszar) {
                                        echo '<a href="' . get_permalink($obszar->ID) . '">'.$obszar->post_title.'</a>';
                                        if($key < count($obszary)-1) { echo ", ";}
                                    }
                                    ?></p>
                            <?php } ?>

							<?php if(get_field('odnosnik')){ ?>
                                <p>Więcej: <a href="<?php the_field('odnosnik') ?>" target="_blank"> <?php the_field('odnosnik') ?> </a></p>
                            <?php } ?>
                            <?php 
                                $lista_tagow = get_the_tags(get_the_ID());
                                if ($lista_tagow) : ?>

                                <div class="tags-list">
                                    <p>Tagi:
                                        <?php
                                            foreach ($lista_tagow as $key=>$pojedynczy_tag) :
                                            $tag_id = $pojedynczy_tag->term_id;
                                        ?>
                                            <a href="<?php echo get_tag_link($tag_id) ?>" data-slug="<?php echo $pojedynczy_tag->slug ?>"><?php echo $pojedynczy_tag->name; ?></a>&nbsp;
                                        <?php endforeach; ?>
                                    </p>
                                </div>
                                
                                <?php endif; ?>
                            </p>
						</div>
					</div>
					<div class="col-md-7 col-sm-12 col-xs-12">
						<h4><?php the_field('zajawka') ?>
                        </h4>
                        <?php if (get_field('korzystaj_z_edytora_modulowego') === true) : ?>
                            <?php include(locate_template("modules-includer.php")); ?>
                        <?php else: ?>
						    <p><?php the_field('tresc') ?></p>
                        <?php endif; ?>
					</div>
				</div>

			</section>

            <div class="related-articles">

                <div class="row">

                    <div class="col-md-offset-2 col-sm-offset-0 col-xs-offset-0 col-md-8 col-sm-12 col-xs-12">
                        <hr>
                        <h3 class="with-subtext"><?php the_field('powiazane-tytul') ?></h3>
						<p><?php the_field('powiazane-podtytul') ?></p>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">
	                    <?php get_related_posts('powiazane_projekty'); ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 more-posts-container">
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-md-offset-2 more-button-container">
                        <a href="#" class="show-more-posts button orange"
                           data-querykey="powiazane_projekty"
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
