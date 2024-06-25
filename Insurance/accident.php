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

    <title>Accident Insurance</title>

</head>
<body>
    <div class="topnav">
        <a href="dashboard.php"><img src="images/logo.png" alt="logo" height="10%" width="50px"><a>
        <a href="packages.php" class="active">Packages</a>
        <a href="contact.php">Contact Us</a>
        <a href="login.php">My Portal</a>
    </div>
    <div style="text-align: center; margin: 10px 10% 0 10%; border-radius: 10px; max-width: 80%;">
    <img src="images/emergency.jpg" height="30%" width="60%">
     <h4>Accident Insurance Plan Overview</h4>
     <p>This is a type of insurance policy that provides financial protection to individuals or their beneficiaries 
        in the event of an accident resulting in bodily injury, disability, or death. It covers emergencies, natural disasters, disabilities
     </p>
     <h4>Key Features</h4>
     <ol>
        <li>
           Entry age: minimum 18 years and maximum 60 years.
        </li>
        <li>
            Policy duration: as long as you need.
        </li>
        <li>
            Minimum premium Ugx 100,000.
        </li>
     </ol>
     <h4>Accident Insurance Benefits</h4>
     <li>
       Cover all medical bills in case of an accident.
     </li>
     <li>
     Emergency Medical Transportation Benefit: Covers the cost of emergency medical transportation 
     to a medical facility following an accident.
     </li>
     <h4>Packages</h4>
    <ol>
        <li>Gold: Monthly premium of 1,000,000. Covers all expenses.</li>
        <li>Premium: Monthly premium of 500,000. Covers hospital bills and utilities</li>
        <li>Silver: Monthly pemium of 250,000. Covers 70% of the total hospital bill.</li>
    </ol>
    <div class="purchaseform">
    <form action="accpurchase.php" method="post">
    <h4>Purchase Form</h4>
    <label>Full Name</label><br>
    <input type="text" name="clientname" placeholder="John Doe" style="border-radius: 20px;"><br>
    <label>National ID Number</label><br>
    <input type="text" name="clientnin" placeholder="CMxx or CFxx" style="border-radius: 20px;"><br>
    <label>Insurance Type</label><br>
    <input type="text" name="insurancetype" value="ACCIDENT" disabled style="border-radius: 20px;"><br>
    <label>Package</label><br>
    <select name="package" style="border-radius: 20px;"> <!--Include details on packages-->
        <option value="">Select</option>
        <option value="GOLD">Gold</option>
        <option value="PREMIUM">Premium</option>
        <option value="SILVER">Silver</option>
    </select><br>
    <label>Initial Deposit</label><br>
    <input type="number" name="deposit" style="border-radius: 20px;"><br>
    <label>Next of Kin</label><br>
    <input type="number" name="trusteename" style="border-radius: 20px;"><br>
    <label>Next of Kin Number</label><br>
    <input type="number" name="trusteenbrumber" style="border-radius: 20px;"><br>

    <button type="submitacc"class="w3-btn" style="background-color: blue;  border-radius: 20px; color: white;">Submit</button>
    </form>
    </div>
  </div>
<?php include "footer.php"?>
</body>
</html>