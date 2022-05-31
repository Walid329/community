<?php require 'dbconn.php';
$vid=$_GET["vid"];
$getvdata=$pdo->prepare("select * from volunteeringopps where volunteeringopps.id=?");
$getvdata->execute([$vid]);
$vdata=$getvdata->fetch(PDO::FETCH_ASSOC);
echo "Inspecting Event '".$vdata['volunteeringopp']."'";
echo '~';
echo "<table class='table'>";
echo "<tr><th>Username</th><th>Email</th><th>Address</th><th>City</th></tr>";
$getusers=$pdo->prepare("select * from volunteerlist left join users on uid=users.id where volid=?");
$getusers->execute([$vid]);
while($users=$getusers->fetch(PDO::FETCH_ASSOC)){
    echo "<tr><td>".$users['user']."</td><td>".$users["email"]."</td><td>".$users["address"]."</td><td>".$users["city"]."</td></tr>";
}
echo "</table>";