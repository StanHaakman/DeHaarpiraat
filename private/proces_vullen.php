<?php

// POST-ARRAY UITLEZEN
$name = $_POST['name'];
$brand = $_POST['brand'];
$price = $_POST['price'];


// DATA IN DATABASE STOPPEN
// 1. VERBINDING MAKEN MET DE DATABASE
$dbc = mysqli_connect('localhost' , 'root' ,'root' ,'DeHaarpiraat') or die ('error connecting');
// 2. OPDRACHTEN (QUERY) SCHRIJVEN VOOR DE DATABASE
$query = "INSERT INTO product VALUES (0,'$name','$brand','$price')";
// 3. QUERY UITVOEREN
$result = mysqli_query($dbc,$query) or die ('error query');
//4. VERBINDING VERBREKEN
mysqli_close($dbc);


// BEVESTIGEN DAT DATA IN DATABASE STAAT
if ($result) {
    echo 'De volgende gegevens zijn toegeboegd aan de dateabase:<br>';
    echo $name . '<br>';
    echo $brand . '<br>';
    echo $price . '<br>';
    echo '<a href="index.php">Klik hier op terug te gaan naar de hopepage</a><br><br>';
}else{
    echo 'Sorry, er is iets misgegaan. probeer het later opnieuw <br>';
}
