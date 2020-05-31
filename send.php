
<!DOCTYPE html>
<html>
<body>


<?php
$servername = "files.000webhost.com";
$username = "id13850986_root";
$password = "King@1234567"; 
$dbname = "id13850986_mla";
// Create connection
//$link = new mysqli();
$conn = mysqli_connect(["files.000webhost.com" ,[ "id13850986_root", [ "King@1234567",[ "id13850986_mla"]]]]);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// define variables and set to empty values
$name_ = $locality_ = $address_ = $phonenumber_ = $description_ = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  echo "hello";
  $name_ = test_input($_POST["Name"]);
  $locality_ = test_input($_POST["locality"]);
  $address_ = test_input($_POST["address"]);
  $phonenumber_ = test_input($_POST["phn"]);
  $description_ = test_input($_POST["des"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



// prepare and bind
$stmt = $conn->prepare("INSERT INTO MyGuests VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $named, $localityd, $addressd, $phonenumberd, $descriptiond);

// set parameters and execute
$named = $name_;
$localityd = $locality_;
$addressd = $address_;
$phonenumberd= $phonenumber_;
$descriptiond= $description_;
$stmt->execute();


if ($conn->query($stmt) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $stmt . "<br>" . $conn->error;
}

$stmt->close();
$conn->close();
?>
</html>
</body>
