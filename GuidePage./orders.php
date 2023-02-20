<?php 
session_start();

    
    $mysqli = require __DIR__ . "/../database.php";
    
    $sql = "SELECT * FROM guide
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
     $user = mysqli_fetch_array($result);
      $guideName = $user['name'];


 
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


					<li class="sidebar-item ">
						<a class="sidebar-link" href="index.php">
              <i class="align-middle" ></i> <span class="">لوحة التحكم </span>

            </a>
			</li>
					<li class="sidebar-item ">
						<a class="sidebar-link" href="AddEvent.php">
              <i class="align-middle" data-feather=""></i> <span class="">إضافة نشاط  </span>


            </a></li>
					</li>
					<li class="sidebar-item active">
						<a class="sidebar-link" href="orders.php">
              <i class="align-middle" data-feather=""></i> <span class="">الطلبات  </span>


            </a></li>


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

				<h1 class="h3 mb-3"><strong>الحجوزات</strong> </h1>

				<div class="row">
						<div class="row">
						<div class="col-12">
						<h2 class="text-uppercase text-center mb-5">  <br> الحجوزات الحالية  </h2>

<form>

<table class="table">
    <?php
$sqlRes = "SELECT * FROM reservations
  WHERE  guideName like '$guideName'
  ORDER BY id DESC ";
 
  $resultRes = mysqli_query($mysqli,$sqlRes);
  $show = mysqli_fetch_array($resultRes);
  if($show != null ){
    $id = $show['id'];
    $userName = $show['userName'];
    $eventName = $show['eventName'];
    $eventDescription = $show['eventDescription'];
    $price = $show['price'];
    $reservationsTime = $show['reservationsTime'];
    
  }
  else
 {
    $id ="";
    $userName ="";
    $eventName ="";
    $eventDescription ="";
    $price ="";
    $reservationsTime ="";
 }
    ?>
                        <tr>
                            <th>وقت الحجز</th>
                            <th>السعر</th>
                            <th>الوصف</th>
                            <th>اسم النشاط</th>
                            <th>اسم المستخدم</th>
                            <th>رقم الطلب</th>
                        </tr>
                        <tr>
                        <td> <?php echo"$reservationsTime" ; ?> </td>
                        <td> <?php echo"$price" ; ?> </td>                          
                        <td> <?php echo"$eventDescription" ; ?> </td>
                        <td> <?php echo"$eventName" ; ?> </td>
                        <td> <?php echo"$userName" ; ?> </td>
                        <td> <?php echo"$id" ; ?> </td>

                        </tr>
                    </table>


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