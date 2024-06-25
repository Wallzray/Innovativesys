<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <style>
    body{
            background-color: aliceblue;
        }
    </style>
    <title>Login</title>
</head>
<body>
    <div style="text-align: center;">
        <img src="images/auth.png" alt="logo" height="50%" width="60%">
    </div>
    <div style="text-align: center;">
        <p>A One Time Password will be sent to your phone number/ email to confirm your password reset.</p>
    </div>
    <div class="form-div" style="text-align: center; min-width: 50%;">
        <form action="authenticate.php" method="post" class="form-control">
            <label for="username">Username</label><br>
            <input type="text" name="username" id="" style="border-radius: 20px;"><br>
    
            <h5><button name="send-otp" class="w3-btn" style="background-color: blue;  border-radius: 20px; color: white;">Send OTP</button></h5>
        </form>
    </div>
</body>
</html>