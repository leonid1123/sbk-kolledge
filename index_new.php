<?php

  if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
    $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $location);
    exit;
  }

  require_once "config.php";

  $query = sprintf("SELECT newsHeader, newsTitle, newsText, newsDate FROM news");
  $result = mysqli_query($link, $query);

  readfile('headerContent.html');//IMPORTANT!!!
  readfile('menuContent.html');//IMPORTANT!!!
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
    readfile('footerContent.html');//IMPORTANT!!!
  ?>
