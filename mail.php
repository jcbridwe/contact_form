<?php 
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = ($_POST['subject']);
        $message = ($_POST['message']);
    
        $from = 'Demo Contact Form';
        $to = 'justintime_289@hotmail.com';
        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
    
        if (!$_POST['name']) {
    	    $errName = 'Please enter your name';
        }
        
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    	    $errEmail = 'Please enter a valid email address';
        }
        
        if (!$_POST['phone']) {
    		$errPhone = 'Please enter your phone number';
    	}
    	if (!$_POST['subject']) {
    		$errSubject = 'Please enter the subject';
    	}
    	if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
    	}
	
if (!$errName && !$errEmail && !$errPhone && !$errSubject && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
	}
}
    }
?>