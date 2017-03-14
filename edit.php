<? 
include('connect-db.php'); 
if (isset($_GET['id']) ) { 
$id = (int) $_GET['id']; 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "UPDATE `grooming` SET  `GroomingID` =  '{$_POST['GroomingID']}' ,  `FirstName` =  '{$_POST['FirstName']}' ,  `LastName` =  '{$_POST['LastName']}' ,  `Address` =  '{$_POST['Address']}' ,  `City` =  '{$_POST['City']}' ,  `State` =  '{$_POST['State']}' ,  `Zip` =  '{$_POST['Zip']}' ,  `PhoneNumber` =  '{$_POST['PhoneNumber']}' ,  `Email` =  '{$_POST['Email']}' ,  `PetType` =  '{$_POST['PetType']}' ,  `Breed` =  '{$_POST['Breed']}' ,  `PetName` =  '{$_POST['PetName']}'   WHERE `id` = '$id' "; 
mysql_query($sql) or die(mysql_error()); 
echo (mysql_affected_rows()) ? "Edited row.<br />" : "Nothing changed. <br />"; 
echo "<a href='list.php'>Back To Listing</a>"; 
} 
$row = mysql_fetch_array ( mysql_query("SELECT * FROM `grooming` WHERE `id` = '$id' ")); 
?>

<form action='' method='POST'> 
<p><b>GroomingID:</b><br /><input type='text' name='GroomingID' value='<?= stripslashes($row['GroomingID']) ?>' /> 
<p><b>FirstName:</b><br /><input type='text' name='FirstName' value='<?= stripslashes($row['FirstName']) ?>' /> 
<p><b>LastName:</b><br /><input type='text' name='LastName' value='<?= stripslashes($row['LastName']) ?>' /> 
<p><b>Address:</b><br /><input type='text' name='Address' value='<?= stripslashes($row['Address']) ?>' /> 
<p><b>City:</b><br /><input type='text' name='City' value='<?= stripslashes($row['City']) ?>' /> 
<p><b>State:</b><br /><input type='text' name='State' value='<?= stripslashes($row['State']) ?>' /> 
<p><b>Zip:</b><br /><input type='text' name='Zip' value='<?= stripslashes($row['Zip']) ?>' /> 
<p><b>PhoneNumber:</b><br /><input type='text' name='PhoneNumber' value='<?= stripslashes($row['PhoneNumber']) ?>' /> 
<p><b>Email:</b><br /><input type='text' name='Email' value='<?= stripslashes($row['Email']) ?>' /> 
<p><b>PetType:</b><br /><input type='text' name='PetType' value='<?= stripslashes($row['PetType']) ?>' /> 
<p><b>Breed:</b><br /><input type='text' name='Breed' value='<?= stripslashes($row['Breed']) ?>' /> 
<p><b>PetName:</b><br /><input type='text' name='PetName' value='<?= stripslashes($row['PetName']) ?>' /> 
<p><input type='submit' value='Edit Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
<? } ?> 

