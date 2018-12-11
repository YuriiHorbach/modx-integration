$(document).ready(function(){
  $('.slider').slick({
  	dots: true,
  	//dots: true;
    prevArrow: $('.prev'),
    nextArrow: $('.next'),
    

  });

//E-mail Ajax Send
	//Documentation & Example: https://github.com/agragregra/uniMail
	$("#myForm1").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Thank you!");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
});
	



 
});