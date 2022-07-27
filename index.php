<?php
    require_once("conexao.php");

    if(isset($_POST['user']) && isset($_POST['pass'])){
        if(strlen($_POST['user']) == 0){
            echo"<script>alert('Favor preencher email')</script>";

        }else if(strlen($_POST['pass']) == 0){
            echo"<script>alert('Favor preencher a senha')</script>";
        }else{
            $user = $_POST['user'];
            $pass = $_POST['pass'];

            $sql_com = "SELECT * FROM usuarios WHERE email = '$user' AND senha='$pass'";
            $sql_exec = $conn->query($sql_com);
            if(mysqli_num_rows($sql_exec) > 0){
                $user_data = $sql_exec->fetch_assoc();

                if(!isset($_SESSION)){
                    session_start();
                }

                $_SESSION['email'] = $user_data['email'];
                $_SESSION['senha'] = $user_data['senha'];

                header("Location: app.php");
            }
        }

        
    }
    

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Drones - Login Page</title>
</head>
<body>
    <section>
        <div class="container">
            <div class="login-logo"><img src="img/drone2.png" alt="logo"></div>
            <div class="login">
                <form action="#" method="POST">
                    <input type="text" name="user" placeholder="E-mail" required autofocus autocomplete="off"/>
                    <input type="password" name="pass" placeholder="Senha" required autocomplete="off"/>
                    <input type="submit" name="submit" value="Entrar"/>
                    
                </form>
            </div>
        </div>
    </section>
</body>
</html>
