<?php
session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM guide
            WHERE id = {$_SESSION["user_id"]}";
   
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    $guideName = $user['name'];
}

$name = $_POST["name"];
$description = $_POST["description"];
$detail = $_POST["detail"];
$type = $_POST["type"];
$city = $_POST["city"];
$price = $_POST["price"];
$img = $_POST["img"];



$terms = filter_input(INPUT_POST, "terms", FILTER_VALIDATE_BOOL);

if ( ! $terms) {
    die( "<script>
    if (confirm('يجب قبول الشروط والأحكام لأرسال الطلب')) {
        window.location.href = 'AddEvent.php';  } 
    ;</script>");}   

    
$sql = "INSERT INTO event (name, description,detail, type,city,price,img,guideName)
        VALUES (?, ?, ?, ? ,?, ?,?,'$guideName')";

$stmt = mysqli_stmt_init($mysqli);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
 
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "sssssss",
                       $name,
                       $description,
                       $detail,
                       $type,
                       $city,
                       $price,
                       $img);

mysqli_stmt_execute($stmt);

// echo "<script>alert(\"تم ارسال الطلب بنجاح سيتم الرد عليكم خلال 48 ساعة\",5000);</script>";
echo "<script>
if (confirm('تم ارسال الطلب بنجاح سيتم مراجعة طلبكم والرد عليكم خلال 48 ساعة')) {
    window.location.href = 'index.php';  } 
;</script>";

