<?php
 $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "rajukhadka374@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";


// if(isser($_POST['submit'])){


//     $name = $_POST['name'];
//     $subject = $_POST['subject'];
    
//     $visitor_email = $_POST['email'];
//     $message = $_POST['message'];

//     $email_from = $_POST['email'];
//     $email_subject = "New Form Submission";
//     $email_body = "User Name: $name.\n".
//                     "User Email: $visitor_email.\n".
//                         "User Message: $message.\n".

//     $to = "rajukhadka374@gmail.com";
//     $headers = "Form: $email_form \r\n";
//     $headers .="Reply-To: $visitor_email\r\n";
//     mail($to,$email_subject,$email_body,$headers);
//     header("Location: index.html");

//     mail();

// }
?>