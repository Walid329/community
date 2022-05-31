<?php include 'include.php';?>
</head>
<body>
<div class='jumbotron'>
    <h3 class='display-5'>View Your Uploaded Volunteering Events</h3>
</div>
<script>
    function inspect(id){
        $.get("updateinspect.php",{vid:id},function(data){
            dataarr=data.split('~');
            $(".modal-title").html(dataarr[0]);
            $(".modal-body").html(dataarr[1]);
        });
    }
</script>
<div class="modal fade" id="modalinspect" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      </div>
    </div>
  </div>
</div>
<div class='container'>
    <div class='jumbotron'>
        <table class='table'>
            <tr>
                <th>Event Name</th><th>Number of Volunteers</th><th>Status</th><th></th>
            </tr>
            <?php
                $getdata=$pdo->prepare("select * from volunteeringopps where uploader=?");
                $getdata->execute([$_SESSION["id"]]);
                while($data=$getdata->fetch(PDO::FETCH_ASSOC)){
                    $select=$pdo->prepare("select * from volunteerlist where volid=?");
                    $select->execute([$data["id"]]);
                    $status="";
                    if($data["status"]==0){
                        $status="Open";
                    }
                    else{
                        $status="Closed";
                    }
                    echo "<tr><td>".$data["volunteeringopp"]."</td><td>".$select->rowCount()."</td><td>".$status."</td><td><a href='#' data-toggle='modal' data-target='#modalinspect' onclick='inspect(\"".$data['id']."\")'>Inspect</a></td></tr>";
                }
            ?>
        </table>
    </div>
</div>
</body>
</html>