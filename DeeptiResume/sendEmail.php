<?php

   
    $first_name = $_POST['firstname']; // required
 
    $last_name = $_POST['lastname']; // required
 
    $email_from = $_POST['email']; // required
 
    $telephone = $_POST['telephone']; // not required
 
    $comments = $_POST['message']; // required
 

    $email_message = "Form details below.\n\n";

    $email_message .= "First Name: ".$first_name."\n";
 
    $email_message .= "Last Name: ".$last_name."\n";
 
    $email_message .= "Email: ".$email_from."\n";
 
    $email_message .= "Telephone: ".$telephone."\n";
 
    $email_message .= "Comments: ".$comments."\n";



    $email_to = "deepti.karambelkar2015@gmail.com";
 
    $email_subject = $first_name. " ".$last_name." "."sent message from dpkarambelkar.com";


// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
if(mail($email_to, $email_subject, $email_message, $headers)) 
        { 
            //if mail is sent to the SMTP server successfully, echo 'thank you'.
            echo "Thank you for contacting. I will get back to you soon.";
        }
        else 
        { 
            //otherwise, tell the user it did not go through.
            echo "The site is experiencing some technical problems.Regret the inconvenience";
        }

?>