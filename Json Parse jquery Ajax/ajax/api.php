<?php

//--------------------------------------------------------------------------
// Example php script for fetching data from mysql database
//--------------------------------------------------------------------------
$host = "localhost";
$user = "root";
$pass = "";

$databaseName = "photospots";
$tableName = "registration";

//--------------------------------------------------------------------------
// 1) Connect to mysql database
//--------------------------------------------------------------------------
//include 'DB.php';
$con = mysql_connect($host,$user,$pass);
$dbs = mysql_select_db($databaseName, $con);

//--------------------------------------------------------------------------
// 2) Query database for data
//--------------------------------------------------------------------------
$result = mysql_query("SELECT * FROM registration");          //query
while($array = mysql_fetch_row($result)){                       //fetch result
    $num[]=$array;
    /*$num[]=array(
        "regid"=>$array['regid'],
        "app_email"=>$array['app_email'],
        "name"=>$array['name'],
        "app_password"=>$array['app_password'],
        "app_pass_retype"=>$array['app_pass_retype'],
        "profile_image"=>$array['profile_image'],
        "profile_image_thumb"=>$array['profile_image_thumb']
    );*/
}

//--------------------------------------------------------------------------
// 3) echo result as json
//--------------------------------------------------------------------------
echo json_encode($num);

?>