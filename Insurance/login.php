<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">

    <title>Login</title>

    <style>
    body{
            background-color: aliceblue;
        }
    </style>
</head>
<body>
    <div style="text-align: center;">
        <img src="images/logo.png" alt="logo" height="60%" width="40%">
    </div>
    <div class="form-div" style="text-align: center; min-width: 50%;">
        <form action="logauth.php" method="post" class="form-control">
            <label for="email">Email</label><br>
            <input type="email" name="email" style="border-radius: 20px;" required><br>
            <label for="password">Password</label><br>
            <input type="text" name="password" style="border-radius: 20px;" required>
            <br>
            <input type="submit" name="login" value="SUBMIT">
            <!-- <h5><button name="login" type="submit" class="w3-btn" style="background-color: blue;  border-radius: 20px; color: white;">Submit</button></h5> -->
        </form>
        <h5><a href="forgot.php">Forgot Password?</a></h5>
    </div>
   
</body>
</html>