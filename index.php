<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
}

?>
<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> الصفحة الرئيسية </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">


</head>
<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Suadi Guide</a>
    </div>
    <?php if (isset($user)): ?>
        
        <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon  glyphicon-log-out"></span> خروج</a></li>
      <li><a href="Page/show.php"><span class="glyphicon  glyphicon-ok"></span> الطلبات</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-heart"></span> المفضلة</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> <?= htmlspecialchars($user["name"]) ?></a></li>


    </ul>
        
        
    <?php else: ?>
        
        <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon  glyphicon-ok"></span> الطلبات</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-heart"></span> المفضلة</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> دخول </a></li>

    </ul>
    <?php endif; ?>

  </div>
</nav>



   
  <section class="container">
    <h1 class="title carousel-caption">أكتشف المعالم الطبيعية والتاريخية</h1> 

    <img class="mySlides" src="img/1.jpg"
    style="width:100%; height: 500px;">
    
    <img class="mySlides" src="img/2.jpg"
    style="width:100% ;height: 500px;">
    <img class="mySlides" src="img/3.jpg"
    style="width:100%;height: 500px;">
    <img class="mySlides" src="img/4.jpg"
    style="width:100%;height: 500px;">
  </section>


  <section class="p-3 container">
    <h1>أهم المدن</h1>
    <div class="row ">

      <div class="col-sm-3">
  <div class="card carousel-inner" >     
    <img class="card-img-top " src="img/جازان.jpg" alt="Card image cap">
    <h3 class="carousel-caption">جازان </h3>    
  </div>
      </div>

      <div class="col-sm-3 ">
  <div class="card carousel-inner" >
    <img class="card-img-top" src="img/حائل.jpg" alt="Card image cap" >
    <h3 class="carousel-caption">حائل </h3>  
  </div>
</div>

<a href="Page/CityInSaudi.php">
<div class="col-sm-3" >
  <div class="card carousel-inner" >
    <img class="card-img-top" src="img/Al-Qassim, KSA - القصيم.jpg" alt="Card image cap" >
    <h3 class="carousel-caption"> القصيم </h3>
  </div> 
</div>  
</a>

<div class="col-sm-3">
  <div class="card carousel-inner">     
    <img class="card-img-top " src="img/الرياض.jpg" alt="Card image cap" >
    <h3 class="carousel-caption">الرياض </h3>    
  </div>
      </div>


    </div>
    

</section>


    
    
    <br><br>
    <div class="container">
      <footer class="row  container ">

    
        <div class="col-sm-4">
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">قصتنا  </a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">أهدافنا </a></li>

          </ul>
        </div>

        <div class="col-sm-4">
        
          <ul class="nav ">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">شركاء النجاح</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">إنضم كشريك  </a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">الأسئلة الشائعة </a></li>

          </ul>
        </div>
    
        <div class="col-sm-4">
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="GuidePage/signup.html" class="nav-link p-0 text-muted">إنضم كمرشد سياحي</a></li>
            <li class="nav-item mb-2"><a href="GuidePage/login.php" class="nav-link p-0 text-muted">بوابة المرشد السياحي</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">دليل كمرشد سياحي</a></li>

          </ul>
        </div>
    




        <div>

          <p class="text-muted" style="text-align: center;">&copy; 2022 Suadi Guide</p>
        </div>
      </footer>

    </div>

<script src="main.js"></script>

</body>
</html>