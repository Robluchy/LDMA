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
<div class="grid grid-cols-6 gap-5 p-20 ">

<h1 class="text-2xl font-bold text-center">Choose your type of pokemon</h1>


<?php
$data = file_get_contents("https://pokeapi.co/api/v2/type");
$josn = json_decode($data, true);


foreach ($josn["results"] as $type) {
    echo '
    <div class="col-span-6 mt-5 bg-opacity-50 border border-gray-100 rounded shadow-lg cursor-pointer bg-gradient-to-b from-slate-800 backdrop-blur-20 to-gray-500 md:col-span-3 lg:col-span-2 ">
            <div class="flex flex-row py-8 mx-3">
                <a href="pokemon.php?type='.$type["name"].'">
                    <div class="flex flex-col mt-1 mb-2 ml-1">
                        <div class="text-sm text-center text-gray-50">  <a href="pokemon.php?type='.$type["name"].'">' . $type["name"] . '</a>
                        </div>
                    </div>
                </a>
            </div>
    </div>';
}
?>
 