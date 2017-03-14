<? 
include('connect-db.php'); 
echo "<table border=1 >"; 
echo "<tr>"; 
echo "<td><b>GroomingID</b></td>"; 
echo "<td><b>FirstName</b></td>"; 
echo "<td><b>LastName</b></td>"; 
echo "<td><b>Address</b></td>"; 
echo "<td><b>City</b></td>"; 
echo "<td><b>State</b></td>"; 
echo "<td><b>Zip</b></td>"; 
echo "<td><b>PhoneNumber</b></td>"; 
echo "<td><b>Email</b></td>"; 
echo "<td><b>PetType</b></td>"; 
echo "<td><b>Breed</b></td>"; 
echo "<td><b>PetName</b></td>"; 
echo "<td><b>NeuteredOrSpayed</b></td>"; 
echo "<td><b>PetBirthday</b></td>"; 
echo "</tr>"; 
$result = mysql_query("SELECT * FROM grooming")

or die(mysql_error());

// display data in table

echo "<p><b>View All</b> | <a href='view-paginated.php?page=1'>View Paginated</a></p>";



echo "<table border='1' cellpadding='10'>";

echo "<tr> <th>ID</th> <th>First Name</th> <th>Last Name</th> <th>Address</th> <th>City</th> <th>State</th> <th>Zip</th> <th>PhoneNumber</th> <th>Email</th> <th>PetType</th> <th>Breed</th> <th>PetName</th> <th>NeuteredOrSpayed</th> <th>PetBirthday</th></tr>";



// loop through results of database query, displaying them in the table

while($row = mysql_fetch_array( $result )) {



// echo out the contents of each row into a table

echo "<tr>";

echo '<td>' . $row['GroomingID'] . '</td>';

echo '<td>' . $row['FirstName'] . '</td>';

echo '<td>' . $row['LastName'] . '</td>';

echo '<td>' . $row['Address'] . '</td>';

echo '<td>' . $row['City'] . '</td>';

echo '<td>' . $row['State'] . '</td>';

echo '<td>' . $row['Zip'] . '</td>';

echo '<td>' . $row['PhoneNumber'] . '</td>';

echo '<td>' . $row['Email'] . '</td>';

echo '<td>' . $row['PetType'] . '</td>';

echo '<td>' . $row['Breed'] . '</td>';

echo '<td>' . $row['PetName'] . '</td>';

echo '<td>' . $row['NeuteredOrSpayed'] . '</td>';

echo '<td>' . $row['PetBirthday'] . '</td>';

echo '<td><a href="edit.php?id=' . $row['GroomingID'] . '">Edit</a></td>';

echo '<td><a href="delete.php?id=' . $row['GroomingID'] . '">Delete</a></td>';

echo "</tr>";

}



// close table>

echo "</table>";


?>