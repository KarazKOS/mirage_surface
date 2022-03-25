<?php

if (isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $emailInfo = $_POST['emailInfo'];
    $phoneNumber = $_POST['phoneNumber'];
    $comments = $_POST['comments'];
    
    $mailTo = "ykaraiscos@yahoo.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have recieved an e-mail from ".$firstName.".\n\n".$comments;

    mail($mailTo, $emailInfo, $txt, $headers);
    header("Location: index.html?mailsend");
}