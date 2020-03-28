<!DOCTYPE html>
<html>
<head>
    <title> PHP Opdracht</title>
    <style>

    </style>
</head>
<body>
<?php
$input = 6;
function check($input) {
    if ($input % 3) {
        return true;
    } else {
        return false;
    }
}
if (check(3)) echo "Returned true!";
?>
</body>
</html>