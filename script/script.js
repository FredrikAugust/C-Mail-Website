$(document).ready(function () {
    $('#download').on('click', function () {
        var link = $('#download a').attr('href');
        window.location = link;
    });
    $('#github').on('click', function () {
        var link = $('#github a').attr('href');
        window.location = link;
    });
});
