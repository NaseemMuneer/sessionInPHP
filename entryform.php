<?php
    Session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session and cookies</title>
    <style>
    body
        {
        font-size: 40px;
        }
    </style>
</head>
<body>
    
    <ul action="server.php" method="GET">
        <li><a href="entryform.php">Home Page</a></li>
        <li><a href="server.php"> Contact Page</a></li>
    </ul>

    <?php
   
    $_SESSION['username'];
    echo $_SESSION['username'] = "Naseem Muneer Baloch ";

    if(!isset($_SESSION['username']))
    {
        echo "You are not logged in!";
    }
    else
    {
        echo "You are logged in!";
    }
?>

</body>
</html>