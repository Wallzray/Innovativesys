<?php
$conn= new mysqli("localhost", "root","", "CHInsurance");

    $date= date('Y-m-d');
    $clientname = $_POST['clientname'];
    $clientnin = $_POST['clientnin'];
    $insurancetype = 'LIFE';
    $package = $_POST['package'];
    $deposit = $_POST['deposit'];
    $beneficiary = $_POST['beneficiary'];
    $trusteename = $_POST['trusteename'];
    $trusteenumber = $_POST['trusteenumber'];
    function generateRandomString($length=10){
        $characters='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charlength=strlen($characters);
        $polno='';
        for($i=0;$i<$length;$i++){
            $polno .= $characters[random_int(0,$charlength - 1)];
        }
        return $polno;
    }
    $policyno= generateRandomString();
    
    $query= $conn->query("INSERT INTO insurance values('$policyno','$clientnin','$clientname','$date','$insurancetype','$package',$deposit,'$beneficiary','$trusteename','$trusteenumber');");
    if(!$query){
        echo "Error ".$conn->error;
    }
    else{
        echo '<script>alert("Purchased successfully");</script>'; 
        // header("Location:life.php");
    }
    $contribquery= $conn->query("INSERT INTO contributions values('$clientnin','$date','Purchase',$deposit, $deposit);");    
    if(!$contribquery){
        echo $conn->error;
    }
    else{
        header("Location: life.php");
    };
    

?>