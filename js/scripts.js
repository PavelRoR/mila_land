$(".l_box").click(function () {
	$(".layout").show("fold", 900);
})
$("#close").click(function () {
	$(".layout").hide("fold", 900);
})
$(".layout").click(function () {
	$(".layout").hide("fold", 900);
})