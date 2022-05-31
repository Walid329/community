<?php include 'include.php';?>
</head>
<body>
<div class="jumbotron">
    <h3 class='display-5'>Create a Volunteering Opportunity</h2>
</div>

<div class='container'>
    <div class='jumbotron'>
    <form class='form' action='volunteerbe.php' method='post'>       
        <div class='form-group'>
            <label for='name'>Event Name</label>
            <input name='name' type='text' class='form-control' required>
        </div>
        <div class='form-group'>
            <label for='desc'>Event Description</label>
            <textarea name='desc' class='form-control' rows='3' required></textarea>
        </div>
        <div class='form-group'>
            <label for='enddate'>Date and Time of Event</label>
            <input type='date' name='enddate1' class='form-control' required><input type='time' name='enddate2' class='form-control' required>
        </div>
        <button type="submit" class="btn btn-primary">Create Event</button>
    </form>
</div>
</div>
</body>
</html>