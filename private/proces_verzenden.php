<?php



if (isset($_POST['submit'])) {
    $naam = $_POST ['naam'];
    $achternaam = $_POST ['achternaam'];
    $mailFrom = $_POST ['email'];
    $sell = $_POST ['telefoon'];
    $message = $_POST ['message'];

    $subject = 'Hello';
    $to = "25165@ma-web.nl";
    $headers = "From: ".$mailFrom;
    $txt = "Je hebt een mail van ".$naam . $achternaam . ".\n\n" .$message;

    mail($to ,$subject ,$txt, $headers);
    header("Location: ../contact.php?mailsend");

}