<?php
require_once("conexao.php");
require_once("app.php");




if(isset($_POST['marca']) AND isset($_POST['modelo']) AND isset($_POST['valor_compra']) AND isset($_POST['valor_venda'])){

    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $valor_compra = $_POST['valor_compra'];
    $valor_venda = $_POST['valor_venda'];

    if(strlen($marca) != 0 AND strlen($modelo) != 0 AND strlen($valor_compra) != 0){
        $sql_com = "INSERT INTO drone (marca, modelo, valor_compra, valor_venda) VALUES ('$marca', '$modelo', '$valor_compra', '$valor_venda')";
        $sql_exec = mysqli_query($conn, $sql_com) or die('Erro Bando de dados' .mysqli_error());
        mysqli_close($conn);
        header("Location: app.php");
    }
    else{echo"<script>alert('Preencher todas os campos.')</script>";}

    
}



?>
