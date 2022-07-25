<?php
require_once("conexao.php");
require_once("app.php");

$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$valor_compra = $_POST["valor_compra"];
$valor_venda = $_POST["valor_venda"];

$cad = mysqli.query($conn, "INSERT INTO drone 
    (marca, modelo, valor_compra, valor venda)
    VALUES ('$marca', '$modelo', $valor_compra, $valor_venda);");
if($cad){
    <script>alert('Dados inseridos com sucesso!')</script>;
}else{
    <script>alert('Favor inserir os dados corretamente.')</script>
}

?>