
<?php
/* Database credentials */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'econ');
 

try{
    $db = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // Set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'success';
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());

}


// kenny approach
$con= mysqli_connect('localhost','root','','econ');


if($con){
    echo 'connect success';
}else{
    echo 'connect unsuccess';
}
