<?php

add_action("wp_ajax_get_news", "get_news");
add_action("wp_ajax_nopriv_get_news", "get_news");

function get_news() {

	$filters = $_POST['filters'];
	$page_number = $_POST['paged'];
	$posts_per_page = 8;
	$search_phrase = $filters['phrase'];

	$meta_query = array(
		'relation'		=> 'AND'
    );

	//Add areas filter if exists
	if(isset($filters['areas'])) {
	    $areas_array = array(
            'relation' => 'OR'
        );
		foreach ( $filters['areas'] as $area ) {
			array_push( $areas_array, array(
				'key'     => 'powiazane_obszary',
				'value'   => '"' . $area . '"',
				'compare' => 'LIKE'
			) );
		}

		array_push($meta_query, $areas_array);
	}

    
    $projects = new WP_Query(array(
        'post_type' => array('czytelnia'),
        'post_status' => 'publish',
        'order' => 'DESC',
        'orderby' => 'date',
        's' => $search_phrase,
        'meta_query' => $meta_query,
        'posts_per_page' => $posts_per_page,
        'paged' => $page_number,
        'offset' => ($page_number-1) * $posts_per_page,
        'tax_query' => array(array(
	        'taxonomy'     => 'kategoria',
	        'field'   => "term_id",
	        'terms' => '35'
        ))
    ));

    if ($projects->have_posts()) {
        while ($projects->have_posts()) {
            $projects->the_post();
                $image = get_field('zdjecie-na-liscie');
            ?>
            <a href="<?php the_permalink() ?>" class="article-link">
                <div class="row single-article">
                    <div class="col-md-12 article-container">
                        <div class="row">
                       
                            <div class="col-md-4 col-sm-7 col-xs-12">
                                <ol class="breadcrumb">
                                    <li><?php echo get_the_date('d.m.Y') ?> </li>
                                </ol>

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
                                    <img src="<?php echo $image['sizes']['list-thumbnail'] ?>" alt="<?php echo $image['alt'] ?>" />

	                                <?php cc_tooltip($image) ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </a>
        <?php } ?>
        <?php if($projects->max_num_pages > 1) { ?>
            <div class="articles-pagination">
			    <?php
			    $page_number = intval( $page_number );
			    for ( $i = 1; $i <= $projects->max_num_pages; $i ++ ) { ?>

                    <a href="#" data-pagenumber="<?php echo $i ?>"
                       class="<?php echo $i === $page_number ? 'active' : '' ?>">
                        <span class="page"></span>
                    </a>
			    <?php } ?>
            </div>
		    <?php
	    }
        wp_reset_postdata();
    }

    die();
}