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
        const element = document.querySelector('form');
        element.addEventListener('submit', event => {
            event.preventDefault();
            sendAjax(event.target);
        });
    }
});
function sendAjax(event){
    $.ajax({
        method: "POST",
        url: event.getAttribute('action'),
        data: new FormData(event),
        contentType: false,
        processData: false,
        success: function (data) {
            Toast.fire({
                icon: data.status,
                title: data.message
            }).then(function (){
                if(!!data.url) window.location.href = data.url;
                if(!!data.callback) window[data.callback](data.data);
            });

        },
        error: function (data) {
            Toast.fire({
                icon: 'error',
                title: data.responseJSON.message
            })
            $(".btn-submit").prop('disabled', false);
        }
    })

}
