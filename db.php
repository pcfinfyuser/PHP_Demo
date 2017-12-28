<?php
function getSampleDataFromDB()
{

if (function_exists('mysqli_connect') == false){
    echo "need to enable mysqli!";
    error_log("need to enable mysqli!", 0);
    return;
}

    $dbname = "ad_77f30097c67ca30";
    $hostname ="us-cdbr-iron-east-05.cleardb.net";
    $username = "bd3e38fd0badda";
    $password = "55902d54";


$mysql = mysqli_connect($hostname, $username, $password, $dbname );
if (mysqli_connect_errno()){
  echo "Failed to connect to mysql: ", mysqli_connect_error();
  error_log("Failed to connect to MySQL: " , mysqli_connect_error());
return;
}else {
 echo "Success connecting to the DB!";
}
   
}
?>