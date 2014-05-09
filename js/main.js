

$(".navbar-nav li a").click(function() {

	$(this).parents("li").addClass("active");
	$(".navbar-nav li").not($(this).parents("li")).removeClass("active");	
})