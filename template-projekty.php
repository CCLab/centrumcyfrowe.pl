<?php
	/*
	 * Template name: Projekty
	 */

	get_header();
?>

    <input type="hidden" id="search-for-projects" />
    <main class="projekty" id="projekty">
        <div class="container">

            <div class="row"> <!-- breadcrumb -->
				<div class="col-md-offset-2 col-sm-offset-2 col-xs-offset-0 col-md-8 col-sm-8 col-xs-12">
					<?php include(locate_template('modules/breadcrumbs.php')); ?>
				</div>
			</div>

            <div class="row"> <!-- sociale -->

				<div class="col-md-2 col-sm-2 col-xs-12 social-media-box vertical">
					<a href="#" data-url="<?php the_permalink() ?>" data-description="<?php the_title() ?>" data-type="facebook" class="prettySocial"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
					<a href="#" data-url="<?php the_permalink() ?>" data-description="<?php the_title() ?>" data-via="centrumcyfrowe" data-type="twitter" class="prettySocial"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				</div>

				<div class="col-md-8 col-sm-8 col-xs-12"> <!-- tytuł -->
					<h1><?php the_title() ?></h1>
					<h4><?php the_field('podpis') ?></h4>
				</div>
            </div>
            
            <div class="row filter-box" id="projects-filter-box">
                <div class="col-md-12">
                    <ul class="filter-list">
                        <?php
                		if( pll_current_language() == "pl" ) 	                
					echo '<li>Filtr</li>';
				else 

					echo '<li>Filter</li>';
					
                            ?>
                        <li class="bold dropdown">
                            <a class="filter-top" data-filterdefault="Obszary" href="#">
                                <?php
                		if( pll_current_language() == "pl" ) 	                
					echo '<span>Obszary</span>';
				else 

					echo '<span>Themes</span>';
					
                            ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                                    <path fill="none" fill-rule="evenodd" d="M1 7l5 4 5-4"/>
                                </svg>
                            </a>
                            <ul class="submenu area-dropdown">
                                <?php
                		if( pll_current_language() == "pl" ) 	                
					echo '<li><a href="#" data-value="-1">Wszystkie obszary</a></li>';
				else 

					echo '<li><a href="#" data-value="-1">All themes</a></li>';
					
                            ?>
                                <?php
                                    $areas = get_posts(array(
                                        'post_type' => 'obszary_dzialan',
                                        'posts_per_page' => -1
                                    ));
                                    foreach ($areas as $area) :
                                ?>                                    
                                        <li><a href="#" data-value="<?php echo $area->ID ?>"><?php echo $area->post_title; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <li class="bold dropdown">
                            <a class="filter-top" data-filterdefault="Status projektu" href="#">
                                <?php
                		if( pll_current_language() == "pl" ) 	                
					echo '<span>Status projektu</span>';
				else 

					echo '<span>Project status</span>';
					
                            ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                                    <path fill="none" fill-rule="evenodd" d="M1 7l5 4 5-4"/>
                                </svg>
                            </a>
                           <?php
                		if( pll_current_language() == "pl" ) 	                
					echo ' <ul class="submenu status-dropdown">
                                <li><a href="#" data-value="-1">Wszystkie projekty</a></li>
                                <li><a href="#" data-value="0">Trwające</a></li>
                                <li><a href="#" data-value="1">Zakończone</a></li>
                            </ul>';
				else 

					echo ' <ul class="submenu status-dropdown">
                                <li><a href="#" data-value="-1">All projects</a></li>
                                <li><a href="#" data-value="0">Current</a></li>
                                <li><a href="#" data-value="1">Completed</a></li>
                            </ul>';
					
                            ?>                        </li>
                        <?php
                		if( pll_current_language() == "pl" ) 	                
					echo '<li class="bold"><a href="#" class="starred"><i class="fa fa-star-o"></i> Wyróżnione</a></li>';
				else 

					echo '<li class="bold"><a href="#" class="starred"><i class="fa fa-star-o"></i> Highlighted</a></li>';
					
                            ?>

                    </ul>

                    <div class="search-box">
                        <div class="separator"><div></div></div>
                        <?php
                		if( pll_current_language() == "pl" ) 	                
					echo '<input type="text" placeholder="Szukaj w Projektach" class="search-input" name="projekty-search">';
				else 

					echo '<input type="text" placeholder="Search in Projects" class="search-input" name="projekty-search">';
					
                            ?>                        <a href="#" class="search-input-trigger"><i id="projects-search" class="fa fa-search"></i></a>
                    </div>

                </div>

            </div>

        </div>

        <div class="container">
            <div class="posts-loader-container">
                <div class="posts-loader">
			        <?php getLogoImage() ?>
                </div>
            </div>

            <div class="articles-box">
            </div>
        </div>
            
    </main>


<?php get_footer(); ?>
