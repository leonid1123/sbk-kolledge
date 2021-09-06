<?php
require_once "config.php";

if (!$link) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'dn11'");
$result_dn11 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'dn12'");
$result_dn12 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'pk11'");
$result_pk11 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'pk12'");
$result_pk12 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'km11'");
$result_km11 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'km12'");
$result_km12 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'ek11'");
$result_ek11 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'bd11'");
$result_bd11 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'log11'");
$result_log11 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'log12'");
$result_log12 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'log13'");
$result_log13 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'log14'");
$result_log14 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'din1001'");
$result_din1001 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'din1002'");
$result_din1002 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'pk1003'");
$result_pk1003 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'pk1004'");
$result_pk1004 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'log1009'");
$result_log1009 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'log1010'");
$result_log1010 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'log1011'");
$result_log1011 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'log1012'");
$result_log1012 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'log1013'");
$result_log1013 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'din1301'");
$result_din1301 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'din1302'");
$result_din1302 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'din1303'");
$result_din1303 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'pk1303'");
$result_pk1303 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'pk1304p'");
$result_pk1304p = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'din1401'");
$result_din1401 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'din1402'");
$result_din1402 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'pk1403'");
$result_pk1403 = mysqli_query($link, $query);

$query = sprintf("SELECT topic, v_date, student_group,filename FROM vedomost WHERE student_group LIKE 'pk1404'");
$result_pk1404 = mysqli_query($link, $query);

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
  <button class="tablinks" onclick="openCity(event, 'dn11')">ДН11</button>
  <button class="tablinks" onclick="openCity(event, 'dn12')">ДН12</button>
  <button class="tablinks" onclick="openCity(event, 'pk11')">ПК11</button>
  <button class="tablinks" onclick="openCity(event, 'pk12')">ПК12</button>
  <button class="tablinks" onclick="openCity(event, 'km11')">КМ11</button>
  <button class="tablinks" onclick="openCity(event, 'km12')">КМ12</button>
  <button class="tablinks" onclick="openCity(event, 'ek11')">ЭК11</button>
  <button class="tablinks" onclick="openCity(event, 'bd11')">БД11</button>
  <button class="tablinks" onclick="openCity(event, 'log11')">ЛОГ11</button>
  <button class="tablinks" onclick="openCity(event, 'log12')">ЛОГ12</button>
  <button class="tablinks" onclick="openCity(event, 'log13')">ЛОГ13</button>
  <button class="tablinks" onclick="openCity(event, 'log14')">ЛОГ14</button>

  <button class="tablinks" onclick="openCity(event, 'din1001')">ДИН 1001</button>
  <button class="tablinks" onclick="openCity(event, 'din1002')">ДИН 1002</button>
  <button class="tablinks" onclick="openCity(event, 'pk1003')">ПК 1003</button>
  <button class="tablinks" onclick="openCity(event, 'pk1004')">ПК 1004</button>
  <button class="tablinks" onclick="openCity(event, 'log1009')">ЛОГ 1009</button>
  <button class="tablinks" onclick="openCity(event, 'log1010')">ЛОГ 1010</button>
  <button class="tablinks" onclick="openCity(event, 'log1011')">ЛОГ 1011</button>
  <button class="tablinks" onclick="openCity(event, 'log1012')">ЛОГ 1012</button>
  <button class="tablinks" onclick="openCity(event, 'log1013')">ЛОГ 1013</button>

  <button class="tablinks" onclick="openCity(event, 'din1301')">ДИН 1301</button>
  <button class="tablinks" onclick="openCity(event, 'din1302')">ДИН 1302</button>
  <button class="tablinks" onclick="openCity(event, 'din1303')">ДИН 1303</button>
  <button class="tablinks" onclick="openCity(event, 'pk1303')">ПК 1303</button>
  <button class="tablinks" onclick="openCity(event, 'pk1304p')">ПК 1304</button>

  <button class="tablinks" onclick="openCity(event, 'din1401')">ДИН 1401</button>
  <button class="tablinks" onclick="openCity(event, 'din1402')">ДИН 1402</button>
  <button class="tablinks" onclick="openCity(event, 'pk1403')">ПК 1403</button>
  <button class="tablinks" onclick="openCity(event, 'pk1404')">ПК 1404</button>
</div>

