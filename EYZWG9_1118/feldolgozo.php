<!doctype html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Feldolgozó</title>

</head>
<body>
    
<?php

    if (isset ($_POST)){
    echo "<h2> Űrlap adatok:</h2>"

    $nev = $_POST ["nev"];
    $nev = $_POST ["pin"];
    $nev = $_POST ["fav_fruit"];
    $nev = $_POST ["age"];
    $nev = $_POST ["feet_size"];
    $nev = $_POST ["confidence"];

    echo "<p><strong>Név:</strong>". $nev . "</p>";
    echo "<p><strong>PIN kód:</strong>". $pin . "</p>";
    echo "<p><strong>Kedvenc gyümölcs:</strong>". $fav_fruit . "</p>";
    echo "<p><strong>Életkor:</strong>". $age . "</p>";
    echo "<p><strong>Lábméret:</strong>". $feet_size . "</p>";
    echo "<p><strong>Önbizalom:</strong>". $confidence . "</p>";
}else {
    echo "<h2>Űrlap nem lett beküldve!:</h2>"

}

?>

<a href="eyzwg9_urlap.html">Vissza az űrlapra!</a>

</body>
</html>