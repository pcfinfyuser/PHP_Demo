<?php
function getSampleDataFromDB()
{

if (function_exists('mysqli_connect') == false){
    echo "need to enable mysqli!";
    error_log("need to enable mysqli!", 0);
    return;
}

    $dbname = "ad_3054526f315b059";
    $hostname ="us-cdbr-iron-east-05.cleardb.net";
    $username = "b9a8cdf8ce0639";
    $password = "561dbd44";


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