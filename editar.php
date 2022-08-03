<?php
require_once("conexao.php");

$id = $_GET['id'];

$sql_com_query = "SELECT * FROM drone WHERE id='$id' LIMIT 1";
if($sql_exec_query = mysqli_query($conn, $sql_com_query)){

    $drone = mysqli_fetch_assoc($sql_exec_query);

    $id = $drone['id'];
    $marca = $drone['marca'];
    $modelo = $drone['modelo'];
    $valor_compra = $drone['valor_compra'];
    $valor_venda = $drone['valor_venda'];


}else{
    echo "Erro de operação";
}

?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AppDrone - Editar</title>
    <link rel="stylesheet" href="css/style_edit.css">
</head>
<body>
        <nav class="menu">
            <div class="nav-logo"><a href="app.php"><img src="img/drone2.png" alt="logo"></a></div>
            <div class="nav-links">
                <ul>
                    <li><a href="app.php">Voltar</a></li>
                    <li><a href="logout.php">Sair</a></li>
                </ul>
            </div>
        </nav>

        <main>

            <form action="atualizar.php" method="POST">
                <div class="form-items">
                    <label for="marca">Marca</label>                       
                    <select name="marca" id="marca">
                        <option value="<?php echo$marca;?>"><?php echo$marca;?></option>
                        <option value="Autel">Autel</option>
                        <option value="DJI">DJI</option>
                        <option value="FIMI">FIMI</option>
                        <option value="Hubsan">HUBSAN</option>
                        <option value="SJRC">SJRC</option>
                    </select>
                    <input type="hidden" name="id" value="<?php echo$id?>">
                    <label for="modelo">Modelo</label>
                    <input type="text" id="modelo"name="modelo" value="<?php echo$modelo?>">
                    <label for="valor_compra">Valor de Compra</label>
                    <input type="number" step="0.01" id="valor_compra" name="valor_compra" value="<?php echo$valor_compra?>">
                    <label for="valor_venda">Valor de Venda</label>
                    <input type="number" step="0.01" id="valor_venda"name="valor_venda" value="<?php echo$valor_venda?>">
                    <input type="submit" value="Salvar">
                </div>
            </form>

        </main>

</body>
</html>