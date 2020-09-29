$(function() {
    $('article.page').on('click', function(e) {
        $(this).find('div.job-details').hasClass('expanded') != true ? $(this).find('div.job-details').addClass('expanded') : $(this).find('div.job-details').removeClass('expanded');
        console.log($(this).find('div.job-details').hasClass('expanded'));
    });
});