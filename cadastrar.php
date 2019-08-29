<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>
   
   <h1>CADASTRO DE CLIENTE</h1>
   
   <form action="gravar.php" method="Post">
  <div class="form-group col-md-6">
    <label for="formGroupExampleInput">NOME:</label>
    <input type="text" name="nome" class="form-control" placeholder="Nome">
  </div>
  <div class="form-group col-md-6">
    <label for="formGroupExampleInput2">E-MAIL</label>
    <input type="email" name="email" class="form-control" placeholder="Email">
  </div>
  
   <div class="form-group col-md-4">
      <label for="inputEstado">Estado Civil</label>
      <select name="estadocivil" id="inputEstado" class="form-control">
        <option value="" disabled selected >Escolha</option>
        <option value="Solteiro" >Solteiro</option>
        <option value="Casado"> Casado</option>
        <option value="Viuvo"> Viuvo</option>
        <option value="Divorciado"> Divorciado</option>
      </select>
    </div>
    
            <label>Sexo: </label>
            <input type="radio" name="sexo"  value="M"> Masculino
            <input type="radio" name="sexo" value="F"> Feminino
            
    <br>
                    
    <input type="submit">        
    
</form>
    
</body>
</html>