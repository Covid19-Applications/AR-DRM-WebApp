<?php
include('security.php');

if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    $usertype = $_POST['usertype'];
    
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
            $query = "INSERT INTO register (username,email,password,usertype) VALUES ('$username','$email','$password','$usertype')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "Admin Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location: register.php');
            }
            else 
            {
                $_SESSION['status'] = "Admin Profile Not Added";
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

if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];

    $query = "UPDATE register SET username='$username', email='$email', password='$password' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: register.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: register.php'); 
    }
}

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM register WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: register.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: register.php'); 
    }    
}

if(isset($_POST['login_btn']))
{
    $email_login = $_POST['emaill']; 
    $password_login = $_POST['passwordd']; 

    $query = "SELECT * FROM register WHERE email='$email_login' AND password='$password_login' LIMIT 1";
    $query_run = mysqli_query($connection, $query);
    $usertypes = mysqli_fetch_array($query_run);

    if($usertypes['usertype'] == "admin")
    {
        $_SESSION['username'] = $email_login;
        header('Location: index.php');
    }
    // else if($usertypes['usertype'] == "user")
    // {
    //     $_SESSION['cusername'] = $email_login;
    //     header('Location: login.php');
    // }
    else
    {
        $_SESSION['status'] = "Email / Password is Invalid";
        header('Location: login.php');
    }
    
}


//-----------------DOCTORS-------------------------//

if(isset($_POST['doctorbtn']))
{
    $doc = $_POST['Doctorname']; 
    $spe = $_POST['Speciality'];
    $tim = $_POST['Timings']; 
    $add = $_POST['Address'];
    $con = $_POST['Phonenumber'];
    $state = $_POST['state']; 

    $query = "INSERT INTO doctors( Doctorname, Speciality, Timings, Address, Contact,state) VALUES ('$doc','$spe','$tim','$add', '$con','$state')";
    $query_run = mysqli_query($connection, $query);
        
         if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "Doctor's Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location: doctors.php');
            }
            else 
            {
                $_SESSION['status'] = "Doctor Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: doctors.php');  
            }

}

if(isset($_POST['doctors_delete_btn']))
{
    $id = $_POST['doctors_delete_id'];

    $query = "DELETE FROM doctors WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: doctors.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: doctors.php'); 
    }    
}

if(isset($_POST['doctors_updatebtn']))
{
    $id = $_POST['doctors_edit_id'];
    $doc = $_POST['Doctorname']; 
    $spe = $_POST['Speciality'];
    $tim = $_POST['Timings']; 
    $add = $_POST['Address'];
    $con = $_POST['Phonenumber'];
    $state = $_POST['state']; 


    $query = "UPDATE doctors SET Doctorname='$doc', Speciality='$spe', `Timings` ='$tim', Address='$add', Contact='$con', state='$state' WHERE id='$id' ";

    $query_run = mysqli_query($connection, $query);


    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: doctors.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is Updated";       
        $_SESSION['status_code'] = "error";
        header('Location: doctors.php'); 
    } 
}


//-------------------xxx-----------------------------//

//---------------------HOSPITALS----------------------//

if(isset($_POST['hospitalbtn']))
{
    $hos = $_POST['Hospitalname'];  
    $add = $_POST['Address'];
    $con = $_POST['Phonenumber'];
    $state = $_POST['state']; 

    $query = "INSERT INTO hospitals(Hospital, Address, Contact,state)  VALUES ('$hos','$add', '$con','$state')";
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
if(isset($_POST['hospitals_delete_btn']))
{
    $id = $_POST['hospitals_delete_id'];

    $query = "DELETE FROM hospitals WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: hospitals.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: hospitals.php'); 
    }    
}

if(isset($_POST['hospitals_updatebtn']))
{
    $id = $_POST['hospitals_edit_id'];
    $hos = $_POST['Hospitalname'];  
    $add = $_POST['Address'];
    $con = $_POST['Phonenumber'];
    $state = $_POST['state']; 


    $query = "UPDATE hospitals SET Hospital='$hos', Address='$add', Contact='$con', state='$state' WHERE id='$id' ";

    $query_run = mysqli_query($connection, $query);


    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: hospitals.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is Updated";       
        $_SESSION['status_code'] = "error";
        header('Location: hospitals.php'); 
    } 
}



//-----------------xxx-------------------------//

//-------------MEDICAL STORE--------------------//

if(isset($_POST['medstorebtn']))
{
    $pha = $_POST['Pharmacyname'];  
    $add = $_POST['Address'];
    $con = $_POST['Phonenumber'];
    $state = $_POST['state']; 

    $query = "INSERT INTO medstore(name, address, phone,state)  VALUES ('$pha','$add', '$con','$state')";
    $query_run = mysqli_query($connection, $query);
        
         if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "Medstore Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location: medstore.php');
            }
            else 
            {
                $_SESSION['status'] = "Medstore Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: medstore.php');  
            }

}

