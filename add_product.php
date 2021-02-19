<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>


</head>

<body>

    <?php if (isset($_SESSION['success'])) : ?>
        <div class="success">
            <?php
            echo $_SESSION['success'];
            ?>
        </div>
    <?php endif; ?>


    <?php if (isset($_SESSION['error'])) : ?>
        <div class="error">
            <?php
            echo $_SESSION['error'];
            ?>
        </div>
    <?php endif; ?>

    <div class="container">

        <h2>Add product</h2>
        <a href="user_page.php" class="btn btn-danger">Home</a>
        <form action="save_add_product.php" method="post" enctype="multipart/form-data">

            <div class="md-3">
                <label for="username">Name product</label>
                <input type="text" class="form-control" name="nameproduct" placeholder="Enter your nameproduct" required>
            </div>
            <div class="md-3">
                <label for="password">title</label>
                <input type="text" class="form-control" name="titleproduct" placeholder="Enter your title" required>
            </div>
            <div class="md-3">
                <label for="password">images</label>
                <input type="file" class="form-control" name="images" required>
            </div>
            <div class="md-3">
                <label for="firstname">Stock</label>
                <input type="text" class="form-control" name="stock" placeholder="Enter your stock" required>
            </div>
            <div class="md-3">
                <label for="firstname">price</label>
                <input type="text" class="form-control" name="price" placeholder="Enter your price" required>
            </div>
            <div class="md-3">
                <label for="lastname">weight</label>
                <input type="text" class="form-control" name="weight" placeholder="Enter your weight" required>
            </div>
            <div class="md-3">
                <label for="lastname">wide</label>
                <input type="text" class="form-control" name="wide" placeholder="Enter your wide" required>
            </div>
            <div class="md-3">
                <label for="lastname">long</label>
                <input type="text" class="form-control" name="long" placeholder="Enter your long" required>
            </div>
            <div class="md-3">
                <label for="lastname">high</label>
                <input type="text" class="form-control" name="high" placeholder="Enter your high" required>
            </div>
            <br>
            <input type="submit" class="btn btn-success" name="submit" value="Submit">

        </form>
    </div>

</body>

</html>
