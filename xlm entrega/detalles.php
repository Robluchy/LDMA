<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Document</title>
</head>
<body>
    <?php 
    $id=$_GET['id'];
    $xml = simplexml_load_file('http://www.aemet.es/xml/municipios/localidad_'.$id.'.xml');
    $nombre = $xml->xpath('//nombre');
    
    ?>
</body>
</html>