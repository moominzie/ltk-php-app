<?php 
// DB credentials.
define('DB_HOST','us-cdbr-east-03.cleardb.com');
define('DB_USER','b981ea615185df');
define('DB_PASS','dc16d4d6');
define('DB_NAME','heroku_c320b9bbaf46e14');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>