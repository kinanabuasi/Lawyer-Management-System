<header>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>

    <script>
    session_start();

    function MySucessFn_admin() {

        swal({
            title: "Dear Admin_Lawyer...Your Service is Successfully Added",
            text: "",
            type: "success",

            showConfirmButton: true,

        }, );
        // Add the "lighting" class to the button
        document.getElementById("myButton").classList.add("lighting");

        // document.getElementById("myButton").classList.remove("lighting");

        // Redirect to add_service.php after the swal modal is closed
        swal.showLoading();
        setTimeout(function() {
            window.location = 'http://localhost/lawyermanagementsystem-main/add_service.php';
        }, );
        // Remove the "lighting" class from the button after a delay
        setTimeout(function() {
            document.getElementById("myButton").classList.remove("lighting");
        }, 1000);
        // Send AJAX request to server-side script
        // var xhr = new XMLHttpRequest();
        // xhr.open("POST", "save_notification.php", true);
        // xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        // xhr.onreadystatechange = function() {
        //     if (xhr.readyState === 4 && xhr.status === 200) {
        //         // Notification sent successfully, update counter
        //         var counter = parseInt(xhr.responseText);
        //         document.getElementById("notificationCount").textContent = counter;
        //     }
        // };
        // xhr.send();

    }
    </script>
    <style>
    .lighting {
        background-color: yellow;
        /* Add any other styling for the "lighting" effect here */
    }
    </style>
</header>
<?php
session_start();
	include_once 'db_con/dbCon.php';
	
	$okFlag = TRUE;
	if($okFlag){
		
		if(isset($_FILES["fileToUpload"]["name"]) && $_FILES["fileToUpload"]["name"] != ''){
			$service_photo = null;
			//echo 123;exit;
			$target_dir = "images/upload/";
			$service_photo = date('YmdHis_');
			$service_photo .= basename($_FILES["fileToUpload"]["name"]);
			$target_file = $target_dir . $service_photo;
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if($check !== false) {
				$uploadOk = 1;
				} else {
				$uploadOk = 0;
			}
			// Check if file already exists
			if (file_exists($target_file)) {
				$uploadOk = 0;
			}
			// Check file size
			if ($_FILES["fileToUpload"]["size"] > 5000000) {
				$uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "JPG" &&$imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "JPEG"
			&& $imageFileType != "gif" ) {
				$uploadOk = 0;
			}
			
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				$checkFlag = FALSE;
				// if everything is ok, try to upload file
				} else {
				if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
					} else {
					$checkFlag = FALSE;
				}
			}
            // $service_photo = '';
			// echo $service_photo;exit;
			}else{
				$service_photo = isset($_POST['service_photo']) ;
			// echo $service_photo;exit;
		}
		
		$lawyer_name = $_SESSION['first_Name'] . ' ' . $_SESSION['last_Name'];
		$service_id = uniqid('AdminService');
		$service_name = $_REQUEST['service_name'];
		$service_type= $_REQUEST['service_type'];
		$service_description = $_REQUEST['service_description'];
		$service_price = $_REQUEST['service_price'];
		// $service_photo = $_REQUEST['photo'];
		
		
		include 'Add_service.php';
		$conn = connect();
		
            // sql query for inserting data into database
            $sql = "INSERT INTO `legal_service` (`service_id`,`service_name`,service_type,service_description,service_price,lawyer_name ,service_photo,IsAccepted)  VALUES ('$service_id','$service_name', '$service_type', '$service_description', '$service_price','$lawyer_name', '$service_photo','1');";
        //   echo $sql;
	
		//session_start();
		// include("db_con/dbCon.php");
		
		   $result=mysqli_query($conn, $sql) ;
            if($result==1)
            {
				// $message = "New service";
				// $timestamp = date('Y-m-d H:i:s');
				// // $is_read = 0; // 0 for unread, 1 for read
				// $sql = "INSERT INTO notifications (message, timestamp) VALUES ('$message', '$timestamp')";
				// mysqli_query($conn, $sql);
				
				// // Get the updated counter
				// $countSql = "SELECT COUNT(*) AS notification_count FROM notifications WHERE is_read = 0";
				// $result = mysqli_query($conn, $countSql);
				// $row = mysqli_fetch_assoc($result);
				// $notificationCount = $row['notification_count'];
				
				// Send the updated counter back to the client-side JavaScript
				// echo $notificationCount;
                    echo "<script type= 'text/javascript'>MySucessFn_admin();</script>";
                    
                    
					
			}
	}
?>.