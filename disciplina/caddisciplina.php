<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php include_once ("header.html"); ?>
 
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
    margin-bottom: 20px;
   
    
}

button {
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 200px;
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

<form method="GET" action="crudisciplina.php">

     <label for="">NOME DISCIPLINA </label>
     <input type="text" name="nomedisciplina" required value="" placeholder="NOME" >     
     <label for="">CH</label>
     <input type="text" name="ch" placeholder="CH"> 
     <label for="">SEMESTRE</label>
     <input type="text" name="semestre" placeholder="SEMESTRE">
     <label for="">IDPROFESSOR</label>
     <input type="text" name="idprofessor" placeholder="ID">
     
    

     <input type="submit" name="cadastrar" value="cadastrar">

     </form> 
     </div> 

     <button class="button"><a href="indexd.php">voltar</a></button>
            
     
            <?php include_once ("footer.html"); ?>
    

</body>
</html>