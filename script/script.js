$(document).ready(function () {
    $('#download, #github').on('mousedown', function (e) {
        switch (e.which) {
            case 1:
                var link = $(this).children().attr("href");
                window.location = link;
                break;
        }
    });
});
