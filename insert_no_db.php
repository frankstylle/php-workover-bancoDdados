<?php

    /*$con=mysqli_connect("localhost","root","root");
    mysqli_select_db($con, "tb_cadastro");*/

    include "conexao.inc";

    $vnome="Maria";
    $vuser="mariafb";
    $vsenha="maria123";
    $vmail="superMaria#gmail.com";
    $vtel="43996109054";
    $vst="1";
    $vobs="Vozona";

    $sql="INSERT INTO tb_cadastro VALUES (NULL, '$vnome', '$vuser', '$vsenha', '$vmail', '$vtel', '$vst', '$vobs')";
    $res=mysqli_query($con, $sql);

    $num=mysqli_affected_rows($con);        //affected_rows usa quando for usado um comando INSERT
    echo "$num registro inserido.";

    mysqli_close($con);          // encerra conexao com banco de dados

?>
