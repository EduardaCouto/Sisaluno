<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>

<style>

.pg {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
    background-color: #086e50;
  }
  .button {
    background-color: #ffffff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    margin: 10px;
    border-radius: 5px;
    height: 50px;
    width: 200px;
    text-decoration: none;
    transition: background-color 0.3s ease;
  }
  
  .button:hover {
    background-color:#086e50 ;
  }

</style>

<?php include_once ("header.html"); ?>
   
<div class="pg">

 <div>
    <button class="button"><a href="cadprofessor.php">cadastrar</a>
</button>
</div>

<div>
    <button class="button"><a href="listaprof.php">lista</a></button>
</div>
</div>

</body>
</html>