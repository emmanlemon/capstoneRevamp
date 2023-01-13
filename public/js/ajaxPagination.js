function ajaxPaging() {
    $('.pagination a').on('click', function (e) {
        e.preventDefault();
        var url = $(this).attr('href');
        $('#initiated').load(url + ' div#initiated', null, ajaxPaging); 
    });
}
ajaxPaging();