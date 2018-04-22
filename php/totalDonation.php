<?php include('connect.php');
$sql  = "SELECT * FROM donation ";
$donation = $conn->query($sql);
$totalDonation = 0;
if ($donation->num_rows > 0) {
  while($row = $donation->fetch_assoc()) {
    $totalDonation += $row['fee'];
  }
} else {
    echo "data kosong";
}

// echo $totalDonation;

$conn->close();