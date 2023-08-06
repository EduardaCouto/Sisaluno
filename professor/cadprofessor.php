<?php include_once ("header.html"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<style>
  .t1 {
    background-color:#086e50;
    margin-top: 10px;
    align-items: center;
    padding: 10px;
    border-radius: 20px;
  }
  label {
    display: block;
    margin-bottom: 5px;
   
    
}

button {
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 300px;
}

button {
    margin-top: 10px;
    background-color:#1a6850 ;
    color: #fff;
    cursor: pointer;
}
.conteudo{
    display: flex;
    justify-content: center;
    align-items: center;
   
}
input {
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 200px;
}

</style>



 
  <div class="t1"> </div> 

  <div class="conteudo">     

<form method="GET" action="crudprofessor.php">

     <label for="">NOME </label>
     <input type="text" name="nome" required value="" placeholder="SEU NOME" >
     <label for="">CPF</label>
     <input type="text" name="cpf" placeholder="CPF"  minlength="11" maxlength="11" required>
     
     <label for="">IDADE</label>
     <input type="number" name="idade" placeholder="IDADE" min="18" max="50" required> 
     <label for="">DATA DE NASCIMENTO</label>
     <input type="date" name="datadenascimento"> 
  
     <label for="">ENDEREÇO</label>
     <input type="text" name="endereco" placeholder="SEU ENDERÇO"> 
     <label for="">STATUS</label>
     <input type="text" name="estatus" placeholder="STATUS">
     
    

     <input type="submit" name="cadastrar" value="cadastrar">

     </form> 
     </div> 

     <button class="button"><a href="indexp.php">voltar</a></button>
            
     


                       <?php include_once ("footer.html"); ?>
     

    

</body>
</html>