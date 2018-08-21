(function () {
    'use strict';
    $(function() {
        $(document).ready(function () {

            if($('#search-for-articles').length) {

                var filterParam = getUrlParameter('filtr');
                if(filterParam){
                    $('#articles-filter-box a.category[data-slug="'+filterParam+'"]').addClass('active');
                }

                $('#articles-filter-box .dropdown > a').click(function (e) {
                    e.preventDefault();
                    return false;
                });

                $('#articles-filter-box .submenu a').click(function (e) {

                    var filterTop = $(this).closest('.dropdown').find('.filter-top');

                    //if "All" option is selected
                    if ($(this).data('value') === -1) {

                        //Clear selection
                        $(this).closest('.dropdown').find('.submenu a').removeClass('active');
                        filterTop.find('span').text(filterTop.data('filterdefault'));

                    } else if($(this).hasClass('active')){

                        $(this).removeClass('active');
                        filterTop.find('span').text(filterTop.data('filterdefault'));

                    }else{

                        //Clear selection
                        $(this).closest('.dropdown').find('.submenu a').removeClass('active');

                        $(this).addClass('active');
                        filterTop.find('span').text($(this).text());

                    }

                    loadArticles();
                    e.preventDefault();
                });

                $('#articles-filter-box .category').click(function (e) {
                    $(this).toggleClass('active');

                    loadArticles();
                    e.preventDefault();
                });

                $('.search-input-trigger').click(function () {
                    if($('input.search-input').val().length > 2)
                        loadArticles();
                });

                $(document).on('keydown', 'input.search-input', function(ev) {
                    if(ev.which === 13) {
                        if($('input.search-input').val().length > 2)
                            loadArticles();

                        return false;
                    }
                });

                loadArticles();
            }
        });

        function loadArticles($page = 1){

            $('.posts-loader-container').slideDown();

            var selectedAreas = [];
            var selectedStatuses = [];
            var selectedCategories = [];

            $('#articles-filter-box .submenu.area-dropdown a.active').each(function(){
                selectedAreas.push($(this).data('value'));
            });

            $('#articles-filter-box a.category.active').each(function(){
                selectedCategories.push($(this).data('value'));
            });

            var filters = {
                areas: selectedAreas,
                categories: selectedCategories,
                phrase: $('input.search-input').val()
            };

            $('.articles-box').slideUp();

            jQuery.ajax({
                type: "post",
                dataType: "json",
                url: "/wp-admin/admin-ajax.php",
                data: {
                    action: "get_articles",
                    filters: filters,
                    paged: $page
                },
                complete: function (response) {
                    $('.articles-box').html(response.responseText);
                    $('.posts-loader-container').slideUp();
                    $('.articles-box').slideDown();

                    $('.articles-pagination a:not(.active)').click(function(e){
                        $('html, body').animate({
                            scrollTop: 0
                        });
                        loadArticles($(this).data('pagenumber'));
                        e.preventDefault();
                    });
                },
                error: function (err) {
                    console.log(err);
                }
            })
        }

    });
}(jQuery));

