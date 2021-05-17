 <?php
ob_start();

$db['db_host'] = "localhost";
$db['db_user'] = "cerenorddtfq";
$db['db_pass'] = "Hackathon@1437";
$db['db_name'] = "hackathon";

foreach($db as $key => $value){
    define(strtoupper($key),$value);
}

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

?>
