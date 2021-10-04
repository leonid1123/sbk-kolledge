<?php

  if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
    $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $location);
    exit;
  }

  require_once "config.php";

  $ChapterQuery = sprintf("SELECT DISTINCT chapter FROM library ORDER BY chapter DESC");
  $ChapterRes = mysqli_query($link, $ChapterQuery);
  $rows = mysqli_fetch_all($ChapterRes,MYSQLI_ASSOC);

  readfile('headerContent.html');//IMPORTANT!!!
  readfile('menuContent.html');//IMPORTANT!!!
  echo '<div class="accordion" id="accordionExample">';
  $chap=1;
  foreach ($rows as $row) {

    echo '<div class="accordion-item">';
    echo '<h2 class="accordion-header" id="headingOne'.$chap.'">';
    echo '<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne'.$chap.'" aria-expanded="true" aria-controls="collapseOne'.$chap.'">';
    echo $row["chapter"];
    echo '</button> </h2>';
    echo '<div id="collapseOne'.$chap.'" class="accordion-collapse collapse" aria-labelledby="headingOne'.$chap.'" data-bs-parent="#accordionExample">';
    echo '<div class="accordion-body">';
    $linkQ = sprintf("SELECT linkName,link FROM library WHERE chapter ='".$row["chapter"]."'");
    $linkR = mysqli_query($link, $linkQ);
    $rowS = mysqli_fetch_all($linkR,MYSQLI_ASSOC);
    foreach($rowS as $row1){
      echo '<a href="'.$row1["link"].'">'.html_entity_decode($row1["linkName"]).'</a>';   //<a href="bububu">lalalal</a>
      echo "<br>";
    }
    echo '</div>';
    echo '</div>';
    echo '</div>';
    $chap++;
  }
  echo '</div>';
  
  //readfile('bookmarks.html');
  readfile('footerContent.html');//IMPORTANT!!!
?>