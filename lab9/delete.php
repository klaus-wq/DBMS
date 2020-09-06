<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
<?php

if(isset($_POST['id_student'])){
 
$link = mysqli_connect('localhost', 'root', '', 'groups') 
        or die("Ошибка " . mysqli_error($link)); 

$id_student = mysqli_real_escape_string($link, $_POST['id_student']);
     
$result = mysqli_query($link, "DELETE FROM students WHERE id_student = '$id_student'")
        or die("Ошибка " . mysqli_error($link)); 
 
    mysqli_close($link);
    header('Location: main.php');
}

?>

<h2>Удалить студента:</h2>
    <form method='POST'>
    <p>Введите номер студента:<br>
    <input type='text' name='id_student' /></p>
    <input class="btn btn-outline-dark" type='submit' value='Удалить'>  
    </form>
<div>
</body>
</html>
