<?php

require_once 'config/connect.php';

$query = "SELECT * FROM `goods`";
$goods = mysqli_query($connect, $query);
$goods = mysqli_fetch_all($goods);

// echo '<pre>';
// print_r($goods);
// echo '</pre>';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Товары</title>
</head>

<body>

  <table>
    <tr>
      <th>id</th>
      <th>Название</th>
      <th>Описание</th>
      <th>Цена</th>
    </tr>
    <?php
    foreach ($goods as $good) {
    ?>
      <tr>
        <td><?= $good[0] ?></td>
        <td><?= $good[1] ?></td>
        <td><?= $good[2] ?></td>
        <td><?= $good[3] ?></td>
      </tr>
    <?php
    }
    ?>
  </table>

</body>

</html>