<div class="row">
	<?php 
		if (get_post_type() === 'projekty') {
			$odstep = " col-md-offset-0 col-sm-offset-0 col-xs-offset-0";
			$rozmiar_kolumny = 'col-md-12 col-sm-12 col-xs-12';
		}
		else {
			$odstep = " col-md-offset-2 col-sm-offset-2 col-xs-offset-0";
			$rozmiar_kolumny = 'col-md-8 col-sm-8 col-xs-12';
		}
	 ?>
	<div class="<?php echo $rozmiar_kolumny . $odstep ?>">
		<?php the_sub_field('tresc_kolumny') ?>
	</div>

	<?php if(have_rows('przypisy')): ?>
	<div class="col-md-2">
		<?php while (have_rows('przypisy')) : the_row(); ?>
			<div class="margin-note">
					<?php the_sub_field('tresc_przypisu') ?>
			</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>

	<?php if(get_page_template_slug() === 'template-landing-page.php' && !$isBanner): $isBanner = true ?>
		 <div class="col-md-2 col-sm-12 col-xs-12 hidden-sm hidden-xs">
            <a href="<?php the_field('link_bannera') ?>">
                <div class="banner banner-desktop">
                    <?php if (get_field('co_zawiera_banner') === 'tekst') : ?>
                    <div class="placeholder">
                        <span>
                            <?php the_field('banner-text') ?>
                        </span>
                    </div>
                    <?php elseif (get_field('co_zawiera_banner') === 'obrazek') : ?>
                    <img src="<?php echo get_field('banner-image')['url'] ?>" alt="<?php echo get_field('banner-image')['title'] ?>">
                    <?php endif; ?>
                </div>
            </a>
		</div>
	<?php endif ?>

</div>