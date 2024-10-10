<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table style="border-collapse:collapse">
        <tr>
            <th>indirizzo</th>
            <th>metri quadri</th>
            <th>prezzo al metro quadro</th>
            <th>prezzo totale</th>
        </tr>
        <tr>
    <?php
        $casa = array("indirizzo" => "Via del botteghino 196A", "metriQuadri" => 72.8, "prezzoAlMetroQuadro" => 2500.5);
        $casa["prezzoTotale"] = $casa["metriQuadri"] * $casa["prezzoAlMetroQuadro"];
        foreach ($casa as $key => $value) {
            echo "<td> $value </td>";
        }
    ?> 
    </tr>
    </table>
</body>
</html>