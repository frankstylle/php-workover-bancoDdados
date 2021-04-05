<?php
     // Dados coletados do formulario criado como formAula-31.html

    //  iniciando conexão com BD
    include "conexao.inc";

    // Capturando os dados do usuario no formularo via POST
    $vcod=$_POST["F_Cod"];
    $vprod=$_POST["F_Prod"];
    $vpreco=$_POST["F_Preco"];
    $vqtde=$_POST["F_Qtde"];

    // comando para a query
    $sql="INSERT INTO tb_produtos VALUES('$vcod', '$vprod', '$vpreco', '$vqtde')";

    //solicitando comando para query
    $res=mysqli_query($con, $sql);
    //armazenado quantidade de linhas inseridas no db
    $linhas=mysqli_affected_rows($con);
    //verificando se foi inserido os registros e retornando mensagem para o usuario 
    if($linhas == 1){
        echo "Registro gravado com sucesso!!";
    }else {
        echo "Falha na Gravação do registro!";
    }



    mysqli_close($con);

?>
