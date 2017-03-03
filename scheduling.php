
<?php
if (!$con)
  {
    die('Could not connect: ' . mysqli_error());
  }
	
    if ($_POST['FirstName'] == '')
	{
		$FirstName = '<span style="color:red;">First name omitted.</span>';
	}
	else
	{
		$FirstName = $_POST['FirstName'];
	}
  
    	if ($_POST['LastName'] == '')
	{
		$LastName = '<span style="color:red;">Last name omitted.</span>';
	}
	else
	{
		$LastName = $_POST['LastName'];
	}
   
    	if ($_POST['Address'] == '')
	{
		$Address = '<span style="color:red;">Address omitted.</span>';
	}
	else
	{
		$Address = $_POST['Address'];
	}

	if ($_POST['City'] == '')
	{
		$City = '<span style="color:red;">City omitted.</span>';
	}
	else
	{
		$City = $_POST['City'];
	}

    if ($_POST['State'] == '')
	{
		$State = '<span style="color:red;">State omitted.</span>';
	}
	else
	{
		$State = $_POST['State'];
	}

      if ($_POST['Zip'] == '')
	{
		$Zip = '<span style="color:red;">Zip omitted.</span>';
	}
	else
	{
		$Zip = $_POST['Zip'];
	}

          if ($_POST['PhoneNumber'] == '')
	{
		$PhoneNumber = '<span style="color:red;">Phone Number omitted.</span>';
	}
	else
	{
		$PhoneNumber = $_POST['PhoneNumber'];
	}

             if ($_POST['Email'] == '')
	{
		$Email = '<span style="color:red;">Email omitted.</span>';
	}
	else
	{
		$Email = $_POST['Email'];
	}

               if ($_POST['PetType'] == '')
	{
		$PetType = '<span style="color:red;">Pet Type omitted.</span>';
	}
	else
	{
		$PetType = $_POST['PetType'];
	}

                 if ($_POST['Breed'] == '')
	{
		$Breed = '<span style="color:red;">Breed omitted.</span>';
	}
	else
	{
		$Breed = $_POST['Breed'];
	}

                    if ($_POST['PetName'] == '')
	{
		$PetName = '<span style="color:red;">Pet Name omitted.</span>';
	}
	else
	{
		$PetName = $_POST['PetName'];
	}

                        if ($_POST['NeuteredOrSpayed'] == '')
	{
		$NeuteredOrSpayed = '<span style="color:red;">NeuteredOrSpayed omitted.</span>';
	}
	else
	{
		$NeuteredOrSpayed = $_POST['NeuteredOrSpayed'];
	}

                          if ($_POST['PetBirthday'] == '')
	{
		$PetBirthday = '<span style="color:red;">Pet Birthday omitted.</span>';
	}
	else
	{
		$PetBirthday = $_POST['PetBirthday'];
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Grooming Appointment</title>
</head>
<body>
<form action="submit.php" method="post">
    <p>
        <label for="FirstName">First Name:</label>
        <input type="text" name="Firstname" id="FirstName">
    </p>
    <p>
        <label for="LastName">Last Name:</label>
        <input type="text" name="LastName" id="LastName">
    </p>
      <p>
        <label for="Address">Address:</label>
        <input type="text" name="Address" id="Address">
    </p>
     <p>
        <label for="City">City:</label>
        <input type="City" name="City" id="City">
    </p>
      <p>
        <label for="State">State:</label>
        <input type="State" name="State" id="State">
    </p>
     <p>
        <label for="Zip">Zip:</label>
        <input type="Zip" name="Zip" id="Zip">
    </p>
      <p>
        <label for="PhoneNumber">Phone Number:</label>
        <input type="PhoneNumber" name="PhoneNumber" id="PhoneNumber">
    </p>
     <p>
        <label for="Email">Email:</label>
        <input type="Email" name="Email" id="Email">
    </p>
      <p>
        <label for="PetType">Pet Type:</label>
        <input type="PetType" name="PetType" id="PetType">
    </p>
      <p>
        <label for="Breed">Breed:</label>
        <input type="Breed" name="Breed" id="Breed">
    </p>
        <p>
        <label for="PetName">PetName:</label>
        <input type="PetName" name="PetName" id="PetName">
    </p>
       <p>
        <label for="NeuteredOrSpayed">Neutered or Spayed:</label>
        <input type="NeuteredOrSpayed" name="NeuteredOrSpayed" id="NeuteredOrSpayed">
    </p>
    <p>
        <label for="PetBirthday">Pet Birthday:</label>
        <input type="PetBirthday" name="PetBirthday" id="PetBirthday">
    </p>
    <input type="submit" value="Submit">
</form>
</body>
</html>