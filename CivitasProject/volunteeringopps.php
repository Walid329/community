<?php include 'include.php'?>
<script>
    function redirect(id){
        window.location.replace("apply.php?id="+id);
    }
</script>
</head>
<body>
    <div class='jumbotron'>
        <h2 class='display-5'>View all of the Available Volunteering Opportunities</h2>
    </div>
    <div class='container'><div class='jumbotron'>
    <table class='table'>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Date</th>
            <th>Uploader</th>
            <th></th>
        </tr>
        <?php
            $getdata=$pdo->query("select description,volunteeringopp,enddate,user, volunteeringopps.id as vid from volunteeringopps left join users on uploader=users.id where volunteeringopps.status=0");
            while($data=$getdata->fetch(PDO::FETCH_ASSOC)){
                $checkvol=$pdo->prepare("select * from volunteerlist where uid=? and volid=?");
                $checkvol->execute([$_SESSION["id"],$data['vid']]);
                if($checkvol->rowCount()!=1){
                    echo "<tr><td>".$data['volunteeringopp']."</td><td>".$data["description"]."</td><td>".$data["enddate"]."</td><td>".$data["user"]."</td><td><button class='btn btn-primary btn-sm' onclick='redirect(".$data["vid"].")'>Sign Up</button></td></tr>";
                }
            }
        ?>
    </table></div></div>
</body>
</html>