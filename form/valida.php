<?php 
session_start();
$auth = false;

$array = array(
    array(
    "id" => 1,
   "email"=> "Kevenescovedo1916@gmail.com",
    "user"=> "Keven",
    "senha" => "Kes@1003"
    ),
    array(
        "id" => 2,
        "email"=> "admin@gmail.com",
        "user"=> "admin",
         "senha" => "admin"
    ),
    array(
        "id" => 3,
        "email" => "user@gmail.com",
        "user" => "user",
         "senha" => "user"
    ),
    array(
        "id" => 4,
        "email"=> "123@gmail.com",
        "user"=> "123",
         "senha" => "123"
    ),
);
foreach($array as $user) {
print($user["email"]);
echo  "</br>";
echo $_POST["email"];

if($_POST["email"] == $user["email"] && $_POST["senha"] == $user["senha"]) {
   
    $auth = true;
   //$_SESSION["id"] = $user["id"];
   //$_SESSION["nome"] = $user["user"];
   $id = $user["id"];
   $name = $user["user"];
  
   
  
}

}
if($auth) {
    echo "user existe";
  
    
    $_SESSION["logado"] =  true;
    $_SESSION["name"] =  $name;
    $_SESSION["id"] =  $id;
   
    
  header("Location: home.php");

    
}
else {
    $_SESSION["logado"] =  false;
  header("Location: index.php?login=erro");
}

?>