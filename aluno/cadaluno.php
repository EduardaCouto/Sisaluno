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
 
<div class="t1"><p>FORMULÁRIO DE CADASTRO</p></div> 

     <div class="conteudo">
        <form class="form" method="post" action="crudaluno.php">

<div>
     <label for="">nome </label>
     <input type="text" name="nome" required value="" >
     <label for="">idade</label>
     <input type="text" name="idade">
     </div> 

     <div>
     <label for="">endereco</label>
     <input type="text" name="endereco"> 
     <label for="">datadenascimento</label>
     <input type="date" name="datadenascimento"> 
     </div>
     
     
     
     <div>
     <label for="">estatus</label>
     <input type="text" name="estatus">
     <label for="">matricula</label>
     <input type="text" name="matricula">
     
 
    </div>
              
          

            
            <div class="button"><button type="submit" class="btn">
            <b>Casdastar</b>
            </button>
            </div>
            </form>
     

     <button class="button"><a href="index.php">voltar</a></button>

</body>
</html>