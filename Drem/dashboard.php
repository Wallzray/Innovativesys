<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">

    <link rel="stylesheet" href="assets/css/w3.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>DREM: Dashboard</title>

    <style>
body{
    background-image: url('assets/images/apartment.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    height: 100vh;
}
img{
    height: 25px;
    width: 25px;
}
</style>
</head>
<body>
<div style="text-align: center;">
    <span style="font-family:algerian; color: red; font-size: 50px;">DIGITAL REAL ESTATE MANAGER</span><br>
    <i style="font-family:algerian; color:white;">Your Real Estate in Your Hand!</i><br>
</div>
<div class="w3-bar" style="background-color:rgb(177, 3, 3); color:white;">
        <a href="dashboard.php" class="w3-bar-item w3-button w3-hover-blue"  style="width: 26%;">Dashboard</a>
        <a href="houses.php" class="w3-bar-item w3-button w3-hover-blue" style="width: 26%;">Houses</a>
        <a href="manage.php"class="w3-bar-item w3-button w3-hover-blue"    style="width: 26%;">Managers</a>
        <a href="logout.php" class="w3-bar-item w3-button w3-hover-blue w3-right">Log off</a>
</div>
<div class="parent-top">
    <div class="top">
        <img src="assets/icons/person-fill.svg">
        <h3>Profile</h3>
        <i>Find and edit details about your account</i><br>
        <a href="profile.php"class="w3-btn" style="background-color: blue;">GO</a>
    </div>
    <div class="top">
        <img src="assets/icons/person-lock.svg">
        <h3>Managers</h3>
        <i>View a list of your managers and control who uses the system</i><br>
        <a href="manage.php"class="w3-btn" style="background-color: blue;">GO</a>
    </div>
    <div class="top">
        <img src="assets/icons/house-fill.svg">
        <h3>Houses</h3>
        <i>View your houses and add tenants where possible</i><br>
        <a href="houses.php"class="w3-btn" style="background-color: blue;">GO</a>
    </div>
</div>
<div class="parent-bottom">
    <div class="bottom">
        <img src="assets/icons/people-fill.svg">
        <h3>Tenants</h3>
        <i>View and manage your available tenants</i><br>
        <a href="tenant.php"class="w3-btn" style="background-color: blue;">GO</a>
    </div>
    <div class="bottom">
        <img src="assets/icons/envelope-exclamation-fill.svg">
        <h3>Messages</h3>
        <i>These are the messages you have</i><br>
        <a href="message.php"class="w3-btn" style="background-color: blue;">GO</a>
    </div>
    <div class="bottom">
    <img src="assets/icons/lock-fill.svg">
        <h3>Log off</h3>
        <a href="logout.php"class="w3-btn" style="background-color: blue;">LOGOFF</a>
    </div>
</div>