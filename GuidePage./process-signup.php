<?php

if (empty($_POST["name"])) {
    die( "<script>
    if (confirm('يجب اضافة اسم  ')) {
        window.location.href = 'signup.html';  } 
    ;</script>");


}

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die( "<script>
    if (confirm('يجب اضافة ايميل  ')) {
        window.location.href = 'signup.html';  } 
    ;</script>");}

if (strlen($_POST["password"]) < 8) {
    die( "<script>
    if (confirm('يجب ان تحتوي كلمة المرور على 8 أحرف على الأقل   ')) {
        window.location.href = 'signup.html';  } 
    ;</script>");}

if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    die( "<script>
    if (confirm('يجب ان تحتوي كلمة المرور على حرف واحد على الأقل  ')) {
        window.location.href = 'signup.html';  } 
    ;</script>");
}

if ( ! preg_match("/[0-9]/", $_POST["password"])) {
    die( "<script>
    if (confirm('يجب ان تحتوي كلمة المرور على رقم واحد على الأقل  ')) {
        window.location.href = 'signup.html';  } 
    ;</script>");}

if ($_POST["password"] !== $_POST["password_confirmation"]) {
    die( "<script>
    if (confirm('كلمة المرور غير متطايقة  ')) {
        window.location.href = 'signup.html';  } 
    ;</script>");}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO guide (name, email, password_hash)
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
        die( "<script>
        if (confirm('الايميل مستخدم ')) {
            window.location.href = 'signup.html';  } 
        ;</script>");    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}







