<!DOCTYPE html>
</html>
</body>


<?php
$servername = "files.000webhost.com";
$username = "id13850986_root";
$password = "King@1234567";
$dbname = "id13850986_mla";

// Create connection
$link = new mysqli(...);
$conn = new mysqli($servername, $username , $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM MyGuests";
$result = $conn->query($sql);

if($_POST["username"]=="reddy" &&$_POST["pass"]=="1234"
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["$named"]. " - Name: " . $row["$localityd"]. " -address" . $row["$addressd"]. " -phonenumber" . $row["$phonenumberd"]. " -description" . $row["$descriptiond"]. "<br>";
  }
} 
else {
  echo "0 results";
}
}
else
{
	echo "wrong login id";
}	
$conn->close();
?>
</html>
</body>
