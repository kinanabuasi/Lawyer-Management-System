<?php
	session_start();
	if($_SESSION['login']==TRUE AND $_SESSION['status']=='Active'){
		
		//session_start();
		include("db_con/dbCon.php");
		
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
                                <li class="">
                                    <a class="nav-link cus-a" href="#">Full Name: <?php echo $_SESSION['first_Name'];?>
                                        <?php echo $_SESSION['last_Name'];?></a>
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
                <div class="sidebar-heading">My Profile</div>
                <div class="list-group list-group-flush">
                    <a href="lawyer_dashboard.php" class="list-group-item list-group-item-action bg-light">Dashboard</a>
                    <!--lawyer dashboard page-->
                    <a href="Lawyer_add_service.php" class="list-group-item list-group-item-action bg-light">إضافة
                        خدمة</a>
                    <a href="lawyer_edit_profile.php" class="list-group-item list-group-item-action bg-light">تعديل
                        معلومات الحساب</a>
                    <!--lawyer_edit_profile page-->
                    <a href="lawyer_booking.php" class="list-group-item list-group-item-action bg-light">طلبات
                        الخدمة
                        <span id="notificationCounter"
                            class="notification-badge"><?php echo $notificationCount_r; ?></span></a>
                    <!--this page-->
                    <a href="update_password_admin.php" class="list-group-item list-group-item-action bg-light">تحديث
                        كلمة السر</a>
                </div>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <?php if(isset($_GET['done'])){
							echo "<div class='alert alert-danger alert-dismissible fade show'>
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
							<strong>Welcome!</strong> You are login as Lawyer.
							</div>";
						}?>
                <div class="container-fluid">

                    <head>
                        <style>
                        .text-right {
                            text-align: right;
                        }
                        </style>
                    </head>

                    <body>
                        <h3 class="mt-4 text-right">عزيزي المحامي</h3>
                        <p class="text-right">
                            نحن سعداء لرؤيتك قد قمت بتسجيل الدخول إلى نظام إدارة المحامين الخاص بنا. نظامنا يوفر لك
                            الفرصة لتقديم استشارات وخدمات قانونية لعملائك بأمان وثقة وفقًا للسياسات والشروط المحددة.

                            نحن نسعى جاهدين لتوفير بيئة آمنة وموثوقة لك ولعملائك، حيث يمكنك تقديم الخدمات القانونية
                            بكفاءة وسهولة، وتنظيم الجدول الزمني والمواعيد، وإدارة العملاء وتفاصيل القضايا بشكل مركزي.

                            نحن ملتزمون بتطوير وتحسين منصتنا باستمرار لتلبية احتياجاتك وتسهيل عملك كمحامٍ. إذا كان لديك
                            أي استفسارات أو تعليقات، فلا تتردد في التواصل بفريق الدعم لدينا، فهم مستعدون لمساعدتك في أي
                            وقت.

                            نتطلع إلى أن تحقق نجاحًا كبيرًا في استخدام نظامنا لتقديم خدماتك القانونية بكفاءة وجودة
                            عالية. شكرًا لثقتك بنا وانضمامك إلى مجتمعنا.

                            مع خالص التحية،
                            <br>فريق الدعم
                        </p>
                    </body>

</html>
</div>
</div>
<!-- /#page-content-wrapper -->

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

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
    integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
</script>
</body>

</html>
<?php
		
	}else 
	header('location:login.php?deactivate');
?>