if(isset($_POST['medstore_delete_btn']))
{
    $id = $_POST['medstore_delete_id'];

    $query = "DELETE FROM medstore WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: medstore.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: medstore.php'); 
    }    
}

if(isset($_POST['medstore_updatebtn']))
{
    $id = $_POST['medstore_edit_id'];
    $pha = $_POST['Pharmacyname'];  
    $add = $_POST['Address'];
    $con = $_POST['Phonenumber']; 
    $state = $_POST['state']; 


    $query = "UPDATE medstore SET name='$pha', address='$add', phone='$con', state='$state' WHERE id='$id' ";


    $query_run = mysqli_query($connection, $query);


    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: medstore.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is Updated";       
        $_SESSION['status_code'] = "error";
        header('Location: medstore.php'); 
    } 
}

//-------------------xxx-------------------------------//


//-----------------POLICE EMERGENCY ---------------------//

if(isset($_POST['polbtn']))
{
    $pname = $_POST['pname'];
    $pcontactno = $_POST['pcontactnumber'];
    $state = $_POST['state']; 

   
    $query = "INSERT INTO police_emergency (police_stn_name, police_no, state) VALUES ('$pname','$pcontactno','$state')";
    $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "Emergency Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location:emergency.php');
            }
            else 
            {
                $_SESSION['status'] = "Emergency Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: emergency.php');  
            }


}

if(isset($_POST['emergency_delete_btn']))
{
    $id = $_POST['emergency_delete_id'];

    $query = "DELETE FROM police_emergency WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: emergency.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: emergency.php'); 
    }    
}

if(isset($_POST['emergency_updatebtn']))
{
    $id = $_POST['emergency_edit_id'];
    $pname = $_POST['pname'];
    $pcontactno = $_POST['pcontactnumber'];
    $state = $_POST['state']; 


    $query = "UPDATE police_emergency SET police_stn_name='$pname', police_no='$pcontactno', state='$state' WHERE id='$id' ";

    $query_run = mysqli_query($connection, $query);


    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: emergency.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is Updated";       
        $_SESSION['status_code'] = "error";
        header('Location: emergency.php'); 
    } 
}



//--------------------xxx---------------------------------//

//----------------Ambulance Service----------------------------//

if(isset($_POST['ambbtn']))
{
    $aname = $_POST['aname'];
    $acontactnumber = $_POST['acontactnumber'];
    $state = $_POST['state']; 

   
    $query = "INSERT INTO ambulance_emergency (ambulance_name, ambulance_no,state) VALUES ('$aname','$acontactnumber','$state')";
    $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "Emergency Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location:emergency.php');
            }
            else 
            {
                $_SESSION['status'] = "Emergency Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: emergency.php');  
            }


}

if(isset($_POST['ambulance_emergency_delete_btn']))
{
    $id = $_POST['ambulance_emergency_delete_id'];

    $query = "DELETE FROM ambulance_emergency WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: emergency.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: emergency.php'); 
    }    
}

if(isset($_POST['ambulance_emergency_updatebtn']))
{
    $id = $_POST['ambulance_emergency_edit_id'];
    $aname = $_POST['aname'];
    $acontactnumber = $_POST['acontactnumber'];
    $state = $_POST['state']; 


    $query = "UPDATE ambulance_emergency SET ambulance_name='$aname', ambulance_no='$acontactnumber', state='$state' WHERE id='$id' ";

    $query_run = mysqli_query($connection, $query);


    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: emergency.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is Updated";       
        $_SESSION['status_code'] = "error";
        header('Location: emergency.php'); 
    } 
}

//---------------xxx---------------------//

//----------------Fire Service----------------------------//

if(isset($_POST['firebtn']))
{
    $fname = $_POST['fname'];
    $fcontactnumber = $_POST['fcontactnumber'];
    $state = $_POST['state']; 

   
    $query = "INSERT INTO fire_emergency (fire_service_name, fire_no, state) VALUES ('$fname','$fcontactnumber','$state')";
    $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "Emergency Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location:emergency.php');
            }
            else 
            {
                $_SESSION['status'] = "Emergency Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: emergency.php');  
            }


}


if(isset($_POST['fire_emergency_delete_btn']))
{
    $id = $_POST['fire_emergency_delete_id'];

    $query = "DELETE FROM fire_emergency WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: emergency.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: emergency.php'); 
    }    
}

if(isset($_POST['fire_emergency_updatebtn']))
{
    $id = $_POST['fire_emergency_edit_id'];
    $fname = $_POST['fname'];
    $fcontactnumber = $_POST['fcontactnumber'];
    $state = $_POST['state']; 


    $query = "UPDATE fire_emergency SET fire_service_name='$fname', fire_no='$fcontactnumber', state='$state' WHERE id='$id' ";

    $query_run = mysqli_query($connection, $query);


    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: emergency.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is Updated";       
        $_SESSION['status_code'] = "error";
        header('Location: emergency.php'); 
    } 
}

