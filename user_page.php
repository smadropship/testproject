<?php

session_start();
include('connection.php');

if (!$_SESSION['userid']) {
    header("Location: index.php");
}

$sql = "SELECT * FROM `product`";
$result = $conn->query($sql);
// $row = $result->fetch_assoc();
// $nameproduct = $row['nameproduct'];
// $images = $row['images'];
// $titleproduct = $row['titleproduct'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Page</title>

    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>


</head>

<body>
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Workshop</a>
        </div>
    </nav>
    <div class="container">

        <h1>You are Member</h1>
        <h3>Hi, <?php echo $_SESSION['user']; ?></h3>
        <p><a href="logout.php">Logout</a></p>
        <a href="add_product.php" class="btn btn-danger">Add product</a>

    </div>

    <br>

    <div class="container">
        <div class="row">
            <?php
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="card" style="width: 18rem">
                        <img src='<?= $row['images']; ?>' class="card-img-top" height="300px" width="300px">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['nameproduct']; ?></h5>
                            <p class="card-text"><?php echo $row['titleproduct']; ?></p>
                            <p class="text-danger"><?php echo $row['price']; ?>.-</p>
                            <a href="adress.php?product=<?php echo $row['id']; ?>" class="btn btn-primary" name="product">Shop</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    </div>

</body>

</html>