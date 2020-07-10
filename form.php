<?php
 
if($_POST) {
    $visitor_name = "";
    $visitor_email = "";
    $visitor_mobile = "";
    $visitor_address = "";
    $visitor_message = "";
     
    if(isset($_POST['visitor_name'])) {
        $visitor_name = filter_var($_POST['visitor_name'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['visitor_email'])) {
        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
        $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
    }
     
    if(isset($_POST['visitor_mobile'])) {
        $visitor_mobile = filter_var($_POST['visitor_mobile'], FILTER_SANITIZE_STRING);
    }

    if(isset($_POST['visitor_address'])) {
        $visitor_address = filter_var($_POST['visitor_address'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['visitor_message'])) {
        $visitor_message = htmlspecialchars($_POST['visitor_message']);
    }
     
    $inquiry .= "Full Name: " . $visitor_name . "\r\n";
    $inquiry .= "Email Address: " . $visitor_email . "\r\n";
    $inquiry .= "Mobile Number: " . $visitor_mobile . "\r\n";
    $inquiry .= "Address: " . $visitor_address . "\r\n";
    $inquiry .= "Message: " . $visitor_message . "\r\n";
    
    $subject = "Enquiry from  website";
    $recipient = "bywebdevelopers@gmail.com";
    
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $visitor_name . "<". $visitor_email .">\r\n";
     
    if(mail($recipient, $subject, $inquiry, $headers)) {
        $success = "Thank you! We will get in touch with you soon."; 
    } else {
        $success = "Message Sending Failed, try again."; 
    }
     
} else {
    $success = "Something went wrong."; 
}
 
?>