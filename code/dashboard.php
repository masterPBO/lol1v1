<?php
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are now logged in.</p>
        <p><a href="home.php">Go to homepage</a></p>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>