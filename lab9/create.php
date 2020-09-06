<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
<?php
if(!empty($_POST['FIO']) && !empty($_POST['mark'])){
 
    $link = mysqli_connect('localhost', 'root', '', 'groups') 
        or die("Ошибка " . mysqli_error($link)); 
     
    $FIO = htmlentities(mysqli_real_escape_string($link, $_POST['FIO']));
    $mark = htmlentities(mysqli_real_escape_string($link, $_POST['mark']));
     
    $result = mysqli_query($link, "INSERT INTO students VALUES(NULL, '$FIO', '$mark')") 
        or die("Ошибка " . mysqli_error($link)); 

    mysqli_close($link);
    header('Location: main.php');
}
?>
<h2>Добавить нового студента:</h2>
<form method='POST'>
<p>Введите фамилию и имя студента:<br> 
<input type='text' name='FIO' /></p>
<p>Введите среднюю оценку:<br> 
<input type='text' name='mark' /></p>
<input class="btn btn-outline-dark" type='submit' value='Добавить'>
</form>
</div>
</body>
</html>
