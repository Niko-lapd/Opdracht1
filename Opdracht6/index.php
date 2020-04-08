<!DOCTYPE html>
<html>
<head>
    <title> PHP Opdracht</title>
    <style>
        table, tr, td {
            border: solid 1px black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=school", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully<br>;
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getFile();
}

$query = "select * from cursist";
$stmt = $conn->prepare($query) or die ('Error 29');
$stmt->execute() or die ('Error 30');

echo '<table>';

while ($array = $stmt->fetch()) {
    echo '<tr>';
    echo "<td>" . $array['curistnr'] . "</td>";
    echo "<td>" . $array['naam'] . "</td>";
    echo "<td>" . $array['roepnaam'] . "</td>";
    echo "<td>" . $array['straat'] . "</td>";
    echo "<td>" . $array['postcode'] . "</td>";
    echo "<td>" . $array['plaats'] . "</td>";
    echo "<td>" . $array['geslacht'] . "</td>";
    echo "<td>" . $array['geb-datum'] . "</td>";
    echo '<tr>';
}

echo '</table>';

?>
</body>
</html>