<?php

$envPath = realpath(dirname(__FILE__) . './env.ini');
$env = parse_ini_file($envPath);

try{
    $conn =mysqli_connect($env['host'], $env['user'], $env['password'], $env['database']);
}catch(Exception $e){
    echo 'Erro de banco de dados' .$e;
}

?>
