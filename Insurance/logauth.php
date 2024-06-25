
<?php
session_start();
$conn= new mysqli("localhost", "root","", "CHInsurance");

if(isset($_POST['login'])){
    $email= $_POST['email'];
    $password= $_POST['password'];

    $saved=$conn->query("SELECT * FROM users WHERE Clientemail='$email' and Clientpassword='$password';");
    $iuser= mysqli_num_rows($saved);
    if($iuser == 1){
        header('Location:portal.php');
    }
    else{
        echo '<script>alert("Wrong username or password!.");</script>';
    }
}

$email= $_POST['email'];
$saved=$conn->query("SELECT * FROM users WHERE Clientemail LIKE '%$email%'");
while($row= mysqli_fetch_row($saved)){
    $_SESSION['nin']= $row[1];
}
    $clientnin= $_SESSION['nin'];
?>