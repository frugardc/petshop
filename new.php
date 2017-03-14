<? 
include('connect-db.php'); 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "INSERT INTO `grooming` ( `GroomingID` ,  `FirstName` ,  `LastName` ,  `Address` ,  `City` ,  `State` ,  `Zip` ,  `PhoneNumber` ,  `Email` ,  `PetType` ,  `Breed` ,  `PetName`  ) VALUES(  '{$_POST['GroomingID']}' ,  '{$_POST['FirstName']}' ,  '{$_POST['LastName']}' ,  '{$_POST['Address']}' ,  '{$_POST['City']}' ,  '{$_POST['State']}' ,  '{$_POST['Zip']}' ,  '{$_POST['PhoneNumber']}' ,  '{$_POST['Email']}' ,  '{$_POST['PetType']}' ,  '{$_POST['Breed']}' ,  '{$_POST['PetName']}'  ) "; 
mysql_query($sql) or die(mysql_error()); 
echo "Added row.<br />"; 
echo "<a href='list.php'>Back To Listing</a>"; 
} 
?>

<form action='' method='POST'> 
<p><b>GroomingID:</b><br /><input type='text' name='GroomingID'/> 
<p><b>FirstName:</b><br /><input type='text' name='FirstName'/> 
<p><b>LastName:</b><br /><input type='text' name='LastName'/> 
<p><b>Address:</b><br /><input type='text' name='Address'/> 
<p><b>City:</b><br /><input type='text' name='City'/> 
<p><b>State:</b><br /><input type='text' name='State'/> 
<p><b>Zip:</b><br /><input type='text' name='Zip'/> 
<p><b>PhoneNumber:</b><br /><input type='text' name='PhoneNumber'/> 
<p><b>Email:</b><br /><input type='text' name='Email'/> 
<p><b>PetType:</b><br /><input type='text' name='PetType'/> 
<p><b>Breed:</b><br /><input type='text' name='Breed'/> 
<p><b>PetName:</b><br /><input type='text' name='PetName'/> 
<p><input type='submit' value='Add Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 

