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


$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'z012'");
$result_z012 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'z013'");
$result_z013 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'z014'");
$result_z014 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'z015'");
$result_z015 = mysqli_query($link, $query);

mysqli_close($link);

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf8">
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<nav class="navbar  navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="order.php">Приказы 30.04.2021</a>
    <a class="navbar-brand" href="zaochnoe.php">Заочное отделение</a>
    <a class="navbar-brand" href="total.php">Сводные ведомости</a>
    <a class="navbar-brand" href="index.php">Маяковская</a>
    <a class="navbar-brand" href="varsh.php">Варшавская</a>
    <a class="navbar-brand" href="pp.php">Парк победы</a>
  </div>
</nav>
<div class="container">
    <h2>Экзаменационные ведомости</h2>
    <p>Выберите группу</p>
</div>


<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'z014')">З-014</button>
  <button class="tablinks" onclick="openCity(event, 'z012')">З-012</button>
  <button class="tablinks" onclick="openCity(event, 'z013')">З-013</button>
  <button class="tablinks" onclick="openCity(event, 'z015')">З-015</button>
</div>



<div id="z014" class="tabcontent">
  <h3>Ведомости группы З-014</h3>
    <?php
      while ($row = mysqli_fetch_assoc($result_z014)) {
        $path_parts = pathinfo($row["filename"]);
        if ($path_parts['extension'] == 'jpg' || $path_parts['extension'] == 'png' ) {
           
          echo "<h4>".$row["topic"]."</h4>";
          echo "<p>".$row["v_date"]."</p>";
          echo "<a href='upload/".$row["filename"]."'><img class='img-thumbnail' src='upload/".$row["filename"]."'> </a>";
          
        } else {
          
          echo "<h4>".$row["topic"]."</h4>";
          echo "<p>".$row["v_date"]."</p>";
          echo "<a href='upload/".$row["filename"]."'>Ведомость тут</a>";
          
        }
      }
      mysqli_free_result($result_z014);
    ?>
</div>

<div id="z012" class="tabcontent">
  <h3>Ведомости группы З-012</h3>
    <?php
    while ($row = mysqli_fetch_assoc($result_z012)) {
      $path_parts = pathinfo($row["filename"]);
      if ($path_parts['extension'] == 'jpg' || $path_parts['extension'] == 'png' ) {
        echo "<h4>".$row["topic"]."</h4>";
        echo "<p>".$row["v_date"]."</p>";
        echo "<a href='upload/".$row["filename"]."'><img class='img-thumbnail' src='upload/".$row["filename"]."'> </a>";
      } else {
        echo "<h4>".$row["topic"]."</h4>";
        echo "<p>".$row["v_date"]."</p>";
        echo "<a href='upload/".$row["filename"]."'>Ведомость тут</a>";
      }
}
mysqli_free_result($result_z012);
?>
</div>

<div id="z013" class="tabcontent">
  <h3>Ведомости группы З-013</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_z013)) {
                      $path_parts = pathinfo($row["filename"]);
                      if ($path_parts['extension'] == 'jpg' || $path_parts['extension'] == 'png' ) {
                        echo "<h4>".$row["topic"]."</h4>";
                        echo "<p>".$row["v_date"]."</p>";
                        echo "<a href='upload/".$row["filename"]."'><img class='img-thumbnail' src='upload/".$row["filename"]."'> </a>";
                      } else {
                        echo "<h4>".$row["topic"]."</h4>";
                        echo "<p>".$row["v_date"]."</p>";
                        echo "<a href='upload/".$row["filename"]."'>Ведомость тут</a>";
                      
                      }
                    }
                    mysqli_free_result($result_z013);
                  ?>
</div>

<div id="z015" class="tabcontent">
  <h3>Ведомости группы З-015</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_z015)) {
                      $path_parts = pathinfo($row["filename"]);
                      if ($path_parts['extension'] == 'jpg' || $path_parts['extension'] == 'png' ) {
                        echo "<h4>".$row["topic"]."</h4>";
                        echo "<p>".$row["v_date"]."</p>";
                        echo "<a href='upload/".$row["filename"]."'><img class='img-thumbnail' src='upload/".$row["filename"]."'> </a>";
                      } else {
                        echo "<h4>".$row["topic"]."</h4>";
                        echo "<p>".$row["v_date"]."</p>";
                        echo "<a href='upload/".$row["filename"]."'>Ведомость тут</a>";
                      
                      }
                    }
                    mysqli_free_result($result_z015);
    ?>
</div>



<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
   
</body>
</html> 
