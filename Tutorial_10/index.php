<?php
// Start the session
session_start();

// Check if the 'auth' session variable is set and destroy the session
if (isset($_SESSION['auth'])) {
    unset($_SESSION['auth']);
    session_destroy();
}

// Prevent caching of this page
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Pragma: no-cache");

// Check if the user image is not set, set it to the default image
if ($_SESSION['image'] === null) {
    $_SESSION['image'] = "images/profile.png";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <title>Tutorial_10</title>
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <nav>
        <div class="nav-container">
            <h2><a class="home" href="index.php">Home</a></h2>
            <div class="btn-div">
                <a href="login.php" class="btn">Login</a>
                <a href="register.php" class="btn">Register</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1 class="head-mg">Welcome From My Website</h1>
    </div>
</body>

</html>
