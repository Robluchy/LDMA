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
<body>

</body>
</html>





<?php
$name=$_GET['name'];
$data = file_get_contents("https://pokeapi.co/api/v2/pokemon/$name");
$josn = json_decode($data, true);

    echo '
    <div class="w-screen h-screen flex justify-center items-center">
          <style>
          button {
          background-color: #6617cb;
          background-image: linear-gradient(315deg, #6617cb 0%, #cb218e 74%);
          box-shadow: 0 0 0 0 #ec008c, 0.2rem 0.2rem 30px #6617cb;
          }
          button:hover {
          box-shadow: 0 0 0 0 #ec008c, 0.2rem 0.2rem 60px #6617cb;
          }
       </style>
       <div class="container mx-auto max-w-xs rounded-lg overflow-hidden shadow-lg my-2 bg-white">
          <div class="relative mb-6">
             <img class="w-full" src="'.$josn["sprites"]["other"]["dream_world"]["front_default"].'">

             <div class="text-center absolute w-full" style="bottom: -30px">
                <div class="mb-10">
                   <p class="text-white tracking-wide uppercase text-lg font-bold">Witch</p>
                   <p class="text-gray-400 text-sm">@witch_forever</p>
                </div>
                <div class="flex justify-center">
                    <h3 class="text-white text-2xl font-bold">' . $josn["name"] . '</h3>
                </div>
             </div>
          </div>
          <div class="py-10 px-6 text-center tracking-wide grid grid-cols-3 gap-6">
            <div class="">
                <p class="text-lg">'.$josn["stats"]["0"]["stat"]["name"].'</p>
                <p class="text-gray-400 text-sm">'.$josn["stats"]["0"]["base_stat"].'</p>
             </div>
            <div class="">
                <p class="text-lg">'.$josn["stats"]["1"]["stat"]["name"].'</p>
                <p class="text-gray-400 text-sm">'.$josn["stats"]["1"]["base_stat"].'</p>
             </div>
            <div class="">
                <p class="text-lg">'.$josn["stats"]["2"]["stat"]["name"].'</p>
                <p class="text-gray-400 text-sm">'.$josn["stats"]["2"]["base_stat"].'</p>
             </div>
            <div class="">
                <p class="text-gray-400 text-sm">type</p>
                <p class="text-lg">'.$josn["types"]["0"]["type"]["name"].'</p>
             </div>
            <div class="">
                <p class="text-gray-400 text-sm">moves</p>
                <p class="text-lg">'.$josn["moves"]["0"]["move"]["name"].'</p>
            </div>
            <div class="">
                <p class="text-gray-400 text-sm">ability</p>
                <p class="text-lg">'.$josn["abilities"]["0"]["ability"]["name"].'</p>
            </div>
          </div>
       </div>
    </div>';

?>
 