<?php

$host = "localhost"; //127.0.0.1
$user = "root";
$password = "DBAdmin"; 
$dbname = "CoxandrewjDB";
$conn = new \mysqli($host, $user, $password, $dbname)
     or die('Could not connect to the database server.  ' . mysqli_connect_error($conn));

print_r($conn);
     
function mysql_fix_string($conn, $string) {
    if (get_magic_quotes_gpc()) {
        $string = stripslashes($string);
    }
    $string = htmlentities($string);
    return $conn->real_escape_string($string);
}

print_r($conn);

mysqli($host, $user, $password, $dbname);

?>

