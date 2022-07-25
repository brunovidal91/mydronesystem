<?php
$bd = "drones";
$servidor = "localhost";
$usuario = "root";
$senha = "";

try{
    $conn =mysqli_connect($servidor, $usuario, $senha, $bd);
}catch(Exception $e){
    echo 'Erro de banco de dados' .$e;
}

?>
