$(function() {
    openItem();


});

// window.history.pushState('', 'New Page Title', '/logisadsan');

function openItem() {
    $('article.page').on('click',function(e) {
        e.stopPropagation();
        $(this).find('div.job-details').hasClass('expanded') != true ? $(this).find('div.job-details').addClass('expanded clicked') : $(this).find('div.job-details').removeClass('expanded clicked');


        window.history.pushState('', 'New Page Title', '/'+$(this).find('a.open_item').data('url'));
    });
}

function closeItems(){
    $('div.job-details.expanded').removeClass('expanded');
}
