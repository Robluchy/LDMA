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
    $xml = simplexml_load_file('xml1.xml');
    //var_dump($xml);

    foreach ($xml->item as $item) {
        echo $item->title . '<br>';
        echo $item->link . '<br>';
        echo $item->description . '<br>';
        echo $item->thumbnail . '<br>';
        echo '<br>';
    }

    ?>
</body>
</html>