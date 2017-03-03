<?php

define('DB_NAME', 'pet_shop4');
define('DB_USER', 'root');
define('DB_PASSWORD', 'pwdpwd');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
	die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
	die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
}

$value = $_POST['FirstName'];
$value2 = $_POST['LastName'];
$value3 = $_POST['Address'];
$value4 = $_POST['City'];
$value5 = $_POST['State'];
$value6 = $_POST['Zip'];
$value7 = $_POST['PhoneNumber'];
$value8 = $_POST['Email'];
$value9 = $_POST['PetType'];
$value10 = $_POST['Breed'];
$value11 = $_POST['PetName'];
$value12 = $_POST['NeuteredOrSpayed'];
$value13 = $_POST['PetBirthday'];

$sql = "INSERT INTO grooming (FirstName, LastName, Address, City, State, Zip, PhoneNumber, Email, PetType, Breed, PetName, NeuteredOrSpayed, PetBirthday) VALUES ('$value', '$value2', '$value3', '$value4', '$value5', '$value6', '$value7', '$value8', '$value9', '$value10', '$value11', '$value12', '$value13')";

if (!mysql_query($sql)) {
	die('Error: ' . mysql_error());
}
echo "Thank You!" . " -" . "<a href='index.php' style='text-decoration:none;color:#3fc2ce;'> Return Home</a>";
mysql_close();
?>