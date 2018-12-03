$(function() {
    $('li.nav-toggle').click(function () {
        $(this).children('ul').toggle('100');
        $(this).children('span').children('i.add').toggleClass('rotate-element', '');
    });
});