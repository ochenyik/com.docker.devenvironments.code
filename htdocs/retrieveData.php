<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 40%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>
<?php

//echo "hello World";
$servername = "localhost";
$username = "root";
$password = "Password";
$dbname = "mydbnode";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, address FROM mydemotable";
$result = $conn->query($sql);
echo "<table>
<tr>
<th>Name</th>
<th>Address</th>

</tr>";

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo $row["name"]. "   " ."lives at"." ". $row["address"]. "<br>";
	echo "<tr>";
	echo "<td>" . $row['name'] . "</td>";
	echo "<td>" . $row['address'] . "</td>";
	echo "</tr>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>

</body>
</html>