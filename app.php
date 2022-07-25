<?php
require_once("conexao.php");

$req = $conn->query("SELECT * FROM drone");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-app.css">
 
    <title>Dashboard</title>
</head>
<body>
    <div class="main">
        <nav class="menu">
            <div class="nav-logo"><a href="#"><img src="img/drone2.png" alt="logo"></a></div>
            <div class="nav-links">
                <ul>
                    <li><a href="#" onClick="Fec.fechar()">+Drone</a></li>
                    <li><a href="#">+Venda</a></li>
                </ul>
            </div>

        </nav>

        <main>
            <table>

            <thead>
                <tr>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Valor de Compra</th>
                    <th>Valor de Venda</th>
                </tr>
            </thead>


            <tbody>
                
                        <?php while($tent = $req->fetch_array()){ ?>

                <tr>
                    <td><?php echo $tent["marca"]; ?></td>
                    <td><?php echo $tent["modelo"]; ?></td>
                    <td><?php echo $tent["valor_compra"]; ?></td>
                    <td><?php echo $tent["valor_venda"]; ?></td>
                </tr>

                    <?php } ?>
            
            </tbody>


            </table>
            
        </main>

    </div>

    <div class="modal-overlay active">
        <div class="win">
            <button onClick="Fec.fechar()">X</button>
            <h1>Cadastro de Drone</h1>
            <form action="#" method="POST">
                            
                <input type="text" name="marca" placeholder="marca..."required autofocus autocomplete="off">
                <input type="text" name="modelo" placeholder="modelo..."required autocomplete="off">
                <input type="number" name="valor_compra" placeholder="valor de compra..." required autocomplete="off">
                <input type="number" name="valor_venda" placeholder="valor de venda..."required autocomplete="off">
                <input type="submit" value="Registrar">
            </form>
        </div>
            
    </div>

<script type="text/javascript" src="js/script.js"></script>
</body>
</html>