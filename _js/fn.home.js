$(document).ready( function(){
	$('.pegaTitle').val($('.pegaTitle').attr("title"));
 	$('.pegaTitle').css("color","#999");
	$('.pegaTitle').focus(function () {
		if ($(this).val() == $(this).attr("title")) {
		 	$(this).css("color","#000");
			$(this).val("");
		}
	}).blur(function () {
		if ($(this).val() == "") {
			$(this).val($(this).attr("title"));
		 	$(this).css("color","#999");

		}
	});

	$('.pegaTitle2').val($('.pegaTitle2').attr("title"));
 	$('.pegaTitle2').css("color","#999");
	$('.pegaTitle2').focus(function () {
		if ($(this).val() == $(this).attr("title")) {
		 	$(this).css("color","#000");
			$(this).val("");

		}
	}).blur(function () {
		if ($(this).val() == "") { 
			$(this).val($(this).attr("title"));
		 	$(this).css("color","#999");
		}
	});

	$('.pegaTitle3').val($('.pegaTitle3').attr("title"));
	$('.pegaTitle3').css("color","#999");
	$('.pegaTitle3').focus(function () {
		if ($(this).val() == $(this).attr("title")) {
		 	$(this).css("color","#000");
			$(this).val("");
		}
	}).blur(function () {
		if ($(this).val() == "") {
			$(this).val($(this).attr("title"));
		 	$(this).css("color","#999");
		}
	});

	$('.pegaTitle4').val($('.pegaTitle4').attr("title"));
	$('.pegaTitle4').css("color","#999");
	$('.pegaTitle4').focus(function () {
		if ($(this).val() == $(this).attr("title")) {
		 	$(this).css("color","#000");
			$(this).val("");
		}
	}).blur(function () {
		if ($(this).val() == "") {
			$(this).val($(this).attr("title"));
		 	$(this).css("color","#999");
		}
	});
	$('.pegaTitle5').val($('.pegaTitle5').attr("title"));
	$('.pegaTitle5').css("color","#999");
	$('.pegaTitle5').focus(function () {
		if ($(this).val() == $(this).attr("title")) {
		 	$(this).css("color","#000");
			$(this).val("");
		}
	}).blur(function () {
		if ($(this).val() == "") {
			$(this).val($(this).attr("title"));
		 	$(this).css("color","#999");

		}
	});

	$('.pegaTitle6').val($('.pegaTitle6').attr("title"));
	$('.pegaTitle6').css("color","#999");
	$('.pegaTitle6').focus(function () {
		if ($(this).val() == $(this).attr("title")) {
		 	$(this).css("color","#000");
			$(this).val("");
		}
	}).blur(function () {
		if ($(this).val() == "") {
			$(this).val($(this).attr("title"));
		 	$(this).css("color","#999");

		}
	});

	$('.pegaTitle7').val($('.pegaTitle7').attr("title"));
	$('.pegaTitle7').css("color","#999");
	$('.pegaTitle7').focus(function () {
		if ($(this).val() == $(this).attr("title")) {
		 	$(this).css("color","#000");
			$(this).val("");
		}
	}).blur(function () {
		if ($(this).val() == "") {
			$(this).val($(this).attr("title"));
		 	$(this).css("color","#999");

		}
	});

	$('.pegaTitle8').val($('.pegaTitle8').attr("title"));
	$('.pegaTitle8').css("color","#999");
	$('.pegaTitle8').focus(function () {
		if ($(this).val() == $(this).attr("title")) {
		 	$(this).css("color","#000");
			$(this).val("");
		}
	}).blur(function () {
		if ($(this).val() == "") {
			$(this).val($(this).attr("title"));
		 	$(this).css("color","#999");

		}
	});
	$('.pegaTitle9').val($('.pegaTitle9').attr("title"));
	$('.pegaTitle9').css("color","#999");
	$('.pegaTitle9').focus(function () {
		if ($(this).val() == $(this).attr("title")) {
			$(this).css("color","#000");
			$(this).val("");
		}
	}).blur(function () {
		if ($(this).val() == "") {
			$(this).val($(this).attr("title"));
		 	$(this).css("color","#999");
		}
	});

	$('.pegaTitle10').val($('.pegaTitle10').attr("title"));
	$('.pegaTitle10').css("color","#999");
	$('.pegaTitle10').focus(function () {
		if ($(this).val() == $(this).attr("title")) {
		 	$(this).css("color","#000");
			$(this).val("");
		}
	}).blur(function () {
		if ($(this).val() == "") {
			$(this).val($(this).attr("title"));
		 	$(this).css("color","#999");

		}
	});
	
	$('ul#banner').innerfade({
		speed: 1000,
		timeout: 8000,
		type: 'sequence',
		containerheight: '245px'
	});
});




