<?php
// Connect to the database
include_once 'db_con/dbCon.php';
$conn = connect(); 

// Get the updated counter
$countSql = "SELECT COUNT(*) AS notification_count FROM notifications WHERE is_read = 0 AND message = 'New service notification' ";
$result = mysqli_query($conn, $countSql);
$row = mysqli_fetch_assoc($result);
$notificationCount = $row['notification_count'];


$countSql_r = "SELECT COUNT(*) AS notification_count FROM notifications WHERE is_read = 0 AND message = 'New request notification' ";
$result_r = mysqli_query($conn, $countSql_r);
$row = mysqli_fetch_assoc($result_r);
$notificationCount_r = $row['notification_count'];
// Send the updated counter back to the client-side JavaScript
// echo $notificationCount;
?>
