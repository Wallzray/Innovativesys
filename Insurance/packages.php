<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Packages</title>

</head>
<body>
    <div class="topnav">
        <a href="dashboard.php"><img src="images/logo.png" alt="logo" height="10%" width="50px"><a>
        <a href="packages.php" class="active">Packages</a>
        <a href="contact.php">Contact Us</a>
        <a href="login.php">My Portal</a>
    </div>
    <div style="text-align: center; margin-top 10px; border-radius: 10px ">
        <h2>Here are our Packages</h2>
        <hr style=" max-width: 20%; margin-left: 40%;">
        <p>Access all your premium covers with a click of a button</p>
    </div>
    <div class="types" style="text-align: center; margin-top: 10px; border: solid white 2px; border-radius: 10px; width:40%; margin-left: 30%;">
        <img src="icons/airplane.svg" width="20px" alt="trip">
        <h4>Get Your Life Insurance</h4>
        <p>Insure your life with us and ensure the safety of  <br>
            your chiildren or loved ones in case of any misfortune</p>
        <a href="life.php"><button style="background-color: rgb(44, 44, 163); border-radius: 20px; color: white;">Quote</button></a>
    </div>
    <div class="types" style="text-align: center; margin-top: 10px; border: solid white 2px; border-radius: 10px; width:40%; margin-left: 30%;">
    <img src="icons/hospital.svg" width="20px" alt="trip">
    <h4>Get Your Personal Accident Insurance</h4>
        <p>Get your personal accident cover and protect yorself from the financial burden that comes with <br>
            accidents. This cover is available for adult individuals, students and families.</p>
        <a href="accident.php"><button style="background-color: rgb(44, 44, 163); border-radius: 20px; color: white;">Quote</button></a>
    </div>
    <div class="types" style="text-align: center; margin-top: 10px; border: solid white 2px; border-radius: 10px; width:40%; margin-left: 30%;">
    <img src="icons/heart-pulse.svg" width="20px" alt="trip">
    <h4>Get Your Health Insurance</h4>
        <p>Get your personal health cover and protect yorself from the financial burden that comes with
            unforeseen illnesses.</p>
        <a href="health.php"><button style="background-color: rgb(44, 44, 163); border-radius: 20px; color: white;">Quote</button></a>
    </div>
<?php include "footer.php"?>
</body>
</html>