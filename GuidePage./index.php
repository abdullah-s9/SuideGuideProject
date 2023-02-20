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
	<title>لوحة التحكم</title>

	<link href="app.css" rel="stylesheet">
	
	<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>

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
				<a class="sidebar-brand" href="#">
          <span class="align-middle"><?= htmlspecialchars($user["name"]) ?></span>
        </a>

				<ul class="sidebar-nav">


					<li class="sidebar-item active">
						<a class="sidebar-link" href="index.php">
              <i class="align-middle" ></i> <span class="">لوحة التحكم </span>

            </a>
			</li>
					<li class="sidebar-item ">
						<a class="sidebar-link" href="AddEvent.php">
              <i class="align-middle" data-feather=""></i> <span class="">إضافة نشاط  </span>


            </a></li>
					</li>
					<li class="sidebar-item ">
						<a class="sidebar-link" href="orders.php">
              <i class="align-middle" data-feather=""></i> <span class="">الطلبات  </span>


            </a></li>
					<!-- 

					<li class="sidebar-item ">
						<a class="sidebar-link" href="index.html">
              <i class="align-middle" data-feather=""></i> <span class="">تعديل البيانات الشخصية</span>

            </a>
					</li>
					<li class="sidebar-item ">
						<a class="sidebar-link" href="Update.php">
              <i class="align-middle" data-feather=""></i> <span class="">تعديل بيانات النشاط </span>

            </a>
					</li> -->

					<li class="sidebar-item ">
						<a class="sidebar-link" href="logout.php">
              <i class="align-middle" data-feather=""></i> <span class=""> خروج  </span>

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

					<h1 class="h3 mb-3"><strong>تحليل</strong> البيانات</h1>

					<div class="row">
						<div class="" >
							<div class="">
								<div class="row">
									<div class="col-4">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">عدد الحجوزات</h5>

													</div>

												</div>
												<h1 class="mt-1 mb-3">10</h1>
												<div class="mb-0">
													<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
													<span class="text-muted">أقل من الشهر الماضي</span>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">عدد مشاهدات نشاطك</h5>
													</div>


												</div>
												<h1 class="mt-1 mb-3">150</h1>
												<div class="mb-0">
													<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -5.25% </span>
													<span class="text-muted">أكثر من الشهر الماضي بـ</span>
												</div>
											</div>
										</div>
									</div>

									<div class="col-4">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">عدد الاعجابات   </h5>
													</div>

												</div>
												<h1 class="mt-1 mb-3">6</h1>
												<div class="mb-0">
													<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 4% </span>
													<span class="text-muted">أكثر من الشهر الماضي بـ</span>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">عدد المشاهدات للأشنطة بالقصيم</h5>
													</div>
												</div>
												<h1 class="mt-1 mb-3">1400</h1>
												<div class="mb-0">
													<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 10.9% </span>
													<span class="text-muted">أكثر من الشهر الماضي بـ</span>
												</div>
											</div>
										</div>
									</div>

									
									
								</div> <!-- End of row  -->
							</div>
						</div>


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