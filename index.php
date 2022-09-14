<?php
    require_once("conexao.php");

    if(isset($_POST['user']) && isset($_POST['pass'])){
        if(strlen($_POST['user']) == 0){
            echo"<script>alert('Favor preencher email')</script>";

        }else if(strlen($_POST['pass']) == 0){
            echo"<script>alert('Favor preencher a senha')</script>";
        }else{
            $user = addslashes($_POST['user']);
            $pass = addslashes($_POST['pass']);

            $sql_com = "SELECT * FROM usuarios WHERE email =? AND senha=?";
            $sql_exec = $conn->prepare($sql_com);
            $sql_exec->bind_param("ss", $user, $pass);
            $sql_exec->execute();
            $get = $sql_exec->get_result();

            if(mysqli_num_rows($get) > 0){
                $user_data = $get->fetch_assoc();

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
    <link rel="shortcut icon" href="img/camera-drone.png">
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
