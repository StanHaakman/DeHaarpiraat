<?php



if (isset($_POST['submit'])) {
    $voor = $_POST ['naam'];
    $achter = $_POST ['achternaam'];
    $name = $voor + $achter;
    $mailFrom = $_POST ['email'];
    $sell = $_POST ['telefoon'];
    $message = $_POST ['message'];

    $mailTo = "25165@ma-web.nl";
    $headers = "From: ".$mailFrom;
    $txt = "Je hebt een mail van ".$name. ".\n\n" .$message;

    mail($mailTo, $txt, $headers);
    header("Location: ../contact.php?mailsend");

}