<?php
	session_start();
	if($_SESSION['login']==TRUE AND $_SESSION['status']=='Active'){
		
		//session_start();
		include("db_con/dbCon.php");
		$conn = connect();
		
		
		
		if(isset($_GET['NotAccepted'])){
			
			$id = $_GET['NotAccepted'];
			//echo $id;exit;
			
			$sql = "UPDATE `legal_service` SET `IsAccepted`='1' WHERE service_id='$id'";
			//echo $sql;
			$conn->query($sql);
			header("Location:admin_lawyers_orders.php");
		}
		if(isset($_GET['Accepted'])){
			
			$id = $_GET['Accepted'];
			//echo $id;exit;
			
			$sql = "UPDATE `legal_service` SET `IsAccepted`='0' WHERE service_id='$id'";
			//echo $sql;
			$conn->query($sql);
			header("Location:admin_lawyers_orders.php");
		}

        // Update the is_read column to '0' for all records
        $sql1 = "UPDATE notifications SET is_read = '1' WHERE message='New service notification'; ";
        $result1 = mysqli_query($conn, $sql1);


	?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
                        <a class="navbar-brand cus-a" href="#">Lawyer Management System</a>


                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto ">
                                <li class="active">
                                    <a class="nav-link cus-a" href="#">Home <span class="sr-only">(current)</span></a>
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
    <?php include_once 'save_notification.php';?>
    <body>

        <div class="d-flex" id="wrapper">

            <!-- Sidebar -->
            <div class="bg-light border-right" id="sidebar-wrapper">
                <div class="sidebar-heading">Admin Panel</div>
                <div class="list-group list-group-flush">
                    <a href="admin_dashboard.php" class="list-group-item list-group-item-action bg-light">Dashboard</a>
                    <!--this page-->
                    <a href="Add_service.php" class="list-group-item list-group-item-action bg-light">إضافة خدمة</a>
                    <!--Add_service page-->
                    <a href="admin_lawyers_orders.php" class="list-group-item list-group-item-action bg-light">طلبات
                        المحامين <span id="notificationCounter"
                            class="notification-badge"><?php echo $notificationCount; ?></span></a>
                    <!--Add_service page-->
                    <a href="admin_lawyer.php" class="list-group-item list-group-item-action bg-light">عرض قائمة
                        المحامين</a>
                    <!--admin_lawyer page-->
                    <a href="admin_user.php" class="list-group-item list-group-item-action bg-light">عرض قائمة
                        المستخدمين</a>
                    <!--admin_user page-->
                </div>
            </div>
            <!-- /#sidebar-wrapper -->


            <section class="lawyers_orders">
                <div class="container">
                    <div class="span7">
                        <div class="widget stacked widget-table action-table">

                            <div class="widget-header">
                                <i class="icon-th-list"></i>
                                <h3>طلبات المحامين</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">

                                <table class="table table-striped table-bordered  table-success table-responsive">
                                    <thead>
                                        <tr>

                                            <th>service id</th>
                                            <th>service name</th>
                                            <th>service type</th>
                                            <th>service description</th>
                                            <th>service price</th>
                                            <th>lawyer name</th>
                                            <th>client name</th>
                                            <th>service photo</th>
                                            <th>IsAccepted</th>
                                            <th>lawyer id</th>

                                        </tr>
                                    </thead>
                                    <?php
												include_once 'db_con/dbCon.php';
												$conn = connect();
												$result = mysqli_query($conn,"SELECT * FROM `legal_service` ");
												$counter = 0;
												while($row = mysqli_fetch_array($result)) {
												?>
                                    <tbody id="myTable">
                                        <tr>
                                            <td><?php echo $row["service_id"]; ?></td>
                                            <td><?php echo $row["service_name"]; ?></td>
                                            <td><?php echo $row["service_type"]; ?></td>
                                            <td><?php echo $row["service_description"]; ?></td>
                                            <td><?php echo $row["service_price"]; ?></td>
                                            <td><?php echo $row["lawyer_name"]; ?></td>
                                            <td><?php echo $row["client_name"]; ?></td>
                                            <td><img src="images/upload/<?php echo $row["service_photo"]; ?>"
                                                    class="img-fluid " alt="<?php echo $row["service_photo"]; ?>">
                                            <td><?php echo $row["IsAccepted"]; ?></td>
                                            <td><?php echo $row["lawyer_id"]; ?></td>
                                            </td>

                                            <?php 
											 if ($row['IsAccepted'] == '0') {
											?>
                                            <td>
                                                <a class="btn btn-sm btn-warning"
                                                    href="admin_lawyers_orders.php?NotAccepted=<?=$row['service_id']?>">
                                                    <i class="fa fa-ban"></i>&nbsp; NotActive
                                                </a>
                                            </td>
                                            <?php
										} else {
											?>
                                            <td>
                                                <a class="btn btn-sm btn-warning"
                                                    href="admin_lawyers_orders.php?Accepted=<?=$row['service_id']?>">
                                                    <i class="fa fa-unlock"></i>&nbsp; Accepted
                                                </a>
                                            </td>
                                            <?php
										}
                                             }?>

                                        </tr>
                                        


                                </table>

                            </div> <!-- /widget-content -->

                        </div> <!-- /widget -->
                    </div>
                </div>
            </section>


        </div>
        <!-- /#wrapper -->







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



</body>

</html>
<?php
		
	}else 
	header('location:login.php?deactivate');
?>