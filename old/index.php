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


$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'log111'");
$result_log111 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'kmm111'");
$result_kmm111 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'pk111'");
$result_pk111 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'pk1204'");
$result_pk1204 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'pk1304'");
$result_pk1304 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'log1309'");
$result_log1309 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'log1310'");
$result_log1310 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'log1311'");
$result_log1311 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'log1312'");
$result_log1312 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'log1313'");
$result_log1313 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'log1201-1'");
$result_log1201_1 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'log1201-2'");
$result_log1201_2 = mysqli_query($link, $query);

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
<nav class="navbar navbar-light bg-light">
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
  <button class="tablinks" onclick="openCity(event, 'log111')">ЛОГ 111</button>
  <button class="tablinks" onclick="openCity(event, 'kmm111')">КММ 111</button>
  <button class="tablinks" onclick="openCity(event, 'pk111')">ПК 111</button>
  <button class="tablinks" onclick="openCity(event, 'pk1204')">ПК 1204</button>
  <button class="tablinks" onclick="openCity(event, 'pk1304')">ПК 1304</button>
  <button class="tablinks" onclick="openCity(event, 'log1309')">ЛОГ 1309</button>
  <button class="tablinks" onclick="openCity(event, 'log1310')">ЛОГ 1310</button>
  <button class="tablinks" onclick="openCity(event, 'log1311')">ЛОГ 1311</button>
  <button class="tablinks" onclick="openCity(event, 'log1312')">ЛОГ 1312</button>
  <button class="tablinks" onclick="openCity(event, 'log1313')">ЛОГ 1313</button>
  <button class="tablinks" onclick="openCity(event, 'log1201-1')">ЛОГ 1201/1</button>
  <button class="tablinks" onclick="openCity(event, 'log1201-2')">ЛОГ 1201/2</button>
</div>



<div id="log111" class="tabcontent">
  <h3>Ведомости группы ЛОГ111</h3>
    <?php
      while ($row = mysqli_fetch_assoc($result_log111)) {
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
      mysqli_free_result($result_log111);
    ?>
</div>

<div id="kmm111" class="tabcontent">
  <h3>Ведомости группы КММ111</h3>
    <?php
    while ($row = mysqli_fetch_assoc($result_kmm111)) {
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
mysqli_free_result($result_kmm111);
?>
</div>

<div id="pk111" class="tabcontent">
  <h3>Ведомости группы ПК111</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_pk111)) {
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
                    mysqli_free_result($result_pk111);
                  ?>
</div>

<div id="pk1204" class="tabcontent">
  <h3>Ведомости группы ПК1204</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_pk1204)) {
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
                    mysqli_free_result($result_pk1204);
    ?>
</div>

<div id="pk1304" class="tabcontent">
  <h3>Ведомости группы ПК1304</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_pk1304)) {
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
                    mysqli_free_result($result_pk1304);
    ?>
</div>

<div id="log1309" class="tabcontent">
  <h3>Ведомости группы ЛОГ1309</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_log1309)) {
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
                    mysqli_free_result($result_log1309);
    ?>
</div>

<div id="log1310" class="tabcontent">
  <h3>Ведомости группы ЛОГ1310</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_log1310)) {
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
                    mysqli_free_result($result_log1310);
    ?>
</div>

<div id="log1311" class="tabcontent">
  <h3>Ведомости группы ЛОГ1311</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_log1311)) {
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
                    mysqli_free_result($result_log1311);
    ?>
</div>

<div id="log1312" class="tabcontent">
  <h3>Ведомости группы ЛОГ1312</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_log1312)) {
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
                    mysqli_free_result($result_log1312);
    ?>
</div>

<div id="log1313" class="tabcontent">
  <h3>Ведомости группы ЛОГ1313</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_log1313)) {
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
                    mysqli_free_result($result_log1313);
    ?>
</div>

<div id="log1201-1" class="tabcontent">
  <h3>Ведомости группы ЛОГ1201/1</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_log1201_1)) {
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
                    mysqli_free_result($result_log1201_1);
    ?>
</div>

<div id="log1201-2" class="tabcontent">
  <h3>Ведомости группы ЛОГ1201/2</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_log1201_2)) {
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
                    mysqli_free_result($result_log1201_2);
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
