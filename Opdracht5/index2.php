<!DOCTYPE html>
<html>
<head>
    <title> PHP Opdracht</title>
    <style>

    </style>
</head>
<body>
<form method="post" >
    <select name="apen" multiple>
        <option value="aap1">Klaas de aap</option>
        <option value="aap2">Cloris de aap</option>
        <option value="aap3">Truus de aap</option>
    </select>

    <input type="submit" name="knop">
</form>
<?php
 function image() {
     //echo "<img src='img/apen/".$_POST['apen'].".jpg'>";
     foreach ($_POST['apen'] as $aap) {
         echo "<img src='img/apen/".$aap.".jpg'>";
     }
 }
?>
</body>
</html>