<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
<?php

$link = mysqli_connect('localhost', 'root', '', 'groups')
    or die("Ошибка " . mysqli_error($link)); 
     
if(isset($_POST['FIO']) && isset($_POST['id_student']) && isset($_POST['mark'])){
 
    $id_student = htmlentities(mysqli_real_escape_string($link, $_POST['id_student']));
    $FIO = htmlentities(mysqli_real_escape_string($link, $_POST['FIO']));
    $mark = htmlentities(mysqli_real_escape_string($link, $_POST['mark']));

    $result = mysqli_query($link, "UPDATE students SET FIO='$FIO', mark='$mark'  WHERE id_student='$id_student'") 
        or die("Ошибка " . mysqli_error($link)); 
 
    if($result)
    mysqli_close($link);
    header('Location: main.php');
}
?>
         
<h2>Редактировать студента:</h2>
<form method='POST'>
<p>Введите номер:<br> 
<input type='text' name='id_student' /></p>
<p>Введите фамилию и имя:<br> 
<input type='text' name='FIO' /></p>
<p>Введите среднюю оценку:<br> 
<input type='text' name='mark' /></p>
<input class="btn btn-outline-dark" type='submit' value='Сохранить'>
</form>
<div>
</body>
</html>

