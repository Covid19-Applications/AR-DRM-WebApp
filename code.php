<?php
include('security.php');


if(isset($_POST['user_registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    $usertype = $_POST['usertype'];
    $state = $_POST['state'];
    
    $email_query = "SELECT * FROM register WHERE email='$email' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: register.php');  
    }
    else
    {
        if($password === $cpassword)
        {
            $query = "INSERT INTO register (username,email,password,usertype,state) VALUES ('$username','$email','$password','$usertype','$state')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
               // $_SESSION['status'] = "User Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location: login.php');
            }
            else 
            {
                $_SESSION['status'] = "User Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: register.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = "Password and Confirm Password Does Not Match";
            $_SESSION['status_code'] = "warning";
            header('Location: register.php');  
        }
    }

}


if(isset($_POST['user_login_btn']))
{
    $email_login = $_POST['emaill']; 
    $password_login = $_POST['passwordd']; 

    $query = "SELECT * FROM register WHERE email='$email_login' AND password='$password_login' LIMIT 1";
    $query_run = mysqli_query($connection, $query);
    $usertypes = mysqli_fetch_array($query_run);

    if($usertypes['usertype'] == "admin")
    {
        $_SESSION['username'] = $email_login;
        header('Location: login.php');
    }
    else if($usertypes['usertype'] == "user")
    {
        $_SESSION['cusername'] = $email_login;
        header('Location: index.php');
    }
    else
    {
        $_SESSION['status'] = "Email / Password is Invalid";
        header('Location: login.php');
    }
    
}

if(isset($_POST['equip_btn']))
{

    $orgname = $_POST['Orgname'];
    $orgtype = $_POST['Orgtype'];
    $email= $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $pincode = $_POST['pincode'];
    $EquipmentType = $_POST['EquipmentType'];
    $quantity= $_POST['quantity'];
    $shiptype = $_POST['shiptype'];
    $district = $_POST['district'];
    $deltime = $_POST['deltime'];
    $msg = $_POST['msg'];
    $state = $_POST['state'];    




$query = " INSERT INTO `donate_equipment`(`orgname`, `orgtype`, `email`, `phone`, `address`, `pincode`, `quantity`, `EquipmentType`, `shiptype`, `district`, `deltime`, `msg`, `state`) VALUES ( '$orgname', '$orgtype','$email', '$phone',  '$address', '$pincode' ,'$quantity','$EquipmentType', '$shiptype', '$district', '$deltime','$msg','$state')";

            
    $query_run = mysqli_query($connection, $query); 

   
    if($query_run)
    {
        // echo "Saved";
       // $_SESSION['status'] = "User Profile Added";
        $_SESSION['status_code'] = "success";
        header('Location: donate-equipment.php');
    }
    else 
    {
        $_SESSION['status'] = "User Profile Not Added";
        $_SESSION['status_code'] = "error";
        header('Location: donate-equipment.php');  
    }



}


if(isset($_POST['indi_btn']))
{

    $name = $_POST['name'];
    $email= $_POST['email'];
    $phone = $_POST['no'];
    $gen = $_POST['gen'];
    $dob = $_POST['dob'];
    $add = $_POST['add'];
    $state = $_POST['state'];
    $district = $_POST['district'];
    $city = $_POST['city'];
    $pin = $_POST['pincode'];
    $avail = $_POST['avail']; 


$query  = " INSERT INTO `individual`( `name`, `email`, `phone`, `gender`, `dob`, `address`, `state`, `district`, `city`, `pincode`, `avail`) VALUES
            ('$name',  '$email', '$phone',  '$gen', '$dob' ,'$add', '$state', '$district', '$city',  '$pin', '$avail')";

$query_run = mysqli_query($connection, $query); 
            
   
            if($query_run)
            {
                // echo "Saved";
               // $_SESSION['status'] = "User Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location: individual.php');
            }
            else 
            {
                $_SESSION['status'] = "User Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: individual.php');  
            }
        


}




if(isset($_POST['Employee_btn']))
{

    $fullname = $_POST['fullname'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $email= $_POST['email'];
    $field = $_POST['field'];
    $state = $_POST['state'];
   



$query = "INSERT INTO `employee`( `fullname`, `age`, `phone`, `email`, `field`,`state`) VALUES ( '$fullname' , '$age', '$phone', '$email', '$field','$state')";
    
            
$query_run = mysqli_query($connection, $query); 
            
   
            if($query_run)
            {
                // echo "Saved";
               // $_SESSION['status'] = "User Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location: hr.php');
            }
            else 
            {
                $_SESSION['status'] = "User Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: hr.php');  
            }
        


}




if(isset($_POST['Employer_btn']))
{

    $fullname = $_POST['cfullname'];
    $email= $_POST['email'];
    $phone = $_POST['phone'];
    $field = $_POST['field'];
    $cname = $_POST['companyname'];
    $cadd = $_POST['companyadd'];
    $state = $_POST['state'];    

   

$query= "INSERT INTO `employer`(`fullname`, `email`, `phone`, `field`, `companyadd`, `companyname`,`state`) VALUES ('$fullname', '$email','$phone', '$field','$cname','$cadd','$state')";
    
            
$query_run = mysqli_query($connection, $query); 
            
   
            if($query_run)
            {
                // echo "Saved";
               // $_SESSION['status'] = "User Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location: hr.php');
            }
            else 
            {
                $_SESSION['status'] = "User Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: hr.php');  
            } 


}


if(isset($_POST['contact_form']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $state = $_POST['state'];

   
    $query = "INSERT INTO `contactusform`(`name`, `email`, `subject`, `phone`, `message`,`state`) VALUES ('$name','$email', '$subject', '$phone', '$message','$state')";
    $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "Contact Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location:contact.php');
            }
            else 
            {
                $_SESSION['status'] = "Contact Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: contact.php');  
            }
}

if(isset($_POST['hospitaladmbtn']))
{
    $hos = $_POST['Hospitalname'];  
    $add = $_POST['Address'];
    $con = $_POST['Phonenumber'];
    $state = $_POST['state']; 

    $query = "INSERT INTO hospitals_adm (Hospital, Address, Contact,state)  VALUES ('$hos','$add', '$con','$state')";
    $query_run = mysqli_query($connection, $query);
        
         if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "Hospital's' Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location: hospitals.php');
            }
            else 
            {
                $_SESSION['status'] = "Hospital's Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: hospitals.php');  
            }

}

if(isset($_POST['orphanageadmbtn']))
{
    $name = $_POST['Orphanagename'];
    $address = $_POST['Address'];
    $website = $_POST['Website'];
    $link = $_POST['DonationLink'];
    $number = $_POST['Phonenumber'];
    $state = $_POST['state'];

   
    $query = "INSERT INTO `orphan_adm`(`name`, `address`, `website`, `link`, `contact`,`state`) VALUES ('$name','$address','$website','$link','$number','$state' )";
    $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "Orphaneage Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location:orphan.php');
            }
            else 
            {
                $_SESSION['status'] = "EOrphaneage Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: orphan.php');  
            }


}


?>






