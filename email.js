/*----------------------------------------------------*/
/*	contact form
------------------------------------------------------*/

$(document).ready(function () {
    $("#contact-form").submit(function (event) {
        event.preventDefault();
        var name = $("#name").val();
        var phone = $("#phone").val();
        var address = $("#address").val();
        var message = $("#amount").val();

        var data = 'name=' + name + '&phone=' + phone + '&address=' + address + '&amount=' + amount;

        $("#submit-button").hide();
        $("#form-loader").fadeIn();

        $.ajax({
            type: "POST",
            url: "send.php",
            data: data,
            success: function (msg) {
                if (msg == "OK") {
                    $("#form-loader").fadeOut();
                    // $('#message-warning').hide();
                    // $('#contact-form').fadeOut();
                    // $('#message-success').fadeIn();
                } else {
                    $("#form-loader").hide();
                    // $("#submit-button").show();
                    // $('#message-warning').html(msg);
                    // $('#message-warning').fadeIn();
                }
            }
        });
    });
});