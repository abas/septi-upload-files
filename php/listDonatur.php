<?php
include('connect.php');

$sql = "SELECT * FROM donation";
$result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo "<br> id: ". $row["id"]. " - Name: ". $row["name"]. " " . $row["email"] . "<br>";
//     }
// } else {
//     echo "0 results";
// }

// $conn->close();
// ?>