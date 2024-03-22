<?php

require_once '../includes/functions.php';
require_once '../config/connect.php';

// print_array($_GET);
$id = $_GET['id'];

$query = "DELETE FROM `goods` WHERE `goods`.`id` = '$id'";

mysqli_query($connect, $query);

header('Location: /');
// header('Location: ../index.php');
