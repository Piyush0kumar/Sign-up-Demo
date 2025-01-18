<?php
// signup_process.php

// Capture form data
$name = $_POST['Name'];
$username = $_POST['Username'];
$email = $_POST['Email'];
$password = $_POST['Password'];
$repeatpassword = $_POST['Repeatpassword'];

// Format the data to be saved (e.g., username, email, password)
$data = "USER DETAILS : \n\nName:     $name \nUsername: $username \nEmail:    $email \nPassword: $password \n\n\n\n\n\n";

// Path to the text file where data will be stored
$file = 'user_data.txt';

// Write the data to the file (appending to the file)
file_put_contents($file, $data, FILE_APPEND);

// Redirect the user to a different page (e.g., a "thank you" page)
header("Location: project.html");
exit();
?>
