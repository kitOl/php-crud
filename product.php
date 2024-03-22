<?php

require_once 'includes/functions.php';

require_once 'config/connect.php';

$product_id = $_GET['id'];

$query = "SELECT * FROM `goods` WHERE `id` = '$product_id'";

$product = mysqli_query($connect, $query);
$product = mysqli_fetch_assoc($product);

// print_array($product);

$query = "SELECT * FROM `comments` WHERE `product_id`='$product_id'";

$comments = mysqli_query($connect, $query);
$comments = mysqli_fetch_all($comments);

// print_array($comments);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Просмотр товара</title>
</head>

<body>

    <a href="/">Главная</a>
    <hr>

    <h2><?= $product['title'] ?></h2>
    <p><?= $product['description'] ?></p>
    <p><b>Цена: </b><?= $product['price'] ?></p>

    <hr>
    <h3>Добавить комментарий</h3>
    <form action="vendor/add_comment.php" method="post">

        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        <textarea name="comment" placeholder="Ваш комментарий"></textarea>
        <button type="submit">Отправить</button>

    </form>

    <hr>
    <h3>Комментарии</h3>
    <ul>
        <?php
        foreach ($comments as $comment) {
        ?>
            <li><?= $comment[2] ?></li>
        <?php
        }
        ?>
    </ul>

</body>

</html>