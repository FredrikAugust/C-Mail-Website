$(document).ready(function () {
    // Fix for buttons on IE and FF
    $('#download, #github').on('mousedown', function (e) {
        switch (e.which) {
            case 1:
                var link = $(this).children().attr("href");
                window.location = link;
                break;
        }
    });
});
