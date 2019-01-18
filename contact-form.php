<?php 
    $name = $_POST['name'];
    $visitor_email = $_Post['email'];
    $message = $_POST['message'];
    
    $email_form = 'biworks.io@gmail.com';
    $email_subject = "Contacting";
    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";
    $to = "biworks.io@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers = "Reply-To: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.html");
