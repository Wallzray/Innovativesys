<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/w3.css">
    <title>DREM:Login</title>
</head>
<body>
<div style="text-align: center;">
    <span style="font-family:algerian; color: red; font-size: 50px;">DIGITAL REAL ESTATE MANAGER</span><br>
    <i style="font-family:algerian;">Your Real Estate in Your Hand!</i><br>
    <img src="assets/images/house.jpg" alt="" height="30%" width= "30%">
</div>

    <div class="w3-container" style="text-align: center; font-size: 40px; background-clor:rgb(177, 3, 3);">
        Login
    </div>
    <button class="tablink" onclick="openTab('Owner',this,'red')" id="defaultOpen">Landlord Login</button>
    <button class="tablink" onclick="openTab('Manager',this,'white')">Manager Login</button>
<div id="Owner" class="regform" style="text-align: center;">
    <h1>Landlord Login</h1>
     <form action="ownerauth.php" method="post">
    <label>Username</label><br>
    <input type="text" name="username" style="border-radius: 20px;"><br>
    <label>Password</label><br>
    <input type="password" name="password" style="border-radius: 20px;"><br>
    <button type="submit" class="w3-btn" style="background-color: blue;  border-radius: 20px; color: white;">Submit</button>
    </form>
</div>

<div id="Manager" class="regform" style="text-align: center;  display:none;">
    <h1>Manager</h1>
    <form action="manauth.php" method="post">
    <label>Your Username</label><br>
    <input type="text" name="man_username" style="border-radius: 20px;"><br>
    <label>Your Password</label><br>
    <input type="password" name="password" style="border-radius: 20px;"><br>
    <button type="submit" name="managelog" class="w3-btn" style="background-color: blue;  border-radius: 20px; color: white;">Submit</button>
</form>
</div>
</body>
<script>
    function openTab(tabName, elmnt, color){
        var i, tabcontent, tablinks;
         tabcontent= document.getElementsByClassName("regform");
         for(i=0;i<tabcontent.length; i++){tabcontent[i].style.display="none";}
         tablinks=document.getElementsByClassName("tablink");
         for(i=0;i<tablinks.length; i++){tablinks[i].style.backgroundColor="";}
         document.getElementById(tabName).style.display="block";
         elmt.style.backgroundColor= color;
         document.getElementById("defaultOpen").click();
    }
</script>
</html>