<!doctype html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Feldolgozólap</title>
</head>
<body>

<?php
    if (!empty($_POST)) {
        echo "<h2> Űrlap adatok:</h2>";

        $nev = $_POST["nev"];
        $telefonszam = $_POST["telefonszam"];
        $email = $_POST["email"];
        $valasztas = $_POST["valasztas"];
        $üzenet = $_POST["üzenet"];
        $nyilatkozat = isset($_POST["nyilatkozat"]) ? "Elfogadva" : "Nem elfogadva";

        echo "<p><strong>Név:</strong> " . $nev . "</p>";
        echo "<p><strong>Telefonszám:</strong> " . $telefonszam . "</p>";
        echo "<p><strong>Email-cím:</strong> " . $email . "</p>";
        echo "<p><strong>Választott Téma:</strong> " . $valasztas . "</p>";
        echo "<p><strong>Üzenet:</strong> " . $üzenet . "</p>";
        echo "<p><strong>Nyilatkozat:</strong> " . $nyilatkozat . "</p>";
    } else {
        echo "<h2>Űrlap nem lett beküldve!</h2>";
    }
?>

<a href="urlap.html">Vissza az űrlapra!</a>

</body>
</html>

