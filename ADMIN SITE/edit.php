<?php
	include_once('connect-db.php');
 
	if( isset($_GET['edit']) )
	{
		$id = $_GET['edit'];
		$res= mysql_query("SELECT * FROM grooming WHERE GroomingID='$GroomingID'");
		$row= mysql_fetch_array($res);
	}
 
	if( isset($_POST['FirstName']) )
	{
		$FirstName = $_POST['FirstName'];
		$GroomingID  	 = $_POST['GroomingID'];
		$sql     = "UPDATE grooming SET FirstName='$FirstName' WHERE GroomingID='$GroomingID'";
		$res 	 = mysql_query($sql) 
                                    or die("Could not update".mysql_error());
		
	}
 
?>


<body>
<form method="POST">
<strong>Name:</strong> <input type="text" FirstName="FirstName" value="<?php echo $_POST['FirstName'] ?>"><br />
<input type="hidden" name="GroomingID" value="<?php echo $GroomingID; ?>">
<input type="submit" value=" Update "/>
</form>