<?php
require 'dbconn.php';
$user=$_POST["user"];
$pass=$_POST["pass"];
$query=$pdo->prepare("select * from users where user=:user");
$query->execute(array(":user"=>$user));
if($query->rowCount()==1){
    $checkpass=$pdo->prepare("select * from users where user=:user");
    $checkpass->execute(array(":user"=>$user));
    $cpass=$checkpass->fetch(PDO::FETCH_ASSOC);
    if(password_verify($pass,$cpass["password"])){
        $_SESSION["id"]=$cpass["id"];
        $_SESSION["user"]=$cpass["user"];
        $_SESSION["type"]=$cpass["type"];
        header("location: home.php");
    }
    else{
       header("location: index.php");
    }
}
else{
   header("location: index.php");
}