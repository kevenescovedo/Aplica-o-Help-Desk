<?php 
session_start();
if(!(isset($_SESSION["logado"])) || $_SESSION["logado"] == false) {
 header("Location: index.php?login=erro2");
 echo "não está logado";
}
?>