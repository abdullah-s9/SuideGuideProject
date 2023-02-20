<?php

session_start();
$mysqli = require __DIR__ . "/../database.php";
$_SESSION["event_id"] = 43;

if (isset($_SESSION["user_id"])) {
    
    
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
    <title> Activity Page </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    
 
    <link rel="stylesheet" href="styleEvent.css">



</head>
<body >


 
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../index.php">Suadi Guide</a>
    </div>
    <?php if (isset($user)): ?>
        
        <ul class="nav navbar-nav navbar-right">
        <li><a href="../logout.php"><span class="glyphicon  glyphicon-log-out"></span> خروج</a></li>
      <li><a href="#"><span class="glyphicon  glyphicon-ok"></span> الطلبات</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-heart"></span> المفضلة</a></li>
      <li><a href="../login.php"><span class="glyphicon glyphicon-user"></span> <?= htmlspecialchars($user["name"]) ?></a></li>


    </ul>
        
        
    <?php else: ?>
        
        <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon  glyphicon-ok"></span> الطلبات</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-heart"></span> المفضلة</a></li>
      <li><a href="../login.php"><span class="glyphicon glyphicon-user"></span> دخول </a></li>

    </ul>
    <?php endif; ?>

  </div>
</nav>






  <section class="p-3 container">

<?php 
    $sqlEvent = "SELECT * FROM event
    WHERE id = 43";
    
$resultEvent = mysqli_query($mysqli,$sqlEvent);

// $user = $result->fetch_assoc();
$Event = mysqli_fetch_array($resultEvent);

?>

<h2 class="topic" > <?php echo "$Event[name]"; ?> </h2>


<div class="row ">
  <span class="path col-sm-6" style="text-align:left"> المرشد السياحي : <a href="#" ><?php echo "$Event[guideName]"; ?></a>    
    &nbsp &nbsp
    التقيم:
  <span class="fa fa-star" style="color: orange;"></span>
  <span class="fa fa-star" style="color: orange;"></span>
  <span class="fa fa-star" style="color: orange;"></span>
  <span class="fa fa-star" style="color: orange;"></span>
  <span class="fa fa-star"></span>
  </span>
  <span class="path col-sm-6" style="text-align: right"> الصفحة الرئيسية / القصيم /  <?php echo "$Event[name]"; ?> </span>
    <br> <br>
    </div>

  <!-- عرض الصور  -->   
<div class="row ">
<div class="col-sm-4  ">
<img class="card-img-top   " src="../img/aljiwa-1.jpg" >
<br> <br>
<img class="card-img-top  " src="../img/aljiwa-2.jpg" >
</div>
<div class="col-sm-4">
<img class="card-img-top " src="../img/aljiwa-3.jpg"  >
<br> <br>
<img class="card-img-top" src="../img/aljiwa-4.jpg" >
</div>
<div class="col-sm-4">
<img class="card-img-top " src="../img/aljiwa-5.jpg"  >
<br> <br>
<img class="card-img-top" src="../img/aljiwa-6.jpg" >
</div>   

</div>  
<!-- نهاية عرض الصور  -->


  <p class="Description">
    
    <h4> الوصف</h4>
    <?php echo "$Event[description]"; ?>
</p>   
<div class="row">
<span class="col-sm-7"></span>
     <button  class="btn col-sm-2 "><a href="cartPage.php"><?php echo "  $Event[price] ريال"; ?><br> أحجز الآن  </a>  </button>
     <span class="btn col-sm-3">
          الوقت المتاح
          <?php echo "$Event[date]"; ?>
    </span>   
    </div>
     <br> <br>
     <a href="#" class="btn"><span class="glyphicon glyphicon-heart"></span> إضافة إلى المفضلة </a>

     <h4> التفاصيل</h4>
      <p class="Description">
      <?php echo "$Event[detail]"; ?>

    </p>
</div>

<!-- بداية عرض المرشدين -->

 <!-- نهاية عرض المرشدين -->



</section>
  
  
             <!-- FOOTER بداية الـ  -->

<br><br>

<div class="container" >
  <footer class="container" >


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
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">إنضم كمرشد سياحي</a></li>
        <li class="nav-item mb-2"><a href="guidePage/static/index.html" class="nav-link p-0 text-muted">بوابة المرشد السياحي</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">دليل كمرشد سياحي</a></li>

      </ul>
    </div>

    <div>
      <p class="text-muted" style="text-align: center;">&copy; 2022 Suadi Guide</p>
    </div>
  </footer>
</div>
             <!-- FOOTER نهاية الـ  -->


     
</body>
</html>