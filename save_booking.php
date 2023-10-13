<header>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
	
	<script>
		function MySucessFn(){
			swal({
				title: "Dear User...Booking Details Sent Successfully",
				text: "",
				type: "success",
				
				showConfirmButton: true,
			},
			window.load = function(){
				window.location='http://localhost/lawyermanagementsystem-main/index.php';
			});
		}
	</script>
</header>
<?php
session_start();
	include_once 'db_con/dbCon.php';
	
	$okFlag = TRUE;
	if($okFlag){
		
		$date = $_POST['date'];
		$description = $_POST['description'];
		$client_id =$_SESSION['client_id'];
		$lawyer_id = $_POST['lawyer_id'];
		 /* echo $date ;
		echo $description;
		echo $client_id ;
		echo $lawyer_id;exit;
		 */
		$conn = connect();
		//Check duplicate value
		
		// sql query for inserting data into database
		$sql = "INSERT INTO `booking`(date, description, client_id, lawyer_id, status) VALUES('$date','$description','$client_id','$lawyer_id','Pending')";
		//echo $sql;exit;
		$result=mysqli_query($conn, $sql) or die(mysqli_error ($conn));
		if($result==1)
		{
			$message = "New request notification";
			$timestamp = date('Y-m-d H:i:s');
			// $is_read = 0; // 0 for unread, 1 for read
			$sql = "INSERT INTO notifications (message, timestamp) VALUES ('$message', '$timestamp')";
			mysqli_query($conn, $sql);
			
			// Get the updated counter
			// $countSql = "SELECT COUNT(*) AS notification_count FROM notifications WHERE is_read = 0 AND message = 'New request notification' ";
			// $result = mysqli_query($conn, $countSql);
			// $row = mysqli_fetch_assoc($result);
			// $notificationCount = $row['notification_count'];
				echo "<script type= 'text/javascript'>MySucessFn();</script>";
				
		}
		
	}
	
?>