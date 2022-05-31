<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Civitas</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#modallogin">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php" >Register</a>
      </li>
    </ul>
  </div>
</nav>
<div class="modal fade" id="modallogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Log In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class='form' action='loginbe.php' method='post'>
          <div class='form-group'>
            <label for='user'>Username</label>
            <input name='user' type='text' class='form-control' required>
            <label for='pass'>Password</label>
            <input name='pass' type='password' class='form-control' required>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Log In</button>
        </form>
      </div>
    </div>
  </div>
</div>