<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Contact</title>

</head>
<body>
<div class="topnav">
        <a href="dashboard.php"><img src="images/logo.png" alt="logo" height="10%" width="50px"><a>
        <a href="packages.php">Packages</a>
        <a href="contact.php" class="active">Contact Us</a>
        <a href="login.php">My Portal</a>
</div>
<div style="text-align: center; max-width: 60%; margin-left: 20%;">
    <div class="callback-form">
        <form action="callback.php" method="post">
            <h1>Request For A Callback</h1>
            <label>Name</label><br>
            <input type="text" name="clientname"><br>
            <label>Email</label><br>
            <input type="email" name="email"><br>
            <label>Phone Number</label><br>
            <input type="number" name="phone" placeholder="07xx,04xx,03xx"><br>
            <label>Comment</label><br>
            <textarea name="comment"></textarea><br>
            <button type="submit" name="callback_submit">SUBMIT</button>
        </form>
    </div>
    <h1>Get In Touch With Us Today</h1>
    <span style="color:red">Give Us A Call</span>
    <hr style="margin: 5px 40%;">
        <p><!--Number--></p>
    <span style="color:red">Send Us A Message</span>
    <hr style="margin: 5px 40%;">
        <p><!--Email--></p>
    <span style="color:red">Office Location</span>
    <hr style="margin: 5px 40%;">
        <p><!--Location--></p>
</div>