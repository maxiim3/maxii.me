<?php
 if ($_POST['submit']) {

    $name     = $_POST['nom'];
    $mailFrom = $_POST['mail'];
    $message  = $_POST['content'];
    $subject  = "New message from ".$name;

    $mailTo   = "contact@maxii.me";
    $headers  = "From: ".$mailFrom;
    $txt = "You have reseived an email from ".$name.".\n\n".$message;
    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailSent");
 }
 else echo"nope";