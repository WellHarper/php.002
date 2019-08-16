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

    
    $con = mysqli_connect("localhost","root", "", "well_com");
    
    $sql = "INSERT INTO cliente VALUES(null, '{$nome}', '{$email}', '{$estadocivil}', '{$sexo}')";

   if (mysqli_query($con, $sql)) {
       
       echo("Gravado com sucesso");
       
       
   }

    else {
        
        
        echo("boa noite bruno");
        
    }

















?>