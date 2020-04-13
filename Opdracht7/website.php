<?php
session_start();
if (isset( $_SESSION["user"])) {
    echo "<h1>Welkom ". $_SESSION["user"]["naam"]. "op de gebruikers gedeelte van de website</h1>";
    echo "<p><a href='index.php'>Login</a></p>";
    //alles ok
} else {
    header('location:index.php');
    //terug naar inlogscherm
}
?>