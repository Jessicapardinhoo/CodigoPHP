<?php
    $host = "localhost";
    $host = "root";
    $usuario = "";
    $base = " codigo1408";
    $porta = 3306;

    $conn = mysqli_connect($host, $usuario, $senha, $base, $porta);
    
    if($conn){
        echo "<h2>Connectou<h2>";
    }else{
        echo " Erro: " .mysqli_connect_error();
    }


    ?>