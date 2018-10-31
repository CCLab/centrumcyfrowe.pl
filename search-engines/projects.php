<?php

add_action("wp_ajax_get_projects", "get_projects");
add_action("wp_ajax_nopriv_get_projects", "get_projects");

function get_projects() {

	$filters = $_POST['filters'];
	$page_number = $_POST['paged'];
	$posts_per_page = 8;
	$search_phrase = $filters['phrase'];

	$meta_query = array(
		'relation'		=> 'AND'
    );

	//Add star filter, if exists
	if(isset($filters['starred']) && $filters['starred'] === "true") {
		array_push( $meta_query, array(
			'key'     => 'projekt_wyrozniony',
			'value'   => '1',
			'compare' => '=='
		) );
	}

	//Add areas filter if exists
	if(isset($filters['areas'])) {
	    $areas_array = array(
            'relation' => 'OR'
        );
		foreach ( $filters['areas'] as $area ) {
			array_push( $areas_array, array(
				'key'     => 'obszary_dzialan',
				'value'   => '"' . $area . '"',
				'compare' => 'LIKE'
			) );
		}

		array_push($meta_query, $areas_array);
	}

	//Add status filter if exists
	if(isset($filters['statuses'])) {
	    $areas_array = array(
            'relation' => 'OR'
        );
		foreach ( $filters['statuses'] as $status ) {
			array_push( $areas_array, array(
				'key'     => 'status-projektu',
				'value'   => $status,
				'compare' => '='
			) );
		}

		array_push($meta_query, $areas_array);
	}

    $projects = new WP_Query(array(
        'post_type' => array('projekty'),
        'post_status' => 'publish',
        'orderby' => 'menu_order',
        'order' => 'ASC',
        's' => $search_phrase,
        'meta_query' => $meta_query,
        'posts_per_page' => $posts_per_page,
        'paged' => $page_number,
        'offset' => ($page_number-1) * $posts_per_page
    ));

    if ($projects->have_posts()) {
        while ($projects->have_posts()) {
            $projects->the_post();
            $image = get_field('zdjecie-na-liscie');

            ?>
            <a href="<?php the_permalink() ?>" class="article-link">
                <div class="row single-article">
                    <div class="col-md-12 article-container">
                        <span class="project-status <?php
                            if (get_field('status-projektu') === "0")
                                echo "status-pending";
                            else if (get_field('status-projektu') === "1")
                                echo "status-finished";
                        ?>">
                            <?php
                            if(get_field('status-projektu') === "0")
                                echo "PROJEKT TRWA";
                            else if(get_field('status-projektu') === "1")
                                echo "PROJEKT ZAKOŃCZONY";
                            ?>
                        </span>

                        <div class="row">

                            <div class="col-md-4 col-sm-7 col-xs-12">
                                <h4><?php the_title() ?></h4>
                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-4 hidden-sm hidden-xs">
                                <p><?php
                                    if (get_field('zajawka-z-postu-na-liscie') === 'Nie') {
                                        the_field('zajawka-na-liscie');
                                    } else {
                                        the_field('zajawka');
                                    }
                                    ?></p>
                            </div>

                            <div class="col-md-4 col-sm-5 article-image <?php echo is_tooltip_enabled($image) ? 'tooltip-enabled' : '' ?>">
                                <div>
                                    <img src="<?php echo $image['sizes']['list-thumbnail'] ?>" alt="<?php echo $image['alt'] ?>">

	                                <?php cc_tooltip($image) ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </a>
        <?php } ?>
	    <?php if($projects->max_num_pages > 1) {

                        $page_number = intval( $page_number );
                ?>
                <div class="articles-pagination">

                    <?php if($page_number > 1){ ?>
                        <a href="#" data-pagenumber="1">
                            pierwsza
                        </a>
                    <?php } ?>

                    <?php if($page_number > 1){ ?>
                        <a href="#" data-pagenumber="<?php echo $page_number - 1 ?>">
                            poprzednia
                        </a>
                    <?php } ?>

                    <?php
                        $i = $page_number - 5 < 1 ? 1 : $page_number - 5;
                        for ( $j = 0; $i <= $projects->max_num_pages && $j < 10; $i++, $j++ ) {
                        ?>
                        <a href="#" data-pagenumber="<?php echo $i ?>"
                           class="<?php echo $i === $page_number ? 'active' : '' ?>">
                            <?php echo $i ?>
                        </a>
                    <?php } ?>

                        <?php if($page_number < $projects->max_num_pages){ ?>
                        <a href="#" data-pagenumber="<?php echo $page_number + 1 ?>">
                            następna
                        </a>
                        <?php } ?>

                        <?php if($page_number < $projects->max_num_pages){ ?>
                        <a href="#" data-pagenumber="<?php echo $projects->max_num_pages ?>">
                            ostatnia
                        </a>
                        <?php } ?>

            </div>
		    <?php
	    }
        wp_reset_postdata();
    }

    die();
}
