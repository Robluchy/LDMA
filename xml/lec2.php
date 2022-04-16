<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $id = $_GET['id'];
    $xml = simplexml_load_file("https://www.aemet.es/xml/municipios/localidad_".$id.".xml");

    foreach ($xml->articulo as $item) {
        echo $item->texto . '<br>';
        echo '<br>';

        echo "atributo: " . $item['color'] . '<br>';
        echo "articulo: " . $xml->articulo[3]->texto;
    }

    ?>
</body>
</html>