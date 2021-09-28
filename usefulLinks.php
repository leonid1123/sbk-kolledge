<?php

  if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
    $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $location);
    exit;
  }

  require_once "config.php";
  $ChapterQuery = sprintf("SELECT DISTINCT chapter FROM library");
  $ChapterRes = mysqli_query($link, $ChapterQuery);

  $ChapterLength = mysqli_num_rows($ChapterRes); 

  $rows = mysqli_fetch_all($ChapterRes);

  //$query = sprintf("SELECT chapter, linkName, link FROM library");
  //$result = mysqli_query($link, $query);

  readfile('headerContent.html');//IMPORTANT!!!
  readfile('menuContent.html');//IMPORTANT!!!

 foreach ($rows as $row) {
   echo '<div class="accordion" id="accordionExample">';
     echo '<div class="accordion-item">';
       echo '<h2 class="accordion-header" id="headingOne">';
         echo '<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">';
         echo $row[0];


         echo '</button>';
       echo '</h2>';
       echo '<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">';
         echo '<div class="accordion-body">';
         
         $linkQ = sprintf("SELECT linkName,link FROM library WHERE chapter ='".$row[0]."'");
         $linkR = mysqli_query($link, $linkQ);

        while($linkRow=mysqli_fetch_assoc($linkR)) {
           echo "<a href='".$linkRow['link']."'>".$linkRow['linkName']."</a>"; //<a href=''>link</a>
        }
       echo '</div>';
     echo '</div>';
   echo '</div>';
  } 


  readfile('bookmarks.html');
  readfile('footerContent.html');//IMPORTANT!!!
?>