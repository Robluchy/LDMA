<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>

    <div class="flex justify-around">
    <button id="btn" onclick="ajaxCall(1)">Click Me To Cat 1 </button>
    <button id="btn" onclick="ajaxCall(2)">Click Me To Cat 2 </button>
    <button id="btn" onclick="ajaxCall(3)">Click Me To Cat 3 </button>
    </div>
    <div id="container"></div>
        
    <script src="introduction.js"></script>

</body>
</html>