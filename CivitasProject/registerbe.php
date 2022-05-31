<?php
require 'dbconn.php';
$user=$_POST["user"];
$pass=$_POST["pass"];
$email=$_POST["email"];
$address=$_POST["address"];
$city=$_POST["city"];
$query=$pdo->prepare("select * from users where user=:user");
$query->execute(array(":user"=>$user));
if($query->rowCount()==0){
    $insert=$pdo->prepare("insert into users (user, password, email, address, city) values (:user, :pass, :email, :address, :city)");
    $insert->execute(array(":user"=>$user, ":pass"=>password_hash($pass,PASSWORD_BCRYPT), ":email"=>$email,":address"=>$address,":city"=>$city));
    $selectdata=$pdo->prepare("select * from users where user=:user");
    $selectdata->execute(array(":user"=>$user));
    $data=$selectdata->fetch(PDO::FETCH_ASSOC);
    $_SESSION["id"]=$data["id"];
    $_SESSION["user"]=$data["user"];
    $_SESSION["type"]=$data["type"];
    header("location: home.php");
}
else{
    header("location: index.php");
}