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
<html dir="rtl">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> Activity Page </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    
 
    <link rel="stylesheet" href="Event.css">
    <!-- <link rel="stylesheet" href="gallery.css"> -->

    <style>
footer{
  padding: 10px;
}
.card-img-top {
    height: 230px;
     width: 100%;
}
</style>


</head>
<body >


 
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Suadi Guide</a>
    </div>
    <?php if (isset($user)): ?>
        
        <ul class="nav navbar-nav navbar-right">
        <li><a href="../logout.php"><span class="glyphicon  glyphicon-log-out"></span> خروج</a></li>
      <li><a href="#"><span class="glyphicon  glyphicon-ok"></span> الطلبات</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-heart"></span> المفضلة</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> عربة التسوق</a></li>
      <li><a href="../login.php"><span class="glyphicon glyphicon-user"></span> <?= htmlspecialchars($user["name"]) ?></a></li>


    </ul>
        
        
    <?php else: ?>
        
        <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon  glyphicon-ok"></span> الطلبات</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-heart"></span> المفضلة</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> عربة التسوق</a></li>
      <li><a href="../login.php"><span class="glyphicon glyphicon-user"></span> دخول </a></li>

    </ul>
    <?php endif; ?>

  </div>
</nav>






  <section class="p-3 container">



<h2 class="topic" >جولة تاريخية في متحف بريدة </h2>


<div class="row ">
  <span class="path col-sm-6" style="text-align:left"> المرشد السياحي : <a href="#" >علي</a>    
    &nbsp &nbsp
    التقيم:
  <span class="fa fa-star" style="color: orange;"></span>
  <span class="fa fa-star" style="color: orange;"></span>
  <span class="fa fa-star" style="color: orange;"></span>
  <span class="fa fa-star" style="color: orange;"></span>
  <span class="fa fa-star"></span>
  </span>
  <span class="path col-sm-6" style="text-align: right"> الصفحة الرئيسية / القصيم / متحف بريدة</span>
    <br> <br>
    </div>

  <!-- عرض الصور  -->   
<div class="row ">
<div class="col-sm-4  ">
<img class="card-img-top   " src="../img/متحف-بريدة.jpg" >
<br> <br>
<img class="card-img-top  " src="../img/متحف-بريدة-6.jpg" >

</div>

<div class="col-sm-4">
<img class="card-img-top " src="../img/متحف-بريدة-5.jpg"  >
<br> <br>
<img class="card-img-top" src="../img/متحف-بريدة-2.jpg" >
</div>
<div class="col-sm-4">
<img class="card-img-top " src="../img/متحف-بريدة-3.jpg"  >
<br> <br>
<img class="card-img-top" src="../img/متحف-بريدة-4.jpg" >
</div>   

</div>  
<!-- نهاية عرض الصور  -->


  <p class="Description">
    
    <h4> الوصف</h4>
    يعرض جانب من تراث المنطقة ويحوي العديد من المقتنيات ويضم قاعات تاريخية وعلمية وثقافية وجناح لرجال العقيلات، وكما أن هناك جناح خاص بالملك عبد العزيز بن عبد الرحمن آل سعود يضم سيارته الخاصة،
     وقاعة للتراث الشعبي، وقاعة لأرامكو السعودية، ويمكن للزائر أن يطلع على عدد من المؤلفات المنشورة عن مدينة بريدة ومنطقة القصيم من خلال مكتبة المتحف. 
                 </p>

        <span class="btn">
          الأوقات المتاحة
        :2023-1-20 08:30pm 
    </span>

      
     
     <button  class="btn  btnRev"><a href="cart.php"> أحجز الآن  </a>  </button>
     <br> <br>
     <a href="#" class="btn"><span class="glyphicon glyphicon-heart"></span> إضافة إلى المفضلة </a>

     <h4> التفاصيل</h4>
      <ul>
        <li> المدة ساعتين  </li>
        <li> إلغاء مجاني </li>
      </ul>
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