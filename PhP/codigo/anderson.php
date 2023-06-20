<?php
    #LOCALIZA O IP DO BANCO OU NOME DO COMPUTADOR
    $servidor = "localhost";
    #NOME DO BANCO
    $banco = "cybercafe";
    #USUARIO DO BANCO
    $usuario = "admin";
    #SENHA DE USUARIO
    $senha = "123";
    #CONEXÃO OU LINK DE ACESSO
    $link = mysqli_connect($servidor,$usuario,$senha,$banco);
    ?>