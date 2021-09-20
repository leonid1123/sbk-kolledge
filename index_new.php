<?php

  if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
    $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $location);
    exit;
  }

  require_once "config.php";
  if (!$link) {
      echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
      echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
      echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
      exit;
  }

  $query = sprintf("SELECT newsHeader, newsTitle, newsText, newsDate FROM news");
  $result = mysqli_query($link, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="container-lg">Неофициальный сайт колледжа</div>
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="index_new.html">Главная</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Карантин 2021</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Маяковская</a></li>
        <li><a class="dropdown-item" href="#">Варшавская</a></li>
        <li><a class="dropdown-item" href="#">Парк победы</a></li>
        <li><a class="dropdown-item" href="#">Заочное отделение</a></li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li><a class="dropdown-item" href="#">Сводные ведомости</a></li>
        <li><a class="dropdown-item" href="#">Приказы 30.04.2021</a></li>
      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Расписание</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Библиотека</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Полезные ссылки</a></li>
        <li><a class="dropdown-item" href="#">Работы студентов</a></li>
        <li><a class="dropdown-item" href="#">Для дипломников</a></li>
      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Контакты преодавателей</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled">Disabled</a>
    </li>
  </ul>
  <?php
    while( $row = mysqli_fetch_assoc($result) ) {
      echo '<div class="container-lg">' ;
      echo '<div class="card text-dark bg-light mb-3" style="max-width: 100%;">';
      echo '<div class="card-header">'.$row["newsHeader"].'</div>';
      echo '<div class="card-body">';
      echo '<h5 class="card-title">'.$row["newsTitle"].'</h5>';
      echo '<p class="card-text">'.$row["newsText"].'</p>';
      echo '<div class="card-footer text-muted">'.$row["newsDate"].'</div>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
    }
    mysqli_free_result($result);
  ?>
</body>

</html>