<?php
// Connect to the database
$host = 'localhost';
$username = 'your_username';
$password = 'your_password';
$dbname = 'your_database';

$conn = mysqli_connect($host, $username, $password, $dbname);
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

// Get the user input from the registration form
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$dob = mysqli_real_escape_string($conn, $_POST['dob']);
$phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);

// Check if the username already exists in the database
$query = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    die("Username already exists. Please choose a different username.");
}

// Insert the user information into the database
$query = "INSERT INTO users (username, password, email, dob, phone_number) VALUES ('$username', '$password', '$email', '$dob', '$phone_number')";
if (mysqli_query($conn, $query)) {
    echo "Registration successful!";
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
