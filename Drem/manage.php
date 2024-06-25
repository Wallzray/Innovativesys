<?php 


$con= new mysqli("localhost", "root","", "Digitalestate");
$man= $con->query("SELECT DISTINCT * FROM users WHERE Ownername  LIKE '';");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">

    <link rel="stylesheet" href="assets/css/w3.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>DREM: Managers</title>

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
  /* border: 1px solid #ccc; */
  background-color: #f1f1f1;
  width: 20%;
  height: 300px;
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
  /* border: 1px solid #ccc; */
  width: 70%;
  border-left: none;
  height: 100%;
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
.form input,select{
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
        <a href="dashboard.php" class="w3-bar-item w3-button w3-hover-blue"  style="width: 20%;">Dashboard</a>
        <a href="houses.php" class="w3-bar-item w3-button w3-hover-blue" style="width: 20%;">Houses</a>
        <a href="manage.php"class="w3-bar-item w3-button w3-hover-blue"    style="width: 20%;">Managers</a>
        <a href="message.php"class="w3-bar-item w3-button w3-hover-blue"    style="width: 20%;">Messages</a>
        <a href="logout.php" class="w3-bar-item w3-button w3-hover-blue w3-right">Log off</a>
</div>
<div class="w3-container" style="text-align: center; font-size: 20px; margin-bottom:5px; color:white;">
        Your Managers:
</div>
<div class="tab">
            <button class="tablinks" onclick="openDiv(event, 'Add')">New Manager</button>
            <button class="tablinks" onclick="openDiv(event, 'View')">Managers</button>
            <button class="tablinks" onclick="openDiv(event, 'Update')">Update</button>
</div>

<div id="Add" class="tabcontent">
                <form action="management.php" method="post" class="form">
                    <!-- <div class="row"> -->
                        <h3>Add Manager</h3>
                            <label>First Name</label><br>
                            <input type="text" name="fname" style="border-radius: 20px;"><br>
                            <label>Last Name</label><br>
                            <input type="text" name="lname" style="border-radius: 20px;"><br>
                            <label>Manager's Username</label><br>
                            <input type="text" name="username" style="border-radius: 20px;"><br>
                            <label>Password</label><br>
                            <input type="password" name="password" style="border-radius: 20px;"><br>
                            <label>Number of assigned houses</label><br>
                            <input type="number" name="houseno" style="border-radius: 20px;"><br>
                            <label>Location of Houses Assigned</label><br>
                            <input type="text" name="location" style="border-radius: 20px;"><br>
                            <input type="submit" value="SAVE" class="w3-btn" name="manageradd">
                    <!-- </div><br> -->
                    <!-- <div class="row"> -->
                    <!-- </div> -->
                </form>
</div>
            <div id="View" class="tabcontent w3-table w3-striped w3-white w3-card-4" style="display: none; margin-left:5%;height: 70%;">
                <table>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Location</th>
                        <th>Assigned Houses</th>
                        <th>Action</th>
                    </tr>
                    <tbody>
                    <?php foreach($man as $row){?>
                        <tr>
                            <td><?php echo $row['Id'];?></td>
                            <td><?php echo $row['Managername'];?></td>
                            <td><?php echo $row['Userpassword'];?></td>
                            <td><?php echo $row['Houselocation'];?></td>
                            <td><?php echo $row['Houseno'];?></td>
                            <td><a style='margin: 5px;' href="update.php?delete_manager=<?php echo $row['Id']; ?>">                 
                    <img src="assets/icons/trash3.svg">
                    </a> </td>
                       </tr>
                    <?php }?>    
                    </tbody>
                </table>
        </div>
        <div id="Update" class="tabcontent" style="display:none;">
        <form action="management.php" method="post" class="form">
                    <div class="row">
                        <h3>Update Manager</h3>
                            <label>Manager's Username</label><br>
                            
                            <select name="username" style="border-radius: 20px;">
                                <option value="">Select</option>
                                <?php foreach($man as $row){?>
                                <option value="<?php echo $row['Managername'];?>"><?php echo $row['Managername'];?></option>
                                <?php }?>    
                            </select><br>
                            <label>Password</label><br>
                            <input type="password" name="password" value="" style="border-radius: 20px;"><br>
                            <label>Number of assigned houses</label><br>
                            <input type="number" name="houseno" style="border-radius: 20px;"><br>
                            <label>Location of Houses Assigned</label><br>
                            <input type="text" name="location" style="border-radius: 20px;"><br>
                        <input type="submit" value="UPDATE" name="update" class="w3-btn">
                </form>
        </div>
        
    </section>
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