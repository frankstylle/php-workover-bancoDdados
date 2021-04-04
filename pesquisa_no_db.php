<?php

    /*$con=mysqli_connect("localhost","root","root");
    mysqli_select_db($con, "tb_cadastro");*/

    include "conexao.inc";

    $res=mysqli_query($con, "SELECT * FROM tb_cadastro");    //pesquisa no DB na tabela tb_cadastro

    $linhas=mysqli_num_rows($res);      //retorna numero total de linhas do DB
    echo "Encontrados $linhas na tabela tb_cadastro";
    
    mysqli_close($con);          // encerra conexao com banco de dados

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 28 de PHP - Conexão com banco de dados</title>
</head>
<body>
    
</body>
</html>
