<?php

add_action("wp_ajax_get_tags_entries", "get_tags_entries");
add_action("wp_ajax_nopriv_get_tags_entries", "get_tags_entries");

function get_tags_entries() {

	$filters = $_POST['filters'];
    $page_number = $_POST['paged'];
	$posts_per_page = 8;
	$search_phrase = $filters['phrase'];

	$tax_query = array(array(
        'taxonomy' => 'post_tag',
        'field' => 'slug',
        'terms' => $filters['tag']
    ));

    
    $tags = new WP_Query(array(
        'post_type' => 'any',
        'order' => 'DESC',
        'orderby' => 'date',
        's' => $search_phrase,
        'posts_per_page' => $posts_per_page,
        'paged' => $page_number,
        'offset' => ($page_number-1) * $posts_per_page,
        'tax_query' => $tax_query
    ));

    if ($tags->have_posts()) {
        while ($tags->have_posts()) {
            $tags->the_post();
            
            ?>
            <a href="<?php the_permalink() ?>" class="article-link">
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

                            <div class="col-md-4 col-sm-5 article-image">
                                <div>
                                    <img src="<?php echo get_field('zdjecie-na-liscie')['url'] ?>" alt="<?php echo get_field('zdjecie-na-liscie')['title'] ?>" />

                                    <div class="tooltip-container">
                                        <div class="tooltip-images" tabindex="0">
                                            <div class="label"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </a>
        <?php } ?>
        <?php if($tags->max_num_pages > 1) { ?>
            <div class="tags-pagination">
			    <?php
			    $page_number = intval( $page_number );
			    for ( $i = 1; $i <= $tags->max_num_pages; $i ++ ) { ?>

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