function registerUser() {
	var username = document.forms["registration"]["username"].value;
	var password = document.forms["registration"]["password"].value;
	var email = document.forms["registration"]["email"].value;
	var dob = document.forms["registration"]["dob"].value;
	var phone_number = document.forms["registration"]["phone_number"].value;
	if (localStorage.getItem(username)) {
		alert("That username is already taken.");
	} else {
		localStorage.setItem(username, JSON.stringify({
			"password": password,
			"email": email,
			"dob": dob,
			"phone_number": phone_number
		}));
		alert("You have successfully registered!");
	}
}
