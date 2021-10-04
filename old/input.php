<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
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

  <nav class="navbar fixed-top navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="zaochnoe.php">Заочное отделение</a>
    <a class="navbar-brand" href="index.php">Маяковская</a>
    <a class="navbar-brand" href="varsh.php">Варшавская</a>
    <a class="navbar-brand" href="pp.php">Парк победы</a>
    <a class="navbar-brand" href="input.php">Добавить ведомость</a>
    <a class="navbar-brand" href="logout.php">Выход</a>
  </div>
</nav>
<div class="container">
    <h2 style="margin-top:50px;">Добро пожаловать, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.</h2>
    <p>Форма добавления ведомости</p>
</div>

  <form enctype="multipart/form-data" method="POST">
    <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000000" />
    <label for="topic">Укажите предмет:</label>
    <input type="text" id='topic' name="topic"> 
    <label for="groups">Выберите группу:</label>
    <select id="groups" name="groups">

      <option value="z012">З-012</option>
      <option value="z013">З-013</option>
      <option value="z014">З-014</option>
      <option value="z015">З-015</option>

      <option value="log111">ЛОГ111</option>
      <option value="kmm111">КММ111</option>
      <option value="pk111">ПК111</option>
      <option value="pk1204">ПК1204</option>
      <option value="pk1304">ПК1304 Маяковская</option>
      <option value="log1309">ЛОГ1309</option>
      <option value="log1310">ЛОГ1310</option>
      <option value="log1311">ЛОГ1311</option>
      <option value="log1312">ЛОГ1312</option>
      <option value="log1313">ЛОГ1313</option>
      <option value="log1201-1">ЛОГ1201/1</option>
      <option value="log1201-2">ЛОГ1201/2</option>

      <option value="km1005">КМ 1005</option>
      <option value="km1006">КМ 1006</option>
      <option value="ek1007">ЭК 1007</option>
      <option value="bd1008">БД 1008</option>
      <option value="km1202">КМ 1202</option>
      <option value="km1305">КМ 1305</option>
      <option value="km1306">КМ 1306</option>
      <option value="km1314">КМ 1314</option>
      <option value="ek1307">ЭК 1307</option>
      <option value="bd1308">БД 1308</option>

      <option value="dn11">ДН11</option>
      <option value="dn12">ДН12</option>
      <option value="pk11">ПК11</option>
      <option value="pk12">ПК12</option>
      <option value="km11">КМ11</option>
      <option value="km12">КМ12</option>
      <option value="ek11">ЭК11</option>
      <option value="bd11">БД11</option>
      <option value="log11">ЛОГ11</option>
      <option value="log12">ЛОГ12</option>
      <option value="log13">ЛОГ13</option>
      <option value="log14">ЛОГ14</option>

      <option value="din1001">ДИН 1001</option>
      <option value="din1002">ДИН 1002</option>
      <option value="pk1003">ПК 1003</option>
      <option value="pk1004">ПК 1004</option>
      <option value="log1009">ЛОГ 1009</option>
      <option value="log1010">ЛОГ 1010</option>
      <option value="log1011">ЛОГ 1011</option>
      <option value="log1012">ЛОГ 1012</option>
      <option value="log1013">ЛОГ 1013</option>

      <option value="din1301">ДИН 1301</option>
      <option value="din1302">ДИН 1302</option>
      <option value="din1303">ДИН 1303</option>
      <option value="pk1303">ПК 1303</option>
      <option value="pk1304p">ПК 1304 Поклонная</option>

      <option value="din1401">ДИН 1401</option>
      <option value="din1402">ДИН 1402</option>
      <option value="pk1403">ПК 1403</option>
      <option value="pk1404">ПК 1404</option>


    </select>
    Отправить этот файл: <input name="userfile" type="file" />
    <input type="submit" value="Отправить ведомость" />
  </form>

<?php

if (!empty($_POST["topic"]) && !empty($_FILES['userfile']['name']) && strlen($_FILES['userfile']['name'])<45) {

$topic = $_POST["topic"];
$group = $_POST["groups"];
$uploaddir = 'upload/';
$str = $_FILES['userfile']['name'];
$uploadfile = $uploaddir . $str;
echo '<pre>';
if (rename($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Файл корректен и был успешно загружен.\n";
} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
}
echo 'Некоторая отладочная информация:';
print_r($_FILES);
print_r($_FILES['userfile']['tmp_name']);
echo "</pre>";


require_once "config.php";

$topic=$_POST["topic"];
$date=date('l jS \of F Y');
$student_group=$_POST["groups"];
$filename=$str;

$query_ins = 
sprintf("INSERT 
INTO vedomost 
(id,topic, v_date, student_group,filename) 
VALUES 
(null,'%s','%s','%s','%s')",
mysqli_real_escape_string($link,$topic), 
mysqli_real_escape_string($link,$date),
mysqli_real_escape_string($link,$student_group),
mysqli_real_escape_string($link,$filename) 
);

if (mysqli_query($link, $query_ins)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($link);
} else {
    echo "<p>Укажите предмет!!! и прикрепите файл!!!</p>";
}
?>
<p>Прикреплять можно сканы или фотографии или текстовые документы (pdf,word) ведомостей</p>
<p>Сканы или фотографии будут показаны в виде миниатюры, клик по которой открывает всё изображение</p>
<p>Текстовые файлы будут показаны как ссылка на файл, клик будет открывать сам файл.</p>
<p>В названии файла,пожалуйста, указывайте предмет (кратко) и группу</p>
<p>Имя файла не должно быть длинее 45 символов!</p>

</form>
</body>
</html>