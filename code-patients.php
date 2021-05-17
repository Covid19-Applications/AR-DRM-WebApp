<?php
include('security.php');

$link = mysqli_connect("localhost", "cerenorddtfq", "Hackathon@1437", "hackathon");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

    $fullname = mysqli_real_escape_string($link, $_REQUEST['name']);
    $address = mysqli_real_escape_string($link, $_REQUEST['address']);
    $age = mysqli_real_escape_string($link, $_REQUEST['age']);
    $contact = mysqli_real_escape_string($link, $_REQUEST['contact']);
    $email = mysqli_real_escape_string($link, $_REQUEST['email']);
    $AptType = mysqli_real_escape_string($link, $_REQUEST['apt']);
    $date = mysqli_real_escape_string($link, $_REQUEST['date']);
    $state = mysqli_real_escape_string($link, $_REQUEST['state']);    


 
// Attempt insert query execution
$sql =  "INSERT INTO `appointment` (`fullname` , `address`, `age`,`phonenumber`, `email`, `apttype`, `date`,`state` ) 
    VALUES ('$fullname', '$address', '$age', '$contact',  '$email', '$AptType',  '$date','$state' )";
   

if(mysqli_query($link, $sql)){
    echo '<script language="javascript">';
    echo 'alert("Appointment Send Successfully")';
    echo '</script>';
     header('Location: doc-apt.php');  
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>