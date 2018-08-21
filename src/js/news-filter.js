(function () {
    'use strict';
    $(function() {
        $(document).ready(function () {

            if($('#search-for-news').length) {
                $('#news-filter-box .dropdown > a').click(function (e) {
                    e.preventDefault();
                    return false;
                });

                $('#news-filter-box .submenu a').click(function (e) {

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

                $('#news-filter-box .category').click(function (e) {
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

            $('#news-filter-box .submenu.area-dropdown a.active').each(function(){
                selectedAreas.push($(this).data('value'));
            });

            var filters = {
                areas: selectedAreas,
                phrase: $('input.search-input').val()
            };

            $('.news-box').slideUp();

            jQuery.ajax({
                type: "post",
                dataType: "json",
                url: "/wp-admin/admin-ajax.php",
                data: {
                    action: "get_news",
                    filters: filters,
                    paged: $page
                },
                complete: function (response) {
                    $('.news-box').html(response.responseText);
                    $('.posts-loader-container').slideUp();
                    $('.news-box').slideDown();

                    $('.articles-pagination a:not(.active)').click(function(e){
                        console.log("DAS");
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

