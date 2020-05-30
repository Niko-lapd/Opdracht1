<?php

session_start();

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
} else {
    $user = [];
}

if (isset($user['rol'])) {
    $role = $user['rol'];
} else {
    $role = 'Unknown';
}

$role = strtolower($role);

if ($role === 'administrator') {
    echo "<h1>Welkom ". $_SESSION["user"]["naam"]. "op de admingedeelte van de website</h1>";
    echo "<p><a href='index.php'>Login</a></p>";
} else if ($role === 'gebruiker') {
    echo "<h1> a a sahbi niet komen zo praten met je dikke hoofd</h1>";
} else {
    header('location:index.php');
}
