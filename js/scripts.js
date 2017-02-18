$(function() {
    $(".l_box").click(function() {
        $(".layout").slideDown(900)
    });
    $("#close").click(function() {
        $(".layout").slideUp(900)
    })
});

$(function() {
    $("#else").click(function() {
        $(".second_testim").slideDown(400);
        $("#else").fadeOut(100);

    })
});

$(function() {
    $(".slides_container").slick({
        autoplay: true,
        dots: true
    });
    $(".slider-item").zoom()
});