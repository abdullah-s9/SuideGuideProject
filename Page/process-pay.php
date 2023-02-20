<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/../database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
     $user = mysqli_fetch_array($result);
      $userName = $user['name'];

     
     $sqlRes = "SELECT * FROM reservations
 WHERE  userName like '$userName'";

 $resultRes = mysqli_query($mysqli,$sqlRes);

 $show = mysqli_fetch_array($resultRes);


//  $userName = $show['userName'];
//  $eventName = $show['eventName'];
//  $eventDescription = $show['eventDescription'];
//  $img = $show['img'];
//  $price = $show['price'];
//  $reservationsTime = $show['reservationsTime'];

if($show == null) {
 $eventName = '';
 $eventDescription = '';
 $img = '';
 $price = '';
 $reservationsTime = '';
}
else{
    
 $userName = $show['userName'];
 $eventName = $show['eventName'];
 $eventDescription = $show['eventDescription'];
 $img = $show['img'];
 $price = $show['price'];
 $reservationsTime = $show['reservationsTime'];

}
 

}


?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    

<link href="css1.css" rel="stylesheet">
</head>
<body>


  <!--  Navبداية الـ -->

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

  <!--  Navنهاية الـ -->


  <div class="container">
  <div class="wrapper wrapper-content animated fadeInleft">
      <div class="row">
        <div class="col-md-3"></div>
          <div class="col-md-6">
              <div class="ibox">
                  <div class="ibox-title text-center">
                      <h4> <strong>
                        شكرا لطلبك <br> <br>
                        رقم الطلب : <?php  echo"لا يوجد" ?>
                      </strong> </h4>
                      
                  </div>
                  <div class="ibox-content">
                      <div class="table-responsive">
                          <table class="table shoping-cart-table">
                              
                              <tr>
                                  <td >
                                      <div >
                                        <img width="100" src="../img/متحف-بريدة.jpg">
                                      </div>
                                  </td>
                                  <td class="desc">
                                      <h4>
                                      <a href="#" class="text-navy">
                                        <?php echo"$eventName"?>
                                    </a>
                                      </h4>
                                      <p class="small">
                                      <?php echo"$eventDescription" ?> 
                                    </p>

  
                            
                                  </td>
  

          
                                  <td>
                                      <h6>
                                        <br>
                                        <?php echo"$price" ?> ريال
                                      </h6>
                                     
                                  </td>
                              </tr>
                              
                          </table>
                      </div>
  
                  </div>
                  
  

                  <center>
                  <div class="ibox-content ">
                      <a href="../index.php" class="btn btn-primary "> العودة لصفحة الرئيسة</a>
                  </div>
                </center>
              </div>
          </div>
          <div class="col-md-3"></div>


          <!-- نهاية الصف-->
      </div>
      


  </div>
  </div>




<!--  Footerبداية الـ -->

<br><br>
<div class="container" style="background-color: #2E2B47; padding: 10px;">
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
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">بوابة المرشد السياحي</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">دليل كمرشد سياحي</a></li>

      </ul>
    </div>
    <div>
      <p class="text-muted" style="text-align: center;">&copy; 2022 Suadi Guide</p>
    </div>
  </footer>
</div>

<!--  Footerنهاية الـ -->

</body>
</html>