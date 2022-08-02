<?php
$bd = "heroku_d52fd739477431f";
$servidor = "us-cdbr-east-06.cleardb.net";
$usuario = "b82bdb03d85ccb";
$senha = "19cc502d";

try{
    $conn =mysqli_connect($servidor, $usuario, $senha, $bd);
}catch(Exception $e){
    echo 'Erro de banco de dados' .$e;
}

?>
