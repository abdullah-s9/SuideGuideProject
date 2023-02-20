<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM guide
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: index.php");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>
<!DOCTYPE html>
<html>
<head> 
    <meta charset="utf-8">

    <title>login </title>

    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
    <link href="styleLogin.css" rel="stylesheet">
    <style>
      body{
        background-image: url(../img/StartImg2.jpg);
        background-position: center; 
        background-repeat: no-repeat; 
        background-size: cover; 
       
    font-family: 'DroidArabicKufiRegular'; 
    font-weight: normal; 
    font-style: normal; 
 
      }
      .text-white{
        color: white;
      }
    </style>
 </head>
<body class="text-center">   
<main class="form-signin" style="background-color: #f5f5f5;">
  <form method="post">
  <img class="mb-4" src="../img/logo.png" alt="" width="200" height="100">

    
    <h1 class="h3 mb-3 fw-normal">تسجيل الدخول</h1>
    <?php if ($is_invalid): ?>
      <script>
        alert(" فشل تسجيل الدخول الايميل أو كلمة المرور غير صحيح");
    </script>
    <?php endif; ?>
    <div class="form-floating">
    <label for="floatingInput"> الايميل</label>
      <input class="form-control" placeholder="abc@gmail.com" type="email" name="email" id="email"
      value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">

    </div>
    <div class="form-floating">
    <label for="floatingPassword">كلمة المرور</label>
      <input class="form-control"  placeholder="Password" type="password" name="password" id="password">

    </div>

    <button id="button" class="w-100 btn btn-lg btn-primary" type="submit" >دخول</button>
    <div class=" mb-3">
        <a href="signup.html">اذا كنت لم تسجل قم بإنشاء حسابك الآن </a>
    </div>
  </form>
</main>

    
</body>
</html>







