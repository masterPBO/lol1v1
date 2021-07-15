<?php
include("auth_session.php");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  <link rel="icon" href="https://templates.pingendo.com/assets/Pingendo_favicon.ico">
  <title>Leagueskill.1v1</title>
  <meta name="description" content="Free Bootstrap 4 Pingendo Smke template single landing page team">
  <meta name="keywords" content="Pingendo smke free template bootstrap 4">
  <!-- CSS dependencies -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="colorful.css">
  <!-- Script: Navbar on-top -->
  <script src="js/navbar-ontop.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="home.php"><b>Leagueskill.1v1<br></b></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar3SupportedContent" aria-controls="navbar3SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar3SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item mx-2 mb-2 my-md-0">
          </li>
        </ul>
        <a class="btn navbar-btn btn-outline-light" href="logout.php">Log out<br></a>
        <a class="btn navbar-btn btn-outline-light" href="leaderboard.php">Leaderboard<br></a>
      </div>
    </div>
  </nav>
  <div class="py-5 text-center cover d-flex flex-column bg-dark">
    <div class="container my-auto">
      <div class="row big-title" style="">
        <div class="mx-auto col-lg-6 col-md-8" style="">
          <h3 class="mb-4"><b><?php
    $con = mysqli_connect("localhost","root","","LoginSystem");
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

$sql = "SELECT username, email FROM users";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<br> username: ". $row["username"]. " - email: " . $row["email"] .   "<br>" ;
    }
} else {
    echo "0 results";
}

$con->close();
?></b></h3>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 bg-light" id="what">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-10 mx-auto px-4">
          <h2 class="text-muted mb-4">Contact via email to match your opponent!<br></h2>
          <div class="row text-left">
            <div class="p-3 col-lg-4 col-md-6">
              <div class="row mb-3">
                <div class="align-self-center d-flex align-items-center px-0 px-md-2 col-9 col-md-12">
                  <h5 class="mb-0"><b>1. Contact</b></h5>
                </div>
              </div>
            </div>
            <div class="p-3 col-lg-4 col-md-6">
              <div class="row mb-3">
                <div class="align-self-center d-flex align-items-center px-0 px-md-2 col-9 col-md-12">
                  <h5 class="mb-0"><b>2. Fight</b></h5>
                </div>
              </div>
            </div>
            <div class="p-3 col-lg-4">
              <div class="row mb-3">
                <div class="align-self-center d-flex align-items-center px-0 px-md-2 col-9 col-md-12">
                  <h5 class="mb-0"><b>3. Report score</b></h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>