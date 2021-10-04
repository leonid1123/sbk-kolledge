<?php

  if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
    $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $location);
    exit;
  }

  require_once "config.php";
  readfile('headerContent.html');//IMPORTANT!!!
  readfile('menuContent.html');//IMPORTANT!!!

  $StudWorksQuery = sprintf("SELECT workPict, workTitle, workLink, workText FROM studworks");
  $StudWorksRes = mysqli_query($link, $StudWorksQuery);
  $rows = mysqli_fetch_all($StudWorksRes,MYSQLI_ASSOC);

  foreach ($rows as $row) {
    echo '<div class="card" style="width: 18rem;">';
    echo '<img src="'."workPicts/".$row["workPict"].'" class="card-img-top" alt="...">';
    echo '<div class="card-body">';
    echo '<h5 class="card-title">'.$row["workTitle"].'</h5>';
    echo '<p class="card-text">'.$row["workText"].'</p>';
    echo '<a href="'.$row["workLink"].'" class="btn btn-primary" target = "_blank">Сыграть</a>';
    echo '</div> </div>';
  }
  
  readfile('footerContent.html');//IMPORTANT!!!