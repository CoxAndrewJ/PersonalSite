<?php
require_once DataBaseConnection.php;

$message = $_POST['user-message'];
$name = $_POST['name'];
$email = $_POST['email'];

print_r();


echo "<p>" . $message . "</p>";
echo "<p>" . $name . "</p>";
echo $email;

$sql = "INSERT INTO CoxandrewjDB.messages ADD " . $message;

