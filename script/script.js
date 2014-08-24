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

(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-49950351-2', 'auto');
ga('send', 'pageview');