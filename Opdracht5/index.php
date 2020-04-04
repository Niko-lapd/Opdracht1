<!DOCTYPE html>
<html>
<head>
    <title> PHP Opdracht</title>
    <style>

    </style>
</head>
<body>
<form action=”resultaat.php” method=”GET”>
    Inlognaam <input type=”text” name=”inlognaam” value=””>
    Wachtwoord <input type=”password” name=”wachtwoord” value=””>
    <input type=”submit” name=”knop” value=”verstuur”>
</form>
<?php
print_r($_GET);
?>
</body>
</html>