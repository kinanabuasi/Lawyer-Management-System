<script>
// Function to fetch notification count using AJAX
function fetchNotificationCount() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var notificationCount = document.getElementById("notificationCount");
            notificationCount.textContent = xhr.responseText;
        }
    };
    xhr.open("GET", "save_notification.php", true);
    xhr.send();
}

// Call the function to fetch notification count when the page loads
window.addEventListener("load", fetchNotificationCount);
</script>

</div>
<!doctype html>
<html lang="ar">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="css/media.css">
    <title>Add a service</title>
    <style>
    .has-error .help-block {
        color: blue;
    }
    </style>

</head>

<body>

    <header class="customnav" style="background-color: #0fbf59;">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg ">
                        <a class="navbar-brand cus-a" href="#">Lawyer Management System</a>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto ">
                                <li class="active">
                                    <a class="nav-link cus-a" href="index.php">Home <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="">
                                    <a class="nav-link cus-a" href="lawyers.php">Lawyers</a>
                                    <!--lawyers.html page-->
                                </li>
                                <li class="">
                                    <a class="nav-link cus-a" href="#">About Us</a>
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
            <div class="bg-light border-right" id="sidebar-wrapper">
                <div class="list-group-item list-group-item-action bg-light">Admin Panel</div>
                <div class="list-group list-group-flush">
                    <a href="admin_dashboard.php" class="list-group-item list-group-item-action bg-light">Dashboard</a>
                    <!--admin dashboard page-->
                    <a href="Add_service.php" class="list-group-item list-group-item-action bg-light">إضافة خدمة</a>
                    <!--Add_service page-->
                    <a href="admin_lawyers_orders.php" class="list-group-item list-group-item-action bg-light">
                        طلبات المحامين
                        <span id="notificationCounter"
                            class="notification-badge"><?php echo $notificationCount; ?></span>
                    </a>
                    
                    <!--admin_lawyer page-->
                    <a href="admin_lawyer.php" class="list-group-item list-group-item-action bg-light">عرض قائمة المحامين</a><!--admin_lawyer page-->
							
                    <a href="admin_user.php" class="list-group-item list-group-item-action bg-light">عرض قائمة
                        المستخدمين</a>
                    <!--admin_user page-->
                </div>
            </div>
            <section class="Add_service_form">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h1>أهلاً بك !!! <i class="fas fa-hand-paper"></i></h1>
                            <h3>اكتب تفاصيل الخدمة <i class="fas fa-hand-point-right"></i></h3>
                        </div>
                        <div class="col-md-6" style="margin-top: 50px; margin-bottom: 100px;">
                            <form action="Admin_add_service_controller.php" method="POST" enctype="multipart/form-data"
                                id="validateForm">

                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="service_type" style="position: relative; left: 55px;">نوع
                                            الخدمة</label>
                                        <select id="service_type" name="service_type" position: absolute; right: 50px;
                                            class="form-control">
                                            <option value=" " selected>إدخال...</option>
                                            <option value="استشارة">استشارة</option>
                                            <option value="مدافعة">مدافعة</option>
                                            <option value="مرافعة">مرافعة</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="sname" style="position: relative; left: 410px;">اسم الخدمة </label>
                                        <input type="text" class="form-control" name="service_name" id="service_name"
                                            style="text-align: right; position: absolute; left: 205px; "
                                            placeholder="  اكتب اسم الخدمة من فضلك">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <textarea name="service_description" id="service_description" cols="65" rows="10"
                                        style="text-align: right; "
                                        placeholder="اكتب وصف وتفاصيل حول الخدمة"></textarea>
                                </div>

                                <div class="form-group " style="margin-top: 40px;">
                                    <label for="price" style="position: relative; left: 540px;">سعر الخدمة</label>
                                    <input type="text" class="form-control" name="service_price" id="service_price"
                                        style="text-align: right; position: absolute; left: 52px;"
                                        placeholder="سعر الخدمة">
                                </div>

                                <div class="form-group col-md-10" style="margin-top: 75px; margin-bottom: 100px;">
                                    <label for="num" style="position: relative; left: 520px;">إضافة صورة</label>
                                    <input type="file" class="form-control" name="fileToUpload" id="service_image"
                                        style="text-align: right; position: absolute; left: 152px; "
                                        oninput="CheckValue(this);">
                                </div>
                                <input name="post" type="submit" class="btn btn-block btn-success "
                                    style=" position: absolute; left: 50px; margin-bottom: 100px;"
                                    value="إضافة الخدمة" />
                                <!--after signup redirect user dashboard page-->
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h5>All rights reserved by Eng. Kinan Abuasi 2023</h5>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
    </script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'>
    </script>

    <script>
    $('#validateForm').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            validating: 'glyphicon glyphicon-refresh'
        },

        fields: {
            service_name: {

                validators: {
                    stringLength: {
                        min: 3,
                        message: ' الرجاء إدخال اسم الخدمة الخاصة بك بحد أدنى 3 محارف',
                    },
                    notEmpty: {
                        message: 'الرجاء إدخال اسم الخدمة الخاصة بك'
                    }
                }
            },
            service_type: {
                validators: {
                    notEmpty: {
                        message: 'اختر نوع الخدمة'
                    }
                }
            },
            service_price: {
                validators: {
                    stringLength: {
                        min: 1,
                        message: 'الرجاء إدخال سعر الخدمة بحد أدنى حرف واحد ',
                    },
                    notEmpty: {
                        message: 'الرجاء إدخال سعر الخدمة بحد أدنى حرف واحد ',
                    }
                }
            },

            service_description: {
                validators: {
                    notEmpty: {
                        message: 'الرجاء إدخال وصفاً للخدمة مع التفاصيل ',
                    },

                }
            },

            //  fileToUpload: {
            //      validators: {
            //         //  notEmpty: {
            //             //  message: 'Please Upload Your Image'
            //         //  }
            //      }
            //  },



        }
    });
    </script>

</body>

</html>