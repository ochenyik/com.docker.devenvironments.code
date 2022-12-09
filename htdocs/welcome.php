<html>
<body>

<?php

$name = $_POST["name"];
echo $name;
$address = $_POST["address"];
echo $address;
$servername = "localhost";
$username = "root";
$password = "Password";
$database = "mydbnode";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "INSERT INTO mydemotable (name, address)
VALUES ('$name', '$address')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
</body>
</html>