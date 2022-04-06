<?php

add_action("wp_ajax_get_related_posts", "get_related_posts");
add_action("wp_ajax_nopriv_get_related_posts", "get_related_posts");

function get_related_posts($custom_key) {

	$isAjax = false;

	$offset = 0;
	$posts_per_page = 3;

	//if $custom_key parameter is not passed, this is AJAX call
	if(empty($custom_key)){
		$custom_key = $_POST['querykey'];
		$offset = 4;
		$posts_per_page = 20;
		$isAjax = true;
	};

	$keyvalue = get_the_ID();
	if($_POST['queryvalue']){
		$keyvalue = $_POST['queryvalue'];
    }

	$artykuly = new WP_Query(array(
		'post_type' => array('czytelnia'),
		'post_status' => 'publish',
		'posts_per_page' => $posts_per_page,
		'offset' => $offset,
		'meta_query' => array(
			array(
				'key' => $custom_key,
				'value' => $keyvalue,
				'compare' => 'LIKE'
			)
		),
		'order' => 'DESC',
		'orderby' => 'date'
	));

	if ($artykuly->have_posts()) {
		while ($artykuly->have_posts()) {
			$artykuly->the_post();
			?>
			<div class="row single-article">
				<div class="col-md-8 col-sm-12 col-md-offset-2 col-sm-offset-0 article-container">

					<div class="row">
						<div class="col-md-7 col-sm-7 col-xs-12">
						<?php 
							$taxy = get_taxonomies();
							$current_term = wp_get_post_terms(get_the_ID(), $taxy["kategoria"])[0];
							$image = get_field('zdjecie-na-liscie');

						?>
							<ol class="breadcrumb">
								<li><?php echo $current_term->name ?></li>
								<li><?php echo get_the_date('d.m.Y') ?></li>
							</ol>
							<h4>
								<a href="<?php the_permalink(); ?>">
									<?php the_title() ?>
								</a>
							</h4>
						</div>

						<div class="col-md-5 col-sm-5 article-image <?php echo is_tooltip_enabled($image) ? 'tooltip-enabled' : '' ?>">
							<div>
								<a href="<?php the_permalink() ?>">
									<img src="<?php echo $image['sizes']['list-thumbnail'] ?>" srcset="<?php
										echo $image['sizes']['medium_large'] . ' ' . $image['sizes']['medium_large-width'] . 'w, ';
										echo $image['sizes']['list-thumbnail'] . ' ' . $image['sizes']['list-thumbnail-width'] . 'w ';
									?>" sizes="(min-width: 768px) 353px, calc(100% - 60px)" alt="<?php echo $image['alt'] ?>">
								</a>

								<?php cc_tooltip($image) ?>
							</div>
						</div>
					</div>

				</div>
			</div>
			<?php
		}
		wp_reset_postdata();

		//if not AJAX call, count all posts and hide show more button if needed
		if(!$isAjax) {

			$artykuly = new WP_Query( array(
				'post_type'      => array( 'czytelnia' ),
				'posts_per_page' => - 1,
				'meta_query'     => array(
					array(
						'key'     => $custom_key,
						'value'   => get_the_ID(),
						'compare' => 'LIKE'
					)
				),
				'order'          => 'DESC',
				'orderby'        => 'date'
			) );

			$posts_count = $artykuly->post_count;
			if ( $posts_count <= $posts_per_page ) {
				?>
				<style>
					.more-button-container {
						display: none;
					}
				</style>
				<?php
			}
		}
	} else {
		//hide related section if no posts were found
		?>
		<style>
			.related-articles{ display: none; }
		</style>
		<?php
	}

	if($isAjax) die();
}
