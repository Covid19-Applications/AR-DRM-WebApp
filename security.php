 <?php
ob_start();
session_start();
include('admin/database/dbconfig.php');

if($connection)
{
    // echo "Database Connected";
}
else
{
    header("Location: admin/database/dbconfig.php");
}


if(!$_SESSION['cusername'])
{
    header('Location: login.php');
}


?>