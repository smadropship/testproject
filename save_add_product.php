<?php
session_start();

include("connection.php");

if (isset($_POST['submit'])) {
    $nameproduct = $_POST['nameproduct'];
    $titleproduct = $_POST['titleproduct'];
    $stock = $_POST['stock'];
    $price = $_POST['price'];
    $weight = $_POST['weight'];
    $wide = $_POST['wide'];
    $long = $_POST['long'];
    $high = $_POST['high'];
    $user_id = $_SESSION['user'];
    $images = $_FILES['images']['name'];
    
    $path = basename($images);
    $upload = move_uploaded_file($_FILES['images']['tmp_name'], $path);


    $sqery = "INSERT INTO `product`( `user_id` ,`nameproduct`, `titleproduct`, `images`, `stock`, `price`, `weight`, `wide`, `long`, `high`) 
                VALUES ('$user_id', '$nameproduct ', '$titleproduct', ' $images ', '$stock ', ' $price ', ' $weight', ' $wide ', ' $long ', ' $high ')";
    $result = mysqli_query($conn, $sqery);

    if ($result) {
        $_SESSION['success'] = "Insert insert successfully";
        header("Location: add_product.php");
    } else {
        $_SESSION['error'] = "Something went wrong";
        header("Location: add_product.php");
    }
}
