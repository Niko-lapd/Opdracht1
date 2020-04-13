<?php
session_start();
if (isset($_SESSION["user"]) && $_SESSION["user"]["rol"] == "administrator") {
    echo "<h1>Welkom ". $_SESSION["user"]["naam"]. "op de admingedeelte van de website</h1>";
    echo "<p><a href='index.php'>Login</a></p>";
    //alles ok
} else {
    header('location:index.php');
    //terug naar inlogscherm
}
if (isset($_SESSION["user"]) && $_SESSION["user"]["rol"] == "Gebruiker") {
    echo "<h1> je hebt geen toegang tot de website!!!</h1>";
} else {
    header('location:index.php');
    //terug naar inlogscherm
}
?>