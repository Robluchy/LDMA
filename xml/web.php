<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    
    <?php

    $xml = simplexml_load_file('http://www.aemet.es/xml/municipios/localidad_35004.xml');
    
    echo "Ciudad: <a href='".$xml->origen->enlace."'> $xml->nombre   </a>" ;
    
    ?>

</body>
</html>