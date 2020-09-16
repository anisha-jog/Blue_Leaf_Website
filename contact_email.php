<?php
	$email = $_POST['em'];;
    $email_subject = "Email from " . $email . ": " . $_POST['sub'];
    $email_body = $_POST['body'];;
    $to = "imaginealpha@gmail.com";
    mail($to,$email_subject,$email_body);
?>