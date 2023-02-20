<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/../database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();

    $sqlEvent = "SELECT * FROM event
    WHERE id =$_SESSION[event_id]";
    
$resultEvent = mysqli_query($mysqli,$sqlEvent);

// $user = $result->fetch_assoc();
$Event = mysqli_fetch_array($resultEvent);
$eventName = $Event['name'];
$eventDescription = $Event['description'];
$price = $Event['price'];
$img = $Event['img'];
$date = $Event['date'];
}
else
header("Location: ../login.php");


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

  <!--  Navنهاية الـ -->


  <div class="container">
  <div class="wrapper wrapper-content animated fadeInleft">
      <div class="row">
          <div class="col-md-12">
              <div class="ibox">
                  <div class="ibox-title text-center">
                      <span> الحجز الخاصة بك</span>
                      
                  </div>
                  <div class="ibox-content">
                      <div class="table-responsive">
                          <table class="table shoping-cart-table">
                              
                              <tr>
                                  <td >
                                      <div >
                                        <img width="170" src="<?php  echo"$img" ;?>">
                                      </div>
                                  </td>
                                  <td class="desc">
                                      <h3>
                                      <a href="#" class="text-navy">
                                        <?php  echo"$eventName" ;?>
                                      </a>
                                      </h3>
                                      <p class="small">
                                      <?php  echo"$eventDescription" ;?>
                                    </p>

                                        <div >
           وقت الحجز
        :<?php  echo"$date" ;?> 
    </div>
    
                                      <div class="m-t-sm">
                                         <a href="#" class="text-muted"> <i class="fa fa-trash"></i>  حذف </a>
                                          
                                      </div>
                                  </td>
  

          
                                  <td>
                                      <h4>
                                      <?php  echo"$price" ?> 
                                      </h4>
                                  </td>
                              </tr>
                              
                          </table>
                      </div>
  
                  </div>
                  
  

                  <center>
                  <div class="ibox-content ">
                      <a href="payment.html" class="btn btn-primary "><i class="fa fa fa-shopping-cart"></i> الدفع</a>
                  </div>
                </center>
              </div>
          </div>
<!-- 

          <div class="col-md-3">
              <div class="ibox">
                  <div class="ibox-title">
                      <h5>ملخص العربة</h5>
                  </div>
                  <div class="ibox-content">
                      <span>
                        مجموع
                      </span>
                      <h2 class="font-bold">
                          $180,00
                      </h2>
  
                      <hr>
                      <span class="text-muted small">
                          *شامل الضريبة القيمة المضافة
                      </span>
                      <div class="m-t-sm">
                          <div class="btn-group">
                          <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart"></i> الدفع</a>
                          <a href="#" class="btn btn-white btn-sm"> إلغاء</a>
                          </div>
                      </div>
                  </div>
              </div>
  
              <div class="ibox">
                  <div class="ibox-title">
                      <h5>الدعم</h5>
                  </div>
                  <div class="ibox-content text-center">
                      <h3><i class="fa fa-phone"></i> +43 100 783 001</h3>
                      <span class="small">
                        يرجى التواصل معنا إذا كان لديك أي أسئلة. نحن متوفرون على مدار 24 ساعة.
                      </span>
                  </div>
              </div>
          </div> -->

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
