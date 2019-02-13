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
    die("The site is experiencing some technical problems.Regret the inconvenience");
} 

$sql = "INSERT INTO msgTable(firstname, lastname, email,phone,message)
VALUES ('$first_name', '$last_name', '$email_from','$telephone','$comments')";

if ($conn->query($sql) === TRUE) {
    echo "Thank you for contacting. I will get back to you soon.";
} else {
    echo "The site is experiencing some technical problems.Regret the inconvenience";
}

$conn->close();
?>