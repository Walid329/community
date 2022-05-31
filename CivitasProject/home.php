<?php include 'include.php';?>
</head>
<body>
    <br>
    <div class='container'>
        <div class='jumbotron' style='text-align:center'>
            <?php echo "<h2 class='display-4'>Welcome ".$_SESSION["user"]."!</h2>"?>
            <hr>
            <h2>Your Volunteering Jobs</h2>
            <table class='table'>
                <tr>
                <th>Name</th><th>Description</th><th>Date</th>
                </tr>
                <?php
                    $getvollist=$pdo->prepare("select * from volunteerlist left join volunteeringopps on volid=volunteeringopps.id where uid=:id and volunteeringopps.status!=1");
                    $getvollist->execute(array(":id"=>$_SESSION["id"]));
                    while($vollist=$getvollist->fetch(PDO::FETCH_ASSOC)){
                        echo "<tr><td>".$vollist["volunteeringopp"]."</td><td>".$vollist["description"]."</td><td>".$vollist["enddate"]."</td></tr>";
                    }
                    $getexpiredvollist=$pdo->prepare("select * from volunteerlist left join volunteeringopps on volid=volunteeringopps.id where uid=:id and volunteeringopps.status=1");
                    $getexpiredvollist->execute(array(":id"=>$_SESSION["id"]));
                    while($expired=$getexpiredvollist->fetch(PDO::FETCH_ASSOC)){
                        echo "<tr class='table-secondary'><td>".$expired["volunteeringopp"]."</td><td>".$expired["description"]."</td><td><p style='font-weight:bold'> Expired at ".$expired["enddate"]."</p></td></tr>";
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>