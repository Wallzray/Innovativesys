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

    <title>Life Insurance</title>



</head>
<body>
    <div class="topnav">
        <a href="dashboard.php"><img src="images/logo.png" alt="logo" height="10%" width="50px"><a>
        <a href="packages.php" class="active">Packages</a>
        <a href="contact.php">Contact Us</a>
        <a href="login.php">My Portal</a>
    </div>
    <div style="text-align: center; margin: 10px 10% 0 10%; border-radius: 10px; max-width: 80%;">
    <img src="images/lifeinsurance.jfif" height="30%" width="60%">
     <h4>Life Insurance Plan Overview</h4>
     <ol>
        <li>It provides an attractive annual bonus that will boos your final maturity benefit payout.</li>
        <li>It is ideal for disciplined financial planning to provide for future education costs, lumpsum for
            businesses or family investment.
        </li>
     </ol>
     <h4>Key Features</h4>
     <ol>
        <li>
           Entry age: minimum 18 years and maximum 60 years.
        </li>
        <li>
            Policy duration: minimum 10 years and maximum 20 years.
        </li>
        <li>
            Minimum premium Ugx 100,000.
        </li>
     </ol>
     <h4>Life Insurance Benefits</h4>
     <li>
       Death Benefit: The company pays 100% of the sum assured to the beneficiary.
     </li>
     <li>
        Maturity Benefit: The company pays out a maurity benefit as lumpsum after the plan expires.
     </li>

     
    <div class="purchaseform">
    <form action="lifepurchase.php" method="post" >
    <h4>Purchase Form</h4>
    <label>Full Name</label><br>
    <input type="text" name="clientname" placeholder="John Doe" style="border-radius: 20px;"><br>
    <label>National ID Number</label><br>
    <input type="text" name="clientnin" placeholder="CMxx or CFxx" style="border-radius: 20px;"><br>
    <label>Insurance Type</label><br>
    <input type="text" name="insurancetype" value="LIFE" disabled style="border-radius: 20px;"><br>
    <label>Package</label><br>
    <select name="package" style="border-radius: 20px;"> 
        <option value="gold">Select</option>
        <option value="GOLD">Gold</option>
        <option value="PREMIUM">Premium</option>
        <option value="SILVER">Silver</option>
    </select><br>
    <label>Initial Deposit</label><br>
    <input type="number" name="deposit" style="border-radius: 20px;"><br>
    <label>Beneficiary Name</label><br>
    <input type="text" name="beneficiary" placeholder="John Doe" style="border-radius: 20px;"><br>
    <label>Trustee Name</label><br>
    <input type="text" name="trusteename" placeholder="John Doe" style="border-radius: 20px;"><br>
    <label>Trustee Contact</label><br>
    <input type="number" name="trusteenumber" style="border-radius: 20px;"><br>
    <button type="submitlife"class="w3-btn" style="background-color: blue;  border-radius: 20px; color: white;">Submit</button>
    </form>
    </div>
</div>
<?php include "footer.php"?>
</body>
</html>