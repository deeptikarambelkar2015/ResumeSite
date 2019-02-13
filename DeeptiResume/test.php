<?php

$servername = "localhost";
$username = "deepti";
$password = "amit20jan";
$dbname = "deeptiDB";

$first_name = $_POST['firstname']; // required
$last_name = $_POST['lastname']; // required
$email_from = $_POST['email']; // required
$telephone = $_POST['telephone']; // not required
$comments = $_POST['message']; // required

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO msgTable(firstname, lastname, email,phone,message)
VALUES ('$first_name', '$last_name', '$email_from','$telephone','$comments')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>