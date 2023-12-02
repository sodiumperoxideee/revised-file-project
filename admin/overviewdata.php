<?php
require_once 'connect.php';

$sql = "SELECT COUNT(*) as totalUsers, SUM(amount_paid) as totalRevenue FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $overviewData = $result->fetch_assoc();
} else {
    $overviewData = array(); // handle no data case
}

$conn->close();
