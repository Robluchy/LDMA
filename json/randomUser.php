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


<div class="bg-yellow-400 h-screen overflow-hidden flex items-center justify-center">
    <div class="bg-white lg:w-5/12 md:6/12 w-10/12 shadow-3xl">
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
        
    </div>
</div>

<!--     
    <php
    $datos = file_get_contents("https://randomuser.me/api/?nat=gb");
    $datos = json_decode($datos, true);

    foreach ($datos[""] as $alumno) {

    }

    ?> -->

</body>
</html>