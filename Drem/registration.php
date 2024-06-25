<!--FORM VALIDATION-->
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
<?php

$firstname= $lastname= $username= $location= $password= $houseno= "";

if($_SERVER['REQUEST_METHOD']=='POST'){
    $firstname= test_input($_POST["firstname"]);
    $lastname= test_input($_POST["lastname"]);
    $username= test_input($_POST["username"]);
    $password= test_input($_POST["password"]);
    $location= test_input($_POST["location"]);
    $houseno= test_input($_POST["houseno"]);
}

function test_input($data){
    $data= trim($data);
    $data= stripslashes($data);
    $data= htmlspecialchars($data);
    return $data;
}

//DATABASE
$con= new mysqli("localhost", "root","", "Digitalestate");

$sql_select= "SELECT * FROM users WHERE Ownername='$username';";
$result= $con->query($sql_select);
if($result== 1){
    echo "User with this Email already exists";
}
$insert= $con->query("INSERT INTO users(Firstname,Lastname,Ownername, Userpassword, Houselocation, Houseno) VALUES('$firstname','$lastname','$username','$password','$location',$houseno);");
if($insert){
    header('Location: login.php');
}
else{
    echo ("Error ".$conn->error);
}

mysqli_close($conn);


?>