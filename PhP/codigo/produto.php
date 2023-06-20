<?php
    include("anderson.php"); ## faz a inclusão do banco

    ## Verifica se a requisição é do tipo POST
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['nome']; 
        $descricao = $_POST['descricao']; 
        $estoque = $_POST['estoque']; 
        $custo = $_POST['custo']; 
        $preco = $_POST['preco'];
    }

    $bancodedados = "SELECT COUNT(pro_id) FROM produtos WHERE pro_nome = '$nome'"; #checa para ver se tem algum nome
    $resultado_db = mysqli_query($link, $bancodedados); // faz a consulta no banco

    while ($tbl = mysqli_fetch_array($resultado_db)){
        $contagem = $tbl[0]; // Armazena o resultado da contagem de registros
        if($contagem == 0){ // Se não houver registros com o mesmo nome
            $bancodedados = "INSERT INTO produtos(pro_nome, pro_descricao, pro_preco, pro_custo, pro_estoque) VALUES('$nome', '$descricao', '$preco', '$custo','$estoque')"; // Consulta SQL para inserir os dados na tabela produtos
            mysqli_query($link, $bancodedados); // Executa a consulta no banco de dados
        }
        else{
            ## Não Faz Nada
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="newestilo.css">
    <title>CADASTRAR PRODUTOS</title>
</head>
<body>
    <div>
    <form action="produto.php" method="post">
        <label>NOME DO PRODUTO</label>
        <input type="text" name="nome">
        <br>
        <label>DESCRICAO</label>
        <input type="text" name="descricao">
        <br>
        <label>ESTOQUE</label>
        <input type="number" name="estoque">
        <br>
        <label>CUSTO</label>
        <input type="decimal" name="custo">
        <br>
        <label>PRECO</label>
        <input type="decimal" name="preco">
        <br>
        <input type="submit" value="CADASTRAR PRODUTO">
    </form>
    </div>
</body>
</html>