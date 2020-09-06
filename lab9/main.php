<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
<h3 style="padding:15px; margin:auto; width:500px;">
Лабораторная работа №9
</h3>
<h5> База данных «Студенты»‎ </h5>

<div class="border-top border-bottom border-dark">
<style>
.layer {
overflow-y: scroll;
width: 100%; /* Ширина блока */
height: 250px; /* Высота блока */
padding: 5px; /* Поля вокруг текста */
}
</style>
<div class="layer">
<?php
$link= mysqli_connect('localhost', 'root', '', 'groups');
$select= mysqli_query($link, "SELECT id_student, FIO, mark FROM students;");
while ($r= mysqli_fetch_array($select)) {
 echo $r['id_student'] . " ";
 echo $r['FIO'] . " " .  "<font color='red'>" ;
 echo $r['mark'] . "</font>" . "<br />";
}
mysqli_close($link);
?>
</div>
</div>

<br>
<br>
<a href="create.php" class="btn btn-outline-dark" >Добавить студента</a><br/><br/>
<a href="delete.php" class="btn btn-outline-dark">Удалить студента</a><br/><br/>
<a href="edit.php" class="btn btn-outline-dark">Редактировать студента</a><br/><br/>

</div>
</body>
</html>
