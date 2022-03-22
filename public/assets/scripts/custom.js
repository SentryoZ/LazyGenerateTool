$(function () {

    "use strict";
    $(document).ready(function () {
        // $('html').addClass('is-animating');
        const options = {
            containers: ["#app_content"],
            linkSelector: 'a:not([data-no-swup])',
            animateHistoryBrowsing: true,
        };
        const swup = new Swup(options);

        init();
        // reinit
        document.addEventListener("swup:contentReplaced", function () {
            init();
        });
    });

    function init() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.vertical-nav-menu a').on('click', function (){
            $('.vertical-nav-menu a').removeClass('mm-active');
            $(this).addClass('mm-active');
        })
    }
});
