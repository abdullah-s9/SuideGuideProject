<?php

if (empty($_POST["name"])) {
    // die("Name is required");
    die( "<script>
    alert(' فشل تسجيل التسجيل يرجى ادخال اسم المستخدم');
            window.location.href = 'signup.html';  
        </script>");
}

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    // die("Valid email is required");
    die( "<script>
    alert(' فشل تسجيل التسجيل يرجى ادخال ايميل صحيح');
            window.location.href = 'signup.html';  
        </script>");
}




if (strlen($_POST["password"]) < 6) {
    die( "<script>
    alert(' فشل التسجيل كلمة المرور يجب ان تكون 6 أحرف على الأقل');
            window.location.href = 'signup.html';  
        </script>");}

// if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
//     die("Password must contain at least one letter");
// }

// if ( ! preg_match("/[0-9]/", $_POST["password"])) {
//     die("Password must contain at least one number");
// }

if ($_POST["password"] !== $_POST["password_confirmation"]) {
    // die("Passwords must match");
    die( "<script>
    alert(' فشل التسجيل كلمة المرور غير متطايقة ');
            window.location.href = 'signup.html';  
        </script>");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";

$emailSql = " select email from user where email = '$_POST[email]'";




$sql = "INSERT INTO user (name, email, password_hash)
VALUES (?, ?, ?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}
$stmt->bind_param("sss",
                  $_POST["name"],
                  $_POST["email"],
                  $password_hash);
                  
if ($stmt->execute()) {

    header("Location: login.php");
   exit;
    
} else {
    if ($mysqli->errno === 1062) {
        die("email already taken");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}







