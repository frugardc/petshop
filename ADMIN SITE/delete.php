<html>
<head>
<title>Delete a Customer Appointment</title>
</head>
<body>

<h3>Enter the Customer ID Number below to delete a record</h3>

<?php
if(isset($_POST['delete']))
{
$server = 'localhost';

$user = 'root';

$pass = 'pwdpwd';

$db = 'pet_shop4';
$conn = mysql_connect($server, $user, $pass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

$GroomingID = $_POST['GroomingID'];

$sql = "DELETE FROM grooming ".
       "WHERE GroomingID = $GroomingID" ;

mysql_select_db('pet_shop4');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not delete data: ' . mysql_error());
}
echo "Deleted data successfully\n";
mysql_close($conn);
}
else
{


?>
<form method="post" action="<?php $_PHP_SELF ?>">
<table width="400" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="100">Grooming ID</td>
<td><input name="GroomingID" type="number" id="GroomingID"></td>
</tr>
<tr>
<td width="100"> </td>
<td> </td>
</tr>
<tr>
<td width="100"> </td>
<td>
<input name="delete" type="submit" id="delete" value="Delete">
</td>
</tr>
</table>
</form>
<?php
}
?>
</html>

