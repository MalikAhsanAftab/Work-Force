function showRegistration(){
	var RForm=document.getElementById("Register_form");
		RForm.style.display="block";
	var LForm=document.getElementById("Login_form");	
	LForm.style.display="none";
}
		$('.message a').click(function(){
  			 $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
		});
  