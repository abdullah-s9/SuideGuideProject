<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM guide
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html dir="rtl">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>

	<title>لوحة التحكم</title>

	<link href="app.css" rel="stylesheet">

    <style>
          body{

            font-family: 'DroidArabicKufiRegular'; 
    font-weight: normal; 
    font-style: normal; 
                    }
        </style>
</head>
<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
          <span class="align-middle"><?= htmlspecialchars($user["name"]) ?></span>
        </a>

				<ul class="sidebar-nav">
	

					<li class="sidebar-item ">
						<a class="sidebar-link" href="index.php">
              <i class="align-middle" ></i> <span>لوحة التحكم </span>

            </a>
			</li>
					<li class="sidebar-item active">
						<a class="sidebar-link" href="AddEvent.php">
              <i class="align-middle" data-feather=""></i> <span>إضافة نشاط  </span>


            </a></li>
					</li>
					<li class="sidebar-item ">
						<a class="sidebar-link" href="orders.php">
              <i class="align-middle" data-feather=""></i> <span>الطلبات  </span>


            </a></li>


					<li class="sidebar-item ">
						<a class="sidebar-link" href="logout.php">
              <i class="align-middle" data-feather=""></i> <span> خروج  </span>

            </a>
					</li>
				</ul>

				
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
			</nav>

            <main class="content" style="text-align: center;">
        <div class="container-fluid p-0">


            <div class="row">
                    <div class="row">
                    <div class="col-12">
                    <h2 class="text-uppercase text-center mb-5">  <br>تسجيل  بيانات النشاط</h2>



<form action="process-form.php" method="post" dir="rtl">


        <div class="form-outline">
        <label class="form-label" for="name">الاسم </label><br>
        <input type="text" id="name" name="name">
        </div>
        
        <div class="form-outline">
        <label for="description">الوصف</label><br>
        <textarea id="description" name="description"></textarea>
         </div>
        
         <div class="form-outline">
         <label for="detail">التفاصيل</label><br>
        <textarea id="detail" name="detail"></textarea>
        </div>


        <div class="form-outline">
        <label for="type">نوع النشاط</label><br>
        <input type="text" id="type" name="type">
        </div>

        

        <div class="form-outline">
        <label for="city">المدينة</label><br>
        <input type="text" id="city" name="city">
        </div>

        
        <div class="form-outline">
        <label for="price">السعر</label><br>
        <input type="text" id="price" name="price">
        </div>
        <br>

        <div class="form-outline">
        <label for="img">صور النشاط</label><br>
        <input type="file" id="img" name="img">
        </div>
        <br>


        <label>


            <input type="checkbox" name="terms">
            أوافق على الشروط والاحكام

            
        </label>

        <br><br>

        <button>ارسال</button>

    </form> 

                    </div>
                    </div> <!-- End of row  -->
                </div>
            </div>
        </main>
			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">

						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="#" >Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#" >Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#" >Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#" >Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="app.js"></script>

</body>

</html>