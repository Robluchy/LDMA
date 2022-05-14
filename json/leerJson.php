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
    $archivo = "alumnos.json";
    $datos = file_get_contents($archivo);
    $datos = json_decode($datos, true);
    echo "<pre>";
    print_r($datos);
    echo "</pre>";

    foreach ($datos["alumnos"] as $alumno) {
        
        echo $alumno["nombre"] . "<br>";
        echo $alumno["apellido"] . "<br>";
    }

    ?>
 
    haciendo uso de la web que devuelve un JSON con datos de usuarios aleatorios
    Web: https://randomuser.me/
    Crea una ficha con los datos del usuario que te devuelve la web. Debe tener un diseño aceptable,
    puedes basarte en la ficha de la home.
    Puedes usar la llamada a: https://randomuser.me/api/?results=1
        
    <br>    <br>    <br>    <br>    <br>    <br>

    <?php
        $data = file_get_contents("https://randomuser.me/api/?results=1&nat=ES");
        $datos = json_decode($data, true);
        foreach ($datos["results"] as $user) {

            echo "<img src='" . $user["picture"]["large"] . "'>";
            echo $user["name"]["first"] . "<br>";
            echo $user["name"]["last"] . "<br>";
            echo $user["location"]["city"] . "<br>";
            echo $user["location"]["state"] . "<br>";
            echo $user["location"]["postcode"] . "<br>";
            echo $user["location"]["country"] . "<br>";
            echo $user["email"] . "<br>";
            echo $user["dob"]["date"] . "<br>";
            echo $user["dob"]["age"] . "<br>";
            echo $user["cell"] . "<br>";
            echo "DNI " .$user["login"]["uuid"] . "<br>";
        }
        ?>

</body>
</html>