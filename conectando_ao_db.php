<?php

    $con=mysqli_connect("localhost","root","root");
    mysqli_select_db($con, "tb_cadastro");

    //include "conexao.inc";

    mysqli_close($con);          // encerra conexao com banco de dados

?>
