// Set window height
$(".container").css("padding-top", $(window).height() / 5);

// On click, call php scraper script
$("#go").click(function(event) {
    event.preventDefault();

    if ($("#city").val() != "") {
        $.get("php/scraper.php?city=" + $("#city").val(), function(data) {
            if (data == "") {
                $(".alert").hide();
                $("#fail").fadeIn();
            } else {
                $(".alert").hide();
                $("#success").html(data).fadeIn();
            }
        });
    } else {
        $(".alert").hide();
        $("#nocity").fadeIn();
    }
});