<!DOCTYPE html>
<html>
<head>
    <title> PHP Opdracht1</title>
    <style>
    table, tr, td {
        border: solid black 1px;
    }
    </style>
</head>
<body>

<table border="1">
    <?php
    $zwemclubs = array(
        "de spartlkuikens" => 25,
        "de waterbuffels" => 32,
        "plonsmederin" => 11,
        "bommetje" => 23
    );
    foreach ($zwemclubs as $clubnaam => $zwemmers) {

        echo '<tr>';

        // CLUBNAMEN
        echo "<td>$zwemclubs</td>";

        //ZWEMMERSAANTALLEN
        echo "<td>$zwemmers</td>";

        //PLAATJES
        echo '<td>';
        $plaatjes = floor($zwemmers / 5);
        for ($i = 0; $i < $plaatjes; $i++) {
            echo "<img src=\"//unsplash.it/50\" alt=\"zuempi\">";
        }
        echo '</td>';

        echo '</tr>';
    }
    ?>
</table>
</body>
</html>