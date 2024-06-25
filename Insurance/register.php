<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">

    <title>Register</title>

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
        <form action="authenticate.php" method="post" class="form-control">
            <label for="name">Name</label><br>
            <input type="text" name="name" id="" style="border-radius: 20px;" required><br>
            <label for="email">Email</label><br>
            <input type="email" name="email" id=""style="border-radius: 20px;" required><br>
            <label for="number">Phone Number</label><br>
            <input type="tel" name="telephone" id="" style="border-radius: 20px;" required><br>
            <label for="occupation">National Id Number</label><br>
            <input type="text" name="clientnin" required placeholder="CMxx or CFxx" style="border-radius: 20px;"><br>
            <label for="occupation">Occupation</label><br>
            <input type="text" name="occupation" id="" style="border-radius: 20px;" required><br>
            <label for="password">Password</label><br>
            <input type="text" name="password" id="" style="border-radius: 20px;" required>
            <br>
            <h5><button name="register" type="submit" class="w3-btn" style="background-color: blue;  border-radius: 20px; color: white;">Submit</button></h5>
        </form>
    </div>
</body>
</html>