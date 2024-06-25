<?php 
$con= new mysqli("localhost", "root","", "Digitalestate");

 $tenant=$con->query("SELECT * FROM tenants");
 $tenantno=mysqli_num_rows($tenant);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">

    <link rel="stylesheet" href="assets/css/w3.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
      * {box-sizing: border-box}
      
      .tab {
        float: left;
        background-color: #f1f1f1;
        width: 10%;
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
        width: 85%;
        height: 70%;
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
          border-radius: 20px;
          width: 30%;
          padding: 5px 10px;
          margin-bottom: 5px;
      }
</style>

    <title>DREM: Tenants</title>
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

<div class="w3-container" style="text-align: center; font-size: 20px; margin-bottom:5px;">
        Your Tenants:
</div>
<div class="tab">
    <button class="tablinks" onclick="openDiv(event, 'View')">Tenants</button>
    <button class="tablinks" onclick="openDiv(event, 'Add')">Add Tenant</button>
</div>

    <div id="View" class="tabcontent w3-table w3-striped w3-white w3-card-4" style="margin-left:5%; display:none;">
      <table>
        <tr>
            <th>No.</th>
            <th>Tenant Name</th>
            <th>Tenant Contact</th>
            <th>Residents</th>
            <th>Rent</th>
            <th>Rent Due</th>
            <th>Location</th>
            <th>Action</th>
        </tr>
        <tbody>
        <?php
            $userquery= $con->query("SELECT * from tenants");
            $usernum= mysqli_num_rows($userquery);
            for($a=1; $a<= $usernum; $a++){ 
            $row= mysqli_fetch_row($userquery);
            $no= $row[0];
            $tenantname= $row[1];
            $contact= $row[2];
            $residents= $row[3];
            $rent= $row[4];
            $rentdue= $row[5];
            $location= $row[8]; ?>
                
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $tenantname ?></td>
                <td><?php echo $contact; ?></td>
                <td><?php echo $residents; ?></td>
                <td><?php echo $rent; ?></td>
                <td><?php echo $rentdue; ?></td>
                <td><?php echo $location; ?></td>
                
                <td>
                <a style='margin: 2px;' href="update.php?update_tenant=<?php echo $no; ?>">                 
                <img src="assets/icons/pencil-fill.svg">
                </a>
                <a style='margin: 5px;' href="update.php?delete_tenant=<?php echo $no; ?>">                 
                <img src="assets/icons/trash3.svg">
                </a>
                </td>
            </tr>
           <?php } ?>
            
            </tbody>
      </table>
    </div>

    <div id="Add" class="tabcontent" style="display:none;">
      <form action="tenantlog.php" method="post"  class="form" style="text-align:center;">
          <label>Tenant Name</label><br>
          <input type="text" name="tenantname"><br>
          <label>Contact</label><br>
          <input type="tel" name="contact"><br>
          <label>Next of Kin Contact</label><br>
          <input type="tel" name="nokin"><br>
          <label>Number of people in room</label><br>
          <input type="number" name="residents"><br>
          <label>Rent to be paid</label><br>
          <input type="number" name="rentfees"><br>
          <label>Rent due</label><br>
          <input type="number" name="rentfees"><br>
          <label>Location</label><br>
          <input type="text" name="location"><br>
          <input type="submit" value="ADD" name="addtenant">
      </form>
  </div>

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
</body>
</html>

