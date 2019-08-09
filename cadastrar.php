<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>
   
   <h1>CADASTRO DE CLIENTE</h1>
   
   <form>
  <div class="form-group col-md-6">
    <label for="formGroupExampleInput">NOME:</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Input exemplo">
  </div>
  <div class="form-group col-md-6">
    <label for="formGroupExampleInput2">E-MAIL</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Outro input">
  </div>
  
   <div class="form-group col-md-4">
      <label for="inputEstado">Estado Civil</label>
      <select id="inputEstado" class="form-control">
        <option selected>Solteiro</option>
        <option>Casado</option>
        <option>Viuvo</option>
        <option>Divorciado</option>
      </select>
    </div>
    
            <label>Sexo: </label>
            <input type="radio" value="M"> Masculino
            <input type="radio" value="F"> Feminino
    
</form>
    
</body>
</html>