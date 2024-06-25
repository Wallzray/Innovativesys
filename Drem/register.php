<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">

    <link rel="stylesheet" href="assets/css/w3.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>DREM:Register</title>
</head>
<body>
<div style="text-align: center;">
    <span style="font-family:algerian; color: red; font-size: 50px;">DIGITAL REAL ESTATE MANAGER</span><br>
    <i style="font-family:algerian;">Your Real Estate in Your Hand!</i><br>
    <img src="assets/images/house.jpg" alt="" height="30%" width= "30%">
</div>

    <div class="w3-container w3-red" style="text-align: center; font-size: 40px;">
        Registration
    </div>

<div class="regform" style="text-align: center;">
    <h1>Welcome</h1>
     <form action="registration.php" method="post">
     <h3>Please provide the following details</h3>
    <label>First Name</label><br>
    <input type="text" name="firstname" style="border-radius: 20px;"><br>
    <label>Last Name</label><br>
    <input type="text" name="lastname" style="border-radius: 20px;"><br>
    <label>Username</label><br>
    <input type="text" name="username" style="border-radius: 20px;"><br>
    <label>Password</label><br>
    <input type="text" name="password" style="border-radius: 20px;"><br>
    <label>Number of Houses</label><br>
    <input type="number" name="houseno" style="border-radius: 20px;"><br>
    <label>Location</label><br>
    <input type="text" name="location" style="border-radius: 20px;"><br>

    <button type="submit" name="register" class="w3-btn" style="background-color: blue;  border-radius: 20px; color: white;">Submit</button>
</div>
</body>
</html>