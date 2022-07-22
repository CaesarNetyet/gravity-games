<?php 

$conn = mysqli_connect ("localhost", "root", "", "gravity_games");


// Verificar si la conexión se realizó correctamente

if (isset($conn)){
    echo "Connected to database";
}
else {
    echo "Failed to connect to database";
}
?>
