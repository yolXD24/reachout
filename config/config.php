<?php
ini_set('display_errors',1);
define('DB_SERVER', 'remotemysql.com:3306');
define('DB_USERNAME', 'xVMI2W19dq');
define('DB_PASSWORD', 'HT6LyFpIV8');
define('DB_NAME', 'xVMI2W19dq');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME,3306);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error().'\n'.DB_SERVER.'\n'.DB_NAME);
}else{

}
?>
