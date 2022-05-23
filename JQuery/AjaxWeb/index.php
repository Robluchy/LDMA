<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    
    <div class="flex justify-around ">

        <div class="item w-96 h-96"> 
            <?php 
                include_once 'Connection.php';

                $sql = "SELECT * FROM categorias";

                $result = $con->query($sql);

                if ($result->num_rows > 0) {

                    while($row = $result->fetch_assoc()) {
                        echo "<button id='btn' onclick='ajaxCall(".$row['id'].")'>".$row['nombre']." </button><br>";
                    }
                } else {
                    echo "0 results";
                }
            ?>
        </div>


        <div id="container" class="item w-96 h-96">  </div>
        
    </div>

    <script src="JS.js"></script>
</body>
</html>