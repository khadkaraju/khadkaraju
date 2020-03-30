<?php

    if (isset($POST['name']) && isset($_POST['email'])){
        
        $name = $_POST['name'];
        $visitor_email = $_POST['email'];
        $to = "rajukhadka374@gmail.com";
        $email_subject = "New Form Submission";
          
        $message = $_POST['message'];

        $email_from = $_POST['email'];
        
        $email_body = "User Name: $name.\n".
                        "User Email: $visitor_email.\n".
                            "User Message: $message.\n".

        
        $headers = "Form: $email_form \r\n";
        $headers .="Reply-To: $visitor_email\r\n";
        $headers .="MINE-Version: 1.0\r\n";
        $headers .="Content-type: text/html; charset-utf-8";


        $send = mail($to,$email_subject,$email_body,$headers);
        if($send){
            echo'<br>';
            echo'Thaknks for contacting me. I will be with you shortly.';
        }else{
            echo'error';
        }
        }
        header("Location: index.html");


    }
?>