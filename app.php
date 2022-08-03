<?php
require_once("protect.php");
require_once("conexao.php");
require_once("ger.php");

$req = $conn->query("SELECT *, FORMAT(valor_compra, 2, 'de_DE') AS valor_compra_formated, FORMAT(valor_venda, 2, 'de_DE') AS valor_venda_formated  FROM drone");

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
            <div class="painel-total">
                <div class="total-compra">
                    <Label><?php
                        $sql_com_total = "SELECT FORMAT(SUM(valor_compra), 2, 'de_DE') AS valor_total FROM drone";
                        $sql_exec_total = mysqli_query($conn, $sql_com_total);
                        $total = mysqli_fetch_assoc($sql_exec_total);
                        echo 'R$ '.$total['valor_total'];
                        ?> 
                    </Label>
                </div>
                <div class="total-venda">
                <Label><?php
                        $sql_com_total = "SELECT FORMAT(SUM(valor_venda), 2, 'de_DE') AS valor_total FROM drone";
                        $sql_exec_total = mysqli_query($conn, $sql_com_total);
                        $total = mysqli_fetch_assoc($sql_exec_total);
                        echo 'R$ '.$total['valor_total'];
                        ?> 
                    </Label>
                </div>
            </div>
            <div class="nav-links">
                <ul>
                    <li><a href="#" onClick="Fec.fechar()">+Drone</a></li>
                    <li><a href="#">+Venda</a></li>
                    <li><a href="logout.php">Sair</a></li>
                </ul>
            </div>

        </nav>

        <main>
        <div class="tabela">
            <table>

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Valor de Compra</th>
                        <th>Valor de Venda</th>
                        <th>Ação</th>
                    </tr>
                </thead>

                    <tbody>
        
                        <?php while($tent = $req->fetch_array()){ ?>

                        <tr id="row-table">
                            <td><?php echo $tent["id"]; ?></td>
                            <td><?php echo $tent["marca"]; ?></td>
                            <td><?php echo $tent["modelo"]; ?></td>
                            <td><?php echo $tent["valor_compra"]; ?></td>
                            <td><?php echo $tent["valor_venda_"]; ?></td>
                            <td><?php echo"<a href='deletar.php?id=".$tent['id']."'>Excluir</a> | <a href='editar.php?id=".$tent['id']."'>Editar</a>" ?></td>
                        </tr>

                        <?php } ?>

                    </tbody>
    
            </table>
        </div>
            
            
        </main>

    </div>

    <div class="modal-overlay active">
        <div class="win">
            <div class="cabec-sair">
                <button onClick="Fec.fechar()">Sair</button>
            </div>
            <div class="cabec-h1">
                <h1>Cadastro de Drone</h1>
            </div>
    
            <form action="#" method="POST">
                            
                <select name="marca">
                    <option value="Autel">Autel</option>
                    <option value="DJI">DJI</option>
                    <option value="FIMI">FIMI</option>
                    <option value="Hubsan">HUBSAN</option>
                    <option value="SJRC">SJRC</option>
                </select>
                <input type="text" name="modelo" placeholder="modelo..."required autocomplete="off">
                <input type="number" step="0.01" name="valor_compra" placeholder="valor de compra..." required autocomplete="off">
                <input type="number" step="0.01" name="valor_venda" placeholder="valor de venda..." autocomplete="off">
                <input type="submit" value="Registrar">
            </form>
        </div>
            
    </div>

   

<script type="text/javascript" src="js/script.js"></script>
</body>
</html>