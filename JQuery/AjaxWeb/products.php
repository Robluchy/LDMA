<?php 
    include_once 'Connection.php';

    $id = $_GET['categoria'];

    $query = "SELECT * FROM productos WHERE categoria = $id";

    $result = $con->query($query);

    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
            echo "<div class='item w-96 h-96 grid grid-cols-2 '>";
            echo "<img src='".$row['foto']."' class='w-20'/>";
            echo "<p>".$row['nombre']."</p>";
            echo "<p>".$row['precio']."</p>";
            echo "<button onclick='addToCart(".$row['id_producto'].")'>Agregar al carrito</button>";
            echo "</div>";
        }
    } else {
        echo "0 results";
    }

?>