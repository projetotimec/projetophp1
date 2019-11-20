<?php
    $servername = "34.95.213.167";
    $username = "root";
    $password = "maximus";
    $database = "projeto_integrador";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (mysqli_connect_error($conn)) {
        echo ("problemas para conectar ao banco, verifique os dados: " . mysqli_connect_error());
    } else {
        
    }
    
?>