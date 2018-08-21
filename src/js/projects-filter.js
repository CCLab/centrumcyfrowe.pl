(function () {
    'use strict';
    $(function() {
        $(document).ready(function () {

            if($('#search-for-projects').length) {

                var filterParam = getUrlParameter('filtr');
                if(filterParam === 'wyroznione'){
                    $('#projects-filter-box .starred').addClass('active');
                }

                $('#projects-filter-box .dropdown > a').click(function (e) {
                    e.preventDefault();
                    return false;
                });

                $('#projects-filter-box .submenu a').click(function (e) {

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

                    loadProjects();
                    e.preventDefault();
                });

                $('#projects-filter-box .starred').click(function (e) {
                    $(this).toggleClass('active');

                    loadProjects();
                    e.preventDefault();
                });

                $('.search-input-trigger').click(function () {
                    if($('input.search-input').val().length > 2)
                        loadProjects();
                });

                $(document).on('keydown', 'input.search-input', function(ev) {
                    if(ev.which === 13) {
                        if($('input.search-input').val().length > 2)
                            loadProjects();

                        return false;
                    }
                });

                loadProjects();
            }
        });

        function loadProjects($page = 1){

            $('.posts-loader-container').slideDown();

            var selectedAreas = [];
            var selectedStatuses = [];
            var isStarred = $('.starred').hasClass('active');

            $('#projects-filter-box .submenu.area-dropdown a.active').each(function(){
                selectedAreas.push($(this).data('value'));
            });

            $('#projects-filter-box .submenu.status-dropdown a.active').each(function(){
                selectedStatuses.push($(this).data('value'));
            });

            var filters = {
                areas: selectedAreas,
                statuses: selectedStatuses,
                starred: isStarred,
                phrase: $('input.search-input').val()
            };

            $('.articles-box').slideUp();

            jQuery.ajax({
                type: "post",
                dataType: "json",
                url: "/wp-admin/admin-ajax.php",
                data: {
                    action: "get_projects",
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
                        loadProjects($(this).data('pagenumber'));
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

