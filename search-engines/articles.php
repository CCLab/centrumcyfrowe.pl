<?php

add_action("wp_ajax_get_articles", "get_articles");
add_action("wp_ajax_nopriv_get_articles", "get_articles");

function get_articles() {

	$filters = $_POST['filters'];
	$page_number = $_POST['paged'];
	$posts_per_page = 8;
	$search_phrase = $filters['phrase'];

	$meta_query = array(
		'relation'		=> 'AND'
    );

	$tax_query = array();

	array_push( $tax_query, array(
		'taxonomy'     => 'kategoria',
		'field'   => "term_id",
		'terms' => array(35),
        'operator' => 'NOT IN'
	) );

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

	//Add areas filter if exists
	if(isset($filters['categories'])) {
        array_push( $tax_query, array(
            'taxonomy'     => 'kategoria',
            'field'   => "term_id",
            'terms' => $filters['categories']
        ) );
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
        'tax_query' => $tax_query
    ));

    if ($projects->have_posts()) {
        while ($projects->have_posts()) {
            $projects->the_post();
                $image = get_field('zdjecie-na-liscie');
            ?>
            <a href="<?php 

	if ( get_field('link_raport') ){
		echo get_field('link_raport');
	} else {

		the_permalink(); }		


?>" class="article-link">
                <div class="row single-article">
                    <div class="col-md-12 article-container">
                        <div class="row">
                        <?php
                            $taxy = get_taxonomies();
                            $current_term = wp_get_post_terms(get_the_ID(), $taxy["kategoria"])[0];
                        ?>
                            <div class="col-md-4 col-sm-7 col-xs-12">
                                <ol class="breadcrumb">
                                    <li><?php echo $current_term->name ?></li>
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
                                    <img src="<?php echo $image['sizes']['list-thumbnail'] ?>" alt="<?php echo $image['alt'] ?>" srcset="<?php
                                        echo $image['sizes']['medium_large'] . ' ' . $image['sizes']['medium_large-width'] . 'w, ';
                                        echo $image['sizes']['list-thumbnail'] . ' ' . $image['sizes']['list-thumbnail-width'] . 'w ';
                                    ?>" sizes="(min-width: 768px) 353px, calc(100% - 60px)">

	                                <?php cc_tooltip($image) ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </a>



        <?php } ?>
	


        <?php
            if($projects->max_num_pages > 1) {
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
