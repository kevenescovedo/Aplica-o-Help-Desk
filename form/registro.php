<?php 


try{
session_start();
$id_user = $_SESSION["id"];
$titulo = str_replace("#","-",$_POST["titulo"]);
$categoria = str_replace("#","-",$_POST["categoria"]);
$descricao = str_replace("#","-",$_POST["descricao"]);

$linha_info = $id_user."#".$titulo."#".$categoria."#".$descricao.PHP_EOL;
$arquivo = fopen('arquivo.txt',"a");
fwrite($arquivo,$linha_info);
header("Location: abrir_chamado.php?status=success");
}

catch(Exception $e) {
    echo $e;
    header("Location: abrir_chamado.php?status=erro");
}




?>