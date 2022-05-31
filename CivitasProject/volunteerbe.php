<?php require 'dbconn.php';

$name=$_POST['name'];
$desc=$_POST["desc"];
$enddate=$_POST["enddate1"]." ".$_POST["enddate2"].":00";
$insert=$pdo->prepare("insert into volunteeringopps (volunteeringopp, description, enddate, uploader, status) values (?,?,?,?,0)");
$insert->execute([$name, $desc, $enddate, $_SESSION["id"]]);

header("location: home.php");