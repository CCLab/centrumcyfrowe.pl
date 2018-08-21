
<?php
$parent_id  = $post->post_parent;
if($parent_id){
	?>
	<ol class="breadcrumb">
		<!--<li><a href="/">Centrum Cyfrowe</a></li>-->
		<li><a href="<?php the_permalink($parent_id ) ?>"><?php echo get_the_title($parent_id ) ?></a></li>
	</ol>
<?php } ?>