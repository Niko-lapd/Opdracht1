<!DOCTYPE html>
<html>
<head>
    <title> PHP Opdracht</title>
    <style>

    </style>
</head>
<body>
<form action=”resultaat.php” method=”GET”>
    <div>
    Email Address:   <input type="email" name="email" id="mailtje" minlength="8" required>
    </div>
    <div>
    Inlognaam <input type=”text” name=”inlognaam” id="inlog" minlength="8" required>
    </div>
    <div>
    Wachtwoord (8 karakters minimum)  <input type=”password” name=”wachtwoord” id="pass" minlength="8" required>
    </div>
    <div>
    <input type=”submit” name=”knop” value=”verstuur”>
    </div>

</form>
<?php

?>
</body>
</html>