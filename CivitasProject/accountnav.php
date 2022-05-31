<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="home.php">Civitas</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="volunteeringopps.php">View Volunteering Opportunities</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="createvolunteering.php">Create a Volunteering Opportunity</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="viewuploadedevents.php">View Your Submitted Volunteering Events</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="logout.php">Log out of <?php echo $_SESSION["user"];?></a>
      </li>
    </ul>
  </div>
</nav>