//---------------xxx---------------------//

//-------------------ORPHANAGE---------------------//

if(isset($_POST['orphanagebtn']))
{
    $name = $_POST['Orphanagename'];
    $address = $_POST['Address'];
    $website = $_POST['Website'];
    $link = $_POST['DonationLink'];
    $number = $_POST['Phonenumber'];
    $state = $_POST['state'];    

   
    $query = "INSERT INTO `orphanage`(`name`, `address`, `website`, `link`, `contact`,`state`) VALUES ('$name','$address','$website','$link','$number','$state' )";
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


if(isset($_POST['orphan_delete_btn']))
{
    $id = $_POST['orphan_delete_id'];

    $query = "DELETE FROM orphanage WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: orphan.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: orphan.php'); 
    }    
}

if(isset($_POST['orphan_updatebtn']))
{
    $id = $_POST['orphan_edit_id'];
    $name = $_POST['Orphanagename'];
    $address = $_POST['Address'];
    $website = $_POST['Website'];
    $link = $_POST['DonationLink'];
    $number = $_POST['Phonenumber'];
    $state = $_POST['state']; 


    $query = "UPDATE orphanage SET name='$name', address='$address', website ='$website', link = '$link', contact ='$number', 
    state='$state' WHERE id='$id' ";

    $query_run = mysqli_query($connection, $query);


    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location:orphan.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is Updated";       
        $_SESSION['status_code'] = "error";
        header('Location: orphan.php'); 
    } 
}

//-------------------xxx---------------------------//


//-----------------------EPASS-------------------//
if(isset($_POST['epassbtn']))
{

    $people = $_POST['people'];
    $contact = $_POST['Phonenumber'];
   
    $query = "INSERT INTO `epass`(`people`, `contact`) VALUES ('$people','$contact' )";
    $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "ePass Details Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location:epass.php');
            }
            else 
            {
                $_SESSION['status'] = "ePass Details Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: epass.php');  
            }


}

//---------------------xxx----------------------------//

//----------------ECOMMERCE------------------------//

if(isset($_POST['ecombtn']))
{

    $text = $_POST['text'];
    $image = $_POST['image'];
    $type = $_POST['type'];
   
    $query = "INSERT INTO `ecommerce`(`text`, `image`,`type`) VALUES ('$text','$image','$type' )";
    $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "eCommerce Details Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location:ecommerce.php');
            }
            else 
            {
                $_SESSION['status'] = "eCommerce Details Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: ecommerce.php');  
            }


}

if(isset($_POST['ecommerce_delete_btn']))
{
    $id = $_POST['ecommerce_delete_id'];

    $query = "DELETE FROM ecommerce WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: ecommerce.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: ecommerce.php'); 
    }    
}

if(isset($_POST['ecommerce_updatebtn']))
{
    $id = $_POST['ecommerce_edit_id'];
    $text = $_POST['text'];
    $image = $_POST['image'];
    $type = $_POST['type'];
 


    $query = "UPDATE ecommerce SET `text`='$text', `image`='$image', `type` ='$type' WHERE id='$id' ";

    $query_run = mysqli_query($connection, $query);


    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: ecommerce.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is Updated";       
        $_SESSION['status_code'] = "error";
        header('Location: ecommerce.php'); 
    } 
}


//--------------------xxx-----------------------------------//

//------------------COVID CENTERS-----------------------//

if(isset($_POST['covidbtn']))
{

    $name = $_POST['name'];
    $address = $_POST['address'];
    $number = $_POST['number'];
    $directions = $_POST['directions'];
    $type = $_POST['type'];
    $state = $_POST['state'];    
   
    $query = "INSERT INTO `covid_centers`(`name`, `address`,`number`,`link`,`type`,`state`) VALUES ('$name','$address','$number','$directions','$type','$state' )";
    $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "Covid19 Centers Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location:covid-centers.php');
            }
            else 
            {
                $_SESSION['status'] = "Covid19 Centers Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: covid-centers.php');  
            }

}

if(isset($_POST['covid_delete_btn']))
{
    $id = $_POST['covid_delete_id'];

    $query = "DELETE FROM covid_centers WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: covid-centers.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: covid-centers.php'); 
    }    
}

if(isset($_POST['covid_updatebtn']))
{
    $id = $_POST['covid_edit_id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $number = $_POST['number'];
    $directions = $_POST['directions'];
    $type = $_POST['type'];
    $state = $_POST['state']; 

    $query = "UPDATE covid_centers SET name='$name', address='$address', `number` ='$number', link='$directions', type='$type', state='$state' WHERE id='$id' ";

    $query_run = mysqli_query($connection, $query);


    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: covid-centers.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is Updated";       
        $_SESSION['status_code'] = "error";
        header('Location: covid-centers.php'); 
    } 
}

//-----------------------------------xxx------------------------------//





?>

