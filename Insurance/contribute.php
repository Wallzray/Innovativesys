<?php
session_start();
$conn= new mysqli("localhost", "root","", "CHInsurance");

    $clientnin= $_SESSION['nin'];
    $contribution= $_POST['contribution'];
    $ctype= 'Contribution';
    $cdate= date('Y-m-d');
    $sel=$conn->query("SELECT * FROM contributions where Clientnin LIKE '%$clientnin%' ORDER BY Contributiondate DESC LIMIT 1");
    while($row= mysqli_fetch_row($sel)){
    $ctotal= $row[4];
    }
    $total= $ctotal+$contribution;
    $insert= $conn->query("INSERT INTO contributions VALUES('$clientnin','$cdate','$ctype',$contribution,$total)");
    if($insert){
        header('Location: contribution.php');
    }
    
?>