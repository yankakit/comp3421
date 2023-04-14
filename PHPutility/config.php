
<?php
/* Database credentials */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'econ');
//define('DB_SERVER', 'us-cdbr-east-06.cleardb.net');
//define('DB_USERNAME', 'ba67ef7fb4fccc');
//define('DB_PASSWORD', '98717b74');
//define('DB_NAME', 'heroku_bdd8b614aa3e447');
/* Attempt to connect to MySQL database */
try{
    $db = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // Set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>
