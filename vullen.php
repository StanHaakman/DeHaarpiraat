<?php
require 'header.php';
require 'navbar.php';
?>

<form method="post" action="/private/proces_vullen.php">
    <label>name: <input name="name" /></label><br>
    <label >brand: <input name="brand"></label><br>
    <label>price: <input type="double"  name="price"></label><br>
    <input type="submit"    name="submit" />
</form>