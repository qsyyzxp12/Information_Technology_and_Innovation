$(document).ready(function(){
	$('.goButton').click(function(){
		var price = $('.chooseCompDiv select').val() * 30;
		var ret = confirm("您需付"+price+"元");
		if(ret == true)
			window.location.href='NerdsWar_showCompany.html';
		else;

	});
});
