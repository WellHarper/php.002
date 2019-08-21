<?php

    echo("Olá mundo");

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $estadocivil = $_POST["estadocivil"];
    $sexo = $_POST["sexo"];

    echo("<br>");
    echo("<br>");
    echo($nome);
    echo("<br>");
    echo($email); 
    echo("<br>");
    echo($estadocivil); 
    echo("<br>");
    echo($sexo); 
    echo("<br>");

    
   include_once 'conexao.php';
    
    $sql = "INSERT INTO cliente VALUES(null, '{$nome}', '{$email}', '{$estadocivil}', '{$sexo}')";



    $msg = (mysqli_query($con, $sql))
        ? "Gravado com Sucesso"
        : "ERRO";

    header("location:msg.php?variavel=".$msg);
            
            







  /* if (mysqli_query($con, $sql)) {
       
       header("localhost:msg.php","gravado com sucesso")
       
       
   }

    else {
        
        
        echo("ERROU");
        
    }



*/














?>