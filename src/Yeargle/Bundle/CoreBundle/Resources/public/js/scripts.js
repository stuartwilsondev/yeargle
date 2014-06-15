/**
 *
 */

$(document).ready(function(){

    $(function(){

        $('#old-search-list .view-old-search').click(function(event){
            $('#Yeagle_Search_search_element_text').val($(this).html());

            var searchForm =  $('form[name="Yeagle_Search"]');

            $(searchForm).submit();
        })
    });
});
