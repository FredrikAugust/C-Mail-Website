$(document).ready(function () {
    $('#download, #github').on('mousedown', function (e) {
        if (e.which === 1) {
            var link = $(this).children().attr("href");
            window.location = link;
            break;
        }
    });
});
