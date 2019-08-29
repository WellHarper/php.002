
<?php  ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Well.Com</title>
</head>
<body>
    <div class="container">
       <h1>Consulta de Clientes</h1>
       <hr>
    </div>
    <div>
        <form method="" action="">
           <label for="">nome:</label>
            <input name="nome" type="text">
            <input type="submit">
            
       
         
            
        </form>
      
        
        <hr>
        
          
        <?php 
      //1
        if(isset($_GET['nome'])) {
        $nome = $_GET['nome'];
      //2
        include_once 'conexao.php';
      //3
        $sql = "SELECT * FROM cliente WHERE nome like '{$nome}%'";    
      //4
        result = mysqli_query($con, $sql);
            
    
            
               
    }
?>     

       
       <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome:</th>
      <th scope="col">Email:</th>
      <th scope="col">Estado Civil:</th>
      <th scope="col">Sexo:</th>
    </tr>
  </thead>
  <tbody>
   
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>rinha</td>
    </tr>
    <br>
    
  </tbody>
</table>
        
        
    </div>
</body>
</html>