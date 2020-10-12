<?php

if(isset($_POST['submit'])) {
    $name =     $_POST['name'];
    $companyName =  $_POST['company'];
    $mailFrom =     $_POST['mail'];
    $subject =  $_POST['subject'];
    $message =  $_POST['message'];

    $mailTo = "koko.x.94@abv.bg"
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;


    mail($mailTo, $subject, $txt, $headers);
    header("Location: contact.html?mailsend")
}