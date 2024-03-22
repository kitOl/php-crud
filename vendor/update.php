<?php

require_once '../includes/functions.php';
require_once '../config/connect.php';

// print_array($_POST);

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];

$query = "UPDATE `goods` SET `title` = '$title', `description` = '$description', `price` = '$price' WHERE `goods`.`id` = '$id'";

mysqli_query($connect, $query);

header('Location: /');
// header('Location: ../index.php');