<div id="dn11" class="tabcontent">
  <h3>Ведомости группы ДН 11</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_dn11)) {
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
                    mysqli_free_result($result_dn11);
    ?>
</div>

<div id="dn12" class="tabcontent">
  <h3>Ведомости группы ДН12</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_dn12)) {
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
                    mysqli_free_result($result_dn12);
    ?>
</div>

<div id="pk11" class="tabcontent">
  <h3>Ведомости группы ПК11</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_pk11)) {
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
                    mysqli_free_result($result_pk11);
    ?>
</div>

<div id="pk12" class="tabcontent">
  <h3>Ведомости группы ПК12</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_pk12)) {
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
                    mysqli_free_result($result_pk12);
    ?>
</div>

<div id="km11" class="tabcontent">
  <h3>Ведомости группы КМ11</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_km11)) {
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
                    mysqli_free_result($result_km11);
    ?>
</div>

<div id="km12" class="tabcontent">
  <h3>Ведомости группы КМ12</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_km12)) {
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
                    mysqli_free_result($result_km12);
    ?>
</div>

<div id="ek11" class="tabcontent">
  <h3>Ведомости группы ЭК11</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_ek11)) {
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
                    mysqli_free_result($result_ek11);
    ?>
</div>

<div id="bd11" class="tabcontent">
  <h3>Ведомости группы БД11</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_bd11)) {
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
                    mysqli_free_result($result_bd11);
    ?>
</div>

<div id="log11" class="tabcontent">
  <h3>Ведомости группы ЛОГ11</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_log11)) {
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
                    mysqli_free_result($result_log11);
    ?>
</div>

<div id="log12" class="tabcontent">
  <h3>Ведомости группы ЛОГ12</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_log12)) {
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
                    mysqli_free_result($result_log12);
    ?>
</div>

<div id="log13" class="tabcontent">
  <h3>Ведомости группы ЛОГ13</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_log13)) {
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
                    mysqli_free_result($result_log13);
    ?>
</div>

<div id="log14" class="tabcontent">
  <h3>Ведомости группы ЛОГ14</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_log14)) {
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
                    mysqli_free_result($result_log14);
    ?>
</div>

<div id="din1001" class="tabcontent">
  <h3>Ведомости группы ДИН1001</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_din1001)) {
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
                    mysqli_free_result($result_din1001);
    ?>
</div>

<div id="din1002" class="tabcontent">
  <h3>Ведомости группы ДИН1002</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_din1002)) {
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
                    mysqli_free_result($result_din1002);
    ?>
</div>

<div id="pk1003" class="tabcontent">
  <h3>Ведомости группы ПК1003</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_pk1003)) {
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
                    mysqli_free_result($result_pk1003);
    ?>
</div>

<div id="pk1004" class="tabcontent">
  <h3>Ведомости группы ПК1004</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_pk1004)) {
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
                    mysqli_free_result($result_pk1004);
    ?>
</div>

<div id="log1009" class="tabcontent">
  <h3>Ведомости группы ЛОГ1009</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_log1009)) {
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
                    mysqli_free_result($result_log1009);
    ?>
</div>

<div id="log1010" class="tabcontent">
  <h3>Ведомости группы ЛОГ1010</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_log1010)) {
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
                    mysqli_free_result($result_log1010);
    ?>
</div>

<div id="log1011" class="tabcontent">
  <h3>Ведомости группы ЛОГ1011</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_log1011)) {
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
                    mysqli_free_result($result_log1011);
    ?>
</div>

<div id="log1012" class="tabcontent">
  <h3>Ведомости группы ЛОГ1012</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_log1012)) {
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
                    mysqli_free_result($result_log1012);
    ?>
</div>

<div id="log1013" class="tabcontent">
  <h3>Ведомости группы ЛОГ1013</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_log1013)) {
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
                    mysqli_free_result($result_log1013);
    ?>
</div>

<div id="din1301" class="tabcontent">
  <h3>Ведомости группы ДИН1301</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_din1301)) {
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
                    mysqli_free_result($result_din1301);
    ?>
</div>

<div id="din1302" class="tabcontent">
  <h3>Ведомости группы ДИН1302</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_din1302)) {
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
                    mysqli_free_result($result_din1302);
    ?>
</div>

<div id="din1303" class="tabcontent">
  <h3>Ведомости группы ДИН1303</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_din1303)) {
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
                    mysqli_free_result($result_din1303);
    ?>
</div>

<div id="pk1303" class="tabcontent">
  <h3>Ведомости группы ПК1303</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_pk1303)) {
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
                    mysqli_free_result($result_pk1303);
    ?>
</div>

<div id="pk1304p" class="tabcontent">
  <h3>Ведомости группы ПК1304</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_pk1304p)) {
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

<div id="din1401" class="tabcontent">
  <h3>Ведомости группы ДИН1401</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_din1401)) {
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
                    mysqli_free_result($result_din1401);
    ?>
</div>

<div id="din1402" class="tabcontent">
  <h3>Ведомости группы ДИН1402</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_din1402)) {
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
                    mysqli_free_result($result_din1402);
    ?>
</div>

<div id="pk1403" class="tabcontent">
  <h3>Ведомости группы ПК1403</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_pk1403)) {
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
                    mysqli_free_result($result_pk1403);
    ?>
</div>

<div id="pk1404" class="tabcontent">
  <h3>Ведомости группы ПК1404</h3>
  <?php
                    while ($row = mysqli_fetch_assoc($result_pk1404)) {
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
                    mysqli_free_result($result_pk1404);
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
