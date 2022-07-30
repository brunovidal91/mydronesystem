<?php
require_once("conexao.php");

$id = $_POST['id'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$valor_compra = $_POST['valor_compra'];
$valor_venda = $_POST['valor_venda'];


$sql_com = "UPDATE drone SET marca = '$marca', modelo = '$modelo', valor_compra = '$valor_compra', valor_venda = '$valor_venda' WHERE id = '$id'";
if($sql_exec = mysqli_query($conn, $sql_com)){
   header("Location: app.php");
}else{

    echo"Erro de operação";
}


?>