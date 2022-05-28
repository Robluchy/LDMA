<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<div class="grid grid-cols-6 gap-5 p-20 ">
<?php

    $name=$_GET["type"];
    $data = file_get_contents("https://pokeapi.co/api/v2/type/$name");
    $josn = json_decode($data, true);

    echo ' <div
    class="col-span-6 mt-5 bg-opacity-50 border border-gray-100 rounded shadow-lg cursor-pointer bg-gradient-to-b from-gray-200 backdrop-blur-20 to-gray-50 md:col-span-3 lg:col-span-2 ">
';
      foreach ($josn["pokemon"] as $pokemons) {
        echo '
        <div class="flex flex-row px-2 py-3 mx-3">
            <div class="flex flex-col mt-1 mb-2 ml-4">
                <div class="text-sm text-gray-600">' . $pokemons["pokemon"]["name"]. '</div>
            </div>
        </div>';
      }


?>
</div>

<body>
<footer class="fixed w-full bottom-0  bg-gray-900 text-center lg:text-left">

      <div class="text-white text-center p-4">Dionny © 2022 Copyright</div>

  </footer>
</body>

</html>