<?php
require_once("conexao.php");

if(!isset($_SESSION)){
    session_start();
}

session_destroy();
mysqli_close($conn);
header("Location: index.php");
?>