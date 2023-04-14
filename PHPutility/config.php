
<?php
/* Database credentials */
define('DB_SERVER', 'us-cdbr-east-06.cleardb.net');
define('DB_USERNAME', 'b5a3f3423c0f95');
define('DB_PASSWORD', '448d8a45');
define('DB_NAME', 'heroku_66bb85761ed9b1b');
//define('DB_SERVER', 'us-cdbr-east-06.cleardb.net');
//define('DB_USERNAME', 'ba67ef7fb4fccc');
//define('DB_PASSWORD', '98717b74');
//define('DB_NAME', 'heroku_bdd8b614aa3e447');
/* Attempt to connect to MySQL database */
mysql://b5a3f3423c0f95:448d8a45@us-cdbr-east-06.cleardb.net/heroku_66bb85761ed9b1b?reconnect=true
try{
    $db = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // Set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>
