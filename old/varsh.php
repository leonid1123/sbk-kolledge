<?php
require_once "config.php";

if (!$link) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'km1005'");
$result_km1005 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'km1006'");
$result_km1006 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'ek1007'");
$result_ek1007 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'bd1008'");
$result_bd1008 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'km1202'");
$result_km1202 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'km1305'");
$result_km1305 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'km1306'");
$result_km1306 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'km1314'");
$result_km1314 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'ek1307'");
$result_ek1307 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'bd1308'");
$result_bd1308 = mysqli_query($link, $query);

mysqli_close($link);

?>
<!DOCTYPE html>
<html>
<head>
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
  <button class="tablinks" onclick="openCity(event, 'km1005')">КМ 1005</button>
  <button class="tablinks" onclick="openCity(event, 'km1006')">КМ 1006</button>
  <button class="tablinks" onclick="openCity(event, 'ek1007')">ЭК 1007</button>
  <button class="tablinks" onclick="openCity(event, 'bd1008')">БД 1008</button>
  <button class="tablinks" onclick="openCity(event, 'km1202')">КМ 1202</button>
  <button class="tablinks" onclick="openCity(event, 'km1305')">КМ 1305</button>
  <button class="tablinks" onclick="openCity(event, 'km1306')">КМ 1306</button>
  <button class="tablinks" onclick="openCity(event, 'km1314')">КМ 1314</button>
  <button class="tablinks" onclick="openCity(event, 'ek1307')">ЭК 1307</button>
  <button class="tablinks" onclick="openCity(event, 'bd1308')">БД 1308</button>
</div>

<div id="km1005" class="tabcontent">
  <h3>Ведомости группы КМ1005</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_km1005)) {
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
                    mysqli_free_result($result_km1005);
    ?>
</div>

<div id="km1006" class="tabcontent">
  <h3>Ведомости группы КМ1006</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_km1006)) {
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
                    mysqli_free_result($result_km1006);
    ?>
</div>

<div id="ek1007" class="tabcontent">
  <h3>Ведомости группы ЭК1007</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_ek1007)) {
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
                    mysqli_free_result($result_ek1007);
    ?>
</div>

<div id="bd1008" class="tabcontent">
  <h3>Ведомости группы БД1008</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_bd1008)) {
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
                    mysqli_free_result($result_bd1008);
    ?>
</div>

<div id="km1202" class="tabcontent">
  <h3>Ведомости группы КМ1202</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_km1202)) {
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
                    mysqli_free_result($result_km1202);
    ?>
</div>

<div id="km1305" class="tabcontent">
  <h3>Ведомости группы КМ1305</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_km1305)) {
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
                    mysqli_free_result($result_km1305);
    ?>
</div>

<div id="km1306" class="tabcontent">
  <h3>Ведомости группы КМ1306</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_km1306)) {
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
                    mysqli_free_result($result_km1306);
    ?>
</div>

<div id="km1314" class="tabcontent">
  <h3>Ведомости группы КМ1314</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_km1314)) {
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
                    mysqli_free_result($result_km1314);
    ?>
</div>

<div id="ek1307" class="tabcontent">
  <h3>Ведомости группы ЭК1307</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_ek1307)) {
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
                    mysqli_free_result($result_ek1307);
    ?>
</div>

<div id="bd1308" class="tabcontent">
  <h3>Ведомости группы БД1308</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_bd1308)) {
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
                    mysqli_free_result($result_bd1308);
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
