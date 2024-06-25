<?php 

$con= new mysqli("localhost", "root","", "Digitalestate");
$message= $con->query("SELECT * FROM messages ORDER BY Messagedate DESC;")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">

    <link rel="stylesheet" href="assets/css/w3.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>DREM: Messages</title>

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

* {box-sizing: border-box}
.tab {
  float: left;
  background-color: #f1f1f1;
  width: 20%;
  height: 70%;
}
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
}

.tab button:hover {
  background-color: #ddd;
}

.tab button.active {
  background-color: #ccc;
}

.tabcontent {
  float: left;
  padding: 0px 12px;
  width: 70%;
  height: 70%
}
th, td{
    min-width: 150px;
}
.form{
    padding: 5px 20px;
    margin-left: 5%;
    margin-top: 10px;
    color: white;
    background-color: rgb(177, 3, 3);
}
.form input,select,textarea{
    width: 30%;
    padding: 5px 10px;
    margin-bottom: 5px;
}
</style>

</head>
<body>
<div style="text-align: center;">
    <span style="font-family:algerian; color: red; font-size: 50px;">DIGITAL REAL ESTATE MANAGER</span><br>
    <i style="font-family:algerian;">Your Real Estate in Your Hand!</i><br>
</div>
<div class="w3-bar" style="background-color:rgb(177, 3, 3); color:white;">
        <a href="m_dashboard.php" class="w3-bar-item w3-button w3-hover-blue" style="width: 26%;">Dashboard</a>
        <a href="m_profile.php" class="w3-bar-item w3-button w3-hover-blue" style="width: 26%;">Profile</a>
        <a href="m_messages.php"class="w3-bar-item w3-button w3-hover-blue" style="width: 26%;">Messages</a>
        <a href="logout.php" class="w3-bar-item w3-button w3-hover-blue w3-right">Log off</a>
</div>

<div class="tab">
        <button class="tablinks" onclick="openDiv(event, 'Add')">New Message</button>
        <button class="tablinks" onclick="openDiv(event, 'View')">Your Messages</button>
</div>

<div id="Add" class="tabcontent">
        <form action="messenger.php" method="post" class="form">
        <label>Your Username</label><br>
        <input type="text" name="username" style="border-radius: 20px;"><br>
        <label>Message</label><br>
        <textarea name="message" style="border-radius: 20px;">

        </textarea><br>
        <input type="submit" value="SEND" class="w3-btn" name="send">
        </form>
</div>

<div id="View" class="tabcontent w3-table w3-striped w3-white w3-card-4" style="display: none; margin-left:5%;height: 70%;">
                <table>
                    <tr>
                        <th style="width:20%">Date</th>
                        <th style="width:60%">Message</th>
                    </tr>
                    <?php foreach($message as $row){?>
                    <tr>
                        <td style="width:20%"><?php echo $row['Messagedate'];?></td>
                        <td style="width:60%"><?php echo $row['Smessage'];?></td>
                    </tr>
                    <?php } ?>
                </table>
</div>

</body>
</html>

<script>
   function openDiv(evt, divName) {
  var i, tabcontent, tablinks;

  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  document.getElementById(divName).style.display = "block";
  evt.currentTarget.className += " active";
}

</script>