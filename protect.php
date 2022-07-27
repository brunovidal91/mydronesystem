<?php
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['email'])){
    die('Você não tem acesso...');
}

?>