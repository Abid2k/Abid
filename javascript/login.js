function login() {
    
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    
    var xhttp = new XMLHttpRequest();

    
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            
            if (this.responseText.includes("success")) {
                window.location.href = "dashboard.php";
            }
            
            else {
                document.getElementById("error").innerHTML = this.responseText;
            }
        }
    };

    
    xhttp.open("POST", "login.php", true);

    
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    
    xhttp.send("username=" + username + "&password=" + password);
}
