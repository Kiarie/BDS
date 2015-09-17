function validateForm(){
	var name = document.forms["contactForm"]["name"].value;
	var email =document.forms["contactForm"]["email"].value;
	var subject =document.forms["contactForm"]["subject"].value ;
	var phone = document.forms["contactForm"]["phone"].value;

	if (!name.test(/^[a-z][A-Z]i/){
		alert("Please fill Name in Correct Format")
	}

}