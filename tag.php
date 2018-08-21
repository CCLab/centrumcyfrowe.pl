<?php get_header() ?>
<input type="hidden" id="search-for-tags" />
<?php 
    $tag = get_queried_object(); 
?>
<input type="hidden" id="tag-slug" value="<?php echo $tag->slug ?>"/>
<main>
    <div class="container">


         <div class="row"> <!-- sociale -->

            <div class="col-md-2 col-sm-2 col-xs-12 social-media-box vertical">
                <a href="#" data-url="<?php the_permalink() ?>" data-description="<?php the_title ?>" data-type="facebook" class="prettySocial"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                <a href="#" data-url="<?php the_permalink() ?>" data-description="<?php the_title ?>" data-via="centrumcyfrowe" data-type="twitter" class="prettySocial"><i class="fa fa-twitter" aria-hidden="true"></i></a> 
            </div>

            <div class="col-md-8 col-sm-8 col-xs-12"> <!-- tytuł -->
                <h1><?php single_tag_title() ?></h1>
            </div>
        </div>

        <div class="row filter-box" id="tags-filter-box">
                <div class="col-md-12">

                    <ul class="filter-list">
                        <li><a href="#">Filtr</a></li>
                      
                    </ul>

                    <div class="search-box">
                        <div class="separator"><div></div></div>
                        <input type="text" placeholder="Szukaj w Czytelni" class="search-input" name="projekty-search">
                        <a href="#" class="search-input-trigger"><i id="projects-search" class="fa fa-search"></i></a>
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

            <div class="tags-box">
            </div>
        </div>
        
    </div>

</main>

<?php get_footer() ?>