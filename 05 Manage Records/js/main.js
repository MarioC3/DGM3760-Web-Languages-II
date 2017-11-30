$(document).ready(function () {
    $('.remove').click(function () {
        $('.modal').addClass('is-active')
    });
    $('.modal-close').click(function () {
        $('.modal').removeClass('is-active')
    });
    $('.modal-background').click(function () {
        $('.modal').removeClass('is-active')
    });
});

