<?php

require_once '../includes/functions.php';
require_once '../config/connect.php';

// print_array($_POST);

$product_id = $_POST['id'];
$comment = $_POST['comment'];

$query = "INSERT INTO `comments` (`id`, `product_id`, `comment`) VALUES (NULL, '$product_id', '$comment')";

mysqli_query($connect, $query);

// header('Location: /');
header("Location: ../product.php?id=$product_id");
