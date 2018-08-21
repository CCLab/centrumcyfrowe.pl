(function () {
    'use strict';
    $(function() {
        $(document).ready(function () {

            if($('#search-for-tags').length) {

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

            }
        });
        
        loadArticles();
        function loadArticles($page = 1){

            $('.posts-loader-container').slideDown();    

            var filters = {
                phrase: $('input.search-input').val(),
                tag: $('#tag-slug').val()
            };

            $('.tags-box').slideUp();

            jQuery.ajax({
                type: "post",
                dataType: "json",
                url: "/wp-admin/admin-ajax.php",
                data: {
                    action: "get_tags_entries",
                    filters: filters,
                    paged: $page
                },
                complete: function (response) {
                    $('.tags-box').html(response.responseText);
                    $('.posts-loader-container').slideUp();
                    $('.tags-box').slideDown();

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

