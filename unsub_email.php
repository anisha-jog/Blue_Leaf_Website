<?php
    $email = $_POST['em'];;
    $email_subject = "UNSUBSCRIBE";
    $email_body = $_POST['name'] + " with account number " + $_POST['acc_num'] + " wishes to unsubscribe from the " + $_POST['plan'] + " plan.";
    $to = "imaginealpha@gmail.com";
    mail($to,$email_subject,$email_body);
?>