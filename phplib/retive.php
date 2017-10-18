<?php
include "db_confice.php";

$sql = "SELECT * FROM members";
$result = $conn->query($sql);
//var_dump($result);

while($row = mysqli_fetch_assoc($result)){
	echo $row['id'] . " : " . $row['fname'] . " : " . $row['lname'] . " : " . $row['contact'] . "<br>";
}
$conn->(close);
?>