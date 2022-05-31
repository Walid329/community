<?php require 'dbconn.php';
$insert=$pdo->prepare("insert into volunteerlist (volid, uid, status) values (?,?,0)");
$insert->execute([$_GET["id"],$_SESSION["id"]]);
header("location: home.php");