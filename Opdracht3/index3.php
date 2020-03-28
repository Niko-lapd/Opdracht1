<!DOCTYPE html>
<html>
<head>
    <title> PHP Opdracht1</title>
    <style>

    </style>
</head>
<body>
<?php
$leeftijd = 66;
$bedrag = 10;
if ($leeftijd > 65) {
    $bedrag = $bedrag * 0.5;
}
if ($bedrag <= 12) {
    $bedrag = $bedrag * 0.5;
}
if ($bedrag <3){
    $bedrag = 0;
}

echo $bedrag;
?>
</body>
</html>