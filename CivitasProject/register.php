<?php include 'include.php';?>
</head>
<body>
<div class="jumbotron">
    <h2 class='display-4'>Register</h2>
</div>
<div class='container'>
    <form class='form' action='registerbe.php' method='post'>       
        <div class='form-group'>
            <label for='email'>Email</label>
            <input name='email' type='email' class='form-control' required>
        </div>
       <div class='form-group'>
            <label for='user'>Username</label>
            <input name='user' type='text' class='form-control' required>
          </div>
          <div class='form-group'>
            <label for='pass'>Password</label>
            <input name='pass' type='password' class='form-control' required>
        </div>
        <div class='form-group'>
            <label for='address'>Address</label>
            <input name='address' type='text' class='form-control' required>
        </div>
        <div class='form-group'>
            <label for='city'>City</label>
            <input name='city' type='text' class='form-control' required>
          </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
</body>
</html>