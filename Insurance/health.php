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

    <title>Health Insurance</title>

</head>
<body>
    <div class="topnav">
        <a href="dashboard.php"><img src="images/logo.png" alt="logo" height="10%" width="50px"><a>
        <a href="packages.php" class="active">Packages</a>
        <a href="contact.php">Contact Us</a>
        <a href="login.php">My Portal</a>
    </div>

    <div style="text-align: center; margin: 10px 10% 0 10%; border-radius: 10px; max-width: 80%;">
        <img src="images/medical.jpg" height="20%" width="60%">
     <h4>Health Insurance Plan Overview</h4>
     <p>
     Today, thanks to the improvement in technology, people can treat and get rid of diseases such as cancer with 
     a high cost of treatment. To counter these,you need a plan that can give you what other traditional health plans
     may not provide. This helps you to pay for medical costs and ensure that income never stops.
     </p>
     <h4>Key Features</h4>
     <ol>
        <li>
           Entry age: minimum 18 years and maximum 60 years.
        </li>
        <li>
            Policy duration: Continues as long as it is renewed.
        </li>
        <li>
            Minimum premium Ugx 100,000.
        </li>
     </ol>
     <h4>Health Insurance Benefits</h4>
     <ol>
     <li>
       Death Benefit: The company pays 100% of the sum assured to the beneficiary.
     </li>
     <li>
        Depending on the package, the company is responsible for all expenses during sickness.
     </li>
     </ol>
     <h4>Packages</h4>
    <ol>
        <li>Gold: Monthly premium of 1,000,000. Covers all expenses.</li>
        <li>Premium: Monthly premium of 500,000. Covers hospital bills and utilities</li>
        <li>Silver: Monthly pemium of 250,000. Covers 70% of the total hospital bill.</li>
    </ol>

     <!-- <button type="button" class="w3-btn" style="background-color: blue;  border-radius: 10px; color: white;">PURCHASE</button> -->
     <div class="purchaseform">
     <form action="healthpurchase.php" method="post">
     <h4>Purchase Form</h4>
    <label>Full Name</label><br>
    <input type="text" name="clientname" placeholder="John Doe" style="border-radius: 20px;"><br>
    <label>National ID Number</label><br>
    <input type="text" name="clientnin" placeholder="CMxx or CFxx" style="border-radius: 20px;"><br>
    <label>Insurance Type</label><br>
    <input type="text" name="insurancetype" value="HEALTH" disabled style="border-radius: 20px;"><br>
    <label>Package</label><br>
    <select name="package" style="border-radius: 20px;">
        <option value="">Select</option>    
        <option value="GOLD">Gold</option>
        <option value="PREMIUM">Premium</option>
        <option value="SILVER">Silver</option>
    </select><br>
    <label>Initial Deposit</label><br>
    <input type="number" name="deposit" style="border-radius: 20px;"><br>

    <button type="submithealth"class="w3-btn" style="background-color: blue;  border-radius: 20px; color: white;">Submit</button>
    </form>
    </div>
</div>
<?php include "footer.php"?>
</body>
</html>