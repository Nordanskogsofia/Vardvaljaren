$(document).ready(function(){
	//SIDE BAR TOGGLE, SHOW ARTICLE WHEN CLICK
	$(".sideBar").click(function(){
		var tabNr = ($(this).attr("id"))[3];
		for (var i=1; i<=5; i++)
		{
			if (i == tabNr)
			{
				$("#tab" + i).toggleClass("toggled");
				$("#articleContainer" + i).toggle();
			}
			else
			{
				$("#articleContainer" + i).hide();
				$("#tab" + i).removeClass("toggled");
			}
		}
	});
	
	//SIDE BAR HOVER WHEN NOT TOGGLED
	$(".sideBar").hover(
	function(){
		if(!($(this).hasClass("toggled"))){
			$(this).addClass("hover");
		}
	}, function(){
		$(this).removeClass("hover");
	});
	
	
	
	//MAKES PAGE REFRESH EVERY 2000 MILLISECOND.
	//var timeout = setTimeout("location.reload(true);", 2000);
	//function resetTimeout() {
	//	timeout = setTimeout("location.reload(true);", 2000);
	//}
});