<!--FORM VALIDATION-->
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
<?php

$name= $email= $telephone= $clientnin= $occupation= $password= "";

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name= test_input($_POST["name"]);
    $email= test_input($_POST["email"]);
    $clientnin= test_input($_POST["clientnin"]);
    $telephone= test_input($_POST["telephone"]);
    $occupation= test_input($_POST["occupation"]);
    $password= test_input($_POST["password"]);
}

function test_input($data){
    $data= trim($data);
    $data= stripslashes($data);
    $data= htmlspecialchars($data);
    return $data;
}

//DATABASE
$conn= new mysqli("localhost", "root","", "CHInsurance");

$sql_select= "SELECT * FROM users WHERE Clientemail='$email';";
$result= $conn->query($sql_select);
if($result= 1){
    echo '<script>alert("User with this Email already exists");</script>';
}
$insert= $conn->query("INSERT INTO users(Clientnin, Clientname, Clientemail,Clientnumber,Occupation,Clientpassword) VALUES('$clientnin','$name','$email','$telephone','$occupation','$password');");
if($insert){
    
    header('Location:dashboard.php');
}
else{
    echo ("Error ".$conn->error);
}

mysqli_close($conn);


?>