<?php
include_once("conexao.php");
$id = $_GET['id'];


$sql_com = "DELETE FROM drone WHERE id = '$id'";

if($sql_exec = mysqli_query($conn, $sql_com)){
    mysqli_close($conn);
    header("Location: app.php");
}else{
    echo'Erro de operação';
}

?>