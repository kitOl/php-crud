<?php

require_once '../includes/functions.php';
require_once '../config/connect.php';

// print_array($_POST);

$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];

$query = "INSERT INTO `goods` (`id`, `title`, `description`, `price`) VALUES (NULL, '$title', '$description', '$price')";

mysqli_query($connect, $query);

header('Location: /');
// header('Location: ../index.php');
