$(document).ready(function () {

    /*$("body").on("mouseover", function () {
     $('[data-toggle="tooltip"]').tooltip();
     $('[data-toggle="popover"]').popover({trigger: "hover"});
     });*/
    $('body').tooltip({
        selector: '[data-toggle=tooltip]',
        html: true
    });

    $('form').bind('reset', function () {
        $(this).find('.form-control').select2('val', null);
    });

});

var timer;

var alertClose = function (timeout) {
    if (!timeout)
        timeout = 5000;
    window.clearTimeout(timer);
    timer = setTimeout(function () {
        $('.response .alert').hide("slow", function () {
            $(this).remove();
        });
    }, timeout);
};