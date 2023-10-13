<?php
session_start();
if ( $_SESSION['login'] == true and $_SESSION['status'] == 'Active') { 
    include 'db_con/dbCon.php'; 
    ?>
	<!doctype html>
	<html lang="en">
		<head>
			<!-- Required meta tags -->
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			
			<!-- Bootstrap CSS -->
			<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
			<link rel="stylesheet" href="css/all.css">
			<link rel="stylesheet" href="css/simple-sidebar.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/style.css">
			<link rel="stylesheet" href="css/media.css">
			<title></title>
		</head>
		<body>
			<header class="customnav">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<nav class="navbar navbar-expand-lg ">
								<a class="navbar-brand cus-a" href="index.php">Lawyer Management System</a>
								
								
								<div class="collapse navbar-collapse" id="navbarSupportedContent">
									<ul class="navbar-nav ml-auto ">
										<li class="">
											<a class="nav-link cus-a" href="#">Full Name: <?php echo $_SESSION[
               'first_Name'
           ]; ?> <?php echo $_SESSION['last_Name']; ?></a>
										</li>
										<li class="">
											<a class="nav-link cus-a" href="logout.php">Log Out</a>
										</li>
										
									</ul>
									
								</div>
							</nav>
						</div>
					</div>
				</div>
			</header>
			<body>
				
				<div class="d-flex" id="wrapper">
					
					<!-- Sidebar -->
					<div class="bg-light border-right" id="sidebar-wrapper">
						<div class="sidebar-heading">My Profile</div>
						<div class="list-group list-group-flush">
							<a href="user_dashboard.php" class="list-group-item list-group-item-action bg-light">Dashboard</a><!--this page-->
							<a href="user_profile.php" class="list-group-item list-group-item-action bg-light">تعديل معلومات الحساب</a><!--user_profile page-->
                            <a href="user_services.php" class="list-group-item list-group-item-action bg-light">الخدمات الواردة</a><!--booking page-->
							<a href="user_booking.php" class="list-group-item list-group-item-action bg-light">طلباتي المرسلة</a><!--booking page-->
							<a href="update_password.php" class="list-group-item list-group-item-action bg-light">تحديث كلمة السر</a><!--booking page-->
						</div>
					</div>
					<!-- /#sidebar-wrapper -->
					
					<section class="bookingrqst">
						<div class="container">
							<div class="span7">   
								<div class="widget stacked widget-table action-table">
									
									<div class="widget-header">
										<i class="icon-th-list"></i>
										<h3>Recieved services</h3>
									</div> <!-- /widget-header -->
									
									<div class="widget-content">
										
										<table class="table table-striped table-bordered  table-success table-responsive">
											<thead>
												<tr>
                                            <th>service name</th>
                                            <th>service type</th>
                                            <th>service price</th>
                                            <th>lawyer name</th>
                                            <th>Payment</th>
												</tr>
											</thead>
                                            <?php
                                            include_once 'db_con/dbCon.php';
                                            $conn = connect();
                                            $client_name=$_SESSION['first_Name'] . ' '. $_SESSION['last_Name'];
                                            $result = mysqli_query(
                                                $conn,
                                                "SELECT * FROM `legal_service` WHERE IsAccepted='1' AND client_name= '$client_name' "
                                            );
                                            $counter = 0;
                                            while (
                                                $row = mysqli_fetch_array(
                                                    $result
                                                )
                                            ) { ?>
                                    <tbody id="myTable">
                                        <tr>
                                          
                                            <td><?php echo $row[
                                                'service_name'
                                            ]; ?></td>
                                            <td><?php echo $row[
                                                'service_type'
                                            ]; ?></td>
                                          
                                            <td><?php echo $row[
                                                'service_price'
                                            ]; ?></td>
                                            <td><?php echo $row[
                                                'lawyer_name'
                                            ]; ?></td>
                                            
                                            

                                            <?php if (
                                                $row['IsAccepted'] == '0'
                                            ) { ?>
                                            <td>
                                                <a class="btn btn-sm btn-warning"
                                                    href="admin_lawyers_orders.php?NotAccepted=<?= $row[
                                                        'service_id'
                                                    ] ?>">
                                                    <i class="fa fa-ban"></i>&nbsp; NotActive
                                                </a>
                                            </td>
                                            <?php } else { ?>
                                            <td>
                                                <a class="btn btn-sm btn-warning"
                                                    href="admin_lawyers_orders.php?Accepted=<?= $row[
                                                        'service_id'
                                                    ] ?>">
                                                    <i class="fa fa-unlock"></i>&nbsp; Accepted
                                                </a>
                                            </td>
                                            <?php }}
                                            ?>
											</table>
											
										</div> <!-- /widget-content -->
										
									</div> <!-- /widget -->
								</div>
							</div>
						</section>
						
					</div>
					<!-- /#wrapper -->
				
				
				
				</body>
				<footer>
				<div class="container">
				<div class="row">
				<div class="col">
				<h5>All rights reserved by Md. Ershadul Bari 2019</h5>
				</div>
				</div>
				</div>
				</footer>
				<!-- Optional JavaScript -->
				<!-- jQuery -->
				
				<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
				<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
				</body>
				</html>		
				<?php
} else {
    header('location:login.php?deactivate');
}
?>				