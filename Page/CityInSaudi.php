<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/../database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">



<style>
.content{
  height: 320px;
}

</style>
</head>
<body>

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

<!-- MAIN (Center website) -->
<div class="main">

<hr>

<h2>الأنشطة السياحية بالقصيم</h2>

<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> عرض الكل</button>
  <button class="btn" onclick="filterSelection('nature')"> المناظر الطبيعية</button>
  <button class="btn" onclick="filterSelection('cars')"> الجولات النهارية</button>
  <button class="btn" onclick="filterSelection('museum')"> المتاحف</button>
</div>

<div class="row" >
  <a href="Camp.php" class="column nature">
    <div class="content">
      <img src="../img/N1.jpeg" alt="Mountains" style="width:100%;height: 200px">
      <h4> رحلة تخيم </h4>
      <p>  رحلة تخييم في نفود القصيم عيش المغامرة ومتعة التخييم و التطعيس</p>
    </div>
    </a>
  <a href="Naslh.php" class="column nature" dir="rtl">
    <div class="content">
    <img src="../img/R2.jpeg" alt="Lights" style="width:100%;height: 200px">
    <h4>حصاة النصلة</h4>
    <p>   رحلة برية لرؤية حصاة النصلة أو حصاة عنترة هي صخرة تقع في شمال غرب بريدة ،وتحتوي على النقوش الثمودية </p>
    </div>
    </a>

  
  <a href="Tmyah.php" class="column nature">
    <div class="content">
    <img src="../img/جبل طميه.jpg" alt="Nature" style="width:100%;height: 200px;">
    <h4>جبل طمية</h4>
    <p>   رحلة برية لرؤية جبل طميه الذي يقع شمال غرب منطقة القصيم </p>
    </div>
    </a>
  


  <a href="Aljiwa.php" class="column cars">
    <div class="content">
      <img src="../img/القرية التراثية بعيون الجواء.jpg" alt="Car" style="width:100%;height: 200px">
      <h4>القرية التراثية بعيون الجواء</h4>
      <p>  جولة في القرية التراثية في عيون الجواء التي تحمل أهمية تاريخية </p>
    </div>
    </a>
  <a href="Alkhabra.php" class="column cars">
    <div class="content">
    <img src="../img/alkhabra-1.jpg" alt="Car" style="width:100%;height: 200px">
    <h4> قرية الخبراء التراثية</h4>
    <p> بنيت  قبل أكثر من 200 عام ، وتضم أكثر من 400 منزل</p>
    </div>
    </a>
  <a href="Shenanh.php" class="column cars">
    <div class="content">
    <img src="../img/sh1.jpeg" alt="Car" style="width:100%;height: 200px">
    <h4>برج الشنانة بالرس</h4>
    <p>  رحلة سياحية لبرج الشنانة بالرس لرية واحد من ابرز معالم منطقة القصيم</p>
    </div>
    </a>



  <a href="Al-Aqilat.php" class="column museum ">
    <div class="content">
      <img src="../img/متحف العقيلات.jpg" alt="museum" style="width:100%;height: 200px; ">
      <h4>متحف العقيلات</h4>
      <p> جولة في متحف العقيلات للتعرف على تاريخ العقيلات واشهر رحلاتهم  </p>
    </div>
    </a>
  <a href="Hamd.php" class="column museum">
    <div class="content">
    <img src="../img/متحف حمد.jpg" alt="museum
" style="width:100%;height: 200px">
    <h4>متحف حمد بن ناصر للسيارات الكلاسيكية
    </h4>
    <p>  متحف حمد بن ناصر للسيارات الكلاسيكية يجمع نوادر السيارات  </p>
    </div>
    </a>
  <a class="column museum" href="Buraydah.php">
    <div class="content">
    <img src="../img/متحف-بريدة-1.jpg" alt="museum" style="width:100%;height: 200px">
      <h4>متحف بريدة </h4>
      <p> جولة سياحية في متحف بريدة 
      <br>
              سعر التذكرة 50 ريال
      </p>
    </div>
  </a>
</div>

</div>

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

<script src="main.js"></script>

</body>
</html>
