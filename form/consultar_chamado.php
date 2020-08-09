<html>
<?php 

require_once("valida_entrar.php");
$arquivo = fopen("arquivo.txt","r");
$array_linha = [];
while(!(feof($arquivo))) {
 
 $array_linha[] = fgets($arquivo);

}
//print_r($array_linha);
?>

  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
      <a class="navbar-brand" href="logoff.php">
        Sair
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">
              <?php 
              foreach($array_linha as $linha) {
                //echo $linha."</br>";
                $registros = explode("#",$linha);
                //print_r($registros);
                if(isset($registros[0] ) && isset($registros[1] ) && isset($registros[2] )
                 && isset($registros[3] ) ) {
                   
                  if($registros[0] == $_SESSION["id"]) { ?>
                   
                   <div class="card mb-3 bg-light">
                <div class="card-body">
                
                  <h5 class="card-title"><?=$registros[1]?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?=$registros[2]?></h6>
                  <p class="card-text"><?=$registros[3]?></p>

                </div>
              </div>
              <?php
                 }
                 

              }
              else {
                continue;
              }
            }
               ?>
              
             

             

              <div class="row mt-5">
                <div class="col-6">
                <a class="btn btn-lg btn-warning btn-block" href="home.php" >Voltar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>